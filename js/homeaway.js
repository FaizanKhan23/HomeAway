
//--------------------------scroolll
$(document).ready(function(){
$(window).scroll(function(){
	     if($(this).scrollTop()>200)
		 {
		    
			$("#header_position").css({'background-color':'rgba(0,0,0,0.6)','transition':'all 2s'});
			
		 }
		 
		 else
		 {
		    
			$("#header_position").css({'background-color':'rgba(0,0,0,0)','transition':'all 1s'});
		     
		 }
	
	 
	
 
     
});
	 
});

//--------------------------Read-More

		
		$(document).ready(function(){
			
		
			$("#readmr").click(function(){
			
				$(".moretext").slideToggle('Slow',function(){
				
				if($("#readmr").text()=="MORE"){
				
					$("#readmr").text("LESS");
				}
				
			else{
			
				$("#readmr").text("MORE");
			
					}
				
				});
				
				
			//return false;
			});
		
		
		
		});
		
		
//------------------------------Go-Top
		$(document).ready(function(){
				$(window).scroll(function(){

					if($(this).scrollTop() >400)	
					{
						$("#top").fadeIn();
					}

					else
					{
						$("#top").fadeOut();
					}

				});

$("#top").click(function(){
	     $("body,html").animate({'scrollTop':0},1000);
		 	return false;
	 });

			});
			
			
//--------------wow

 new WOW().init();
		
		
		

 
     
   
	 
