<?php /* Smarty version Smarty-3.1.12, created on 2013-01-12 21:43:22
         compiled from ".\templates\base\groups\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:920950f1d1827fd4a9-86519078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f7468fe4d8a56fc16cf877c5e24a051320840c7' => 
    array (
      0 => '.\\templates\\base\\groups\\index.tpl',
      1 => 1358026974,
      2 => 'file',
    ),
    'f1860b9ae0182bcaf4d751cc4a57d2dd378ba16a' => 
    array (
      0 => 'Z:\\home\\edu.kz\\www\\templates\\base\\main.tpl',
      1 => 1358026700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '920950f1d1827fd4a9-86519078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f1d18296c7c6_73951048',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f1d18296c7c6_73951048')) {function content_50f1d18296c7c6_73951048($_smarty_tpl) {?><?php if (!is_callable('smarty_function_template')) include 'Z:\\home\\edu.kz\\www\\application\\libraries\\plugins\\function.template.php';
?><!DOCTYPE html>
<html>
    <head>
        <title>Groups list</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <link type="text/css" rel="stylesheet" href="<?php echo smarty_function_template(array('url'=>"css/bootstrap.css"),$_smarty_tpl);?>
" />
        <link type="text/css" rel="stylesheet" href="<?php echo smarty_function_template(array('url'=>"css/bootstrap-responsive.css"),$_smarty_tpl);?>
" />
        <link type="text/css" rel="stylesheet" href="<?php echo smarty_function_template(array('url'=>"css/style.css"),$_smarty_tpl);?>
" />

        <script type="text/javascript" src="<?php echo smarty_function_template(array('url'=>"js/jquery.min.js"),$_smarty_tpl);?>
"></script>
        <script type="text/javascript" src="<?php echo smarty_function_template(array('url'=>"js/bootstrap.js"),$_smarty_tpl);?>
"></script>

        
    </head>
    <body>
        
        <div class="navbar navbar-inverse navbar-static-top">
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
                            <li class="active dropdown">
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
        
        
<div class="container-fluid content">
    <div class="row-fluid">
        <div class="span2">

        </div>
        <div class="span10">
            <div class="page-header">
                <ul class="nav nav-pills">
                    <li><a href="<?php echo base_url();?>
groups/">Groups</a></li>
                    <li class="active"><a href="<?php echo base_url();?>
groups/add">Add group</a></li>
                </ul>
                <h1>Add group</h1>
            </div>
        </div>
    </div>
</div>



        <footer class="footer">
            <div class="container">
                <p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
                <p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
                <p><a href="http://glyphicons.com">Glyphicons Free</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
                <ul class="footer-links">
                    <li><a href="http://blog.getbootstrap.com">Blog</a></li>
                    <li class="muted">*</li>
                    <li><a href="https://github.com/twitter/bootstrap/issues?state=open">Issues</a></li>
                    <li class="muted">*</li>
                    <li><a href="https://github.com/twitter/bootstrap/wiki">Roadmap and changelog</a></li>
                </ul>
            </div>
        </footer>

    </body>
</html>
<?php }} ?>