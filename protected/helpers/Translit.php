<?php

/**
 * Class Translit
 * Помощник перевода русского текста в транслитерацию
 *
 * @author Gasanenko Denis <fondifonds@gmail.com>
 * @since 1.0
 */
class Translit{

    static private $_alphabet = array(
        "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "yo", "ж" => "j", "з" => "z", "и" => "i",
        "й" => "y", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t",
        "у" => "u", "ф" => "f", "х" => "h", "ц" => "c", "ч" => "ch", "ш" => "sh", "щ" => "sh", "ъ" => "", "ы" => "i", "ь" => "",
        "э" => "e", "ю" => "yu", "я" => "ya", " " => "_", "\"" => "", "'" => "", "!" => "", "@" => "", "#" => "","$" => "","%" => "",
        "^" => "","&" => "","*" => "","(" => "",")" => "","`" => "","`" => "","~"=>"","\\"=>"","|"=>"","/"=>"","<"=>"",">"=>"",","=>"","."=>"","?"=>""
    );

    static public function translate($_string){
        $_string = mb_strtolower($_string, "UTF-8");

        foreach(self::$_alphabet as $_search=>$_replace){
            $_string = str_replace($_search, $_replace, $_string);
        }
        return $_string;
    }


}