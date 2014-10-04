<?php

/*
Plugin Name: CS Custom Posts
Description: CS Custom Posts
Author: Dmitriy Shuba <sda@sda.in.ua>
Version: 0.1.0
*/

class CSCustomPosts {
    
    const theme_textdomain     = 'custom_posts';
    const types_path           = 'types/*';
    const taxonomy_path        = 'taxonomy/*';
    
    private $types = array();
    private $taxonomy = array();
    
    public function __construct()   {
        
        add_action('init', array(&$this, 'initCustomTypes'));
        add_action('init', array(&$this, 'initCustomTaxonomy'));
        
        // Добавляем js-скрипты для front-end
        add_action('wp_enqueue_scripts', array(&$this, 'init_scripts_method'));
        
        // Добавляем стилил для front-end
        add_action('wp_enqueue_scripts', array(&$this, 'init_scripts_styles'));
        
    }
    
    public function getThemeTextDomain()    {
        
        return self::theme_textdomain;
        
    }
    
    function init_scripts_method()  {
        
        //wp_enqueue_script('', get_home_url() . '', array('jquery'));
        
    }
    
    function init_scripts_styles()  {
        
        //wp_enqueue_style('',  'style.css', array());
        
    }
    
    /**
     * Сканирует папку с доступными кастомными типами записей
     * @return multitype:
     */
    public function getTypesData()  {
        
        $types = glob(ABSPATH . '/wp-content/plugins/cs-custom-posts/' . self::types_path);
                
        foreach ($types as $type)   {
            $this->types[$this->getBaseName($type)] = $type;
        }
        
        return $this->types;
        
    }    
    
    /**
     * Сканирует папку с доступными кастомными таксономиями
     * @return multitype:
     */
    public function getTaxonomyData()  {
    
        $taxonomy = glob(ABSPATH . '/wp-content/plugins/cs-custom-posts/' . self::taxonomy_path);
    
        foreach ($taxonomy as $tax)   {
            $this->taxonomy[$this->getBaseName($tax)] = $tax;
        }
    
        return $this->taxonomy;
    
    }
    
    public function initCustomTypes()  {
        
        $types = $this->getTypesData();
        
        foreach ($types as $name => $type)   {
            
            register_post_type($name, require_once($type));
            
        }
        
    }
    
    public function initCustomTaxonomy()    {
        
        $taxonomy = $this->getTaxonomyData();

        foreach ($taxonomy as $name => $tax)    {
            
            $taxData = require_once($tax);
            
            register_taxonomy($name, $taxData['object_type'], $taxData['args']);
            
        }
        
    }
    
    private function getBaseName($filename) {
        
        $path_info = pathinfo($filename);
        return $path_info['filename'];
        
    }
    
}

$cscp = new CSCustomPosts();