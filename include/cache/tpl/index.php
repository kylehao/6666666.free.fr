<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TITLE><?php echo $GLOBALS['S']['title'] ?></TITLE>
<META NAME="robots" CONTENT="all">
<META name="keywords" content="<?php echo $GLOBALS['S']['keywords'] ?>">
<META name="description" content="<?php echo $GLOBALS['S']['description'] ?>" >

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

    <div class="col-xs-12">
        <!-- Contents
        ================================================== -->
        <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">推荐域名 <i>为您推荐本店极品域名...</i></h3>
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
                        <?php $vn=0;$tablev=syClass("syModel")->findSql("select id,tid,sid,title,style,trait,gourl,addtime,hits,htmlurl,htmlfile,litpic,orders,mrank,mgold,isshow,keywords,description,price from jw_article a left join jw_article_field b on (a.id=b.aid) where isshow=1 and trait like '%,1,%'  order by orders desc,addtime desc,id desc limit 999");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["url"]=html_url("article",$v); $v["title"]=stripslashes($v["title"]);$v["description"]=stripslashes($v["description"]); ?> 
                        <tr>
                                    <td><a><b><?php echo $v['title'] ?></b></a></td>
                                    <td><?php echo $v['description'] ?></td>
                                    <td><?php if($v['price']==''){ ?>议价<?php }else{ ?>￥<?php echo $v['price'] ?><?php } ?></td>

                                </tr>
<?php } ?>
</table>
                </div>
            </div>    		
            

<?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  mshow='1' and pid=0  order by orders desc,tid limit 9");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>

        <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $v['title'] ?><i><a href="<?php echo $v['url'] ?>">更多 »»</a></i></h3>
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
                        <?php $vn=0;$tablev=syClass("syModel")->findSql("select id,tid,sid,title,style,trait,gourl,addtime,hits,htmlurl,htmlfile,litpic,orders,mrank,mgold,isshow,keywords,description,price from jw_article a left join jw_article_field b on (a.id=b.aid) where isshow=1 and tid in(".$v["tid_leafid"].")  order by orders desc,addtime desc,id desc limit 30");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["url"]=html_url("article",$v); $v["title"]=stripslashes($v["title"]);$v["description"]=stripslashes($v["description"]); ?> 
                        <tr>
                                    <td><a><b><?php echo $v['title'] ?></b></a></td>
                                    <td><?php echo $v['description'] ?></td>
                                    <td><?php if($v['price']==''){ ?>议价<?php }else{ ?>￥<?php echo $v['price'] ?><?php } ?></td>

                                </tr>
<?php } ?>
</table>
                </div>
            </div>  
<?php } ?>

        <div class="panel panel-primary">
                <div class="panel-heading">
                <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  tid='10'  order by orders desc,tid");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
                  <h3 class="panel-title"><?php echo $v['classname'] ?><i><a href="<?php echo $v['url'] ?>">更多 »»</a></i></h3><?php } ?>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>域名</th>
                                <th>含义</th>
                                <th>状态</th>

                            </tr>
                        </thead>
                        <?php $vn=0;$tablev=syClass("syModel")->findSql("select id,tid,sid,title,style,trait,gourl,addtime,hits,htmlurl,htmlfile,litpic,orders,mrank,mgold,isshow,keywords,description,price from jw_article a left join jw_article_field b on (a.id=b.aid) where isshow=1 and tid in(10)  order by orders desc,addtime desc,id desc limit 999");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["url"]=html_url("article",$v); $v["title"]=stripslashes($v["title"]);$v["description"]=stripslashes($v["description"]); ?> 
                        <tr>
                                    <td><span><?php echo $v['title'] ?></span></td>
                                    <td><span><?php echo $v['description'] ?></span></td>
                                    <td><span class="ys">已售</span></td>

                                </tr>
<?php } ?>

</table>
                </div>
            </div>    	
            
		<div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">友情链接 <i>欢迎交换友情链接...</i></h3>
                </div>
                <div class="panel-body linklist">
					<ul class="clearfix">
                    <?php $tablev=syClass("syModel")->findSql("select * from jw_links where isshow=1  order by orders desc,id desc");foreach($tablev as $v){ $v["name"]=stripslashes($v["name"]); ?>
<li class="pull-left"><a href="<?php echo $v['gourl'] ?>" target="_blank"><?php echo $v['name'] ?></a></li>
<?php } ?>
					
					</ul>
                    
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
