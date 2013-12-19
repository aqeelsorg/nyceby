$("window").load(function() {
  $("#body").removeClass("preload");
});

function showItemMenu(id)
{ 
 // alert("#item-menu"+id);
			setTimeout(function() {
			$("#item_menu"+id).addClass("visible")
			}, 500);
}		
function hideItemMenu(id)
{
			setTimeout(function() {
			$("#item_menu"+id).removeClass("visible")
			}, 500);
		
}            
                
                
                
		$(".item-menu").hover(function() {
			//$(".item-menu").addClass("visible")
                        
		});
		$(".item-menu").mouseleave(function() {
			setTimeout(function() {
			$(".item-menu").removeClass("visible")
			}, 500);
		});
		$(".container-item").hover(function() {
			setTimeout(function() {
			$(".container-item").css("z-index","1000")
			}, 500);
		});
           