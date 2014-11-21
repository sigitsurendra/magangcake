<div class="students form">
<?php echo $this->Form->create('Student'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Student'); ?></legend>
	<?php
		echo $this->Form->input('Name');
		echo $this->Form->input('Phone1');
		echo $this->Form->input('Phone2');
		echo $this->Form->input('Phone3');
		echo $this->Form->input('Address');
		echo $this->Form->input('Resume');
		echo $this->Form->input('Email1');
		echo $this->Form->input('Email2');
		echo $this->Form->input('website');
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

		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Workexperiences'), array('controller' => 'workexperiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Workexperience'), array('controller' => 'workexperiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Userroles'), array('controller' => 'userroles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Userrole'), array('controller' => 'userroles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizationexperiences'), array('controller' => 'organizationexperiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organizationexperiences'), array('controller' => 'organizationexperiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentorganizations'), array('controller' => 'studentorganizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentorganization'), array('controller' => 'studentorganizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentexpertises'), array('controller' => 'studentexpertises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentexpertise'), array('controller' => 'studentexpertises', 'action' => 'add')); ?> </li>
	</ul>
</div>
