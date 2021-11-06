<?php

use NetherMC\ApiServer\Context;

return function(Context $context) {
    return [
        'hello' => [
            'a' => true,
            'b' => 1,
            'c' => ['a', 'b']
        ]
    ];
};