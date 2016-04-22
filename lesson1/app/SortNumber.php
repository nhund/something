<?php 
namespace App;

/**
 * Class SortNumber
 * @package App
 */
class SortNumber
{
	/**
	 * @param $arrayNumber
	 * @return mixed
     */
	public function sort($arrayNumber)
	{
		for($i = 0; $i < count($arrayNumber); $i++)
		{
			for($j = $i + 1; $j <= count($arrayNumber) -1; $j++)
    		{
        		if($arrayNumber[$i] > $arrayNumber[$j])
        		{
            		$tam=$arrayNumber[$i];
            		$arrayNumber[$i] = $arrayNumber[$j];
            		$arrayNumber[$j] = $tam;
            	}
        	}
		}
		return $arrayNumber;
	}
}