<div class="studentexpertises index">
	<h2><?php echo __('Studentexpertises'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idExpertise'); ?></th>
			<th><?php echo $this->Paginator->sort('idStudent'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($studentexpertises as $studentexpertise): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($studentexpertise['Expertise']['Name'], array('controller' => 'expertises', 'action' => 'view', $studentexpertise['Expertise']['idExpertise'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($studentexpertise['Student']['idStudent'], array('controller' => 'students', 'action' => 'view', $studentexpertise['Student']['idStudent'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $studentexpertise['Studentexpertise']['idExpertise,idStudent'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentexpertise['Studentexpertise']['idExpertise,idStudent'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $studentexpertise['Studentexpertise']['idExpertise,idStudent']), array(), __('Are you sure you want to delete # %s?', $studentexpertise['Studentexpertise']['idExpertise,idStudent'])); ?>
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
		<li><?php echo $this->Html->link(__('New Studentexpertise'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expertises'), array('controller' => 'expertises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expertise'), array('controller' => 'expertises', 'action' => 'add')); ?> </li>
	</ul>
</div>
