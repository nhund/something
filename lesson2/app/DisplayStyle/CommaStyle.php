<?php 
namespace App\DisplayStyle;

use App\DisplayStyle\DisplayStyle;

/**
* 
*class CommaStyle
* @package App\DisplayStyle
*/
class CommaStyle implements DisplayStyle
{
	/**
	 *
	 * @param $arrayNumber
	 * @return string
     */
	public function display($arrayNumber)
	{
		return implode(',', $arrayNumber);
	}
}