<div class="userroles index">
	<h2><?php echo __('Userroles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idUser'); ?></th>
			<th><?php echo $this->Paginator->sort('idRole'); ?></th>
			<th><?php echo $this->Paginator->sort('idEducationContactPerson'); ?></th>
			<th><?php echo $this->Paginator->sort('idStudent'); ?></th>
			<th><?php echo $this->Paginator->sort('idCompanyContactPerson'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($userroles as $userrole): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($userrole['User']['idUser'], array('controller' => 'users', 'action' => 'view', $userrole['User']['idUser'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userrole['Role']['Name'], array('controller' => 'roles', 'action' => 'view', $userrole['Role']['idRole'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userrole['Educationcontactperson']['idEducationContactPerson'], array('controller' => 'educationcontactpeople', 'action' => 'view', $userrole['Educationcontactperson']['idEducationContactPerson'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userrole['Student']['idStudent'], array('controller' => 'students', 'action' => 'view', $userrole['Student']['idStudent'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userrole['Companycontactperson']['idCompanyContactPerson'], array('controller' => 'companycontactpeople', 'action' => 'view', $userrole['Companycontactperson']['idCompanyContactPerson'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userrole['Userrole']['idUser, idRole'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userrole['Userrole']['idUser, idRole'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userrole['Userrole']['idUser, idRole']), array(), __('Are you sure you want to delete # %s?', $userrole['Userrole']['idUser, idRole'])); ?>
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
		<li><?php echo $this->Html->link(__('New Userrole'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educationcontactpeople'), array('controller' => 'educationcontactpeople', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educationcontactperson'), array('controller' => 'educationcontactpeople', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companycontactpeople'), array('controller' => 'companycontactpeople', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companycontactperson'), array('controller' => 'companycontactpeople', 'action' => 'add')); ?> </li>
	</ul>
</div>
