<div class="jobexpertises index">
	<h2><?php echo __('Jobexpertises'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idJobPosting'); ?></th>
			<th><?php echo $this->Paginator->sort('idExpertise'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($jobexpertises as $jobexpertise): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($jobexpertise['JobPosting']['idJobPosting'], array('controller' => 'jobpostings', 'action' => 'view', $jobexpertise['JobPosting']['idJobPosting'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($jobexpertise['Expertise']['Name'], array('controller' => 'expertises', 'action' => 'view', $jobexpertise['Expertise']['idExpertise'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobexpertise['Jobexpertise']['idExpertise, idJobPosting'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobexpertise['Jobexpertise']['idExpertise, idJobPosting'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobexpertise['Jobexpertise']['idExpertise, idJobPosting']), array(), __('Are you sure you want to delete # %s?', $jobexpertise['Jobexpertise']['idExpertise, idJobPosting'])); ?>
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
		<li><?php echo $this->Html->link(__('New Jobexpertise'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Expertises'), array('controller' => 'expertises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expertise'), array('controller' => 'expertises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobpostings'), array('controller' => 'jobpostings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Posting'), array('controller' => 'jobpostings', 'action' => 'add')); ?> </li>
	</ul>
</div>
