<?php

return array(
    'object_type'   => array('portfolio'),
    'args'          => array(
        'hierarchical'      => true,
        'label'             => 'Категории портфолио',
        'query_var'         => TRUE,
        'show_admin_column' => true,
        'rewrite'           => array(
            'slug' => $this->getBaseName(__FILE__),
        ),
        'labels'            => array(
            'name'              => __('Категории портфолио', $this->getThemeTextDomain()),
            'singular_name'     => __('Категория', $this->getThemeTextDomain()),
            'search_items'      => __('Категории', $this->getThemeTextDomain()),
            'all_items'         => __('Все категории', $this->getThemeTextDomain()),
            'parent_item'       => __('Родительская категория', $this->getThemeTextDomain()),
            'parent_item_colon' => __('Родительская категория:', $this->getThemeTextDomain()),
            'edit_item'         => __('Редактировать категорию', $this->getThemeTextDomain()),
            'update_item'       => __('обновить категорию', $this->getThemeTextDomain()),
            'add_new_item'      => __('Добавить', $this->getThemeTextDomain()),
            'new_item_name'     => __('Новое название', $this->getThemeTextDomain()),
            'menu_name'         => __('Категории портфолио', $this->getThemeTextDomain())
         ),
    )
);