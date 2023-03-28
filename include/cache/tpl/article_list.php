<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $type['title'] ?>-<?php echo $GLOBALS['S']['title'] ?></title>
<meta name="keywords" content="<?php echo $type['keywords'] ?> " />
<meta name="description" content="<?php echo $type['description'] ?> " />

<link href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>style/bootstrap.css" rel="stylesheet">
<link href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>style/docs.css" rel="stylesheet">
<link href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>style/one.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/html5shiv.js"></script>
<![endif]-->

<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/bootstrap.min.js"></script>
<!--<![endif]-->

</head>

<body>
	<!-- 头部 -->
	<!-- 导航条 -->
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><?php echo $GLOBALS['S']['comtitle'] ?></a>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
<?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  pid=0  order by orders desc,tid limit 9");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
<li<?php if($type['tid']==$v['tid']){ ?> class="active"<?php } ?>><a href="<?php echo $v['url'] ?>"><?php echo $v['classname'] ?></a></li>
<?php } ?>

 </ul>
 

 
        <form class="navbar-form navbar-right sleft" action="<?php echo $GLOBALS['WWW'] ?>index.php" method="get">
        <input name="a" type="hidden" value="search" />
        <select name="c" style="display:none">
        <option value="article" selected="selected">域名</option>
            <div class="form-group search-form">
              <span><input type="text" class="form-control search-input" name="word" value="" placeholder="请输入关键字母或数字"></span>
              <span>
              <input class="sch-btn btn btn-success" type="submit" value="搜索"/>
              </span>
            </div>

        </form>
    </div>
  </div>
</div>

	<!-- /头部 -->
    
	<!-- 主体 -->
	
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                <h1>好域名，是一道亮丽的风景！</h1>
                <p class="">域名是一种无形资产，好域名比CEO更重要</p>
                <p class="">精明的您也许比我更能意识到一个好域名的实际价值!</p>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          <h3 class="panel-title">联系我们</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <tr>
                                    <td>邮箱:</td>
                                    <td><a href="mailto:<?php echo $GLOBALS['S']['comemail'] ?>"><?php echo $GLOBALS['S']['comemail'] ?></a></td>
                                </tr>
                                <tr>
                                    <td>客服QQ:</td>
                                    <td><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo labelcus(2,'body') ?>&amp;site=qq&amp;menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo labelcus(2,'body') ?>:16 &amp;r=0.9744158156681806" alt="<?php echo labelcus(2,'body') ?>" title="<?php echo labelcus(2,'body') ?>"></a></td>
                                </tr>
                                <tr>
                                    <td>电话:</td>
                                    <td><?php echo $GLOBALS['S']['comphone'] ?></td>
                                </tr>
                            </table>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </header>

<div id="main-container" class="container">
    <div class="row">
        
<!-- 左侧 nav -->
<div class="max">
        <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $type['title'] ?><i>当前位置：<?php echo $positions ?></i></h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>域名</th>
                                <th>含义</th>
                                <th>价格</th>

                            </tr>
                        </thead>
                        <?php foreach( $lists as $v){ ?>
                        <tr>
                                    <td><a><b><?php echo $v['title'] ?></b></a></td>
                                    <td><?php echo $v['description'] ?></td>
                                    <td><?php if($v['price']=='0.00'){ ?>议价<?php }else{ ?>￥<?php echo $v['price'] ?><?php } ?></td>

                                </tr>
<?php } ?>
</table>
                </div>
            </div>  


            
<div class="pagediv">
<div class="page">

<?php echo $pages ?>

</div>
</div>

        
    </div>
	

    </div>
</div>
</div>

	<!-- /主体 -->
	<!-- 底部 -->
	
    <!-- 底部
    ================================================== -->
    <footer class="footer">
      <div class="container">
          <p>Copyright © 2015 <?php echo $GLOBALS['S']['comtitle'] ?> All Rights Reserved.</p>
          <p> 本站程序及空间均由 <strong><a href="http://www.junyun.wang" target="_blank">浚云</a></strong> 友情提供.</p>

      </div>
    </footer>


 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
<?php echo labelcus(1,'body') ?>
</div>
	<!-- /底部 -->
</body>
</html>
