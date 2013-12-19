 <?php 	
 ini_set('display_errors', 1);
 
		$this->load->view('includes/header'); 
		$this->load->helper('html');
		$this->load->helper('url');
?>
<body class="home_background">


	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.easing.1.3.js"></script>
	<script  type="text/javascript" src="<?php echo base_url();?>/template/js/autoGrid.min.js"></script>
	<script  type="text/javascript" src="<?php echo base_url();?>/template/js/site.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/easySlider1.7.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/stuHover.js"></script>    
  <script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.tabSlideOut.v1.3.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/lightview.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.kinetic.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.tmpl.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>/template/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/template/js/modernizr.custom.97074.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.gritter.min.js"></script> 	
        <script type="text/javascript" src="<?php echo base_url();?>/template/js/notifications.js"></script> 
        <script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.notyfy.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.akordeon.js"></script>
         
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>/template/css/style.css" type="text/css" media="screen" />
	
        <link rel="stylesheet" href="<?php echo base_url();?>/template/css/main.css" type="text/css" media="screen" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/style.css"/>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/lightview.css"/>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/pro_drop_1.css"/>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/tagit-stylish-yellow.css"/>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/modal.css"/>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/MenuMatic.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/gridGallery.css"/>
        <link href="<?php echo base_url();?>/template/css/jquery.notyfy.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>/template/css/default.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/stylegrid.css"/>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/glyphicons.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/indexstyle-light.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/jquery.akordeon.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/jquery.akordeon.css"/>
        
        

                <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/jquery.gritter.css"/>
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/jquery-ui-1.9.2.custom.min.css"/>
	<!-- LESS.js Library -->
	<!--<script  type="text/javascript" src="<?php echo base_url();?>/template/js/seller-admin/seller-admin/less.min.js"></script>-->
 <script>       
//function changeText(id) 
//{
//    var element = document.getElementById('element' + id);
//    var element1 = document.getElementById('comelement' + id);
//	
//	if (element.innerHTML === 'Niceit') element.innerHTML = "Nyce'd";
//	
//	if (element1.innerHTML === 'Compare') element1.innerHTML = "Added";
//   
//}
//
//</script> 
  
<script type="text/javascript">
    $(function()
{
	$('[data-toggle="notyfy"]').click(function () 
	{
		var self = $(this);
		if(self.data('layout') == 'inline') 
		{
			$(self.data('custom')).notyfy(
			{
				text: text[self.data('type')],
				type: self.data('type'),
				dismissQueue: true,
				buttons: (self.data('type') != 'confirm') ? false : [{
					addClass: 'btn btn-success btn-small glyphicons btn-icon ok_2',
					text: '<i></i> Ok',
					onClick: function ($notyfy) {
						$notyfy.close();
						$(self.data('custom')).notyfy({
							force: true,
							text: 'You clicked "<strong>Ok</strong>" button.',
							type: 'success'
						});
					}
				}, {
					addClass: 'btn btn-danger btn-small glyphicons btn-icon remove_2',
					text: 'Cancel',
					onClick: function ($notyfy) {
						$notyfy.close();
						$(self.data('custom')).notyfy({
							force: true,
							text: 'You clicked "Cancel" button',
							type: 'error'
						});
					}
				}]
			});
			return false;
		}

		notyfy({
			text: notification[self.data('type')],
			type: self.data('type'),
			dismissQueue: true,
			layout: self.data('layout'),
			buttons: (self.data('type') != 'confirm') ? false : [{
				addClass: 'btn btn-success btn-small btn-icon glyphicons ok_2',
				text: '<i></i> Ok',
				onClick: function ($notyfy) {
					$notyfy.close();
					notyfy({
						force: true,
						text: 'You clicked "<strong>Ok</strong>" button',
						type: 'success',
						layout: self.data('layout')
					});
				}
			}, {
				addClass: 'btn btn-danger btn-small btn-icon glyphicons remove_2',
				text: '<i></i> Cancel',
				onClick: function ($notyfy) {
					$notyfy.close();
					notyfy({
						force: true,
						text: '<strong>You clicked "Cancel" button<strong>',
						type: 'error',
						layout: self.data('layout')
					});
				}
			}]
		});
		return false;
	});
	
	/* Gritter Notifications */
	
	/* Global setting override
	$.extend($.gritter.options, {
	    class_name: 'gritter-light', // for light notifications (can be added directly to $.gritter.add too)
	    position: 'bottom-left', // possibilities: bottom-left, bottom-right, top-left, top-right
		fade_in_speed: 100, // how fast notifications fade in (string or int)
		fade_out_speed: 100, // how fast the notices fade out
		time: 3000 // hang on the screen for...
	});
    */

$('.gritter-add-sticky1').click(function()
	{
		var unique_id = $.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'deleted !',
			// (string | mandatory) the text inside the notification
			text: 'delete',
			// (string | optional) the image to display on the left
			//image: 'https://si0.twimg.com/profile_images/2873657673/f56ad0e8a62b588ad92b19969084b2ab_bigger.png',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: true,
			// (int | optional) the time you want it to be alive for before fading out
			time: '',
			// (string | optional) the class name you want to apply to that specific message
			class_name: 'my-sticky-class'
		});
		
		// You can have it return a unique id, this can be used to manually remove it later using
		/*
		setTimeout(function(){

			$.gritter.remove(unique_id, {
				fade: true,
				speed: 'slow'
			});

		}, 6000)
		*/
		return false;
	});





	$('.gritter-add-sticky').click(function()
	{
		var unique_id = $.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'You are not loggedin!',
			// (string | mandatory) the text inside the notification
			text: 'Please login to add item in your Nycepage',
			// (string | optional) the image to display on the left
			//image: 'https://si0.twimg.com/profile_images/2873657673/f56ad0e8a62b588ad92b19969084b2ab_bigger.png',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: true,
			// (int | optional) the time you want it to be alive for before fading out
			time: '',
			// (string | optional) the class name you want to apply to that specific message
			class_name: 'my-sticky-class'
		});
              //  alert(unique_id.text);
		
		// You can have it return a unique id, this can be used to manually remove it later using
		/*
		setTimeout(function(){

			$.gritter.remove(unique_id, {
				fade: true,
				speed: 'slow'
			});

		}, 6000)
		*/
		return false;
	});

	$('.gritter-add-regular').click(function()
	{
		$.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'This is a regular notice!',
			// (string | mandatory) the text inside the notification
			text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#">magnis dis parturient</a> montes, nascetur ridiculus mus.',
			// (string | optional) the image to display on the left
			image: 'https://si0.twimg.com/profile_images/2873657673/f56ad0e8a62b588ad92b19969084b2ab_bigger.png',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: false,
			// (int | optional) the time you want it to be alive for before fading out
			time: ''
		});

		return false;

	});
	
	$('.gritter-add-primary').click(function()
	{
		$.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'This is a primary notice!',
			// (string | mandatory) the text inside the notification
			text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#">magnis dis parturient</a> montes, nascetur ridiculus mus.',
			// (string | optional) the image to display on the left
			image: 'https://si0.twimg.com/profile_images/2873657673/f56ad0e8a62b588ad92b19969084b2ab_bigger.png',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: false,
			// (int | optional) the time you want it to be alive for before fading out
			time: '',
			// (string | optional) the class name you want to apply to that specific message
			class_name: 'gritter-primary'
		});

		return false;

	});

    $('.gritter-add-max').click(function()
    {
        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Deleted',
            // (string | mandatory) the text inside the notification
            text: 'deleted',
            // (string | optional) the image to display on the left
            image: '',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (function) before the gritter notice is opened
            before_open: function(){
                if($('.gritter-item-wrapper').length == 3)
                {
                    // Returning false prevents a new gritter from opening
                    return false;
                }
            }
        });
        return false;
    });

	$('.gritter-add-without-image').click(function()
	{
		$.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'This is a notice without an image!',
			// (string | mandatory) the text inside the notification
			text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#">magnis dis parturient</a> montes, nascetur ridiculus mus.'
		});
		return false;
	});

    $('.gritter-add-white').click(function()
    {
        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'This is a light notification',
            // (string | mandatory) the text inside the notification
            text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
            class_name: 'gritter-light'
        });
        return false;
    });

});

var notification = [];

notification['alert'] = 'Best check yo self, you\'<strong>re not looking too good</strong>.';
notification['primary'] = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
notification['error'] = '<strong>Change a few things up and try submitting again.</strong> This Error message.';
notification['success'] = 'You <strong>successfully</strong> read this important alert message.';
notification['information'] = '<?php echo lang('wishit'); ?>';
notification['warning'] = '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.';
notification['confirm'] = 'Do you want to continue?';
</script>
	

    <style>
        #element {
    text-align: center;
    padding-top: 6px;
}
        </style>
<script>
    function disp_compact()
    {
        
        document.getElementById("show_normal").style.display = "none";
        document.getElementById("show_grid").style.display = "none";
        document.getElementById("show_compact").style.display = "inline";
    }
    
    function disp_grid()
    {
        //alert("hi");
        document.getElementById("show_normal").style.display = "none";
        document.getElementById("show_grid").style.display = "inline";
        document.getElementById("show_compact").style.display = "none";

    }
    
    function disp_preview()
    {
        document.getElementById("show_normal").style.display = "inline";
        document.getElementById("show_grid").style.display = "none";
        document.getElementById("show_compact").style.display = "none";

    }
</script>

        
<script>
  function validate_tumblr_data(id)
  {
      //alert(id);
        var sessionValue = '<?php $buyer_info = $this->session->userdata('buyer');
                                     echo json_encode($buyer_info['id']); ?>';
                
                
                //alert(sessionValue);
                if(sessionValue=='null')
                {
                        $('#gritter-notice-wrapper2'+id).show();
                }
                
  }
</script>	


<script type="text/javascript">
function changeText(p_id,s_id,id) 
{
    //alert("hi");
    var controller = 'product';
     var base_url = '<?php echo base_url();  ?>';
    //var element = document.getElementById('element' + id);
    var icon_wishit  = document.getElementById('icon_wishit' + id);
//alert(base_url + controller+ '/add_to_wish/p_id='+p_id+'&s_id='+s_id+'&p_id='+p_id);
      $.get(base_url + controller+ '/add_to_wish/p_id='+p_id+'&s_id='+s_id+'&p_id='+p_id, function(data) {
                       //alert($('#wishelement' + id).html());
                        if(data==1)
                         {
                              $('#success_msg').show();
                              if ($('#element' + id).html() === 'Niceit') 
                             
                                {   
                                    
                                     $('#element' + id).html("Nyce'd");
                                    icon_wishit.className = 'wishied';
                                }
                                else
                                    {
                                      $('#element' + id).html("Niceit");

                                      icon_wishit.className = 'icon_wishit';     

                                    }
                         }
                         });
     
 
}

</script> 


<script>
function changeText1(id) 
{
//    var element = document.getElementById('element' + idElement);
//	
//	if (element.innerHTML === 'Niceit') element.innerHTML = "Nyce'd";
//	
//	else
//	 	element.innerHTML = "Added";
//	 	
//	 	var element = document.getElementById('element' + id);
    var element1 = document.getElementById('comelement' + id);
	
	//if (element.innerHTML === 'Niceit') element.innerHTML = "Nyce'd";
	
	if (element1.innerHTML === 'Compare') element1.innerHTML = "Added";
//   
}

</script>

<script id="previewTmpl" type="text/x-jquery-tmpl">
			<div id="ib-img-preview" class="ib-preview">
                <img src="${src}" alt="" class="ib-preview-img"/>
                <span class="ib-preview-descr" style="display:none;">${description}</span>
                <div class="ib-nav" style="display:none;">
                    <span class="ib-nav-prev">Previous</span>
                    <span class="ib-nav-next">Next</span>
                </div>
                <span class="ib-close" style="display:none;">Close Preview</span>
                <div class="ib-loading-large" style="display:none;">Loading...</div>
            </div>		
</script>
<script id="contentTmpl" type="text/x-jquery-tmpl">	
			<div id="ib-content-preview" class="ib-content-preview">
                <div class="ib-teaser" style="display:none;">{{html teaser}}</div>
                <div class="ib-content-full" style="display:none;">{{html content}}</div>
                <span class="ib-close" style="display:none;">Close Preview</span>
            </div>
</script>



<script type="text/javascript">
        $(function() {

                $(' #da-thumbs > li ').each( function() { $(this).hoverdir({
                        hoverDelay : 75
                }); } );

        });
</script>  	
                
<script type="text/javascript"> 
		
        function add_my_wish(p_id,s_id,id)
        {

                var controller = 'product';
                var base_url = '<?php echo base_url();  ?>';
                
                var sessionValue = '<?php $buyer_info = $this->session->userdata('buyer');
                                     echo json_encode($buyer_info['id']); ?>';
                
                
                //alert(sessionValue);
                if(sessionValue=='null')
                {
                        $('#gritter-notice-wrapper1'+id).show();
                }
                
               else
                {

                $.get(base_url + controller+ '/add_to_wish/p_id='+p_id+'&s_id='+s_id+'&p_id='+p_id, function(data) {

                 if(data==1)
                 {
                      $('#success_msg').show();
                    //  alert($('#wishelement' + id).html());
                      if ($('#wishelement' + id).html() == 'Niceit') 
                      {   
                            $('#wishelement' + id).html("Nyce'd");
                      }


                 }


              });
        }}
</script>   


<script type="text/javascript"> 
		
		function add_my_wish2(p_id,s_id,id)
                {
                     
                        var controller = 'product';
                        var base_url = '<?php echo base_url();  ?>';
//alert(base_url + controller+ '/add_to_wish/p_id='+p_id+'&s_id='+s_id+'&p_id='+p_id);
                        $.get(base_url + controller+ '/add_to_wish/p_id='+p_id+'&s_id='+s_id+'&p_id='+p_id, function(data) {
                 // alert("hi");
                         if(data==1)
                         {
                              $('#notyfy_message').show();
                            //  alert($('#wishelement' + id).html());
                              if ($('#wishelement2' + id).html() == 'Niceit') 
                              {   
                                    $('#wishelement2' + id).html("Nyce'd");
                              }
                              
                             
                         }
                              
 
                      });
                }
</script> 


<script type="text/javascript">
    $(document).ready(function () {
        $('#buttons').akordeon();
        $('#button-less').akordeon({ buttons: false, toggle: true, itemsOrder: [2, 0, 1] });
    });
</script>

<script>
function changeBg(){

 document.getElementById("myLayer1").style.display = "inline";
 document.getElementId("myLayer").style.display = "none";


}
</script>


<script type="text/javascript">
    $(function(){
        $('.slide-out-div').tabSlideOut({
            tabHandle: '.handle',
            pathToTabImage: '<?php echo base_url();?>/template/img/crownslide.png',
            imageHeight: '141px',                     
            imageWidth: '40px',                       
            tabLocation: 'right',                     
            speed: 300,                               
            action: 'click',                          
            topPos: '120%',                          
            leftPos: '20px',                          
            fixedPosition: false                      
        });

    });

</script>

<script type="text/javascript">
function add_tumblr_data(){	
   //var tum_search  = document.getElementById('tum_search');
   var tum_search=$("#tum_search").val();
   
   var postData = {
  'tum_search' : tum_search
  
};
        var controller = 'site';
            var base_url = '<?php echo base_url();  ?>';
      //    alert(tum_search);
//                $.ajax({
//                    'type' : 'POST',
//                    'url' : base_url + controller + '/add_tumblr_data',
//                     //  'dataType': "json",
//                    ' data' : postData,
//                    'success' : function(data){  



$.post(base_url + controller + '/add_tumblr_data',{tum_search:$('#tum_search').val()}, function(data) {
                       //  alert(data);
		
				$("#tumblrPosts").html(data);
                        
                   });
              //  });
    }
</script>
<script type="text/javascript" src="http://platform.tumblr.com/v1/share.js"></script>



</head>
<body>
	<div class="slide-out-div" style="clear:both;">
        <a class="handle" href="#">Visit Us</a>
        <h2>Most Popular</h2>
        <?php 
        
       // var_dump($this->load->lang('common'));exit;
        foreach($popular_product as $popular){   ?>
    <div class="slide-out-in">
     
    <img src="<?php echo base_url().'uploads/'.$popular->image;?>" />
    <small class="slide-head">
      <?php    echo  $popular->created_on; ?> 
        <span>
       <?php        echo  $popular->pcnt.'   views';   ?>
        </span>
     </small>
              <h3><a href="<?php echo site_url().'site/product/'.$popular->id .'/'.$popular->hit_cnt;?>" ><?php echo $popular->name; ?></a></h3>
               
    </div>
    
        

<?php } ?>
	</div>	        
  <div class="main_container">
      
     <!--<span class="btn btn-info" data-layout="top" data-type="information" data-toggle="notyfy">Information</span>--> 
 
     
<!--<div class="notyfy_message" id="notyfy_message" style="display:none; background-color: rgb(142, 241, 255);">
      <a class="close" data-dismiss="alert" style="background: none;top:11px;">×</a>
     <span class="notyfy_text">
        
         This alert needs your attention, but it's not super 
         <strong>important</strong>.
     </span>-->
<!--</div>-->     
      
<!--<div id="success_msg" style="display:none;background-color: rgb(142, 241, 255);">Successfully added </div>-->
      <?php if ($this->session->flashdata('message')):?>
			<div class="alert alert-info">
				<a class="close" data-dismiss="alert" style="background: none;top:11px;">×</a>
				<?php echo $this->session->flashdata('message');?>
			</div>
		<?php endif;?>
        <div id="wel_text">
      <q>Welcome to the NyceBy</q>
      <p>Discover, collect, and bid upon the things you love.  Buy, sell, or wish it all in one site.</p>
      </div>
        
     	<div id="content">
        <ul id="slide_nav">

			<li><a href="<?php echo base_url().'/site/category_list' ?>"><img src="<?php echo base_url();?>/template/img/motors.png" width="16" height="16"  style="margin-right:12px;"/>Motors</a>
		
				<ul>
					<li><a href="#">Vehicles</a>
						<ul style="margin-top:0px;">
							<li><a href="#">Cars</a></li>
							<li><a href="#">Trucks</a></li>
							<li><a href="#">Motorcycles</a></li>
							<li><a href="#">Passenger Utilities</a></li>
						</ul>
					</li>
				
				</ul>
			</li>
		
			<li><a href="#"><img src="<?php echo base_url();?>/template/img/estate.png" width="16" height="16"  style="margin-right:12px;"/>Real Estate</a>
				<ul>
					<li><a href="#">Climbing perches</a>					</li>
					<li><a href="#">Climbing perches</a>					</li>
					<li><a href="#">Kissing gouramis</a></li>
		
					<li><a href="#">Pike-heads</a></li>
					<li><a href="#">Giant gouramis</a></li>
				</ul>
			</li>
		
			<li><a href="#"><img src="<?php echo base_url();?>/template/img/art.png" width="18" height="18"  style="margin-right:12px;"/>Collectibles & Art</a>
				<ul>
		
					<li><a href="#">Burrowing gobies</a></li>

	<li><a href="#">Dartfishes</a></li>
					<li><a href="#">Eellike gobies</a></li>
					<li><a href="#">Gobies</a></li>
					<li><a href="#">Loach gobies</a></li>
					<li><a href="#">Odontobutidae</a></li>

	<li><a href="#">Sandfishes</a></li>
					<li><a href="#">Schindleriidae</a></li>
					<li><a href="#">Sleepers</a></li>
					<li><a href="#">Xenisthmidae</a></li>
				</ul>
			</li>
            <li><a href="#"><img src="<?php echo base_url();?>/template/img/fine.png" width="16" height="16" style="margin-right:12px;" />Fine Living</a>
				<ul>
					<li><a href="#">Climbing perches</a>					</li>
					<li><a href="#">Labyrinthfishes</a>					</li>
					<li><a href="#">Kissing gouramis</a></li>
		
					<li><a href="#">Pike-heads</a></li>
					<li><a href="#">Giant gouramis</a></li>
				</ul>
			</li>
            <li><a href="#"><img src="<?php echo base_url();?>/template/img/style1.png" width="13" height="25"  style="margin-right:12px;"/>Style</a>
				<ul>
					<li><a href="#">Climbing perches</a>					</li>
					<li><a href="#">Labyrinthfishes</a>					</li>
					<li><a href="#">Kissing gouramis</a></li>
		
					<li><a href="#">Pike-heads</a></li>
					<li><a href="#">Giant gouramis</a></li>
				</ul>
			</li>
            <li><a href="#"><img src="<?php echo base_url();?>/template/img/watches.png" width="16" height="16"  style="margin-right:12px;"/>Watches & Jewelry</a>
				<ul>
					<li><a href="#">Climbing perches</a>					</li>
					<li><a href="#">Labyrinthfishes</a>					</li>
					<li><a href="#">Kissing gouramis</a></li>
		
					<li><a href="#">Pike-heads</a></li>
					<li><a href="#">Giant gouramis</a></li>
				</ul>
			</li>
		
        <li><a href="#"><img src="<?php echo base_url();?>/template/img/travel.png" width="16" height="16"  style="margin-right:12px;"/>Travel</a>
				<ul>
					<li><a href="#">Climbing perches</a>					</li>
					<li><a href="#">Labyrinthfishes</a>					</li>
					<li><a href="#">Kissing gouramis</a></li>
		
					<li><a href="#">Pike-heads</a></li>
					<li><a href="#">Giant gouramis</a></li>
				</ul>
			</li>
            <li><a href="#"><img src="<?php echo base_url();?>/template/img/3home.png" width="18" height="18"  style="margin-right:12px;" />House & Garden</a>
				<ul>
					<li><a href="#">Climbing perches</a>					</li>
					<li><a href="#">Labyrinthfishes</a>					</li>
					<li><a href="#">Kissing gouramis</a></li>
		
					<li><a href="#">Pike-heads</a></li>
					<li><a href="#">Giant gouramis</a></li>
				</ul>
			</li>
            <li><a href="#"><img src="<?php echo base_url();?>/template/img/technology.png" width="16" height="16"  style="margin-right:12px;"/>Technology</a>
				<ul>
					<li><a href="#">Climbing perches</a>					</li>
					<li><a href="#">Labyrinthfishes</a>					</li>
					<li><a href="#">Kissing gouramis</a></li>
		
					<li><a href="#">Pike-heads</a></li>
					<li><a href="#">Giant gouramis</a></li>
				</ul>
			</li>
            <li><a href="#"><img src="<?php echo base_url();?>/template/img/recreation.png" width="16" height="16"  style="margin-right:12px;"/>Recreation</a>
				<ul>
					<li><a href="#">Climbing perches</a>					</li>
					<li><a href="#">Labyrinthfishes</a>					</li>
					<li><a href="#">Kissing gouramis</a></li>
		
					<li><a href="#">Pike-heads</a></li>
					<li><a href="#">Giant gouramis</a></li>
				</ul>
			</li>
            <li><a href="#"><img src="<?php echo base_url();?>/template/img/wed3.png" width="18" height="18"  style="margin-right:12px;"/>Wedding</a>
				<ul>
					<li><a href="#">Climbing perches</a>					</li>
					<li><a href="#">Labyrinthfishes</a>					</li>
					<li><a href="#">Kissing gouramis</a></li>
		
					<li><a href="#">Pike-heads</a></li>
					<li><a href="#">Giant gouramis</a></li>
				</ul>
			</li>
            <li><a href="#"><img src="<?php echo base_url();?>/template/img/giftcard.png" width="16" height="16"  style="margin-right:12px;"/>Gift Card</a>
				<ul>
					<li><a href="#">Climbing perches</a>					</li>
					<li><a href="#">Labyrinthfishes</a>					</li>
					<li><a href="#">Kissing gouramis</a></li>
		
					<li><a href="#">Pike-heads</a></li>
					<li><a href="#">Giant gouramis</a></li>
				</ul>
			</li>
                        
                        
           <li><a href="#"><img src="<?php echo base_url();?>/template/img/mortgage.png" width="22" height="22"  style="margin-right:12px;"/>Mortgage</a>
				<ul>
					<li><a href="#">Climbing perches</a>					</li>
					<li><a href="#">Labyrinthfishes</a>					</li>
					<li><a href="#">Kissing gouramis</a></li>
		
					<li><a href="#">Pike-heads</a></li>
					<li><a href="#">Giant gouramis</a></li>
				</ul>
	</li>
		</ul>
	
		<div id="pxs_container" class="pxs_container">
			<div class="pxs_bg">
				<div class="pxs_bg1"></div>
				<div class="pxs_bg2"></div>
				<div class="pxs_bg3"></div>
			</div>
			<div class="pxs_loading">Loading images...</div>
			<div class="pxs_slider_wrapper">
				<ul class="pxs_slider">
					<li><img src="<?php echo base_url();?>/template/img/slider/1.jpg" alt="First Image" /></li>
					<li><img src="<?php echo base_url();?>/template/img/slider/2.jpg" alt="Second Image" /></li>
					<li><img src="<?php echo base_url();?>/template/img/slider/3.jpg" alt="Third Image" /></li>
					<li><img src="<?php echo base_url();?>/template/img/slider/4.jpg" alt="Forth Image" /></li>
					<li><img src="<?php echo base_url();?>/template/img/slider/5.jpg" alt="Fifth Image" /></li>
					<li><img src="<?php echo base_url();?>/template/img/slider/6.jpg" alt="Sixth Image" /></li>
				</ul>
				<div class="pxs_navigation">
					<span class="pxs_next"></span>
					<span class="pxs_prev"></span>
				</div>
				<ul class="pxs_thumbnails">
					<li><img src="<?php echo base_url();?>/template/img/slider/thumbs/1.jpg" alt="First Image" /></li>
					<li><img src="<?php echo base_url();?>/template/img/slider/thumbs/2.jpg" alt="Second Image" /></li>
					<li><img src="<?php echo base_url();?>/template/img/slider/thumbs/3.jpg" alt="Third Image" /></li>
					<li><img src="<?php echo base_url();?>/template/img/slider/thumbs/4.jpg" alt="Forth Image" /></li>
					<li><img src="<?php echo base_url();?>/template/img/slider/thumbs/5.jpg" alt="Fifth Image" /></li>
					<li><img src="<?php echo base_url();?>/template/img/slider/thumbs/6.jpg" alt="Sixth Image" /></li>
				</ul>
			</div>
		</div>
        
        
        </div>







<!--<span class="gritter-add-sticky btn btn-default btn-block btn-icon-stacked glyphicons right_arrow"><i></i>
					hi</span>-->
<!--      <div id='myLayer'>The script change the background color fo this layer!</div>
      <div id='myLayer1' style="background-color: red;display:none;">The script</div>
      <a href="javascript:void(0);" onclick="javascript:changeBg()">Change Background color</a>-->
      <div class="box-generic">
	
		<!-- Tabs Heading -->
		<div class="tabsbar">
			<ul>
				<li class="glyphicons camera active"><a href="#tab1-3" data-toggle="tab"><!--<i></i>-->Exchange</a></li>
				<li class="glyphicons folder_open"><a href="#tab2-3" data-toggle="tab"><!--<i></i>-->NyceBy Update</a></li>
				<li class="glyphicons circle_plus tab-stacked"><a href="#tab3-3" data-toggle="tab"><!--<i></i>--> <span>Tumblr</span></a></li>
<li class="glyphicons folder_plus tab-stacked"><a href="#tab4-3" data-toggle="tab"><!--<i></i>--> <span>Instagram</span></a></li>
<li class="glyphicons folder_plus tab-stacked"><a href="#tab5-3" data-toggle="tab"><!--<i></i>--> <span>Pinterest</span></a></li>
<li class="glyphicons folder_plus tab-stacked"><a href="#tab6-3" data-toggle="tab"><!--<i></i>--> <span>Pinterest</span></a></li>
<li class="glyphicons folder_plus tab-stacked"><a href="#tab7-3" data-toggle="tab"><!--<i></i>--> <span>Pinterest</span></a></li>

			</ul>
		</div>
		<!-- // Tabs Heading END -->
		
		<div class="tab-content" style="overflow: hidden;">
				
			<!-- Tab content -->
			<div class="tab-pane active" id="tab1-3">
				
				<div class="grid_bt">
            <button  onclick="disp_preview()" style="background:none;border:none;"><i class="preview"></i></button> 
          <button  onclick="disp_compact()" style="background:none;border:none;"><i class="grid"></i></button>
           <button onClick="disp_grid()" style="background:none;border:none;"><i class="compact"></i></button>
         
      </div>
      
                    
                                
                                
        <span id="show_normal">    
       <div class="commt_form">
       <?php 
       $cnt=0;
       $buyer_info = $this->session->userdata('buyer');
       $b_id=$buyer_info['id'];
       $i=1;
       foreach($products as $product):?> 
               <div id="gritter-notice-wrapper1<?php echo $i ?>" style="display:none;width: 18%;
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
      <div class="photo_id">
      <img src="<?php echo base_url().'uploads/'.$product->image;?>" width="55" height="55" />      </div>
       <div class="bubble-content">
         <div class="point"></div>
         <h5 style="line-height:0;margin-top: 17px;
float: left;"><a href="<?php echo site_url().'site/product/'.$product->id .'/'.$product->hit_cnt?>"  ><?php echo $product->name;?></a></h5>
       <div class="wrapper">
         
           
       
       <div class="rectangle">
            <p id="element" style="color:black;"><?php echo '$'.$product->saleprice ; ?></p>
			</div>
			<div class="r-triangle-top"></div>
   <div class="r-triangle-bottom"></div>
       </div>
<?php
						$photo	= theme_img('no_picture.png', lang('no_image_available'));
						$product->images	= array_values($product->images);
				    if($b_id!=0) 
                                             {   
                                                   $p_id = 0;
                                                  
                                                  foreach($products_byid as $product1){
                                                      
                                                  if($product->id == $product1->p_id) 
                                                  {
                                                      ?>
					<?php	if(!empty($product->images[0]))
						{
							$primary	= $product->images[0];
							foreach($product->images as $photo)
							{
								if(isset($photo->primary))
								{
									$primary	= $photo;
								}
							} ?>
                           <ul id="da-thumbs" class="da-thumbs" style="
margin: 0;
float: left;
top: -46px;
width: 630px;">
<li style="width: 71%;margin: 0px 80px">
                                            
  <a href="javascript:void()" onClick="add_my_wish('<?php echo $product->id ; ?>','<?php echo $product->s_id ; ?>','<?php echo $i; ?>')">
<img width="100%" height="282" src="<?php echo base_url() ?>uploads/images/thumbnails/<?php echo $primary->filename; ?>" style="left:0; top:0;"/>
<!--           <span><?php echo $product->name ; ?></span>-->
<div><span style="margin: 123px 48px 20px 190px;
font-size: 23px;">Nyce'd</span></div>
                          
        <?php
                }
        ?>  
 
  </a> 
    </li>
      <div class="text_tag">
<h4><a href="#">Tags :</h4></a>
<h4><a href="#">HTML</h4></a>
<h4><a href="#">CSS</h4></a>
<h4><a href="#">JAVA</h4></a>
<h4><a href="#">PHP</h4></a>
<!--<h4><a href="http://www.tumblr.com/share" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:81px; height:20px; background:url('http://platform.tumblr.com/v1/share_1.png') top left no-repeat transparent;">Share on Tumblr</h4></a>-->
      
      </div>
    
       </div>
    <?php  continue 2; } 
                                                
                                                
                                                  }
                                            
                                           } ?> 
    
    <?php	if(!empty($product->images[0]))
						{
							$primary	= $product->images[0];
							foreach($product->images as $photo)
							{
								if(isset($photo->primary))
								{
									$primary	= $photo;
								}
							} ?>
                           <ul id="da-thumbs" class="da-thumbs" style="
margin: 0;
float: left;
top: -46px;
width: 630px;">
<li style="width: 71%;margin: 0px 80px">
                                            
  <a href="javascript:void()" onClick="add_my_wish('<?php echo $product->id ; ?>','<?php echo $product->s_id ; ?>','<?php echo $i; ?>')">
<img width="100%" height="282" src="<?php echo base_url() ?>uploads/images/thumbnails/<?php echo $primary->filename; ?>" style="left:0; top:0;"/>
<!--           <span><?php echo $product->name ; ?></span>-->
<div><span style="margin: 123px 48px 20px 190px;font-size: 23px;" id="wishelement<?php echo $i; ?>">Niceit</span></div>
                          
        <?php
                }
        ?>  
 
  </a>
    
</li>
           
  <div class="text_tag">
<h4><a href="#">Tags :</h4></a>
<h4><a href="#">HTML</h4></a>
<h4><a href="#">CSS</h4></a>
<h4><a href="#">JAVA</h4></a>
<h4><a href="#">PHP</h4></a>

<!--<h4><a href="http://tumblr.com/share?s=&v=3&t=<?php echo $product->name;?>&u=localhost/priceytag" 
       title="Share on Tumblr" 
       id="tumblr_button_abc123"
       style="display:inline-block; text-indent:-9999px; overflow:hidden; width:81px; height:20px; background:url('http://platform.tumblr.com/v1/share_1.png') top left no-repeat transparent;">
        Share on Tumblr</h4></a>  -->
  </div>
       </div>
              
<!--     <img src="http://cf1.thingd.com/default/268953839_ebaed186262f.jpg" />-->
     
  

       
       <?php 
       $i++;
       endforeach?> 
          </ul> 
           
	<div style="width:20%;height:30px;float:left;"></div>
</div>
</span>    
          
          
      

      
 
      <!------------------------------------------------end of normal -------------------------------------------------------->     
      
      
    
          
<span id="show_compact" style="display:none;">
<div class="commt_form">

	<!---------------------------------------New grid Start---------------------------------->
        
 <?php
  $i = 1;
 foreach($products as $product):?> 
	<div class="container-item" style="margin-left: 6%;margin-top:12px;">
           
                     <?php
						$photo	= theme_img('no_picture.png', lang('no_image_available'));
						$product->images	= array_values($product->images);
				
						if(!empty($product->images[0]))
						{
							$primary	= $product->images[0];
							foreach($product->images as $photo)
							{
								if(isset($photo->primary))
								{
									$primary	= $photo;
								}
							} ?>

				<div class="item" style="width:240px;
	height:240px;
	background-image: url(<?php echo base_url() ?>uploads/images/thumbnails/<?php echo $primary->filename; ?>);
	-webkit-background-size: 100%;
	     -o-background-size: 100%;
	        
	position: relative;
	top:0;
	left:0;
	z-index:5;
	overflow: hidden;
	-webkit-border-radius: 3px;
	        border-radius: 3px;
	-webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.3);
	        box-shadow: 0 1px 5px rgba(0,0,0,0.3);">
                                    
					<div class="item-overlay">
						<a href="#" class="item-button play"><i class="play"></i></a>
						<a href="#" class="item-button share share-btn" style="	border-radius:3px;
	width:30px;
	height:30px;" id="share-btn<?php echo $i; ?>" onMouseOver="showItemMenu(<?php echo $i; ?>);" onMouseOut="hideItemMenu(<?php echo $i; ?>);"><i class="play"></i></a>
<!--						<div class="sale-tag"><span>SALE</span></div>-->
					</div>
					<div class="item-content">
						<div class="item-top-content">
							<div class="item-top-content-inner">
								<div class="item-product">
									<div class="item-top-title">
										<h2><a  href="<?php echo site_url().'site/product/'.$product->id;?>"><?php echo $product->name ; ?></a></h2>
										<p class="subdescription">
											
											</p>
										</div>
								</div>
								<div class="item-product-price">
									<span class="price-num"><?php echo '$'.$product->saleprice ; ?></span>
									<p class="subdescription"><?php echo '$'.$product->price ; ?></p>
<!--									<div class="old-price"></div>-->
								</div>
							</div>	
						</div>
						<div class="item-add-content">
							<div class="item-add-content-inner">
								<!-- <div class="section">
									<h4>Sizes</h4>
									<p>40,41,42,43,44,45</p>
								</div> -->
								<div class="section">
								
                                                                    <?php echo form_open('site/add_to_cart', 'class="form-horizontal"');?>
                                                                    <input type="hidden" name="cartkey" value="<?php echo $this->session->flashdata('cartkey');?>" />
					<input type="hidden" name="id" value="<?php echo $product->id?>"/>
                                                                       <input type="hidden"  name="quantity" value="1">
                                                                        <button class="btn buy expand" style="background: #34A46C;">Add to Cart</button>
                                                                      </form>  
								</div>
							</div>
						</div>
					</div>
				</div>
            <?php
                                                        }
						?>      
            
				<div class="item-menu popout-menu" id="item_menu<?php echo $i; ?>">
					<ul style="margin:0;">
                                             <li style="border:none;height: 43px;
width: 23%;
border-bottom: 1px solid;
-webkit-box-shadow: inset 0px 1px rgba(255, 255, 255, 0.07);
box-shadow: inset 0px 1px rgba(255, 255, 255, 0.1);
border-bottom: 1px solid #414141;">
<img src="<?php echo base_url().'uploads/'.$product->image;?>" width="30" height="30" style="margin-left: 17%;
margin-top: 7px;">
</li>
                
                
                
                
                
                
        <li class="rc10 share-action icon-share" style="height:42px;width: 23%;background-image: none;"><i class="icon_share"></i><a href="#" class="popout-menu-item">Share</a></li>
				  <div class="share-container rc10">
                   <div class="demo">
            <ul style="margin-left: 18px;
float: left;
width: 83px;">
                <li style="border:none;"><a href="#" title="" style="border:none;"><span class="icon"><i aria-hidden="true" class="icon-facebook" style="margin-left: -39px;
">
                </i></span><span></span> </a></li>
                <li style="border:none;"><a href="#" title="" style="border:none;"><span class="icon"><i aria-hidden="true" class="icon-google-plus" style="margin-left: -36px;
">
                </i></span><span></span></a> </li>
                <li style="margin-left: 31px;"><a href="#" title="" style="border:none;"><span class="icon"><i aria-hidden="true" class="icon-twitter" style="margin-left: -30px;">
                </i></span><span></span></a> </li>
                
            </ul>
        </div>
				</div>
					
        
        
  <?php if($b_id!=0) 
  {   
   $p_id = 0;

   foreach($products_byid as $product1){

    if($product->id == $product1->p_id) 
    {
      ?>
     <li style="height: 46px;width: 23%;">
        <i id="icon_wishit<?php echo $i; ?>" class="wishied" ></i>
         <a href="javascript:void(0);" class="popout-menu-item" id="element<?php echo $i; ?>" >Nyce'd
        </a>
    </li>   
      <?php  continue ; }           
  }
                                            
} ?> 
        
        
						<li style="height: 46px;
width: 23%;"><i id="icon_wishit<?php echo $i; ?>" class="icon_wishit" ></i><a href="javascript:void(0);" class="popout-menu-item" id="element<?php echo $i; ?>" onClick="changeText('<?php echo $product->id ; ?>','<?php echo $product->s_id ; ?>','<?php echo $i; ?>');">Niceit</a></li>
						<li style="height: 46px;
width: 23%;"><i class="icon_compare"></i><a href="#Compare_form" class="popout-menu-item" class="compare" id="comelement<?php echo $i; ?>" onClick="javascript:changeText1(<?php echo $i; ?>)">Compare</a></li>
						
					</ul>
				</div>
           
			</div>
                                                                
			<a href="#x" class="overlay" id="Compare_form" style="border:none;background: rgba(0, 0, 0, 0.6);
height: auto;"></a>

        <div class="popup" style="height: 300px;">
            
            <h2><?php echo $product->name?></h2>
            <p><?php echo $product->description?>
               <?php echo $product->price?> 
                <?php echo $product->saleprice?>
                <?php if($product->shippable==1)echo "yes";
                          else echo "No";
                    
                    ?>
            </p>
        
           
            <a class="close" href="#close" style="line-height: 0px;
position: absolute;
right: 0;
text-align: center;
text-decoration: none;
top: 3px;
width: 30px;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
-ms-border-radius: 15px;
-o-border-radius: 15px;
border-radius: 15px;
height: 5px;
border: none;    background: url(template/img/close.png) no-repeat;height: 25px;"></a>

    
</div>

			
			<!---------------------------New grid End----------------------------->
			
			

 <?php
    $i++;
    endforeach;
    
    
 ?>
                        
	<div style="width:20%;height:30px;float:left;"></div>
       
      </div>
   
    
</span>
<!-----------------------------------------------------------------end of tiles-------------------------------------------->      

<span id="show_grid" style="display:none;">
    
<div class="commt_form">
      
<ul id="da-thumbs" class="da-thumbs">
    
 <?php 
  $buyer_info = $this->session->userdata('buyer');
                $b_id=$buyer_info['id'];
 $i=1;

 foreach($products as $product): //echo $product->id;exit; ?>

					<li>
                                            
                                            
                                            
                                            

                                            
                    <?php
                    //var_dump($products);exit;
              
                //var_dump($product->id);exit;
                
             
						$photo	= theme_img('no_picture.png', lang('no_image_available'));
						$product->images	= array_values($product->images);
				
                                            if($b_id!=0) 
                                             {   
                                                   $p_id = 0;
                                                  
                                                  foreach($products_byid as $product1){
                                                      
                                                  if($product->id == $product1->p_id) 
                                                  {
                                                      ?>
                                            <?php if(!empty($product->images[0]))
						{
                                                        $p_id = $product->id;
                                                       
							$primary	= $product->images[0];
							foreach($product->images as $photo)
							{
								if(isset($photo->primary))
								{
									$primary	= $photo;
								}
							} ?>
                                                       <a href="javascript:void();" onClick="add_my_wish2('<?php echo $product->id ; ?>','<?php echo $product->s_id ; ?>','<?php echo $i; ?>')">
							<img width="220" height="200" src="<?php echo base_url() ?>uploads/images/thumbnails/<?php echo $primary->filename; ?>" />
							<span><?php echo $product->name ; ?></span>
                                                       <div><span>Nyce'd</span></div>
                                                       </a>
                                             <?php
                                                  }
					?> 
                                                      
                                          <?php  continue 2; } 
                                                
                                                
                                                  }
                                            
                                           } //end of login

              	                                if(!empty($product->images[0]))
						{
							$primary	= $product->images[0];
							foreach($product->images as $photo)
							{
								if(isset($photo->primary))
								{
									$primary	= $photo;
								}
							} ?>
                                            
                                           
                                            <a class="btn btn-info"  data-layout="top" data-type="information" data-toggle="notyfy" href="javascript:void();" onClick="add_my_wish2('<?php echo $product->id ; ?>','<?php echo $product->s_id ; ?>','<?php echo $i; ?>')">
							<img width="220" height="200" src="<?php echo base_url() ?>uploads/images/thumbnails/<?php echo $primary->filename; ?>" />
							<span><?php echo $product->name ; ?></span>
                                                       <div><span id="wishelement2<?php echo $i; ?>">Niceit</span></div>
                                            </a>
                                          <?php
                                                  }

                                           ?>
                                                
                                 
                                                
					 
                                            
					</li>
					
 
 
 
 <?php 
 
 $i++;

 endforeach;

 ?>  
		
			</ul>

	<div style="width:20%;height:30px;float:left;"></div>
    </div>
</span>
      
  </div>
			<!-- // Tab content END -->
			
			<div class="tab-pane" id="tab2-3">
			<div class="tabs_inarea">
                           <?php  
                             $buyer_info = $this->session->userdata('buyer');
                             $b_id=$buyer_info['id'];
                             if($b_id != 0)
                             {
                           ?> 
                            
                            
				 <div class="tumblr_area"> 
                                 <div class="tumblrin_area" style="width:83%;margin:0 auto;"> 
                                     <?php foreach($my_popular_tumblr as $k => $my_product) {
                                         
                                         
                                             $result = count($my_popular_tumblr);
                                            // echo $result;
                                     
                                             $odd = array();
                                             $even = array();
                                             
                                        if ($k % 2 == 0) 
                                            {
                                          
                                       
                                         ?>
				<div class="nyce_comment">
				
                                <img src="<?php echo base_url().'uploads/'.$my_product->image;?>" width="70" height="70" /> 
                   <div class="comment-content">
                       <?php echo $my_product->title; 
                        echo $my_product->caption;?>
         <div class="point"></div>

                </div>
                <label><?php echo $my_product->username; ?></label>
                
				</div>
                                     <?php } else { ?>
                                     <!-----nyce_comment-------->
				<div class="nyceupdate_commemt">
                	        
				<div class="comment_update">
                               <?php echo $my_product->title;
                               echo $my_product->caption;
                               ?>      
                 <div class="point" style="left: 100%;border-left: 12px solid rgba(0, 0, 0, 0.28);border-right: none;"></div>
                </div>
                <img src="<?php echo base_url().'uploads/'.$my_product->image;?>" width="70" height="70" /> 
                  <label><?php echo $my_product->username; ?></label>
				</div>
                       <?php   }}       ?>
                                <!----------nyceupdate_commemt----------->
			
			</div>
			</div>
                            <?php }else { ?>
                            
                            <div style="width:60%;height:40%;">Your r not logged in
                            
                            
                            </div>
                            
                            <?php }?>
			</div>
                        </div>
			<!-- // Tab content END -->
			
			<!-- Tab content -->
			<div class="tab-pane" id="tab3-3">
                            <div class="tabs_inarea">
                            
		               
                                     <div class="tumblr_area"> 
                                         
                                      <input id="tum_search" type="search" results="2" name="tum_search" autosave="unique" placeholder="Search" class="tumblr_serch" >
<!--                                    

                                     <input type="submit" value="Go" style="margin-left: 3%;margin-top: 3.5%;width: 4%;">-->
                                    
                                  
                               
                               <?php //  echo form_submit('submit', 'go',' style="margin-left: 33%;margin-top: -7%;width: 4%;"'); ?>
<!--//                    echo anchor('site/add_tumblr_data', 'Go','onClick="add_tumblr_data();"');-->
                    <a href="javascript:void(0);"  onclick="add_tumblr_data();"  class="bt_search"></a>

                   
<div id="tumblrPosts">

    </div>

<!--<a href="#" class="bt_search"></a>-->
           


<div class="wwww" style=" float: left;
    width: 30%;
    height: 32px;
"></div>       
</div>
 <div class="wwww" style="
    float: left;
    width: 30%;
    height: 32px;
"></div>
                        </div>
   
                        </div>
			<!-- // Tab content END -->
			
			<!-- Tab content -->
			<div class="tab-pane" id="tab4-3">
			<div class="tabs_inarea">	
				<p>44444444444444Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
			</div> </div>
			<!-- // Tab content END -->
            
            	<!-- Tab content -->
			<div class="tab-pane" id="tab5-3">
			<div class="tabs_inarea">	
				<p>55555555555lll pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
			</div></div>
			<!-- // Tab content END -->
			
            
            	<!-- Tab content -->
			<div class="tab-pane" id="tab6-3">
			<div class="tabs_inarea">	
				<p>pppp[ pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
			</div></div>
			<!-- // Tab content END -->
                   	<!-- Tab content -->
			<div class="tab-pane" id="tab7-3">
			<div class="tabs_inarea">	
				<p>666666666666ttt pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
			</div></div>
			<!-- // Tab content END -->
		
			
		</div>
 
	<div class="separator bottom"></div>
      
         
      


	
 <script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.easing.1.3.js"></script> 
  	
  
	<script type="text/javascript">
			(function($) {
				$.fn.parallaxSlider = function(options) {
					var opts = $.extend({}, $.fn.parallaxSlider.defaults, options);
					return this.each(function() {

						var $pxs_container 	= $(this),
						o 				= $.meta ? $.extend({}, opts, $pxs_container.data()) : opts;
						
						//the main slider
						var $pxs_slider		= $('.pxs_slider',$pxs_container),
						//the elements in the slider
						$elems			= $pxs_slider.children(),
						//total number of elements
						total_elems		= $elems.length,
						//the navigation buttons
						$pxs_next		= $('.pxs_next',$pxs_container),
						$pxs_prev		= $('.pxs_prev',$pxs_container),
						//the bg images
						$pxs_bg1		= $('.pxs_bg1',$pxs_container),
						$pxs_bg2		= $('.pxs_bg2',$pxs_container),
						$pxs_bg3		= $('.pxs_bg3',$pxs_container),
						//current image
						current			= 0,
						//the thumbs container
						$pxs_thumbnails = $('.pxs_thumbnails',$pxs_container),
						//the thumbs
						$thumbs			= $pxs_thumbnails.children(),
						//the interval for the autoplay mode
						slideshow,
						//the loading image
						$pxs_loading	= $('.pxs_loading',$pxs_container),
						$pxs_slider_wrapper = $('.pxs_slider_wrapper',$pxs_container);
							
						//first preload all the images
						var loaded		= 0,
						$images		= $pxs_slider_wrapper.find('img');
							
						$images.each(function(){
							var $img	= $(this);
							$('<img/>').load(function(){
								++loaded;
								if(loaded	== total_elems*2){
									$pxs_loading.hide();
									$pxs_slider_wrapper.show();
										
									//one images width (assuming all images have the same sizes)
									var one_image_w		= $pxs_slider.find('img:first').width();
							
									/*
									need to set width of the slider,
									of each one of its elements, and of the
									navigation buttons
									 */
									setWidths($pxs_slider,
									$elems,
									total_elems,
									$pxs_bg1,
									$pxs_bg2,
									$pxs_bg3,
									one_image_w,
									$pxs_next,
									$pxs_prev);
							
									/*
										set the width of the thumbs
										and spread them evenly
									 */
									$pxs_thumbnails.css({
										'width'			: one_image_w + 'px',
										'margin-left' 	: -one_image_w/2 + 'px'
									});
									var spaces	= one_image_w/(total_elems+1);
									$thumbs.each(function(i){
										var $this 	= $(this);
										var left	= spaces*(i+1) - $this.width()/2;
										$this.css('left',left+'px');
											
										if(o.thumbRotation){
											var angle 	= Math.floor(Math.random()*41)-20;
											$this.css({
												'-moz-transform'	: 'rotate('+ angle +'deg)',
												'-webkit-transform'	: 'rotate('+ angle +'deg)',
												'transform'			: 'rotate('+ angle +'deg)'
											});
										}
										//hovering the thumbs animates them up and down
										$this.bind('mouseenter',function(){
											$(this).stop().animate({top:'-10px'},100);
										}).bind('mouseleave',function(){
											$(this).stop().animate({top:'0px'},100);
										});
									});
										
									//make the first thumb be selected
									highlight($thumbs.eq(0));
										
									//slide when clicking the navigation buttons
									$pxs_next.bind('click',function(){
										++current;
										if(current >= total_elems)
											if(o.circular)
												current = 0;
										else{
											--current;
											return false;
										}
										highlight($thumbs.eq(current));
										slide(current,
										$pxs_slider,
										$pxs_bg3,
										$pxs_bg2,
										$pxs_bg1,
										o.speed,
										o.easing,
										o.easingBg);
									});
									$pxs_prev.bind('click',function(){
										--current;
										if(current < 0)
											if(o.circular)
												current = total_elems - 1;
										else{
											++current;
											return false;
										}
										highlight($thumbs.eq(current));
										slide(current,
										$pxs_slider,
										$pxs_bg3,
										$pxs_bg2,
										$pxs_bg1,
										o.speed,
										o.easing,
										o.easingBg);
									});
							
									/*
									clicking a thumb will slide to the respective image
									 */
									$thumbs.bind('click',function(){
										var $thumb	= $(this);
										highlight($thumb);
										//if autoplay interrupt when user clicks
										if(o.auto)
											clearInterval(slideshow);
										current 	= $thumb.index();
										slide(current,
										$pxs_slider,
										$pxs_bg3,
										$pxs_bg2,
										$pxs_bg1,
										o.speed,
										o.easing,
										o.easingBg);
									});
							
								
							
									/*
									activate the autoplay mode if
									that option was specified
									 */
									if(o.auto != 0){
										o.circular	= true;
										slideshow	= setInterval(function(){
											$pxs_next.trigger('click');
										},o.auto);
									}
							
									/*
									when resizing the window,
									we need to recalculate the widths of the
									slider elements, based on the new windows width.
									we need to slide again to the current one,
									since the left of the slider is no longer correct
									 */
									$(window).resize(function(){
										w_w	= '750';
										//w_w	= $(window).width();
										setWidths($pxs_slider,$elems,total_elems,$pxs_bg1,$pxs_bg2,$pxs_bg3,one_image_w,$pxs_next,$pxs_prev);
										slide(current,
										$pxs_slider,
										$pxs_bg3,
										$pxs_bg2,
										$pxs_bg1,
										1,
										o.easing,
										o.easingBg);
									});

								}
							}).error(function(){
								//alert('here')
							}).attr('src',$img.attr('src'));
						});
							
							
							
					});
				};
				
				//the current windows width
				//var w_w				= $(window).width();
				var w_w				= '760';
				
				var slide			= function(current,
				$pxs_slider,
				$pxs_bg3,
				$pxs_bg2,
				$pxs_bg1,
				speed,
				easing,
				easingBg){
					var slide_to	= parseInt(-w_w * current);
					$pxs_slider.stop().animate({
						left	: slide_to + 'px'
					},speed, easing);
					$pxs_bg3.stop().animate({
						left	: slide_to/2 + 'px'
					},speed, easingBg);
					$pxs_bg2.stop().animate({
						left	: slide_to/4 + 'px'
					},speed, easingBg);
					$pxs_bg1.stop().animate({
						left	: slide_to/8 + 'px'
					},speed, easingBg);
				}
				
				var highlight		= function($elem){
					$elem.siblings().removeClass('selected');
					$elem.addClass('selected');
				}
				
				var setWidths		= function($pxs_slider,
				$elems,
				total_elems,
				$pxs_bg1,
				$pxs_bg2,
				$pxs_bg3,
				one_image_w,
				$pxs_next,
				$pxs_prev){
					/*
					the width of the slider is the windows width
					times the total number of elements in the slider
					 */
					var pxs_slider_w	= w_w * total_elems;
					$pxs_slider.width(pxs_slider_w + 'px');
					//each element will have a width = windows width
					$elems.width(w_w + 'px');
					/*
					we also set the width of each bg image div.
					The value is the same calculated for the pxs_slider
					 */
					$pxs_bg1.width(pxs_slider_w + 'px');
					$pxs_bg2.width(pxs_slider_w + 'px');
					$pxs_bg3.width(pxs_slider_w + 'px');
					
					/*
					both the right and left of the
					navigation next and previous buttons will be:
					windowWidth/2 - imgWidth/2 + some margin (not to touch the image borders)
					 */
					var position_nav	= w_w/2 - one_image_w/2 + 3;
					$pxs_next.css('right', position_nav + 'px');
					$pxs_prev.css('left', position_nav + 'px');
				}
				
				$.fn.parallaxSlider.defaults = {
					auto			: 0,	//how many seconds to periodically slide the content.
											//If set to 0 then autoplay is turned off.
					speed			: 1000,//speed of each slide animation
					easing			: 'jswing',//easing effect for the slide animation
					easingBg		: 'jswing',//easing effect for the background animation
					circular		: true,//circular slider
					thumbRotation	: true//the thumbs will be randomly rotated
				};
				//easeInOutExpo,easeInBack
			})(jQuery);
		</script>

    <script type="text/javascript">
			$(function() {
				var $pxs_container	= $('#pxs_container');
				$pxs_container.parallaxSlider();
			});
        </script>
    <script type="text/javascript" src="<?php echo base_url();?>/template/js/index.js"></script>
  
   
