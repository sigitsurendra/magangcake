<div class="newscategories view">
<h2><?php echo __('Newscategory'); ?></h2>
	<dl>
		<dt><?php echo __('IdNewsCategory'); ?></dt>
		<dd>
			<?php echo h($newscategory['Newscategory']['idNewsCategory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($newscategory['Newscategory']['Name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Newscategory'), array('action' => 'edit', $newscategory['Newscategory']['idNewsCategory'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Newscategory'), array('action' => 'delete', $newscategory['Newscategory']['idNewsCategory']), array(), __('Are you sure you want to delete # %s?', $newscategory['Newscategory']['idNewsCategory'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Newscategories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Newscategory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related News'); ?></h3>
	<?php if (!empty($newscategory['News'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdNews'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('CreatedDate'); ?></th>
		<th><?php echo __('LastUpdateDate'); ?></th>
		<th><?php echo __('CreatedBy'); ?></th>
		<th><?php echo __('LastUpdateBy'); ?></th>
		<th><?php echo __('IdActivationStatus'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th><?php echo __('Pinned'); ?></th>
		<th><?php echo __('IdNewsCategory'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($newscategory['News'] as $news): ?>
		<tr>
			<td><?php echo $news['idNews']; ?></td>
			<td><?php echo $news['Content']; ?></td>
			<td><?php echo $news['CreatedDate']; ?></td>
			<td><?php echo $news['LastUpdateDate']; ?></td>
			<td><?php echo $news['CreatedBy']; ?></td>
			<td><?php echo $news['LastUpdateBy']; ?></td>
			<td><?php echo $news['idActivationStatus']; ?></td>
			<td><?php echo $news['Visible']; ?></td>
			<td><?php echo $news['Pinned']; ?></td>
			<td><?php echo $news['idNewsCategory']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'news', 'action' => 'view', $news['idNews'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'news', 'action' => 'edit', $news['idNews'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'news', 'action' => 'delete', $news['idNews']), array(), __('Are you sure you want to delete # %s?', $news['idNews'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
