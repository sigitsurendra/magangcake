<div class="applications form">
<?php echo $this->Form->create('Application'); ?>
	<fieldset>
		<legend><?php echo __('Edit Application'); ?></legend>
	<?php
		echo $this->Form->input('idApplication');
		echo $this->Form->input('ApplicationDate');
		echo $this->Form->input('idStudent');
		echo $this->Form->input('idJobPosting');
		echo $this->Form->input('idApplicationStatus');
		echo $this->Form->input('Visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Application.idApplication')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Application.idApplication'))); ?></li>
		<li><?php echo $this->Html->link(__('List Applications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobpostings'), array('controller' => 'jobpostings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobposting'), array('controller' => 'jobpostings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applicationstatuses'), array('controller' => 'applicationstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicationstatus'), array('controller' => 'applicationstatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
