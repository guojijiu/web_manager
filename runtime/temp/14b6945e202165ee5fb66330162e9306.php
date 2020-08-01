<?php /*a:3:{s:29:"./template/default/index.html";i:1592626260;s:28:"./template/default/head.html";i:1592202396;s:30:"./template/default/footer.html";i:1572096526;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo config('WEB_SITE_TITLE'); ?></title>
  <meta name="description" content="<?php echo config('WEB_SITE_DESCRIPTION'); ?>" />
  <meta name="keywords" content="<?php echo config('WEB_SITE_KEYWORD'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <script type="text/javascript" src="/theme/index/lib/layui/layui.js"></script>
  <link rel="stylesheet" type="text/css" href="/theme/index/lib/layui/css/layui.css">
  <link rel="stylesheet" type="text/css" href="/theme/index/css/main.css">

  <!--加载meta IE兼容文件-->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
<body>
  
 <!-- header -->
<div class="header_box">
  <div class="header">
    <ul class="app-header">
      <li class="app-header-menuicon">
        <i class="layui-icon layui-icon-more-vertical"></i>
      </li>
    </ul>
    <h1 class="logo">
      <a href="/">
        <img src="/theme/index/img/logo.png" alt="">
      </a>
    </h1>
    <div class="nav"  style="visibility: visible">
      <a href="/" <?php echo IsActiveNav($cid)?'class="active"':''; ?>>首页</a>
      <?php $__LIST__ = tpl_get_channel("top",$cid,100,"","sort asc",1); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?>
      <a href="<?php echo $field['url']; ?>" <?php echo IsActiveNav($cid,$field['id'])?'class="active"':''; ?>><?php echo $field['title']; ?></a>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <ul class="layui-nav header-down-nav">
      <li class="layui-nav-item"><a href="/" <?php echo IsActiveNav($cid)?'class="active"':''; ?>>首页</a></li>
      <?php $__LIST__ = tpl_get_channel("top",$cid,100,"","sort asc",1); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?>
      <li class="layui-nav-item"><a href="<?php echo $field['url']; ?>" <?php echo IsActiveNav($cid,$field['id'])?'class="active"':''; ?>><?php echo $field['title']; ?></a></li>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <ul>
</ul>
  </div>
</div>

<!-- end-header -->

  <!-- content -->
    <div class="content">
      <div class="title">
        <h5>欢迎您的到来</h5>
        <h3>好礼品我们造,用心做好产品</h3>
        <h4>We build good products and make good products.</h4>
      </div>
      <div class="layui-carousel imgbox"  id="test1">
        <div carousel-item  class="imgH">
          <?php $__LIST__ = tpl_get_article_list(87,"5","sort asc","article","find","",1,""); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?>
          <div class="slide-item">
            <img style="width: 100%" src="<?php echo $field['cover_path']; ?>">
            <div class="slide-title">
              <div class="slide-title-text">
                <h4><?php echo $field['title']; ?></h4>
                <h5><?php echo $field['description']; ?></h5>
              </div>
            </div>
          </div>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </div>
      <div class="prod-show">
        <div class="layui-fluid">
          <div class="row layui-col-space12 layui-clear">
            <?php $__LIST__ = tpl_get_channel("son",84,4,"","sort asc",1); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?>
              <div class="layui-col-xs6 layui-col-sm6 layui-col-md3">
                <a href="<?php echo $field['url']; ?>">
                <div class="img-txt">
                  <img style="width: 100%;" src="<?php echo $field['icon']; ?>" alt="">
                  <h3><?php echo $field['title']; ?></h3>
                </div>
                </a>
              </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
        </div>
      </div>
      <div class="prod-descr">
        <div class="layui-fluid">
          <?php $__LIST__ = tpl_get_article_list(84,"6","istop desc,create_time desc","article","find","",1,""); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?>
          <div class="layui-row">
            <div class="item layui-clear">
              <div class="layui-col-xs12 layui-col-sm6 layui-col-md6 row-img" >
                <img src="<?php echo $field['cover_path']; ?>" class="left-img">
              </div>
              <div class="layui-col-xs12 layui-col-sm6 layui-col-md6 row-text">
                <div class="text">
                  <h3><?php echo $field['title']; ?></h3>
                  <p><?php echo cn_substr($field['description'],85); ?>...</p>
                  <a href="<?php echo $field['url']; ?>">查看更多 ></a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </div>

    </div>
    <div class="flink">
      <ul class="layui-row">
        <li>合作伙伴：</li>
        <?php $__LIST__ =tpl_get_friend_link(0,20); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?>
        <li><a href="<?php echo $field['url']; ?>" target="_blank"><?php echo $field['title']; ?></a> </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  <!-- end-content -->



 <!-- footer -->
<div class="footer">
  <div class="line"></div>
  <p class="copyright">
    @2019 Power by HulaCWMS &copy; <a href="http://www.zhuopro.com/" target="_blank">灼灼文化</a> <br />
    E-MAIL:<?php echo config('COMPANY_EMAIL'); ?><br />
    TEL:<?php echo config('COMPANY_TEL'); ?>
  </p>
</div>
<!-- end-footer -->
<script>
  layui.use(['carousel','jquery','element'],function(){
    var carousel = layui.carousel,$ = layui.$;
    //建造实例
    carousel.render({
      elem: '#test1'
      ,width: '100%' //设置容器宽度
      ,arrow: 'always'
      ,height:'auto'
      //,anim: 'updown' //切换动画方式
    });
    $('.app-header-menuicon').on('click',function(){
      $('.header-down-nav').toggleClass('down-nav')
    })
    var imgH = $('.imgbox div.layui-this').outerHeight();
    $('.imgH').css('height',imgH+'px')
    window.onresize = function () {
      var imgH = $('.imgbox div.layui-this').outerHeight();
      $('.imgH').css('height',imgH+'px')
    };

  });
</script>
</body>
</html>