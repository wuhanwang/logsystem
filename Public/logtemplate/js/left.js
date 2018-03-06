//导航经过改变宽度和颜色
$(".headnav li").click(function(){
    var index = $(this).index();
    //alert(index);
    $(this).addClass("current_menu").siblings().removeClass('current_menu');
    //头部导航和左边导航对应
    $(".leftmenu").find(".leftmenu_0").eq(index).removeClass("hidden").siblings().addClass('hidden');

});
//头部导航和左边导航对应
// bannerplay($(".leftmenu"),$(".leftmenu_0"),$(".headnav li"),4,false,2);

//左边导航点击上拉
$(".leftmenu dl dt").click(function(){
    if(false == $(this).siblings("dd").is(":visible")){//如果不可见点击后变蓝色
        $(this).css('background-position','right -30px');
    }else{
        $(this).css('background-position','right 0px');//可见点击后变红色
    }

    $(this).siblings('dd').slideToggle('fast').siblings('dt');//.end()

});
//点击隐藏菜单
var i=1;

//替换文字并显示隐藏左侧导航
function replace(){
    var i=j=1;
    var x=$(".link_1");
    var y=$(".ton");
    y.click(function(){
        i++;
        if(i%2==0){
            //alert(i)
            y.text("显示菜单");
            $('#rightmain').addClass('rightmain1').removeClass('rightmain');
        }else{
            y.text("隐藏菜单");
            $('#rightmain').addClass('rightmain').removeClass('rightmain1');
        }

    })
    x.click(function(){
        j++;
        //alert(j);
        j%2==0 ? $(".leftmenu").css('display','none') : $(".leftmenu").css('display','block');
    })
}
replace();

//左侧导航切换出右侧页面ifream
$(".leftmenu dl dd ul li a").click(function(){
    var _link = $(this).attr('_link');
    //alert(_link)
    $("#main").attr('src',_link);
    $(this).addClass('current-menuleft').parent().siblings().children().removeClass('current-menuleft');
    $(this).parents('dl').siblings().find('dd ul li a').removeClass('current-menuleft');

});
