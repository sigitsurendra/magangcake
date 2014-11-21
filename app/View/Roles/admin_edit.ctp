<div class="roles form">
<?php echo $this->Form->create('Role'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Role'); ?></legend>
	<?php
		echo $this->Form->input('idRole');
		echo $this->Form->input('Name');
		echo $this->Form->input('Visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Role.idRole')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Role.idRole'))); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?></li>
	</ul>
</div>
