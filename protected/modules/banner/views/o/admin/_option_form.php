<?php
/**
 * Banners (banners)
 * @var $this AdminController
 * @var $model Banners
 * @var $form CActiveForm
 * version: 1.3.0
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2014 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/mod-banner
 * @contact (+62)856-299-4114
 *
 */
?>

<?php echo CHtml::beginForm(Yii::app()->createUrl($this->route), 'get', array(
	'name' => 'gridoption',
));
$columns   = array();
$exception = array('id');
foreach($model->metaData->columns as $key => $val) {
	if(!in_array($key, $exception)) {
		$columns[$key] = $key;
	}
}
?>
<ul>
	<?php foreach($columns as $val): ?>
	<li>
		<?php echo CHtml::checkBox('GridColumn['.$val.']'); ?>
		<?php echo CHtml::label($val, 'GridColumn_'.$val); ?>
	</li>
	<?php endforeach; ?>
</ul>
<?php echo CHtml::endForm(); ?>
