<?php
namespace Relpat\RelpatNewsfecreator\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Patrick Hippler <info@relpat.de>
 */
class NewsfrontendTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Relpat\RelpatNewsfecreator\Domain\Model\Newsfrontend
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Relpat\RelpatNewsfecreator\Domain\Model\Newsfrontend();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
