<?php
    if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    /**
     * 友情链接
     * @package custom
     */
    /**
    * Made with love By 狱杰1Jnver
    * Link: https://yujienb.cn/
    * Theme: DARLING
    */
?>
<?php $this->need('includes/header.php');?>
<style>
    .link-page>li{
        display: flex;
        max-width: 10px;
    }
</style>
<div class="link-page article-main">
    <?php Links_Plugin::output();?>
</div>

<?php $this->need('includes/footer.php');?>