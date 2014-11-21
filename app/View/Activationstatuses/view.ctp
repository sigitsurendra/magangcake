<div class="activationstatuses view">
<h2><?php echo __('Activationstatus'); ?></h2>
	<dl>
		<dt><?php echo __('IdActivationStatus'); ?></dt>
		<dd>
			<?php echo h($activationstatus['Activationstatus']['idActivationStatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($activationstatus['Activationstatus']['Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($activationstatus['Activationstatus']['Visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activationstatus'), array('action' => 'edit', $activationstatus['Activationstatus']['idActivationStatus'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activationstatus'), array('action' => 'delete', $activationstatus['Activationstatus']['idActivationStatus']), array(), __('Are you sure you want to delete # %s?', $activationstatus['Activationstatus']['idActivationStatus'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activationstatuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activationstatus'), array('action' => 'add')); ?> </li>
	</ul>
</div>
