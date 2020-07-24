<?php
/**
 * Clean Password
 *
 * @param [type] $inputText
 * @return string
 */
function sanitizeFormPassword($inputText)
{
    $inputText = strip_tags($inputText);
    return $inputText;
}


/**
 * Clean Username
 *
 * @param [type] $inputText
 * @return string
 */
function sanitizeFormUsername($inputText)
{
    $inputText = trim(strip_tags($inputText));
    return $inputText;
}
/**
 * Clean Strings 
 *
 * @param [type] $inputText
 * @return void
 */
function sanitizeFormString($inputText)
{
    $inputText = trim(strip_tags($inputText));
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

/**
 * Value of the input if is set 
 *
 * @param [type] $name
 * @return void
 */
function getInputValue($name)
{
    if(isset($_POST[$name])){

           echo $_POST[$name];
    }
}

function urlFormat($str)
{
    //Strip out all whitespace
    $str = preg_replace('/\s*/', '', $str);
    //Convert the string to all lowercase
    $str = strtolower($str);
    //URL Encode
    $str = urlencode($str);
    return $str;
}

function formatDate($date)
{
    $date = date("F j, Y, g:i a", strtotime($date));
    return $date;
}
