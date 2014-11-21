<div class="jobpostings view">
<h2><?php echo __('Jobposting'); ?></h2>
	<dl>
		<dt><?php echo __('IdJobPosting'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['idJobPosting']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['Title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirements'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['Requirements']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StartDatePosting'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['StartDatePosting']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndDatePosting'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['EndDatePosting']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VacancyAvailable'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['VacancyAvailable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DurationDays'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['DurationDays']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StartDateWork'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['StartDateWork']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sallary'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['Sallary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobposting['JobCategory']['Name'], array('controller' => 'jobcategories', 'action' => 'view', $jobposting['JobCategory']['y'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdActivationStatus'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['idActivationStatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jobtype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobposting['Jobtype']['Name'], array('controller' => 'jobtypes', 'action' => 'view', $jobposting['Jobtype']['idJobType'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['Visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedDate'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['CreatedDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateDate'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['LastUpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedBy'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['CreatedBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateBy'); ?></dt>
		<dd>
			<?php echo h($jobposting['Jobposting']['LastUpdateBy']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobposting'), array('action' => 'edit', $jobposting['Jobposting']['idJobPosting'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobposting'), array('action' => 'delete', $jobposting['Jobposting']['idJobPosting']), array(), __('Are you sure you want to delete # %s?', $jobposting['Jobposting']['idJobPosting'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobpostings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobposting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobcategories'), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Category'), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobtypes'), array('controller' => 'jobtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobtype'), array('controller' => 'jobtypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
