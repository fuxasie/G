<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
	$this->need('header.php');
?>

<div id="post">
	<div id="post-header" style="background-image:url(<?php  $this->fields->imgurl(); ?>);">
		<div id="post-header-mask">
			<div id="post-header-content">
				<h2 id="post-content-title"><?php $this->title();?></h2>
				<span id="post-content-meta"><?php $this->date('F j, Y'); ?> · <?php $this->category(' · '); ?> · <?php get_post_view($this); ?>次阅读</span>
			</div>
		</div>
	</div>
	<div id="post-content">
		<div id="post-content-article">
			<?php
			$content = GetOriginalContent($this->cid);

			emotionContent($content,$this->options->themeUrl);
			 ?>
		</div>
	</div>

	<div id="post-footer" class="clear">
		<div id="post-tags"><p>标签：<?php $this->tags(',', true, 'none'); ?></p></div>
		<div id="post-lastEdit"><p>最后编辑于：<?php echo date('Y/m/d H:i' , $this->modified); ?></p></div>
	</div>
</div>
	<?php $this->need('comments.php'); ?>

	<?php $this->need('footer.php'); ?>
