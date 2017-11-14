<?php
defined('TYPO3_MODE') || die();

if (!isset($GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['type'])) {
    if (file_exists($GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['dynamicConfigFile'])) {
        require_once($GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['dynamicConfigFile']);
    }
    // no type field defined, so we define it here. This will only happen the first time the extension is installed!!
    $GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['type'] = 'tx_extbase_type';
    $tempColumnstx_relpatnewsfecreator_tx_news_domain_model_news = [];
    $tempColumnstx_relpatnewsfecreator_tx_news_domain_model_news[$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['type']] = [
        'exclude' => true,
        'label'   => 'LLL:EXT:relpat_newsfecreator/Resources/Private/Language/locallang_db.xlf:tx_relpatnewsfecreator.tx_extbase_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['Newsfrontend','Tx_RelpatNewsfecreator_Newsfrontend']
            ],
            'default' => 'Tx_RelpatNewsfecreator_Newsfrontend',
            'size' => 1,
            'maxitems' => 1,
        ]
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tempColumnstx_relpatnewsfecreator_tx_news_domain_model_news);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    $GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['type'],
    '',
    'after:' . $GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['label']
);

/* inherit and extend the show items from the parent class */

if (isset($GLOBALS['TCA']['tx_news_domain_model_news']['types']['1']['showitem'])) {
    $GLOBALS['TCA']['tx_news_domain_model_news']['types']['Tx_RelpatNewsfecreator_Newsfrontend']['showitem'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['1']['showitem'];
} elseif(is_array($GLOBALS['TCA']['tx_news_domain_model_news']['types'])) {
    // use first entry in types array
    $tx_news_domain_model_news_type_definition = reset($GLOBALS['TCA']['tx_news_domain_model_news']['types']);
    $GLOBALS['TCA']['tx_news_domain_model_news']['types']['Tx_RelpatNewsfecreator_Newsfrontend']['showitem'] = $tx_news_domain_model_news_type_definition['showitem'];
} else {
    $GLOBALS['TCA']['tx_news_domain_model_news']['types']['Tx_RelpatNewsfecreator_Newsfrontend']['showitem'] = '';
}
$GLOBALS['TCA']['tx_news_domain_model_news']['types']['Tx_RelpatNewsfecreator_Newsfrontend']['showitem'] .= ',--div--;LLL:EXT:relpat_newsfecreator/Resources/Private/Language/locallang_db.xlf:tx_relpatnewsfecreator_domain_model_newsfrontend,';
$GLOBALS['TCA']['tx_news_domain_model_news']['types']['Tx_RelpatNewsfecreator_Newsfrontend']['showitem'] .= '';

$GLOBALS['TCA']['tx_news_domain_model_news']['columns'][$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['type']]['config']['items'][] = ['LLL:EXT:relpat_newsfecreator/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_extbase_type.Tx_RelpatNewsfecreator_Newsfrontend','Tx_RelpatNewsfecreator_Newsfrontend'];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    '',
    'EXT:/Resources/Private/Language/locallang_csh_.xlf'
);
