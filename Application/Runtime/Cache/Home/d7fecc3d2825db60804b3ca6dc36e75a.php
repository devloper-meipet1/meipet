<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
    dir="ltr">
<head>
<meta charset="utf-8">
<title>美优萌宠——登陆</title>

<link rel="stylesheet" href="http://www.meipet.com.cn/static/old/bootstrap/css/bootstrap.min.css"
    type="text/css" />

<link rel="stylesheet" href="http://www.meipet.com.cn/static/old/css/template.css"
    type="text/css" />
<script
    src="http://www.meipet.com.cn/static/old/jquery/jquery-1.11.1.min.js"></script>
<script src="http://www.meipet.com.cn/static/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="body-innerwrapper">
        <section id="sp-main-body">
            <div class="container">
                <div class="row">
                    <div id="sp-component" class="col-sm-12 col-md-12">
                        <div class="sp-column ">
                            <div id="system-message-container"></div>
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                    <div class="page-login-form box login">

                                        <div class="login-description text-center">欢迎来到美优萌宠

                                        </div>

                                        <form action="http://www.meipet.com.cn/index.php/Home/Log/doLog" method="post"class="form-validate">



                                            <div class="form-group">
                                                <div class="group-control">
                                                    <input type="text" name="mobile" id="username" value=""
                                                        class="validate-username required" size="25"
                                                        placeholder="手机号" required aria-required="true" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="group-control">
                                                    <input type="password" name="password" id="password"
                                                        value="" placeholder="密码"
                                                        class="validate-password required" size="25"
                                                        maxlength="99" required aria-required="true" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="http://www.meipet.com.cn/index.php/Home/Reg/forget"> 忘记密码</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit"
                                                    class="btn btn-success btn-lg btn-block btn-login">
                                                    登    录</button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="form-links">
                                        <ul>
                                          <li>现在还没有账号<a href="http://www.meipet.com.cn/index.php/Home/Reg/index"> 立即注册</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>