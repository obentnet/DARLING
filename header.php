<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
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
    <link rel="stylesheet" href="<?php $this->options->themeUrl('DARLING.css')?>">
    <!--Favicon-->
    <?php if ($this->options->favicon): ?>
    <link rel="shortcut icon" href="<?php $this->options->favicon();?>" type="image/x-icon">
    <?php else:?>
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico')?>" type="image/x-icon">
    <?php endif;?>
    <?php $this->header(); ?>
    <style>
        /** 全局字体粗细 */
        html{font-weight: <?php $this->options->fontweight(); ?>;}
        /** 电脑端背景 */
        <?php if($this->options->custom_pc_background):?>
        body{background-image: url(<?php $this->options->custom_pc_background();?>);}
        <?php else:?>
         body{background-image: url(<?php $this->options->themeurl('./images/bg.png')?>);}
        <?php endif;?>
        /** 移动端背景 */
        <?php if($this->options->custom_mobile_background):?>
        @media screen and (max-width: 768px){
        body{background-image: url(<?php $this->options->custom_mobile_background();?>);}
        }
        <?php else:?>
        @media screen and (max-width: 768px){
            body{background-image: url(<?php $this->options->themeurl('./images/bg-mobile.png')?>);}
        }
        <?php endif;?>
    </style>
    <?php if($this -> options -> custom_css): ?>
        <style><?php $this -> options -> custom_css(); ?></style>
    <?php endif; ?>
</head>
<body id="body">
    <header>
        <a class="header-title" href="/"><?php $this->options->title(); ?> </a>| <?php $this->options->description() ?>
        <nav>
            <ul style="display: flex;">
                <li style="list-style:none;margin-right: 5px;">
                    <a href="<?php $this->options->siteUrl(); ?>" class="simple-a">首页</a>
                </li>
                <?php $this->widget('Widget_Contents_Page_List')
                            ->parse('<li style="list-style:none;margin-right: 5px;">
                                        <a href="{permalink}" class="simple-a">{title}</a>
                                    </li>'); ?>
            </ul>
        </nav>
    </header>