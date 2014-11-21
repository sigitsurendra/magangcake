<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit User'); ?></legend>
	<?php
		echo $this->Form->input('idUser');
		echo $this->Form->input('UserName');
		echo $this->Form->input('Password');
		echo $this->Form->input('LastLoginDate');
		echo $this->Form->input('LoginAttempt');
		echo $this->Form->input('idActivationStatus');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.idUser')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.idUser'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
