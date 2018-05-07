<?php
/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $generator yii\gii\generators\crud\Generator */

echo $form->field($generator, 'db');
echo $form->field($generator, 'tableName');
echo $form->field($generator, 'enableI18N')->checkbox();
echo $form->field($generator, 'messageCategory');
//echo $form->field($generator, 'nsTraits');

echo $form->field($generator, 'nsModel');
echo $form->field($generator, 'modelClass');
echo $form->field($generator, 'baseModelClass');
echo $form->field($generator, 'skippedColumns');
echo $form->field($generator, 'generateQuery')->checkbox();
echo $form->field($generator, 'queryNs');
echo $form->field($generator, 'queryBaseClass');
?>
<div class="row">
    <div class="col-md-6">
<?= $form->field($generator, 'generateLabelsFromComments')->checkbox(); ?>
    </div>
    <div class="col-md-6">
<?= $form->field($generator, 'useTablePrefix')->checkbox(); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
<?= $form->field($generator, 'generateBaseOnly')->checkbox(); ?>
    </div>
    <div class="col-md-6">
<?= $form->field($generator, 'generateAttributeHints')->checkbox(); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
<?= $form->field($generator, 'generateRelations')->dropDownList([
    \mootensai\enhancedgii\model\Generator::RELATIONS_NONE => 'No relations',
    \mootensai\enhancedgii\model\Generator::RELATIONS_ALL => 'All relations',
    \mootensai\enhancedgii\model\Generator::RELATIONS_ALL_INVERSE => 'All relations with inverse',
]); ?>
    </div>
</div>
<?= $form->field($generator, 'optimisticLock'); ?>

<?php
echo $form->field($generator, 'UUIDColumn');
//echo "<h4>Soft Delete Trait</h4>";
//echo $form->field($generator, 'deletedBy');
//echo $form->field($generator, 'deletedAt');