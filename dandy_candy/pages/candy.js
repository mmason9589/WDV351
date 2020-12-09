$(document).ready(function(){  
		
	
	/*------enable/disable "checkout" animation depending on mobile/web-------*/
	
		function myFunction1(x) {
				if (x.matches) { // If media query matches
					
					$(".cart").hover(function(){  
						$(this).attr('src','checkout.png');  
						}, function(){  
						$(this).attr('src','checkout.png');  
					  });
					
				  } else {
				   $(".cart").hover(function(){  
						$(this).attr('src','checkoutDone.png');  
						}, function(){  
						$(this).attr('src','checkout.png');  
					  });
					  
					  
				  }
				}
	

	/*------enable/disable "buy" animation depending on mobile/web-------*/
	
		function myFunction2(x) {
				if (x.matches) { // If media query matches
					
					$(".purchase").hover(function(){  
						$(this).attr('src', 'bagIt.png');  
						}, function(){  
						$(this).attr('src','bagIt.png');  
					  });
					
				  } else {
				   $(".purchase").hover(function(){  
						$(this).attr('src', 'tagIt.png');  
						}, function(){  
						$(this).attr('src','bagIt.png');  
					  });
					  
					  
				  }
				}

	
			var x = window.matchMedia("(max-width: 576px)")
			myFunction1(x) // Call listener function at run time
			myFunction2(x) // Call listener function at run time
			x.addListener(myFunction) // Attach listener function on state changes
	
	
		
	
	
			/*-------scroll button function (store page)-------*/
			
	
	
			
	
	
});


/*-----category selection-----*/

function selectedCat(){
		
		var catValue = document.querySelector("#catType").value;
		
		if(catValue == 2){
			
			$(".taffy").show();
			$(".chocolate").show();
			$(".softCandy").show();
			$(".hardCandy").show();
			$(".recipe").show();
		}
	
		if(catValue == 3){
			
			$(".taffy").show();
			$(".chocolate").hide();
			$(".softCandy").hide();
			$(".hardCandy").hide();
			$(".recipe").hide();
		}
	
		if(catValue == 4){
			
			$(".softCandy").show();
			$(".chocolate").hide();
			$(".taffy").hide();
			$(".hardCandy").hide();
			$(".recipe").hide();
		}
	
		if(catValue == 5){
			
			$(".hardCandy").show();
			$(".chocolate").hide();
			$(".softCandy").hide();
			$(".taffy").hide();
			$(".recipe").hide();
		}
	
		if(catValue == 6){
			
			$(".chocolate").show();
			$(".taffy").hide();
			$(".softCandy").hide();
			$(".hardCandy").hide();
			$(".recipe").hide();
		}
	
		if(catValue == 7){
			
			$(".recipe").show();
			$(".chocolate").hide();
			$(".softCandy").hide();
			$(".hardCandy").hide();
			$(".taffy").hide();
		}
	
		
		
	}
