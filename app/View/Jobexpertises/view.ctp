<div class="jobexpertises view">
<h2><?php echo __('Jobexpertise'); ?></h2>
	<dl>
		<dt><?php echo __('Job Posting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobexpertise['JobPosting']['idJobPosting'], array('controller' => 'jobpostings', 'action' => 'view', $jobexpertise['JobPosting']['idJobPosting'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expertise'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobexpertise['Expertise']['Name'], array('controller' => 'expertises', 'action' => 'view', $jobexpertise['Expertise']['idExpertise'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobexpertise'), array('action' => 'edit', $jobexpertise['Jobexpertise']['idExpertise, idJobPosting'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobexpertise'), array('action' => 'delete', $jobexpertise['Jobexpertise']['idExpertise, idJobPosting']), array(), __('Are you sure you want to delete # %s?', $jobexpertise['Jobexpertise']['idExpertise, idJobPosting'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobexpertises'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobexpertise'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expertises'), array('controller' => 'expertises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expertise'), array('controller' => 'expertises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobpostings'), array('controller' => 'jobpostings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Posting'), array('controller' => 'jobpostings', 'action' => 'add')); ?> </li>
	</ul>
</div>
