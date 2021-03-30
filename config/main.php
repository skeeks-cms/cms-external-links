<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 11.02.2016
 */
return
    [
        'bootstrap' => ['externalLinks'],

        'components' => [
            'urlManager' => [
                'rules' => [
                    '~sx-redirect' => '/externallinks/redirect/redirect',
                ],
            ],

            'externalLinks' => [
                'class' => 'skeeks\cms\externalLinks\CmsExternalLinksComponent',

                'noReplaceLinksOnDomains' => [
                    'skeeks.com',
                    'cms.skeeks.com',
                ],
            ],

            'cmsSettingsExternalLinks' => [
                'class' => 'skeeks\cms\externalLinks\CmsSettingsExternalLinksComponent',
            ],
        ],

        'modules' =>
            [
                'externallinks' =>
                    [
                        'class' => 'skeeks\yii2\externalLinks\ExternalLinksModule',
                    ],
            ],
    ];