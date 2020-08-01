<?php /*a:1:{s:75:"/Users/liuwei/www/local/hulacwms_v2/application/admin/view/admin/login.html";i:1592735982;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登录 - 呼啦企业网站管理系统</title>
    <meta content="webkit" name="renderer">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0"
          name="viewport">
    <link href="/theme/admin/lib/layuiadmin/layui/css/layui.css" media="all" rel="stylesheet">
    <link href="/theme/admin/lib/layuiadmin/style/admin.css" media="all" rel="stylesheet">
    <link href="/theme/admin/lib/layuiadmin/style/login.css" media="all" rel="stylesheet">
</head>
<body>

<div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;">
    <div class="layui-card">
        <div class="layui-card-body">
            <div class="layadmin-user-login-main">
                <div class="layadmin-user-login-box layadmin-user-login-header">
                    <h2>HulaCWMS</h2>
                    <p>安全高效-呼啦企业网站管理系统</p>
                </div>
                <form class="layadmin-user-login-box layadmin-user-login-body layui-form" action="<?php echo url(''); ?>">
                    <div class="layui-form-item">
                        <label class="layadmin-user-login-icon layui-icon layui-icon-username"
                               for="LAY-user-login-username"></label>
                        <input class="layui-input" id="LAY-user-login-username" lay-verify="required" name="username"
                               placeholder="用户名" type="text">
                    </div>
                    <div class="layui-form-item">
                        <label class="layadmin-user-login-icon layui-icon layui-icon-password"
                               for="LAY-user-login-password"></label>
                        <input class="layui-input" id="LAY-user-login-password" lay-verify="required" name="password"
                               placeholder="密码" type="password">
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-row">
                            <div class="layui-col-xs7">
                                <label class="layadmin-user-login-icon layui-icon layui-icon-vercode"
                                       for="LAY-user-login-vercode"></label>
                                <input class="layui-input" id="LAY-user-login-vercode" maxlength="4" lay-verify="required" name="code"
                                       placeholder="图形验证码" type="text">
                            </div>
                            <div class="layui-col-xs5">
                                <div style="margin-left: 10px;">
                                    <img src="<?php echo url('img_captcha'); ?>" alt="captcha" id="img-captcha" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <button class="layui-btn layui-btn-fluid" lay-filter="LAY-user-login-submit" lay-submit>登&nbsp;录
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="layui-trans layadmin-user-login-footer">
        <p>© <a href="http://www.zhuopro.com/" target="_blank">灼灼文化</a></p>
    </div>

</div>
<script src="/theme/admin/lib/layuiadmin/layui/layui.js"></script>
<script src="/theme/admin/lib/jquery-2.0.3.min.js"></script>
<script src="/theme/admin/js/tools.js"></script>
<script>
    layui.use(['form'], function () {
        var form = layui.form;
		//清除栏目分类记录的本地存储
		layui.data('categoryTree', null);

        //点击刷新验证码
        $('#img-captcha').click(function () {
            refreshCaptcha();
        });

        //提交表单
        form.on('submit(LAY-user-login-submit)', function (fromData) {
            zzpost(fromData.form.action,fromData.field,function (data) {
                zzSuccess(data.msg);
                top.location.href="<?php echo url('index/index'); ?>";
                return true;
            },function (data) {
                refreshCaptcha();
                zzError(data.msg,data.wait);
                return true;
            });
            return false;
        });

        //刷新验证码
        function refreshCaptcha(){
            var imgSrc="<?php echo url('img_captcha'); ?>";
            //点击刷新验证码
            $('#img-captcha').attr('src',imgSrc+'?t='+Math.random());
        }
    });
</script>
</body>
</html>