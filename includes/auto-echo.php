<?php
    /**
    * Made with love By 狱杰1Jnver
    * Link: https://yujienb.cn/
    * Theme: DARLING
    */
    if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<style>
    .zero-post-bg{
        background-image:url(<?php $this->options->themeUrl('/images/post-background.png');?>);
    }
    /** 全局字体粗细 */
    html{font-weight: <?php $this->options->fontweight(); ?>;}
    /** 电脑端背景 */
    <?php if($this->options->custom_pc_background):?>
    body{
        background-image: url(<?php $this->options->custom_pc_background();?>);
        filter: opacity(10%);
    }
    <?php else:?>
        body{
        background-image: url(<?php $this->options->themeUrl('/images/bg.png')?>);
    }
    <?php endif;?>
    /** 移动端背景 */
    <?php if($this->options->custom_mobile_background):?>
    @media screen and (max-width: 768px){
        body{background-image: url(<?php $this->options->custom_mobile_background();?>);}
    }
    <?php else:?>
    @media screen and (max-width: 768px){
        body{background-image: url(<?php $this->options->themeUrl('images/bg-mobile.png')?>);}
    }
    <?php endif;?>
</style>