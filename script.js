$(document).ready(function(){

	var i = 1;
	$("#message").focus();

	$("#send").click(function() {
		if($("#message").val() !== "") {
        	$("#messages").append("<p class=\"message" + i + "\">" + $("#message").val() + "</p>");

        	i++;
		    if(i==2) i=0;
	        
	        $("#messages").scrollTop = $("#messages").scrollHeight;

	         $.get("test.php?text=" + $("#message").val(), function(data, status){
	            if(status == "success") {
	            	$("#messages").append("<p class=\"message" + i + "\">" + data + "</p>");
	     			i++;
	        			if(i==2) i=0;
	            }
	        });
	    	$("#message").val("");
	    	$("#message").focus();
        }
	});

    $("#message").keypress(function (e) {
		if(e.which == 13) {
	   		
	   		if($("#message").val() !== "") {
	        	$("#messages").append("<p class=\"message" + i + "\">" + $("#message").val() + "</p>");

	        	i++;
			    if(i==2) i=0;
		        
		        $("#messages").scrollTop = $("#messages").scrollHeight;

		         $.get("test.php?text=" + $("#message").val(), function(data, status){
		            if(status == "success") {
		            	$("#messages").append("<p class=\"message" + i + "\">" + data + "</p>");
		     			i++;
		        			if(i==2) i=0;
		            }
		        });
		    	$("#message").val("");
	        }

	   		return false;
	  	}
	});
}); 