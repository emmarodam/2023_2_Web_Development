<?php

define('USER_NAME_MIN', 2);
define('USER_NAME_MAX', 20);
function _validate_user_name(){
  if(!isset($_POST['user_name'])){ 
    throw new Exception('user_name min '.USER_NAME_MIN.' max '.USER_NAME_MAX); 
  }
}








