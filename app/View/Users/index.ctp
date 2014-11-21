<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idUser'); ?></th>
			<th><?php echo $this->Paginator->sort('UserName'); ?></th>
			<th><?php echo $this->Paginator->sort('Password'); ?></th>
			<th><?php echo $this->Paginator->sort('LastLoginDate'); ?></th>
			<th><?php echo $this->Paginator->sort('LoginAttempt'); ?></th>
			<th><?php echo $this->Paginator->sort('idActivationStatus'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['idUser']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['UserName']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['Password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['LastLoginDate']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['LoginAttempt']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['idActivationStatus']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['idUser'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['idUser'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['idUser']), array(), __('Are you sure you want to delete # %s?', $user['User']['idUser'])); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
	</ul>
</div>
