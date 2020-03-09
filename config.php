<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [],
    'selected' => function ($page, $section) {
        return $page->getPath() === $section ? 'selected' : '';
    },
    'inDocs' => function ($page){
        return strpos($page->getPath(), 'docs/') !== false ? 'selected' : '';
    }
];
