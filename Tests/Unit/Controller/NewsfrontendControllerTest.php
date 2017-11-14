<?php
namespace Relpat\RelpatNewsfecreator\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Patrick Hippler <info@relpat.de>
 */
class NewsfrontendControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Relpat\RelpatNewsfecreator\Controller\NewsfrontendController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Relpat\RelpatNewsfecreator\Controller\NewsfrontendController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllNewsfrontendsFromRepositoryAndAssignsThemToView()
    {

        $allNewsfrontends = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $newsfrontendRepository = $this->getMockBuilder(\Relpat\RelpatNewsfecreator\Domain\Repository\NewsfrontendRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $newsfrontendRepository->expects(self::once())->method('findAll')->will(self::returnValue($allNewsfrontends));
        $this->inject($this->subject, 'newsfrontendRepository', $newsfrontendRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('newsfrontends', $allNewsfrontends);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenNewsfrontendToView()
    {
        $newsfrontend = new \Relpat\RelpatNewsfecreator\Domain\Model\Newsfrontend();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('newsfrontend', $newsfrontend);

        $this->subject->showAction($newsfrontend);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenNewsfrontendToNewsfrontendRepository()
    {
        $newsfrontend = new \Relpat\RelpatNewsfecreator\Domain\Model\Newsfrontend();

        $newsfrontendRepository = $this->getMockBuilder(\Relpat\RelpatNewsfecreator\Domain\Repository\NewsfrontendRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $newsfrontendRepository->expects(self::once())->method('add')->with($newsfrontend);
        $this->inject($this->subject, 'newsfrontendRepository', $newsfrontendRepository);

        $this->subject->createAction($newsfrontend);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenNewsfrontendToView()
    {
        $newsfrontend = new \Relpat\RelpatNewsfecreator\Domain\Model\Newsfrontend();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('newsfrontend', $newsfrontend);

        $this->subject->editAction($newsfrontend);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenNewsfrontendInNewsfrontendRepository()
    {
        $newsfrontend = new \Relpat\RelpatNewsfecreator\Domain\Model\Newsfrontend();

        $newsfrontendRepository = $this->getMockBuilder(\Relpat\RelpatNewsfecreator\Domain\Repository\NewsfrontendRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $newsfrontendRepository->expects(self::once())->method('update')->with($newsfrontend);
        $this->inject($this->subject, 'newsfrontendRepository', $newsfrontendRepository);

        $this->subject->updateAction($newsfrontend);
    }
}
