<?php
/**
 * Typecho Theme DARLING
 * 
 * 
 * @package DARLING
 * @author 狱杰1Jnver
 * @version 1.0.0
 * @link https://yujienb.cn/
 */


if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<?php if ($this->have()): ?>
    <div class="message-container">
    <?php while($this->next()): ?>	
        <article>
            <p><a href="<?php $this->permalink() ?>" class="post-link"><?php $this->title() ?></a></p>
            <div class="state"><?php $this->date(); ?> | <span class="categroy-a-link-index"><?php $this->category(','); ?></span> | <?php $this->commentsNum('暂无评论~', '1 条评论', '%d 条评论'); ?></div>
        </article>
    <?php endwhile;?>
    </div>
<?php endif;?>
<?php $this->need('footer.php')?>