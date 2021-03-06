<?php
/**
 * Simple Balance Theme based on Maupassant (cho)
 * 
 * @package SimpleBalance
 * @author Forpikus Team
 * @version 0.9.5
 * @link https://github.com/forpikus/typecho-theme-simplebalance
 */
 $this->need('base.php');
 $this->need('header.php');
 ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<?php while($this->next()): ?>
			<?php if (isset($this->fields->private) && !_simpblc::isuacl($this->user, $this->fields->private)) continue; ?>
			<article class="post">
				<div class="post-meta">
					<?php $this->date('F j, Y'); ?>&nbsp;&lt;<?php $this->category();?>&gt;
				</div>
				<header>
					<h2 class="post-title">
						<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
						<small><a href=<?php $this->author->permalink() ?>><?php $this->author(); ?></a></small>
					</h2>
				</heaer>
				<div class="post-content">
					<?php $this->content('Read more >'); ?>
				</div>
			</article>
		<?php endwhile; ?>
		<?php $this->pageNav('&laquo; Previous','Next &raquo;',10,'...');?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
