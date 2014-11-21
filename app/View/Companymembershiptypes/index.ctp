<div class="companymembershiptypes index">
	<h2><?php echo __('Companymembershiptypes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idMembershipType'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Description'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($companymembershiptypes as $companymembershiptype): ?>
	<tr>
		<td><?php echo h($companymembershiptype['Companymembershiptype']['idMembershipType']); ?>&nbsp;</td>
		<td><?php echo h($companymembershiptype['Companymembershiptype']['Name']); ?>&nbsp;</td>
		<td><?php echo h($companymembershiptype['Companymembershiptype']['Description']); ?>&nbsp;</td>
		<td><?php echo h($companymembershiptype['Companymembershiptype']['Visible']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $companymembershiptype['Companymembershiptype']['idMembershipType'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $companymembershiptype['Companymembershiptype']['idMembershipType'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $companymembershiptype['Companymembershiptype']['idMembershipType']), array(), __('Are you sure you want to delete # %s?', $companymembershiptype['Companymembershiptype']['idMembershipType'])); ?>
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
		<li><?php echo $this->Html->link(__('New Companymembershiptype'), array('action' => 'add')); ?></li>
	</ul>
</div>
