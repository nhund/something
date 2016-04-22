<?php 
namespace App\DisplayStyle;

use App\DisplayStyle\DisplayStyle;
/**
* 
*class RowStyle
* @package App\DisplayStyle
*/
class RowStyle implements DisplayStyle
{
	/**
	 *
	 * @param $arrayNumber
	 * @return string
	 */
	public function display($arrayNumber)
	{
		return implode("_", $arrayNumber);
	}
}