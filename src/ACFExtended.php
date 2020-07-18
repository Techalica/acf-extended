<?php

namespace ACFExtended;

class ACFExtended{
    public static function instance(){
        $acf_helpers = array('FieldItem', 'Location', 'FieldHelper', 'Hide', 'Metabox');
        foreach ($acf_helpers as $acf_helper_class) {
            if (!class_exists($acf_helper_class)) {
                require_once __DIR__ . "/includes/$acf_helper_class.php";
            }
        }
    }
}

ACFExtended::instance();