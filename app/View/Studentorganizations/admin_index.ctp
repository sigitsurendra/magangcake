<div class="studentorganizations index">
	<h2><?php echo __('Studentorganizations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idStudent'); ?></th>
			<th><?php echo $this->Paginator->sort('idEducationOrganization'); ?></th>
			<th><?php echo $this->Paginator->sort('YearStart'); ?></th>
			<th><?php echo $this->Paginator->sort('YearEnd'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($studentorganizations as $studentorganization): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($studentorganization['Student']['idStudent'], array('controller' => 'students', 'action' => 'view', $studentorganization['Student']['idStudent'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($studentorganization['Educationorganization']['idEducationOrganization'], array('controller' => 'educationorganizations', 'action' => 'view', $studentorganization['Educationorganization']['idEducationOrganization'])); ?>
		</td>
		<td><?php echo h($studentorganization['Studentorganization']['YearStart']); ?>&nbsp;</td>
		<td><?php echo h($studentorganization['Studentorganization']['YearEnd']); ?>&nbsp;</td>
		<td><?php echo h($studentorganization['Studentorganization']['Visible']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $studentorganization['Studentorganization']['idStudent,idEducationOrganization'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentorganization['Studentorganization']['idStudent,idEducationOrganization'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $studentorganization['Studentorganization']['idStudent,idEducationOrganization']), array(), __('Are you sure you want to delete # %s?', $studentorganization['Studentorganization']['idStudent,idEducationOrganization'])); ?>
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
		<li><?php echo $this->Html->link(__('New Studentorganization'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educationorganizations'), array('controller' => 'educationorganizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educationorganization'), array('controller' => 'educationorganizations', 'action' => 'add')); ?> </li>
	</ul>
</div>
