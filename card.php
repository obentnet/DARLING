<?php
    if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    /**
     * 卡片页
     * @package custom
     */
    /**
    * Made with love By 狱杰1Jnver
    * Link: https://yujienb.cn/
    * Theme: DARLING
    */
?>
<?php $this->need('/includes/header.php')?>
<link rel="stylesheet" href="<?php $this->options->themeURL('static/contact.css')?>">
<link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico')?>" type="image/x-icon">
<link rel="stylesheet" href="<?php $this->options->themeUrl('static/font_tt3zqcqts1k/iconfont.css')?>">
<body>
    <div class="main">
        <div class="head-mod">
            <img src="<?php $this->options->themeUrl('images/head.png')?>" alt="" class="head-img">
        </div>
        <div class="info-mod">
            <h1><?php $this->author(); ?></h1>
            <span class="intr">
                <?php $this->options->crad_des();?>
            </span>
            <hr>
            <div class="attribute">
                <span class="sex">
                    <?php $this->options->card_sex();?>
                </span>
                <span class="age">
                    <?php $this->options->card_age();?>
                </span>
                <span class="marry"><?php $this->options->crad_marry();?></span>
            </div>
            <div class="contact">
                <?php if($this->options->card_link_live):?>
                <a href="<?php $this->options->card_link_live();?>"><span class="iconfont link-btn icon-live"></span></a>
                <?php endif;?>
                <?php if($this->options->card_link_github):?>
                <a href="<?php $this->options->card_link_github();?>"><span class="iconfont link-btn icon-github"></span></a>
                <?php endif;?>
                <?php if($this->options->card_link_weibo):?>
                <a href="<?php $this->options->card_link_weibo();?>"><span class="iconfont link-btn icon-weibo"></span></a>
                <?php endif;?>
                <?php if($this->options->card_link_instagram):?>
                <a href="<?php $this->options->card_link_instagram();?>"><span class="iconfont link-btn icon-instagram"></span></a>
                <?php endif;?>
                <?php if($this->options->card_link_qq):?>
                <a href="<?php $this->options->card_link_qq();?>"><span class="iconfont link-btn icon-QQ"></span></a>
                <?php endif;?>
                <?php if($this->options->card_link_wechat):?>
                <a href="<?php $this->options->card_link_wechat();?>"><span class="iconfont link-btn icon-wechat-fill"></span></a>
                <?php endif;?>
            </div>
        </div>
    </div>
    <?php $this->need('/includes/footer.php');?>
</body>
</html>