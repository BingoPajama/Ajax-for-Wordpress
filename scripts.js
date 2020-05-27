(function ($) {

   $(document).ready(function() {
	   $(document).on ('click' , '.content' , function(e) {
		   e.preventDefault();
		   
		   var category= $(this).data('category');
		    $.ajax({
				url: wpAjax.ajaxUrl,
				data: { action: 'filter', category: category },
				type: 'post',
				success: function (result) {
					$('.js-filter').html(result);
				},
					
					error: function(result) {
						console.warn(result);
					}
					
				});
				
			});
	   });
	   
   }) (jQuery);
