<div class="industrycategories form">
<?php echo $this->Form->create('Industrycategory'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Industrycategory'); ?></legend>
	<?php
		echo $this->Form->input('Name');
		echo $this->Form->input('Visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Industrycategories'), array('action' => 'index')); ?></li>
	</ul>
</div>
