<div class="companymemberships form">
<?php echo $this->Form->create('Companymembership'); ?>
	<fieldset>
		<legend><?php echo __('Edit Companymembership'); ?></legend>
	<?php
		echo $this->Form->input('idCompanyMembership');
		echo $this->Form->input('idMembershipType');
		echo $this->Form->input('idCompany');
		echo $this->Form->input('StartDate');
		echo $this->Form->input('EndDate');
		echo $this->Form->input('idActivationStatus');
		echo $this->Form->input('IsPaid');
		echo $this->Form->input('PaymentAmount');
		echo $this->Form->input('PaymentDate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Companymembership.idCompanyMembership')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Companymembership.idCompanyMembership'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companymemberships'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companymembershiptypes'), array('controller' => 'companymembershiptypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membershiptype'), array('controller' => 'companymembershiptypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activationstatuses'), array('controller' => 'activationstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activationstatus'), array('controller' => 'activationstatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
