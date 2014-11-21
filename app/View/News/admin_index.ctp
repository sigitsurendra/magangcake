<div class="news index">
	<h2><?php echo __('News'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idNews'); ?></th>
			<th><?php echo $this->Paginator->sort('Content'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedDate'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateDate'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedBy'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateBy'); ?></th>
			<th><?php echo $this->Paginator->sort('idActivationStatus'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th><?php echo $this->Paginator->sort('Pinned'); ?></th>
			<th><?php echo $this->Paginator->sort('idNewsCategory'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($news as $news): ?>
	<tr>
		<td><?php echo h($news['News']['idNews']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['Content']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['CreatedDate']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['LastUpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['CreatedBy']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['LastUpdateBy']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['idActivationStatus']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['Visible']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['Pinned']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($news['Newscategory']['Name'], array('controller' => 'newscategories', 'action' => 'view', $news['Newscategory']['idNewsCategory'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $news['News']['idNews'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $news['News']['idNews'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $news['News']['idNews']), array(), __('Are you sure you want to delete # %s?', $news['News']['idNews'])); ?>
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
		<li><?php echo $this->Html->link(__('New News'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Newscategories'), array('controller' => 'newscategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Newscategory'), array('controller' => 'newscategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
