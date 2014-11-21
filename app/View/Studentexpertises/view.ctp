<div class="studentexpertises view">
<h2><?php echo __('Studentexpertise'); ?></h2>
	<dl>
		<dt><?php echo __('Expertise'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentexpertise['Expertise']['Name'], array('controller' => 'expertises', 'action' => 'view', $studentexpertise['Expertise']['idExpertise'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentexpertise['Student']['idStudent'], array('controller' => 'students', 'action' => 'view', $studentexpertise['Student']['idStudent'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Studentexpertise'), array('action' => 'edit', $studentexpertise['Studentexpertise']['idExpertise,idStudent'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Studentexpertise'), array('action' => 'delete', $studentexpertise['Studentexpertise']['idExpertise,idStudent']), array(), __('Are you sure you want to delete # %s?', $studentexpertise['Studentexpertise']['idExpertise,idStudent'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentexpertises'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentexpertise'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expertises'), array('controller' => 'expertises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expertise'), array('controller' => 'expertises', 'action' => 'add')); ?> </li>
	</ul>
</div>
