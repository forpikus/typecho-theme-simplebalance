<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
	<?php if ( !isset($this->fields->private) || $this->user->pass("administrator", true)): ?>
		<article class="post">
			<div class="post-meta">
				<?php $this->date('F j, Y'); ?>&nbsp;&lt;<?php $this->category();?>&gt;
			</div>
			<header>
				<h1 class="post-title"><?php $this->title() ?>
				<small><a href=<?php $this->author->permalink() ?>><?php $this->author(); ?></a></small>
				</h1>
			</header>
			<div class="post-content">
				<?php $this->content(); ?>
			</div>
		</article>
		<?php $this->need('comments.php'); ?>
	<?php else:?>
		<article class="post">
		<header><h1 class="post-title">Post is not valid.</h1></header>
		<br/>
		</article>
	<?php endif;?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
