<div class="studentexpertises form">
<?php echo $this->Form->create('Studentexpertise'); ?>
	<fieldset>
		<legend><?php echo __('Edit Studentexpertise'); ?></legend>
	<?php
		echo $this->Form->input('idExpertise');
		echo $this->Form->input('idStudent');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Studentexpertise.idExpertise,idStudent')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Studentexpertise.idExpertise,idStudent'))); ?></li>
		<li><?php echo $this->Html->link(__('List Studentexpertises'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expertises'), array('controller' => 'expertises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expertise'), array('controller' => 'expertises', 'action' => 'add')); ?> </li>
	</ul>
</div>
