<div class="news form">
<?php echo $this->Form->create('News'); ?>
	<fieldset>
		<legend><?php echo __('Edit News'); ?></legend>
	<?php
		echo $this->Form->input('idNews');
		echo $this->Form->input('Content');
		echo $this->Form->input('CreatedDate');
		echo $this->Form->input('LastUpdateDate');
		echo $this->Form->input('CreatedBy');
		echo $this->Form->input('LastUpdateBy');
		echo $this->Form->input('idActivationStatus');
		echo $this->Form->input('Visible');
		echo $this->Form->input('Pinned');
		echo $this->Form->input('idNewsCategory');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('News.idNews')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('News.idNews'))); ?></li>
		<li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Newscategories'), array('controller' => 'newscategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Newscategory'), array('controller' => 'newscategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
