<?php
defined('TYPO3_MODE') || die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:resa_unal/Configuration/RTE/Default.yaml';

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'UNAL.ResaUnal',
            'Estudioresa',
            [
                'Categoria' => 'list, show',
                'Elemento' => 'list, show',
                'Iframe' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Categoria' => '',
                'Elemento' => '',
                'Iframe' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    estudioresa {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('resa_unal') . 'Resources/Public/Icons/user_plugin_estudioresa.svg
                        title = LLL:EXT:resa_unal/Resources/Private/Language/locallang_db.xlf:tx_resa_unal_domain_model_estudioresa
                        description = LLL:EXT:resa_unal/Resources/Private/Language/locallang_db.xlf:tx_resa_unal_domain_model_estudioresa.description
                        tt_content_defValues {
                            CType = list
                            list_type = resaunal_estudioresa
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
