<?php

namespace BeeJeejob;

use BeeJeejob\views\index;
use BeeJeejob\views\admin;

class Pager
{
	/**
	 * How many records must be displayed per page.
	 */
	const ITEMS_IN_PAGE = 3;
	
	function __construct()
	{
	}
	
	public static function getQueries($input, $entriesCount)
	{
		$queries = array();
		
		$pageCount = ceil($entriesCount / self::ITEMS_IN_PAGE);
		
		for ($i = 1; $i <= $pageCount; $i++) {
			$queries[$i] = self::getPaginationQuery($input, $i);
		}
		
		return $queries;
	}
	

	private static function getPaginationQuery($input, $page = 0)
	{
		if (is_int($page)) {
			$input['page'] = $page;
		} else throw new \InvalidArgumentException('Parameter errors');
		
		ksort($input);
		
		$query = http_build_query($input);
		
		return $query;
	}
	
}