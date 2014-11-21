<div class="organizationexperiences index">
	<h2><?php echo __('Organizationexperiences'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idOrganizationExperiences'); ?></th>
			<th><?php echo $this->Paginator->sort('Title'); ?></th>
			<th><?php echo $this->Paginator->sort('Description'); ?></th>
			<th><?php echo $this->Paginator->sort('Year'); ?></th>
			<th><?php echo $this->Paginator->sort('idStudent'); ?></th>
			<th><?php echo $this->Paginator->sort('Visible'); ?></th>
			<th><?php echo $this->Paginator->sort('CreatedDate'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateDate'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($organizationexperiences as $organizationexperience): ?>
	<tr>
		<td><?php echo h($organizationexperience['Organizationexperience']['idOrganizationExperiences']); ?>&nbsp;</td>
		<td><?php echo h($organizationexperience['Organizationexperience']['Title']); ?>&nbsp;</td>
		<td><?php echo h($organizationexperience['Organizationexperience']['Description']); ?>&nbsp;</td>
		<td><?php echo h($organizationexperience['Organizationexperience']['Year']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($organizationexperience['Student']['idStudent'], array('controller' => 'students', 'action' => 'view', $organizationexperience['Student']['idStudent'])); ?>
		</td>
		<td><?php echo h($organizationexperience['Organizationexperience']['Visible']); ?>&nbsp;</td>
		<td><?php echo h($organizationexperience['Organizationexperience']['CreatedDate']); ?>&nbsp;</td>
		<td><?php echo h($organizationexperience['Organizationexperience']['LastUpdateDate']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $organizationexperience['Organizationexperience']['idOrganizationExperiences'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $organizationexperience['Organizationexperience']['idOrganizationExperiences'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $organizationexperience['Organizationexperience']['idOrganizationExperiences']), array(), __('Are you sure you want to delete # %s?', $organizationexperience['Organizationexperience']['idOrganizationExperiences'])); ?>
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
		<li><?php echo $this->Html->link(__('New Organizationexperience'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
