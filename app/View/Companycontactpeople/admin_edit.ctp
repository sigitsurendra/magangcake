<div class="companycontactpeople form">
<?php echo $this->Form->create('Companycontactperson'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Companycontactperson'); ?></legend>
	<?php
		echo $this->Form->input('idCompanyContactPerson');
		echo $this->Form->input('Name');
		echo $this->Form->input('Email');
		echo $this->Form->input('Phone1');
		echo $this->Form->input('Phone2');
		echo $this->Form->input('Phone3');
		echo $this->Form->input('idCompany');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Companycontactperson.idCompanyContactPerson')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Companycontactperson.idCompanyContactPerson'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companycontactpeople'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
