<div class="companies form">
<?php echo $this->Form->create('Company'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Company'); ?></legend>
	<?php
		echo $this->Form->input('Name');
		echo $this->Form->input('Description');
		echo $this->Form->input('Address');
		echo $this->Form->input('Email');
		echo $this->Form->input('idActivationStatus');
		echo $this->Form->input('idIndustryCategory');
		echo $this->Form->input('idCity');
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

		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Industrycategories'), array('controller' => 'industrycategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industrycategory'), array('controller' => 'industrycategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activationstatuses'), array('controller' => 'activationstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activationstatus'), array('controller' => 'activationstatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
