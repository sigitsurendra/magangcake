<div class="students index">
	<h2><?php echo __('Students'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idStudent'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Phone1'); ?></th>
			<th><?php echo $this->Paginator->sort('Phone2'); ?></th>
			<th><?php echo $this->Paginator->sort('Phone3'); ?></th>
			<th><?php echo $this->Paginator->sort('Address'); ?></th>
			<th><?php echo $this->Paginator->sort('Resume'); ?></th>
			<th><?php echo $this->Paginator->sort('Email1'); ?></th>
			<th><?php echo $this->Paginator->sort('Email2'); ?></th>
			<th><?php echo $this->Paginator->sort('website'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedDate'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateDate'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedBy'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateBy'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($students as $student): ?>
	<tr>
		<td><?php echo h($student['Student']['idStudent']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['Name']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['Phone1']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['Phone2']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['Phone3']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['Address']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['Resume']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['Email1']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['Email2']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['website']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['Visible']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['CreatedDate']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['LastUpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['CreatedBy']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['LastUpdateBy']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $student['Student']['idStudent'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $student['Student']['idStudent'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $student['Student']['idStudent']), array(), __('Are you sure you want to delete # %s?', $student['Student']['idStudent'])); ?>
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
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Workexperiences'), array('controller' => 'workexperiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Workexperience'), array('controller' => 'workexperiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Userroles'), array('controller' => 'userroles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Userrole'), array('controller' => 'userroles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizationexperiences'), array('controller' => 'organizationexperiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organizationexperiences'), array('controller' => 'organizationexperiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentorganizations'), array('controller' => 'studentorganizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentorganization'), array('controller' => 'studentorganizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentexpertises'), array('controller' => 'studentexpertises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentexpertise'), array('controller' => 'studentexpertises', 'action' => 'add')); ?> </li>
	</ul>
</div>
