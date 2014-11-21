<div class="activationstatuses index">
	<h2><?php echo __('Activationstatuses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idActivationStatus'); ?></th>
			<th><?php echo $this->Paginator->sort('Description'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($activationstatuses as $activationstatus): ?>
	<tr>
		<td><?php echo h($activationstatus['Activationstatus']['idActivationStatus']); ?>&nbsp;</td>
		<td><?php echo h($activationstatus['Activationstatus']['Description']); ?>&nbsp;</td>
		<td><?php echo h($activationstatus['Activationstatus']['Visible']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $activationstatus['Activationstatus']['idActivationStatus'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $activationstatus['Activationstatus']['idActivationStatus'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $activationstatus['Activationstatus']['idActivationStatus']), array(), __('Are you sure you want to delete # %s?', $activationstatus['Activationstatus']['idActivationStatus'])); ?>
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
		<li><?php echo $this->Html->link(__('New Activationstatus'), array('action' => 'add')); ?></li>
	</ul>
</div>
