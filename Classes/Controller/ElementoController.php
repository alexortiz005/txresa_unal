<?php
namespace UNAL\ResaUnal\Controller;

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
 * ElementoController
 */
class ElementoController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * categoriaRepository
     *
     * @var \UNAL\ResaUnal\Domain\Repository\CategoriaRepository
     * @inject
     */
    protected $categoriaRepository = null;
    
    /**
     * action show
     *
     * @param \UNAL\ResaUnal\Domain\Model\Elemento $elemento
     * @return void
     */
    public function showAction(\UNAL\ResaUnal\Domain\Model\Elemento $elemento)
    {
        $categorias = $this->categoriaRepository->findAll();

        $this->view->assignMultiple([
            'categorias' => $categorias,
            'elementoEstudio' => $elemento,            
        ]);
    
    }
}
