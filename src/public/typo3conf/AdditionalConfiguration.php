<?php

$GLOBALS['TYPO3_CONF_VARS']['LOG']['writerConfiguration'] = [
    \TYPO3\CMS\Core\Log\LogLevel::ERROR => [
        'TYPO3\\CMS\\Core\\Log\\Writer\\FileWriter' => [
            'logFile' => 'typo3temp/logs/typo3_error.log'
        ]
    ],
    \TYPO3\CMS\Core\Log\LogLevel::DEBUG => [
        'TYPO3\\CMS\\Core\\Log\\Writer\\FileWriter' => [
            'logFile' => 'typo3temp/logs/typo3_debug.log'
        ]
    ],
    \TYPO3\CMS\Core\Log\LogLevel::WARNING => [
        'TYPO3\\CMS\\Core\\Log\\Writer\\FileWriter' => [
            'logFile' => 'typo3temp/logs/typo3_warning.log'
        ]
    ],
];
