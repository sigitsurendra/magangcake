<div class="newstags view">
<h2><?php echo __('Newstag'); ?></h2>
	<dl>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($newstag['Tag']['Name'], array('controller' => 'tags', 'action' => 'view', $newstag['Tag']['idTag'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('News'); ?></dt>
		<dd>
			<?php echo $this->Html->link($newstag['News']['idNews'], array('controller' => 'news', 'action' => 'view', $newstag['News']['idNews'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Newstag'), array('action' => 'edit', $newstag['Newstag']['idTag,idNews'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Newstag'), array('action' => 'delete', $newstag['Newstag']['idTag,idNews']), array(), __('Are you sure you want to delete # %s?', $newstag['Newstag']['idTag,idNews'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Newstags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Newstag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
