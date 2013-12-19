<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>Pricey Tag</title>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/site.js"></script>
	
	<!--
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.min.js"></script>          
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery-ui-1.10.3.custom.min.js"></script>
    -->
	
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/stuHover.js"></script>    
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/lightview.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.kinetic.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.tmpl.min.js"></script>
   	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.magnifier.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/modernizr.custom.17475.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/login.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery.hoverdir.js"></script>
        
 <link rel="stylesheet" href="<?php echo base_url();?>/template/css/style.css" type="text/css" media="screen" />
 <link rel="stylesheet" href="<?php echo base_url();?>/template/css/main.css" type="text/css" media="screen" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/lightview.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/pro_drop_1.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/tagit-stylish-yellow.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/modal.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/MenuMatic.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/stylegrid.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/jquery.akordeon.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/elastislide.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/custom.css"/>
   
 
    <!-- LESS.js Library -->
	<!--<script  type="text/javascript" src="<?php echo base_url();?>/template/js/seller-admin/seller-admin/less.min.js"></script>-->
        

	
	<script type="text/javascript"> 
		function joinfunction()
		{
			var controller = 'registration';
            var base_url = '<?php echo base_url();  ?>';
                $.ajax({
                    'url' : base_url + controller + '/signup',
                    'type' : 'POST', 
                    'success' : function(data){ 
                    
                        if(data){
							//alert(data);
							$("#register_form").html(data);
                        }
                    }
                });
		}
		

		function loginfunction()
                {
					var controller = 'user';
					var base_url = '<?php echo base_url();  ?>';
					$.ajax({
                    //'url' : base_url + controller+ '/index',
                    'url' : base_url + controller+ '/login',
                    'type' : 'POST', 
                    
                    'success' : function(data){ 
					if(data){
						$("#login1_form").html(data);
					}
                    }
                });
                }
	</script>
</head>