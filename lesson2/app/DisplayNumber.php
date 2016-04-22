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
	private $sorter;
	private $format;
	public function __construct($sorter, $format)
	{
		$this->sorter = $sorter;
		$this->format = $format;
	}
	public function display($arrayNumber)
	{
		$sortedNumbers = $this->sorter->sort($arrayNumber);
		$displayString = $this->format->display($sortedNumbers);
		return $displayString;
	}
}