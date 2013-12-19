<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth
{
	var $CI;
	
	//this is the expiration for a non-remember session
	var $session_expire	= 600;

	function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->database();
		$this->CI->load->library('encrypt');
		
		$admin_session_config = array(
		    'sess_cookie_name' => 'admin_session_config',
		    'sess_expiration' => 0
		);
		$this->CI->load->library('session', $admin_session_config, 'admin_session');
		
		$this->CI->load->helper('url');
                
                
                
//               $this->CI->load->library('session');
//               $this->CI->load->model('customer_model');
//               $buyer_info = $this->CI->session->userdata('buyer');
//               $b_id=$buyer_info['id'];
//               if($b_id!='')
//                    
//               {
//            
//                   $this->CI->session->set_userdata('redirect', $this->CI->uri->uri_string());
//                   //var_dump($this->CI->uri->uri_string());exit;
//                   redirect('site/index'); 
//               
//               }
                
	}
	
	function check_access($access, $default_redirect=false, $redirect = false)
	{
		/*
		we could store this in the session, but by accessing it this way
		if an admin's access level gets changed while they're logged in
		the system will act accordingly.
		*/
		
		$admin = $this->CI->admin_session->userdata('admin');
		
		$this->CI->db->select('access');
		$this->CI->db->where('id', $admin['id']);
		$this->CI->db->limit(1);
		$result = $this->CI->db->get('admin');
		$result	= $result->row();
		
		//result should be an object I was getting odd errors in relation to the object.
		//if $result is an array then the problem is present.
		if(!$result || is_array($result))
		{
			$this->logout();
			return false;
		}
	//	echo $result->access;
		if ($access)
		{
			if ($access == $result->access)
			{
				return true;
			}
			else
			{
				if ($redirect)
				{
					redirect($redirect);
				}
				elseif($default_redirect)
				{
					redirect($this->CI->config->item('admin_folder').'seller/dashboard/');
				}
				else
				{
					return false;
				}
			}
			
		}
	}
	
        /*
	this checks to see if the admin is logged in
	we can provide a link to redirect to, and for the login page, we have $default_redirect,
	this way we can check if they are already logged in, but we won't get stuck in an infinite loop if it returns false.
	*/
	function is_logged_in($redirect = false, $default_redirect = true)
	{
	
		//var_dump($this->CI->admin_session->userdata('session_id'));
            
            //               $this->CI->load->library('session');
//               $this->CI->load->model('customer_model');
//               $buyer_info = $this->CI->session->userdata('buyer');
//               $b_id=$buyer_info['id'];
//               if($b_id!='')
//                    
//               {
//            
//                   $this->CI->session->set_userdata('redirect', $this->CI->uri->uri_string());
//                   //var_dump($this->CI->uri->uri_string());exit;
//                   redirect('site/index'); 
//               
//               }

		//$redirect allows us to choose where a customer will get redirected to after they login
		//$default_redirect points is to the login page, if you do not want this, you can set it to false and then redirect wherever you wish.

		$admin = $this->CI->admin_session->userdata('admin');
		
		if (!$admin)
		{
			if ($redirect)
			{
				$this->CI->admin_session->set_flashdata('redirect', $redirect);
			}
				
			if ($default_redirect)
			{	
				redirect($this->CI->config->item('admin_folder').'seller/seller_login');
			}
			
			return false;
		}
		else
		{
		
			//check if the session is expired if not reset the timer
			if($admin['expire'] && $admin['expire'] < time())
			{

				$this->logout();
				if($redirect)
				{
					$this->CI->admin_session->set_flashdata('redirect', $redirect);
				}

				if($default_redirect)
				{
					redirect($this->CI->config->item('admin_folder').'seller/seller_login');
				}

				return false;
			}
			else
			{

				//update the session expiration to last more time if they are not remembered
				if($admin['expire'])
				{
					$admin['expire'] = time()+$this->session_expire;
					$this->CI->admin_session->set_userdata(array('admin'=>$admin));
				}

			}

			return true;
		}
	}
	/*
	this function does the logging in.
	*/
	function login_seller($email, $password, $remember=false)
	{
                //  exit;
		$this->CI->db->select('*');
		$this->CI->db->where('email', $email);
		$this->CI->db->where('password',  md5($password));
		$this->CI->db->limit(1);
		//$result = $this->CI->db->get('admin');
                
                $this->CI->db->from('user');
                $this->CI->db->join('seller_info', 'user.id = seller_info.s_id', 'inner');

                $result = $this->CI->db->get();

                
                
		$result	= $result->row_array();
                //var_dump($result);exit;
		
		if (sizeof($result) > 0)
		{
			
			$seller = array();
			$seller['seller']['s_id']		= $result['s_id'];
			$seller['seller']['user_type'] 	= $result['user_type'];
			$seller['seller']['username']	= $result['username'];
			$seller['seller']['lastname']	= $result['lastname'];
			$seller['seller']['email']	= $result['email'];
			
			if(!$remember)
			{
				$seller['seller']['expire'] = time()+$this->session_expire;
			}
			else
			{
				$seller['seller']['expire'] = false;
			}
                            
                        //var_dump($seller['s_id']);exit;
			$this->CI->session->set_userdata($seller);
                        //var_dump($this->CI->session->userdata('seller'));exit;
			return true;
		}
		else
		{
			return false;
		}
	}
	
	/*
	this function does the logging out
	*/
	function logout()
	{
		$this->CI->admin_session->unset_userdata('admin');
		$this->CI->admin_session->sess_destroy();
	}

	/*
	This function resets the admins password and emails them a copy
	*/
	function reset_password($email)
	{
		$admin = $this->get_admin_by_email($email);
		if ($admin)
		{
			$this->CI->load->helper('string');
			$this->CI->load->library('email');
			
			$new_password		= random_string('alnum', 8);
			$admin['password']	= md5($new_password);
			$this->save_admin($admin);
			
			$this->CI->email->from($this->CI->config->item('email'), $this->CI->config->item('site_name'));
			$this->CI->email->to($email);
			$this->CI->email->subject($this->CI->config->item('site_name').': Admin Password Reset');
			$this->CI->email->message('Your password has been reset to '. $new_password .'.');
			$this->CI->email->send();
			return true;
		}
		else
		{
			return false;
		}
	}
	
	/*
	This function gets the admin by their email address and returns the values in an array
	it is not intended to be called outside this class
	*/
	private function get_admin_by_email($email)
	{
		$this->CI->db->select('*');
		$this->CI->db->where('email', $email);
		$this->CI->db->limit(1);
		$result = $this->CI->db->get('admin');
		$result = $result->row_array();

		if (sizeof($result) > 0)
		{
			return $result;	
		}
		else
		{
			return false;
		}
	}
	
	/*
	This function takes admin array and inserts/updates it to the database
	*/
	function save($admin)
	{
		if ($admin['id'])
		{
			$this->CI->db->where('id', $admin['id']);
			$this->CI->db->update('admin', $admin);
		}
		else
		{
			$this->CI->db->insert('admin', $admin);
		}
	}
	
	
	/*
	This function gets a complete list of all admin
	*/
	function get_admin_list()
	{
		$this->CI->db->select('*');
		$this->CI->db->order_by('lastname', 'ASC');
		$this->CI->db->order_by('firstname', 'ASC');
		$this->CI->db->order_by('email', 'ASC');
		$result = $this->CI->db->get('admin');
		$result	= $result->result();
		
		return $result;
	}

	/*
	This function gets an individual admin
	*/
	function get_admin($id)
	{
		$this->CI->db->select('*');
		$this->CI->db->where('id', $id);
		$result	= $this->CI->db->get('admin');
		$result	= $result->row();

		return $result;
	}		
	
	function check_id($str)
	{
		$this->CI->db->select('id');
		$this->CI->db->from('admin');
		$this->CI->db->where('id', $str);
		$count = $this->CI->db->count_all_results();
		
		if ($count > 0)
		{
			return true;
		}
		else
		{
			return false;
		}	
	}
	
	function check_email($str, $id=false)
	{
		$this->CI->db->select('email');
		$this->CI->db->from('admin');
		$this->CI->db->where('email', $str);
		if ($id)
		{
			$this->CI->db->where('id !=', $id);
		}
		$count = $this->CI->db->count_all_results();
		
		if ($count > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function delete($id)
	{
		if ($this->check_id($id))
		{
			$admin	= $this->get_admin($id);
			$this->CI->db->where('id', $id);
			$this->CI->db->limit(1);
			$this->CI->db->delete('admin');

			return $admin->firstname.' '.$admin->lastname.' has been removed.';
		}
		else
		{
			return 'The admin could not be found.';
		}
	}
} 
