<?php
    /**
    * Made with love By 狱杰1Jnver
    * Link: https://yujienb.cn/
    * Theme: DARLING
    */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
   include 'DARLING.php';
   $tips = '卡片设置';
   echo '
      <style>
         .DARLING_functions_title{
            color: white;
            font-weight: 700;
            font-size: 70px;
            text-shadow: 0px 0px 15px rgb(242,196,196);;
         }
         .functions_main_div{
            text-align:center;
         }
      </style>
   ';
   echo '<div class="functions_main_div">
            <h1 class="DARLING_functions_title">DARLING</h1>
         </div>
         <div style="float:right;">v'.$now_version.'</div>
         '.$new_version.'
         ';

   echo '<h1>基础设置</h1>';
   // 自定义全局字体粗细
   $fontweight = new Typecho_Widget_Helper_Form_Element_Text('fontweight', NULL, '700', _t('全局字体粗细'), _t('建议范围 300~900'));
   $form->addInput($fontweight);

   // favicon
   $global_favicon = new Typecho_Widget_Helper_Form_Element_Text('global_favicon', NULL, 'https://yujienb.cn/favicon.ico', _t('Favicon'), _t('标签页的图标'));
   $form -> addInput($global_favicon);

   // 自定义标语
   $custom_des = new Typecho_Widget_Helper_Form_Element_Text('custom_des',NULL,'不要把世界让你给你讨厌的人',_t('自定义标志语'), _t('名人名言我觉得不错哟'));
   $form-> addInput($custom_des);

   // 自定义电脑端背景
   $custom_pc_background = new Typecho_Widget_Helper_Form_Element_Text('custom_pc_background',NULL, NULL,_t('电脑端背景'),_t('输入连接'));
   $form->addInput($custom_pc_background);

   // 自定义手机端背景
   $custom_mobile_background = new Typecho_Widget_Helper_Form_Element_Text('custom_mobile_background',NULL,NULL,_t('手机端背景'),_t('输入连接'));
   $form->addInput($custom_mobile_background);

   // 自定义样式表
   $custom_css = new Typecho_Widget_Helper_Form_Element_Textarea('custom_css', NULL, NULL, _t('自定义样式表'), _t('在这里填入你的自定义样式表，不填则不输出。'));
   $form -> addInput($custom_css);

   // 统计代码
   $custom_script = new Typecho_Widget_Helper_Form_Element_Textarea('custom_script', NULL, NULL, _t('统计代码'), _t('在这里填入你的统计代码，不填则不输出。需要 <a>&lt;script&gt;</a> 标签'));
   $form -> addInput($custom_script);

   // post

   // 卡片标语
   $crad_des = new Typecho_Widget_Helper_Form_Element_Text('crad_des',NULL,'一个简单的人',_t('卡片描述'), NULL);
   $form-> addInput($crad_des);

   // 卡片性别
   $card_sex = new Typecho_Widget_Helper_Form_Element_Radio('card_sex',
      array(
          '♀' => _t('♀'),
          '♂' => _t('♂'),
      ),
   '♂', _t('卡片性别'), _t('♀ = 女,♂ = 男'));
   $form -> addInput($card_sex);

   // 卡片年龄
   $card_age = new Typecho_Widget_Helper_Form_Element_Text('card_age',NULL,'18',_t('卡片年龄'), NULL);
   $form-> addInput($card_age);

   // 感情状态
   $crad_marry = new Typecho_Widget_Helper_Form_Element_Text('crad_marry',NULL,'Single',_t('感情状态'), NULL);
   $form-> addInput($crad_marry);

   // 联系方式
   // 直播间
   $card_link_live = new Typecho_Widget_Helper_Form_Element_Text('card_link_live',NULL,NULL,_t('link - 直播间'), NULL);
   $form -> addInput($card_link_live);

   // Github
   $card_link_github = new Typecho_Widget_Helper_Form_Element_Text('card_link_github',NULL,NULL,_t('link - Github'), NULL);
   $form -> addInput($card_link_github);

   //微博
   $card_link_weibo = new Typecho_Widget_Helper_Form_Element_Text('card_link_weibo',NULL,NULL,_t('link - 微博'), NULL);
   $form -> addInput($card_link_weibo);

   // instagram
   $card_link_instagram = new Typecho_Widget_Helper_Form_Element_Text('card_link_instagram',NULL,NULL,_t('link - instagram'), NULL);
   $form -> addInput($card_link_instagram);

   // QQ
   $card_link_qq = new Typecho_Widget_Helper_Form_Element_Text('card_link_qq',NULL,NULL,_t('link - QQ'), NULL);
   $form -> addInput($card_link_qq);

   // 微信
   $card_link_wechat = new Typecho_Widget_Helper_Form_Element_Text('card_link_wechat',NULL,NULL,_t('link - 微信'), NULL);
   $form -> addInput($card_link_wechat);
}
?>