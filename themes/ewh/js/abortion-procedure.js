(function($){
  $('.tab-1').addClass('tab-1-show');
  $('.before').parent().addClass('highlight-arrow');
$('.arrow > a').on('click', function(){
var clicked = $(this);
$('.arrow').removeClass('highlight-arrow');
if(clicked.hasClass('before')){
  $('.tab-1').addClass('tab-1-show');
  $('.tab-2').removeClass('tab-2-show');
  $('.tab-3').removeClass('tab-3-show');
  clicked.parent().addClass('highlight-arrow');
} else if(clicked.hasClass('during')){
  $('.tab-1').removeClass('tab-1-show');
  $('.tab-2').addClass('tab-2-show');
  $('.tab-3').removeClass('tab-3-show');
  clicked.parent().addClass('highlight-arrow');
} else if(clicked.hasClass('after')){
  $('.tab-1').removeClass('tab-1-show');
  $('.tab-2').removeClass('tab-2-show');
  $('.tab-3').addClass('tab-3-show');
  clicked.parent().addClass('highlight-arrow');
}
});
})(jQuery);