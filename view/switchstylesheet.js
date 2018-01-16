// STYLESHEET SWITCHER
(function($)
	{
		//  All Alternate stylesheets Selector
		var $links = $('link[rel*=alternate][title]');
		
		$('body').prepend('<div id="toolbar"><select id="css-selector"></select></div>');
		var options= '<option value="">Select stylesheet:</option>';
		$links.each(function(index,value){
			options +='<option value="'+$(this).attr('href')+'">'+$(this).attr('title')+'</option>';
		});
		$links.remove();
		
		$('#css-selector').append(options)
			.bind('change',function(){
			$('link[rel*=jquery]').remove();
			$('head').append('<link rel="stylesheet jquery" href="'+$(this).val()+'" type="text/css" />');
		});
		
	}
)(jQuery);