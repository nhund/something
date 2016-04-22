<?php 
namespace App\DisplayStyle;

use App\DisplayStyle\DisplayStyle;
/**
* 
*class RowStyle
* @package App\DisplayStyle
*/
class RowStyle extends DisplayStyle
{
	/**
	 *
	 * @param $arrayNumber
	 * @return string
	 */
	public function display($arrayNumber)
	{
		$strDisplay = "";
		$strDisplay = implode('_', $arrayNumber);
		return $strDisplay;
	}
}