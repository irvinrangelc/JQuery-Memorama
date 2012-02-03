/*//////////////////////////////////////////////////////////////////////////
//
//  Author: Irvin Rangel, inherit.mx
//  Date: 01 Ene, 2012
//  En tiempos de ocio. (Cuando no hay algo que hacer en la chamba)
//  Version 1.0
//
*//////////////////////////////////////////////////////////////////////////
function toSelect(attrId){//Select Items
	if($(attrId + '> .item').hasClass("off")){
		$(attrId + '> .item').removeClass("off").addClass("on");
		$(attrId + '> .item').fadeIn();	
		$(attrId).css("background","#FFFFFF");//Change background color
	}else{
		$(attrId + '> .item').hide();
		$(attrId + '> .item').removeClass("on").addClass("off");
	}	
}
function toCheck(){//Check items selectedIndex
	//Global variables
	var totalCheck = 0;
	$(".item").each(function(){
		if($(this).hasClass("toCheck")){
			totalCheck++;
		}
	});
	if(totalCheck==2){
		return true;
	}else{
		return false;
	}
}
function toShow(){//To show items checked
	var item = 0;
	var src = Array();
	var alt;
	$(".item").each(function(){
		if($(this).hasClass("toCheck")){
			src[item] = $(this).html();
			item++;
		}
	});
	for(var cont = 0; cont<2; cont++){
		src[cont] = src[cont].split('title="');
		var total=(src[cont][1].length)-2;
		src[cont] = src[cont][1].substr(0,total);
	}
	if(src[0]==src[1]){
		$(".item").each(function(){
			if($(this).hasClass("toCheck")){
				$(this).removeClass("toCheck").addClass("checked");
				$(this).removeClass("active");
			}
		});
		return true;
	}else{
		return false;
	}
}
function toHide(){//To hide items
	$(".item").each(function(){
	  if($(this).hasClass("toCheck")){
		  $(this).removeClass("toCheck").removeClass("on").addClass("off").css("display","none");
	  }
	});
	
	$(".wrapper-item").each(function(){
		var attrId = $(this).attr("id");
		attrId = '#'+attrId;
		if($(attrId + '> .item').hasClass("checked")){
			//Do nothing
		}else{
			$(this).css("background","#55BAC6");//Change background color
		}
	});	
}
$(function(){//Main function		
	$('.wrapper-item').click(function(event) {//Handle click event				
		var attrId = $(this).attr("id");
		attrId = '#'+attrId;
		$(attrId + '> .item').addClass("toCheck");//To handle comparison
		if($(attrId + '> .item').hasClass("active")){
			
			/*$(this).flip({
				direction:'tb',
				color:'white',
				speed: 200
			});*/
			
			toSelect(attrId);//Selecting items
			if(toCheck()){
				// When two items are selected
				if(toShow()){
					//Everything fine
					
				}else{
					setTimeout("toHide()",900);
				}
			}
		}else{			
			$(attrId + '> .item').removeClass("toCheck");//To handle comparison
		}
	});	
});