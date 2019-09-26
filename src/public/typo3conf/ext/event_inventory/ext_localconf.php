<?php

defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'MyVendor.EventInventory',
    'EventList',
    [
        'EventInventory' => 'yearMonthList, list, item',
    ],
    // non-cacheable actions
    [
        'EventInventory' => 'list, yearMonthList, item',
    ]
);