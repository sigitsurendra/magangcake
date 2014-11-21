<div class="students view">
<h2><?php echo __('Student'); ?></h2>
	<dl>
		<dt><?php echo __('IdStudent'); ?></dt>
		<dd>
			<?php echo h($student['Student']['idStudent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone1'); ?></dt>
		<dd>
			<?php echo h($student['Student']['Phone1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone2'); ?></dt>
		<dd>
			<?php echo h($student['Student']['Phone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone3'); ?></dt>
		<dd>
			<?php echo h($student['Student']['Phone3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($student['Student']['Address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume'); ?></dt>
		<dd>
			<?php echo h($student['Student']['Resume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email1'); ?></dt>
		<dd>
			<?php echo h($student['Student']['Email1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email2'); ?></dt>
		<dd>
			<?php echo h($student['Student']['Email2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($student['Student']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($student['Student']['Visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedDate'); ?></dt>
		<dd>
			<?php echo h($student['Student']['CreatedDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateDate'); ?></dt>
		<dd>
			<?php echo h($student['Student']['LastUpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedBy'); ?></dt>
		<dd>
			<?php echo h($student['Student']['CreatedBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateBy'); ?></dt>
		<dd>
			<?php echo h($student['Student']['LastUpdateBy']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['idStudent'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['idStudent']), array(), __('Are you sure you want to delete # %s?', $student['Student']['idStudent'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Workexperiences'); ?></h3>
	<?php if (!empty($student['Workexperience'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdWorkExperiences'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Company'); ?></th>
		<th><?php echo __('StartDate'); ?></th>
		<th><?php echo __('EndDate'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('ReferenceName'); ?></th>
		<th><?php echo __('ReferencePhone'); ?></th>
		<th><?php echo __('SupportFilePath'); ?></th>
		<th><?php echo __('IdStudent'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Workexperience'] as $workexperience): ?>
		<tr>
			<td><?php echo $workexperience['idWorkExperiences']; ?></td>
			<td><?php echo $workexperience['Title']; ?></td>
			<td><?php echo $workexperience['Company']; ?></td>
			<td><?php echo $workexperience['StartDate']; ?></td>
			<td><?php echo $workexperience['EndDate']; ?></td>
			<td><?php echo $workexperience['Description']; ?></td>
			<td><?php echo $workexperience['ReferenceName']; ?></td>
			<td><?php echo $workexperience['ReferencePhone']; ?></td>
			<td><?php echo $workexperience['SupportFilePath']; ?></td>
			<td><?php echo $workexperience['idStudent']; ?></td>
			<td><?php echo $workexperience['Visible']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'workexperiences', 'action' => 'view', $workexperience['idWorkExperiences'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'workexperiences', 'action' => 'edit', $workexperience['idWorkExperiences'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'workexperiences', 'action' => 'delete', $workexperience['idWorkExperiences']), array(), __('Are you sure you want to delete # %s?', $workexperience['idWorkExperiences'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Workexperience'), array('controller' => 'workexperiences', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Userroles'); ?></h3>
	<?php if (!empty($student['Userrole'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdUser'); ?></th>
		<th><?php echo __('IdRole'); ?></th>
		<th><?php echo __('IdEducationContactPerson'); ?></th>
		<th><?php echo __('IdStudent'); ?></th>
		<th><?php echo __('IdCompanyContactPerson'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Userrole'] as $userrole): ?>
		<tr>
			<td><?php echo $userrole['idUser']; ?></td>
			<td><?php echo $userrole['idRole']; ?></td>
			<td><?php echo $userrole['idEducationContactPerson']; ?></td>
			<td><?php echo $userrole['idStudent']; ?></td>
			<td><?php echo $userrole['idCompanyContactPerson']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'userroles', 'action' => 'view', $userrole['idUser, idRole'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'userroles', 'action' => 'edit', $userrole['idUser, idRole'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'userroles', 'action' => 'delete', $userrole['idUser, idRole']), array(), __('Are you sure you want to delete # %s?', $userrole['idUser, idRole'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Userrole'), array('controller' => 'userroles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Applications'); ?></h3>
	<?php if (!empty($student['Application'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdApplication'); ?></th>
		<th><?php echo __('ApplicationDate'); ?></th>
		<th><?php echo __('IdStudent'); ?></th>
		<th><?php echo __('IdJobPosting'); ?></th>
		<th><?php echo __('IdApplicationStatus'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Application'] as $application): ?>
		<tr>
			<td><?php echo $application['idApplication']; ?></td>
			<td><?php echo $application['ApplicationDate']; ?></td>
			<td><?php echo $application['idStudent']; ?></td>
			<td><?php echo $application['idJobPosting']; ?></td>
			<td><?php echo $application['idApplicationStatus']; ?></td>
			<td><?php echo $application['Visible']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'applications', 'action' => 'view', $application['idApplication'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'applications', 'action' => 'edit', $application['idApplication'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'applications', 'action' => 'delete', $application['idApplication']), array(), __('Are you sure you want to delete # %s?', $application['idApplication'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Organizationexperiences'); ?></h3>
	<?php if (!empty($student['Organizationexperiences'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdOrganizationExperiences'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('IdStudent'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th><?php echo __('CreatedDate'); ?></th>
		<th><?php echo __('LastUpdateDate'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Organizationexperiences'] as $organizationexperiences): ?>
		<tr>
			<td><?php echo $organizationexperiences['idOrganizationExperiences']; ?></td>
			<td><?php echo $organizationexperiences['Title']; ?></td>
			<td><?php echo $organizationexperiences['Description']; ?></td>
			<td><?php echo $organizationexperiences['Year']; ?></td>
			<td><?php echo $organizationexperiences['idStudent']; ?></td>
			<td><?php echo $organizationexperiences['Visible']; ?></td>
			<td><?php echo $organizationexperiences['CreatedDate']; ?></td>
			<td><?php echo $organizationexperiences['LastUpdateDate']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'organizationexperiences', 'action' => 'view', $organizationexperiences['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'organizationexperiences', 'action' => 'edit', $organizationexperiences['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'organizationexperiences', 'action' => 'delete', $organizationexperiences['id']), array(), __('Are you sure you want to delete # %s?', $organizationexperiences['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Organizationexperiences'), array('controller' => 'organizationexperiences', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Studentorganizations'); ?></h3>
	<?php if (!empty($student['Studentorganization'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdStudent'); ?></th>
		<th><?php echo __('IdEducationOrganization'); ?></th>
		<th><?php echo __('YearStart'); ?></th>
		<th><?php echo __('YearEnd'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Studentorganization'] as $studentorganization): ?>
		<tr>
			<td><?php echo $studentorganization['idStudent']; ?></td>
			<td><?php echo $studentorganization['idEducationOrganization']; ?></td>
			<td><?php echo $studentorganization['YearStart']; ?></td>
			<td><?php echo $studentorganization['YearEnd']; ?></td>
			<td><?php echo $studentorganization['Visible']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'studentorganizations', 'action' => 'view', $studentorganization['idStudent,idEducationOrganization'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'studentorganizations', 'action' => 'edit', $studentorganization['idStudent,idEducationOrganization'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'studentorganizations', 'action' => 'delete', $studentorganization['idStudent,idEducationOrganization']), array(), __('Are you sure you want to delete # %s?', $studentorganization['idStudent,idEducationOrganization'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Studentorganization'), array('controller' => 'studentorganizations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Studentexpertises'); ?></h3>
	<?php if (!empty($student['Studentexpertise'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdExpertise'); ?></th>
		<th><?php echo __('IdStudent'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Studentexpertise'] as $studentexpertise): ?>
		<tr>
			<td><?php echo $studentexpertise['idExpertise']; ?></td>
			<td><?php echo $studentexpertise['idStudent']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'studentexpertises', 'action' => 'view', $studentexpertise['idExpertise,idStudent'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'studentexpertises', 'action' => 'edit', $studentexpertise['idExpertise,idStudent'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'studentexpertises', 'action' => 'delete', $studentexpertise['idExpertise,idStudent']), array(), __('Are you sure you want to delete # %s?', $studentexpertise['idExpertise,idStudent'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Studentexpertise'), array('controller' => 'studentexpertises', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
