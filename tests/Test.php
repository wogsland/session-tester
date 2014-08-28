<?php

/**
 * This class tests Travis CI by existing.
 *
 * @author Bradley Wogsland <http://twitter.com/wogsland>
 */
class Test
extends \PHPUnit_Framework_TestCase
{
  /**
   * Echos a message to see if it shows up in Travis CI.
   */
  public function testOne () {
    echo "In test one!";
  }
}
