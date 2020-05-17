<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|-----------------------------------------------------------------
| HELPER MASK
|-----------------------------------------------------------------
| Mask é responsável em mascarar valores de váriaveis. Com a mascara facilita
| no entendimento e compressão do seguinte valor.
| Por exemplo, número de CPF : 12345678911, com a mascara: 123.456.789-11
| Outro caso, data de nascimento: 11031993, com máscara: 11/03/1993
| 
| Podemos identificar melhor com a mascara se aquele número realmente representa uma
| data de nascimento ou cpf.
|
| As funções de máscaras:
| - MASK CPF
| - MASK CEP
| - MASK CEL
| - MASK TEL
|
| A função MASK, fornece ao programador em personalizar sua própria mascara em 
| uma variável.
| @val: valor qualquer. (STRING)
| @mask: formato da máscara. (STRING)
|
| @exemplo mask('12345678911', '###.###.###-##');
| @result 123.456.789-11
|
| @exemplo mask('2343', '##-##')
| @result 23-43
*/

function mask($val, $mask) {
    $maskared = '';
    $k = 0;
    
    if(empty($val)):
        return null;
    endif;
    
    for ($i = 0; $i <= strlen($mask) - 1; $i++):
        if($mask[$i] == '#')
           $maskared .= $val[$k++]; 
        else
           $maskared .= $mask[$i]; 
    endfor;

    return $maskared;
}


function mask_cpf($value) {
    return mask($value, "###.###.###-##");
}

function mask_cep($value) {
    return mask($value, "#####-###");
}

function mask_cel($value) {
    return mask($value, "(##) #####-####");
}

function mask_tel($value) {
    return mask($value, "(##) ####-####");
}