<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title>美优萌宠—注册</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="shortcut icon" href="/static/img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="/static/css/global/reset.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/global/layout.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/module/form.css" />
    
    <link rel="stylesheet" type="text/css" href="/static/css/module/footer.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/page/login/v1.css" />
</head>

<body>
    <div id="doc">
        <div class="login-logo">
            <div class="layout-990">
                <h4>
                    <a href="/">
                        <img src="/static/img/logo.png"/>
                    </a>
                    <span class="txt">注册</span>
                </h4>
            </div>
        </div>
        <div class="logo-container">
            <div class="layout-990">
                <div class="login-form">
                    <div class="message ms-yh" id="message">注册美优萌宠</div>
                    <form method="post">
                        <input type="text" id="mobile" value="" placeholder="手机号"/>
                        <input type="text" id="identify-code" value="" placeholder="短信验证码"/>
                        <span id="get-identify-code">获取验证码</span>
                        <input type="password" id="password" placeholder="密码"/>
                        <input type="password" id="password2" placeholder="密码确认"/>
                        <span class="do" id="do-reg">注&nbsp;册</span>
                    </form>
                    <ul>
                        <li>已有账号？<a href="/log">直接登录</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="footer" class="ms-yh">
            <div class="layout-1190">
                <span class="copyright">
                Copyright&nbsp;©&nbsp;<a href="#" target="_self">杭州美呦科技有限公司</a>&nbsp;&nbsp;2015-2018&nbsp;&nbsp;版权所有
            </span>
                <br>
                <a href="#">关于美优</a>&nbsp;|&nbsp;<a href="#">团队介绍</a>&nbsp;|&nbsp;<a href="#">加入我们</a>
            </div>
        </div>
    </div>
</body>
<script src="/static/jquery/jquery.min.js"></script>
<script src="/static/gallery/dialog.js"></script>
<script type="text/javascript" src="/static/js/page/reg/v1.js"></script>
</html>