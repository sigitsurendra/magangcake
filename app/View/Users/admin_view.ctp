<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('IdUser'); ?></dt>
		<dd>
			<?php echo h($user['User']['idUser']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UserName'); ?></dt>
		<dd>
			<?php echo h($user['User']['UserName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['Password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastLoginDate'); ?></dt>
		<dd>
			<?php echo h($user['User']['LastLoginDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LoginAttempt'); ?></dt>
		<dd>
			<?php echo h($user['User']['LoginAttempt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdActivationStatus'); ?></dt>
		<dd>
			<?php echo h($user['User']['idActivationStatus']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['idUser'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['idUser']), array(), __('Are you sure you want to delete # %s?', $user['User']['idUser'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
