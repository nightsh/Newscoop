<?php
/**
 * @package Newscoop
 * @copyright 2011 Sourcefabric o.p.s.
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

namespace Newscoop\News;

require_once __DIR__ . '/TestFeed.php';

/**
 */
class FeedTest extends \PHPUnit_Framework_TestCase
{
    /** @var Newscoop\News\Feed */
    protected $feed;

    /** @var Doctrine\Common\Persistance\Objectmanager */
    protected $odm;

    public function setUp()
    {
        if (!extension_loaded('mongo')) {
            $this->markTestSkipped('No mongo');
            return;
        }

        $this->odm = $this->getMockBuilder('Doctrine\ODM\MongoDB\DocumentManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->feed = new TestFeed();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf('Newscoop\News\Feed', $this->feed);
    }

    public function testConfiguration()
    {
        $this->feed->setConfiguration(array('key' => 'value'));
        $this->assertEquals(array('key' => 'value'), $this->feed->getConfiguration());
    }

    public function testMode()
    {
        $this->assertFalse($this->feed->isAutoMode());
        $this->feed->switchMode();
        $this->assertTrue($this->feed->isAutoMode());
    }

    public function testName()
    {
        $this->assertNotEmpty($this->feed->getName());
    }
}
