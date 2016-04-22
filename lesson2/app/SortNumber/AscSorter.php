<?php
namespace App\SortNumber;
/**
* 
*/
class AscSorter implements SortNumber
{
	
	public function sort($numberes){
		sort($numberes);
		return $numberes;
	}
}