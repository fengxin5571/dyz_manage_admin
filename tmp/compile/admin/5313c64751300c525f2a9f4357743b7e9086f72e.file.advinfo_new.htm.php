<?php /* Smarty version Smarty-3.1.12, created on 2017-08-17 10:54:42
         compiled from ".\tpl\admin\advinfo_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:19324598a705a26aed0-50844417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5313c64751300c525f2a9f4357743b7e9086f72e' => 
    array (
      0 => '.\\tpl\\admin\\advinfo_new.htm',
      1 => 1502938476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19324598a705a26aed0-50844417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_598a705a2a7f68_24117211',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598a705a2a7f68_24117211')) {function content_598a705a2a7f68_24117211($_smarty_tpl) {?><div class="page">
	<div class="pageContent">
		<form method="post" enctype="multipart/form-data"  action="?dir=admin&action=menu&do=add" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layoutH="56">
				<dl>
					<dt>标题</dt>
					<dd><input type="text" name="title" size="30" class="required" value=""/></dd>
				</dl>

				<dl>
					<dt>url</dt>
					<dd><input type="text" name="url" size="30" class="required" value=""/></dd>
				</dl>
				<dl>
					<dt>类型</dt>
					<dd><input type="text" name="type" size="30" class="required" value=""/></dd>
				</dl>
				<dl>
					<dt>图片</dt>
					<dd><input type="file" name="adv_img[]" class="" multiple id="files" onchange="javascript:setImagePreviews();"/></dd>
					 <p id="preview">
					 </p>
				</dl>
			</div>
			<div class="formBar">
				<ul>
					<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				</ul>
			</div>
		</form>
	</div>
</div>
<?php }} ?>