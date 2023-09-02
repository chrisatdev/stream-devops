<?php
function isValidEmail($email)
{
  $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
  if (!preg_match($regex, $email)) :
    return false;
  else :
    return true;
  endif;
}
