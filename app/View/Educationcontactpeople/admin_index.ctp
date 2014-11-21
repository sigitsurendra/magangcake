<div class="educationcontactpeople index">
	<h2><?php echo __('Educationcontactpeople'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idEducationContactPerson'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Phone1'); ?></th>
			<th><?php echo $this->Paginator->sort('Phone2'); ?></th>
			<th><?php echo $this->Paginator->sort('Phone3'); ?></th>
			<th><?php echo $this->Paginator->sort('Email'); ?></th>
			<th><?php echo $this->Paginator->sort('idEducationOrganization'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedDate'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateDate'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedBy'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateBy'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($educationcontactpeople as $educationcontactperson): ?>
	<tr>
		<td><?php echo h($educationcontactperson['Educationcontactperson']['idEducationContactPerson']); ?>&nbsp;</td>
		<td><?php echo h($educationcontactperson['Educationcontactperson']['Name']); ?>&nbsp;</td>
		<td><?php echo h($educationcontactperson['Educationcontactperson']['Phone1']); ?>&nbsp;</td>
		<td><?php echo h($educationcontactperson['Educationcontactperson']['Phone2']); ?>&nbsp;</td>
		<td><?php echo h($educationcontactperson['Educationcontactperson']['Phone3']); ?>&nbsp;</td>
		<td><?php echo h($educationcontactperson['Educationcontactperson']['Email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($educationcontactperson['Educationorganization']['idEducationOrganization'], array('controller' => 'educationorganizations', 'action' => 'view', $educationcontactperson['Educationorganization']['idEducationOrganization'])); ?>
		</td>
		<td><?php echo h($educationcontactperson['Educationcontactperson']['Visible']); ?>&nbsp;</td>
		<td><?php echo h($educationcontactperson['Educationcontactperson']['CreatedDate']); ?>&nbsp;</td>
		<td><?php echo h($educationcontactperson['Educationcontactperson']['LastUpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($educationcontactperson['Educationcontactperson']['CreatedBy']); ?>&nbsp;</td>
		<td><?php echo h($educationcontactperson['Educationcontactperson']['LastUpdateBy']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $educationcontactperson['Educationcontactperson']['idEducationContactPerson'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $educationcontactperson['Educationcontactperson']['idEducationContactPerson'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $educationcontactperson['Educationcontactperson']['idEducationContactPerson']), array(), __('Are you sure you want to delete # %s?', $educationcontactperson['Educationcontactperson']['idEducationContactPerson'])); ?>
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
		<li><?php echo $this->Html->link(__('New Educationcontactperson'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Educationorganizations'), array('controller' => 'educationorganizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educationorganization'), array('controller' => 'educationorganizations', 'action' => 'add')); ?> </li>
	</ul>
</div>
