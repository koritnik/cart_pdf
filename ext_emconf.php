<?php

declare(strict_types=1);

$EM_CONF['cart_pdf'] = [
    'title' => 'Cart - PDF',
    'description' => 'Shopping Cart(s) for TYPO3 - PDF Renderer for Invoices and Delivery Notes',
    'category' => 'services',
    'version' => '8.0.0',
    'state' => 'beta',
    'author' => 'Daniel Gohlke',
    'author_email' => 'ext@extco.de',
    'constraints' => [
        'depends' => [
            'php' => '8.2.0-8.5.99',
            'typo3' => '13.4.0-14.3.99',
            'cart'  => '11.5.0-12.99.99',
            'tcpdf' => '6.7.0-6.99.99',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
