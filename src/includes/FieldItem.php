<?php

class FieldItem
{
    public $key = "";
    public $label = "";
    public $name = "";
    public $type = "";
    public $prefix = "";
    public $instructions = "";
    public $required = "";
    public $conditional_logic = array();
    public $default_value = "";
    public $placeholder = "";
    public $prepend = "";
    public $append = "";
    public $maxlength = "";
    public $readonly = "";
    public $disabled = "";
    public $rows = "";
    public $new_lines = "";
    public $min = "";
    public $max = "";
    public $step = "";
    public $tabs = "";
    public $toolbar = "";
    public $media_upload = "";
    public $width = "";
    public $height = "";
    public $return_format = "";
    public $preview_size = "";
    public $library = "";
    public $min_width = "";
    public $min_height = "";
    public $min_size = "";
    public $max_width = "";
    public $max_height = "";
    public $max_size = "";
    public $mime_types = "";
    public $choices = "";
    public $allow_null = "";
    public $multiple = "";
    public $ui = "";
    public $ajax = "";
    public $layout = "";
    public $allow_custom = "";
    public $save_custom = "";
    public $toggle = "";
    public $other_choice = "";
    public $save_other_choice = "";
    public $message = "";
    public $post_type = "";
    public $taxonomy = "";
    public $filters = "";
    public $elements = "";
    public $field_type = "";
    public $load_save_terms = "";
    public $add_term = "";
    public $role = "";
    public $layouts = "";
    public $button_label = "Add Row";

    private $conditional_logic_key = -1;

    public function __construct(array $settings = NULL)
    {
        if (!empty($settings)) {
            foreach ($settings as $key => $value) {
                $this->{$key} = $value;
            }
        }
    }

    public function key($key)
    {
        $this->key = $key;

        return $this;
    }

    public function label($label)
    {
        $this->label = $label;

        return $this;
    }

    public function name($name)
    {
        $this->name = $name;

        return $this;
    }

    public function type($type)
    {
        $this->type = $type;

        return $this;
    }

    public function prefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function instructions($instructions)
    {
        $this->instructions = $instructions;

        return $this;
    }

    public function required($required = FALSE)
    {
        $this->required = $required;

        return $this;
    }

    public function conditional_logic()
    {
        $this->conditional_logic_key++;

        return $this;
    }

    public function default_value($default_value)
    {
        $this->default_value = $default_value;

        return $this;
    }

    public function placeholder($placeholder)
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function prepend($prepend)
    {
        $this->prepend = $prepend;

        return $this;
    }

    public function append($append)
    {
        $this->append = $append;

        return $this;
    }

    public function maxlength($maxlength)
    {
        $this->maxlength = $maxlength;

        return $this;
    }

    public function readonly($readonly = FALSE)
    {
        $this->readonly = $readonly;

        return $this;
    }

    public function disabled($disabled = FALSE)
    {
        $this->disabled = $disabled;

        return $this;
    }

    public function rows($rows)
    {
        $this->rows = $rows;

        return $this;
    }

    public function new_lines($new_lines = TRUE)
    {
        $this->new_lines = $new_lines ? "wpautop" : "";

        return $this;
    }

    public function min($min)
    {
        $this->min = $min;

        return $this;
    }

    public function max($max)
    {
        $this->max = $max;

        return $this;
    }

    public function step($step = 1)
    {
        $this->step = $step;

        return $this;
    }

    public function tabs($tabs)
    {
        $this->tabs = $tabs;

        return $this;
    }

    public function toolbar($toolbar)
    {
        $this->toolbar = $toolbar;

        return $this;
    }

    public function media_upload($media_upload)
    {
        $this->media_upload = $media_upload;

        return $this;
    }

    public function width($width)
    {
        $this->width = $width;

        return $this;
    }

    public function height($height)
    {
        $this->height = $height;

        return $this;
    }

    public function return_format($return_format)
    {
        $this->return_format = $return_format;

        return $this;
    }

    public function preview_size($preview_size)
    {
        $this->preview_size = $preview_size;

        return $this;
    }

    public function library($library)
    {
        $this->library = $library;

        return $this;
    }

    public function min_width($min_width)
    {
        $this->min_width = $min_width;

        return $this;
    }

    public function min_height($min_height)
    {
        $this->min_height = $min_height;

        return $this;
    }

    public function min_size($min_size)
    {
        $this->min_size = $min_size;

        return $this;
    }

    public function max_width($max_width)
    {
        $this->max_width = $max_width;

        return $this;
    }

    public function max_height($max_height)
    {
        $this->max_height = $max_height;

        return $this;
    }

    public function max_size($max_size)
    {
        $this->max_size = $max_size;

        return $this;
    }

    public function mime_types($mime_types)
    {
        $this->mime_types = $mime_types;

        return $this;
    }

    public function choices($choices = array())
    {
        $this->choices = $choices;

        return $this;
    }

    public function allow_null($allow_null)
    {
        $this->allow_null = $allow_null;

        return $this;
    }

    public function multiple($multiple)
    {
        $this->multiple = $multiple;

        return $this;
    }

    public function ui($ui)
    {
        $this->ui = $ui;

        return $this;
    }

    public function ajax($ajax)
    {
        $this->ajax = $ajax;

        return $this;
    }

    public function layout($layout)
    {
        $this->layout = $layout;

        return $this;
    }

    public function allow_custom($allow_custom)
    {
        $this->allow_custom = $allow_custom;

        return $this;
    }

    public function save_custom($save_custom)
    {
        $this->save_custom = $save_custom;

        return $this;
    }

    public function toggle($toggle)
    {
        $this->toggle = $toggle;

        return $this;
    }

    public function other_choice($other_choice)
    {
        $this->other_choice = $other_choice;

        return $this;
    }

    public function save_other_choice($save_other_choice)
    {
        $this->save_other_choice = $save_other_choice;

        return $this;
    }

    public function message($message)
    {
        $this->message = $message;

        return $this;
    }

    public function post_type()
    {
        $this->post_type = func_get_args();

        return $this;
    }

    public function taxonomy($taxonomy)
    {
        $this->taxonomy = $taxonomy;

        return $this;
    }

    public function filters($filters)
    {
        $this->filters = $filters;

        return $this;
    }

    public function elements($elements)
    {
        $this->elements = $elements;

        return $this;
    }

    public function field_type($field_type)
    {
        $this->field_type = $field_type;

        return $this;
    }

    public function load_save_terms($load_save_terms)
    {
        $this->load_save_terms = $load_save_terms;

        return $this;
    }

    public function add_term($add_term)
    {
        $this->add_term = $add_term;

        return $this;
    }

    public function button_label($button_label)
    {
        $this->button_label = $button_label;

        return $this;
    }

    public function choice($label, $key = NULL)
    {
        $args = func_get_args();
        if (count($args) > 2) {
            foreach ($args as $choice) {
                $this->choice($choice);
            }

            return $this;
        }

        $key                 = empty($key) ? $label : $key;
        $this->choices[$key] = $label;

        return $this;
    }

    public function condition($field, $value, $operator = '==')
    {
        if(!is_array($this->conditional_logic))
        {
            $this->conditional_logic = array();
        }

        $this->conditional_logic[$this->conditional_logic_key][] = compact('field', 'value', 'operator');

        return $this;
    }

    public function layouts($layouts)
    {
        $this->layouts = $layouts;

        return $this;
    }

    public function sub_field($field_name, FieldItem $field)
    {
        $this->sub_fields[$field_name] = $field;

        return $this;
    }

    public function block()
    {
        $this->layout = "row";

        return $this;
    }

    public function table()
    {
        $this->layout = "table";

        return $this;
    }

    public function horizontal()
    {
        $this->layout = "horizontal";

        return $this;
    }

    public function vertical()
    {
        $this->layout = "vertical";

        return $this;
    }

    public function all()
    {
        $this->tabs = "all";

        return $this;
    }

    public function visual()
    {
        $this->tabs =  "visual";

        return $this;
    }

    public function text()
    {
        $this->tabs = "text";

        return $this;
    }

    public function full()
    {
        $this->toolbar = "full";

        return $this;
    }

    public function basic()
    {
        $this->toolbar = "basic";

        return $this;
    }
}
