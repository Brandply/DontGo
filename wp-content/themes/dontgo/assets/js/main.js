$('.changeImg li').click(function(){
    var path = $(this).find('img').attr("src");
    //console.log(path)
    $('.changeComputer img').attr("src", path );
});