<?php
namespace Test;
/**
 * Class Generator
 * @package Test
 */
class Generator 
{
	/**
	 * @param $length
	 * @return int[]|null
     */	
	public function run($length) 
	{
		$result = [];
	 	if ( ! is_int($length)) {
	 		return null;
	 	}
	 	if($length < 0) {
	 		return null;
	 	}
 		for ($i = 0; $i < $length; $i ++) {
 			$result[$i] = mt_rand(0, 100);
 		}
 		return $result;
	}
}