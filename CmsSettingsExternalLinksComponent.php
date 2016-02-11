<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 11.02.2016
 */
namespace skeeks\cms\assetsAuto;

use yii\helpers\ArrayHelper;

/**
 * Class CmsSettingsExternalLinksComponent
 * @package skeeks\cms\assetsAuto
 */
class CmsSettingsExternalLinksComponent extends \skeeks\cms\base\Component
{
    /**
     * @var bool
     */
    public $enabled = true;

    /**
     * Do not change the links in which there are domain names
     * @var string
     */
    public $noReplaceLinksOnDomainsString = "";

    /**
     * @var bool Do not change absolute references to the domain name obtained from the information \Yii::$app->request->hostInfo
     */
    public $noReplaceLocalDomain = true;

    /**
     * @var bool Include links in the coding b64_encode
     */
    public $enabledB64Encode = true;

    /**
     * Можно задать название и описание компонента
     * @return array
     */
    static public function descriptorConfig()
    {
        return array_merge(parent::descriptorConfig(), [
            'name'          => 'Преобразование внешних ссылок',
        ]);
    }

    /**
     * Файл с формой настроек, по умолчанию
     *
     * @return string
     */
    public function getConfigFormFile()
    {
        $class = new \ReflectionClass($this->className());
        return dirname($class->getFileName()) . DIRECTORY_SEPARATOR . 'forms/_settings.php';
    }



    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['enabled'], 'boolean'],
            [['noReplaceLocalDomain'], 'boolean'],
            [['enabledB64Encode'], 'boolean'],
            [['noReplaceLinksOnDomainsString'], 'string'],
        ]);
    }

    public function attributeLabels()
    {
        return ArrayHelper::merge(parent::attributeLabels(), [
            'enabled'                                   => 'Включена',
            'noReplaceLocalDomain'                      => 'Не менять абсолютные локальные ссылки',
            'enabledB64Encode'                          => 'Преобразовывать в b64',
            'noReplaceLinksOnDomainsString'             => 'Ссылки с этими доменами не будут подменяться',
        ]);
    }
}