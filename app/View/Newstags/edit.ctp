<div class="newstags form">
<?php echo $this->Form->create('Newstag'); ?>
	<fieldset>
		<legend><?php echo __('Edit Newstag'); ?></legend>
	<?php
		echo $this->Form->input('idTag');
		echo $this->Form->input('idNews');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Newstag.idTag,idNews')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Newstag.idTag,idNews'))); ?></li>
		<li><?php echo $this->Html->link(__('List Newstags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
