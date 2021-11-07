$(function(){
    //菜单点击
    $(document).on('click', ".J_menuItem", function () {
        var url = $(this).attr('href');
        var type=$(this).attr('data-type');
        $("#J_iframe").attr('src',url);
        if (!type){
            var txxt=$(this).text();
            var len= $('.navbar-header').children('a').length;;
            if (len > 9){
                $('.navbar-header').children("a").eq(1).remove();
            }
            var html= '<a class="J_menuItem minimalize-styl-2 btn" data-type="append"  href="'+url+'"><span className="nav-label">'+txxt+'</span></a>';
            $('.navbar-header').append(html);
        }
        return false;
    })
    // $(".J_menuItem").on('click',function(){
    //
    // });
});