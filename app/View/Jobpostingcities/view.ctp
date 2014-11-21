<div class="jobpostingcities view">
<h2><?php echo __('Jobpostingcity'); ?></h2>
	<dl>
		<dt><?php echo __('Jobposting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobpostingcity['Jobposting']['idJobPosting'], array('controller' => 'jobpostings', 'action' => 'view', $jobpostingcity['Jobposting']['idJobPosting'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobpostingcity['City']['Name'], array('controller' => 'cities', 'action' => 'view', $jobpostingcity['City']['idCity'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobpostingcity'), array('action' => 'edit', $jobpostingcity['Jobpostingcity']['idJobPosting,idCity'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobpostingcity'), array('action' => 'delete', $jobpostingcity['Jobpostingcity']['idJobPosting,idCity']), array(), __('Are you sure you want to delete # %s?', $jobpostingcity['Jobpostingcity']['idJobPosting,idCity'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobpostingcities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobpostingcity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobpostings'), array('controller' => 'jobpostings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobposting'), array('controller' => 'jobpostings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
	</ul>
</div>
