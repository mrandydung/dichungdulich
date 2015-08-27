<?php
 
$key = "000000000000000 ";
function encrypt($str, $key)
{
     $block = mcrypt_get_block_size('rijndael_128', 'ecb');
     $pad = $block - (strlen($str) % $block);
     $str .= str_repeat(chr($pad), $pad);
     return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $str, MCRYPT_MODE_ECB));
}

function decrypt($str, $key){ 
 $str = base64_decode($str);
    $str = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $str, MCRYPT_MODE_ECB);
    $block = mcrypt_get_block_size('rijndael_128', 'ecb');
    $pad = ord($str[($len = strlen($str)) - 1]);
    $len = strlen($str);
    $pad = ord($str[$len-1]);
    return substr($str, 0, strlen($str) - $pad);
}

if(isset($_POST['t'])) {
  $d = decrypt($_POST['t'], $key);
  if(strpos($d, ',') !== false) {
    $arr = explode(",", $d);
    $serial = $arr[0];
    echo encrypt(time()."000|".time()."000", substr($serial, strlen($serial)-16));
  }
}