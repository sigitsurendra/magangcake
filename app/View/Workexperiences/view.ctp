<div class="workexperiences view">
<h2><?php echo __('Workexperience'); ?></h2>
	<dl>
		<dt><?php echo __('IdWorkExperiences'); ?></dt>
		<dd>
			<?php echo h($workexperience['Workexperience']['idWorkExperiences']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($workexperience['Workexperience']['Title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo h($workexperience['Workexperience']['Company']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StartDate'); ?></dt>
		<dd>
			<?php echo h($workexperience['Workexperience']['StartDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndDate'); ?></dt>
		<dd>
			<?php echo h($workexperience['Workexperience']['EndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($workexperience['Workexperience']['Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ReferenceName'); ?></dt>
		<dd>
			<?php echo h($workexperience['Workexperience']['ReferenceName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ReferencePhone'); ?></dt>
		<dd>
			<?php echo h($workexperience['Workexperience']['ReferencePhone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SupportFilePath'); ?></dt>
		<dd>
			<?php echo h($workexperience['Workexperience']['SupportFilePath']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($workexperience['Student']['idStudent'], array('controller' => 'students', 'action' => 'view', $workexperience['Student']['idStudent'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($workexperience['Workexperience']['Visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Workexperience'), array('action' => 'edit', $workexperience['Workexperience']['idWorkExperiences'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Workexperience'), array('action' => 'delete', $workexperience['Workexperience']['idWorkExperiences']), array(), __('Are you sure you want to delete # %s?', $workexperience['Workexperience']['idWorkExperiences'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Workexperiences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Workexperience'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
