<div class="organizationexperiences view">
<h2><?php echo __('Organizationexperience'); ?></h2>
	<dl>
		<dt><?php echo __('IdOrganizationExperiences'); ?></dt>
		<dd>
			<?php echo h($organizationexperience['Organizationexperience']['idOrganizationExperiences']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($organizationexperience['Organizationexperience']['Title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($organizationexperience['Organizationexperience']['Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($organizationexperience['Organizationexperience']['Year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($organizationexperience['Student']['idStudent'], array('controller' => 'students', 'action' => 'view', $organizationexperience['Student']['idStudent'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($organizationexperience['Organizationexperience']['Visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedDate'); ?></dt>
		<dd>
			<?php echo h($organizationexperience['Organizationexperience']['CreatedDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateDate'); ?></dt>
		<dd>
			<?php echo h($organizationexperience['Organizationexperience']['LastUpdateDate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Organizationexperience'), array('action' => 'edit', $organizationexperience['Organizationexperience']['idOrganizationExperiences'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Organizationexperience'), array('action' => 'delete', $organizationexperience['Organizationexperience']['idOrganizationExperiences']), array(), __('Are you sure you want to delete # %s?', $organizationexperience['Organizationexperience']['idOrganizationExperiences'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizationexperiences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organizationexperience'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
