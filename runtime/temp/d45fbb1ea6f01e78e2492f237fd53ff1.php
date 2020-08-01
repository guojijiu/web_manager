<?php /*a:2:{s:79:"/Users/liuwei/www/local/hulacwms_v2/application/admin/view/adminmenu/index.html";i:1592735982;s:75:"/Users/liuwei/www/local/hulacwms_v2/application/admin/view/public/base.html";i:1592735982;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HulaCWMS - 呼啦企业网站管理系统</title>
    <meta content="webkit" name="renderer">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0"
          name="viewport">
    <link href="/theme/admin/lib/layuiadmin/layui/css/layui.css" media="all" rel="stylesheet">
    <link href="/theme/admin/lib/layuiadmin/style/admin.css" media="all" rel="stylesheet">
    <link href="/theme/admin/css/style.css" media="all" rel="stylesheet">
    <script src="/theme/admin/lib/layuiadmin/layui/layui.js"></script>
    <script src="/theme/admin/lib/jquery-2.0.3.min.js"></script>
    <script src="/theme/admin/js/tools.js"></script>
    <script src="/theme/admin/js/base.js"></script>
    <script>
        //全局上传文件服务器地址，默认是上传图片的，可在其他页面重新
        var UPLOAD_URL = "<?php echo url('upload/picture'); ?>";
    </script>
</head>
<body>
<div class="layui-fluid">
    
<div class="layui-row layui-col-space15">
    <div class="layui-col-md12">
        <div class="layui-card">
            <div class="layui-card-header">后台菜单 <?php if($pid != '0'): ?>[<a href="<?php echo url('?pid='.$topMenu['pid']); ?>">当前菜单：<?php echo htmlentities($topMenu['title']); ?></a>]<?php endif; ?></div>
            <div class="layui-card-body">
                <div class="layui-row zz-row-operate">
                    <div class="zz-operate-btn-group">
                        <a class="layui-btn open-win" title="新增后台菜单" href="<?php echo url('add?pid='.$pid); ?>">新 增</a>
                        <a class="layui-btn layui-btn-danger zz-btn-delete-all" href="<?php echo url('del'); ?>">批量删除</a>
                    </div>
                </div>

                <div class="layui-form">
                    <table class="layui-table">
                        <thead>
                        <tr>
                            <th width="18px">
                                <input type="checkbox" lay-filter="zz-checkbox-table" lay-skin="primary">
                            </th>
                            <th>ID</th>
                            <th>名称</th>
                            <th>上级菜单</th>
                            <th>URL</th>
                            <th width="60px">排序</th>
                            <th>是否隐藏</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><input type="checkbox" class="zz-table-chk-item" value="<?php echo htmlentities($vo['id']); ?>" lay-skin="primary"></td>
                            <td><?php echo htmlentities($vo['id']); ?></td>
                            <td><a class="layui-table-link" href="<?php echo url('index?pid='.$vo['id']); ?>"><?php echo htmlentities($vo['title']); ?></a></td>
                            <td><?php echo htmlentities($topMenu['title']); ?></td>
                            <td><?php echo htmlentities($vo['url']); ?></td>
                            <td>
                                <form action="<?php echo url('sort'); ?>" method="post" class="layui-form zz-form-datalist" lay-filter="zz-form-<?php echo htmlentities($vo['id']); ?>">
                                    <input type="hidden" value="<?php echo htmlentities($vo['id']); ?>" name="id">
                                    <input type="text" name="sort" data-source="<?php echo htmlentities($vo['sort']); ?>" lay-verify="required|number" autocomplete="off" value="<?php echo htmlentities($vo['sort']); ?>" class="layui-input zz-table-input">
                                </form>
                            </td>
                            <td class="layui-table-cell">
                               <input type="checkbox" lay-filter="zz-switch-display"  data-href="<?php echo url('hide?id='.$vo['id']); ?>" name="hide" value="<?php echo htmlentities($vo['hide']); ?>" <?php echo $vo['hide']==0 ? 'checked' : ''; ?> lay-skin="switch" lay-text="显示|隐藏">
                            </td>
                            <td>
                                <a href="<?php echo url('add?pid='.$vo['id']); ?>" class="layui-btn layui-btn-primary layui-btn-xs open-win" title="添加后台子菜单">添加子菜单</a>
                                <a href="<?php echo url('edit?id='.$vo['id']); ?>" class="layui-btn layui-btn-xs layui-btn-normal open-win" title="编辑后台菜单">编辑</a>
                                <a href="<?php echo url('del?ids='.$vo['id']); ?>" class="layui-btn layui-btn-danger layui-btn-xs confirm ajax-post">删除</a>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                        </tbody>
                    </table>
                    <?php echo $page; ?>

                </div>
            </div>
        </div>
    </div>
</div>


</div>

</body>
</html>