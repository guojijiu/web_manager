<?php /*a:2:{s:80:"/Users/liuwei/www/local/hulacwms_v2/application/admin/view/databases/export.html";i:1592735982;s:75:"/Users/liuwei/www/local/hulacwms_v2/application/admin/view/public/base.html";i:1592735982;}*/ ?>
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
            <div class="layui-card-header">数据库管理</div>
            <div class="layui-card-body">
                <div class="layui-tab">
                    <ul class="layui-tab-title">
                        <li class="layui-this">备份数据库</li>
                        <li><a href="<?php echo url('?type=import'); ?>">还原数据库</a></li>
                    </ul>
                    <div class="layui-tab-content layui-row">
                        <div class="layui-tab-item layui-show">
                            <div class="layui-row zz-row-operate">
                                <div class="zz-operate-btn-group">
                                    <a  id="export" class="layui-btn zz-btn-back no-refresh" href="javascript:;" >立即备份</a>
                                    <a class="layui-btn zz-btn-select-all zz-btn-optimize no-refresh" href="<?php echo url('optimize'); ?>">优化表</a>
                                    <a class="layui-btn zz-btn-select-all zz-btn-repair no-refresh" href="<?php echo url('repair'); ?>">修复表</a>
                                </div>
                            </div>

                            <div class="layui-form">
                                <table class="layui-table">
                                    <thead>
                                    <tr>
                                        <th class=" layui-table-col-special" width="18px">
                                            <input type="checkbox" lay-filter="zz-checkbox-table" lay-skin="primary">
                                        </th>
                                        <th>表名</th>
                                        <th width="120">数据量</th>
                                        <th width="120">数据大小</th>
                                        <th width="160">创建时间</th>
                                        <th width="120">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$table): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td><input type="checkbox" class="zz-table-chk-item" value="<?php echo htmlentities($table['name']); ?>" lay-skin="primary"></td>
                                        <td><?php echo htmlentities($table['name']); ?></td>
                                        <td><?php echo htmlentities($table['rows']); ?></td>
                                        <td><?php echo htmlentities(format_bytes($table['data_length'])); ?></td>
                                        <td><?php echo htmlentities($table['create_time']); ?></td>
                                        <td class="action">
                                            <a class="ajax-post layui-btn layui-btn-xs no-refresh" href="<?php echo url('optimize?ids='.$table['name']); ?>">优化表</a>&nbsp;
                                            <a class="ajax-post layui-btn layui-btn-xs no-refresh" href="<?php echo url('repair?ids='.$table['name']); ?>">修复表</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<script>
    var loadIndex;
    layui.use(['jquery'], function(){
        var $=layui.$;
        var actionUrl="<?php echo url('export'); ?>";
        $(function(){
            var $export = $("#export");
            $('.zz-btn-back').click(function () {
                var that = this;
                //判断是否选中要删除的对象
                var delDom=$(".layui-table .zz-table-chk-item:checked");

                if(delDom.length==0){
                    layer.msg('请选择要操作的数据');
                    return false;
                }
                var delItem=new Array();
                delDom.each(function (e) {
                    delItem.push(this.value);
                })

                loadIndex = parent.layer.open({
                    type: 1,
                    title:'',
                    area:'440px',
                    skin: 'layui-layer-demo', //样式类名
                    closeBtn: 0, //不显示关闭按钮
                    anim: 2,
                    content: '<div id="zz-div-backdata" class="zz-div-backdata"><i class="layui-icon layui-icon-loading layui-icon layui-anim layui-anim-rotate layui-anim-loop"></i><div class="content">正在备份数据库，请稍等...</div></div>'
                });

                $.post(
                    actionUrl,
                    {ids:delItem},
                    function(data){
                        if(data.code==1){
                            updateBackDataInfo("开始备份，请不要关闭本页面！");
                            backup(data.data.tab);
                            window.onbeforeunload = function(){ return "正在备份数据库，请不要关闭！" }
                        } else {
                        	parent.layer.close(loadIndex);
                            parent.layer.msg(data.msg?data.msg:'操作失败',{icon: 2,time:data.wait*1000});
                        }
                    },
                    "json"
                );
                return false;
            });
        });

        function updateBackDataInfo(info) {
            $('#zz-div-backdata>.content', parent.document).text(info);
        }

        function backup(tab){
            $.get(actionUrl, tab, function(data){
                if(data.code){
                    updateBackDataInfo(data.msg);
                    if(!data.data){
                        parent.layer.close(loadIndex);
                        parent.layer.msg(data.msg?data.msg:'操作成功',{icon: 1,time:data.wait*1000});
                        window.onbeforeunload = function(){ return null }
                        return;
                    }
                    backup(data.data.tab);
                } else {
                    parent.layer.close(loadIndex);
                    parent.layer.msg(data.msg?data.msg:'操作失败',{icon: 2,time:data.wait*1000});
                }
            }, "json");
        }

    });
</script>

</body>
</html>