// page init
$(document).ready(function() {

	"use strict";

	jQuery("#contactForm").validator().on("submit", function (event) {

		"use strict";

		if (event.isDefaultPrevented()) {
			// handle the invalid form...
			formError();
			submitMSG(false, "Please Follow Error Messages and Complete as Required");
		} else {
			// everything looks good!
			event.preventDefault();
			submitForm();
		}
	});

	function submitForm(){
		
		"use strict";

		// Initiate Variables With Form Content
		var txtname = $("#txtname").val();
		var txtemail = $("#txtemail").val();
		var txtmessage = $("#txtmessage").val();

		$.ajax({
			type: "POST",
			url: "php/form-process.php",
			data: "txtname=" + txtname + "&txtemail=" + txtemail + "&txtmessage=" + txtmessage,
			success : function(text){
				if (text == "success"){
					formSuccess();
				} else {
					formError();
					submitMSG(false,text);
				}
			}
		});
	}

	function formSuccess(){
		
		"use strict";

		$("#contactForm")[0].reset();
		submitMSG(true, "Thank you for your submission :)")
	}

	function formError(){
		
		"use strict";

		$("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			$(this).removeClass();
		});
	}

	function submitMSG(valid, msg){
		
		"use strict";

		if(valid){
			var msgClasses = "success form-message";
		} else {
			var msgClasses = "error form-message";
		}
		$("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
	}

	initAnchors();
	// initialize smooth anchor links
	function initAnchors() {
		new SmoothScroll({
			anchorLinks: 'a[href^="#"]:not([href="#"])',
			activeClasses: 'parent'
		});
	}

	initFixedBlocks();
	// handle fixed blocks position
	function initFixedBlocks() {
		var win = jQuery(window);
		var blocks = jQuery('#nav');

		var fixPosition = function() {
			var scrollLeft = win.scrollLeft();
			blocks.css({
				marginLeft: -scrollLeft
			});
		};
		fixPosition();
		win.bind('scroll resize', fixPosition);
	}


	initSlickSlider();
	// Slick Slider init
	function initSlickSlider() {
		"use strict";

		jQuery('.client-feedback').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			centerPadding: '0',
			asNavFor: '.client-slider'
		});
		jQuery('.client-slider').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			centerPadding: '0',
			asNavFor: '.client-feedback',
			focusOnSelect: true
		});
	}
   // EASY PIE CHART JS

	  if ($('.chart').length > 0) {
	    $('.chart').easyPieChart({
	      barColor: '#ef4836',
	      scaleColor:false,
	      easing: 'easeOutBounce',
	      scaleLength: 4,
	      lineCap: 'square',
	      lineWidth:14,
	      size:124,
	      animate: {
	                duration: 2500,
	                enabled: true
	            }
	    });
	  }	

		initStyleChanger();
		// style changer
		function initStyleChanger() {
		    "use strict";
		    
		    var element = jQuery('#style-changer');

		    if(element) {
		        $.ajax({
		            url: element.attr('data-src'),
		            type: 'get',
		            dataType: 'text',
		            success: function(data) {
		                var newContent = jQuery('<div>', {
		                    html: data
		                });

		                newContent.appendTo(element);
		            }
		        });
		    }
		}  

});


