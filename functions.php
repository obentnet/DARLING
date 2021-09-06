<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
   include 'DARLING.php';
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
   // 自定义全局字体粗细
   $fontweight = new Typecho_Widget_Helper_Form_Element_Text('fontweight', NULL, '700', _t('全局字体粗细'), _t('建议范围 300~900'));
   $form->addInput($fontweight);

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
}
?>