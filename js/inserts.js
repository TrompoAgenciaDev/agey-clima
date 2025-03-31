$(function() {

	var url = window.location.pathname; 
	var path=url.split("/");
	var totalpath=path.length - 2;

	if ( totalpath == 1) {
	  	$("#footer").load("footer.html");
//	  	$("#header").load("header.html");

		$("#header").load("header.html", function() {
		    $("#navbar ul li").each(function(){
		        if($(this).attr("id")==path[2])
		            $(this).addClass("active");
			})
		});
	}
	else if( totalpath == 2) {
		$("#footer").load("../footer.html");
//		$("#header").load("../header.html");

		$("#header").load("../header.html", function() {
		    $("#navbar ul li").each(function(){
		        if($(this).attr("id")==path[2])
		            $(this).addClass("active");
			})
		});

	} 

	else if( totalpath == 3) {
	 	$("#footer").load("../../footer.html");
//	 	$("#header").load("../../header.html");
		
		$("#header").load("../../header.html", function() {
		    $("#navbar ul li").each(function(){
		        if($(this).attr("id")==path[2])
		            $(this).addClass("active");
			})
		});

	}

    

});