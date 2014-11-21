<div class="companies index">
	<h2><?php echo __('Companies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idCompany'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Description'); ?></th>
			<th><?php echo $this->Paginator->sort('Address'); ?></th>
			<th><?php echo $this->Paginator->sort('Email'); ?></th>
			<th><?php echo $this->Paginator->sort('idActivationStatus'); ?></th>
			<th><?php echo $this->Paginator->sort('idIndustryCategory'); ?></th>
			<th><?php echo $this->Paginator->sort('idCity'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedDate'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateDate'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedBy'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateBy'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($companies as $company): ?>
	<tr>
		<td><?php echo h($company['Company']['idCompany']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['Name']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['Description']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['Address']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['Email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($company['Activationstatus']['Description'], array('controller' => 'activationstatuses', 'action' => 'view', $company['Activationstatus']['idActivationStatus'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($company['Industrycategory']['Name'], array('controller' => 'industrycategories', 'action' => 'view', $company['Industrycategory']['idIndustryCategory'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($company['City']['Name'], array('controller' => 'cities', 'action' => 'view', $company['City']['idCity'])); ?>
		</td>
		<td><?php echo h($company['Company']['Visible']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['CreatedDate']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['LastUpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['CreatedBy']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['LastUpdateBy']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $company['Company']['idCompany'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $company['Company']['idCompany'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $company['Company']['idCompany']), array(), __('Are you sure you want to delete # %s?', $company['Company']['idCompany'])); ?>
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
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Industrycategories'), array('controller' => 'industrycategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industrycategory'), array('controller' => 'industrycategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activationstatuses'), array('controller' => 'activationstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activationstatus'), array('controller' => 'activationstatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
