<?php
$command = mysql_connect("23.248.162.241","debug","hdp@5C01") or die("mysql connect error!");
mysql_select_db("web",$command);
mysql_query("set names 'utf8'");

$sql = "select * from `comment_info` order by comm_time desc limit 1";
$res = mysql_query($sql);
$row = '';
$now = date('Y-m-d');
if(mysql_num_rows($res) > 0){
	$row = mysql_fetch_assoc($res);
}
//取得更新日期差
$t_day = 0;
if(!empty($row)){
	if($now > $row['comm_time']){
		$temp = strtotime($now) - strtotime($row['comm_time']);
		$t_day = floor($temp/(3600*24));
	}
}

//更新相应天数的数据
$t_num = 15;//每天更新的数据数
if($t_day > 0){
	$t_sum = $t_day*$t_num;

	//更新car_comment
	$t_sql = "select * from `car_comment` order by comm_time limit {$t_sum}";
	$t_res = mysql_query($t_sql);
	$t_plus = 1;
	while($t_row = mysql_fetch_assoc($t_res)){
		$t_time = strtotime(date('Y-m-d',time()))-$t_plus*24*3600+strtotime($t_row['comm_time'])%(3600*24);
		$new_time = date('Y-m-d H:i:s',$t_time);
		$u_sql = "update `car_comment` set comm_time='{$new_time}' where id={$t_row['id']}";
		mysql_query($u_sql);
		$t_plus ++;
		if($t_plus > $t_day){
			$t_plus = 1;
		}
	}
}

?>