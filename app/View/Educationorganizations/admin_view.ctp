<div class="educationorganizations view">
<h2><?php echo __('Educationorganization'); ?></h2>
	<dl>
		<dt><?php echo __('IdEducationOrganization'); ?></dt>
		<dd>
			<?php echo h($educationorganization['Educationorganization']['idEducationOrganization']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($educationorganization['Educationorganization']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($educationorganization['Educationorganization']['Address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone1'); ?></dt>
		<dd>
			<?php echo h($educationorganization['Educationorganization']['Phone1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone2'); ?></dt>
		<dd>
			<?php echo h($educationorganization['Educationorganization']['Phone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone3'); ?></dt>
		<dd>
			<?php echo h($educationorganization['Educationorganization']['Phone3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($educationorganization['Educationorganization']['Fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educationcategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($educationorganization['Educationcategory']['Name'], array('controller' => 'educationcategories', 'action' => 'view', $educationorganization['Educationcategory']['idEducationCategory'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($educationorganization['Educationorganization']['Email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($educationorganization['Educationorganization']['Visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedDate'); ?></dt>
		<dd>
			<?php echo h($educationorganization['Educationorganization']['CreatedDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateDate'); ?></dt>
		<dd>
			<?php echo h($educationorganization['Educationorganization']['LastUpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedBy'); ?></dt>
		<dd>
			<?php echo h($educationorganization['Educationorganization']['CreatedBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateBy'); ?></dt>
		<dd>
			<?php echo h($educationorganization['Educationorganization']['LastUpdateBy']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Educationorganization'), array('action' => 'edit', $educationorganization['Educationorganization']['idEducationOrganization'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Educationorganization'), array('action' => 'delete', $educationorganization['Educationorganization']['idEducationOrganization']), array(), __('Are you sure you want to delete # %s?', $educationorganization['Educationorganization']['idEducationOrganization'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Educationorganizations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educationorganization'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educationcategories'), array('controller' => 'educationcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educationcategory'), array('controller' => 'educationcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
