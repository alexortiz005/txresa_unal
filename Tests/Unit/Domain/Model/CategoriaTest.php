<?php
namespace UNAL\ResaUnal\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alexis Ortiz  <eaortiz@unal.edu.co>
 */
class CategoriaTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\ResaUnal\Domain\Model\Categoria
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \UNAL\ResaUnal\Domain\Model\Categoria();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNombreReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNombre()
        );
    }

    /**
     * @test
     */
    public function setNombreForStringSetsNombre()
    {
        $this->subject->setNombre('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nombre',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNombreDisplayReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNombreDisplay()
        );
    }

    /**
     * @test
     */
    public function setNombreDisplayForStringSetsNombreDisplay()
    {
        $this->subject->setNombreDisplay('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nombreDisplay',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getElementosReturnsInitialValueForElemento()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getElementos()
        );
    }

    /**
     * @test
     */
    public function setElementosForObjectStorageContainingElementoSetsElementos()
    {
        $elemento = new \UNAL\ResaUnal\Domain\Model\Elemento();
        $objectStorageHoldingExactlyOneElementos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneElementos->attach($elemento);
        $this->subject->setElementos($objectStorageHoldingExactlyOneElementos);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneElementos,
            'elementos',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addElementoToObjectStorageHoldingElementos()
    {
        $elemento = new \UNAL\ResaUnal\Domain\Model\Elemento();
        $elementosObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $elementosObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($elemento));
        $this->inject($this->subject, 'elementos', $elementosObjectStorageMock);

        $this->subject->addElemento($elemento);
    }

    /**
     * @test
     */
    public function removeElementoFromObjectStorageHoldingElementos()
    {
        $elemento = new \UNAL\ResaUnal\Domain\Model\Elemento();
        $elementosObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $elementosObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($elemento));
        $this->inject($this->subject, 'elementos', $elementosObjectStorageMock);

        $this->subject->removeElemento($elemento);
    }
}
