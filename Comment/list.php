<?php  
$command = mysql_connect("23.248.162.241","debug","hdp@5C01") or die("mysql connect error!");
mysql_select_db("web",$command);
mysql_query("set names 'utf8'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>【车道评测网】是专业汽车点评网，我们倾听汽车用户的真实声音</title>
    <meta name="description" content="车道评测网网是中国领先的专业汽车用户交流平台，致力于为广大网发提供专业汽车评测、汽车点评以及汽车用户口碑交流服务，我们的宗旨是做中国最专业的汽车点评网。" />
    <meta name="keywords" content="汽车点评网,车评,评车,汽车口碑排行,比亚迪秦怎么样,迈腾好不好,大众途观怎么样,君威怎么样,本田雅阁怎么样,新宝来,福克斯好不好,速腾,雪佛兰科鲁兹怎么样,捷达,斯柯达野帝,大众朗逸,桑塔纳怎么样" />
    <link href="/Content/css/base.css" rel="stylesheet" type="text/css" />
    <link href="/Content/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="/Content/css/font.css" rel="stylesheet" type="text/css" />
    <script src="/Content/js/jquery-1.7.1.min.js"></script>
</head>
<body id="top">
<script type="text/javascript">
var tim = setInterval(function(){
    if(document.getElementById("poster")){
        pop();
        clearInterval(tim);
    }

},200);


function pop(){
    var bot = -200;
    var inter = setInterval(function(){
        bot += 1;
        if(bot > 5){clearInterval(inter);}
        $("#poster").css("bottom",bot+"px");
    },5);
    

    $(".post-title a").click(function(){
        $("#poster").hide();
    });
}
</script>

<div id="poster">
    <div class="post-title">
        <span>淘宝热卖商品推荐</span>      
        <a href="javascript:;"></a>
    </div>
    <div>
        <script type="text/javascript" src="http://i.haodianpu.com/detail.php?aid=59&m=300%2A210"></script>  
    </div>
</div>
   <!--头部-->
    
<a name="gotop"></a>
<div class="head">
    <div class="head_top">
        <div class="head_logo">
            <a href="/"><img src="/Content/images/logo.png" alt="车道评测网LOGO" /></a>
        </div>
        <div class="head_nav">
            <ul>
                <li><a href="/" title="车道评测网首页">首页</a></li>
                <li><a href="/Comment" title="汽车点评">点评</a></li>
                <li><a href="/Report/index.php" title="汽车质量报告">报告</a><img src="/Content/images/new.gif" style="position:absolute;z-index:1001;margin-left:-10px;margin-top:-10px;" ></li>
                <li><a href="/Article/index.php" title="汽车评测">评测</a></li>
                <li><a href="/Car/Brands.php" title="车型大全">车型</a></li>
            </ul>
        </div>
    

    </div>
</div>

<?php 
$cur_page = 1;
$p_start = 0;


//页码
//总页数
$n_sql = "select count(id) as num from `tg_ytx`";
$n_res = mysql_query($n_sql);
$pages = mysql_fetch_assoc($n_res);
$pages = ceil(($pages['num']/10));
//当前页
if(!empty($_GET['page']) && is_numeric($_GET['page']) && $_GET['page']>0 && $_GET['page']<=$pages){
    $cur_page = $_GET['page'];
    $p_start = ($cur_page-1)*10;    
}

$sql = "select * from `tg_ytx` limit {$p_start},10";
$result = mysql_query($sql);
?>

<!--面包屑导航-->
<div class="daohang"><a href="/">首页</a> > 汽车点评</div>
<div class="chezhan_ad">
<script type="text/javascript">
    /*960*90 创建于 2015-08-20*/
    var cpro_id = "u2273851";
</script>
<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>

</div>
<div class="dianpingpic_content">

<div class="topbar"><span>汽车点评</span>去车道评测网(http://www.dzjinxinge.com )专注于汽车点评，致力于为广大网友提供各种汽车外观、动力、内饰、故障、售后服务、操控、空间、性价比以及保养成<br>本等综合点评数据，是专业的汽车点评网站，我们倾听汽车用户的真实声音。</div>

<div class="zh_pingce_pp">
  <div class="zh_pingce_pp_s">
    <div class="pingce_s_rmss">
热门搜索：<a href="/comment/show.php?type=1009" target="_blank" title="长安锋驭">锋驭 </a><a href="/comment/show.php?type=98" target="_blank" title="比亚迪秦">秦</a><a href="/Comment/show.php?type=358" target="_blank" title="福克斯"> 福克斯</a> <a href="/Comment/show.php?type=262" target="_blank" title="途观">途观</a><a href="/Comment/show.php?type=255" target="_blank" title="迈腾"> 迈腾</a> <a href="/comment/show.php?type=252" target="_blank" title="新宝来">新宝来</a>    <a href="/comment/show.php?type=359" target="_blank" title="翼虎">翼虎</a> <a href="/comment/show.php?type=175" target="_blank" title="奔驰S级">奔驰S级 </a><a href="/comment/show.php?type=394" target="_blank" title="哈弗H6">哈弗H6</a>
    </div>
  </div>
  <div class="zh_pingce_qcjb">
    <div class="pingce_qcjb_name">汽车级别</div>
    <div class="pingce_qcjb_cxlb">
    <a href="/Comment/Index.php?level=27"><img src="/Content/images/pingce_wxtp.jpg" width="31" height="18" />微型</a>
      <a href="/Comment/Index.php?level=28" target="_blank"><img src="/Content/images/pingce_xxtp.jpg" width="41" height="18" />小型</a>
      <a href="/Comment/Index.php?level=29" target="_blank"><img src="/Content/images/pingce_jcxtp.jpg" width="43" height="18" />紧凑型</a>
      <a href="/Comment/Index.php?level=46" target="_blank"><img src="/Content/images/pingce_zxtp.jpg" width="46" height="18" />中型</a>
      <a href="/Co  mment/Index.php?level=47" target="_blank"><img src="/Content/images/pingce_zdxtp.jpg" width="48" height="18" />中大型</a>
      <a href="/Comment/Index.php?level=48" target="_blank"><img src="/Content/images/pingce_hhxtp.jpg" width="53" height="18" />豪华型</a>
      <a href="/Comment/Index.php?level=49" target="_blank"><img src="/Content/images/pingce_suvtp.jpg" width="45" height="18" />SUV</a>
      <a href="/Comment/Index.php?level=50" target="_blank"><img src="/Content/images/pingce_mpvtp.jpg" width="45" height="18" />MPV</a>
      <a href="/Comment/Index.php?level=51" target="_blank"><img src="/Content/images/pingce_pctp.jpg" width="50" height="18" />跑车</a>
      <a href="/Comment/Index.php?level=52" target="_blank"><img src="/Content/images/pingce_xnytp.jpg" width="31" height="18" />新能源</a>
    </div>
  </div>
</div>

<?php if(empty($_GET['level'])){ ?>
<div class="zh_dp_rpcx">
  <div class="zh_rpcx1">
    <div class="zh_rmdp_cx1"><div class="deal-mark"></div><a href="/Comment/show.php?type=1009"><img src="http://www.qupingche.com/attached/image/201312/02113531_6504.jpg" width="290" height="190" /></a>
    </div>
    <div class="zh_rmdp_cxt"><span>总评：4.0 分</span><a href="/Comment/show.php?type=1009">铃木 - 铃木锋驭</a></div>
    <div class="zh_rmdp_cxdp">共有<span style="color:#FF6600; font-weight:bold;">590</span>位网友参与点评</div>
  </div>
  <div class="zh_rpcx1">
    <div class="zh_rmdp_cx1"><div class="deal-mark"></div><a href="/Comment/show.php?type=98"><img src="http://www.qupingche.com/attached/image/201308/21172526_8528.jpg" width="290" height="190" /></a>
    </div>
    <div class="zh_rmdp_cxt"><span>总评：3.9 分</span><a href="/Comment/show.php?type=98">比亚迪 - 比亚迪秦</a></div>
    <div class="zh_rmdp_cxdp">共有<span style="color:#FF6600; font-weight:bold;">184</span>位网友参与点评</div>
  </div>
  <div class="zh_rpcx1">
    <div class="zh_rmdp_cx1"><div class="deal-mark"></div><a href="/Comment/show.php?type=262"><img src="http://www.qupingche.com/attached/image/201308/08104140_6178.jpg" width="290" height="190" /></a>
    </div>
    <div class="zh_rmdp_cxt"><span>总评：4.0 分</span><a href="/Comment/show.php?type=262">大众 - 大众途观</a></div>
    <div class="zh_rmdp_cxdp">共有<span style="color:#FF6600; font-weight:bold;">1361</span>位网友参与点评</div>
  </div>
</div>
<?php } ?>

<div class="clear"></div>
<div class="zh_prize_left">
  <div class="zh_prize_xb">
  <!-- 全部汽车点评 开始-->
    <div class="zh_qbdp_title">全部汽车点评信息</div>
        <?php while($row=mysql_fetch_assoc($result)){?>
        <div class="dpbar">
            <div class="dpbright" style="float:left;">
      				<div class="dpbrtit">
                  <span style="float:left;"><a href="/Comment/ytx.php?id=<?php echo $row['id'] ?>" target="_blank"><?php echo $row['title'] ?></a></span>  <span style="float:right;"><?php echo $row['ctime'] ?></span>

      				</div>
  			</div>
		</div>
        <?php } ?>
<!--分页显示开始-->  
  <div class="pagebar">
  <div id="pager">
  
<!--MvcPager 1.5 for ASP.NET MVC 3.0 © 2009-2011 Webdiyer (http://www.webdiyer.com)-->
<div>
    <?php if($cur_page == 1){ ?>
        <a disabled="disabled">首页</a>&nbsp;&nbsp;
        <a disabled="disabled">上一页</a>&nbsp;&nbsp;
    <?php }else{ ?>
        <a href="/Comment/list.php?page=1}">首页</a>&nbsp;&nbsp;
        <a href="/Comment/list.php?page=<?php echo $cur_page-1?>">上一页</a>&nbsp;&nbsp;
    <?php } ?>
    <?php 
        $s_page = $cur_page-4>0?$cur_page-4:1;
        $e_page = $cur_page+5>$pages?$pages:$cur_page+5;
        for($i=$s_page;$i<=$e_page;$i++){
            if($i == $cur_page){
                echo $i.'&nbsp;&nbsp;';
            }else{ ?> 
                <a href='/Comment/list.php?page=<?php echo $i;?>'><?php echo $i;?></a>&nbsp;&nbsp;    
    <?php }} ?>
    
    <?php if($pages == $cur_page){ ?>
        <a disabled="disabled">下一页</a>&nbsp;&nbsp;
        <a disabled="disabled">尾页</a></div>
    <?php }else{ ?>
        <a href="/Comment/list.php?page=<?php echo ($cur_page+1); ?>">下一页</a>&nbsp;&nbsp;
        <a href="/Comment/list.php?page=<?php echo $pages; ?>">尾页</a></div>
    <?php } ?>
<!--MvcPager 1.5 for ASP.NET MVC 3.0 © 2009-2011 Webdiyer (http://www.webdiyer.com)-->

  </div>
  </div></div>
<!--分页显示结束-->  
</div>

<div class="zh_prize_right">
 <div class="zh_prize_ad">
 <a href="http://www.langyouhui.org/?gzid=s1-c2" target="_blank">
<img src="http://images.sohu.com/saf/a2016/0722/wKiDRFeR3RyATkhOAAB0RD893MY256300x250.jpg" alt="" />
</a>
</div>
   
     <div class="zh_prize_helpt">
     <div class="prize_rmdp">最新汽车口碑</div>
   </div>
 <div class="zh_prize_xw">
   <div class="zh_kb_xm1">
    <div class="zh_kb_xm1_img" ><img src="/Content/images/zh_dps_yhdt.jpg" width="45" height="46"></div>
    <div class="zh_kb_xm1_title"><strong>评价</strong><strong><a href="/comment/show.php?type=202"  target="_blank">本田凌派</a></strong></div>
    <div class="zh_kb_xm1_dp">指向非常的准，方向盘很轻，只要速度上去，方向盘变的沉重。保证了安全行驶，刹车点头不是很强烈，2014.04.20购车，22000公里没有任何异响，漏油，</div>
  </div>
   <div class="zh_kb_xm1">
    <div class="zh_kb_xm1_img" ><img src="/Content/images/zh_dps_yhdt.jpg" width="45" height="46"></div>
    <div class="zh_kb_xm1_title"><strong>评价</strong><strong><a href="/comment/show.php?type=92"  target="_blank">比亚迪F0</a></strong></div>
    <div class="zh_kb_xm1_dp">小巧停车方便，外形时尚可爱，改装外饰更好看，提速快，油耗低，价格低廉</div>
  </div>
   <div class="zh_kb_xm1">
    <div class="zh_kb_xm1_img" ><img src="/Content/images/zh_dps_yhdt.jpg" width="45" height="46"></div>
    <div class="zh_kb_xm1_title"><strong>评价</strong><strong><a href="/comment/show.php?type=151"  target="_blank">宝马7系</a></strong></div>
    <div class="zh_kb_xm1_dp">整车的稳定性都是非常好，有赖于1.8T的车身，给人一种很稳定的感觉，操纵起来每一样都是四平八稳的感觉，总之开着7系你会感觉整个世界都很祥和。</div>
  </div>
   <div class="zh_kb_xm1">
    <div class="zh_kb_xm1_img" ><img src="/Content/images/zh_dps_yhdt.jpg" width="45" height="46"></div>
    <div class="zh_kb_xm1_title"><strong>评价</strong><strong><a href="/comment/show.php?type=391"  target="_blank">哈弗H2</a></strong></div>
    <div class="zh_kb_xm1_dp">车型外观好看，内部装饰不错变速箱有毛病齿轮间隙过大，一松离合有响声。去服务站让师傅看了也没能解决，结果又试了辆新车，也是一样的毛病，师傅说是生产问题</div>
  </div>
   <div class="zh_kb_xm1">
    <div class="zh_kb_xm1_img" ><img src="/Content/images/zh_dps_yhdt.jpg" width="45" height="46"></div>
    <div class="zh_kb_xm1_title"><strong>评价</strong><strong><a href="/comment/show.php?type=678"  target="_blank">起亚K5</a></strong></div>
    <div class="zh_kb_xm1_dp">带了涡轮增压的起亚K5特别版真的动力方面提升了不少，加上原有的大空间还有完美的配置和整体质感一流的内饰，车子真的非常的高性价比</div>
  </div>
 </div>
    <div class="rightline"></div>
    
<div class="koubeibar">
        <div class="kbtitle">最佳口碑排行</div>
        <ul>
            <li><span>
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                 &nbsp;<strong>5.0</strong>分</span>
                <img src="/Content/images/kbph_1.jpg" align="left" /> &nbsp;
                <a href="/comment/show.php?type=1171"  target="_blank">布加迪Galibier</a></li>
            <li><span>
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star2.png" align="left" />
                 &nbsp;<strong>4.6</strong>分</span>
                <img src="/Content/images/kbph_2.jpg" align="left" /> &nbsp;
                <a href="/comment/show.php?type=458"  target="_blank">新世代全顺</a></li>
            <li><span>
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star2.png" align="left" />
                 &nbsp;<strong>4.6</strong>分</span>
                <img src="/Content/images/kbph_3.jpg" align="left" /> &nbsp;
                <a href="/comment/show.php?type=1217"  target="_blank">Huracan </a></li>
            <li><span>
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star2.png" align="left" />
                 &nbsp;<strong>4.5</strong>分</span>
                <img src="/Content/images/kbph_4.jpg" align="left" /> &nbsp;
                <a href="/comment/show.php?type=134"  target="_blank">奥迪Q5-混动</a></li>
            <li><span>
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star2.png" align="left" />
                 &nbsp;<strong>4.5</strong>分</span>
                <img src="/Content/images/kbph_5.jpg" align="left" /> &nbsp;
                <a href="/comment/show.php?type=88"  target="_blank">比亚迪S6</a></li>
         </ul>
    </div>
<!--点评结束-->
</div></div>
<div class="clear"></div>
<div class="height20">&nbsp;</div>
<div class="hotcars">
	<div class="hcbar">
    	<div class="hcleft">热门车展</div>
        <div class="hcright">
<a href="http://www.cnchezhan.com/beijing.html" target="_blank">北京车展</a> <a href="http://www.cnchezhan.com/shanghai.html" target="_blank">上海车展</a> <a href="http://www.cnchezhan.com/guangzhou.html" target="_blank">广州车展</a> <a href="http://www.cnchezhan.com/chengdu.html" target="_blank">成都车展</a> <a href="http://www.cnchezhan.com/shenzhen.html" target="_blank">深圳车展</a> <a href="http://www.cnchezhan.com/shenyang.html" target="_blank">沈阳车展</a> <a href="http://www.cnchezhan.com/changsha.html" target="_blank">长沙车展</a> <a href="http://www.cnchezhan.com/dalian.html" target="_blank">大连车展</a> <a href="http://www.cnchezhan.com/wuhan.html" target="_blank">武汉车展</a> <a href="http://www.cnchezhan.com/nanchang.html" target="_blank">南昌车展</a> <a href="http://www.cnchezhan.com/haerbin.html" target="_blank">哈尔滨车展</a></div>
    	<div class="hcleft">热门车展</div>
        <div class="hcright"><a href="http://www.cnchezhan.com/chongqing.html" target="_blank">重庆车展</a> <a href="http://www.cnchezhan.com/xian.html" target="_blank">西安车展</a> <a href="http://www.cnchezhan.com/hefei.html" target="_blank">合肥车展</a> <a href="http://www.cnchezhan.com/kunming.html" target="_blank">昆明车展</a> <a href="http://www.cnchezhan.com/zhengzhou.html" target="_blank">郑州车展</a> <a href="http://www.cnchezhan.com/nanning.html" target="_blank">南宁车展</a> <a href="http://www.cnchezhan.com/dongwan.html" target="_blank">东莞车展</a> <a href="http://www.cnchezhan.com/changchun.html" target="_blank">长春车展</a> <a href="http://www.cnchezhan.com/ningbo.html" target="_blank">宁波车展</a> <a href="http://www.cnchezhan.com/qingdao.html" target="_blank">青岛车展</a> <a href="http://www.dinuanbaoyang.com" target="_blank">地暖保养</a></div>
        </div></div>
<div class="hotcars">
	<div class="hcbar">
    	<div class="hcleft">微型车</div>
        <div class="hcright"><a href="/comment/show.php?type=92" target="_blank" title="比亚迪f0">比亚迪f0</a><a href="/comment/show.php?type=576" target="_blank" title="铃木奥拓">铃木奥拓</a><a href="/comment/show.php?type=580" target="_blank" title="北斗星">北斗星</a><a href="/comment/show.php?type=105" target="_blank" title="长安奔奔">长安奔奔</a><a href="/comment/show.php?type=54" target="_blank" title="宝骏乐驰">宝骏乐驰</a><a href="/comment/show.php?type=668" class="huang" target="_blank" title="奇瑞QQ">奇瑞QQ</a><a href="/comment/show.php?type=482" target="_blank" title="吉利熊猫">吉利熊猫</a><a href="/comment/show.php?type=385" target="_blank" title="哈飞路宝">哈飞路宝</a><a href="/comment/show.php?type=457" target="_blank" title="江淮悦悦">江淮悦悦</a><a href="/comment/show.php?type=774" target="_blank" title="双环小贵族">双环小贵族</a><a href="/comment/show.php?type=321" target="_blank" title="菲亚特500">菲亚特500</a><a href="/comment/show.php?type=152" target="_blank" title="宝马i3">宝马i3</a></div>
        <div class="hcleft">小型车</div>
        <div class="hcright"><a href="/comment/show.php?type=260" target="_blank" title="大众polo">大众polo</a><a href="/comment/show.php?type=823" target="_blank" title="现代瑞纳">现代瑞纳</a><a href="/comment/show.php?type=579" target="_blank" title="长安铃木雨燕">长安铃木雨燕</a><a href="/comment/show.php?type=204" target="_blank" title="本田飞度">本田飞度</a><a href="/comment/show.php?type=357" target="_blank" title="福特嘉年华">福特嘉年华</a><a href="/comment/show.php?type=201" target="_blank" title="本田锋范">本田锋范</a><a href="/comment/show.php?type=693" target="_blank" title="日产骊威">日产骊威</a><a href="/comment/show.php?type=116" target="_blank" title="长安悦翔">长安悦翔</a><a href="/comment/show.php?type=852" class="huang" target="_blank" title="雪佛兰赛欧">雪佛兰赛欧</a><a href="/comment/show.php?type=674" target="_blank" title="起亚k2">起亚k2</a><a href="/comment/show.php?type=216" target="_blank" title="标致207">标致207</a></div>
        <div class="hcleft">紧凑型</div>
        <div class="hcright"><a href="/comment/show.php?type=252" target="_blank" title="大众新宝来">大众新宝来</a><a href="/comment/show.php?type=358" class="huang" target="_blank" title="福特福克斯">福特福克斯</a><a href="/comment/show.php?type=1229" target="_blank" title="起亚K3S">起亚K3S</a><a href="/comment/show.php?type=848" target="_blank" title="雪佛兰科鲁兹">雪佛兰科鲁兹</a><a href="/comment/show.php?type=251" target="_blank" title="大众捷达">大众捷达</a><a href="/comment/show.php?type=253" target="_blank" title="大众速腾">大众速腾</a><a href="/comment/show.php?type=257" target="_blank" title="大众朗逸">大众朗逸</a><a href="/comment/show.php?type=677" target="_blank" title="起亚k3">起亚k3</a><a href="/comment/show.php?type=95" target="_blank" title="比亚迪F3">比亚迪F3</a><a href="/comment/show.php?type=250" target="_blank" title="大众高尔夫">大众高尔夫</a><a href="/comment/show.php?type=224" target="_blank" title="别克凯越">别克凯越</a><a href="/comment/show.php?type=261" target="_blank" title="桑塔纳">桑塔纳</a></div>
        <div class="hcleft">中型车</div>
        <div class="hcright"><a href="/comment/show.php?type=255" class="huang" target="_blank" title="大众迈腾">大众迈腾</a><a href="/comment/show.php?type=361" target="_blank" title="福特蒙迪欧">福特蒙迪欧</a><a href="/comment/show.php?type=258" target="_blank" title="大众帕萨特">大众帕萨特</a><a href="/comment/show.php?type=200" target="_blank" title="本田雅阁">本田雅阁</a><a href="/comment/show.php?type=229" target="_blank" title="别克君威">别克君威</a><a href="/comment/show.php?type=335" target="_blank" title="丰田凯美瑞">丰田凯美瑞</a><a href="/comment/show.php?type=124" target="_blank" title="奥迪A4">奥迪A4</a><a href="/comment/show.php?type=141" target="_blank" title="宝马3系">宝马3系</a><a href="/comment/show.php?type=678" target="_blank" title="起亚K5">起亚K5</a><a href="/comment/show.php?type=611" target="_blank" title="马自达6">马自达6</a><a href="/comment/show.php?type=101" class="huang" target="_blank" title="奥迪A4L">奥迪A4L</a><a href="/comment/show.php?type=227" class="huang" target="_blank" title="别克君越">别克君越</a></div>
        <div class="hcleft">中大型</div>
        <div class="hcright"><a href="/comment/show.php?type=126" target="_blank" title="奥迪A6">奥迪A6</a><a href="/comment/show.php?type=170" target="_blank" title="奔驰E级">奔驰E级</a><a href="/comment/show.php?type=475" target="_blank" title="捷豹XF">捷豹XF</a><a href="/comment/show.php?type=522" target="_blank" title="克莱斯勒300c">克莱斯勒300c</a><a href="/comment/show.php?type=535" target="_blank" title="雷克萨斯gs">雷克萨斯gs</a><a href="/comment/show.php?type=142" class="huang" target="_blank" title="宝马5系">宝马5系</a><a href="/comment/show.php?type=228" target="_blank" title="林荫大道">林荫大道</a><a href="/comment/show.php?type=506" target="_blank" title="sls赛威">sls赛威</a><a href="/comment/show.php?type=128" target="_blank" title="奥迪A7">奥迪A7</a><a href="/comment/show.php?type=328" target="_blank" title="丰田新皇冠">丰田新皇冠</a><a href="/comment/show.php?type=952" target="_blank" title="凯迪拉克xts">凯迪拉克xts</a><a href="/comment/show.php?type=648" target="_blank" title="讴歌RL">讴歌RL</a></div>
        <div class="hcleft">豪华型</div>
        <div class="hcright"><a href="/comment/show.php?type=175" target="_blank" title="奔驰S级">奔驰S级</a><a href="/comment/show.php?type=270" target="_blank" title="大众辉腾">大众辉腾</a><a href="/comment/show.php?type=151" target="_blank" title="宝马7系">宝马7系</a><a href="/comment/show.php?type=129" class="huang" target="_blank" title="奥迪A8L">奥迪A8L</a><a href="/comment/show.php?type=476" target="_blank" title="捷豹XJ">捷豹XJ</a><a href="/comment/show.php?type=540" target="_blank" title="雷克萨斯LS">雷克萨斯LS</a><a href="/comment/show.php?type=531" target="_blank" title="劳斯莱斯幻影">劳斯莱斯幻影</a><a href="/comment/show.php?type=606" target="_blank" title="玛莎拉蒂总裁">玛莎拉蒂总裁</a><a href="/comment/show.php?type=921" target="_blank" title="奥迪S8">奥迪S8</a><a href="/comment/show.php?type=83" target="_blank" title="宾利慕尚">宾利慕尚</a><a href="/comment/show.php?type=687" target="_blank" title="起亚K9">起亚K9</a><a href="/comment/show.php?type=1254" target="_blank" title="红旗L5">红旗L5</a></div>
        <div class="hcleft">SUV</div>
        <div class="hcright"><a href="/comment/show.php?type=394" target="_blank" title="哈弗H6">哈弗H6</a><a href="/comment/show.php?type=104" target="_blank" title="奥迪Q5">奥迪Q5</a><a href="/comment/show.php?type=359" target="_blank" title="长安福特翼虎">长安福特翼虎</a><a href="/comment/show.php?type=337" target="_blank" title="丰田汉兰达">丰田汉兰达</a><a href="/comment/show.php?type=332" target="_blank" title="丰田RAV4">丰田RAV4</a><a href="/comment/show.php?type=262" class="huang" target="_blank" title="大众途观">大众途观</a><a href="/comment/show.php?type=330" target="_blank" title="丰田普拉多">丰田普拉多</a><a href="/comment/show.php?type=595" target="_blank" title="揽胜极光">揽胜极光</a><a href="/comment/show.php?type=196" target="_blank" title="本田CR-V">本田CR-V</a><a href="/comment/show.php?type=1009" target="_blank" title="铃木锋驭">铃木锋驭</a><a href="/comment/show.php?type=934" target="_blank" title="长安cs75">长安cs75</a><a href="/comment/show.php?type=1021" target="_blank" title="标致2008">标致2008</a></div>
        <div class="hcleft">MPV</div>
        <div class="hcright"><a href="/comment/show.php?type=263" target="_blank" title="大众途安">大众途安</a><a href="/comment/show.php?type=809" class="huang" target="_blank" title="五菱宏光">五菱宏光</a><a href="/comment/show.php?type=449" target="_blank" title="江淮瑞风">江淮瑞风</a><a href="/comment/show.php?type=121" target="_blank" title="长安欧诺">长安欧诺</a><a href="/comment/show.php?type=225" target="_blank" title="别克GL8">别克GL8</a><a href="/comment/show.php?type=205" target="_blank" title="本田奥德赛">本田奥德赛</a><a href="/comment/show.php?type=710" target="_blank" title="日产帅客">日产帅客</a><a href="/comment/show.php?type=338" target="_blank" title="丰田逸致">丰田逸致</a><a href="/comment/show.php?type=285" target="_blank" title="东风菱智">东风菱智</a><a href="/comment/show.php?type=397" target="_blank" title="海马普力马">海马普力马</a><a href="/comment/show.php?type=447" target="_blank" title="江淮和悦RS">江淮和悦RS</a><a href="/comment/show.php?type=866" target="_blank" title="毕加索">毕加索</a></div>
        <div class="hcleft">跑车</div>
        <div class="hcright"><a href="/comment/show.php?type=853" target="_blank" title="雪佛兰科迈罗">雪佛兰科迈罗</a><a href="/comment/show.php?type=163" target="_blank" title="宝马Z4">宝马Z4</a><a href="/comment/show.php?type=56" target="_blank" title="保时捷911">保时捷911</a><a href="/comment/show.php?type=125" target="_blank" title="奥迪A5">奥迪A5</a><a href="/comment/show.php?type=718" target="_blank" title="日产GT-R">日产GT-R</a><a href="/comment/show.php?type=140" target="_blank" title="奥迪TT">奥迪TT</a><a href="/comment/show.php?type=190" target="_blank" title="奔驰cls">奔驰cls</a><a href="/comment/show.php?type=833" class="huang" target="_blank" title="现代劳恩斯酷派">现代劳恩斯酷派</a><a href="/comment/show.php?type=371" target="_blank" title="福特野马">福特野马</a><a href="/comment/show.php?type=272" target="_blank" title="大众尚酷">大众尚酷</a><a href="/comment/show.php?type=190" target="_blank" title="奔驰CLS级">奔驰CLS级</a><a href="/comment/show.php?type=137" target="_blank" title="奥迪R8">奥迪R8</a></div>
        <div class="hcleft">新能源</div>
        <div class="hcright"><a href="/comment/show.php?type=98" class="huang" target="_blank" title="比亚迪秦">比亚迪秦</a><a href="/comment/show.php?type=275" target="_blank" title="大众途锐">大众途锐</a><a href="/comment/show.php?type=227" target="_blank" title="别克君越">别克君越</a><a href="/comment/show.php?type=153" target="_blank" title="宝马i8">宝马i8</a><a href="/comment/show.php?type=335" target="_blank" title="丰田凯美瑞">丰田凯美瑞</a><a href="/comment/show.php?type=89" target="_blank" title="比亚迪e6">比亚迪e6</a><a href="/comment/show.php?type=195" target="_blank" title="本田思域">本田思域</a><a href="/comment/show.php?type=783" target="_blank" title="特斯拉model s">特斯拉model s</a><a href="/comment/show.php?type=782" target="_blank" title="腾势">腾势</a><a href="/comment/show.php?type=331" target="_blank" title="丰田普锐斯">丰田普锐斯</a><a href="/comment/show.php?type=859" target="_blank" title="雪佛兰沃蓝达">雪佛兰沃蓝达</a></div>
    </div>
</div>
<div class="height20"></div>


<?php include_once("../footer.php") ?>