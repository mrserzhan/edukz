<?php

/**
 * Class MY_Form_validation
 *
 * @author Erko
 */
class MY_Form_validation extends CI_Form_validation {
    
    function alpha_rus($str)
    {
        return ( ! preg_match("/^([а-яa-z])+$/i", $str)) ? FALSE : TRUE;
    }
    
    function alpha_numeric_rus($str)
    {
        return ( ! preg_match("/^([а-яa-z0-9])+$/i", $str)) ? FALSE : TRUE;
    }
    
}

?>
