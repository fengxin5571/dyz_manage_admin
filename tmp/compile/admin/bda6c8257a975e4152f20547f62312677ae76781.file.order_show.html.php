<?php /* Smarty version Smarty-3.1.12, created on 2017-12-05 09:10:59
         compiled from ".\tpl\admin\order_show.html" */ ?>
<?php /*%%SmartyHeaderCode:17585a1bdb49906567-14428480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bda6c8257a975e4152f20547f62312677ae76781' => 
    array (
      0 => '.\\tpl\\admin\\order_show.html',
      1 => 1512435619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17585a1bdb49906567-14428480',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a1bdb499435f0_40762208',
  'variables' => 
  array (
    'order_info' => 0,
    'store' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1bdb499435f0_40762208')) {function content_5a1bdb499435f0_40762208($_smarty_tpl) {?><div class="page">
	<div class="pageContent">
		<form method="post" action="?dir=admin&action=order&do=updata" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['order_info']->value['id'];?>
" />
			<div class="pageFormContent" layoutH="56">
				<dl>
					<dt>用户id：</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['order_info']->value['uid'];?>
</dd>
				</dl>
				<dl>
					<dt>姓名：</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['order_info']->value['name'];?>
</dd>
				</dl>
				<dl>
					<dt>身份：</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['order_info']->value['roleid'];?>
</dd>
				</dl>
				<dl>
					<dt>电话：</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['order_info']->value['mobile'];?>
</dd>
				</dl>
				<dl>
					<dt>收货地址：</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['order_info']->value['address'];?>
</dd>
				</dl>
				<dl>
					<dt>总价：</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['order_info']->value['price'];?>
</dd>
				</dl>
				<dl>
					<dt>物流单号：</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['order_info']->value['order_number'];?>
</dd>
				</dl>
				<dl>
					<dt>操作人：</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['order_info']->value['userid'];?>
</dd>
				</dl>
				<dl>
					<dt>订单开始时间：</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['order_info']->value['starttime'];?>
</dd>
				</dl>
				<dl>
					<dt>订单结束时间：</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['order_info']->value['endtime'];?>
</dd>
				</dl>
				<dl>
					<dt>订单状态：</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['order_info']->value['status'];?>
</dd>
				</dl>
				<dl>
					<dt>付款凭证：</dt>
					<dd><a href="<?php echo $_smarty_tpl->tpl_vars['order_info']->value['voucher_image'];?>
"><img id="img" src="<?php echo $_smarty_tpl->tpl_vars['order_info']->value['voucher_image'];?>
" style="width:70px;height:70px;padding-right:15px"/></a></dd>
				</dl>
				<dl></dl>
				<dl>
					<dt>订货详情：</dt>
					<dd>
						<?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['store']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value){
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
						<h3><?php echo $_smarty_tpl->tpl_vars['store']->value['name'];?>
：</h3>
							<table border='1' width='200px' height="50px">
								<tr>
									<th align="center">产品名</th>
									<th align="center">数量</th>
									<th align="center">价格</th>
								</tr>
								<?php  $_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goods']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['store']->value['goods_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->key => $_smarty_tpl->tpl_vars['goods']->value){
$_smarty_tpl->tpl_vars['goods']->_loop = true;
?>
									<tr>
										<td align="center"><?php echo $_smarty_tpl->tpl_vars['goods']->value['name'];?>
</td>
										<td align="center"><?php echo $_smarty_tpl->tpl_vars['goods']->value['count'];?>
/<?php echo $_smarty_tpl->tpl_vars['goods']->value['purchase_dw'];?>
</td>
										<td align="center"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
（元）</td>
									</tr>				
								<?php } ?>
							</table>
							<br/>
						<?php } ?>
					</dd>
				</dl>
				<dl>
					<dt>备注：</dt>
					<dd>
					<textarea rows="5" cols="62" name="beizhu" ><?php echo $_smarty_tpl->tpl_vars['order_info']->value['beizhu'];?>
</textarea>
					</dd>
				</dl>
			</div>
			<div class="formBar">
				<ul>
					<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				</ul>
			</div>
		</form>
	</div>
</div><?php }} ?>