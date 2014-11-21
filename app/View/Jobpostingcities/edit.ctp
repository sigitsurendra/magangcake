<div class="jobpostingcities form">
<?php echo $this->Form->create('Jobpostingcity'); ?>
	<fieldset>
		<legend><?php echo __('Edit Jobpostingcity'); ?></legend>
	<?php
		echo $this->Form->input('idJobPosting');
		echo $this->Form->input('idCity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Jobpostingcity.idJobPosting,idCity')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Jobpostingcity.idJobPosting,idCity'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobpostingcities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobpostings'), array('controller' => 'jobpostings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobposting'), array('controller' => 'jobpostings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
	</ul>
</div>
