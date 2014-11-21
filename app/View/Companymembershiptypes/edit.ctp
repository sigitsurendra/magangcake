<div class="companymembershiptypes form">
<?php echo $this->Form->create('Companymembershiptype'); ?>
	<fieldset>
		<legend><?php echo __('Edit Companymembershiptype'); ?></legend>
	<?php
		echo $this->Form->input('idMembershipType');
		echo $this->Form->input('Name');
		echo $this->Form->input('Description');
		echo $this->Form->input('Visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Companymembershiptype.idMembershipType')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Companymembershiptype.idMembershipType'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companymembershiptypes'), array('action' => 'index')); ?></li>
	</ul>
</div>
