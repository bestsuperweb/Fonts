$(function() {
    $('input[type=checkbox]').prop('checked', false);

    $('.title').on('click', function(){
    	$('.title').each(function(){
    		var id = '#' + $(this).attr('data-target');
    		if($(this).children('input[type=checkbox]').is(':checked')){
    			$(id).slideDown();
    		}else{
    			$(id).slideUp();
    		}

    	});
    });
    
    $('a#save').on('click', function(){
    	var result = {};
    	$('.title').each(function(){
    		
    		if($(this).children('input[type=checkbox]').is(':checked')){
    			var id = $(this).attr('data-target');
	    		result[id] = { 
	    						font_family: 		$('#' + id + '_family').val(), 
	    						font_weight: 		$('#' + id + '_weihgt').val(),
	    						font_size: 			$('#' + id + '_size').val(),
	    						line_height: 		$('#' + id + '_height').val(),
	    						text_decoration: 	$('#' + id + '_decoration').val(),
	    						color: 				$('#' + id + '_color').val(),
	    						mobile_font_size: 	$('#' + id + '_mobile_size').val()
	    						};
    		}    		

    	});
    	alert(JSON.stringify(result));
    });
});