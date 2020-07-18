<?php

class FieldHelper
{    
    private static $_defaults = null;

    public static function text($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function textarea($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function number($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function range($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function email($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function url($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function password($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function wysiwyg($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function oembed($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function image($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function file($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function gallery($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function select($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function checkbox($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function radio($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function button_group($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function boolean($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function link($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function post($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function page($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function relationship($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function taxonomy($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function user($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function google_map($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function date_picker($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function date_time_picker($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function time_picker($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function color_picker($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function message($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function accordion($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function tab($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function group($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function repeater($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    public static function flexible_content($label, $settings = array())
    {
        return self::create(__FUNCTION__, $label, $settings);
    }

    private static function create($type, $label,  $settings = null)
    {
        if(self::$_defaults === null)
        {
            $generated = include(__DIR__ . "/Defaults.php");

            $types     = wp_list_pluck($generated, 'name');

            $generated = array_combine($types, $generated);



            foreach ($generated as $index => $values)
            {
                $generated[$index]['label'] = "";
                $generated[$index]['key']   = "";
                $generated[$index]['name']  = "";
            }

            self::$_defaults = $generated;
        }

        $defaults = self::$_defaults[$type];

        if(!empty($settings))
        {
            $defaults = wp_parse_args($settings, $defaults);
        }
        
        $defaults['label'] = $label;
        $defaults['name']  = sanitize_title($label);
        $defaults['key']   = $defaults['name'];

        $defaults = new FieldItem($defaults);

        return $defaults;
    }
    
}

function fields()
{
    static $helper;
    if($helper === null)
    {
        $helper = new FieldHelper;
    }
    
    return $helper;
}
