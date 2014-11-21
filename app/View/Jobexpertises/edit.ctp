<div class="jobexpertises form">
<?php echo $this->Form->create('Jobexpertise'); ?>
	<fieldset>
		<legend><?php echo __('Edit Jobexpertise'); ?></legend>
	<?php
		echo $this->Form->input('idJobPosting');
		echo $this->Form->input('idExpertise');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Jobexpertise.idExpertise, idJobPosting')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Jobexpertise.idExpertise, idJobPosting'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobexpertises'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Expertises'), array('controller' => 'expertises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expertise'), array('controller' => 'expertises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobpostings'), array('controller' => 'jobpostings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Posting'), array('controller' => 'jobpostings', 'action' => 'add')); ?> </li>
	</ul>
</div>
