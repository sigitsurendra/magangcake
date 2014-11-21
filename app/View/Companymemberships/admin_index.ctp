<div class="companymemberships index">
	<h2><?php echo __('Companymemberships'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idCompanyMembership'); ?></th>
			<th><?php echo $this->Paginator->sort('idMembershipType'); ?></th>
			<th><?php echo $this->Paginator->sort('idCompany'); ?></th>
			<th><?php echo $this->Paginator->sort('StartDate'); ?></th>
			<th><?php echo $this->Paginator->sort('EndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('idActivationStatus'); ?></th>
			<th><?php echo $this->Paginator->sort('IsPaid'); ?></th>
			<th><?php echo $this->Paginator->sort('PaymentAmount'); ?></th>
			<th><?php echo $this->Paginator->sort('PaymentDate'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($companymemberships as $companymembership): ?>
	<tr>
		<td><?php echo h($companymembership['Companymembership']['idCompanyMembership']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($companymembership['Membershiptype']['Name'], array('controller' => 'companymembershiptypes', 'action' => 'view', $companymembership['Membershiptype']['idMembershipType'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($companymembership['Company']['idCompany'], array('controller' => 'companies', 'action' => 'view', $companymembership['Company']['idCompany'])); ?>
		</td>
		<td><?php echo h($companymembership['Companymembership']['StartDate']); ?>&nbsp;</td>
		<td><?php echo h($companymembership['Companymembership']['EndDate']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($companymembership['Activationstatus']['Description'], array('controller' => 'activationstatuses', 'action' => 'view', $companymembership['Activationstatus']['idActivationStatus'])); ?>
		</td>
		<td><?php echo h($companymembership['Companymembership']['IsPaid']); ?>&nbsp;</td>
		<td><?php echo h($companymembership['Companymembership']['PaymentAmount']); ?>&nbsp;</td>
		<td><?php echo h($companymembership['Companymembership']['PaymentDate']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $companymembership['Companymembership']['idCompanyMembership'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $companymembership['Companymembership']['idCompanyMembership'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $companymembership['Companymembership']['idCompanyMembership']), array(), __('Are you sure you want to delete # %s?', $companymembership['Companymembership']['idCompanyMembership'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Companymembership'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companymembershiptypes'), array('controller' => 'companymembershiptypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membershiptype'), array('controller' => 'companymembershiptypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activationstatuses'), array('controller' => 'activationstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activationstatus'), array('controller' => 'activationstatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
