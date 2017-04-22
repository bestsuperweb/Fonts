$(function() {
    $('.cp').colorpicker().css('margin', '5px 0');
    $('select').css('margin', '5px 0');
    $('input[type=checkbox]').prop('checked', false);
    
    $('a#save').on('click', function(){
    	var result = {};
    	$('.title').each(function(){
    		
    		if($(this).children('input[type=checkbox]').is(':checked')){
    			var id = $(this).attr('aria-controls');
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