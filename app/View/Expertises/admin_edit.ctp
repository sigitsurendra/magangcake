<div class="expertises form">
<?php echo $this->Form->create('Expertise'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Expertise'); ?></legend>
	<?php
		echo $this->Form->input('idExpertise');
		echo $this->Form->input('Name');
		echo $this->Form->input('Description');
		echo $this->Form->input('Visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Expertise.idExpertise')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Expertise.idExpertise'))); ?></li>
		<li><?php echo $this->Html->link(__('List Expertises'), array('action' => 'index')); ?></li>
	</ul>
</div>
