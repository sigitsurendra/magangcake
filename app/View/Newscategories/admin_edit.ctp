<div class="newscategories form">
<?php echo $this->Form->create('Newscategory'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Newscategory'); ?></legend>
	<?php
		echo $this->Form->input('idNewsCategory');
		echo $this->Form->input('Name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Newscategory.idNewsCategory')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Newscategory.idNewsCategory'))); ?></li>
		<li><?php echo $this->Html->link(__('List Newscategories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
