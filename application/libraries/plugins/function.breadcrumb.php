<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.assign.php
 * Type:     function
 * Name:     assign
 * Purpose:  assign a value to a template variable
 * -------------------------------------------------------------
 */
function smarty_function_breadcrumb($params, Smarty_Internal_Template $template)
{
    $CI = &get_instance();
    return $CI->breadcrumb->output();
}

?>