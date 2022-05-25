<?php
function debug($txt) {
    echo '<pre>' . print_r($txt, 1) . '</pre';
}
$array = [

    'SKLAD1' => [

        'EDA' => [

            'TOVAR1' => [

                'NAME' => '....',

                'PRICE' => 1238

            ],

            'TOVAR2' => [

                'NAME' => '....',

                'PRICE' => 1235

            ],
        ],

        'NAPITKI' => [

            'TOVAR55' => [

                'NAME' => '....',

                'PRICE' => 1237

            ],

            'TOVAR54' => [

                'NAME' => '....',

                'PRICE' => 1236

            ],

        ],

    ],

    'SKLAD2' => [

        'EDA' => [

            'TOVAR66' => [

                'NAME' => '....',

                'PRICE' => 1239

            ],

            'TOVAR67' => [

                'NAME' => '....',

                'PRICE' => 1231

            ],

        ],

        'NAPITKI' => [

            'TOVAR77' => [

                'NAME' => '....',

                'PRICE' => 1233

            ],

            'TOVAR78' => [

                'NAME' => '....',

                'PRICE' => 1234

            ],

        ],

    ],

];

debug($array);

function sortArray(&$array) {
    foreach ($array as &$skl) {
        foreach ($skl as &$item) {
            usort($item, function ($a, $b) {
                return ($a['PRICE'] - $b['PRICE']);
            });
        }
    }
}

sortArray($array);

debug($array);







