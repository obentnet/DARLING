<?php
    /**
    * Made with love By 狱杰1Jnver
    * Link: https://yujienb.cn/
    * Theme: DARLING
    */
    if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css')?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('includes/DARLING.css')?>">
    <?php $this->need('includes/auto-echo.php');?>
    <!--Favicon-->
    <?php if ($this->options->favicon): ?>
    <link rel="shortcut icon" href="<?php $this->options->favicon();?>" type="image/x-icon">
    <?php else:?>
    <link rel="shortcut icon" href="<?php $this->options->global_favicon();?>" type="image/x-icon">
    <?php endif;?>
    <?php $this->header(); ?>
    <?php if($this -> options -> custom_css): ?>
        <style><?php $this -> options -> custom_css(); ?></style>
    <?php endif; ?>
</head>
<body id="body">
    <div class="bg"></div>
    <header>
        <a class="header-title" href="/"><?php $this->options->title(); ?> </a>| <?$this->options->custom_des();?>
        <nav>
            <ul style="display: flex;">
                <li style="list-style:none;margin-right: 5px;">
                    <a href="<?php $this->options->siteUrl(); ?>" class="simple-a post-link">首页</a>
                </li>
                <?php $this->widget('Widget_Contents_Page_List')
                            ->parse('<li style="list-style:none;margin-right: 5px;">
                                        <a href="{permalink}" class="simple-a post-link">{title}</a>
                                    </li>'); ?>
                <li style="list-style:none;margin-right: 5px;">
                    <?php if($this->user->hasLogin()): ?>
                    <a href="" class="simple-a post-link" onclick="LoginTypechoAdmin()">进入后台</a>
                    <?php else:?>
                    <a href="" class="simple-a post-link" onclick="LoginTypechoAdmin()">登入</a>
                    <?php endif;?>
                </li>
            </ul>
        </nav>
    </header>