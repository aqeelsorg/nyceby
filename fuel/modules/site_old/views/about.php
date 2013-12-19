<?php 
        
 
		$this->load->helper('html');
		$this->load->helper('url');
                
                 if($this->customer_model->is_logged_in(false, false))
		{
                        $this->load->view('site/header_aft_logged_in');
                }
                else 
                {
                        $this->load->view('site/header');	 
                }
 
		$this->load->helper('html');
		$this->load->helper('url');
?>



</head>

<body>

        
  <div class="main_container">
        
     
      <div class="commt_form1 right-sidebar">
      <h2>About Us</h2>
      <div class="photo_2">
      <a href='images/abimage.jpg' 
     class='lightview' 
     data-lightview-group='example'
     data-lightview-title="Navigation" 
     data-lightview-caption="Lightview has mobile-friendly side buttons and pagination for easy navigation.">
  <img src="<?php echo base_url() ?>/template/img/abimage.jpg" width="559" height="419"></a>
  </div>
  
  <div class="about_text">
  <i class="arrow"></i>
  <h5><strong style="margin-left: 0;
line-height: 0;
color: #000;
font-size: 15px;">Nyceby:</strong> New York Commerce Exchange By You is a crowd-curated auction gallery and merchandise consortium focused on the trendiest or past-time loved designers where you discover, collect, buy, or sell the world's finest stuff and amazing place.   </h5>
  <p>It's a nostalgic tag sale, boutique, blog, magazine, and emporium where members bid, comment, share, or follow like-minded collectors. 
  </p> 

<p>Join our network of "Nycebyers" influencing the latest in fashion, design, media, market, or culture.</p> 
 
<p>As a close niche community, Nyceby exhibits daily collections of awesome novelties, organized by trendy tastemakers of the world.  Discover the latest in pristine gear, real estate, vintage, news, and much more.</p>  

<p>Nyceby is a social network tool assisting users to find the recommended "hype" in life.  Upload your items of interest and receive Nyceby Updates from all items you enjoy matching our carefully selected catalogue of store or brand named products.  Our Exchange tab showcases a daily news feed channel of current ongoing auctions or ready to buy merchandise.  Create your own personal Nyceby page to share, comment, and follow inspirations.  Invite your friends on an odyssey to shop and wish list by clicking our Nice it button for awesome goods exhibited by bargained offers from our crowd-selected catalog.
</p>
<p>It's a Nice Buy </p>


   <div class="div_blank" style="
    width: 30%;
    height: 20px;
"></div>
  </div>

   </div>

	</div>
	
	
<div id="footer">
<?php 
            $this->load->view('site/footer');
 ?>
</div>	

</body>
</html>
