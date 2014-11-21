<div class="studentorganizations view">
<h2><?php echo __('Studentorganization'); ?></h2>
	<dl>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentorganization['Student']['idStudent'], array('controller' => 'students', 'action' => 'view', $studentorganization['Student']['idStudent'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educationorganization'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentorganization['Educationorganization']['idEducationOrganization'], array('controller' => 'educationorganizations', 'action' => 'view', $studentorganization['Educationorganization']['idEducationOrganization'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('YearStart'); ?></dt>
		<dd>
			<?php echo h($studentorganization['Studentorganization']['YearStart']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('YearEnd'); ?></dt>
		<dd>
			<?php echo h($studentorganization['Studentorganization']['YearEnd']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($studentorganization['Studentorganization']['Visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Studentorganization'), array('action' => 'edit', $studentorganization['Studentorganization']['idStudent,idEducationOrganization'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Studentorganization'), array('action' => 'delete', $studentorganization['Studentorganization']['idStudent,idEducationOrganization']), array(), __('Are you sure you want to delete # %s?', $studentorganization['Studentorganization']['idStudent,idEducationOrganization'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentorganizations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentorganization'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educationorganizations'), array('controller' => 'educationorganizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educationorganization'), array('controller' => 'educationorganizations', 'action' => 'add')); ?> </li>
	</ul>
</div>
