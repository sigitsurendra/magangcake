<div class="countries form">
<?php echo $this->Form->create('Country'); ?>
	<fieldset>
		<legend><?php echo __('Edit Country'); ?></legend>
	<?php
		echo $this->Form->input('idCountry');
		echo $this->Form->input('Name');
		echo $this->Form->input('Visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Country.idCountry')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Country.idCountry'))); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?></li>
	</ul>
</div>
