$.fn.setCursorPosition = function(pos){
	this.each(function(index,elem){
		if (elem.setSelectionRange){
			elem.setSelectionRange(pos,pos);
		} else if (elem.createTextRange){
			var range = elem.createTextRange();
			range.collapse(true);
			range.moveEnd('character',pos);
			range.moveStart('character',pos);
			range.select();
		}
	});
	return this;
};
  popupSignup = function() {
  $('a.register').on('click', function(e) {

    var template = $(this).data('t');  
    var referrer = $(this).data('r');
    e.preventDefault();
    $.fancybox.open({
      href: '/'+lang.code+'/dialog-registration',
      type: 'ajax',
      margin: 0,
      helpers : {
        overlay : {
          css : {
            'background' : 'rgba(0,0,0,0.85)'
          }
        }
      },
      'afterShow': function () {
		  $( '.js-float-label-wrapper' ).FloatLabel();
		if ($(window).width() >= 768) {
			$('form.regForm input[name=reg_name]').focus();
			$('form.regForm input[name=reg_email]').val('@').setCursorPosition(0);
				
			
		} else {
			$('form.regForm input[name=reg_email]').on('click focus',function(){
					if (!$(this).val()) {
						$(this).val('@').setCursorPosition(0);
					}
				});
		}
        if (template)
        {
           $('[name=template]').val(template);
        }
        if (referrer)
        {
           $('[name=referring_page]').val(referrer);
        }
        $('[name=signup_page]').val(location.href);
        if (!bowser.msie) {
          $('[name=reg_name]').focus();
        }
        $('.signform').validate({
            rules: {
                'reg_email': {
                    required: true,
                    email: true
                },
                'reg_passwd': {
                    required: true,
                    minlength: 6
                }
            },
	  				highlight: function(element,errorClass,validClass) {
	  					$(element).parent().addClass(errorClass).removeClass(validClass);
	  				},
	  				unhighlight: function(element,errorClass,validClass) {
	  					$(element).parent().removeClass(errorClass).addClass(validClass);
	  				}
        });

      }
    });
  });
}
