<?php /* Smarty version Smarty-3.1.12, created on 2018-01-13 16:20:14
         compiled from ".\tpl\admin\case_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:52355a211111d8a384-90200038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97a7b76b4fac79e0150a2fafdc2419f7288b8d90' => 
    array (
      0 => '.\\tpl\\admin\\case_new.htm',
      1 => 1515829852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52355a211111d8a384-90200038',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a211111dc7404_89440849',
  'variables' => 
  array (
    'case_class' => 0,
    'row' => 0,
    'sp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a211111dc7404_89440849')) {function content_5a211111dc7404_89440849($_smarty_tpl) {?>
	<script type="text/javascript" charset="utf-8" src="http://app.duyiwang.cn/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://app.duyiwang.cn/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="http://app.duyiwang.cn/ueditor/lang/zh-cn/zh-cn.js"></script>

<div class="page">
	<div class="pageContent">
		<form method="post" action="?dir=admin&action=case&do=add" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layoutH="56">
				<dl style="width:100%">
					<dt>选择目录：</dt>
					<select name="case_name" id="province" onchange="cases.changed(this,'names')">
					    <option value="0">请选择</option>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['case_class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</option>
						<?php } ?>
					</select>
					<select name="cname" id="names" style="width:100px;margin-left: 5px">
					    <option value="0">请选择</option>
						
					</select>
				</dl>
				<dl>				    
					<dt>来自门店：</dt>
					<dd><input type="text" name="mid" class="required" size="30" value=""/></dd>
				</dl>
				<dl>
					<dt>产品：</dt>
					<select name="gid">
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</dl>
				<dl>
					<dt>图片(第一张封面,第二张患者)：</dt>
					<dd><input type="file" name="img[]" class="" multiple id="files" onchange="javascript:setImagePreviews();"/>
					<p id="preview">
					        
					</p>
					<br/><br/><br/><br/><br/>
					</dd>
				</dl>  
				
				<dl>				    
					<dt>患者：</dt>
					<dd><input type="text" name="name" class="required" size="30" value=""/></dd>
				</dl>
			
				<dl>
					<dt>年龄：</dt>
					<dd><input type="text" name="age" class="required" size="30" value=""/></dd>
				</dl>
				<dl>
					<dt>用药：</dt>
					<dd><input type="text" name="yongyao" class="required" size="30" value=""/></dd>
				</dl>
				<dl>
					<dt>周期：</dt>
					<dd><input type="text" name="date" class="required" size="30" value=""/></dd>
				</dl>
				<dl>
					<dt>如何知道独一张：</dt>
					<dd><input type="text" name="way" class="required" size="30" value=""/></dd>
				</dl>		
				<dl>
					<dt>康复故事：</dt>
					<br/><br/>					
					<dd><script id="editor" name="content" type="text/plain" style="width:1024px;height:500px;"></script></dd>
				</dl>					
				<dl>
					<dt>调理过程：</dt>
					<br/><br/>	
					<dd><script id="editor1" name="process" type="text/plain" style="width:1024px;height:500px;"></script></dd>
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
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
    var ue = UE.getEditor('editor1');
</script><?php }} ?>