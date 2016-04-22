<?php
namespace App\SortNumber;;
/**
* 
*/
class DescSort implements SortNumber
{
	
	public function sort($numberes){
		rSort($numberes);
		return $numberes;
	}
}