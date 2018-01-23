<?php
namespace UNAL\ResaUnal\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alexis Ortiz  <eaortiz@unal.edu.co>
 */
class ElementoTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\ResaUnal\Domain\Model\Elemento
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \UNAL\ResaUnal\Domain\Model\Elemento();
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
    public function getInformacionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getInformacion()
        );
    }

    /**
     * @test
     */
    public function setInformacionForStringSetsInformacion()
    {
        $this->subject->setInformacion('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'informacion',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTabInformacionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTabInformacion()
        );
    }

    /**
     * @test
     */
    public function setTabInformacionForStringSetsTabInformacion()
    {
        $this->subject->setTabInformacion('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tabInformacion',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTabIframesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTabIframes()
        );
    }

    /**
     * @test
     */
    public function setTabIframesForStringSetsTabIframes()
    {
        $this->subject->setTabIframes('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tabIframes',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIframesReturnsInitialValueForIframe()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getIframes()
        );
    }

    /**
     * @test
     */
    public function setIframesForObjectStorageContainingIframeSetsIframes()
    {
        $iframe = new \UNAL\ResaUnal\Domain\Model\Iframe();
        $objectStorageHoldingExactlyOneIframes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneIframes->attach($iframe);
        $this->subject->setIframes($objectStorageHoldingExactlyOneIframes);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneIframes,
            'iframes',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addIframeToObjectStorageHoldingIframes()
    {
        $iframe = new \UNAL\ResaUnal\Domain\Model\Iframe();
        $iframesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $iframesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($iframe));
        $this->inject($this->subject, 'iframes', $iframesObjectStorageMock);

        $this->subject->addIframe($iframe);
    }

    /**
     * @test
     */
    public function removeIframeFromObjectStorageHoldingIframes()
    {
        $iframe = new \UNAL\ResaUnal\Domain\Model\Iframe();
        $iframesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $iframesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($iframe));
        $this->inject($this->subject, 'iframes', $iframesObjectStorageMock);

        $this->subject->removeIframe($iframe);
    }
}
