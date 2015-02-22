<?php
function themeConfig($form) {
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    $relativeLinks = new Typecho_Widget_Helper_Form_Element_Textarea('relativeLinks',
    NULL,NULL,_t('友情链接（一个行一个&lt;title##link&gt;）'));
    
    $form->addInput($sidebarBlock->multiMode());
    $form->addInput($relativeLinks);
}