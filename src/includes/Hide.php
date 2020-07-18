<?php

class Hide
{

    protected $metabox         = "";
    protected $permalink       = "";
    protected $the_content     = "";
    protected $excerpt         = "";
    protected $custom_fields   = "";
    protected $discussion      = "";
    protected $comments        = "";
    protected $revisions       = "";
    protected $slug            = "";
    protected $author          = "";
    protected $format          = "";
    protected $page_attributes = "";
    protected $featured_image  = "";
    protected $categories      = "";
    protected $tags            = "";
    protected $send_trackbacks = "";
    protected $all             = null;

    public function __construct(Metabox $metabox)
    {
        $this->metabox = $metabox;
    }

    public function permalink($value = true)
    {
        $this->permalink = $value;
        return $this;
    }

    public function the_content($value = true)
    {
        $this->the_content = $value;
        return $this;
    }

    public function excerpt($value = true)
    {
        $this->excerpt = $value;
        return $this;
    }

    public function custom_fields($value = true)
    {
        $this->custom_fields = $value;
        return $this;
    }

    public function discussion($value = true)
    {
        $this->discussion = $value;
        return $this;
    }

    public function comments($value = true)
    {
        $this->comments = $value;
        return $this;
    }

    public function revisions($value = true)
    {
        $this->revisions = $value;
        return $this;
    }

    public function slug($value = true)
    {
        $this->slug = $value;
        return $this;
    }

    public function author($value = true)
    {
        $this->author = $value;
        return $this;
    }

    public function format($value = true)
    {
        $this->format = $value;
        return $this;
    }

    public function page_attributes($value = true)
    {
        $this->page_attributes = $value;
        return $this;
    }

    public function featured_image($value = true)
    {
        $this->featured_image = $value;
        return $this;
    }

    public function categories($value = true)
    {
        $this->categories = $value;
        return $this;
    }

    public function tags($value = true)
    {
        $this->tags = $value;
        return $this;
    }

    public function send_trackbacks($value = true)
    {
        $this->send_trackbacks = $value;
        return $this;
    }

    public function all($value = true)
    {
        foreach(get_object_vars($this) as $key => $existing_value)
        {
            if(is_object($existing_value))
                continue;
            
            $this->{$key} = $value;
        }
        
        $this->all = $value;
        return $this;
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

    public function toArray()
    {
        $hide                    = array();
        $hide['permalink']       = $this->permalink;
        $hide['the_content']     = $this->the_content;
        $hide['excerpt']         = $this->excerpt;
        $hide['custom_fields']   = $this->custom_fields;
        $hide['discussion']      = $this->discussion;
        $hide['comments']        = $this->comments;
        $hide['revisions']       = $this->revisions;
        $hide['slug']            = $this->slug;
        $hide['author']          = $this->author;
        $hide['format']          = $this->format;
        $hide['page_attributes'] = $this->page_attributes;
        $hide['featured_image']  = $this->featured_image;
        $hide['categories']      = $this->categories;
        $hide['tags']            = $this->tags;
        $hide['send-trackbacks'] = $this->send_trackbacks;
        
        $hide = array_keys(array_filter($hide));
        return $hide;
    }

}
