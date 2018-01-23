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
 * Categoria
 */
class Categoria extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * elementos
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\ResaUnal\Domain\Model\Elemento>
     */
    protected $elementos = null;

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
        $this->elementos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Adds a Elemento
     *
     * @param \UNAL\ResaUnal\Domain\Model\Elemento $elemento
     * @return void
     */
    public function addElemento(\UNAL\ResaUnal\Domain\Model\Elemento $elemento)
    {
        $this->elementos->attach($elemento);
    }

    /**
     * Removes a Elemento
     *
     * @param \UNAL\ResaUnal\Domain\Model\Elemento $elementoToRemove The Elemento to be removed
     * @return void
     */
    public function removeElemento(\UNAL\ResaUnal\Domain\Model\Elemento $elementoToRemove)
    {
        $this->elementos->detach($elementoToRemove);
    }

    /**
     * Returns the elementos
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\ResaUnal\Domain\Model\Elemento> $elementos
     */
    public function getElementos()
    {
        return $this->elementos;
    }

    /**
     * Sets the elementos
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\ResaUnal\Domain\Model\Elemento> $elementos
     * @return void
     */
    public function setElementos(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $elementos)
    {
        $this->elementos = $elementos;
    }
}
