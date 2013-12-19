<?php
Class Product_model extends Model
{
		
	// we will store the group discount formula here
	// and apply it to product prices as they are fetched 
	var $group_discount_formula = false;
	
	function __construct()
	{
		parent::__construct();
		
		// check for possible group discount 
		$customer = $this->session->userdata('customer');
		if(isset($customer['group_discount_formula'])) 
		{
			$this->group_discount_formula = $customer['group_discount_formula'];
		}
	}
	
	function product_autocomplete($name, $limit)
	{
		return	$this->db->like('name', $name)->get('products', $limit)->result();
	}
	
	function products($data=array(), $return_count=false)
	{
		if(empty($data))
		{
			//if nothing is provided return the whole shabang
			$this->get_all_products();
		}
		else
		{
			//grab the limit
			if(!empty($data['rows']))
			{
				$this->db->limit($data['rows']);
			}
			
			//grab the offset
			if(!empty($data['page']))
			{
				$this->db->offset($data['page']);
			}
			
			//do we order by something other than category_id?
			if(!empty($data['order_by']))
			{
				//if we have an order_by then we must have a direction otherwise KABOOM
				$this->db->order_by($data['order_by'], $data['sort_order']);
			}
			
			//do we have a search submitted?
			if(!empty($data['term']))
			{
				$search	= json_decode($data['term']);
				//if we are searching dig through some basic fields
				if(!empty($search->term))
				{
					$this->db->like('name', $search->term);
					$this->db->or_like('description', $search->term);
					$this->db->or_like('excerpt', $search->term);
					$this->db->or_like('sku', $search->term);
				}
				
				if(!empty($search->category_id))
				{
					//lets do some joins to get the proper category products
					$this->db->join('category_products', 'category_products.product_id=products.id', 'right');
					$this->db->where('category_products.category_id', $search->category_id);
					$this->db->order_by('sequence', 'ASC');
				}
			}
			
			if($return_count)
			{
				return $this->db->count_all_results('products');
			}
			else
			{
				return $this->db->get('products')->result();
			}
			
		}
	}
        function get_all_products_byid()
        {
            //exit;
            
            $buyer_info = $this->session->userdata('buyer');
                $b_id=$buyer_info['id'];
             $sql="SELECT pt_products.id, pt_products.sku, pt_products.name, pt_products.slug, pt_products.route_id, pt_products.description, pt_products.excerpt, pt_products.price, pt_products.saleprice, pt_products.free_shipping, pt_products.shippable, pt_products.taxable, pt_products.fixed_quantity, pt_products.weight, pt_products.track_stock, pt_products.quantity, pt_products.related_products, pt_products.images, pt_products.seo_title, pt_products.meta, pt_products.enabled, pt_products.author_id, pt_products.s_id,pt_products.hit_cnt, pt_user.image, pt_wishlist.u_id,pt_wishlist.p_id
                    FROM pt_products
                    JOIN pt_wishlist ON pt_products.id = pt_wishlist.p_id
                    JOIN pt_user ON pt_user.id = pt_wishlist.u_id
                    WHERE pt_user.id =$b_id
                    ORDER BY pt_products.id ASC";
                $q = $this->db->query( $sql);
                $return = $q->result();
               // var_dump($return);exit;
		if($this->group_discount_formula) 
		{
			foreach($return as &$product) {
				eval('$product->price=$product->price'.$this->group_discount_formula.';');
			}
		}
		return $return;
            
        }
	
	function get_all_products()
	{

//                $this->db->select('name');
//                $this->db->get_where('products', array('enabled'=>1))->row();
//                $this->db->from('products');
//                $this->db->join('user', 'user.id=products.s_id', 'inner');
//		$this->db->order_by('name', 'ASC');
//		$result	= $this->db->get();
                $sql="SELECT pt_products.id,pt_products.sku,
pt_products.name,
pt_products.slug,
pt_products.route_id,
pt_products.description,
pt_products.excerpt,
pt_products.price,
pt_products.saleprice,
pt_products.free_shipping,
pt_products.shippable,
pt_products.taxable,
pt_products.fixed_quantity,
pt_products.weight,
pt_products.track_stock,
pt_products.quantity,
pt_products.related_products,
pt_products.images,
pt_products.seo_title,
pt_products.meta,
pt_products.enabled,
pt_products.author_id,
pt_products.s_id,
pt_products.hit_cnt,
pt_user.image

FROM pt_products
INNER JOIN pt_user ON pt_products.s_id = pt_user.id
WHERE enabled =1
ORDER BY pt_products.id ASC ";
                $q = $this->db->query( $sql);
                $return = $q->result();
               // var_dump($return);exit;
		if($this->group_discount_formula) 
		{
			foreach($return as &$product) {
				eval('$product->price=$product->price'.$this->group_discount_formula.';');
			}
		}
		return $return;
	}
	
	function get_products($category_id = false, $limit = false, $offset = false, $by=false, $sort=false)
	{
		//if we are provided a category_id, then get products according to category
		if ($category_id)
		{
			$this->db->select('category_products.*, LEAST(IFNULL(NULLIF(saleprice, 0), price), price) as sort_price', false)->from('category_products')->join('products', 'category_products.product_id=products.id')->where(array('category_id'=>$category_id, 'enabled'=>1));
			$this->db->order_by($by, $sort);
			
			$result	= $this->db->limit($limit)->offset($offset)->get()->result();

			$contents	= array();
			$count		= 0;
			foreach ($result as $product)
			{
				$contents[$count]	= $this->get_product($product->product_id);
				$count++;
			}

			return $contents;
		}
		else
		{
			//sort by alphabetically by default
			$this->db->order_by('name', 'ASC');
			$result	= $this->db->get('products');
			//apply group discount
			$return = $result->result();
			if($this->group_discount_formula) 
			{
				foreach($return as &$product) {
					eval('$product->price=$product->price'.$this->group_discount_formula.';');
				}
			}
			return $return;
		}
	}
	
	function count_all_products()
	{
		return $this->db->count_all_results('products');
	}
	
	function count_products($id)
	{
		return $this->db->select('product_id')->from('category_products')->join('products', 'category_products.product_id=products.id')->where(array('category_id'=>$id, 'enabled'=>1))->count_all_results();
	}

	function get_product($id, $related=true)
	{
		$result	= $this->db->get_where('products', array('id'=>$id))->row();
		if(!$result)
		{
			return false;
		}

		$related	= json_decode($result->related_products);
		
		if(!empty($related))
		{
			//build the where
			$where = false;
			foreach($related as $r)
			{
				if(!$where)
				{
					$this->db->where('id', $r);
				}
				else
				{
					$this->db->or_where('id', $r);
				}
				$where = true;
			}
		
			$result->related_products	= $this->db->get('products')->result();
		}
		else
		{
			$result->related_products	= array();
		}
		$result->categories			= $this->get_product_categories($result->id);
	
		// group discount?
		if($this->group_discount_formula) 
		{
			eval('$result->price=$result->price'.$this->group_discount_formula.';');
		}

		return $result;
	}

	function get_product_categories($id)
	{
		return $this->db->where('product_id', $id)->join('categories', 'category_id = categories.id')->get('category_products')->result();
	}

	function get_slug($id)
	{
		return $this->db->get_where('products', array('id'=>$id))->row()->slug;
	}

	function check_slug($str, $id=false)
	{
		$this->db->select('slug');
		$this->db->from('products');
		$this->db->where('slug', $str);
		if ($id)
		{
			$this->db->where('id !=', $id);
		}
		$count = $this->db->count_all_results();

		if ($count > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function save($product, $options=false, $categories=false)
	{
		if ($product['id'])
		{
			$this->db->where('id', $product['id']);
			$this->db->update('products', $product);

			$id	= $product['id'];
		}
		else
		{
			$this->db->insert('products', $product);
			$id	= $this->db->insert_id();
		}

		//loop through the product options and add them to the db
		if($options !== false)
		{
			$obj =& get_instance();
			$obj->load->model('option_model');

			// wipe the slate
			$obj->option_model->clear_options($id);

			// save edited values
			$count = 1;
			foreach ($options as $option)
			{
				$values = $option['values'];
				unset($option['values']);
				$option['product_id'] = $id;
				$option['sequence'] = $count;

				$obj->option_model->save_option($option, $values);
				$count++;
			}
		}
		
		if($categories !== false)
		{
			if($product['id'])
			{
				//get all the categories that the product is in
				$cats	= $this->get_product_categories($id);
				
				//generate cat_id array
				$ids	= array();
				foreach($cats as $c)
				{
					$ids[]	= $c->id;
				}

				//eliminate categories that products are no longer in
				foreach($ids as $c)
				{
					if(!in_array($c, $categories))
					{
						$this->db->delete('category_products', array('product_id'=>$id,'category_id'=>$c));
					}
				}
				
				//add products to new categories
				foreach($categories as $c)
				{
					if(!in_array($c, $ids))
					{
						$this->db->insert('category_products', array('product_id'=>$id,'category_id'=>$c));
					}
				}
			}
			else
			{
				//new product add them all
				foreach($categories as $c)
				{
					$this->db->insert('category_products', array('product_id'=>$id,'category_id'=>$c));
				}
			}
		}
		
		//return the product id
		return $id;
	}
	
	function delete_product($id)
	{
		// delete product 
		$this->db->where('id', $id);
		$this->db->delete('products');

		//delete references in the product to category table
		$this->db->where('product_id', $id);
		$this->db->delete('category_products');
		
		// delete coupon reference
		$this->db->where('product_id', $id);
		$this->db->delete('coupons_products');

	}

	function add_product_to_category($product_id, $optionlist_id, $sequence)
	{
		$this->db->insert('product_categories', array('product_id'=>$product_id, 'category_id'=>$category_id, 'sequence'=>$sequence));
	}

	function search_products($term, $limit=false, $offset=false, $by=false, $sort=false)
	{
		$results		= array();
		
		$this->db->select('*, LEAST(IFNULL(NULLIF(saleprice, 0), price), price) as sort_price', false);
		//this one counts the total number for our pagination
		$this->db->where('enabled', 1);
		$this->db->where('(name LIKE "%'.$term.'%" OR description LIKE "%'.$term.'%" OR excerpt LIKE "%'.$term.'%" OR sku LIKE "%'.$term.'%")');
		$results['count']	= $this->db->count_all_results('products');


		$this->db->select('*, LEAST(IFNULL(NULLIF(saleprice, 0), price), price) as sort_price', false);
		//this one gets just the ones we need.
		$this->db->where('enabled', 1);
		$this->db->where('(name LIKE "%'.$term.'%" OR description LIKE "%'.$term.'%" OR excerpt LIKE "%'.$term.'%" OR sku LIKE "%'.$term.'%")');
		
		if($by && $sort)
		{
			$this->db->order_by($by, $sort);
		}
		
		$results['products']	= $this->db->get('products', $limit, $offset)->result();
		
		return $results;
	}

	// Build a cart-ready product array
	function get_cart_ready_product($id, $quantity=false)
	{
		$product	= $this->db->get_where('products', array('id'=>$id))->row();
		
		//unset some of the additional fields we don't need to keep
		if(!$product)
		{
			return false;
		}
		
		$product->base_price	= $product->price;
		
		if ($product->saleprice != 0.00)
		{ 
			$product->price	= $product->saleprice;
		}
		
		
		// Some products have n/a quantity, such as downloadables
		//overwrite quantity of the product with quantity requested
		if (!$quantity || $quantity <= 0 || $product->fixed_quantity==1)
		{
			$product->quantity = 1;
		}
		else
		{
			$product->quantity = $quantity;
		}
		
		
		// attach list of associated downloadables
		$product->file_list	= $this->digital_product_model->get_associations_by_product($id);
		
		return (array)$product;
	}
        
        function insert_total_wished_products_by_id($id)
        {
            $sql="SELECT COUNT( p_id ) as pcnt 
                  FROM pt_wishlist
                  WHERE p_id =$id
                ";
                $q = $this->db->query($sql);
                $return = $q->result();
                foreach ($return as $r)
                $pro_cnt= $r->pcnt;
                
            $data['wish_cnt']=$pro_cnt;
      
           // var_dump($data);exit;
           $this->db->where('id', $id);
	   $this->db->update('products', $data);
            return $this->db->insert_id();
                
                //return $return;
            
        }
        
        function insert_total_hits_products_by_id($id,$id1)
        {
            $cnt=$id1+1;
            $data['hit_cnt']=$cnt;
            $this->db->where('id', $id);
	    $this->db->update('products', $data);
            return $this->db->insert_id();
        }
        
        function get_all_popular_products()
        {
             $sql="SELECT pt_products.id, pt_products.hit_cnt AS pcnt, pt_products.name,pt_products.created_on,pt_products.hit_cnt,pt_user.image
                    FROM pt_products
                    INNER JOIN pt_user ON pt_user.id = pt_products.s_id
                    GROUP BY pt_products.name
                    ORDER BY pcnt DESC
                    LIMIT 0 , 5
                  ";
                $q = $this->db->query($sql);
                $return = $q->result();
                return $return;
        }
        
        function add_tumbler_data($myposts)
        {
             $this->db->insert('tumblr_posts', $myposts);
            return $this->db->insert_id();
        }
        
        function get_tumblr_data($tum_search)
        {
            $sql="SELECT * 
                  FROM pt_tumblr_posts
                  WHERE tags ='$tum_search' ";
                $q = $this->db->query($sql);
                $return = $q->result();
              //  var_dump($return);exit;
        }
        
        function get_all_popuar_tumblr_products()
        {
                $buyer_info = $this->session->userdata('buyer');
                $b_id=$buyer_info['id'];
                 $sql="SELECT
                     pt_tumblr_posts.blog_name,
pt_tumblr_posts.t_id,
pt_tumblr_posts.post_url,
pt_tumblr_posts.slug,
pt_tumblr_posts.type,
pt_tumblr_posts.date,
pt_tumblr_posts.created_on,
pt_tumblr_posts.timestamp,
pt_tumblr_posts.state,
pt_tumblr_posts.format,
pt_tumblr_posts.reblog_key,
pt_tumblr_posts.tags,
pt_tumblr_posts.body,
pt_tumblr_posts.short_url,
pt_tumblr_posts.highlighted,
pt_tumblr_posts.bookmarklet,
pt_tumblr_posts.note_count,
pt_tumblr_posts.title,
pt_tumblr_posts.url,
pt_tumblr_posts.description,
pt_tumblr_posts.caption,
pt_tumblr_posts.text,
pt_tumblr_posts.source,
pt_tumblr_posts.photo,
pt_tumblr_posts.u_id,
pt_user.image,
pt_user.username

                  FROM pt_tumblr_posts
                  INNER JOIN pt_user ON pt_user.id=pt_tumblr_posts.u_id
                  WHERE u_id = $b_id";
                $q = $this->db->query($sql);
                $return = $q->result();
                return $return;
               // var_dump($return);exit;
        }
        
       
}
