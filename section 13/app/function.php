<?php

function load_model($class_name)
{
   $path_to_file = 'models/'.$class_name.'.php';
   if (file_exists($path_to_file)) {
       require $path_to_file;
       echo " Class ".$class_name." Exist ";
       return true;
   }else {
     return false;
   }
}

function load_service($service_name)
{
   $path_to_file = 'service/'.$service_name.'.php';

    if (file_exists($path_to_file)) {
       require $path_to_file;
    }
}

spl_autoload_register('load_model');
spl_autoload_register('load_service');
?>
