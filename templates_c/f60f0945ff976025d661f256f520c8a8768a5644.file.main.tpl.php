<?php /* Smarty version Smarty-3.1.12, created on 2013-01-12 20:59:10
         compiled from ".\templates\base\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:485650f1c435d4a0c5-05841389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f60f0945ff976025d661f256f520c8a8768a5644' => 
    array (
      0 => '.\\templates\\base\\main.tpl',
      1 => 1358024319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '485650f1c435d4a0c5-05841389',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f1c435e148a1_96912288',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f1c435e148a1_96912288')) {function content_50f1c435e148a1_96912288($_smarty_tpl) {?><?php if (!is_callable('smarty_function_template')) include 'Z:\\home\\edu.kz\\www\\application\\libraries\\plugins\\function.template.php';
?><!DOCTYPE html>
<html>
    <head>
        <title>EDU.kz</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <link type="text/css" rel="stylesheet" href="<?php echo smarty_function_template(array('url'=>"css/bootstrap.css"),$_smarty_tpl);?>
" />
        <link type="text/css" rel="stylesheet" href="<?php echo smarty_function_template(array('url'=>"css/bootstrap-responsive.css"),$_smarty_tpl);?>
" />

        <script type="text/javascript" src="<?php echo smarty_function_template(array('url'=>"js/jquery.min.js"),$_smarty_tpl);?>
"></script>
        <script type="text/javascript" src="<?php echo smarty_function_template(array('url'=>"js/bootstrap.js"),$_smarty_tpl);?>
"></script>

        
    </head>
    <body>
        
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?php echo base_url();?>
">EDU.kz</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav">
                            <li class=""><a href="<?php echo base_url();?>
">Home</a></li>
                            <li class=" dropdown">
                                <a href="<?php echo base_url();?>
groups/" class="dropdown-toggle" data-toggle="dropdown">Groups <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url();?>
groups/">Groups</a></li>
                                    <li><a href="<?php echo base_url();?>
groups/add">Add group</a></li>
                                </ul>
                            </li>
                            <li class=" dropdown">
                                <a href="<?php echo base_url();?>
users/" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url();?>
users/">Users</a></li>
                                    <li><a href="<?php echo base_url();?>
users/add">Add user</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="container-fluid">

        </div>
        
    </body>
</html>
<?php }} ?>