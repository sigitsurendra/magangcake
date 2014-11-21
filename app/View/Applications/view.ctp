<div class="applications view">
<h2><?php echo __('Application'); ?></h2>
	<dl>
		<dt><?php echo __('IdApplication'); ?></dt>
		<dd>
			<?php echo h($application['Application']['idApplication']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ApplicationDate'); ?></dt>
		<dd>
			<?php echo h($application['Application']['ApplicationDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($application['Student']['idStudent'], array('controller' => 'students', 'action' => 'view', $application['Student']['idStudent'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jobposting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($application['Jobposting']['idJobPosting'], array('controller' => 'jobpostings', 'action' => 'view', $application['Jobposting']['idJobPosting'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Applicationstatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($application['Applicationstatus']['Name'], array('controller' => 'applicationstatuses', 'action' => 'view', $application['Applicationstatus']['idApplicationStatus'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($application['Application']['Visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Application'), array('action' => 'edit', $application['Application']['idApplication'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Application'), array('action' => 'delete', $application['Application']['idApplication']), array(), __('Are you sure you want to delete # %s?', $application['Application']['idApplication'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobpostings'), array('controller' => 'jobpostings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobposting'), array('controller' => 'jobpostings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applicationstatuses'), array('controller' => 'applicationstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicationstatus'), array('controller' => 'applicationstatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
