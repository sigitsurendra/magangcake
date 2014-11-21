<div class="jobpostingtags view">
<h2><?php echo __('Jobpostingtag'); ?></h2>
	<dl>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobpostingtag['Tag']['Name'], array('controller' => 'tags', 'action' => 'view', $jobpostingtag['Tag']['idTag'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jobposting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobpostingtag['Jobposting']['idJobPosting'], array('controller' => 'jobpostings', 'action' => 'view', $jobpostingtag['Jobposting']['idJobPosting'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobpostingtag'), array('action' => 'edit', $jobpostingtag['Jobpostingtag']['idTag,idJobPosting'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobpostingtag'), array('action' => 'delete', $jobpostingtag['Jobpostingtag']['idTag,idJobPosting']), array(), __('Are you sure you want to delete # %s?', $jobpostingtag['Jobpostingtag']['idTag,idJobPosting'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobpostingtags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobpostingtag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobpostings'), array('controller' => 'jobpostings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobposting'), array('controller' => 'jobpostings', 'action' => 'add')); ?> </li>
	</ul>
</div>
