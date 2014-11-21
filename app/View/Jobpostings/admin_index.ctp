<div class="jobpostings index">
	<h2><?php echo __('Jobpostings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idJobPosting'); ?></th>
			<th><?php echo $this->Paginator->sort('Title'); ?></th>
			<th><?php echo $this->Paginator->sort('Description'); ?></th>
			<th><?php echo $this->Paginator->sort('Requirements'); ?></th>
			<th><?php echo $this->Paginator->sort('StartDatePosting'); ?></th>
			<th><?php echo $this->Paginator->sort('EndDatePosting'); ?></th>
			<th><?php echo $this->Paginator->sort('VacancyAvailable'); ?></th>
			<th><?php echo $this->Paginator->sort('DurationDays'); ?></th>
			<th><?php echo $this->Paginator->sort('StartDateWork'); ?></th>
			<th><?php echo $this->Paginator->sort('Sallary'); ?></th>
			<th><?php echo $this->Paginator->sort('idJobCategory'); ?></th>
			<th><?php echo $this->Paginator->sort('idActivationStatus'); ?></th>
			<th><?php echo $this->Paginator->sort('idJobType'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedDate'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateDate'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedBy'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateBy'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($jobpostings as $jobposting): ?>
	<tr>
		<td><?php echo h($jobposting['Jobposting']['idJobPosting']); ?>&nbsp;</td>
		<td><?php echo h($jobposting['Jobposting']['Title']); ?>&nbsp;</td>
		<td><?php echo h($jobposting['Jobposting']['Description']); ?>&nbsp;</td>
		<td><?php echo h($jobposting['Jobposting']['Requirements']); ?>&nbsp;</td>
		<td><?php echo h($jobposting['Jobposting']['StartDatePosting']); ?>&nbsp;</td>
		<td><?php echo h($jobposting['Jobposting']['EndDatePosting']); ?>&nbsp;</td>
		<td><?php echo h($jobposting['Jobposting']['VacancyAvailable']); ?>&nbsp;</td>
		<td><?php echo h($jobposting['Jobposting']['DurationDays']); ?>&nbsp;</td>
		<td><?php echo h($jobposting['Jobposting']['StartDateWork']); ?>&nbsp;</td>
		<td><?php echo h($jobposting['Jobposting']['Sallary']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($jobposting['JobCategory']['Name'], array('controller' => 'jobcategories', 'action' => 'view', $jobposting['JobCategory']['y'])); ?>
		</td>
		<td><?php echo h($jobposting['Jobposting']['idActivationStatus']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($jobposting['Jobtype']['Name'], array('controller' => 'jobtypes', 'action' => 'view', $jobposting['Jobtype']['idJobType'])); ?>
		</td>
		<td><?php echo h($jobposting['Jobposting']['Visible']); ?>&nbsp;</td>
		<td><?php echo h($jobposting['Jobposting']['CreatedDate']); ?>&nbsp;</td>
		<td><?php echo h($jobposting['Jobposting']['LastUpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($jobposting['Jobposting']['CreatedBy']); ?>&nbsp;</td>
		<td><?php echo h($jobposting['Jobposting']['LastUpdateBy']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobposting['Jobposting']['idJobPosting'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobposting['Jobposting']['idJobPosting'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobposting['Jobposting']['idJobPosting']), array(), __('Are you sure you want to delete # %s?', $jobposting['Jobposting']['idJobPosting'])); ?>
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
		<li><?php echo $this->Html->link(__('New Jobposting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobcategories'), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Category'), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobtypes'), array('controller' => 'jobtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobtype'), array('controller' => 'jobtypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
