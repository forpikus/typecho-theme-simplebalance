<?php if ($this->is('page')) {return;}?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <span class="widget-title"><?php $this->commentsNum(_t('No replies'), _t('1 reply'), _t('%d replies')); ?></span>
    <?php $comments->listComments(); ?>
    <?php $comments->pageNav('&laquo; Prev', 'Next &raquo;'); ?>
    <?php endif; ?>
    <?php if($this->allow('comment') && $this->user->hasLogin()): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
        <span id="response" class="widget-title"><?php _e('New reply'); ?>&nbsp;&lt;<?php $this->user->screenName();?>&gt;</span>
        <div id="comment-frame" style="border:1px solid #ddd;">
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form">
            <div class="col1">
            <p>
                <textarea rows="8" cols="50" name="text" class="textarea" id="commenttext" style="border:none;"><?php $this->remember('text'); ?></textarea>
            </p>
            </div>
            <div class="col1">
                <button type="submit" class="submit"><?php _e('Commit'); ?></button>
            </div>
            <div class="clear"></div>
        </form>
        </div>
    </div>
    <?php else: ?>
    <?php endif; ?>
</div>