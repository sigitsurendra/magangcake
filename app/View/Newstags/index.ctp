<div class="newstags index">
	<h2><?php echo __('Newstags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idTag'); ?></th>
			<th><?php echo $this->Paginator->sort('idNews'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($newstags as $newstag): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($newstag['Tag']['Name'], array('controller' => 'tags', 'action' => 'view', $newstag['Tag']['idTag'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($newstag['News']['idNews'], array('controller' => 'news', 'action' => 'view', $newstag['News']['idNews'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $newstag['Newstag']['idTag,idNews'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $newstag['Newstag']['idTag,idNews'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $newstag['Newstag']['idTag,idNews']), array(), __('Are you sure you want to delete # %s?', $newstag['Newstag']['idTag,idNews'])); ?>
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
		<li><?php echo $this->Html->link(__('New Newstag'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
