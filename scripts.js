(function ($) {

   $(document).ready(function() {
	   $(document).on ('click' , '.js-filter-item > a' , function(e) {
		   e.preventDefault();
		   
		   var category= $(this).data('category');
		    $.ajax({
				url: wpAjax.ajaxUrl,
				data: { action: 'filter', category: category },
				type: 'post',
				success: function (result) {
					$('.content').html(result);
				},
					
					error: function(result) {
						console.warn(result);
					}
					
				});
				
			});
	   });
	   
   }) (jQuery);
