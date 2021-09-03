<?php
    if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    $this->need('header.php');
?>
<div class="article-main zero-shadow">
    <div class="post-info">
        <h1><?php $this->title();?></h1>
        <?php $this->date(); ?> | <span class="categroy-a-link"><?php $this->category(','); ?></span> | <?php $this->commentsNum('暂无评论~', '1 条评论', '%d 条评论'); ?>
    </div>
    <?php $this->content(); ?>
</div>
<?php
    $this->need('copyright.php');
    $this->need('comments.php');
    $this->need('footer.php');
?>