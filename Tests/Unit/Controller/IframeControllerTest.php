<?php
namespace UNAL\ResaUnal\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alexis Ortiz  <eaortiz@unal.edu.co>
 */
class IframeControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\ResaUnal\Controller\IframeController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\UNAL\ResaUnal\Controller\IframeController::class)
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
    public function listActionFetchesAllIframesFromRepositoryAndAssignsThemToView()
    {

        $allIframes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $iframeRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $iframeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allIframes));
        $this->inject($this->subject, 'iframeRepository', $iframeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('iframes', $allIframes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenIframeToView()
    {
        $iframe = new \UNAL\ResaUnal\Domain\Model\Iframe();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('iframe', $iframe);

        $this->subject->showAction($iframe);
    }
}
