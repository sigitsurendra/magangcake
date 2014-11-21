<div class="provinces view">
<h2><?php echo __('Province'); ?></h2>
	<dl>
		<dt><?php echo __('IdProvince'); ?></dt>
		<dd>
			<?php echo h($province['Province']['idProvince']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($province['Province']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($province['Country']['Name'], array('controller' => 'countries', 'action' => 'view', $province['Country']['idCountry'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Province'), array('action' => 'edit', $province['Province']['idProvince'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Province'), array('action' => 'delete', $province['Province']['idProvince']), array(), __('Are you sure you want to delete # %s?', $province['Province']['idProvince'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
