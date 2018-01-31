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
 * CategoriaController
 */
class CategoriaController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * categoriaRepository
     *
     * @var \UNAL\ResaUnal\Domain\Repository\CategoriaRepository
     * @inject
     */
    protected $categoriaRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {    

        $categorias_uids=explode(',',$this->settings['categorias']);
        $categorias_temp=[];
        foreach ($categorias_uids as $key => $uid) {
            $categorias_temp[]= $categorias = $this->categoriaRepository->findByUid($uid);
        }       

        $this->view->assignMultiple([
            'categorias' => $categorias_temp
        ]);


    }

    /**
     * action show
     *
     * @param \UNAL\ResaUnal\Domain\Model\Categoria $categoria
     * @return void
     */
    public function showAction(\UNAL\ResaUnal\Domain\Model\Categoria $categoria)
    {
        $this->view->assign('categoria', $categoria);
    }
}
