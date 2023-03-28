<?php
if(!defined('APP_PATH')||!defined('JWCOM_PATH')){exit('Access Denied');}
class db_mysql {
	public $conn;
	public $arrSql;
	public function getArray($sql)
	{
		if( ! $result = $this->exec($sql) )return array();
		if( ! mysql_num_rows($result) )return array();
		$rows = array();
		while($rows[] = mysql_fetch_array($result,MYSQL_ASSOC)){}
		mysql_free_result($result);
		array_pop($rows);
		return $rows;
	}

	public function newinsertid()
	{
		return mysql_insert_id($this->conn);
	}
	
	public function showtables($tables)
	{
		return mysql_num_rows(mysql_query("show tables like '%".$tables."%'",$this->conn));
	}

	public function setlimit($sql, $limit)
	{
		return $sql. " LIMIT {$limit}";
	}

	public function exec($sql)
	{
		$this->arrSql[] = $sql;
		if( $result = mysql_query($sql, $this->conn) ){
			return $result;
		}else{
			if(mysql_error()!=''){
				syError("{$sql}<br />执行错误: " . mysql_error());
			}else{
				return TRUE;
			}
		}
	}

	public function affected_rows()
	{
		return mysql_affected_rows($this->conn);
	}

	public function getTable($tbl_name)
	{
		return $this->getArray("DESCRIBE {$tbl_name}");
	}

	public function __construct($dbConfig)
	{
		$linkfunction = ( TRUE == $dbConfig['persistent'] ) ? 'mysql_pconnect' : 'mysql_connect';
		$this->conn = $linkfunction($dbConfig['host'].":".$dbConfig['port'], $dbConfig['login'], $dbConfig['password']); 
		if(!$this->conn || !mysql_select_db($dbConfig['database'], $this->conn)){
			echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />数据库无法链接，如果您是第一次使用，请先执行<a href="install">安装程序</a><br /><br /><br /><br /><style type="text/css">.mysql_c {font-size:10px; float:left;}.mysql_c a{color:#093; text-decoration:none;}.mysql_c a:hover{ color:#09F;}.mysql_f a{ padding-left:10px; font-size:10px; color:#F00; text-decoration:none;}.mysql_f a:hover{ color:#09F;}</style><div class="mysql_c"><a href="http://www.junyun.wang" target="_blank">虚拟主机，云主机，域名注册，服务器租用</a></div> <div class="mysql_f"><a href="http://www.lala.wang" target="_blank">模板下载</a></div>';exit;
		}
		$this->exec("SET NAMES UTF8");
		if($this->version() > '5.0.1') {
			$this->exec("set sql_mode=''");
		}
	}
	public function version() {
		return mysql_get_server_info($this->conn);
	}
	
	public function __val_escape($value) {
		return '\''.$value.'\'';
	}

	public function __destruct()
	{
		if( TRUE != $GLOBALS['G_DY']['db']['persistent'] )@mysql_close($this->conn);
	}
}

