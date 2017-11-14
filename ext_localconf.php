<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Relpat.RelpatNewsfecreator',
            'Newsfrontendcreator',
            [
                'Newsfrontend' => 'list, show, new, create, edit, update'
            ],
            // non-cacheable actions
            [
                'Newsfrontend' => 'create, update'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					newsfrontendcreator {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_newsfrontendcreator.svg
						title = LLL:EXT:relpat_newsfecreator/Resources/Private/Language/locallang_db.xlf:tx_relpat_newsfecreator_domain_model_newsfrontendcreator
						description = LLL:EXT:relpat_newsfecreator/Resources/Private/Language/locallang_db.xlf:tx_relpat_newsfecreator_domain_model_newsfrontendcreator.description
						tt_content_defValues {
							CType = list
							list_type = relpatnewsfecreator_newsfrontendcreator
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
