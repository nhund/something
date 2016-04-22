<?php 
namespace App\DisplayStyle;

use App\DisplayStyle\DisplayStyle;

/**
 *
 * Class ColumnStyle
 * @package App\DisplayStyle
 */
class ColumnStyle extends DisplayStyle
{

	/**
	 *
	 * @param $arrayNumber
	 * @return string
	 */
	public function __construct($arrayNumber)
	{
		return $this->display($arrayNumber);
	}
	public function display($arrayNumber)
	{
		$strDisplay = "";
		$strDisplay = implode("\n", $arrayNumber);		
		return $strDisplay;
	}	
			
}