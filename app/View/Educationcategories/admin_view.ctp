<div class="educationcategories view">
<h2><?php echo __('Educationcategory'); ?></h2>
	<dl>
		<dt><?php echo __('IdEducationCategory'); ?></dt>
		<dd>
			<?php echo h($educationcategory['Educationcategory']['idEducationCategory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($educationcategory['Educationcategory']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($educationcategory['Educationcategory']['Visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Educationcategory'), array('action' => 'edit', $educationcategory['Educationcategory']['idEducationCategory'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Educationcategory'), array('action' => 'delete', $educationcategory['Educationcategory']['idEducationCategory']), array(), __('Are you sure you want to delete # %s?', $educationcategory['Educationcategory']['idEducationCategory'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Educationcategories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educationcategory'), array('action' => 'add')); ?> </li>
	</ul>
</div>
