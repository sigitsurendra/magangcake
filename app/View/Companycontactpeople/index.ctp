<div class="companycontactpeople index">
	<h2><?php echo __('Companycontactpeople'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idCompanyContactPerson'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Email'); ?></th>
			<th><?php echo $this->Paginator->sort('Phone1'); ?></th>
			<th><?php echo $this->Paginator->sort('Phone2'); ?></th>
			<th><?php echo $this->Paginator->sort('Phone3'); ?></th>
			<th><?php echo $this->Paginator->sort('idCompany'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedDate'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateDate'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedBy'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateBy'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($companycontactpeople as $companycontactperson): ?>
	<tr>
		<td><?php echo h($companycontactperson['Companycontactperson']['idCompanyContactPerson']); ?>&nbsp;</td>
		<td><?php echo h($companycontactperson['Companycontactperson']['Name']); ?>&nbsp;</td>
		<td><?php echo h($companycontactperson['Companycontactperson']['Email']); ?>&nbsp;</td>
		<td><?php echo h($companycontactperson['Companycontactperson']['Phone1']); ?>&nbsp;</td>
		<td><?php echo h($companycontactperson['Companycontactperson']['Phone2']); ?>&nbsp;</td>
		<td><?php echo h($companycontactperson['Companycontactperson']['Phone3']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($companycontactperson['Company']['idCompany'], array('controller' => 'companies', 'action' => 'view', $companycontactperson['Company']['idCompany'])); ?>
		</td>
		<td><?php echo h($companycontactperson['Companycontactperson']['Visible']); ?>&nbsp;</td>
		<td><?php echo h($companycontactperson['Companycontactperson']['CreatedDate']); ?>&nbsp;</td>
		<td><?php echo h($companycontactperson['Companycontactperson']['LastUpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($companycontactperson['Companycontactperson']['CreatedBy']); ?>&nbsp;</td>
		<td><?php echo h($companycontactperson['Companycontactperson']['LastUpdateBy']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $companycontactperson['Companycontactperson']['idCompanyContactPerson'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $companycontactperson['Companycontactperson']['idCompanyContactPerson'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $companycontactperson['Companycontactperson']['idCompanyContactPerson']), array(), __('Are you sure you want to delete # %s?', $companycontactperson['Companycontactperson']['idCompanyContactPerson'])); ?>
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
		<li><?php echo $this->Html->link(__('New Companycontactperson'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
