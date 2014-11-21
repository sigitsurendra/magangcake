<div class="companymembershiptypes view">
<h2><?php echo __('Companymembershiptype'); ?></h2>
	<dl>
		<dt><?php echo __('IdMembershipType'); ?></dt>
		<dd>
			<?php echo h($companymembershiptype['Companymembershiptype']['idMembershipType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($companymembershiptype['Companymembershiptype']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($companymembershiptype['Companymembershiptype']['Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($companymembershiptype['Companymembershiptype']['Visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Companymembershiptype'), array('action' => 'edit', $companymembershiptype['Companymembershiptype']['idMembershipType'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Companymembershiptype'), array('action' => 'delete', $companymembershiptype['Companymembershiptype']['idMembershipType']), array(), __('Are you sure you want to delete # %s?', $companymembershiptype['Companymembershiptype']['idMembershipType'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companymembershiptypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companymembershiptype'), array('action' => 'add')); ?> </li>
	</ul>
</div>
