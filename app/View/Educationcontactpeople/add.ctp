<div class="educationcontactpeople form">
<?php echo $this->Form->create('Educationcontactperson'); ?>
	<fieldset>
		<legend><?php echo __('Add Educationcontactperson'); ?></legend>
	<?php
		echo $this->Form->input('Name');
		echo $this->Form->input('Phone1');
		echo $this->Form->input('Phone2');
		echo $this->Form->input('Phone3');
		echo $this->Form->input('Email');
		echo $this->Form->input('idEducationOrganization');
		echo $this->Form->input('Visible');
		echo $this->Form->input('CreatedDate');
		echo $this->Form->input('LastUpdateDate');
		echo $this->Form->input('CreatedBy');
		echo $this->Form->input('LastUpdateBy');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Educationcontactpeople'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Educationorganizations'), array('controller' => 'educationorganizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educationorganization'), array('controller' => 'educationorganizations', 'action' => 'add')); ?> </li>
	</ul>
</div>
