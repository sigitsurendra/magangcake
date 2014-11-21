<div class="educationcategories index">
	<h2><?php echo __('Educationcategories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idEducationCategory'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($educationcategories as $educationcategory): ?>
	<tr>
		<td><?php echo h($educationcategory['Educationcategory']['idEducationCategory']); ?>&nbsp;</td>
		<td><?php echo h($educationcategory['Educationcategory']['Name']); ?>&nbsp;</td>
		<td><?php echo h($educationcategory['Educationcategory']['Visible']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $educationcategory['Educationcategory']['idEducationCategory'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $educationcategory['Educationcategory']['idEducationCategory'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $educationcategory['Educationcategory']['idEducationCategory']), array(), __('Are you sure you want to delete # %s?', $educationcategory['Educationcategory']['idEducationCategory'])); ?>
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
		<li><?php echo $this->Html->link(__('New Educationcategory'), array('action' => 'add')); ?></li>
	</ul>
</div>
