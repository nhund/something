<?php
namespace App;

use App\DisplayStyle\CommaStyle;
use App\DisplayStyle\ColumnStyle;
use App\DisplayStyle\RowStyle;
use App\SortNumber;

/**
 *
 * class DisplayNumber
 * @package App
 */
class DisplayNumber
{
	/**
	 *
	 * @param $arrayNumber[]
	 * @return string
     */	
	public function display($arrayNumber)
	{
		$sort        = new SortNumber();
		$style1      = new ColumnStyle($arrayNumber);
	    $arrayNumber = $sort->sort($arrayNumber);
	    return $style1->display($arrayNumber);
	}
}

