<?php 
include_once("../header.php"); 
$cur_page = 1;
$p_start = 0;
$level = "";
$p_level = "";//用于页码跳转
//查询条件
$condition = "";
$group = 0;
if(!empty($_GET['level']) && is_numeric($_GET['level'])){
    $level = $_GET['level'];
    $p_level = "&level={$level}";
    $condition .= "where car_type={$_GET['level']}";
}else{
    $group = 1;
}

if(!empty($_GET['type']) && is_numeric($_GET['type'])){
    if(!empty($condition))
        $condition .= " and car_id={$_GET['type']}";
    else
        $condition .= "where car_id={$_GET['type']}";
}

//页码
//总页数
$n_sql = "select count(id) as num from `car_test` {$condition}";
$n_res = mysql_query($n_sql);
$pages = mysql_fetch_assoc($n_res);
$pages = ceil(($pages['num']/10));
//当前页
if(!empty($_GET['page']) && is_numeric($_GET['page']) && $_GET['page']>0 && $_GET['page']<=$pages){
    $cur_page = $_GET['page'];
    $p_start = ($cur_page-1)*10;    
}

$sql = "select * from `car_test` {$condition} order by comm_time desc limit {$p_start},10";
$result = mysql_query($sql);
?>

<!--面包屑导航-->
<div class="daohang"><a href="/">首页</a> > 汽车评测</div>
<div class="chezhan_ad">
<script type="text/javascript">
    /*960*90 创建于 2015-08-20*/
    var cpro_id = "u2273851";
</script>
<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>

</div>
<div class="dianpingpic_content">

<div class="topbar"><span>汽车评测</span>去车道评测网(http://www.dzjinxinge.com )是专业汽车评测中心，为您提供最专业最全面的汽车评测报告，包含了丰富全面的各种汽车性能测试、加速测试、动力测试、刹车测试等精准的汽车数据测试报告，是中国最专业的汽车评测网站。</div>



<div class="zh_pingce_pp">
  <div class="zh_pingce_pp_s">
    <div class="pingce_s_name">汽车品牌</div>
    <div class="pingce_s_xzpp">
    <select id="Sbrands" size=1 name=housetype class="pingce_select">
    <option value="" selected>请选择汽车品牌</option>
    </select></div>
    <div class="pingce_s_xzlx">
    <select id="SCars" size=1 name=housetype class="pingce_select">
    <option value="" selected>请选择汽车类型</option>
    </select></div>
    <div class="pingce_s_ss"><input class="pingce_ss" name="Submit" type="button" value=""></div>
    <div class="pingce_s_rmss">
热门搜索：<a href="/Article/index.php?brandid=77&carid=1009" target="_blank" title="长安铃木锋驭">锋驭</a> <a href="/Article/index.php?brandid=14&carid=1021" target="_blank" title="东风标致2008">标致2008 </a> <a href="/Article/index.php?brandid=28&carid=252" target="_blank" title="新宝来">新宝来</a> <a href="/Article/index.php?brandid=28&carid=262" target="_blank" title="途观">途观</a> <a href="/Article/index.php?brandid=39&carid=358" target="_blank" title="福克斯">福克斯</a> <a href="/Article/index.php?brandid=28&carid=253" target="_blank" title="速腾">速腾</a> <a href="/Article/index.php?brandid=119&carid=848" target="_blank" title="科鲁兹">科鲁兹</a> <a href="/Article/index.php?brandid=11&carid=175" target="_blank" title="奔驰S级">奔驰S级</a>
    </div>
  </div>
  <div class="zh_pingce_qcjb">
    <div class="pingce_qcjb_name">汽车级别</div>
    <div class="pingce_qcjb_cxlb">
    <a href="/Article/index.php?level=27"><img src="/Content/images/pingce_wxtp.jpg" width="31" height="18" />微型</a>
      <a href="/Article/index.php?level=28" target="_blank"><img src="/Content/images/pingce_xxtp.jpg" width="41" height="18" />小型</a>
      <a href="/Article/index.php?level=29" target="_blank"><img src="/Content/images/pingce_jcxtp.jpg" width="43" height="18" />紧凑型</a>
      <a href="/Article/index.php?level=46" target="_blank"><img src="/Content/images/pingce_zxtp.jpg" width="46" height="18" />中型</a>
      <a href="/Article/index.php?level=47" target="_blank"><img src="/Content/images/pingce_zdxtp.jpg" width="48" height="18" />中大型</a>
      <a href="/Article/index.php?level=48" target="_blank"><img src="/Content/images/pingce_hhxtp.jpg" width="53" height="18" />豪华型</a>
      <a href="/Article/index.php?level=49" target="_blank"><img src="/Content/images/pingce_suvtp.jpg" width="45" height="18" />SUV</a>
      <a href="/Article/index.php?level=50" target="_blank"><img src="/Content/images/pingce_mpvtp.jpg" width="45" height="18" />MPV</a>
      <a href="/Article/index.php?level=51" target="_blank"><img src="/Content/images/pingce_pctp.jpg" width="50" height="18" />跑车</a>
      <a href="/Article/index.php?level=52" target="_blank"><img src="/Content/images/pingce_xnytp.jpg" width="31" height="18" />新能源</a>
    </div>
  </div>
</div>

<script>
    $(function () {
        searchLoadBrand();
        var targerURL = "/Comment/index" ;
        $(".pingce_ss").click(function () {
            var brandid = $("#Sbrands").val();
            var carid = $("#SCars").val();
            window.open(targerURL + "?" + $.param({ brandid: (brandid ? brandid : 0), carid: (carid ? carid : 0) }));
        });
    });

    function searchLoadBrand()
    {
        $.post("/api/car/Brands/", { pid: 0 }, function (json) {
            var sb=$("#Sbrands");
            $.each(json, function () {
                
                sb.append('<option value="' + this.ID +'">' + this.Title + '</option>');
            });

            $("#Sbrands").val("")
            serachLoadCars();

        });
        $("#Sbrands").change(function () { serachLoadCars(); });
        
    }

    function serachLoadCars()
    { 
        var bid = $("#Sbrands").val();
        if (bid == null || bid == '') return;
        $.post("/api/car/cars/", { brandID: bid }, function (json) {
            var sb = $("#SCars");
            sb.html('');
            sb.append(' <option value="" selected>请选择汽车类型</option>');
            $.each(json, function () {
                sb.append('<option value="' + this.ID + '">' + this.Title + '</option>');
            });

            $("#SCars").val("")
        });

    }
</script>

<div class="clear"></div>
<div class="zh_prize_left">
    <div class="zh_prize_xb">
    <!-- 全部汽车点评 开始-->
    <div class="zh_qbdp_title">全部汽车评测信息</div>
        <?php while($row=mysql_fetch_assoc($result)){?>
        <div class="carcontent">
            <div class="ccleft">
              <a href="/Article/show.php?id=<?php echo $row['car_id'] ?>" target="_blank">
                <img src="http://www.qupingche.com<?php echo $row['car_pic'] ?>" />
              </a>
            </div>
            <div class="ccright">
              <span>
                <a href="/Article/show.php?id=<?php echo $row['car_id'] ?>" target="_blank"><?php echo $row['car_title'] ?></a>
              </span><br />
              发布时间：<strong><?php echo $row['comm_time'] ?></strong>  &nbsp;&nbsp;  点击数：<strong><?php echo $row['cnum'] ?></strong><br />编辑点评：<?php echo $row['dianping'] ?><br/>
              <a href="/Article/show.php?id=<?php echo $row['car_id'] ?>" target="_blank"><strong>>>查看详情</strong></a>
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
        <a href="/Article/index.php?page=1{<?php echo $p_level ?>}">首页</a>&nbsp;&nbsp;
        <a href="/Article/index.php?page=<?php echo ($cur_page-1).$p_level; ?>">上一页</a>&nbsp;&nbsp;
    <?php } ?>
    <?php 
        $s_page = $cur_page-4>0?$cur_page-4:1;
        $e_page = $cur_page+5>$pages?$pages:$cur_page+5;
        for($i=$s_page;$i<=$e_page;$i++){
            if($i == $cur_page){
                echo $i.'&nbsp;&nbsp;';
            }else{ ?> 
                <a href='/Article/index.php?page=<?php echo $i.$p_level;?>'><?php echo $i;?></a>&nbsp;&nbsp;    
    <?php }} ?>
    
    <?php if($pages == $cur_page){ ?>
        <a disabled="disabled">下一页</a>&nbsp;&nbsp;
        <a disabled="disabled">尾页</a></div>
    <?php }else{ ?>
        <a href="/Article/index.php?page=<?php echo ($cur_page+1).$p_level; ?>">下一页</a>&nbsp;&nbsp;
        <a href="/Article/index.php?page=<?php echo $pages.$p_level; ?>">尾页</a></div>
    <?php } ?>
<!--MvcPager 1.5 for ASP.NET MVC 3.0 © 2009-2011 Webdiyer (http://www.webdiyer.com)-->

  </div>
  </div></div>
<!--分页显示结束-->  
</div>

<div class="zh_prize_right">
 <div class="zh_prize_ad">
<img src="/ad/2014shijiebei.jpg" alt="看2014巴西世界杯，关注球星与车的那些事儿" />
</div>
   
<div class="hotcarbar">
    <div class="hotcartitle">热门点评<span ><a href="/Comment"><img src="/Content/images/left.jpg" />更多</a></span></div>
    <ul>
        <li>
            <img src="http://www.qupingche.com/attached/image/201312/26140639_9432.jpg" align="left" style="width:70px;height:51px;" /><a href="/Comment/show.php?type=1171"  target="_blank">布加迪Galibier</a><br />评分：<strong>5.0</strong>分 点评：<strong>1</strong>次</li>
        <li>
            <img src="http://www.qupingche.com/attached/image/201308/23111813_4658.jpg" align="left" style="width:70px;height:51px;" /><a href="/Comment/show.php?type=458"  target="_blank">新世代全顺</a><br />评分：<strong>4.6</strong>分 点评：<strong>90</strong>次</li>
        <li>
            <img src="http://www.qupingche.com/attached/image/201402/08153240_0760.jpg" align="left" style="width:70px;height:51px;" /><a href="/Comment/show.php?type=1217"  target="_blank">Huracan </a><br />评分：<strong>4.6</strong>分 点评：<strong>7</strong>次</li>
        <li>
            <img src="http://www.qupingche.com/attached/image/201308/20165602_4018.jpg" align="left" style="width:70px;height:51px;" /><a href="/Comment/show.php?type=134"  target="_blank">奥迪Q5-混动</a><br />评分：<strong>4.5</strong>分 点评：<strong>8</strong>次</li>
        <li>
            <img src="http://www.qupingche.com/attached/image/201308/20091110_4098.jpg" align="left" style="width:70px;height:51px;" /><a href="/Comment/show.php?type=88"  target="_blank">比亚迪S6</a><br />评分：<strong>4.5</strong>分 点评：<strong>1149</strong>次</li>
     </ul>
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