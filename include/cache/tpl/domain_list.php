<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $type['title'] ?>-<?php echo $GLOBALS['S']['title'] ?></title>
<meta name="keywords" content="<?php echo $type['keywords'] ?> " />
<meta name="description" content="<?php echo $type['description'] ?> " />
<link href="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var site_dir="<?php echo $GLOBALS['WWW'] ?>";
</script>
<script type="text/javascript" src="<?php echo $GLOBALS['WWW'] ?>include/js/jsmain.js"></script>
<script src="<?php echo $GLOBALS['S']['jwcdnapi'] ?><?php echo $GLOBALS['skin'] ?>js/main.js" type="text/javascript"></script>
</head>

<body>
	<!-- 头部 -->
	<!-- 导航条
================================================== -->
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
<?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  mshow='1' and pid=0  order by orders desc,tid limit 9");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["classnamesub"]=stripslashes($v["classnamesub"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
<li<?php if($type['tid']==$v['tid']){ ?> class="active"<?php } ?>><a href="<?php echo $v['url'] ?>"><?php echo $v['classname'] ?></a></li>
<?php } ?>

 </ul>
        <form class="navbar-form navbar-right sleft">
            <div class="form-group search-form">
              <input type="text" class="form-control search-input" name="searchtext" value="" placeholder="请输入关键字母或数字">
            </div>
            <a class="sch-btn btn btn-success" href="javascript:;" id="search" url="http://gqcms.com/index.php?s=/home/index/index.html"><i class="btn-search">搜索</i></a>
        </form>
    </div>
  </div>
</div>

	<!-- /头部 -->
<div class="wpm list">
  <div class="tab11"></div>
  <div class="tab1 tab1b main">
    <div class="l">
      <div class="columnc"><h2><?php echo $type['classname'] ?></h2></div>
      <div class="columncl">
      <?php $ytid=$type[tid];if(!syDB("classtype")->find(array("pid"=>$type[tid],"mshow"=>1),null,"tid")){ $ypid=syDB("classtype")->find(array("tid"=>$type[tid],"mshow"=>1),null,"pid");$type[tid]=$ypid[pid];} ?><?php $tn=0;$tablet=syClass("syModel")->findSql("select tid,molds,pid,classname,classnamesub,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from jw_classtype where  pid='".$type[tid]."' and mshow='1'  order by orders desc,tid");$type[tid]=$ytid;foreach($tablet as $t){ $t["tid_leafid"]=$sy_class_type->leafid($t["tid"]);$t["n"]=$tn=$tn+1; $t["classname"]=stripslashes($t["classname"]);$t["classnamesub"]=stripslashes($t["classnamesub"]);$t["description"]=stripslashes($t["description"]); $t["url"]=html_url("classtype",$t); ?>
      <a href="<?php echo $t['url'] ?>"<?php if($type['tid']==$t['tid']){ ?> class="c"<?php } ?>><?php echo $t['classname'] ?></a>
      <?php } ?>
      </div>
    </div>
    <div class="r">
    <div class="content">
       <div class="position">当前位置：<?php echo $positions ?></div>
       <ul class="c list">
       <?php foreach( $lists as $v){ ?>
       <li><span<?php if(newest($v['addtime'],24)){ ?> style="color:red"<?php } ?>>[<?php echo date('Y-m-d',$v['addtime']) ?>]</span><a href="<?php echo $v['url'] ?>" style="<?php echo $v['style'] ?>" target="_blank"><?php echo $v['title'] ?></a></li>
       <?php } ?>
       </ul>
       <ul class="c pages"><?php echo $pages ?></ul>
    </div>
    </div>
  </div>
  <div class="tab12 mban"></div>
</div>
	<!-- 底部 -->
	
    <!-- 底部
    ================================================== -->
    <footer class="footer">
      <div class="container">
          <p>Copyright © 2015 <?php echo $GLOBALS['S']['comtitle'] ?> All Rights Reserved.</p>
          <p> 本站空间由 <strong><a href="http://www.junyun.wang" target="_blank">浚云</a></strong> 友情提供.</p>

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
