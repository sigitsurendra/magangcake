<div class="jobpostingtags index">
	<h2><?php echo __('Jobpostingtags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idTag'); ?></th>
			<th><?php echo $this->Paginator->sort('idJobPosting'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($jobpostingtags as $jobpostingtag): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($jobpostingtag['Tag']['Name'], array('controller' => 'tags', 'action' => 'view', $jobpostingtag['Tag']['idTag'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($jobpostingtag['Jobposting']['idJobPosting'], array('controller' => 'jobpostings', 'action' => 'view', $jobpostingtag['Jobposting']['idJobPosting'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobpostingtag['Jobpostingtag']['idTag,idJobPosting'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobpostingtag['Jobpostingtag']['idTag,idJobPosting'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobpostingtag['Jobpostingtag']['idTag,idJobPosting']), array(), __('Are you sure you want to delete # %s?', $jobpostingtag['Jobpostingtag']['idTag,idJobPosting'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Jobpostingtag'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobpostings'), array('controller' => 'jobpostings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobposting'), array('controller' => 'jobpostings', 'action' => 'add')); ?> </li>
	</ul>
</div>
