<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:event_inventory/Resources/Private/Language/locallang_db.xlf:tx_eventinventory_domain_model_event',
        'label' => 'name',
        'iconfile' => 'EXT:event_inventory/Resources/Public/Icons/Event.svg'
    ],
    'columns' => [
        'name' => [
            'label' => 'LLL:EXT:event_inventory/Resources/Private/Language/locallang_db.xlf:tx_eventinventory_domain_model_event.item_label',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim'
            ],
        ],
        'description' => [
            'label' => 'LLL:EXT:event_inventory/Resources/Private/Language/locallang_db.xlf:tx_eventinventory_domain_model_event.item_description',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ],
        ],
        'date_time' => [
            'label' => 'LLL:EXT:event_inventory/Resources/Private/Language/locallang_db.xlf:tx_eventinventory_domain_model_event.date_time',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'name, description, date_time'],
    ],
];