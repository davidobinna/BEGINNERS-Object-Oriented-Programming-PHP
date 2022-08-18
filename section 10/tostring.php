<?php

$function = [
  'lenth' => 'strlen',
  'upper' => 'strtoupper',
  'lower' => 'strtolower'
];

var_dump(call_user_func_array($function['lenth']),$function);

 ?>
