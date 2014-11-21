<div class="activationstatuses form">
<?php echo $this->Form->create('Activationstatus'); ?>
	<fieldset>
		<legend><?php echo __('Add Activationstatus'); ?></legend>
	<?php
		echo $this->Form->input('Description');
		echo $this->Form->input('Visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Activationstatuses'), array('action' => 'index')); ?></li>
	</ul>
</div>
