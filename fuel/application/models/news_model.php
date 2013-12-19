<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(FUEL_PATH.'models/base_module_model.php');
 
class News_model extends Base_module_model {
 
    public $required = array('headline');
    public $record_class = 'News_item';
    public $parsed_fields = array('content');
     
    function __construct()
    {
        parent::__construct('news'); // table name
    }
 
    function list_items($limit = NULL, $offset = NULL, $col = 'release_date', $order = 'desc')
    {
        $this->db->select('id, headline, slug, published');
        $data = parent::list_items($limit, $offset, $col, $order);
        return $data;
    }
 
 
    function on_before_clean($values)
    {
        if (empty($values['slug'])) $values['slug'] = url_title($values['headline'], 'dash', TRUE);
        if (!intval($values['release_date'])) $values['release_date'] = datetime_now();
        return $values;
    }
 
    function form_fields($values = array())
    {
        $fields = parent::form_fields();
        $fields['slug']['comment'] = 'If no slug is provided, one will be provided for you';
        $fields['release_date']['comment'] = 'A release date will automatically be created for you of the current date if left blank';
        return $fields;
    }
 
    function _common_query()
    {
        parent::_common_query(); // to do active and published
        $this->db->order_by('release_date desc');
    }
}
 
class News_item_model extends Base_module_record {
 
    protected $_date_format = 'F d, Y';
     
    function get_url()
    {
        if (!empty($this->link)) return $this->link;
        return site_url('news/'.$this->slug);
    }
     
    function get_excerpt_formatted($char_limit = NULL, $readmore = '')
    {
        $this->_CI->load->helper('typography');
        $this->_CI->load->helper('text');
        $excerpt = $this->content;
 
        if (!empty($char_limit))
        {
            // must strip tags to get accruate character count
            $excerpt = strip_tags($excerpt);
            $excerpt = character_limiter($excerpt, $char_limit);
        }
        $excerpt = auto_typography($excerpt);
        $excerpt = $this->_parse($excerpt);
        if (!empty($readmore))
        {
            $excerpt .= ' '.anchor($this->get_url(), $readmore, 'class="readmore"');
        }
        return $excerpt;
    }
     
}
?>
