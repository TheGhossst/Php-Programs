<?php
  $var = 13;
  echo "The type of var is ->". gettype($var);
  
  $var_in_string = settype($var, "string");
  echo "The type of var is ->". gettype($var);

  if (is_nan($var)){

  }
?>