<?php

use almirb\inflectorbr\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator mootensai\enhancedgii\crud\Generator */

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->searchModelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-search">

    <?= "<?php " ?>$form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        //'options' => [
        //    'data-pjax' => 1
        //],
    ]); ?>

<?php
$count = 0;
foreach ($generator->getColumnNames() as $attribute) {
    if (!in_array($attribute, $generator->skippedColumns)) {
        if (++$count < 6) {
            echo "    <?= " . $generator->generateActiveSearchField($attribute, $generator->generateFK()) . " ?>\n\n";
        } else {
            echo "    <?php /* echo " . $generator->generateActiveSearchField($attribute, $generator->generateFK()) . " */ ?>\n\n";
        }
    }
}
?>
    <div class="form-group">
        <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Search') ?>, ['class' => 'btn btn-primary']) ?>
        <?= "<?= " ?>Html::resetButton(<?= $generator->generateString('Reset') ?>, ['class' => 'btn btn-default']) ?>
    </div>

    <?= "<?php " ?>ActiveForm::end(); ?>

</div>
