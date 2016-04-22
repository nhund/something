<?php 
namespace App\DisplayStyle;

use App\DisplayStyle\DisplayStyle;

/**
* 
*class CommaStyle
* @package App\DisplayStyle
*/
class CommaStyle extends DisplayStyle
{
	/**
	 *
	 * @param $arrayNumber
	 * @return string
     */
	public function display($arrayNumber)
	{
		$strDisplay = '';
		$strDisplay = implode(', ', $arrayNumber);
		return $strDisplay;
	}
}