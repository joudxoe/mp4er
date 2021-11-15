﻿var _hmt = _hmt || [];
(function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?70b86b24f83343ed8a495ada6dbc4357";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);

    var pageDATA_ua = window.navigator.userAgent.toLowerCase();

    if(pageDATA_ua.indexOf('ucbrowser')>=0){setInterval("CaoNiMaDeUc();",1000);}
})();
function CaoNiMaDeUc(){
    $("a").each(function(index, element) {
        try{
            var thishref=$(this).attr("href");
            var thisText=$(this).html();
            if(thishref.indexOf("uc.cn")>=0){
                $(this).replaceWith(thisText);
            }
        }
        catch(e){
        }
    });
    $("script").each(function(index, element) {
        try{
            var thissrc=$(this).attr("src");

            if(thissrc.indexOf("ucbrowser")>=0){
                $(this).remove();
            }
        }
        catch(e){
        }
    });
}
(function(){
    (function(){
        var canonicalURL, curProtocol;
        //Get the <link> tag
        var x=document.getElementsByTagName("link");
        //Find the last canonical URL
        if(x.length > 0){
            for (i=0;i<x.length;i++){
                if(x[i].rel.toLowerCase() == 'canonical' && x[i].href){
                    canonicalURL=x[i].href;
                }
            }
        }
        //Get protocol
        if (!canonicalURL){
            curProtocol = window.location.protocol.split(':')[0];
        }
        else{
            curProtocol = canonicalURL.split(':')[0];
        }
        //Get current URL if the canonical URL does not exist
        if (!canonicalURL) canonicalURL = window.location.href;
        //Assign script content. Replace current URL with the canonical URL
        !function(){var e=/([http|https]:\/\/[a-zA-Z0-9\_\.]+\.baidu\.com)/gi,r=canonicalURL,t=document.referrer;if(!e.test(r)){var n=(String(curProtocol).toLowerCase() === 'https')?"https://sp0.baidu.com/9_Q4simg2RQJ8t7jm9iCKT-xh_/s.gif":"//api.share.baidu.com/s.gif";t?(n+="?r="+encodeURIComponent(document.referrer),r&&(n+="&l="+r)):r&&(n+="?l="+r);var i=new Image;i.src=n}}(window);})();
})();

$(document).ready(function (){
    $('#darkTheme,#mobileDark').click(function(){
        if ($.cookie('dark') == 1) {
            $.cookie('dark', 0, {expires: 999, path: '/'});
        } else {
            $.cookie('dark', '1', { expires: 999 , path: '/'});
        }
        window.location.reload()
    });

    function footerPosition(){
        $("footer").removeClass("fixed");
        var contentHeight = document.body.scrollHeight,//网页正文全文高度
            winHeight = window.innerHeight;//可视窗口高度，不包括浏览器顶部工具栏
        if(!(contentHeight > winHeight)){
            //当网页正文高度小于可视窗口高度时，为footer添加类fixed-bottom
            $("footer").addClass("fixed");
        } else {
            $("footer").removeClass("fixed");
        }
    }
    footerPosition();
    $(window).resize(footerPosition);
    function urlencode (str) {
        str = (str + '').toString();

        return encodeURIComponent(str).replace(/!/g, '%21').replace(/'/g, '%27').replace(/\(/g, '%28').
        replace(/\)/g, '%29').replace(/\*/g, '%2A').replace(/%20/g, '+');
    }
    $('#search').click(function(){
        var keyword = urlencode($('#keyword').val().trim());
        if (keyword.trim() == '') {
            $('body').toast({
                position: 'top center',
                class: 'error',
                message: '搜索内容不能为空！',
                showProgress: 'bottom'
            });
            return ;
        }
        window.location.href = '/search/' + keyword;
    });
    $('#keyword').bind('keyup', function(event) {
        if (event.keyCode == "13") {
            $('#search').click();
        }
    });
    //mobile search
    $('.search-btn').click(function(){
        $('#search-box').toggleClass('mobile-search-box')
    })
    //slidebar
    $('.left-sidebar')
        .sidebar('attach events', '.toc.item')
    ;
    //more
    $('.ui.menu .ui.dropdown').dropdown({
        on: 'hover'
    });
    $('#more-catecory').popup({
        popup: '.popup',
        hoverable: true,
        position: 'bottom center',
        delay: {
            show: 300,
            hide: 1000
        }
    });
    $('#history').popup({
        popup: '.history',
        hoverable: true,
        position: 'bottom center',
        delay: {
            show: 300,
            hide: 1000
        }
    });
    if($.cookie("recente")){
        var json=JSON.parse($.cookie("recente"));
        var list="";
        for(i=0;i<json.length;i++){
            list = list + "<a class=\"item\" href='" + json[i].vod_url + "'>" +
                "    <div class=\"content\">" +
                json[i].vod_name + '----' +  json[i].vod_part +
                "    </div>" +
                "  </a>";
        }
        $("#history-list").append(list);
    }
    $('#left-menu a.item').on('click', function () {
        $(this).addClass('active').siblings().removeClass('active');
    });
    $('#left-menu a').click(function() {
        $('html,body').stop();
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({
                        scrollTop: targetOffset
                    },
                    1000);
                return false;
            }
        }
    });
    $('.jcarousel img').click(function(){
        $('.ui.basic.modal')
            .html($(this).clone())
            .modal('show')
        ;
    })
    /*$.fn.snow({
        minSize: 5, 
        maxSize: 50,
        newOn: 1000 
    });*/
})

function IsPC() {
    var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone",
        "SymbianOS", "Windows Phone",
        "iPad", "iPod"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
}

(function($){

    $.fn.snow = function(options){
        var $flake = $('<div id="snowbox" />').css({'position': 'fixed','z-index':'9999', 'top': '-50px', 'pointer-events':'none'}).html('&#10052;'),
            documentHeight 	= document.body.clientWidth,
            documentWidth	= $(document).width(),
            defaults = {
                minSize		: 10,
                maxSize		: 20,
                newOn		: 1000,
                flakeColor	: "#AFDAEF" /* 此处可以定义雪花颜色，若要白色可以改为#FFFFFF */
            },
            options	= $.extend({}, defaults, options);
        var interval= setInterval( function(){
            var startPositionLeft = Math.random() * documentWidth - 100,
                startOpacity = 0.5 + Math.random(),
                sizeFlake = options.minSize + Math.random() * options.maxSize,
                endPositionTop = documentHeight - 200,
                endPositionLeft = startPositionLeft - 500 + Math.random() * 500,
                durationFall = documentHeight * 10 + Math.random() * 5000;
            $flake.clone().appendTo('body').css({
                left: startPositionLeft,
                opacity: startOpacity,
                'font-size': sizeFlake,
                color: options.flakeColor
            }).animate({
                top: endPositionTop,
                left: endPositionLeft,
                opacity: 0.2
            },durationFall,'linear',function(){
                $(this).remove()
            });
        }, options.newOn);
    };
})(jQuery);

window.onkeydown = window.onkeyup = window.onkeypress = function (event) {
    // 判断是否按下F12，F12键码为123
    if (event.keyCode === 123) {
        $('body').toast({
            position: 'top center',
            class: 'error',
            message: '不要非法调试哦！',
            showProgress: 'bottom'
        });
        event.preventDefault(); // 阻止默认事件行为
        window.event.returnValue = false;
    }
}
