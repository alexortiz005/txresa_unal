<?php
namespace UNAL\ResaUnal\Domain\Model;

/***
 *
 * This file is part of the "RESA Unal" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Alexis Ortiz  <eaortiz@unal.edu.co>, UNAL
 *
 ***/

/**
 * Elemento
 */
class Elemento extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nombre
     *
     * @var string
     */
    protected $nombre = '';

    /**
     * nombreDisplay
     *
     * @var string
     */
    protected $nombreDisplay = '';

    /**
     * informacion
     *
     * @var string
     */
    protected $informacion = '';

    /**
     * tabInformacion
     *
     * @var string
     */
    protected $tabInformacion = '';

    /**
     * tabIframes
     *
     * @var string
     */
    protected $tabIframes = 0;

    /**
     * iframes
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\ResaUnal\Domain\Model\Iframe>
     */
    protected $iframes = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->iframes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the nombre
     *
     * @return string $nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Sets the nombre
     *
     * @param string $nombre
     * @return void
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Returns the nombreDisplay
     *
     * @return string $nombreDisplay
     */
    public function getNombreDisplay()
    {
        return $this->nombreDisplay;
    }

    /**
     * Sets the nombreDisplay
     *
     * @param string $nombreDisplay
     * @return void
     */
    public function setNombreDisplay($nombreDisplay)
    {
        $this->nombreDisplay = $nombreDisplay;
    }

    /**
     * Returns the informacion
     *
     * @return string $informacion
     */
    public function getInformacion()
    {
        return $this->informacion;
    }

    /**
     * Sets the informacion
     *
     * @param string $informacion
     * @return void
     */
    public function setInformacion($informacion)
    {
        $this->informacion = $informacion;
    }

    /**
     * Returns the tabInformacion
     *
     * @return string $tabInformacion
     */
    public function getTabInformacion()
    {
        return $this->tabInformacion;
    }

    /**
     * Sets the tabInformacion
     *
     * @param string $tabInformacion
     * @return void
     */
    public function setTabInformacion($tabInformacion)
    {
        $this->tabInformacion = $tabInformacion;
    }

    /**
     * Adds a Iframe
     *
     * @param \UNAL\ResaUnal\Domain\Model\Iframe $iframe
     * @return void
     */
    public function addIframe(\UNAL\ResaUnal\Domain\Model\Iframe $iframe)
    {
        $this->iframes->attach($iframe);
    }

    /**
     * Removes a Iframe
     *
     * @param \UNAL\ResaUnal\Domain\Model\Iframe $iframeToRemove The Iframe to be removed
     * @return void
     */
    public function removeIframe(\UNAL\ResaUnal\Domain\Model\Iframe $iframeToRemove)
    {
        $this->iframes->detach($iframeToRemove);
    }

    /**
     * Returns the iframes
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\ResaUnal\Domain\Model\Iframe> $iframes
     */
    public function getIframes()
    {
        return $this->iframes;
    }

    /**
     * Sets the iframes
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\ResaUnal\Domain\Model\Iframe> $iframes
     * @return void
     */
    public function setIframes(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $iframes)
    {
        $this->iframes = $iframes;
    }

    /**
     * Returns the tabIframes
     *
     * @return string tabIframes
     */
    public function getTabIframes()
    {
        return $this->tabIframes;
    }

    /**
     * Sets the tabIframes
     *
     * @param int $tabIframes
     * @return void
     */
    public function setTabIframes($tabIframes)
    {
        $this->tabIframes = $tabIframes;
    }
}
