<?php
defined('_JEXEC') or die;
?>

<div>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>

	<?php if (!empty($this->items)) : ?>
		<?php foreach ($this->items as $key => &$item) : ?>
			<div>
				<?php
				$this->item = & $item;
				echo $this->loadTemplate('item');
				?>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
