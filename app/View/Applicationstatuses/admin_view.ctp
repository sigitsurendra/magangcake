<div class="applicationstatuses view">
<h2><?php echo __('Applicationstatus'); ?></h2>
	<dl>
		<dt><?php echo __('IdApplicationStatus'); ?></dt>
		<dd>
			<?php echo h($applicationstatus['Applicationstatus']['idApplicationStatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($applicationstatus['Applicationstatus']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($applicationstatus['Applicationstatus']['Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($applicationstatus['Applicationstatus']['Visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Applicationstatus'), array('action' => 'edit', $applicationstatus['Applicationstatus']['idApplicationStatus'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Applicationstatus'), array('action' => 'delete', $applicationstatus['Applicationstatus']['idApplicationStatus']), array(), __('Are you sure you want to delete # %s?', $applicationstatus['Applicationstatus']['idApplicationStatus'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Applicationstatuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicationstatus'), array('action' => 'add')); ?> </li>
	</ul>
</div>
