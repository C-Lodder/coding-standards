<?php
/**
 * Joomla! Coding Standard
 *
 * @copyright  Copyright (C) 2015 Open Source Matters, Inc. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

/**
 * Ensures that new classes are instantiated without brackets if they do not have any parameters.
 *
 * @since  1.0
 */
class Joomla_Tests_Classes_InstantiateNewClassesUnitTest extends AbstractSniffUnitTest
{
	/**
	 * Returns the lines where errors should occur.
	 *
	 * The key of the array should represent the line number and the value
	 * should represent the number of errors that should occur on that line.
	 *
	 * @return array<int, int>
	 */
	public function getErrorList()
	{
		return array(
				16 => 1,
				17 => 1,
				18 => 1,
				24 => 1,
				25 => 1,
				27 => 1,
				28 => 1,
				30 => 1,
				31 => 1,
				33 => 1,
				34 => 1,
				36 => 1,
				37 => 1,
				39 => 1,
				40 => 1,
			   );
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * The key of the array should represent the line number and the value
	 * should represent the number of warnings that should occur on that line.
	 *
	 * @return array<int, int>
	 */
	public function getWarningList()
	{
		return array();
	}
}
