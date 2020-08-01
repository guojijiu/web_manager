<?php /*a:1:{s:75:"/Users/liuwei/www/local/hulacwms_v2/application/admin/view/index/index.html";i:1592735982;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HulaCWMS - 呼啦企业网站管理系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/theme/admin/lib/layuiadmin/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/theme/admin/lib/layuiadmin/style/admin.css" media="all">
    <link rel="stylesheet" href="/theme/admin/css/style.css" media="all">
    <script src="/theme/admin/lib/layuiadmin/layui/layui.js"></script>
    <script src="/theme/admin/lib/jquery-2.0.3.min.js"></script>
    <script src="/theme/admin/js/tools.js"></script>

</head>
<body>

<div id="LAY_app"  class="layui-layout-body">
    <div class="layui-layout layui-layout-admin">
        <div class="layui-header">
            <!-- 头部区域 -->
            <ul class="layui-nav layui-layout-left">
                <li class="layui-nav-item layadmin-flexible" lay-unselect>
                    <a href="javascript:;" layadmin-event="flexible" title="侧边伸缩">
                        <i class="layui-icon layui-icon-shrink-right" id="LAY_app_flexible"></i>
                    </a>
                </li>
                <li class="layui-nav-item layui-hide-xs" lay-unselect>
                    <a href="/index.php" target="_blank" title="前台">
                        <i class="layui-icon layui-icon-website"></i>
                    </a>
                </li>
                <li class="layui-nav-item" lay-unselect>
                    <a href="javascript:void(0);" layadmin-event="refresh" title="刷新">
                        <i class="layui-icon layui-icon-refresh-3"></i>
                    </a>
                </li>
            </ul>
            <ul class="layui-nav layui-layout-right" lay-filter="layadmin-layout-right">
                <li class="layui-nav-item layui-hide-xs" lay-unselect>
                    <a href="javascript:;" layadmin-event="theme">
                        <i class="layui-icon layui-icon-theme"></i>
                    </a>
                </li>
                <li class="layui-nav-item layui-hide-xs" lay-unselect>
                    <a href="javascript:;" layadmin-event="note">
                        <i class="layui-icon layui-icon-note"></i>
                    </a>
                </li>
                <li class="layui-nav-item" lay-unselect>
                    <a href="javascript:;">
                        <cite><?php echo htmlentities($member['nickname']); ?></cite>
                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('adminmember/nickname?id='.$member['id']); ?>" win-width="500" win-height="200" class="open-win">修改昵称</a></dd>
                        <dd><a href="<?php echo url('adminmember/edit?id='.$member['id']); ?>" win-width="500" win-height="305" class="open-win">修改密码</a></dd>
                        <hr>
                        <dd layadmin-event="logout" style="text-align: center;"><a class="ajax-post" href="<?php echo url('admin/logout'); ?>">退出</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item layui-hide-xs" lay-unselect>
                    <a href="javascript:;" layadmin-event="fullscreen">
                        <i class="layui-icon layui-icon-screen-full"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!-- 侧边菜单 -->
        <div class="layui-side layui-side-menu">
            <div class="layui-side-scroll">
                <a class="layui-logo" href="<?php echo url('/'); ?>">
                    <span>呼啦企业网站管理系统</span>
                </a>

                <ul class="layui-nav layui-nav-tree" lay-shrink="all" id="LAY-system-side-menu" lay-filter="layadmin-system-side-menu">
                    <?php if(is_array($__MENU__) || $__MENU__ instanceof \think\Collection || $__MENU__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__MENU__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li data-name="home" class="layui-nav-item layui-nav-item">
                        <a <?php if($vo['url']): ?>href="<?php echo url($vo['url']); ?>" <?php endif; ?> lay-tips="<?php echo htmlentities($vo['title']); ?>" lay-direction="2">
                            <i class="layui-icon <?php echo htmlentities($vo['icon']); ?>"></i>
                            <cite><?php echo htmlentities($vo['title']); ?></cite>
                        </a>
                        <?php if(isset($vo['child'])): ?>
                        <dl class="layui-nav-child">
                            <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                            <dd data-name="console">
                                <a <?php if($item['url']): ?>href="<?php echo url($item['url']); ?>"<?php endif; ?>><?php echo htmlentities($item['title']); ?></a>
                            </dd>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </dl>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>

        <!-- 主体内容 -->
        <div class="layui-body" id="LAY_app_body">
            <div class="layadmin-tabsbody-item layui-show">
                <iframe frameborder="0" class="layadmin-iframe" id="zz-iframe"></iframe>
            </div>
        </div>

        <!-- 辅助元素，一般用于移动设备下遮罩 -->
        <div class="layadmin-body-shade" layadmin-event="shade"></div>
    </div>
</div>
<script src="/theme/admin/js/index.js"></script>
<script>
    layui.config({
        base: '/theme/admin/lib/layuiadmin/' //静态资源所在路径
    }).extend({
        index: 'lib/index' //主入口模块
    }).use(['index'],function () {
        initIndex();
    });

</script>
</body>
</html>