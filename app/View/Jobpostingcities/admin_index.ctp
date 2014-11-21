<div class="jobpostingcities index">
	<h2><?php echo __('Jobpostingcities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idJobPosting'); ?></th>
			<th><?php echo $this->Paginator->sort('idCity'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($jobpostingcities as $jobpostingcity): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($jobpostingcity['Jobposting']['idJobPosting'], array('controller' => 'jobpostings', 'action' => 'view', $jobpostingcity['Jobposting']['idJobPosting'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($jobpostingcity['City']['Name'], array('controller' => 'cities', 'action' => 'view', $jobpostingcity['City']['idCity'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobpostingcity['Jobpostingcity']['idJobPosting,idCity'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobpostingcity['Jobpostingcity']['idJobPosting,idCity'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobpostingcity['Jobpostingcity']['idJobPosting,idCity']), array(), __('Are you sure you want to delete # %s?', $jobpostingcity['Jobpostingcity']['idJobPosting,idCity'])); ?>
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
		<li><?php echo $this->Html->link(__('New Jobpostingcity'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobpostings'), array('controller' => 'jobpostings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobposting'), array('controller' => 'jobpostings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
	</ul>
</div>
