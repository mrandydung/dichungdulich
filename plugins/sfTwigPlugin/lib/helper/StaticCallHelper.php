<?php 

function staticCall($class, $function, $args = array())
{
	if (class_exists($class) && method_exists($class, $function))
	{
		return call_user_func_array(array($class, $function), $args);
	}
	return null;
}