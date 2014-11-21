<div class="jobcategories view">
<h2><?php echo __('Jobcategory'); ?></h2>
	<dl>
		<dt><?php echo __('IdJobCategory'); ?></dt>
		<dd>
			<?php echo h($jobcategory['Jobcategory']['idJobCategory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($jobcategory['Jobcategory']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($jobcategory['Jobcategory']['Description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobcategory'), array('action' => 'edit', $jobcategory['Jobcategory']['y'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobcategory'), array('action' => 'delete', $jobcategory['Jobcategory']['y']), array(), __('Are you sure you want to delete # %s?', $jobcategory['Jobcategory']['y'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobcategories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobcategory'), array('action' => 'add')); ?> </li>
	</ul>
</div>
