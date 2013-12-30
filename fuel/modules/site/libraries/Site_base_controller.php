<?php

class Site_base_controller extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
	
		$this->load->module_library(FUEL_FOLDER, 'fuel_auth');
		
		if (!$this->fuel_auth->accessible_module('site'))
		{
			show_404();
		}
		
		$this->load->module_helper(FUEL_FOLDER, 'fuel');
		
		$this->load->module_config("site", 'site');

		$this->load->module_library("site", 'fuel_site');

	}
	
	function _render($view, $vars = array(), $return = FALSE, $layout = '')
	{
		if (empty($layout)) $layout = '_layouts/'.$this->fuel_site->layout();
		
		$this->load->module_library(FUEL_FOLDER, 'fuel_pagevars');

		// get any global variables for the headers and footers
		
		/*$_vars = $this->fuel_pagevars->retrieve(uri_path());

		if (is_array($_vars))
		{
			$vars = array_merge($_vars, $vars);
		}*/		
				
		$view_folder = $this->fuel_site->theme_path();
		
		$vars['CI'] =& get_instance(); 	
		
		if (!empty($layout))
		{
			$vars['body'] = $this->load->module_view($this->fuel_site->settings('theme_module'), $view_folder.$view, $vars, TRUE);
			
			$view = $this->fuel_site->theme_path().$this->fuel_site->layout();
		}	
		else
		{
			$view = $view_folder.$view;
		}
		

		$output = $this->load->module_view($this->fuel_site->settings('theme_module'), $view, $vars, TRUE);
		
		$this->load->module_library(FUEL_FOLDER, 'fuel_page');

		$this->fuel_page->initialize();
		
		$output = $this->fuel_page->fuelify($output);
		
		if($return)
		{
			return $output;
		}
		else
		{
			$this->output->set_output($output);
		}
	}
	
	function _common_vars()
	{
		$vars['blog'] =& $this->fuel_site;
		
		$vars['is_site'] = TRUE;
		
		$vars['page_title'] = '';

		return $vars;
	}
	
}