<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Engine\ActionFilter;
use Bitrix\Main\Component\ParameterSigner;
use Bitrix\Main\Loader;

class CCustomAjax extends CBitrixComponent implements Controllerable
{

    public function __construct($component = null)
    {
        Loader::includeModule('iblock');
        parent::__construct($component);
    }

    /**
     * @return array
     */
    public function configureActions()
    {
        return [
            'main' => [
                'prefilters' => [
                    new ActionFilter\HttpMethod(
                        array(ActionFilter\HttpMethod::METHOD_POST)
                    ),
                    new ActionFilter\Csrf(),
                ],
                'postfilters' => []
            ]
        ];
    }

    protected function listKeysSignedParameters(){
        return [
            'IBLOCK_ID',
            'IBLOCK_TYPE',
            'EVENT_NAME'
        ];
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }


    /**
     * @param string $param2
     * @param string $param1
     * @return array
     */
    public function mainAction(
        $name = '',
        $phone = '',
        $email = '',
        $message = '',
        $signedParameters = ''
    )
    {
        $signer = new ParameterSigner;
        $arParams = $signer->unsignParameters($this->__name, $signedParameters);

        $arResult = [
            "NAME" => $name,
            "PHONE" => $phone,
            "EMAIL" => $email,
            "MESSAGE" => $message,
            ];
        foreach ($arResult as $name => &$args) {

            $args = trim(strip_tags($args));

            if(!strlen($args))
                unset($arResult[$name]);
        }

        if(strlen($arResult['NAME']) > 0){

            $el = new CIBlockElement;

            $arLoadProductArray = Array(
                "IBLOCK_SECTION_ID" => false,
                "IBLOCK_ID"      => $arParams['IBLOCK_ID'],
                "NAME"           => $arResult['NAME'],
                "ACTIVE"         => "Y",
                "PREVIEW_TEXT"   => implode("\n\r",$arResult),
            );

            if($el->Add($arLoadProductArray)){
                CEvent::Send($arParams['EVENT_NAME'], SITE_ID, $arResult);
                die("MF000");
            }
            else
                die("MF255");
        }else
            die("MF255");
    }

}