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
function smarty_function_template($params, Smarty_Internal_Template $template)
{
    $CI = &get_instance();
    if(isset($params['url']))
    {
        return base_url() . 'templates' . '/' . $CI->config->item('template') . '/' . $params['url'];
    }
    return base_url() . 'templates' . '/' . $CI->config->item('template') . '/';
}

?>