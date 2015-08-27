<?php 

function sc($method, $args = array()) {  
   list($class, $function) = explode('::', $method);
   if (class_exists($class) && method_exists($class, $function))
   {
       return call_user_func_array(array($class, $function), $args);
   }
   return null;
}