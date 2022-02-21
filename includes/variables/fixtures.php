<?php

$typesComponents = [
    'GraphicCard',
    'Keyboard',
    'Monitor',
    'Motherboard',
    'Mouse',
    'PowerSupply',
    'Processor',
    'Ram',
    'StorageSystem'
];

$components = [
    [
        'categorie' => 'GraphicCard',
        'model' => 'Carte graphique GTX 970M',
        'brand' => 'NVIDIA',
        'price' => 150,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2021-01-04',
        'isPeripheral' => 0,
        'subData' => [
            'chipset' => 'NVD',
            'memory' => 6.0,
        ],
    ],
    [
        'categorie' => 'GraphicCard',
        'model' => 'Carte graphique AMD M92',
        'brand' => 'AMD',
        'price' => 134,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2022-01-01',
        'isPeripheral' => 0,
        'subData' => [
            'chipset' => 'AMD',
            'memory' => 5.0,
        ],
    ],
    [
        'categorie' => 'Keyboard',
        'model' => 'Clavier Trust Veza',
        'brand' => 'Trust Veza',
        'price' => 50,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2021-01-29',
        'isPeripheral' => 1,
        'subData' => [
            'isWired' => 0,
            'hasNumKeypad' => 1,
            'keypadType' => 'qwerty'
        ],

    ],
    [
        'categorie' => 'Keyboard',
        'model' => 'Clavier Razer BlackWidow V3',
        'brand' => 'RAZER',
        'price' => 33,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2021-07-11',
        'isPeripheral' => 1,
        'subData' => [
            'isWired' => 0,
            'hasNumKeypad' => 0,
            'keypadType' => 'azerty'
        ],
    ],
    [
        'categorie' => 'Monitor',
        'model' => 'A530',
        'brand' => 'Samsung',
        'price' => 207,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2021-12-11',
        'isPeripheral' => 1,
        'subData' => [
            'diagonalSize' => 14
        ],
    ],
    [
        'categorie' => 'Monitor',
        'model' => 'AX-750',
        'brand' => 'Siemens',
        'price' => 153,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2021-11-11',
        'isPeripheral' => 1,
        'subData' => [
            'diagonalSize' => 17
        ],
    ],
    [
        'categorie' => 'Motherboard',
        'model' => 'PRIME B450',
        'brand' => 'ASUS',
        'price' => 239,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2022-01-11',
        'isPeripheral' => 0,
        'subData' => [
            'socket' => 'Socket 3',
            'format' => 'RMA 15'
        ],
    ],
    [
        'categorie' => 'Motherboard',
        'model' => 'Gigabyte B450 Aorus Elite',
        'brand' => 'Gigabyte',
        'price' => 239,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2022-01-11',
        'isPeripheral' => 0,
        'subData' => [
            'socket' => 'Socket 2',
            'format' => 'RMA 21'
        ],
    ],
    [
        'categorie' => 'Mouse',
        'model' => 'T100',
        'brand' => 'Logitech',
        'price' => 99,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2021-01-01',
        'isPeripheral' => 1,
        'subData' => [
            'isWired' => 0,
            'isPad' => 0,
            'numKey' => 5
        ],
    ],
    [
        'categorie' => 'Mouse',
        'model' => 'x333',
        'brand' => 'Logitech',
        'price' => 31,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2021-12-12',
        'isPeripheral' => 1,
        'subData' => [
            'isWired' => 0,
            'isPad' => 1,
            'numKey' => 3
        ],
    ],
    [
        'categorie' => 'PowerSupply',
        'model' => 'xr153',
        'brand' => 'BomX',
        'price' => 47,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2021-01-01',
        'isPeripheral' => 0,
        'subData' => [
            'powerSupply' => 55
        ],
    ],
    [
        'categorie' => 'PowerSupply',
        'model' => 'PX155',
        'brand' => 'Athlon',
        'price' => 73,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2021-07-11',
        'isPeripheral' => 0,
        'subData' => [
            'powerSupply' => 45
        ],
    ],
    [
        'categorie' => 'Processor',
        'model' => 'Intel Core i7',
        'brand' => 'Intel',
        'price' => 153,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2021-02-02',
        'isPeripheral' => 0,
        'subData' => [
            'frequences' => 1800,
            'nbCore' => 5,
            'chipset' => 'i3'
        ],
    ],
    [
        'categorie' => 'Processor',
        'model' => 'S3XY',
        'brand' => 'Tesla',
        'price' => 153,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2021-02-02',
        'isPeripheral' => 0,
        'subData' => [
            'frequences' => 2400,
            'nbCore' => 3,
            'chipset' => 'i7'
        ],
    ],
    [
        'categorie' => 'Ram',
        'model' => 'Mémoire RAM Corsair',
        'brand' => 'CORSAIR',
        'price' => 82,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2022-02-22',
        'isPeripheral' => 0,
        'subData' => [
            'memory' => 4,
            'nbStrip' => 5,
            'typeFrequences' => 'ZAA'
        ],
    ],
    [
        'categorie' => 'Ram',
        'model' => 'Mémoire RAM Juhor',
        'brand' => 'Juhor',
        'price' => 77,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2022-02-22',
        'isPeripheral' => 0,
        'subData' => [
            'memory' => 8,
            'nbStrip' => 2,
            'typeFrequences' => 'TAA'
        ],
    ],
    [
        'categorie' => 'StorageSystem',
        'model' => 'S100',
        'brand' => 'Samsung',
        'price' => 85,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2022-01-22',
        'isPeripheral' => 0,
        'subData' => [
            'memory' => 512,
            'isSsd' => 1
        ],
    ],
    [
        'categorie' => 'StorageSystem',
        'model' => 'T500',
        'brand' => 'Siemens',
        'price' => 100,
        'quantity' => 1,
        'numberCreated' => 1,
        'dateAdd' => '2022-01-22',
        'isPeripheral' => 0,
        'subData' => [
            'memory' => 1024,
            'isSsd' => 1
        ],
    ]
];