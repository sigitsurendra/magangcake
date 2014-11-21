<div class="workexperiences index">
	<h2><?php echo __('Workexperiences'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idWorkExperiences'); ?></th>
			<th><?php echo $this->Paginator->sort('Title'); ?></th>
			<th><?php echo $this->Paginator->sort('Company'); ?></th>
			<th><?php echo $this->Paginator->sort('StartDate'); ?></th>
			<th><?php echo $this->Paginator->sort('EndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('Description'); ?></th>
			<th><?php echo $this->Paginator->sort('ReferenceName'); ?></th>
			<th><?php echo $this->Paginator->sort('ReferencePhone'); ?></th>
			<th><?php echo $this->Paginator->sort('SupportFilePath'); ?></th>
			<th><?php echo $this->Paginator->sort('idStudent'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($workexperiences as $workexperience): ?>
	<tr>
		<td><?php echo h($workexperience['Workexperience']['idWorkExperiences']); ?>&nbsp;</td>
		<td><?php echo h($workexperience['Workexperience']['Title']); ?>&nbsp;</td>
		<td><?php echo h($workexperience['Workexperience']['Company']); ?>&nbsp;</td>
		<td><?php echo h($workexperience['Workexperience']['StartDate']); ?>&nbsp;</td>
		<td><?php echo h($workexperience['Workexperience']['EndDate']); ?>&nbsp;</td>
		<td><?php echo h($workexperience['Workexperience']['Description']); ?>&nbsp;</td>
		<td><?php echo h($workexperience['Workexperience']['ReferenceName']); ?>&nbsp;</td>
		<td><?php echo h($workexperience['Workexperience']['ReferencePhone']); ?>&nbsp;</td>
		<td><?php echo h($workexperience['Workexperience']['SupportFilePath']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($workexperience['Student']['idStudent'], array('controller' => 'students', 'action' => 'view', $workexperience['Student']['idStudent'])); ?>
		</td>
		<td><?php echo h($workexperience['Workexperience']['Visible']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $workexperience['Workexperience']['idWorkExperiences'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $workexperience['Workexperience']['idWorkExperiences'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $workexperience['Workexperience']['idWorkExperiences']), array(), __('Are you sure you want to delete # %s?', $workexperience['Workexperience']['idWorkExperiences'])); ?>
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
		<li><?php echo $this->Html->link(__('New Workexperience'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
