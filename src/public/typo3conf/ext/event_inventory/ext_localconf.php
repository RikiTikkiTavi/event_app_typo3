<?php

defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'MyVendor.EventInventory',
    'EventList',
    [
        'EventInventory' => 'list',
    ],
    // non-cacheable actions
    [
        'EventInventory' => '',
    ]
);