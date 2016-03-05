<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 27.03.2015
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \skeeks\cms\models\WidgetConfig */

?>
<?= $form->fieldSet('Основное'); ?>
    <?= $form->field($model, 'enabled')->radioList(\Yii::$app->formatter->booleanFormat)->hint('Эта опция, отключает и включает работу всего компонента. Отключив ее все другие настройки не будут учитываться.'); ?>
<?= $form->fieldSetEnd(); ?>

<?= $form->fieldSet('Дополнительно'); ?>
    <?= $form->field($model, 'noReplaceLocalDomain')->radioList(\Yii::$app->formatter->booleanFormat); ?>
    <?= $form->field($model, 'enabledB64Encode')->radioList(\Yii::$app->formatter->booleanFormat); ?>
    <?= $form->field($model, 'noReplaceLinksOnDomainsString')->textarea([
        'rows' => 5
    ])->hint('Список доменных имен через запятую.'); ?>
<?= $form->fieldSetEnd(); ?>

