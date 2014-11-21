<div class="workexperiences form">
<?php echo $this->Form->create('Workexperience'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Workexperience'); ?></legend>
	<?php
		echo $this->Form->input('idWorkExperiences');
		echo $this->Form->input('Title');
		echo $this->Form->input('Company');
		echo $this->Form->input('StartDate');
		echo $this->Form->input('EndDate');
		echo $this->Form->input('Description');
		echo $this->Form->input('ReferenceName');
		echo $this->Form->input('ReferencePhone');
		echo $this->Form->input('SupportFilePath');
		echo $this->Form->input('idStudent');
		echo $this->Form->input('Visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Workexperience.idWorkExperiences')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Workexperience.idWorkExperiences'))); ?></li>
		<li><?php echo $this->Html->link(__('List Workexperiences'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
