<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'UNAL.ResaUnal',
            'Estudioresa',
            'Estudio RESA'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('resa_unal', 'Configuration/TypoScript', 'RESA Unal');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_resaunal_domain_model_categoria', 'EXT:resa_unal/Resources/Private/Language/locallang_csh_tx_resaunal_domain_model_categoria.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_resaunal_domain_model_categoria');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_resaunal_domain_model_elemento', 'EXT:resa_unal/Resources/Private/Language/locallang_csh_tx_resaunal_domain_model_elemento.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_resaunal_domain_model_elemento');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_resaunal_domain_model_iframe', 'EXT:resa_unal/Resources/Private/Language/locallang_csh_tx_resaunal_domain_model_iframe.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_resaunal_domain_model_iframe');

    }
);
