$(document).ready(function(){

	$("body").css("overflow", "hidden");
	$('#hideable').hide();

	var toShow = true;

	$(document).keydown(function(keyEvent) {
	    // if(keyEvent.keyCode == 16){
	    	if(keyEvent.keyCode == 27){
	    		toShow = !toShow;
	    	}else {
	    		toShow = true;
	    	}

	    		$('#hideable').toggle(toShow);
	            if(toShow){
	            	$('#search').focus();
	            }

	    // }
	});
});

