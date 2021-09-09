<?php
    /**
    * Made with love By 狱杰1Jnver
    * Link: https://yujienb.cn/
    * Theme: DARLING
    */
    if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    $this->need('/includes/header.php');
?>
<div class="article-main">
    <div class="post-info">
        <h1><?php $this->title();?></h1>
        <?php $this->date(); ?> | <span class="categroy-a-link"><?php $this->category(','); ?></span> | <?php $this->commentsNum('暂无评论~', '1 条评论', '%d 条评论'); ?>
    </div>
    <?php $this->content(); ?>
</div>
<?php
    $this->need('/includes/copyright.php');
    $this->need('/includes/comments.php');
    $this->need('/includes/footer.php');
?>