<div class="cities index">
	<h2><?php echo __('Cities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idCity'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('idProvince'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cities as $city): ?>
	<tr>
		<td><?php echo h($city['City']['idCity']); ?>&nbsp;</td>
		<td><?php echo h($city['City']['Name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($city['Province']['Name'], array('controller' => 'provinces', 'action' => 'view', $city['Province']['idProvince'])); ?>
		</td>
		<td><?php echo h($city['City']['Visible']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $city['City']['idCity'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $city['City']['idCity'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $city['City']['idCity']), array(), __('Are you sure you want to delete # %s?', $city['City']['idCity'])); ?>
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
		<li><?php echo $this->Html->link(__('New City'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
	</ul>
</div>
