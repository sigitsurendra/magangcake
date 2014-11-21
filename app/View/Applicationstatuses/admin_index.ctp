<div class="applicationstatuses index">
	<h2><?php echo __('Applicationstatuses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idApplicationStatus'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Description'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($applicationstatuses as $applicationstatus): ?>
	<tr>
		<td><?php echo h($applicationstatus['Applicationstatus']['idApplicationStatus']); ?>&nbsp;</td>
		<td><?php echo h($applicationstatus['Applicationstatus']['Name']); ?>&nbsp;</td>
		<td><?php echo h($applicationstatus['Applicationstatus']['Description']); ?>&nbsp;</td>
		<td><?php echo h($applicationstatus['Applicationstatus']['Visible']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $applicationstatus['Applicationstatus']['idApplicationStatus'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $applicationstatus['Applicationstatus']['idApplicationStatus'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $applicationstatus['Applicationstatus']['idApplicationStatus']), array(), __('Are you sure you want to delete # %s?', $applicationstatus['Applicationstatus']['idApplicationStatus'])); ?>
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
		<li><?php echo $this->Html->link(__('New Applicationstatus'), array('action' => 'add')); ?></li>
	</ul>
</div>
