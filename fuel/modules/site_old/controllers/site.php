<?php
//ini_set('display_errors', 1);
class Site extends CI_Controller 
{
	var $categories	= '';
	
	//load all the pages into this variable so we can call it from all the methods
	var $pages = '';
	// determine whether to display gift card link on all cart pages
	//  This is Not the place to enable gift cards. It is a setting that is loaded during instantiation.
	var $gift_cards_enabled;
	
	function __construct(){
		
		parent::CI_Controller();
        
		$this->load->library('Go_cart');
               
		$this->lang->load('admin_common');
		$this->lang->load('goedit');
		//load GoCart library
		
		$this->load->library('auth');
		//load needed models
		$this->load->model(array('page_model', 'product_model', 'digital_product_model', 'gift_card_model', 'option_model', 'order_model', 'settings_model'));
	
		$this->load->helper(array('form_helper', 'formatting_helper'));
		
                $this->load->model('category_model');
		
		$gc_setting = $this->settings_model->get_settings('gift_cards');
		if(!empty($gc_setting['enabled']) && $gc_setting['enabled']==1)
		{
			$this->gift_cards_enabled = true;
		}			
		else
		{
			$this->gift_cards_enabled = false;
		}
                remove_ssl();
              
	}
        function main()
        {
            $this->load->view('site/main');
            
            $buyer_info = $this->session->userdata('buyer');
            $b_id=$buyer_info['id'];
     
             if($b_id != '')
               {
                        redirect('site/index','refresh');
               }

             //$this->load->view('site/header1');
        }
		
		    function blog()
    {
		$this->load->view('blog');
	}
	
			    function landing_page()
    {
		$this->load->view('landing_page');
	}
	
		
    function category_list()
    {
		$this->load->view('category_motors');
	}	 
	function index()
	{
	    
                $buyer_info = $this->session->userdata('buyer');
                $b_id=$buyer_info['id'];
               
                $vars['categories']	= $this->category_model->get_categories_tierd(0);
	
		$vars['pages'] = $this->page_model->get_pages();
		
                $buyer_info = $this->session->userdata('buyer');
                $b_id=$buyer_info['id'];
                if($b_id != 0)
                {
                    $vars['comments'] = $this->customer_model->get_comments();
                    $vars['followers_notification'] = $this->customer_model->get_followers_notification($b_id);
                    $vars['new_followers_notification'] = $this->customer_model->get_new_followers_notification($b_id);
                    $vars['reject_follower'] = $this->customer_model->get_rejected_followers_notification($b_id);
                
                    $mycomments = $vars['comments'];
                  //  var_dump($mycomments);exit;
                    $comment = array();
                   // $comment['comment']                 = array();
                    $follower = array();
                    //    $followers['followers']                 = array();
                    $i=0;
                    foreach($mycomments as $comments)
                    {
                 	$comment['comments'.$i]['id']           = $comments->id;
			
			$comment['comments'.$i]['message']      = $comments->message;
                        $comment['comments'.$i]['created_on']   = $comments->created_on;
                        $comment['comments'.$i]['p_id']   = $comments->p_id;
                        $comment['comments'.$i]['wish_cnt']   = $comments->wish_cnt;
                        $comment['comments'.$i]['name']   = $comments->name;
                        $comment['comments'.$i]['username']   = $comments->username;
    
                      $i++;
                    }
                 
                       $this->session->set_userdata(array("comment"=>$comment));
                   
                       $com2 = $this->session->userdata('comment');
                     
                 
                     
                    $my_followers=$vars['followers_notification'];
                    $i=0;
                    foreach($my_followers as $followers)
                    {
                 	
                        $follower['followers'.$i]['id']           = $followers->id;
                        $follower['followers'.$i]['created_on']      = $followers->created_on;
			
			$follower['followers'.$i]['username']      = $followers->username;
                      
                          $i++;  
                      
                    }
                    $this->session->set_userdata(array("follower"=>$follower));
                    
                    if($vars['new_followers_notification'] = $this->customer_model->get_new_followers_notification($b_id))
                    {
                     $new_followers=$vars['new_followers_notification'];
                     $i=0;
                     
                     foreach($new_followers as $Newfollowers)
                    {
                 	
                        $Newfollower['Newfollowers'.$i]['id']           = $Newfollowers->id;
                        $Newfollower['Newfollowers'.$i]['u_id']           = $Newfollowers->u_id;
                        $Newfollower['Newfollowers'.$i]['created_on']      = $Newfollowers->created_on;
			
			$Newfollower['Newfollowers'.$i]['username']      = $Newfollowers->username;
                      
                          $i++;  
                      
                    }
                    $this->session->set_userdata(array("Newfollower"=>$Newfollower));
                    }
                    
                    if($vars['reject_follower'] = $this->customer_model->get_rejected_followers_notification($b_id))
                    {
                        
                         $reject_followers=$vars['reject_follower'];
                     $i=0;
                     
                     foreach($reject_followers as $rejectfollowers)
                    {
                 	
                        $rejectfollower['rejectfollowers'.$i]['id']           = $rejectfollowers->id;
                        $rejectfollower['rejectfollowers'.$i]['f_id']           = $rejectfollowers->f_id;
                        $rejectfollower['rejectfollowers'.$i]['created_on']      = $rejectfollowers->created_on;
			
			$rejectfollower['rejectfollowers'.$i]['username']      = $rejectfollowers->username;
                      
                          $i++;  
                      
                    }
                    $this->session->set_userdata(array("rejectfollower"=>$rejectfollower));
                        
                    }
                 // var_dump($this->session->userdata('Newfollower'));
                    
                }

		$gc_setting = $this->settings_model->get_settings('gift_cards');
		if(!empty($gc_setting['enabled']) && $gc_setting['enabled']==1)
		{
			$this->gift_cards_enabled = true;
		}			
		else
		{
			$this->gift_cards_enabled = false;
		}
                
		// var_dump($this->config->item('theme').'/');exit;
		//load the theme package
                //$this->load->_ci_autoloader(APPPATH.'front-modules/cart/');
                //var_dump($vars);exit;
                if($this->customer_model->is_logged_in(false, false)){
                  
                        $this->load->view('header_aft_logged_in', $vars);}
                else
                        $this->load->view('header', $vars);
            
               $this->load->model('banner_model');
               $data['banners'] = $this->banner_model->get_homepage_banners(5);
            

                $buyer_info = $this->session->userdata('buyer');
                $b_id=$buyer_info['id'];
                if($b_id != 0)
                {
                  
                    $data['products']	= $this->product_model->get_all_products();
                    $data['products_byid']	= $this->product_model->get_all_products_byid();
                    $data['popular_product']	= $this->product_model->get_all_popular_products();
                   
                    foreach ($data['products'] as &$p)
                    {
				$p->images	= (array)json_decode($p->images);
				$p->options	= $this->option_model->get_product_options($p->id);
                    }
                    
                
                    $data['my_popular_tumblr'] = $this->product_model->get_all_popuar_tumblr_products();
          
                    $this->template->write_view("content", 'site/home.php', $data,TRUE);
                    
                }
                else
                {
                    $data['products']	= $this->product_model->get_all_products();
               
                    $data['popular_product']	= $this->product_model->get_all_popular_products();
                    foreach ($data['products'] as &$p)
                    {
                                    $p->images	= (array)json_decode($p->images);
                                    $p->options	= $this->option_model->get_product_options($p->id);
                    }
                    
                 
                    $this->template->write_view("content", 'site/home.php', $data,TRUE);
               
                }      
     
      
		$this->template->write_view("footer", 'site/footer.php', '', $overwrite = true);	
		 
		$this->template->render();
                $this->load->model(array('banner_model', 'box_model'));
		$this->load->helper('directory');

		$data['gift_cards_enabled'] = $this->gift_cards_enabled;
		$data['banners']			= $this->banner_model->get_homepage_banners(5);
		$data['boxes']				= $this->box_model->get_homepage_boxes(4);
		$data['homepage']			= true;
      
                
	}
        function about()
        {
            $this->load->view('about');
        }
		
		  function privacy_policy()
        {
            $this->load->view('privacy_policy');
        }
		
		  function terms_service()
        {
            $this->load->view('terms_service');
        }
		
		  function copyright()
        {
            $this->load->view('copyright');
        }
	
	function page($id = false)
	{
		//if there is no page id provided redirect to the homepage.
		$data['page']	= $this->page_model->get_page($id);
                var_dump($data['page']);exit;
		if(!$data['page'])
		{
			show_404();
		}
		$this->load->model('page_model');
		$data['base_url']			= $this->uri->segment_array();
		
		$data['fb_like']			= true;

		$data['page_title']			= $data['page']->title;
		
		$data['meta']				= $data['page']->meta;
		$data['seo_title']			= (!empty($data['page']->seo_title))?$data['page']->seo_title:$data['page']->title;
		
		$data['gift_cards_enabled'] = $this->gift_cards_enabled;
		
		$this->load->view('page', $data);
	}
	
	function search($code=false, $page = 0)
	{
		$this->load->model('Search_model');
		
		//check to see if we have a search term
		if(!$code)
		{
			//if the term is in post, save it to the db and give me a reference
			$term		= $this->input->post('term', true);
			$code		= $this->Search_model->record_term($term);
			
			// no code? redirect so we can have the code in place for the sorting.
			// I know this isn't the best way...
			redirect('cart/search/'.$code.'/'.$page);
		}
		else
		{
			//if we have the md5 string, get the term
			$term	= $this->Search_model->get_term($code);
		}
		
		if(empty($term))
		{
			//if there is still no search term throw an error
			//if there is still no search term throw an error
			$this->session->set_flashdata('error', lang('search_error'));
			redirect('cart');
		}
		$data['page_title']			= lang('search');
		$data['gift_cards_enabled']	= $this->gift_cards_enabled;
		
		//fix for the category view page.
		$data['base_url']			= array();
		
		$sort_array = array(
							'name/asc' => array('by' => 'name', 'sort'=>'ASC'),
							'name/desc' => array('by' => 'name', 'sort'=>'DESC'),
							'price/asc' => array('by' => 'price', 'sort'=>'ASC'),
							'price/desc' => array('by' => 'price', 'sort'=>'DESC'),
							);
		$sort_by	= array('by'=>false, 'sort'=>false);
	
		if(isset($_GET['by']))
		{
			if(isset($sort_array[$_GET['by']]))
			{
				$sort_by	= $sort_array[$_GET['by']];
			}
		}
		

		if(empty($term))
		{
			//if there is still no search term throw an error
			$this->load->view('search_error', $data);
		}
		else
		{
	
			$data['page_title']	= lang('search');
			$data['gift_cards_enabled'] = $this->gift_cards_enabled;
		
			//set up pagination
			$this->load->library('pagination');
			$config['base_url']		= base_url().'cart/search/'.$code.'/';
			$config['uri_segment']	= 4;
			$config['per_page']		= 20;
			
			$config['first_link'] = 'First';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';

			$config['full_tag_open'] = '<div class="pagination"><ul>';
			$config['full_tag_close'] = '</ul></div>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';

			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';

			$config['prev_link'] = '&laquo;';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';

			$config['next_link'] = '&raquo;';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			
			$result					= $this->product_model->search_products($term, $config['per_page'], $page, $sort_by['by'], $sort_by['sort']);
			$config['total_rows']	= $result['count'];
			$this->pagination->initialize($config);
	
			$data['products']		= $result['products'];
			foreach ($data['products'] as &$p)
			{
				$p->images	= (array)json_decode($p->images);
				$p->options	= $this->option_model->get_product_options($p->id);
			}
			$this->load->view('category', $data);
		}
	}
        function add_to_cart()
	{
          // var_dump($_POST); exit;
		// Get our inputs
		$product_id		= $this->input->post('id');
		$quantity 		= $this->input->post('quantity');
		$post_options 	= $this->input->post('option');
		
		// Get a cart-ready product array
		$product = $this->product_model->get_cart_ready_product($product_id, $quantity);
		//var_dump($product);
                
		//if out of stock purchase is disabled, check to make sure there is inventory to support the cart.
		if(!$this->config->item('allow_os_purchase') && (bool)$product['track_stock'])
		{
                   // exit;
			$stock	= $this->product_model->get_product($product_id);
			
			//loop through the products in the cart and make sure we don't have this in there already. If we do get those quantities as well
			$items		= $this->go_cart->contents();
			$qty_count	= $quantity;
			foreach($items as $item)
			{
				if(intval($item['id']) == intval($product_id))
				{
					$qty_count = $qty_count + $item['quantity'];
				}
			}
			
			if($stock->quantity < $qty_count)
			{
				//we don't have this much in stock
				$this->session->set_flashdata('error', sprintf(lang('not_enough_stock'), $stock->name, $stock->quantity));
				$this->session->set_flashdata('quantity', $quantity);
				$this->session->set_flashdata('option_values', $post_options);

				redirect($this->product_model->get_slug($product_id));
			}
		}

		// Validate Options 
		// this returns a status array, with product item array automatically modified and options added
		//  Warning: this method receives the product by reference
		$status = $this->option_model->validate_product_options($product, $post_options);
	
		// don't add the product if we are missing required option values
		if( ! $status['validated'])
		{
                        $this->session->set_flashdata('quantity', $quantity);
			$this->session->set_flashdata('error', $status['message']);
			$this->session->set_flashdata('option_values', $post_options);
		
			redirect($this->product_model->get_slug($product_id));
		
		} else {
		
			//Add the original option vars to the array so we can edit it later
			$product['post_options']	= $post_options;
			
			//is giftcard
			$product['is_gc']			= false;
			
                      //  var_dump($product);exit;
			// Add the product item to the cart, also updates coupon discounts automatically
			$this->go_cart->insert($product);
		
			// go go gadget cart!
			redirect('site/view_cart');
		}
	}
        
        function view_cart()
	{
		
		$data['page_title']	= 'View Cart';
		$data['gift_cards_enabled'] = $this->gift_cards_enabled;
			
		$this->load->view('view_cart', $data);
	}
	 
	function members_area()
	{
		modules::run('login/is_logged_in');
		$this->load->view('logged_in_area');
	}
		
	function messages()
	{
		modules::run('login/is_logged_in');
		$this->load->model('login/membership_model');
		$user = $this->membership_model->get_member_details($this->uri->segment(3));
		if( !$user )
		{
			// No user found
			return false;
		}
		else
		{
			// display our widget
			$this->load->view('member_messages', $user);
		}				
	}
	
	function profile()
	{
		$this->load->model('login/membership_model');
		$user = $this->membership_model->get_member_details($this->uri->segment(3));
		if( !$user )
		{
			// No user found
			$data['main_content'] = 'member_profile';
			$data['notice'] = 'you need to view a profile id';
			$this->load->view('includes/template', $data);
		}
		else
		{
			// display our widget
			$user['main_content'] = 'member_profile';
			$this->load->view('includes/template', $user);
		}			
		
	}
        
        function category($id)
	{
		//get the category
		$data['category']			= $this->category_model->get_category($id);
		//var_dump($data['category']);exit;			
		if (!$data['category'])
		{
			show_404();
		}
		
		//set up pagination
		$segments	= $this->uri->total_segments();
		$base_url	= $this->uri->segment_array();
		
		if($data['category']->slug == $base_url[count($base_url)])
		{
			$page	= 0;
			$segments++;
		}
		else
		{
			$page	= array_splice($base_url, -1, 1);
			$page	= $page[0];
		}
		
		$data['base_url']	= $base_url;
		$base_url			= implode('/', $base_url);
		
		$data['subcategories']		= $this->category_model->get_categories($data['category']->id);
		$data['product_columns']	= $this->config->item('product_columns');
		$data['gift_cards_enabled'] = $this->gift_cards_enabled;
		
		$data['meta']		= $data['category']->meta;
		$data['seo_title']	= (!empty($data['category']->seo_title))?$data['category']->seo_title:$data['category']->name;
		$data['page_title']	= $data['category']->name;
		
		$sort_array = array(
							'name/asc' => array('by' => 'products.name', 'sort'=>'ASC'),
							'name/desc' => array('by' => 'products.name', 'sort'=>'DESC'),
							'price/asc' => array('by' => 'products.price', 'sort'=>'ASC'),
							'price/desc' => array('by' => 'products.price', 'sort'=>'DESC'),
							);
		$sort_by	= array('by'=>'sequence', 'sort'=>'ASC');
	
		if(isset($_GET['by']))
		{
			if(isset($sort_array[$_GET['by']]))
			{
				$sort_by	= $sort_array[$_GET['by']];
			}
		}
		
		//set up pagination
		$this->load->library('pagination');
		$config['base_url']		= site_url($base_url);
		$config['uri_segment']	= $segments;
		$config['per_page']		= 24;
		$config['total_rows']	= $this->product_model->count_products($data['category']->id);
		
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$config['full_tag_open'] = '<div class="pagination"><ul>';
		$config['full_tag_close'] = '</ul></div>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		
		//grab the products using the pagination lib
		$data['products']	= $this->product_model->get_products($data['category']->id, $config['per_page'], $page, $sort_by['by'], $sort_by['sort']);
		
                foreach ($data['products'] as &$p)
		{
			$p->images	= (array)json_decode($p->images);
			$p->options	= $this->option_model->get_product_options($p->id);
		}
		
		$this->load->view('category', $data);
	}
        
        function product($id,$id1)
	{
		//exit;//get the product
                //var_dump($id1);exit;
            
              $buyer_info = $this->session->userdata('buyer');
                $b_id=$buyer_info['id'];
                
                $this->product_model->insert_total_wished_products_by_id($id);
                $this->product_model->insert_total_hits_products_by_id($id,$id1);
		$data['product']	= $this->product_model->get_product($id);
		$data['product']	= $this->product_model->get_product($id);
		
		if(!$data['product'] || $data['product']->enabled==0)
		{
			show_404();
		}
		
		$data['base_url']			= $this->uri->segment_array();
		
		// load the digital language stuff
		$this->lang->load('digital_product');
		
		$data['options']	= $this->option_model->get_product_options($data['product']->id);
		
		$related			= $data['product']->related_products;
		$data['related']	= array();
		

				
		$data['posted_options']	= $this->session->flashdata('option_values');

		$data['page_title']			= $data['product']->name;
		$data['meta']				= $data['product']->meta;
		$data['seo_title']			= (!empty($data['product']->seo_title))?$data['product']->seo_title:$data['product']->name;
			
		if($data['product']->images == 'false')
		{
			$data['product']->images = array();
		}
		else
		{
			$data['product']->images	= array_values((array)json_decode($data['product']->images));
		}

		$data['gift_cards_enabled'] = $this->gift_cards_enabled;
                
                $data['product_comment']=$this->customer_model->get_product_comments($id);
                  
	        $this->load->view('product', $data);
	}
        function remove_item($key)
	{
		//drop quantity to 0
		$this->go_cart->update_cart(array($key=>0));
		
		redirect('site/view_cart');
	}
	
	function update_cart($redirect = false)
	{
		//if redirect isn't provided in the URL check for it in a form field
		if(!$redirect)
		{
			$redirect = $this->input->post('redirect');
		}
		
		// see if we have an update for the cart
		$item_keys		= $this->input->post('cartkey');
		$coupon_code	= $this->input->post('coupon_code');
		$gc_code		= $this->input->post('gc_code');
			
			
		//get the items in the cart and test their quantities
		$items			= $this->go_cart->contents();
		$new_key_list	= array();
		//first find out if we're deleting any products
		foreach($item_keys as $key=>$quantity)
		{
			if(intval($quantity) === 0)
			{
				//this item is being removed we can remove it before processing quantities.
				//this will ensure that any items out of order will not throw errors based on the incorrect values of another item in the cart
				$this->go_cart->update_cart(array($key=>$quantity));
			}
			else
			{
				//create a new list of relevant items
				$new_key_list[$key]	= $quantity;
			}
		}
		$response	= array();
		foreach($new_key_list as $key=>$quantity)
		{
			$product	= $this->go_cart->item($key);
			//if out of stock purchase is disabled, check to make sure there is inventory to support the cart.
			if(!$this->config->item('allow_os_purchase') && (bool)$product['track_stock'])
			{
				$stock	= $this->Product_model->get_product($product['id']);
			
				//loop through the new quantities and tabluate any products with the same product id
				$qty_count	= $quantity;
				foreach($new_key_list as $item_key=>$item_quantity)
				{
					if($key != $item_key)
					{
						$item	= $this->go_cart->item($item_key);
						//look for other instances of the same product (this can occur if they have different options) and tabulate the total quantity
						if($item['id'] == $stock->id)
						{
							$qty_count = $qty_count + $item_quantity;
						}
					}
				}
				if($stock->quantity < $qty_count)
				{
					if(isset($response['error']))
					{
						$response['error'] .= '<p>'.sprintf(lang('not_enough_stock'), $stock->name, $stock->quantity).'</p>';
					}
					else
					{
						$response['error'] = '<p>'.sprintf(lang('not_enough_stock'), $stock->name, $stock->quantity).'</p>';
					}
				}
				else
				{
					//this one works, we can update it!
					//don't update the coupons yet
					$this->go_cart->update_cart(array($key=>$quantity));
				}
			}
			else
			{
				$this->go_cart->update_cart(array($key=>$quantity));
			}
		}
		
		//if we don't have a quantity error, run the update
		if(!isset($response['error']))
		{
			//update the coupons and gift card code
			$response = $this->go_cart->update_cart(false, $coupon_code, $gc_code);
			// set any messages that need to be displayed
		}
		else
		{
			$response['error'] = '<p>'.lang('error_updating_cart').'</p>'.$response['error'];
		}
		
		
		//check for errors again, there could have been a new error from the update cart function
		if(isset($response['error']))
		{
			$this->session->set_flashdata('error', $response['error']);
		}
		if(isset($response['message']))
		{
			$this->session->set_flashdata('message', $response['message']);
		}
		
		if($redirect)
		{
			redirect($redirect);
		}
		else
		{
			redirect('site/view_cart');
		}
	}

	
	/***********************************************************
			Gift Cards
			 - this function handles adding gift cards to the cart
	***********************************************************/
	
	function giftcard()
	{
		if(!$this->gift_cards_enabled) redirect('/');
		
		// Load giftcard settings
		$gc_settings = $this->settings_model->get_settings("gift_cards");
				
		$this->load->library('form_validation');
		
		$data['allow_custom_amount']	= (bool) $gc_settings['allow_custom_amount'];
		$data['preset_values']			= explode(",",$gc_settings['predefined_card_amounts']);
		
		if($data['allow_custom_amount'])
		{
			$this->form_validation->set_rules('custom_amount', 'lang:custom_amount', 'numeric');
		}
		
		$this->form_validation->set_rules('amount', 'lang:amount', 'required');
		$this->form_validation->set_rules('preset_amount', 'lang:preset_amount', 'numeric');
		$this->form_validation->set_rules('gc_to_name', 'lang:recipient_name', 'trim|required');
		$this->form_validation->set_rules('gc_to_email', 'lang:recipient_email', 'trim|required|valid_email');
		$this->form_validation->set_rules('gc_from', 'lang:sender_email', 'trim|required');
		$this->form_validation->set_rules('message', 'lang:custom_greeting', 'trim|required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['error']				= validation_errors();
			$data['page_title']			= lang('giftcard');
			$data['gift_cards_enabled']	= $this->gift_cards_enabled;
			$this->load->view('giftcards', $data);
		}
		else
		{
			
			// add to cart
			
			$card['price'] = set_value(set_value('amount'));
			
			$card['id']				= -1; // just a placeholder
			$card['sku']			= lang('giftcard');
			$card['base_price']		= $card['price']; // price gets modified by options, show the baseline still...
			$card['name']			= lang('giftcard');
			$card['code']			= generate_code(); // from the string helper
			$card['excerpt']		= sprintf(lang('giftcard_excerpt'), set_value('gc_to_name'));
			$card['weight']			= 0;
			$card['quantity']		= 1;
			$card['shippable']		= false;
			$card['taxable']		= 0;
			$card['fixed_quantity'] = true;
			$card['is_gc']			= true; // !Important
			$card['track_stock']	= false; // !Imporortant
			
			$card['gc_info'] = array("to_name"	=> set_value('gc_to_name'),
									 "to_email"	=> set_value('gc_to_email'),
									 "from"		=> set_value('gc_from'),
									 "personal_message"	=> set_value('message')
									 );
			
			// add the card data like a product
			$this->go_cart->insert($card);
			
			redirect('site/view_cart');
		}
	}
        
        
        function mymail()
        {
            		$this->load->library('email');
			$this->load->helper('string');
			$config['mailtype'] = 'html';
			
			$this->email->initialize($config);
	
			$this->email->from("sumedha@montekservices.com");
			$this->email->to("vishval.chavan@montekservices.com");
			$this->email->bcc($this->config->item('email'));
			$this->email->subject("hi");
			$this->email->message("fdgdfgbd");
			
			$this->email->send();
        }
//        function curl_file_get_contents($request)
//        {
//            $curl_req = curl_init($request);
//
//            curl_setopt($curl_req, CURLOPT_RETURNTRANSFER, TRUE);
//            curl_setopt($curl_req, CURLOPT_HEADER, FALSE);
//
//            $contents = curl_exec($curl_req);
//
//            curl_close($curl_req);
//
//            return $contents;
//        }
        
        
        function view_all()
        {
            $this->load->view('view_all');
        }
        
        function add_tumblr_data()
        {
            $apikey = "ZGHDYpdgG0yJlHpT0qMd8v1xkOHz9JPa85gnhpiI3Zq2VWRxv3";
            $limit = 10;
            $tumblr = "vishval.tumblr.com";
            $tum_search	= $this->input->post('tum_search');
            ini_set('allow_url_fopen',1);
            
  //          $ch = curl_init(); 
 //           $timeout = 0; 
//            curl_setopt ($ch, CURLOPT_URL, "http://api.tumblr.com/v2/blog/$tumblr/posts?api_key=$apikey&limit=$limit&tag=$tum_search"); 
//            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
//            curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
//            $file_contents = curl_exec($ch); 
//            curl_close($ch); 

            // display file 
            //echo $file_contents;  
            //$apidata = json_decode($file_contents);
            
           // var_dump($tum_search);exit;
            //$request_url=" http://api.tumblr.com/v2/blog/$tumblr/posts?api_key=$apikey&limit=$limit&tag=$tum_search";
            //$dataResponse =$this->curl_file_get_contents($request_url);
            //$apidata = json_decode($dataResponse);
            
            $apidata = json_decode(file_get_contents("http://api.tumblr.com/v2/blog/$tumblr/posts?api_key=$apikey&limit=$limit&tag=$tum_search"));

            
            
            $mypostsdata = $apidata->response->posts;

            $myposts = array();
            $my_tum_posts = array();
            $created_on = date("Y-m-d H:i:s",time());
            
            $buyer_info =  $this->session->userdata('buyer');
            $u_id       =  $buyer_info['id'];
            
            $i = 0;
            
           // var_dump($mypostsdata);exit;
	foreach($mypostsdata as $postdata) 
            {

       
              echo '  <div id="gritter-notice-wrapper2'.$i.'" style="display:none;width: 18%;
height: 10%;
top: 50%;
left: 0px;
position: fixed;">
    
    <div id="gritter-item-1" class="gritter-item-wrapper my-sticky-class" style="">
        <div class="gritter-top"></div>
        <a class="close" data-dismiss="alert" style="background: none;top:11px;">×</a>
        <div class="gritter-item">
            
            <div class="gritter-close" ></div><div class="gritter-without-image"><span class="gritter-title">You are not loggedin!</span><p>Please login to add item in your Nycepage</p>
            </div>
            <div style="clear:both"></div></div>
        <div class="gritter-bottom"></div></div>
            
</div>
                  ';     
          
            echo '<form action="http://localhost/priceytag/site/add_my_tumblrData/" method="post">';
            echo '<div class="photo_id"> 
                 <img src="'; echo base_url().'uploads/64d7ea20ef8b9626252683ecdde9e5cb.jpg'; 
            echo '" width="55" height="55" />      </div>
      
                <div class="bubble-content" style="height:auto;">';
            
              
            
              echo '<div class="point"></div>
                 <div class="tumblr_content">
             <a href="#">';
            if(isset($postdata->title))
            echo $postdata->title;
            echo '</a><input type="hidden" name="title" value="';
            if(isset($postdata->title))
            echo $postdata->title;            
            echo '">';
            
            echo '<img src="';
            if(isset($postdata->photos[0]->original_size->url))
            echo $postdata->photos[0]->original_size->url;  
            echo '" width="150" height="150"/>';
            
            
             echo '<input type="hidden" name="photo" value="';
            if(isset($postdata->photos[0]->original_size->url))
            echo $postdata->photos[0]->original_size->url;
            echo '">';
            
//            echo '<div style="width:150px; height:150px;" >';
//            if(isset($postdata->body))
//            echo $postdata->body;         
//            echo '</div>'; 
//            
//            echo '<input type="hidden" name="body" value="';
//            if(isset($postdata->body))
//            echo $postdata->body;echo '">';

            echo '<p>';
            if(isset($postdata->description))
            echo $postdata->description;

            echo '<input type="hidden" name="description" value="';
            if(isset($postdata->description))
            echo $postdata->description;
            echo '">';
            
            
            if(isset($postdata->caption))
            echo $postdata->caption;

            echo '<input type="hidden" name="caption" value="';
            if(isset($postdata->caption))
            echo $postdata->caption;
            echo '">';
        
        
            echo '</p>
       
                <div class="text_tag1">
                <a href="#" style="width:10%;">Tags :</a><a href="#"  style="width:10%;">';
            if(isset($postdata->tags[0]))
            echo $postdata->tags[0];
            echo '</a>';
            echo '<input type="hidden" name="tags" value="';
            if(isset($postdata->tags[0]))
                    echo $postdata->tags[0];
            echo '">';      

            echo '</div> ';
   
   
            // echo '<input class="want_it1" type="submit" value="Want It" />';
            if(isset($postdata->blog_name))
            echo '<input type="hidden" name ="blog_name" value= "';if(isset($postdata->blog_name))
                echo $postdata->blog_name;
            echo '">';

            echo '<input type="hidden" name ="t_id" value= "';if(isset($postdata->id))
                echo $postdata->id;
            echo '">';

            echo '<input type="hidden" name ="post_url" value= "';if(isset($postdata->post_url)) echo $postdata->post_url;
            echo '">';

            echo '<input type="hidden" name ="slug" value= "';if(isset($postdata->slug)) echo  $postdata->slug;
            echo '">';

            echo '<input type="hidden" name ="type" value= "';if(isset($postdata->type))  echo $postdata->type;
            echo '">';

            echo '<input type="hidden" name ="date" value= "';if(isset($postdata->date))  echo $postdata->date;
            echo '">';

            echo '<input type="hidden" name ="created_on" value= "'; echo $created_on;
            echo '">';

            echo '<input type="hidden" name ="u_id" value= "'; echo $u_id;
            echo '">';

            echo '<input type="hidden" name ="timestamp" value= "';if(isset($postdata->timestamp))  echo $postdata->timestamp;
            echo '">';

            echo '<input type="hidden" name ="state" value= "';if(isset($postdata->state))  echo $postdata->state;
            echo '">';

            echo '<input type="hidden" name ="format" value= "';if(isset($postdata->format))  echo $postdata->format;
            echo '">';

            echo '<input type="hidden" name ="reblog_key" value= "';if(isset($postdata->reblog_key))  echo $postdata->reblog_key;
            echo '">';

            echo '<input type="hidden" name ="short_url" value= "';if(isset($postdata->short_url))  echo $postdata->short_url;
            echo '">';

            echo '<input type="hidden" name ="bookmarklet" value= "';if(isset($postdata->bookmarklet))  echo $postdata->bookmarklet;
            echo '">';

            echo '<input type="hidden" name ="note_count" value= "';if(isset($postdata->note_count))  echo $postdata->note_count;
            echo '">';

            echo '<input type="hidden" name ="url" value= "';if(isset($postdata->url)) echo $postdata->url;
            echo '">';


            echo '<input type="hidden" name ="text" value= "';if(isset($postdata->text))  echo $postdata->text;
            echo '">';

            echo '<input type="hidden" name ="source" value= "';if(isset($postdata->source))  echo $postdata->source;
            echo '">';

//            echo '<input type="hidden" name ="id1" value= "'; echo $i;
//            echo '">';

            
            echo '<input type="submit" value="Want It" class="want_it1" onclick="javascript:validate_tumblr_data('.$i.');">';


            echo '</div>

                    
                  
</div>
  ';
            echo '</form>';

            
$i++;
            }
           
        
        }
		
        function add_my_tumblrData()
        {
       //     var_dump($_POST);exit;
//exit;
//$id=
         //   echo $id1;exit;
           // $data['id']        = $id;
           // $data['id1']	       = $this->input->post('id1');
            $data['title']	       = $this->input->post('title');
            $data['body']              = $this->input->post('body');
            $data['description']       = $this->input->post('description');
            $data['caption']       = $this->input->post('caption');
            
            $data['blog_name']	       = $this->input->post('blog_name');
            $data['t_id']	       = $this->input->post('t_id');
            $data['source']              = $this->input->post('source');
            $data['text']       = $this->input->post('text');
            $data['note_count']	       = $this->input->post('note_count');
            $data['url']	       = $this->input->post('url');
            $data['bookmarklet']              = $this->input->post('bookmarklet');
            $data['short_url']       = $this->input->post('short_url');
            $data['reblog_key']	       = $this->input->post('reblog_key');
            $data['format']	       = $this->input->post('format');
            $data['state']              = $this->input->post('state');
            $data['timestamp']       = $this->input->post('timestamp');
            
            $data['created_on']	       = $this->input->post('created_on');
            $data['post_url']	       = $this->input->post('post_url');
            $data['slug']              = $this->input->post('slug');
            $data['type']       = $this->input->post('type');
            $data['date']	       = $this->input->post('date');
            $data['photo']	       = $this->input->post('photo');
            $data['u_id']	       = $this->input->post('u_id');
            
          // var_dump($data);exit;
            if($add_tum_data=$this->product_model->add_tumbler_data($data))
                redirect('site/index');
            
        }
        
	function tumblr()
        {
            $title	= $this->input->post('title');
            //echo $tum_search;exit;
        }
}