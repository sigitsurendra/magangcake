<div class="educationorganizations form">
<?php echo $this->Form->create('Educationorganization'); ?>
	<fieldset>
		<legend><?php echo __('Add Educationorganization'); ?></legend>
	<?php
		echo $this->Form->input('Name');
		echo $this->Form->input('Address');
		echo $this->Form->input('Phone1');
		echo $this->Form->input('Phone2');
		echo $this->Form->input('Phone3');
		echo $this->Form->input('Fax');
		echo $this->Form->input('idEducationCategory');
		echo $this->Form->input('Email');
		echo $this->Form->input('Visible');
		echo $this->Form->input('CreatedDate');
		echo $this->Form->input('LastUpdateDate');
		echo $this->Form->input('CreatedBy');
		echo $this->Form->input('LastUpdateBy');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Educationorganizations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Educationcategories'), array('controller' => 'educationcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educationcategory'), array('controller' => 'educationcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
