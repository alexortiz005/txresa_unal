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
 * IframeController
 */
class IframeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $iframes = $this->iframeRepository->findAll();
        $this->view->assign('iframes', $iframes);
    }

    /**
     * action show
     *
     * @param \UNAL\ResaUnal\Domain\Model\Iframe $iframe
     * @return void
     */
    public function showAction(\UNAL\ResaUnal\Domain\Model\Iframe $iframe)
    {
        $this->view->assign('iframe', $iframe);
    }
}
