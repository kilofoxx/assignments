```php
/*    --------------------------------------------
		REQUEST FIELDS ARRAYS
		--------------------------------------------
	*/
	
	public $RequestFieldsArray = array(
		'DoCapture' => array(
				'authorization_id' 			=> array('name' =>'AUTHORIZATIONID',		'required' => 'yes'),
				'amount' 					=> array('name' =>'AMT',					'required' => 'yes'),
				'currency_code' 			=> array('name' =>'CURRENCYCODE',			'required' => 'no'),
				'complete_type' 			=> array('name' =>'COMPLETETYPE',			'required' => 'yes'),
				'invoice_number' 			=> array('name' =>'INVNUM',					'required' => 'no'),
				'note' 						=> array('name' =>'NOTE',					'required' => 'no'),
				'soft_descriptor' 			=> array('name' =>'SOFTDESCRIPTOR',			'required' => 'no')
				),
```

* other than the indents and comments in the lines above, the code for this project seems to be very well constructed.

* below is from a seperate project found on the net.
* this section of code, feels less organized and could use organizational help.

```php

<?php
  /**
   * @brief array functions
   * @author masarakki <masaki@hisme.net>
   */

  /**
   * return args as array
   */
function a(){
  return func_get_args();
  }
```
```php
/**
 * return args as hash
 */
 
 * could all of this have been on one line?
 * could the revlavent code have been combined.?
 * I do not feel I understand enough of what I am reading to make this determination...
 
 ```
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