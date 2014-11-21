<div class="studentorganizations form">
<?php echo $this->Form->create('Studentorganization'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Studentorganization'); ?></legend>
	<?php
		echo $this->Form->input('idStudent');
		echo $this->Form->input('idEducationOrganization');
		echo $this->Form->input('YearStart');
		echo $this->Form->input('YearEnd');
		echo $this->Form->input('Visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Studentorganization.idStudent,idEducationOrganization')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Studentorganization.idStudent,idEducationOrganization'))); ?></li>
		<li><?php echo $this->Html->link(__('List Studentorganizations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educationorganizations'), array('controller' => 'educationorganizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educationorganization'), array('controller' => 'educationorganizations', 'action' => 'add')); ?> </li>
	</ul>
</div>
