<div class="applications index">
	<h2><?php echo __('Applications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idApplication'); ?></th>
			<th><?php echo $this->Paginator->sort('ApplicationDate'); ?></th>
			<th><?php echo $this->Paginator->sort('idStudent'); ?></th>
			<th><?php echo $this->Paginator->sort('idJobPosting'); ?></th>
			<th><?php echo $this->Paginator->sort('idApplicationStatus'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($applications as $application): ?>
	<tr>
		<td><?php echo h($application['Application']['idApplication']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['ApplicationDate']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($application['Student']['idStudent'], array('controller' => 'students', 'action' => 'view', $application['Student']['idStudent'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($application['Jobposting']['idJobPosting'], array('controller' => 'jobpostings', 'action' => 'view', $application['Jobposting']['idJobPosting'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($application['Applicationstatus']['Name'], array('controller' => 'applicationstatuses', 'action' => 'view', $application['Applicationstatus']['idApplicationStatus'])); ?>
		</td>
		<td><?php echo h($application['Application']['Visible']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $application['Application']['idApplication'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $application['Application']['idApplication'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $application['Application']['idApplication']), array(), __('Are you sure you want to delete # %s?', $application['Application']['idApplication'])); ?>
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
		<li><?php echo $this->Html->link(__('New Application'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobpostings'), array('controller' => 'jobpostings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobposting'), array('controller' => 'jobpostings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applicationstatuses'), array('controller' => 'applicationstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicationstatus'), array('controller' => 'applicationstatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
