<?php
/**
* 分类合集页面
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="u-backgroundGrayLightest u-marginBottom50 hasHeaderBackground" style="background-image: url(//static.fatesinger.com/2016/11/tkbh7oxv2k2zhf09.png!/both/1280x400)">
    <header class="hero--standalone layoutSingleColumn layoutSingleColumn--wide">
        <h2 class="hero-title">分类</h2>
    </header>
</div>


<div class="list--collection layoutSingleColumn">
	<?php $this->widget('Widget_Metas_Category_List')->to($categorys);?>
    <?php if ($categorys->have()): ?>
    <?php while($categorys->next()): ?>
    <div class="list list--borderedBottom">
        <a class="listItem u-clearfix u-block" href="<?php $categorys->permalink();?>">
            <div class="list-meta">
	            <div class="list-title"><?php $categorys->name();?></div>
	            <div class="list-description"><?php echo $categorys->description(); ?></div>
            </div>
        </a>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php $this->need('footer.php'); ?>