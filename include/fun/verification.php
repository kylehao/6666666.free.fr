<?php
function verification($type){
	switch ($type){
		case 1:
			return  '<p></p><a href="http://www.Junww.com" target="_blank">求助问答</a><a href="http://www.junyun.wang" target="_blank">域名主机</a>';
		break;
		case 2:
			return ' | <a href="http://www.Junww.com" target="_blank">技术支持</a> | <a href="http://www.junyun.wang" target="_blank">域名主机</a>';
		break;
		case 3:
			return '<tr><td width="80">友情提示：</td><td class="tdleft">如不会使用本系统或有其他疑问，可选择官方服务，为您提供全程无忧服务，详询官方网站客服。<a href="http://www.Junww.com" target="_blank">http://www.Junww.com</a></td></tr><tr><td width="80">系统介绍：</td><td class="tdleft">企业建站系统</td></tr>  <tr><td width="80">系统版本：</td><td class="tdleft">Junww.com<strong> '.syExt('version').'</strong> - '.syExt('update').'</td></tr><tr><td width="80">官方网址：</td><td class="tdleft"><a href="http://www.Junww.com" target="_blank">http://www.Junww.com</a></td></tr><tr><td>快捷服务：</td><td class="tdleft"><a href="http://www.Junww.com" target="_blank">使用帮助</a> | <a href="http://www.lala.wang" target="_blank">拉拉网（模板销售平台）</a> | <a href="http://www.junyun.wang" target="_blank">域名空间</a></td></tr><tr><td>技术支持：</td><td class="tdleft"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=583333483&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:583333483:16 &r=0.9744158156681806" alt="QQ:583333483" title="QQ:583333483"></a> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=38585404&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:38585404:16 &r=0.9744158156681806" alt="QQ:38585404" title="QQ:38585404"></a></td></tr>';
		break;
		case 4:
			return '&nbsp;企业建站系统 版本'.syExt('version').' - '.syExt('update').' Powered by <a href="http://www.Junww.com" target="_blank">Junww.com</a> © 2006-2013';
		break;
		case 5:
			return '<a href="http://www.Junww.com" target="_blank">系统更新</a> | <a href="http://www.Junww.com/" target="_blank">使用帮助</a> | <a href="http://www.junyun.wang" target="_blank">域名主机</a>';
		break;
		case 6:
		return 'href="http://www.Junww.com" class="v" target="_blank"';
		break;
		case 7:
		return ' log';
		break;
		case 8:
		return '轻松建站';
		break;
	}
}
?>