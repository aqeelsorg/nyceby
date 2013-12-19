<?php

require_once(MODULES_PATH.'/site/libraries/Site_base_controller.php');

class Site extends Site_base_controller {

	function __construct()
	{	
		parent::__construct();
		
	  	$this->load->library('Go_cart');
	  	
		$this->lang->load('admin_common');
		
		$this->lang->load('goedit');
	
		$this->load->library('auth');
		
		$this->load->model(array('page_model','category_model', 'product_model', 'digital_product_model', 'gift_card_model', 'option_model', 'order_model', 'settings_model'));
	
		$this->load->helper(array('form_helper', 'formatting_helper'));
		
		$gc_setting = $this->settings_model->get_settings('gift_cards');
		
		if(!empty($gc_setting['enabled']) && $gc_setting['enabled']==1)
		{
			$this->gift_cards_enabled = true;
		}			
		else
		{
			$this->gift_cards_enabled = false;
		}
	}
	
	function main()
	{
		$vars = $this->_common_vars();
		
		$vars['products'] = $this->fuel_site->get_product_details();
		
		$output = $this->_render('home', $vars, TRUE);
		 
		if (!empty($output))
		{
			$this->output->set_output($output);
			return;
		}		
	}
	
 	function privacy_policy()
    {
        	$vars = array();
        		
            $output = $this->_render('privacy_policy', $vars, TRUE);
		 
			if (!empty($output))
			{
				$this->output->set_output($output);
				return;
			}
	}
	
}