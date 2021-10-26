<?php
/**
 * A Typecho Theme.
 * <a href="https://github.com/obentnet/DARLING" target="_blank">项目地址</a> | <a href="https://afdian.net/@obent" target="_blank">购入进阶版</a>
 * 
 * 
 * @package DARLING
 * @author 狱杰1Jnver
 * @version 1.3
 * @link https://yujienb.cn/
 */


if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('/includes/header.php');
?>
<?php if ($this->have()): ?>
    <div class="message-container">
    <?php while($this->next()): ?>	
        <article>
            <div class="article-info">
                <p><a href="<?php $this->permalink() ?>" class="post-link bmxy"><?php $this->title() ?></a></p>
                <div class="state"><?php $this->date(); ?> | <span class="categroy-a-link-index"><?php $this->category(','); ?></span> | <?php $this->commentsNum('暂无评论~', '1 条评论', '%d 条评论'); ?></div>
            </div>
        </article>
    <?php endwhile;?>
    <div class="page-num-link">
        <?php $this->pageLink('下一页','next'); ?>
        <?php $this->pageLink('上一页'); ?>
    </div>
    </div>
<?php endif;?>
<?php $this->need('/includes/footer.php')?>