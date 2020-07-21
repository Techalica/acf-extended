<?php

class Metabox
{

    const POSITION_HIGH              = "acf_after_title";
    const POSITION_NORMAL            = "normal";
    const POSITION_SIDE              = "side";

    protected $title                 = "";
    protected $key                   = null;
    protected $location              = array();
    protected $position              = "normal";
    protected $style                 = "default";
    protected $hide_on_screen        = null;
    protected $menu_order            = "";
    protected $fields                = array();
    protected $label_placement       = "top";
    protected $instruction_placement = "field";
    
    protected static $group_names    = array();

    public static function instance()
    {
        $instance = new Metabox;
        return $instance;
    }

    public function __construct()
    {
        $this->hide_on_screen = new Hide($this);
    }

    public function title($title)
    {
        $this->title = $title;
        return $this;
    }
    
    public function key($key)
    {
        $this->key = $key;
        return $this;
    }

    public function location($location = "default")
    {
        if (!array_key_exists($location, $this->location))
        {
            $this->location[$location]    = array();
            $this->location[$location][0] = new Location($this);
        }

        return $this->location[$location][0];
    }

    public function location_and($location = "default", $index = 0)
    {
        if (!array_key_exists($location, $this->location))
        {
            $this->location[$location] = array();
        }

        if (empty($index))
        {
            $index = count($this->location[$location]);
        }

        if (!array_key_exists($index, $this->location[$location]))
        {
            $this->location[$location][$index] = new Location($this);
        }

        return $this->location[$location][$index];
    }

    public function hide()
    {
        return $this->hide_on_screen;
    }

    public function high()
    {
        $this->position = self::POSITION_HIGH;
        return $this;
    }

    public function side()
    {
        $this->position = self::POSITION_SIDE;
        return $this;
    }

    public function normal()
    {
        $this->position = self::POSITION_NORMAL;
        return $this;
    }

    public function metabox()
    {
        $this->style = "default";
        return $this;
    }

    public function seamless()
    {
        $this->style = "seamless";
        return $this;
    }

    public function label_left()
    {
        $this->label_placement = "left";
        return $this;
    }

    public function label_top()
    {
        $this->label_placement = "top";
        return $this;
    }

    public function instruction_below_labels()
    {
        $this->instruction_placement = "label";
        return $this;
    }

    public function instruction_below_fields()
    {
        $this->instruction_placement = "field";
        return $this;
    }

    public function fields(array $fields)
    {
        $this->fields = array();
        foreach($fields as $field_name => $field)
        {
            if(!($field instanceof FieldItem))
            {
                continue;
            }
            
            $this->fields[$field_name] = $field;
        }
        
        return $this;
    }

    public function get_acf_metabox()
    {
        if(empty($this->key))
        {
            self::$group_names[$this->title] = array_key_exists($this->title, self::$group_names) ? (self::$group_names[$this->title] + 1) : 0;
            $this->key                       = "group_" . sanitize_title($this->title) . "_" . self::$group_names[$this->title];
        }
        
        $key      = $this->key;
        $title    = $this->title;
        $fields   = $this->convert_to_acf_fields($this->fields);

        $location = array_values(array_map(function($location)
        {        
            if(is_array($location))
            {
                foreach($location as $index=>$loc)
                {
                    $location[$index] = $loc->toArray();
                }

                return $location;
            }

            return $location->toArray();
        }, $this->location));
        
        $menu_order            = $this->menu_order;
        $position              = $this->position;
        $style                 = $this->style;
        $label_placement       = $this->label_placement;
        $instruction_placement = $this->instruction_placement;
        $hide_on_screen        = $this->hide_on_screen->toArray();

        return compact('key', 'title', 'fields', 'location', 'menu_order', 'position', 'style', 'label_placement', 'instruction_placement', 'hide_on_screen');        
    }
    
    public function register()
    {
        register_field_group($this->get_acf_metabox());
    }

    protected function convert_to_acf_fields(array $fields, FieldItem $parent = null)
    {
        $parent_key  = $this->key;

        if($parent instanceof FieldItem)
        {
            $parent_field_key = explode("_", $parent->key);
            $parent_field_key = array_pop($parent_field_key);
            $parent_key       = $parent_key . "_" . $parent_field_key;
        }

        $names = array();
        foreach ($fields as $key => $field)
        {
            $field->key  = "field_" . $parent_key . "_" .  $key;
            $field->name = $key;

            if (!empty($field->sub_fields))
            {
                $field->sub_fields = $this->convert_to_acf_fields($field->sub_fields, $field);
            }

            if(!empty($field->conditional_logic) && is_array($field->conditional_logic))
            {
                $field->conditional_logic = $this->conditional_logic_conversion($field->conditional_logic);
            }

            $names[] = $field->key;
        }


        $fields = array_map(function($field) {
            return ((array) $field);
        }, $fields);

        $fields = array_values($fields);

        return $fields;
    }

    protected function conditional_logic_conversion($conditional_array)
    {
        $conditional_logic = array();

        foreach($conditional_array as $conditional_blocks)
        {
            $condition = array();

            foreach ($conditional_blocks as $conditional_block)
            {
                $conditional_block['field'] = $conditional_block['field']->key;
                $condition[] = $conditional_block;
            }

            array_push($conditional_logic, $condition);
        }

        return $conditional_logic;
    }
}
