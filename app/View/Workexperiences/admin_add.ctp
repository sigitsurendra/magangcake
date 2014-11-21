<div class="workexperiences form">
<?php echo $this->Form->create('Workexperience'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Workexperience'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Workexperiences'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
