<?php

namespace ParamProcessor\Tests;

use DataValues\Test\DataValueTest;
use ParamProcessor\MediaWikiTitleValue;

/**
 * Tests for the DataValues\MediaWikiTitleValue class.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @since 0.1
 *
 * @ingroup DataValue
 *
 * @group ParamProcessor
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class MediaWikiTitleValueTest extends DataValueTest {

	/**
	 * @see DataValueTest::getClass
	 *
	 * @since 0.1
	 *
	 * @return string
	 */
	public function getClass() {
		return 'ParamProcessor\MediaWikiTitleValue';
	}

	/**
	 * @see DataValueTest::constructorProvider
	 *
	 * @since 0.1
	 *
	 * @return array
	 */
	public function constructorProvider() {
		$argLists = array();

		$argLists[] = array( false );
		$argLists[] = array( false, 42 );
		$argLists[] = array( false, array() );
		$argLists[] = array( false, false );
		$argLists[] = array( false, true );
		$argLists[] = array( false, null );
		$argLists[] = array( false, 'foo' );
		$argLists[] = array( false, '' );
		$argLists[] = array( false, ' foo bar baz foo bar baz foo bar baz foo bar baz foo bar baz foo bar baz ' );

		$argLists[] = array( true, \Title::newMainPage() );
		$argLists[] = array( true, \Title::newFromText( 'Foobar' ) );

		return $argLists;
	}

	/**
	 * @dataProvider instanceProvider
	 * @param MediaWikiTitleValue $titleValue
	 * @param array $arguments
	 */
	public function testGetValue( MediaWikiTitleValue $titleValue, array $arguments ) {
		$this->assertEquals( $arguments[0]->getFullText(), $titleValue->getValue()->getFullText() );
	}

}