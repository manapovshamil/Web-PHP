$(document).ready(function() {
//      $("#newsticker").jCarouselLite({
//           vertical: true,
//           btnNext: "#news-next",
//           btnPrev: "#news-prev",
//           visible: 2,
//           auto: 3000,
//           speed: 1000
//  });
$("#style-grid").click(function(){
    $("#block-tovar-grid").show();
    $("#block-tovar-list").hide();
    $("#style-grid").attr("src", "images/grid-active.png");
     $("#style-list").attr("src", "images/icon-list.png");
     $.cookie('select_style', 'grid');
});

$("#style-list").click(function(){
    $("#block-tovar-grid").hide();
    $("#block-tovar-list").show();
    $("#style-list").attr("src", "images/list-active.png");
    $("#style-grid").attr("src", "images/icon-grid.png");
    $.cookie('select_style', 'list');
});

if ($.cookie('select_style') == 'grid'){
$("#block-tovar-grid").show();
$("#block-tovar-list").hide();


$("#style-grid").attr("src", "images/grid-active.png");
$("#style-list").attr("src", "images/icon-list.png");
}else{

    $("#block-tovar-grid").hide();
    $("#block-tovar-list").show();
    $("#style-list").attr("src", "images/list-active.png");
    $("#style-grid").attr("src", "images/icon-grid.png");
}

$("#select-sort").click(function(){
    $("#sorting-list").slideToggle(200);
});
$('#block-category > ul > li > a').click(function(){
 if ($(this).attr('class') !='active'){
  // черех парамметр this передается на какую ссылку нажали и применяется актив
  $('#block-category > ul > li > ul').slideUp(400); //закрыть отвечает
  $(this).next().slideToggle(400); // открыть
 $('#block-category > ul > li > a').removeClass('active'); //удаление классов со всех категорий
 $(this).addClass('active');//присваеваем класс к конкретной категории (но класс нужно прописать в стилях) 
 $.cookie('select_cat', $(this).attr('id')); //указ на плагин кук создается файл с селект_кат и указ ай ди (ИНДЕКС 1(2,3))
 }else
 {
  $('#block-category > ul > li > a').removeClass('active');
  $('#block-category > ul > li >ul').slideUp(400);
  $.cookie('select_cat', '');
 }
});

if ($.cookie('select_cat') != '')
{
$('#block-category > ul > li > #'+$.cookie('select_cat')).addClass('active').next().show();
}

});