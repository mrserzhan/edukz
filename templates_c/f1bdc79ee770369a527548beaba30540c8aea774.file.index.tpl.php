<?php /* Smarty version Smarty-3.1.12, created on 2013-01-12 20:13:56
         compiled from ".\templates\base\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:761350f1c3045154a8-21622925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1bdc79ee770369a527548beaba30540c8aea774' => 
    array (
      0 => '.\\templates\\base\\index.tpl',
      1 => 1358021094,
      2 => 'file',
    ),
    'f60f0945ff976025d661f256f520c8a8768a5644' => 
    array (
      0 => '.\\templates\\base\\main.tpl',
      1 => 1358021635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '761350f1c3045154a8-21622925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f1c3045d9214_13523165',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f1c3045d9214_13523165')) {function content_50f1c3045d9214_13523165($_smarty_tpl) {?><?php if (!is_callable('smarty_function_template')) include 'Z:\\home\\edu.kz\\www\\application\\libraries\\plugins\\function.template.php';
?><!DOCTYPE html>
<html>
    <head>
        <title>EDU.kz</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <link type="text/css" rel="stylesheet" href="<?php echo smarty_function_template(array('url'=>"css/bootstrap.css"),$_smarty_tpl);?>
" />
        <link type="text/css" rel="stylesheet" href="<?php echo smarty_function_template(array('url'=>"css/bootstrap-responsive.css"),$_smarty_tpl);?>
" />

        <script type="text/javascript" src="<?php echo smarty_function_template(array('url'=>"js/bootstrap.js"),$_smarty_tpl);?>
"></script>

        
    </head>
    <body>
        
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">EDU.kz</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#">Link</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
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