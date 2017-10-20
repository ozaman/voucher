

		$(document).ready(function () {

    // $('#openBtn').click(function () {
    //     $('#myModal').modal({
    //         show: true
    //     })
    // });

 //    $('.modal').on('show.bs.modal', function (event) {

 //        var idx = $('.modal:visible').length;
 //       // $(this).css('z-index', 1051 + (10 * idx));
 //    });
 //    $('.modal').on('shown.bs.modal', function (event) {
 //    	//alert("aaa")
 //        var idx = ($('.modal:visible').length) - 1; // raise backdrop after animation.
 //        //$('.modal-backdrop').not('.stacked').css('z-index', 1051 + (10 * idx));
 //        $('.modal-backdrop').not('.stacked').addClass('stacked');
 //    });
 //    $('.modal').on('hidden.bs.modal', function (event) {
 //  // do something…
	//   var idx = ($('.modal:visible').length) - 1;
	//   //alert(idx)
	//   $('.modal-backdrop').not('.stacked').css('z-index', '1050');
	//   $('.modal-backdrop').not('.stacked').css('overflow-y', 'auto');
	//   var target = document.querySelector('#stylepoupmyinfo');
	//   	console.log(target)
 //            observer.observe(target, {
 //                attributes: true
 //          });
	// });
    



$(document).on({
		'show.bs.modal': function () {
			var zIndex = 1050 + (10 * $('.modal:visible').length);
			$(this).css('z-index', zIndex);
			setTimeout(function() {
				$('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
			}, 0);
		},
		'hidden.bs.modal': function() {
			if ($('.modal:visible').length > 0) {
				// restore the modal-open class to the body element, so that scrolling works
				// properly after de-stacking a modal.
				setTimeout(function() {
					$(document.body).addClass('modal-open');
				}, 0);
			}
		}
    }, '.modal');

});

//     $(document).ready(function(){
 
 
//     $(".modal-body").scroll(function(){
//     var x = $(window).scrollTop();
  
//     //console.log(x)
     
      


//   });
  
        
        
 
    
// });

