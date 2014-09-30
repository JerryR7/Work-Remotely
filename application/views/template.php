<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Work Remotely</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
  <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
  <!--script src="js/less-1.3.3.min.js"></script-->
  <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

  <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/bootstrap-markdown.min.css" rel="stylesheet">


  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.png">

  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/scripts.js"></script>

  <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css"/>
  <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/language/zh_TW.js"></script>
</head>

<body>
<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
           <?php echo anchor('jobs', '<strong>Remote Worker</strong>', array('class'=>'navbar-brand'));?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
              <?php echo anchor('jobs/about', '關於本站');?>
            </li>
            <li>
              <?php echo anchor('jobs/express', '訂閱');?>
            </li>
            <li>
              <a href="https://zh-tw.facebook.com/" target="_blank">粉絲團</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li style="padding-right: 20px">
            <!-- Sign In  -->
              <?php if(empty($user_login)) { ?>  
              <button type="button" class="btn btn-success navbar-btn" data-toggle="modal" data-target="#myModal"><strong>Sign In</strong></button>
              <?php }else{ ?> 
              <button type="button" class="btn btn-success navbar-btn"><strong>Sign Out</strong></button>
              <?php } ?> 
            <!-- Sign In End -->
            </li>
          </ul>
        </div>
      </nav>
      <?php

      foreach($view as $view)
      {
        $this->load->view($view,$data);
      }
      ?>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>js/markdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/to-markdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.hotkeys.js"></script>
<script>
$(document).ready(function() {
    $('#user_login').bootstrapValidator({ /* #loginForm 這是你要設定的form ID */
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        }, //已上都不先理他
        fields: {
            user_name: { // 這事你要驗證的欄位 ex: <input type="text" name="username" value=""/>
                message: '請確認E-Mail是否正確',
                validators: {
                    notEmpty: {// 如果是空的會顯示下列錯誤訊息
                        message: '請輸入帳號。'
                    },
                    stringLength: { //最少六個字元 最多30個字元 錯誤顯示下列錯誤
                        // min: 6,
                        max: 50,
                        message: '超出50位字元。'
                    },
                    emailAddress: {
                        // regexp: /^[a-zA-Z0-9_]+$/, //正規表示 (自己定的規則!! 此為只能顯示英文字母和數字!)
                        message: '請確認E-Mail是否正確。'
                    }
                }
            },
            user_password: { //<input type="text" name="email" value=""/>
                validators: {
                    notEmpty: { // 如果是空的會顯示下列錯誤訊息
                        message: '請輸入密碼。'
                    },
                    stringLength: {
                        min: 8,
                        message: '需要8位字元以上'
                    },
                    different: {
                        field: 'user_name',
                        message: '密碼不能與帳號相同。'
                    }
                }
            }
        }
    });
});
</script>
</body>
</html>
