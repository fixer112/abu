<?php
/* 
 * Develop Name = Altechtic Solutions
 * Website = altechtic.com.ng
 * Program = abu encrypter
 * Version = 2.0.1
 * About = Encrypt word into a secured string using hex and ascii
 * Date = 09/03/2018
 */

namespace Abu;

class Abu{

  public function encrypt($string){
    //Declare Global variables
    $string = (string) $string;
    $str_length = strlen($string);
    $encrypt="";
    $encrypt_n = "";
    $hex_n_hex = "";
    $hex_a_hex = "";
    
    for ($i=0;$i<=$str_length-1;$i++){
       $n = $string[$i];
       $ascii = ord($n);
       $hex = dechex($ascii);
       $ascii_len = (int) $ascii + $str_length;
       $hex_n = preg_replace('/[^0-9]/', '', $hex);
       $hex_a = preg_replace('/[^a-zA-Z]/', '', $hex);
       
       foreach (str_split($hex_n) as $a){
           
           $hex_n_hex += dechex(ord($hex_n));
       }
       
       foreach (str_split($hex_a) as $a){
           
           $hex_a_hex += dechex(ord($hex_a));
       }
       
       $encrypt_n = $hex_a.$ascii_len.$hex_n_hex;
       $encrypt .= $encrypt_n;
       
    }
    if (strlen($encrypt) <=32){
        return $encrypt;
    }elseif (strlen($encrypt)>32){
        $encrypt_a = preg_replace('/[^0-9]/', '', $encrypt);
        $encrypt_array = str_split($encrypt_a, 5);
        foreach ($encrypt_array as $value){
        $encrypt_added =+$value; 
        }
        $encrypt_len = strlen($encrypt);
        $encrypt_added_len= 32-strlen($encrypt_added);
        $encrypt_new_len = $encrypt_len - $encrypt_added_len;
        $encrypt_extract = substr($encrypt,($encrypt_new_len));
        $encrypt_new = $encrypt_added.$encrypt_extract;
        
        return $encrypt_new;
       
    }
}

public function version(){
  return "2.0.1";
}

}


?>
