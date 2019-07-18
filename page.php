<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


		<div id="page">
			<div id="page-content">
				<h2 id="page-content-title"><?php if($this->is('page','About')): ?><img src="<?php $this->options->themeUrl('IMG/about.png'); ?>"><?php endif; ?><?php $this->title();?></h2>
				<div id="page-content-article">
					<?php $this->content();?>
				</div>
			</div>
		</div>



	<?php $this->need('footer.php'); ?>
