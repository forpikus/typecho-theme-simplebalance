<div id="secondary">
    <section class="widget">
        <form id="search" method="post" action="./">
            <input type="text" name="s" class="text" placeholder="Search..." />
            <button type="submit" class="submit icon-search">Search</button>
        </form>
    </section>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e('Latest Posts'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>
    
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e('Latest Replies'); ?></h3>
        <ul class="widget-list">
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(13, '...'); ?></li>
        <?php endwhile; ?>
        </ul>
    </section>
    <?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e('Category'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Metas_Category_List')
            ->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
        </ul>
    </section>
    <?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e('Archive'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>
    <?php if (!empty($this->options->relativeLinks)): ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e("Links"); ?></h3>
        <ul class="widget-list">
             <?php
               $links = explode("\n",$this->options->relativeLinks);
               foreach( $links as $link ) :
                   $detail = explode("##",$link); ?>
             <li><?php echo "<a href=\"".$detail[1]."\">".$detail[0]."</a>";?></li>
             <?php endforeach; ?>
        </ul>
    </section>
    <?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e('Others'); ?></h3>
        <ul class="widget-list">
            <?php if($this->user->hasLogin()): ?>
                <li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('Management'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('Logout'); ?></a></li>
            <?php else: ?>
                <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('Login'); ?></a></li>
            <?php endif; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('Post RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('Reply RSS'); ?></a></li>
            <li><a href="http://www.typecho.org">Typecho</a></li>
        </ul>
    </section>
    <?php endif; ?>
</div>