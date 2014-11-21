<div class="news view">
<h2><?php echo __('News'); ?></h2>
	<dl>
		<dt><?php echo __('IdNews'); ?></dt>
		<dd>
			<?php echo h($news['News']['idNews']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($news['News']['Content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedDate'); ?></dt>
		<dd>
			<?php echo h($news['News']['CreatedDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateDate'); ?></dt>
		<dd>
			<?php echo h($news['News']['LastUpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedBy'); ?></dt>
		<dd>
			<?php echo h($news['News']['CreatedBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateBy'); ?></dt>
		<dd>
			<?php echo h($news['News']['LastUpdateBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdActivationStatus'); ?></dt>
		<dd>
			<?php echo h($news['News']['idActivationStatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($news['News']['Visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pinned'); ?></dt>
		<dd>
			<?php echo h($news['News']['Pinned']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Newscategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($news['Newscategory']['Name'], array('controller' => 'newscategories', 'action' => 'view', $news['Newscategory']['idNewsCategory'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit News'), array('action' => 'edit', $news['News']['idNews'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete News'), array('action' => 'delete', $news['News']['idNews']), array(), __('Are you sure you want to delete # %s?', $news['News']['idNews'])); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Newscategories'), array('controller' => 'newscategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Newscategory'), array('controller' => 'newscategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
