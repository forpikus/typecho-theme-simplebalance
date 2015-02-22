<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">
			<header>
				<h1 class="post-title">
					<?php $this->title() ?>
					<small><a href=<?php $this->author->permalink() ?>><?php $this->author(); ?></a></small>
				</h1>
			</header>
			<div class="page-content post-content">
				<?php $this->content(); ?>
			</div>
		</article>
		<?php $this->need('comments.php'); ?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>