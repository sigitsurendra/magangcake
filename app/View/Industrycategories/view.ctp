<div class="industrycategories view">
<h2><?php echo __('Industrycategory'); ?></h2>
	<dl>
		<dt><?php echo __('IdIndustryCategory'); ?></dt>
		<dd>
			<?php echo h($industrycategory['Industrycategory']['idIndustryCategory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($industrycategory['Industrycategory']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($industrycategory['Industrycategory']['Visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Industrycategory'), array('action' => 'edit', $industrycategory['Industrycategory']['idIndustryCategory'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Industrycategory'), array('action' => 'delete', $industrycategory['Industrycategory']['idIndustryCategory']), array(), __('Are you sure you want to delete # %s?', $industrycategory['Industrycategory']['idIndustryCategory'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Industrycategories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industrycategory'), array('action' => 'add')); ?> </li>
	</ul>
</div>
