<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Event Inventory',
    'description' => 'An extension to manage events.',
    'category' => 'plugin',
    'author' => 'John Doe',
    'author_company' => 'John Doe Inc.',
    'author_email' => 'john.doe@example.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-10.0.0',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'MyVendor\\EventInventory\\' => 'Classes'
        ],
    ],
];