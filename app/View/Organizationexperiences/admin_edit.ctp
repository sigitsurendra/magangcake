<div class="organizationexperiences form">
<?php echo $this->Form->create('Organizationexperience'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Organizationexperience'); ?></legend>
	<?php
		echo $this->Form->input('idOrganizationExperiences');
		echo $this->Form->input('Title');
		echo $this->Form->input('Description');
		echo $this->Form->input('Year');
		echo $this->Form->input('idStudent');
		echo $this->Form->input('Visible');
		echo $this->Form->input('CreatedDate');
		echo $this->Form->input('LastUpdateDate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Organizationexperience.idOrganizationExperiences')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Organizationexperience.idOrganizationExperiences'))); ?></li>
		<li><?php echo $this->Html->link(__('List Organizationexperiences'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
