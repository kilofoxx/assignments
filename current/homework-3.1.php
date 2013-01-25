// homework-2.1.md
// version 1
// karlfortenberry
// kilofoxx@gmail.com
// January/25/2013
// Assignment: Find messy code +100 lines. Create homework-3.1.php copy and paste
// original code then add.commit...  your job should you choose to accept it.
// To standardize the code a.k.a make it look purrrdy.

// below (lines 14-49) is the inital copy/paste from the code I selected while in class.

```php
 
function aa(){
  $args = func_get_args();
  if(count($args)%2 != 0)
    return false;
  
  $ret = array();
  for($i = 0; $i < count($args)/2; $i++){
    $ret[$args[$i]] = $args[$i+1];
  }
  return $ret;
}
function array_delete(&$ary, $key){
  if(!isset($ary[$key]))
    return null;
  $val = $ary[$key];
  unset($ary[$key]);
  return $val;
}
``` 

```php
/**
 * choice first non-null object from array 
 */
function array_choice(){
  $args = func_get_args();
  if(is_array($args[0]))
    $args = $args[0];
  foreach($args as $v){
    if($v != null)
      return $v;
  }
  return false;
}

```

// This is the edited code...  I have choosen allman style per the lecture.

```php
 
function aa()
{
  $args = func_get_args();
  if(count($args)%2 != 0)
    return false;
  
  $ret = array();
  for($i = 0; $i < count($args)/2; $i++){
    $ret[$args[$i]] = $args[$i+1];
}
  return $ret;
}
function array_delete(&$ary, $key)
{
  if(!isset($ary[$key]))
    return null;
  $val = $ary[$key];
  unset($ary[$key]);
  return $val;
}
``` 

```php
/**
 * choice first non-null object from array 
 */
function array_choice()
{
  $args = func_get_args();
  if(is_array($args[0]))
    $args = $args[0];
  foreach($args as $v)
{
    if($v != null)
      return $v;
}
  return false;
}

```

