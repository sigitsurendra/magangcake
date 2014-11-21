<div class="userroles view">
<h2><?php echo __('Userrole'); ?></h2>
	<dl>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userrole['User']['idUser'], array('controller' => 'users', 'action' => 'view', $userrole['User']['idUser'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userrole['Role']['Name'], array('controller' => 'roles', 'action' => 'view', $userrole['Role']['idRole'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educationcontactperson'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userrole['Educationcontactperson']['idEducationContactPerson'], array('controller' => 'educationcontactpeople', 'action' => 'view', $userrole['Educationcontactperson']['idEducationContactPerson'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userrole['Student']['idStudent'], array('controller' => 'students', 'action' => 'view', $userrole['Student']['idStudent'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Companycontactperson'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userrole['Companycontactperson']['idCompanyContactPerson'], array('controller' => 'companycontactpeople', 'action' => 'view', $userrole['Companycontactperson']['idCompanyContactPerson'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Userrole'), array('action' => 'edit', $userrole['Userrole']['idUser, idRole'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Userrole'), array('action' => 'delete', $userrole['Userrole']['idUser, idRole']), array(), __('Are you sure you want to delete # %s?', $userrole['Userrole']['idUser, idRole'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Userroles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Userrole'), array('action' => 'add')); ?> </li>
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
