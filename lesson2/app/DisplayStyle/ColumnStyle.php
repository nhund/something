<?php 
namespace App\DisplayStyle;

use App\DisplayStyle\DisplayStyle;

/**
 *
 * Class ColumnStyle
 * @package App\DisplayStyle
 */
class ColumnStyle implements DisplayStyle
{
	/**
	 *
	 * @param $arrayNumber
	 * @return string
	 */
	public function display($arrayNumber)
	{
		return implode("\n", $arrayNumber);
	}				
}