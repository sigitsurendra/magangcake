<div class="jobpostings form">
<?php echo $this->Form->create('Jobposting'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Jobposting'); ?></legend>
	<?php
		echo $this->Form->input('Title');
		echo $this->Form->input('Description');
		echo $this->Form->input('Requirements');
		echo $this->Form->input('StartDatePosting');
		echo $this->Form->input('EndDatePosting');
		echo $this->Form->input('VacancyAvailable');
		echo $this->Form->input('DurationDays');
		echo $this->Form->input('StartDateWork');
		echo $this->Form->input('Sallary');
		echo $this->Form->input('idJobCategory');
		echo $this->Form->input('idActivationStatus');
		echo $this->Form->input('idJobType');
		echo $this->Form->input('Visible');
		echo $this->Form->input('CreatedDate');
		echo $this->Form->input('LastUpdateDate');
		echo $this->Form->input('CreatedBy');
		echo $this->Form->input('LastUpdateBy');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Jobpostings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobcategories'), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Category'), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobtypes'), array('controller' => 'jobtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobtype'), array('controller' => 'jobtypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
