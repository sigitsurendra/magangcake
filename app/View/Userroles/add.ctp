<div class="userroles form">
<?php echo $this->Form->create('Userrole'); ?>
	<fieldset>
		<legend><?php echo __('Add Userrole'); ?></legend>
	<?php
		echo $this->Form->input('idUser');
		echo $this->Form->input('idRole');
		echo $this->Form->input('idEducationContactPerson');
		echo $this->Form->input('idStudent');
		echo $this->Form->input('idCompanyContactPerson');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Userroles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educationcontactpeople'), array('controller' => 'educationcontactpeople', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educationcontactperson'), array('controller' => 'educationcontactpeople', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companycontactpeople'), array('controller' => 'companycontactpeople', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companycontactperson'), array('controller' => 'companycontactpeople', 'action' => 'add')); ?> </li>
	</ul>
</div>
