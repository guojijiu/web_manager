<?php /*a:3:{s:29:"./template/default/about.html";i:1592202620;s:28:"./template/default/head.html";i:1592202396;s:30:"./template/default/footer.html";i:1572096526;}*/ ?>
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


  <!-- about-content -->
  <div class="about-content">
    <div class="about-big-img">
      <div class="text_box">
        <div class="text">
          <h3>我们的信念</h3>
          <p>我们有必要恢复对我们的理想、命运和我们自身的信念。我们活在世上不只是为了享乐和自我满足。我们负有创造历史的使命——不漠视过去、不毁弃过去、不向过去倒退，而是发奋向前、积极向上，为未来开辟新的前景。
        </div>
      </div>
    </div>
    <div class="about-info">
      <div class="img-texts">
        <div class="item">
          <div class="layui-fluid">
            <div class="layui-row">
              <div class="layui-col-xs12 layui-col-sm12 layui-col-md6 img-center">
                <img src="/theme/index/img/gy_img1.jpg">
              </div>
              <div class="layui-col-xs12 layui-col-sm12 layui-col-md6">
                <div class="text">
                  <h5>About us</h5>
                  <h4>关于我们</h4>
                  <p>
                    <?php echo $zzField['content']; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
      <div class="coreTeam_box">
        <div class="writebg"></div>
        <div class="coreTeam">
          <div class="layui-fluid">
            <?php $__LIST__ =[];array_push($__LIST__,get_document_category(94)); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?>
            <h3><?php echo $field['title']; ?></h3>
            <h4><?php echo $field['description']; ?></h4>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="layui-row layui-col-space15">
              <?php $__LIST__ = tpl_get_article_list(94,"6","sort asc","article","find","",1,""); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?>
              <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                <div class="imgTxt">
                  <img src="<?php echo $field['cover_path']; ?>" alt="">
                  <h6><?php echo $field['title']; ?></h6>
                </div>
              </div>
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- about-content -->


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