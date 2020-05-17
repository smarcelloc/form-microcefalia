<?php defined('BASEPATH') OR exit('No direct script access allowed');

function sanitize_email($value, $max_lenght) {
    return mb_convert_case(substr(filter_var($value, FILTER_SANITIZE_EMAIL), 0, $max_lenght), MB_CASE_LOWER, 'UTF-8');
}

function sanitize_cpf($value) {
    if(empty($value)) return false;
    
    $cpf =  preg_replace("/[^0-9]/", "", $value);
    
    if(strlen($cpf) != 11) return false;
    if ($cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || 
        $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || 
        $cpf == '88888888888' || $cpf == '99999999999') return false;
    
    for ($t = 9; $t < 11; $t++):
        for ($d = 0, $c = 0; $c < $t; $c++)
            $d += $cpf{$c} * (($t + 1) - $c);
    endfor;
    $d = ((10 * $d) % 11) % 10;
    if ($cpf{$c} != $d) return false;

    return $cpf;
}

function sanitize_int($value, $max_lenght) {
    return substr(preg_replace("/[^0-9]/", "", $value), 0, $max_lenght);
}

function sanitize_trim($value) {
    return preg_replace('/( )+/', ' ', $value);
}

function sanitize_string($value, $max_lenght, $title = false) {
    if($title)
        return mb_convert_case(substr(filter_var(sanitize_trim($value), FILTER_SANITIZE_STRING), 0, $max_lenght), MB_CASE_TITLE, 'UTF-8');
    return mb_convert_case(substr(filter_var(sanitize_trim($value), FILTER_SANITIZE_STRING), 0, $max_lenght), MB_CASE_LOWER, 'UTF-8');
}

function sanitize_date($value) {
    if(!preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])\/(0[1-9]|1[0-2])\/[0-9]{4}$/",$value))
        return "0000-00-00";
    
    $date = date_create(preg_replace("/[\/]/", "-", $value));
    
    $ano = date_format($date, 'Y');
    $mes = date_format($date, 'm');
    $dia = date_format($date, 'd');
    
    if(!checkdate($mes, $dia, $ano))
        return "0000-00-00";
   
    return date_format($date, 'Y-m-d');
}

function sanitize_option($value, $max_lenght = 3) {
    return mb_convert_case(substr(preg_replace("/[^a-zA-Z0-9]/", "", $value), 0, $max_lenght), MB_CASE_UPPER,'UTF-8');
}

function sanitize_options_age($value, $age_value) {
    if($age_value == 'A' || $age_value == 'a') 
        return sanitize_int($value, 2);
    else
        return intval(sanitize_int($value, 2))/100;    
}

function sanitize_options_select($value, $choose_value) {
    if($choose_value == 'S' || $choose_value == 's')
        return sanitize_option($value);
    return null;
}


function sanitize_checkbox($array_value, $default_max_lenght) {
    if(empty($array_value)) return null;
    
    $checkbox = implode(",", $array_value);
    $max_lenght = $default_max_lenght * count($array_value) + count($array_value);
    if($max_lenght > 30) $max_lenght = 30;
    
    return mb_convert_case(substr(preg_replace("/[^a-zA-Z0-9,]/", "", $checkbox), 0, $max_lenght), MB_CASE_UPPER,'UTF-8');
}