<?php
namespace UNAL\ResaUnal\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alexis Ortiz  <eaortiz@unal.edu.co>
 */
class ElementoControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\ResaUnal\Controller\ElementoController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\UNAL\ResaUnal\Controller\ElementoController::class)
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
    public function listActionFetchesAllElementosFromRepositoryAndAssignsThemToView()
    {

        $allElementos = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $elementoRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $elementoRepository->expects(self::once())->method('findAll')->will(self::returnValue($allElementos));
        $this->inject($this->subject, 'elementoRepository', $elementoRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('elementos', $allElementos);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenElementoToView()
    {
        $elemento = new \UNAL\ResaUnal\Domain\Model\Elemento();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('elemento', $elemento);

        $this->subject->showAction($elemento);
    }
}
