<?php /*a:2:{s:84:"/Users/liuwei/www/local/hulacwms_v2/application/admin/view/adminauthgroup/index.html";i:1592735982;s:75:"/Users/liuwei/www/local/hulacwms_v2/application/admin/view/public/base.html";i:1592735982;}*/ ?>
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
            <div class="layui-card-header">权限管理</div>
            <div class="layui-card-body">
                <div class="layui-row zz-row-operate">
                    <div class="zz-operate-btn-group">
                        <a class="layui-btn open-win" title="新增" href="<?php echo url('add'); ?>">新 增</a>
                        <a class="layui-btn layui-btn-danger zz-btn-delete-all" href="<?php echo url('del'); ?>">批量删除</a>
                    </div>
                </div>
                <div class="layui-form">
                    <table class="layui-table">
                        <thead>
                        <tr>
                            <th class=" layui-table-col-special" width="18px">
                                <input type="checkbox" lay-filter="zz-checkbox-table" lay-skin="primary">
                            </th>
                            <th>用户组</th>
                            <th>描述</th>
                            <th>授权</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><input type="checkbox" class="zz-table-chk-item" value="<?php echo htmlentities($vo['id']); ?>" lay-skin="primary"></td>
                            <td><?php echo htmlentities($vo['title']); ?></td>
                            <td><?php echo mb_strimwidth($vo['description'],0,60,"...","utf-8"); ?></td>
                            <td>
                                <a href="<?php echo url('access?id='.$vo['id']); ?>" >访问授权</a>
                                <a href="<?php echo url('user?id='.$vo['id']); ?>" >成员授权</a>
                            </td>
                            <td>
                                <input type="checkbox" lay-filter="zz-switch-display"  data-href="<?php echo url('set_status?id='.$vo['id']); ?>" name="status" value="<?php echo htmlentities($vo['status']); ?>" <?php echo $vo['status']==1 ? 'checked' : ''; ?> lay-skin="switch" lay-text="启用|禁用">
                            </td>
                            <td>
                                <a href="<?php echo url('edit?id='.$vo['id']); ?>" class="layui-btn layui-btn-xs layui-btn-normal open-win" title="编辑">编辑</a>
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