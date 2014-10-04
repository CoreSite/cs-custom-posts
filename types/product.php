<?php

return array(
    'labels' => array(
        'name'              => __('Продукция', $this->getThemeTextDomain()),
        'singular_name'     => __('Запись', $this->getThemeTextDomain()),
        'add_new'           => __('Добавить', $this->getThemeTextDomain()),
        'add_new_item'      => __('Добавить новую запись', $this->getThemeTextDomain()),
        'edit_item'         => __('Редактировать', $this->getThemeTextDomain()),
        'new_item'          => __('Новая запись', $this->getThemeTextDomain()),
        'view_item'         => __('Просмотр', $this->getThemeTextDomain()),
        'search_items'      => __('Поиск', $this->getThemeTextDomain()),
        'not_found'         => __('Ничего не найдено', $this->getThemeTextDomain()),
        'not_found_in_trash'=> __('В корзине ничего не найдено', $this->getThemeTextDomain()),
        'parent_item_colon' => __('', $this->getThemeTextDomain()),
        'menu_name'         => __('Продукция', $this->getThemeTextDomain()),
    ),
    'public'                => true,
    'publicly_queryable'    => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'query_var'             => true,
    'rewrite'               => true,
    'capability_type'       => 'post',
    'has_archive'           => true,
    'hierarchical'          => false,
    'menu_position'         => 20.3,
    'supports'              => array('title', 'editor', 'thumbnail'),
    'taxonomies'            => array(),
);