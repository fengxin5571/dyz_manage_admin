<?php /* Smarty version Smarty-3.1.12, created on 2017-08-01 16:32:08
         compiled from ".\tpl\admin\verify_show.html" */ ?>
<?php /*%%SmartyHeaderCode:1383359803c88527479-77189736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '162b9c72f6e5f26e91a4fc37033ef1dd5bae4999' => 
    array (
      0 => '.\\tpl\\admin\\verify_show.html',
      1 => 1501575891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1383359803c88527479-77189736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'verify_info' => 0,
    'good' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_59803c88564504_54740333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59803c88564504_54740333')) {function content_59803c88564504_54740333($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\dyz.duyiwang.cn\\lib\\plugins\\modifier.truncate.php';
?><div class="review_con_zn">
    <p class="review_title_zn">
        <span class="review_title_man">录入人员</span>
        <span class="review_man"><?php echo $_smarty_tpl->tpl_vars['verify_info']->value['name'];?>
</span>
    </p>
    <div class="review_con">
        <p class="review_con_title">审批内容</p>
        <div class="review_con_box">
            <ul class="product_con_zn">
                <?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['verify_info']->value['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?>
                 <?php if ($_smarty_tpl->tpl_vars['good']->value['goods_type']==0){?>
                <li class="product_list_zn">
                    <span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['good']->value['name'],7,'');?>
</span>
                    <span>数量<?php echo $_smarty_tpl->tpl_vars['good']->value['count'];?>
</span>
                    <span>总价￥<?php echo $_smarty_tpl->tpl_vars['good']->value['count']*$_smarty_tpl->tpl_vars['good']->value['money'];?>
</span>
                </li>
                <?php }?>
                <?php } ?>
            </ul>
           
            <p class="present_zn">赠品:</p>
            <ul class="present_con_zn">
                 <?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['verify_info']->value['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?>
                 <?php if ($_smarty_tpl->tpl_vars['good']->value['goods_type']==1){?>
                <li class="product_list_zn">
                    <span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['good']->value['name'],7,'');?>
</span>
                    <span>数量<?php echo $_smarty_tpl->tpl_vars['good']->value['count'];?>
</span>
                    <span></span>
                </li>
                <?php }?>
                <?php } ?>
            </ul>
            
            <p class="real_price_zn"><span>实际收款额：</span><span>￥<?php echo $_smarty_tpl->tpl_vars['verify_info']->value['sale_price'];?>
</span></p>
        </div>
    </div>
    <p class="time_zn">
        <span class="review_title_man">录入时间</span>
        <span class="review_man"><?php echo $_smarty_tpl->tpl_vars['verify_info']->value['addtime'];?>
</span>
    </p>
</div><?php }} ?>