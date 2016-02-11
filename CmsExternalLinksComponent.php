<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 10.02.2016
 */
namespace skeeks\cms\externalLinks;
use skeeks\cms\externalLinks\CmsSettingsExternalLinksComponent;
use skeeks\yii2\externalLinks\ExternalLinksComponent;
use yii\web\Application;

/**
 * @property CmsSettingsExternalLinksComponent $settings
 *
 * Class CmsExternalLinksComponent
 * @package skeeks\cms\externalLinks
 */
class CmsExternalLinksComponent extends ExternalLinksComponent
{
    /**
     * @return CmsSettingsExternalLinksComponent
     */
    public function getSettings()
    {
        return \Yii::$app->cmsSettingsExternalLinks;
    }

    public function init()
    {
        $this->enabled = $this->settings->enabled;

        foreach ($this->settings->attributeLabels() as $attribute => $label)
        {
            if ($this->canSetProperty($attribute))
            {
                $this->{$attribute} = $this->settings->{$attribute};
            }
        }
    }
}