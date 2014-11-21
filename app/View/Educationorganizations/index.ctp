<div class="educationorganizations index">
	<h2><?php echo __('Educationorganizations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idEducationOrganization'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Address'); ?></th>
			<th><?php echo $this->Paginator->sort('Phone1'); ?></th>
			<th><?php echo $this->Paginator->sort('Phone2'); ?></th>
			<th><?php echo $this->Paginator->sort('Phone3'); ?></th>
			<th><?php echo $this->Paginator->sort('Fax'); ?></th>
			<th><?php echo $this->Paginator->sort('idEducationCategory'); ?></th>
			<th><?php echo $this->Paginator->sort('Email'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedDate'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateDate'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedBy'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateBy'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($educationorganizations as $educationorganization): ?>
	<tr>
		<td><?php echo h($educationorganization['Educationorganization']['idEducationOrganization']); ?>&nbsp;</td>
		<td><?php echo h($educationorganization['Educationorganization']['Name']); ?>&nbsp;</td>
		<td><?php echo h($educationorganization['Educationorganization']['Address']); ?>&nbsp;</td>
		<td><?php echo h($educationorganization['Educationorganization']['Phone1']); ?>&nbsp;</td>
		<td><?php echo h($educationorganization['Educationorganization']['Phone2']); ?>&nbsp;</td>
		<td><?php echo h($educationorganization['Educationorganization']['Phone3']); ?>&nbsp;</td>
		<td><?php echo h($educationorganization['Educationorganization']['Fax']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($educationorganization['Educationcategory']['Name'], array('controller' => 'educationcategories', 'action' => 'view', $educationorganization['Educationcategory']['idEducationCategory'])); ?>
		</td>
		<td><?php echo h($educationorganization['Educationorganization']['Email']); ?>&nbsp;</td>
		<td><?php echo h($educationorganization['Educationorganization']['Visible']); ?>&nbsp;</td>
		<td><?php echo h($educationorganization['Educationorganization']['CreatedDate']); ?>&nbsp;</td>
		<td><?php echo h($educationorganization['Educationorganization']['LastUpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($educationorganization['Educationorganization']['CreatedBy']); ?>&nbsp;</td>
		<td><?php echo h($educationorganization['Educationorganization']['LastUpdateBy']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $educationorganization['Educationorganization']['idEducationOrganization'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $educationorganization['Educationorganization']['idEducationOrganization'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $educationorganization['Educationorganization']['idEducationOrganization']), array(), __('Are you sure you want to delete # %s?', $educationorganization['Educationorganization']['idEducationOrganization'])); ?>
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
		<li><?php echo $this->Html->link(__('New Educationorganization'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Educationcategories'), array('controller' => 'educationcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educationcategory'), array('controller' => 'educationcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
