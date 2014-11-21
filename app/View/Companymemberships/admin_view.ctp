<div class="companymemberships view">
<h2><?php echo __('Companymembership'); ?></h2>
	<dl>
		<dt><?php echo __('IdCompanyMembership'); ?></dt>
		<dd>
			<?php echo h($companymembership['Companymembership']['idCompanyMembership']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Membershiptype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companymembership['Membershiptype']['Name'], array('controller' => 'companymembershiptypes', 'action' => 'view', $companymembership['Membershiptype']['idMembershipType'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companymembership['Company']['idCompany'], array('controller' => 'companies', 'action' => 'view', $companymembership['Company']['idCompany'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StartDate'); ?></dt>
		<dd>
			<?php echo h($companymembership['Companymembership']['StartDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndDate'); ?></dt>
		<dd>
			<?php echo h($companymembership['Companymembership']['EndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activationstatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companymembership['Activationstatus']['Description'], array('controller' => 'activationstatuses', 'action' => 'view', $companymembership['Activationstatus']['idActivationStatus'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsPaid'); ?></dt>
		<dd>
			<?php echo h($companymembership['Companymembership']['IsPaid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaymentAmount'); ?></dt>
		<dd>
			<?php echo h($companymembership['Companymembership']['PaymentAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaymentDate'); ?></dt>
		<dd>
			<?php echo h($companymembership['Companymembership']['PaymentDate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Companymembership'), array('action' => 'edit', $companymembership['Companymembership']['idCompanyMembership'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Companymembership'), array('action' => 'delete', $companymembership['Companymembership']['idCompanyMembership']), array(), __('Are you sure you want to delete # %s?', $companymembership['Companymembership']['idCompanyMembership'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companymemberships'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companymembership'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companymembershiptypes'), array('controller' => 'companymembershiptypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membershiptype'), array('controller' => 'companymembershiptypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activationstatuses'), array('controller' => 'activationstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activationstatus'), array('controller' => 'activationstatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
