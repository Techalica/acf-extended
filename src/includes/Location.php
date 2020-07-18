<?php

class Location
{

    protected $metabox  = "";
    protected $param    = "";
    protected $operator = "==";
    protected $value    = "";

    public function __construct(Metabox $metabox)
    {
        $this->metabox = $metabox;
    }

    public function post_type()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function user_type()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function post()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function post_category()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function post_format()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function post_status()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function post_taxonomy()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function page()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function page_type()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function page_parent()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function page_template()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function user_form()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function user_role()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function attachment()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function taxonomy()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function comment()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function widget()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function options_page()
    {
        $this->param = __FUNCTION__;
        return $this;
    }

    public function eq()
    {
        $this->operator = "==";
        return $this;
    }

    public function neq()
    {
        $this->operator = "!=";
        return $this;
    }

    public function value($value)
    {
        $this->value = $value;
        return $this;
    }

    public function toArray()
    {
        return array(
            'param'    => $this->param,
            'operator' => $this->operator,
            'value'    => $this->value
        );
    }

    /**
     * Metabox
     * 
     * Select parent item which holds all the metabox settings for current group.
     * 
     * @return Metabox
     */     
    public function metabox()
    {
        return $this->metabox;
    }
}
