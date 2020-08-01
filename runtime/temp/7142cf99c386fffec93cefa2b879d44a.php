<?php /*a:3:{s:31:"./template/default/service.html";i:1591844156;s:28:"./template/default/head.html";i:1592202396;s:30:"./template/default/footer.html";i:1572096526;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $zzField['meta_title']; ?>_<?php echo config('WEB_SITE_TITLE'); ?></title>
  <meta name="keywords" content="<?php echo $zzField['keywords']; ?>" />
  <meta name="description" content="<?php echo $zzField['description']; ?>" />
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


  <!-- service-content -->
  <div class="service-content">
    <div class="service-big-img">
      <div class="service-img-text">
        <h3>用心服务</h3>
      </div>
    </div>

    <div class="content-introduction">
      <div class="layui-fluid">
        <div class="layui-row">
          <div class="layui-col-xs12 layui-col-sm12 layui-col-md6">
            <div class="text">
              <h2>我们的服务</h2>
              <div class="line"></div>
              <p>
                <?php $__LIST__ =[];array_push($__LIST__,tpl_get_article(126,'article')); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?>
                <?php echo html2text($field['content']); ?>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </p>
            </div>
          </div>
          <div class="layui-col-xs12 layui-col-sm12 layui-col-md6">
            <div class="img-text-box layui-clear">
              <div class="layui-row">
                <?php $__LIST__ = tpl_get_channel("son",84,4,"","sort asc",1); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?>
                <div class="layui-col-xs6 layui-col-sm3 layui-col-md6">
                  <div class="item">
                    <img src="/theme/index/img/fw_icon1.png" alt="">
                    <h5><?php echo $field['title']; ?></h5>
                  </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>

    <div class="service-process-box">
      <div class="service-process">
        <div class="layui-fluid">    
            <h3 class="title">成品流程</h3>
            <div class="process-centent">
              <div class="layui-row layui-col-space15">
                <?php $__LIST__ = tpl_get_article_list(93,"4","sort asc","article","find","",1,""); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?>
                <div class="layui-col-xs12 layui-col-sm6 layui-col-md3">
                    <div class="item">
                      <h4>0<?php echo $i; ?></h4>
                      <h5><?php echo $field['title']; ?></h5>
                      <p><?php echo $field['description']; ?></p>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </div>
            </div>  
        </div>
      </div>
    </div>

    <div class="service-contact">
      <div class="service-contact-box">
        <div class="layui-fluid">
          <div class="layui-row">
            <div class="layui-col-xs12 layui-col-sm6 layui-col-md7">
              <div class="map-img">
              </div>
            </div>
             <div class="layui-col-xs12 layui-col-sm5  layui-col-md4 fr">
                <div class="cantact-info">
                  <h3>联系我们</h3>
                  <div class="item">
                    <p><i class="layui-icon layui-icon-location"></i>地址:<span><?php echo config('COMPANY_ADD'); ?></span></p>
                    <p><i class="layui-icon layui-icon-dialogue"></i>电话:<span><?php echo config('COMPANY_TEL'); ?></span></p>
                    <p><i class="layui-icon layui-icon-layouts"></i>邮箱:<span><?php echo config('COMPANY_EMAIL'); ?></span></p>
                  </div>
                </div>
                
            </div >
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- service-content -->


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