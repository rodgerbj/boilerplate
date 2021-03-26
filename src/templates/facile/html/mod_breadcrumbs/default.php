<?php
defined('_JEXEC') or die;
?>

<ul class="menu">
<?php
foreach ($list as $key => $item) :
	$breadcrumbItem = '<span itemprop="name">' . $item->name . '</span>';
	?>
	<li><?php echo $breadcrumbItem; ?></li>
<?php endforeach; ?>
</ul>

