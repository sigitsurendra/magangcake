<div class="educationcontactpeople view">
<h2><?php echo __('Educationcontactperson'); ?></h2>
	<dl>
		<dt><?php echo __('IdEducationContactPerson'); ?></dt>
		<dd>
			<?php echo h($educationcontactperson['Educationcontactperson']['idEducationContactPerson']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($educationcontactperson['Educationcontactperson']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone1'); ?></dt>
		<dd>
			<?php echo h($educationcontactperson['Educationcontactperson']['Phone1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone2'); ?></dt>
		<dd>
			<?php echo h($educationcontactperson['Educationcontactperson']['Phone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone3'); ?></dt>
		<dd>
			<?php echo h($educationcontactperson['Educationcontactperson']['Phone3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($educationcontactperson['Educationcontactperson']['Email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educationorganization'); ?></dt>
		<dd>
			<?php echo $this->Html->link($educationcontactperson['Educationorganization']['idEducationOrganization'], array('controller' => 'educationorganizations', 'action' => 'view', $educationcontactperson['Educationorganization']['idEducationOrganization'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($educationcontactperson['Educationcontactperson']['Visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedDate'); ?></dt>
		<dd>
			<?php echo h($educationcontactperson['Educationcontactperson']['CreatedDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateDate'); ?></dt>
		<dd>
			<?php echo h($educationcontactperson['Educationcontactperson']['LastUpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedBy'); ?></dt>
		<dd>
			<?php echo h($educationcontactperson['Educationcontactperson']['CreatedBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateBy'); ?></dt>
		<dd>
			<?php echo h($educationcontactperson['Educationcontactperson']['LastUpdateBy']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Educationcontactperson'), array('action' => 'edit', $educationcontactperson['Educationcontactperson']['idEducationContactPerson'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Educationcontactperson'), array('action' => 'delete', $educationcontactperson['Educationcontactperson']['idEducationContactPerson']), array(), __('Are you sure you want to delete # %s?', $educationcontactperson['Educationcontactperson']['idEducationContactPerson'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Educationcontactpeople'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educationcontactperson'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educationorganizations'), array('controller' => 'educationorganizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educationorganization'), array('controller' => 'educationorganizations', 'action' => 'add')); ?> </li>
	</ul>
</div>
