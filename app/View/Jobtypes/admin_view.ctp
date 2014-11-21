<div class="jobtypes view">
<h2><?php echo __('Jobtype'); ?></h2>
	<dl>
		<dt><?php echo __('IdJobType'); ?></dt>
		<dd>
			<?php echo h($jobtype['Jobtype']['idJobType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($jobtype['Jobtype']['Name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobtype'), array('action' => 'edit', $jobtype['Jobtype']['idJobType'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobtype'), array('action' => 'delete', $jobtype['Jobtype']['idJobType']), array(), __('Are you sure you want to delete # %s?', $jobtype['Jobtype']['idJobType'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobtypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobtype'), array('action' => 'add')); ?> </li>
	</ul>
</div>
