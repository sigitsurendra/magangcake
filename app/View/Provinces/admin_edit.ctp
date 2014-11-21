<div class="provinces form">
<?php echo $this->Form->create('Province'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Province'); ?></legend>
	<?php
		echo $this->Form->input('idProvince');
		echo $this->Form->input('Name');
		echo $this->Form->input('idCountry');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Province.idProvince')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Province.idProvince'))); ?></li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
