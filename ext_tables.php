<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Relpat.RelpatNewsfecreator',
            'Newsfrontendcreator',
            'News Frontend Creator'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'News Frontend Creator');

    },
    $_EXTKEY
);
