(function( $ ){

	$.fn.FloatLabel = function( options ){

		var defaults = {
			populatedClass : 'populated',
			focusedClass : 'focused'
		},
			settings = $.extend({}, defaults, options);

		return this.each(function(){

			var element = $(this),
				label = element.find('.formlabel'),
				input = element.find('textarea, input');

      if( input.val() == '' ) {
        //input.attr('placeholder', label.text() );
      } else {
        element.addClass( settings.populatedClass );
      }

			input.on( 'focus', function(){
				element.addClass( settings.focusedClass );
				
				if( input.attr('placeholder') === label.text() ){
					input.attr('placeholder','');
				} else {
					element.addClass( settings.populatedClass );
				}

			});

			input.on( 'blur', function(){
				element.removeClass( settings.focusedClass );
				
				if( !input.val() ){
					 //input.attr('placeholder', label.text() );
					element.removeClass( settings.populatedClass );
				}

			});

			input.on( 'keyup', function(){
				element.addClass( settings.populatedClass );
			});

		});

	};

})( jQuery );
