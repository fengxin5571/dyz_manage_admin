<?php /* Smarty version Smarty-3.1.12, created on 2018-01-13 15:01:00
         compiled from ".\tpl\index\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:2459959dde825db31c9-44905419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ca9f456f8088b1d834dd24c941ad58479058ead' => 
    array (
      0 => '.\\tpl\\index\\index.htm',
      1 => 1515826164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2459959dde825db31c9-44905419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_59dde825e2d2e5_43969574',
  'variables' => 
  array (
    'cfg' => 0,
    'role1' => 0,
    'win' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dde825e2d2e5_43969574')) {function content_59dde825e2d2e5_43969574($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<title><?php echo $_smarty_tpl->tpl_vars['cfg']->value['webname'];?>
</title>
<link href="./themes/default/style.css" rel="stylesheet" type="text/css" />
<link href="./themes/css/core.css" rel="stylesheet" type="text/css" />
<link href="./themes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<!--[if IE]>
<link href="./themes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/>
<![endif]-->
<script src="./themes/javascripts/speedup.js" type="text/javascript"></script>
<script src="./themes/javascripts/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="./themes/javascripts/jquery.cookie.js" type="text/javascript"></script>
<script src="./themes/javascripts/jquery.validate.js" type="text/javascript"></script>
<script src="./themes/javascripts/jquery.bgiframe.js" type="text/javascript"></script>
<script src="./themes/javascripts/dwz.min.js" type="text/javascript"></script>
<script src="./themes/xheditor/xheditor-1.1.12-zh-cn.min.js" type="text/javascript"></script>
<script src="./themes/javascripts/money.js" type="text/javascript"></script>
<script src="./themes/javascripts/region.js" type="text/javascript"></script>
<script src="./themes/javascripts/case.js" type="text/javascript"></script>
<script src="./themes/javascripts/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<script src="./themes/javascripts/image.js" type="text/javascript"></script>
<script src="./themes/javascripts/api.js" type="text/javascript"></script>
<script src="./themes/javascripts/socket.io.js" type="text/javascript"></script>
<link href="./kindeditor/themes/default/default.css" rel="stylesheet" type="text/css"/>
<link href="./kindeditor/plugins/code/prettify.css" rel="stylesheet" type="text/css"/>
<script src="./kindeditor/kindeditor-all-min.js" type="text/javascript"></script>
<script src="./kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="./kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="http://img.51fth.com/themes/js/LocalIMG.js"></script>
<script src="http://img.51fth.com/themes/js/BUG.mini.js"></script>
<script type="text/javascript">
	var GV = {}
	GV.kindeditor={basePath:'./kindeditor/',upload:'./kindeditor/php/upload_json.php',filemanager:'./kindeditor/php/file_manager_json.php'};
	$(function(){
		DWZ.init("./themes/dwz.frag.xml", {
			debug:false,	// 调试模式 【true|false】
			callback:function(){
				initEnv();
				$("#themeList").theme({themeBase:"themes"});
			}
		});
	});
	//清理浏览器内存,只对IE起效,FF不需要
	KindEditor.ready(function(K) {
		var editor = K.editor({
			allowFileManager : true
		});
		K('#image1').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					imageUrl : K('#url1').val(),
					clickFn : function(url, title, width, height, border, align) {
						K('#url1').val(url);
						editor.hideDialog();
					}
				});
			});
		});
	});
	if ($.browser.msie) {
		window.setInterval("CollectGarbage();", 10000);
	} 
	//var map=new BMap;
</script>
</head>


<body scroll="no">
	<div id="layout">
		<div id="header">
			<div class="headerNav">
				<ul class="nav">
					<li><a href="#">用户:<?php echo $_SESSION['dys']['username'];?>
</a></li>
					<li><a href="index.php?action=user&do=editpass" target="dialog" mask="true">修改密码</a></li>
					<li><a href="index.php?action=user&do=logout">退出</a></li>
				</ul>
			</div>		
		</div>

		<div id="leftside">
			<div id="sidebar_s">
				<div class="collapse">
					<div class="toggleCollapse"><div></div></div>
				</div>
			</div>
			<div id="sidebar">
				<div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>

				<div class="accordion" fillSpace="sidebar">
					<div class="accordionHeader">
						<h2><span>Folder</span>网站</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder ">
							<?php if (in_array('admin_zongbu_',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>总部部门管理</a>
								<ul>
									<li><a href="index.php?dir=admin&action=zongbu" target="navTab" rel="zongbu_list">总部部门列表</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('admin_fgs_',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>分公司管理</a>
								<ul>
									<li><a href="index.php?dir=admin&action=fgs" target="navTab" rel="fgs_list">分公司列表</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('admin_md_',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>门店管理</a>
								<ul>
									<li><a href="index.php?dir=admin&action=md" target="navTab" rel="md_list">门店列表</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('admin_goods_',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>商品管理</a>
								<ul>
									<li><a href="index.php?dir=admin&action=goods" target="navTab" rel="goods_list">商品列表</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('admin_pp_',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>商品分类管理</a>
								<ul>
									<li><a href="index.php?dir=admin&action=pp" target="navTab" rel="pp_list">url列表</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('admin_xslr_',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>销售录入记录管理</a>
								<ul>
									<li><a href="index.php?dir=admin&action=xslr" target="navTab" rel="xslr_list">销售录入列表</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('admin_xslr_',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>销售录入记录查看</a>
								<ul>
									<li><a href="index.php?dir=admin&action=xslr&do=mendian" target="navTab" rel="xslr_list">按门店排行查看</a></li>
									<li><a href="index.php?dir=admin&action=xslr&do=goods" target="navTab" rel="xslr_list">按产品销售排行</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('admin_gg_',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>公告管理</a>
								<ul>
									<li><a href="index.php?dir=admin&action=gg" target="navTab" rel="gg_list">公告列表</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('index_user_',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>用户管理</a>
								<?php if (in_array('index_user_',$_smarty_tpl->tpl_vars['role1']->value)){?>
								<ul>
									<li><a href="index.php?action=user" target="navTab" rel="user">超级管理员列表</a></li>
								</ul>
								<?php }?>
								<?php if (in_array('index_fgsuser_fgs_user',$_smarty_tpl->tpl_vars['role1']->value)){?>
								<ul>
									<li><a href="index.php?action=fgsuser&do=fgs_user" target="navTab" rel="fgsuser">经销商列表</a></li>
								</ul>
								<?php }?>
								<ul>
									<li><a href="index.php?action=fgsuser&do=jms_user" target="navTab" rel="fgsuser">加盟商列表</a></li>
								</ul>
								<?php if (in_array('index_mduser_md_user',$_smarty_tpl->tpl_vars['role1']->value)){?>
								<ul>
									<li><a href="index.php?action=mduser&do=md_user" target="navTab" rel="mduser">门店用户列表</a></li>
								</ul>
								<?php }?>
								<ul>
									<li><a href="index.php?action=mduser&do=dc_user" target="navTab" rel="mduser">导出用户信息</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('index_role_',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>角色管理</a>
								<ul>
									<li><a href="index.php?action=role" target="navTab" rel="role">角色列表</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('admin_download_list',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>大区下载管理</a>
								<ul>
									<li><a href="index.php?action=download&dir=admin&do=list" target="navTab" rel="role">下载统计</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('admin_feedback_list',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>app用户反馈</a>
								<ul>
									<li><a href="index.php?action=feedback&dir=admin&do=list" target="navTab" rel="role">用户反馈</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('admin_verify_store_list',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>审核工作</a>
								
								<ul>
									<li><a href="index.php?action=verify&dir=admin&do=store_list" target="navTab" rel="role">店长申请审核</a></li>
									<li><a href="index.php?action=verify&dir=admin&do=store_list1" target="navTab" rel="role">经销商申请审核</a></li>
									<li><a href="index.php?action=verify&dir=admin&do=store_list2" target="navTab" rel="role">加盟商申请审核</a></li>
									<li><a href="index.php?action=verify&dir=admin&do=store_list3" target="navTab" rel="role">总部人员申请审核</a></li>
									<li><a href="index.php?action=verify&dir=admin&do=store_list4" target="navTab" rel="role">店员申请审核</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('admin_menu_list',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>菜单</a>								
								<ul>
									<li><a href="index.php?action=menu&dir=admin&do=list" target="navTab" rel="role">广告管理</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('admin_file_list',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>文件管理</a>								
								<ul>
									<li><a href="index.php?action=file&dir=admin&do=list" target="navTab" rel="role">文件上传</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('admin_data_list',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>资料模块</a>								
								<ul>
									<li><a href="index.php?action=product&dir=admin&do=list" target="navTab" rel="product_list">产品资料</a></li>
									<li><a href="index.php?action=video&dir=admin&do=list" target="navTab" rel="video_list">营销秘籍视频</a></li>
									<li><a href="index.php?action=case&dir=admin&do=list" target="navTab" rel="case_list">康复案例</a></li>
									<li><a href="index.php?action=case_class&dir=admin&do=list" target="navTab" rel="case_class">案例分类</a></li>
								</ul>
							</li>
							<?php }?>
							<?php if (in_array('admin_order_list',$_smarty_tpl->tpl_vars['role1']->value)){?>
							<li><a>进货订单</a>								
								<ul>
									<li><a href="index.php?action=order&dir=admin&do=list" target="navTab" rel="order_list">订单列表</a></li>
								</ul>
							</li>
							<?php }?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">我的主页</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>
				</div>
				<ul class="tabsMoreList">
					<li><a href="javascript:;">我的主页</a></li>
				</ul>
				<div class="navTab-panel tabsPageContent layoutBox">
					<div class="page unitBox">
						<div class="accountInfo">
							<p><span><?php echo $_smarty_tpl->tpl_vars['cfg']->value['webname'];?>
</span></p>
							<img src="./themes/img/sun.png"/><span style="font-size:20px;"> Hello,<?php echo $_SESSION['dys']['username'];?>
 欢迎使用网络信息管理系统</span>
						</div>
						<div class="pageFormContent" layoutH="80">
							<!--<img src="./themes/img/imac.png"/><span style="font-size:20px;"> 
							<span style="margin:5px;line-height:1.4em;font-size:18px;">开发者:房团惠技术研发部
							</span> -->
							<div class="divider"></div>	
							<div class="content-box-header">
								<img src="./themes/img/system.png"/>
								<span>系统信息 (System Infomation)
								</span>
							</div>
							<div class="tab-content">
								<ul>
								<li>操作系统：<span><?php echo $_smarty_tpl->tpl_vars['win']->value['xitong'];?>
</span></li>
								<li>网站域名：<span><?php echo $_smarty_tpl->tpl_vars['win']->value['yuming'];?>
</span></li>
								<li>PHP 版本:	<span><?php echo $_smarty_tpl->tpl_vars['win']->value['PHP'];?>
</span></li>
								<li>Mysql 版本：<span>5.7.12</span></li>
								<li>服务器web端口：<span><?php echo $_smarty_tpl->tpl_vars['win']->value['duankou'];?>
</span></li>
								<li>服务器时间：<span><?php echo $_smarty_tpl->tpl_vars['win']->value['time'];?>
</span></li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

	</div>

	<div id="footer">Copyright &copy; 2016&nbsp;后台管理系统</div>


	
	
	
	
	
	
	
	
	
	
</body>
</html><?php }} ?>