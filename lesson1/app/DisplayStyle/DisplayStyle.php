<?php 
namespace App\DisplayStyle;

/**
* 
*class DisplayStyle
* @package App\DisplayStyle
*/
abstract class DisplayStyle 
{
	/**
	 * @param $arrayNumber
	 * @return mixed
     */
	abstract protected function display($arrayNumber);
}