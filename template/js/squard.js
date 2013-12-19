//Squar'd is a little script written for GoCart to help get the product images squar'd up.

$.fn.squard = function(dim, container){
	
	//dim is the square dimensions you want to match
	img	= $(this);
	
	var newImg=document.createElement("img");
	
	newImg.setAttribute('src', img.attr('src'));
	
	if(img.innerHeight() == img.innerWidth())
	{
		newImg.style.width	= dim+'px';
		//newImg.style.height	= dim+'px';
		newImg.style.width	= '600px';
	}
	else if(img.innerHeight() > img.innerWidth())
	{
		newImg.style.height	= dim+'px';
		newImg.style.width	= '600px';
	}
	else
	{
		//newImg.style.width	= dim+'px';
		newImg.style.width	= '600px';
		
		//find top margin
		//newImg.style.marginTop = (dim - newImg.height)/2+'px';
		
	}
	
	newImg.setAttribute('src', img.attr('src'));
	newImg.setAttribute('class', "magnify");
	newImg.setAttribute('data-magnifyby', "2.5");

	container.html(newImg);
	
	newImg.onload = function()
	{

		img2	= container.children().eq(0);
		if(img2.innerHeight() < dim)
		{
			margin = (dim-img2.innerHeight())/2;

			img2.css('margin-top', margin+'px');
		}
		
			var $targets=$('.magnify')
	$targets.each(function(i){
		var $target=$(this)
		var options={}
		if ($target.attr('data-magnifyto'))
			options.magnifyto=parseFloat($target.attr('data-magnifyto'))
		if ($target.attr('data-magnifyby'))
			options.magnifyby=parseFloat($target.attr('data-magnifyby'))
		if ($target.attr('data-magnifyduration'))
			options.duration=parseInt($target.attr('data-magnifyduration'))
		$target.imageMagnify(options)
	})
	var $triggers=$('a[rel^="magnify["]')
	$triggers.each(function(i){
		var $trigger=$(this)
		var targetid=$trigger.attr('rel').match(/\[.+\]/)[0].replace(/[\[\]']/g, '') //parse 'id' from rel='magnify[id]'
		$trigger.data('magnifyimageid', targetid)
		$trigger.click(function(e){
			$('#'+$(this).data('magnifyimageid')).trigger('click.magnify')
			e.preventDefault()
		})
	})
	
	}

};