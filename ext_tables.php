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

        if (TYPO3_MODE === 'BE') {

            $_EXTKEY='resa_unal';
            $extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);

            //pi_flexform value for cifras preview
            $frontendpluginName = 'Estudioresa';
            $pluginSignature = strtolower($extensionName).'_'.strtolower($frontendpluginName);

            $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/estudios.xml');
        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('resa_unal', 'Configuration/TypoScript', 'RESA Unal');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_resaunal_domain_model_categoria', 'EXT:resa_unal/Resources/Private/Language/locallang_csh_tx_resaunal_domain_model_categoria.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_resaunal_domain_model_categoria');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_resaunal_domain_model_elemento', 'EXT:resa_unal/Resources/Private/Language/locallang_csh_tx_resaunal_domain_model_elemento.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_resaunal_domain_model_elemento');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_resaunal_domain_model_iframe', 'EXT:resa_unal/Resources/Private/Language/locallang_csh_tx_resaunal_domain_model_iframe.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_resaunal_domain_model_iframe');

    }
);
