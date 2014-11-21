<div class="expertises view">
<h2><?php echo __('Expertise'); ?></h2>
	<dl>
		<dt><?php echo __('IdExpertise'); ?></dt>
		<dd>
			<?php echo h($expertise['Expertise']['idExpertise']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($expertise['Expertise']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($expertise['Expertise']['Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($expertise['Expertise']['Visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Expertise'), array('action' => 'edit', $expertise['Expertise']['idExpertise'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Expertise'), array('action' => 'delete', $expertise['Expertise']['idExpertise']), array(), __('Are you sure you want to delete # %s?', $expertise['Expertise']['idExpertise'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Expertises'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expertise'), array('action' => 'add')); ?> </li>
	</ul>
</div>
