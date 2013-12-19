<?php

	$CI->load->model('blog/blog_users_model');

	

?>

<div style="width:100%;background:#000;float:left;">
 <div class="recent_comm">
 <h3>Recent comments</h3>
 </div>
 	<div id="da-slider" class="da-slider">
	<div class="da-slide">
    <div class="recentcomment_box1">
     <div class="recent_img">
     <img src="<?php echo base_url(); ?>template/img/coverphoto.jpg"/>
        <label>word mountains</label> 
     </div>
         
<p>rtrttFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,... </p>
					<!--<a href="#" class="da-link">Read more</a>-->
                    </div><!-----recentcomment_box1------>
                              
                    
  	</div><!-----------da-slide-------------->
    
    <div class="da-slide">
                
<p>fffftFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind 
                 </p>
					<!--<a href="#" class="da-link">Read more</a>-->
  	</div>
             
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
</div><!-----------da-slider------------>

<div class="search_blog">
<input type="search" results="2" name="term" autosave="unique" placeholder="Search">
</div>

<?php 

	$posts = fuel_model('blog_posts', array('find' => 'all','order' => 'sticky, date_added desc', 'module' => 'blog')); 

?> 

<div class="blogpost_area">

<h1>The Latest from our Blog</h1>
<h1 style="float: right;
width:30%;">Popular Post</h1>

<div class="blog_page">
<?php if (!empty($posts)) : ?> 
<?php 
	
foreach($posts as $post) :


//var_dump($posts);


?>

<?php    

	$postComments = fuel_model('blog_comments', array('find' => 'all','where' => array('post_id' => $post->id),'module' => 'blog'));

?>

<div class="blogs_1">
<div class="date">
<label><?php $mod_date = strtotime($post->date_added); echo date("d",$mod_date); ?><p style="font-size: 12px;color: #383838;width: 100%;text-align: center;"><?php echo date("M",$mod_date)." ".date("Y",$mod_date); ?></p>
</label>
</div>
<a href="<?php echo $post->url."/$post->id"; ?>">
 <label style="float:left;"><?php echo $post->title; ?></label>
 </a>
 <label style="float: left;
font-size: 12px;
margin-bottom: 0;
margin-left: 3%;">Posted by :</label>
<p><span class="post_author_name"><?=$post->author_name; ?></span></p>
 
 <div class="blog_commentsdisplay">
 <a href="#"><img src="<?php echo $this->asset->img_path('comment.png'); ?>" style="margin-left:9%;"/>
 
 <h5><a href="<?php echo $post->url; ?>"><?php echo count($postComments);  ?></a></h5>
 </a>
 </div>
</div><!----------blogs_1----------->


<?php endforeach; ?> 

 <?php endif; ?> 
<div style="width:80%; height:20px; float:left;"></div>
</div>
<!--------------blog_page------------>

<?php 

	$popularPosts = fuel_model('blog_posts', array('find' => 'all','where'=>'hits >= 10', 'order' => 'sticky, date_added desc', 'module' => 'blog')); 

?> 

<div class="popular_post">

 <?php $counter = 0; 
 
 foreach($popularPosts as $single_post)
 {
 		
 	$authorImage = $CI->blog_users_model->get_author_avatar_image($single_post->id);
 	

 	echo '<div class="postdisplay_1">
<div class="popularpost_img">';
 	
 	if(isset($authorImage[0]['avatar_image']) && $authorImage[0]['avatar_image'] != "")
 	{
		echo '<img src="'.$this->asset->img_path('blog/'.$authorImage[0]['avatar_image']).'" width="60" height="60" style="border-radius: 40px;
				border: 2px solid #3D3D3D;"/>';
 	}
 	else
 	{
 		echo '<img src="'.$this->asset->img_path('profile_avatar.png').'" width="60" height="60" style="border-radius: 40px;
			border: 2px solid #3D3D3D;"/>';
 	}

echo '</div>
<a href='.$single_post->url.'/'.$single_post->id.'><label>'.$single_post->title.'</label></a>

<div class="popularpost_date">';
 	$mod_date = strtotime($single_post->date_added); 
 	
echo '<span>'.date("d-M-Y",$mod_date).'</span>
</div>
</div><!------------postdisplay_1--------------->';
 	
 	
 	
 }

 ?>
	




</div><!----------popular_post-------------->

</div><!----------blogpost_area------------->


</div>

</body>