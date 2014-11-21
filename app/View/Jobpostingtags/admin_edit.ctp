<div class="jobpostingtags form">
<?php echo $this->Form->create('Jobpostingtag'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Jobpostingtag'); ?></legend>
	<?php
		echo $this->Form->input('idTag');
		echo $this->Form->input('idJobPosting');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Jobpostingtag.idTag,idJobPosting')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Jobpostingtag.idTag,idJobPosting'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobpostingtags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobpostings'), array('controller' => 'jobpostings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobposting'), array('controller' => 'jobpostings', 'action' => 'add')); ?> </li>
	</ul>
</div>
