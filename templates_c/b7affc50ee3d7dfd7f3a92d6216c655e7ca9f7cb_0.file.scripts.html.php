<?php
/* Smarty version 3.1.40, created on 2021-11-15 13:06:16
  from 'C:\xampp\htdocs\templates\scripts.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61924d3874c575_60863491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7affc50ee3d7dfd7f3a92d6216c655e7ca9f7cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\scripts.html',
      1 => 1636977841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61924d3874c575_60863491 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 id="js5297">
    $(function () {
        $('#comments').replaceface($('#comments').html());
    });
    $('.cards>.card>.image img')
        .visibility({
            type: 'image',
            transition: 'fade in',
            duration: 1000
    });
    $('#pbSlider0').pbTouchSlider({
        slider_Wrap: '#pbSliderWrap0',
        slider_Threshold: 10,
        slider_Speed: 600,
        slider_Ease: 'ease-out',
        slider_Drag: true,
        slider_Arrows: {
            enabled: true
        },
        slider_Dots: {
            class: '.o-slider-pagination',
            enabled: true
        },
        slider_Breakpoints: {
            default: {
                height: 300
            },
            tablet: {
                height: 250,
                media: 1024
            },
            smartphone: {
                height: 200,
                media: 768
            }
        }
    });
    // $('body').toast({
    //     position: 'top right',
    //     class: 'error',
    //     message: '电脑端强烈建议使用系统自带Edge或者Chrome、火狐等国外浏览器访问本站，手机端建议使用Chrome、Alook、火狐、Opera等国外浏览器，如若将来某天域名又被哪只狗给举报了将不再更换域名，强烈抵制UC、夸克（其实这两个浏览器都是一个旗下的）流氓浏览器！',
    //     showProgress: 'bottom'
    // });
    var adUrl = "http://downmov.com";
    if (!IsPC()) {
        //document.write('<?php echo '<script'; ?>
 src="/js/aes.js?v=3.0"><\/script>')
        $('body').append('<div class="ayx" style="position: fixed;bottom: -10px;right:0;z-index:999;width:150px;display:none;"><b style="position:absolute;right:0;top:0px;width:33px;height:33px;text-align:center" onclick="$(this).parent().remove();"><img src="/statics/images/close.png"/></b><a  href="javascript:void(0)" rel="nofollow" target="_new"><img src="https://dimg04.c-ctrip.com/images/0101n120009408g7i1255.jpg" width="100%"/></a></div>');
    } else {
        $('#index-pic').attr('style', 'width:100%;margin-top:-20px'); $('body').append('<div class="ayx" style="position: fixed;bottom: -10px;right:0;z-index:999;width:250px;display:none;"><b style="position:absolute;right:0;top:0px;width:33px;height:33px;text-align:center" onclick="$(this).parent().remove();"><img src="/statics/images/close.png"/></b><a  href="javascript:void(0)" rel="nofollow" target="_new"><img src="https://dimg04.c-ctrip.com/images/0101n120009408g7i1255.jpg" width="100%"/></a></div>');
    }
    // $('.ayx').click(function () { window.open(adUrl); });
<?php echo '</script'; ?>
><?php }
}
