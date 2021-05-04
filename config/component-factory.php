<?php

return [
    'path' => [
        'component' => [
            'view'  => resource_path(env('COMPONENT_FACTORY_COMPONENT_VIEW_PATH', 'views/components')),
            'style' => resource_path(env('COMPONENT_FACTORY_COMPONENT_STYLE_PATH', 'assets/scss/components')),
        ],
        'element' => [
            'view'  => resource_path(env('COMPONENT_FACTORY_ELEMENT_VIEW_PATH', 'views/elements')),
            'style' => resource_path(env('COMPONENT_FACTORY_ELEMENT_STYLE_PATH', 'assets/scss/elements')),
        ],
    ],
];
