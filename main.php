<?php 
$time = date('Y-m-d',time());
$y_time = date('Y-m-d',strtotime("-1 day"));
//首页显示评论数
$y_sql = "select sum from `comment_info` where comm_time='{$y_time}'";
$y_res = mysql_query($y_sql);
$y_num = 197616;
if(mysql_num_rows($y_res)>0){
    $t = mysql_fetch_row($y_res);
    $y_num = $t[0];
}

$t_num = 0;
$t_sql = "select * from `comment_info` where comm_time='{$time}'";
$t_res = mysql_query($t_sql);

if(mysql_num_rows($t_res)==0){
    $t_num = mt_rand(200,500);
    $y_num += $t_num;
    $t_sql = "insert into `comment_info` (`sum`,`today`,`comm_time`) values({$y_num},{$t_num},'{$time}')";
    mysql_query($t_sql);
}else{
    $t_num = mysql_fetch_assoc($t_res);
    $t_num = $t_num['today'];
}
//首页评论
$sql = "select * from `car_comment` group by car_id limit 8";
$result = mysql_query($sql);
?>
 <div class="jieshao">车道评测网（http://www.dzjinxinge.com）--我们专注于汽车点评，我们是专业的汽车点评网站，我们倾听汽车用户的真实声音。</div>
<div class="daolan">
<div class="dlleft">
<div class="dlline"></div>
<div class="dll01">微型车</div>
<div class="dll02"><a href="/comment/show.php?type=92" target="_blank" title="比亚迪f0">比亚迪f0</a><a href="/comment/show.php?type=576" target="_blank" title="奥拓">奥拓</a><a href="/comment/show.php?type=580" target="_blank" title="北斗星">北斗星</a><a href="/comment/show.php?type=105" target="_blank" title="奔奔">奔奔</a><a href="/comment/show.php?type=54" target="_blank" title="乐驰">乐驰</a><a href="/comment/show.php?type=668" class="huang" target="_blank" title="奇瑞QQ">奇瑞QQ</a><a href="/comment/show.php?type=482" target="_blank" title="吉利熊猫">吉利熊猫</a><a href="/comment/show.php?type=385" target="_blank" title="路宝">路宝</a><a href="/comment/show.php?type=457" target="_blank" title="江淮悦悦">江淮悦悦</a><a href="/comment/show.php?type=774" target="_blank" title="小贵族">小贵族</a></div>
<div class="dll03">
<a href="/Comment/Index.php?level=27" target="_blank"><img src="/Content/images/morebar.jpg" alt="更多" /></a>
</div>
<div class="dll01">小型车</div>
<div class="dll02"><a href="/comment/show.php?type=260" target="_blank" title="polo">大众polo</a><a href="/comment/show.php?type=823" target="_blank" title="瑞纳">瑞纳</a><a href="/comment/show.php?type=579" target="_blank" title="雨燕">雨燕</a><a href="/comment/show.php?type=204" target="_blank" title="飞度">飞度</a><a href="/comment/show.php?type=357" target="_blank" title="嘉年华">嘉年华</a><a href="/comment/show.php?type=201" target="_blank" title="锋范">锋范</a><a href="/comment/show.php?type=693" target="_blank" title="骊威">骊威</a><a href="/comment/show.php?type=116" target="_blank" title="悦翔">悦翔</a><a href="/comment/show.php?type=852" class="huang" target="_blank" title="赛欧">赛欧</a><a href="/comment/show.php?type=674" target="_blank" title="起亚k2">起亚k2</a><a href="/comment/show.php?type=216" target="_blank" title="标致207">标致207</a></div>
<div class="dll03">
<a href="/Comment/Index.php?level=28" target="_blank"><img src="/Content/images/morebar.jpg" alt="更多" /></a>
</div>
<div class="dll01">紧凑型</div>
<div class="dll02"><a href="/comment/show.php?type=252" target="_blank" title="新宝来">新宝来</a><a href="/comment/show.php?type=358" class="huang" target="_blank" title="福克斯">福克斯</a><a href="/comment/show.php?type=848" target="_blank" title="科鲁兹">科鲁兹</a><a href="/comment/show.php?type=251" target="_blank" title="捷达">捷达</a><a href="/comment/show.php?type=253" target="_blank" title="速腾">速腾</a><a href="/comment/show.php?type=257" target="_blank" title="朗逸">朗逸</a><a href="/comment/show.php?type=677" target="_blank" title="起亚k3">起亚k3</a><a href="/comment/show.php?type=95" target="_blank" title="比亚迪F3">比亚迪F3</a><a href="/comment/show.php?type=224" target="_blank" title="别克凯越">别克凯越</a><a href="/comment/show.php?type=261" target="_blank" title="桑塔纳">桑塔纳</a></div>
<div class="dll03">
<a href="/Comment/Index.php?level=29" target="_blank"><img src="/Content/images/morebar.jpg" alt="更多" /></a>
</div>
<div class="dll01">中型车</div>
<div class="dll02"><a href="/comment/show.php?type=255" class="huang" target="_blank" title="迈腾">迈腾</a><a href="/comment/show.php?type=361" target="_blank" title="蒙迪欧">蒙迪欧</a><a href="/comment/show.php?type=258" target="_blank" title="帕萨特">帕萨特</a><a href="/comment/show.php?type=200" target="_blank" title="雅阁">雅阁</a><a href="/comment/show.php?type=229" target="_blank" title="君威">君威</a><a href="/comment/show.php?type=335" target="_blank" title="凯美瑞">凯美瑞</a><a href="/comment/show.php?type=101" target="_blank" title="奥迪A4L">奥迪A4L</a><a href="/comment/show.php?type=141" target="_blank" title="宝马3系">宝马3系</a><a href="/comment/show.php?type=678" target="_blank" title="起亚K5">起亚K5</a><a href="/comment/show.php?type=611" target="_blank" title="马自达6">马自达6</a></div>
<div class="dll03">
<a href="/Comment/Index.php?level=46" target="_blank"><img src="/Content/images/morebar.jpg" alt="更多" /></a>
</div>
<div class="dll01">中大型</div>
<div class="dll02"><a href="/comment/show.php?type=126" target="_blank" title="奥迪A6">奥迪A6</a><a href="/comment/show.php?type=170" target="_blank" title="奔驰E级">奔驰E级</a><a href="/comment/show.php?type=475" target="_blank" title="捷豹XF">捷豹XF</a><a href="/comment/show.php?type=522" target="_blank" title="克莱斯勒300c">克莱斯勒300c</a><a href="/comment/show.php?type=535" target="_blank" title="雷克萨斯gs">雷克萨斯gs</a><a href="/comment/show.php?type=142" class="huang" target="_blank" title="宝马5系">宝马5系</a><a href="/comment/show.php?type=102" target="_blank" title="奥迪A6L">奥迪A6L</a><a href="/comment/show.php?type=506" target="_blank" title="sls赛威">sls赛威</a></div>
<div class="dll03">
<a href="/Comment/Index.php?level=47" target="_blank"><img src="/Content/images/morebar.jpg" alt="更多" /></a>
</div>
<div class="dll01">豪华型</div>
<div class="dll02"><a href="/comment/show.php?type=270" target="_blank" title="辉腾">辉腾</a><a href="/comment/show.php?type=151" target="_blank" title="宝马7系">宝马7系</a><a href="/comment/show.php?type=175" class="huang" target="_blank" title="奔驰S级">奔驰S级</a><a href="/comment/show.php?type=476" target="_blank" title="捷豹XJ">捷豹XJ</a><a href="/comment/show.php?type=540" target="_blank" title="雷克萨斯LS">雷克萨斯LS</a><a href="/comment/show.php?type=531" target="_blank" title="劳斯莱斯幻影">劳斯莱斯幻影</a><a href="/comment/show.php?type=606" target="_blank" title="总裁">总裁</a>
<a href="/comment/show.php?type=921" target="_blank" title="奥迪S8">奥迪S8</a><a href="/comment/show.php?type=83" target="_blank" title="慕尚">慕尚</a></div>
<div class="dll03">
<a href="/Comment/Index.php?level=48" target="_blank"><img src="/Content/images/morebar.jpg" alt="更多" /></a>
</div>
<div class="dll01">SUV</div>
<div class="dll02"><a href="/comment/show.php?type=394" target="_blank" title="哈弗H6">哈弗H6</a><a href="/comment/show.php?type=104" target="_blank" title="奥迪Q5">奥迪Q5</a><a href="/comment/show.php?type=359" target="_blank" title="翼虎">翼虎</a><a href="/comment/show.php?type=337" target="_blank" title="汉兰达">汉兰达</a><a href="/comment/show.php?type=934" target="_blank" title="长安CS75">CS75</a><a href="/comment/show.php?type=262" class="huang" target="_blank" title="途观">途观</a><a href="/comment/show.php?type=330" target="_blank" title="普拉多">普拉多</a><a href="/comment/show.php?type=595" target="_blank" title="揽胜极光">揽胜极光</a><a href="/comment/show.php?type=196" target="_blank" title="本田CR-V">本田CR-V</a><a href="/comment/show.php?type=1009" target="_blank" title="锋驭">锋驭</a></div>
<div class="dll03">
<a href="/Comment/Index.php?level=49" target="_blank"><img src="/Content/images/morebar.jpg" alt="更多" /></a>
</div>
<div class="dll01">MPV</div>
<div class="dll02"><a href="/comment/show.php?type=263" target="_blank" title="途安">途安</a><a href="/comment/show.php?type=809" class="huang" target="_blank" title="五菱宏光">五菱宏光</a><a href="/comment/show.php?type=449" target="_blank" title="瑞风">瑞风</a><a href="/comment/show.php?type=121" target="_blank" title="欧诺">欧诺</a><a href="/comment/show.php?type=225" target="_blank" title="别克GL8">别克GL8</a><a href="/comment/show.php?type=205" target="_blank" title="奥德赛">奥德赛</a><a href="/comment/show.php?type=710" target="_blank" title="帅客">帅客</a><a href="/comment/show.php?type=338" target="_blank" title="逸致">逸致</a><a href="/comment/show.php?type=285" target="_blank" title="菱智">菱智</a><a href="/comment/show.php?type=397" target="_blank" title="普力马">普力马</a><a href="/comment/show.php?type=942" target="_blank" title="风光">风光</a></div>
<div class="dll03">
<a href="/Comment/Index.php?level=50" target="_blank"><img src="/Content/images/morebar.jpg" alt="更多" /></a>
</div>
<div class="dll01">跑车</div>
<div class="dll02"><a href="/comment/show.php?type=853" target="_blank" title="雪佛兰科迈罗">雪佛兰科迈罗</a><a href="/comment/show.php?type=163" target="_blank" title="宝马Z4">宝马Z4</a><a href="/comment/show.php?type=56" target="_blank" title="保时捷911">保时捷911</a><a href="/comment/show.php?type=125" target="_blank" title="奥迪A5">奥迪A5</a><a href="/comment/show.php?type=718" target="_blank" title="日产GT-R">日产GT-R</a><a href="/comment/show.php?type=140" target="_blank" title="奥迪TT">奥迪TT</a><a href="/comment/show.php?type=833" class="huang" target="_blank" title="现代劳恩斯酷派">现代劳恩斯酷派</a></div>
<div class="dll03">
<a href="/Comment/Index.php?level=51" target="_blank"><img src="/Content/images/morebar.jpg" alt="更多" /></a>
</div>
<div class="dll04">新能源</div>
<div class="dll05"><a href="/comment/show.php?type=98" class="huang" target="_blank" title="比亚迪秦">比亚迪秦</a><a href="/comment/show.php?type=275" target="_blank" title="途锐">途锐</a><a href="/comment/show.php?type=227" target="_blank" title="君越">君越</a><a href="/comment/show.php?type=153" target="_blank" title="宝马i8">宝马i8</a><a href="/comment/show.php?type=335" target="_blank" title="凯美瑞">凯美瑞</a><a href="/comment/show.php?type=89" target="_blank" title="比亚迪e6">比亚迪e6</a><a href="/comment/show.php?type=195" target="_blank" title="思域">本田思域</a><a href="/comment/show.php?type=783" target="_blank" title="特斯拉model s">特斯拉model s</a><a href="/comment/show.php?type=782" target="_blank" title="腾势">腾势</a></div>
<div class="dll06">
<a href="/Comment/Index.php?level=52" target="_blank"><img src="/Content/images/morebar.jpg" alt="更多" /></a>
</div>
</div>
<div class="dlright">
<div class="dlr01">今日点评：<strong><?php echo $t_num ?></strong> 次</div>
<div class="dlr02">累计点评：<strong><?php echo $y_num ?></strong> 次</div>
<div class="dlr03">
<div class="tea">试试写<a href="/Comment" target="_blank">第一封点评</a>？与千万网友一起分享你的<a>真实用车体验</a>！</div>
</div>
<div class="dlr04">
<a href="/about/show.php?type=19198948650" target="_blank">注册车道评测网网会员有什么样的好处？</a><br />
<a href="/about/show.php?type=19198948651#02" target="_blank">财富是什么？如何赚取财富？</a><br />
<a href="/about/show.php?type=19198948651#02" target="_blank">威望是什么？如何获得威望？</a>
</div>
</div>
</div>
</div>
<div class="index_ad">
	<a href="/report" title="汽车质量调研报告" target="_blank"><img src="/Content/images/report.jpg" alt="汽车质量调研报告" style="float:left;" /></a>
</div>
<!--内容-->
<div class="content">
    <div class="left">
		<div class="dpindex"><span><a href="/help/show.php?type=25584939316" target="_blank" title="参与汽车点评有哪些好处？">参与汽车点评有哪些好处？</a></span>精彩汽车点评(共有<?php echo $y_num; ?>条网友点评)</div>
        <?php while($row=mysql_fetch_assoc($result)){ 
            $res = mysql_query("select count(car_id) from `car_comment` where car_id={$row['car_id']}");
            $comm_num = mysql_fetch_row($res);
        ?>
        <div class="dpindex01">
            <a href="/Comment/show.php?type=<?php echo $row['car_id']?>" title="" target="_blank">
                <img src="http://www.qupingche.com/<?php echo $row['car_pic'] ?>" class="imgbar" alt="" align="left" alt="本田凌派" /></a>
            <a href="/Comment/show.php?type=<?php echo $row['car_id']?>" class="blue" target="_blank"><?php echo $row['user_name'].' 点评 '.$row['car_name'] ?></a><br />
            <span class="youdian">
            <?php for($i=0;$i<ceil($row['scroe']);$i++){ ?>
                <img src="/Content/images/sstar.png" align="baseline" />
            <?php }
                for($i=0;$i<5-ceil($row['scroe']);$i++){
            ?>
                <img src="/Content/images/sstar1.png" align="baseline" />
            <?php } ?>

                <?php echo $row['scroe'] ?></span>分，共<span class="youdian"><?php echo $comm_num[0]; ?></span>人参与该车型点评<br />
            <b class="youdian">优点：</b><?php echo mb_substr($row['virtue'], 0,30,"utf-8") ?>...<br />                
            <b class="quedian">缺点：</b><?php echo mb_substr($row['disadv'], 0,42,"utf-8") ?>...<br />              
            <b class="zongshu">综述：</b><?php echo mb_substr($row['zong'], 0,30,"utf-8") ?>...<br />
            <span class="huise"><?php echo $row['comm_time'] ?></span>
        </div>
        <?php } ?>

        <div class="dpindex02">
                        <select id="SRbrands" class="selectedindex">
                            <option value="" selected>请选择汽车品牌</option>
                        </select>
                        <select ID="SRCars" class="selectedindex">
                            <option value="" selected>请选择相关车型</option>
                        </select>
                        <input id="srButton" name="" type="button" class="btn_index" value="搜索点评" />
        </div>
		<script type="text/javascript">

    var rightSearchType = 2;

    function selectTag(showContent, type, selfObj) {

        rightSearchType = type;
        $("#tags").children("li").css("background-position-y", "0px")
        $(selfObj).css("background-position-y", "35px")

        // 操作内容
        $("#showArticle").hide();
        $("#ShowCar").hide();
        $("#" + showContent).show();
    }

    $(function () {
        SRLoadBrand();
        
        $("#srButton").click(function () {
            var brandid = $("#SRbrands").val();
            var carid = $("#SRCars").val();
            var targerURL = "/Comment/show.php?type=" + carid;
            window.open(targerURL);
        });
    });

    function SRLoadBrand() {
        $.post("/api/car/Brands/", { pid: 0 }, function (json) {
            var sb = $("#SRbrands");
            $.each(json, function () {

                sb.append('<option value="' + this.ID + '">' + this.Title + '</option>');
            });

            $("#SRbrands").val("")
            SRLoadCars();
        });
        $("#SRbrands").change(function () { SRLoadCars(); });

    }

    function SRLoadCars() {
        var bid = $("#SRbrands").val();
        if (bid == null || bid == '') return;
        $.post("/api/car/cars/", { brandID: bid }, function (json) {
            var sb = $("#SRCars");
            sb.html('');
            sb.append(' <option value="" selected>请选择汽车类型</option>');
            $.each(json, function () {
                sb.append('<option value="' + this.ID + '">' + this.Title + '</option>');
            });
            $("#SRCars").val("")
        });

    }
</script>
        <div class="dpindexmore"><span>或</span> <a href="/Comment" target="_blank">点击查看更多点评数据>></a></div>
    </div>
    <div class="right">
        <div class="zh_prize_ad">
            <img src="/ad/2014shijiebei.jpg" alt="看2014巴西世界杯，关注球星与车的那些事儿" /></div>
        <div class="rightlinek"></div>

        <div class="helpbar">
            <div class="hbtitle">汽车评测<span><a href="/Article" title="汽车评测" target="_blank"><img src="/Content/images/left.jpg" />更多</a></span></div>
            <ul>
                <li>[评测]<a href="/Article/show.php?type=54539677360" title="测试2015款雪佛兰新款科鲁兹1.4T DCG旗舰版" target="_blank">测试2015款雪佛兰新款科鲁兹1.4T DCG旗</a></li>
                <li>[评测]<a href="/Article/show.php?type=54435342521" title="试驾2015款MINI COOPER S五门版" target="_blank">试驾2015款MINI COOPER S五门版</a></li>
                <li>[评测]<a href="/Article/show.php?type=54333319330" title="试驾2015款奔腾X80 1.8T自动运动型" target="_blank">试驾2015款奔腾X80 1.8T自动运动型</a></li>
                <li>[评测]<a href="/Article/show.php?type=54020204301" title="试驾2014款雷诺梅甘娜 R.S.运动版" target="_blank">试驾2014款雷诺梅甘娜 R.S.运动版</a></li>
                <li>[评测]<a href="/Article/show.php?type=54020060593" title="试驾2014款比亚迪G5 1.5TID 自动旗舰型" target="_blank">试驾2014款比亚迪G5 1.5TID 自动旗舰型</a></li>
                <li>[评测]<a href="/Article/show.php?type=53915754797" title="试驾2014款进口宝马i8，动力充沛/科技感十足" target="_blank">试驾2014款进口宝马i8，动力充沛/科技感</a></li>
                <li>[评测]<a href="/Article/show.php?type=53811316305" title="测试2014款陆风X5  2.0T自动创领版，搭载8AT变速箱" target="_blank">测试2014款陆风X5  2.0T自动创领版，搭</a></li>
                <li>[评测]<a href="/Article/show.php?type=53811303697" title="测试2014款吉利帝豪三厢1.3T CVT尊贵型" target="_blank">测试2014款吉利帝豪三厢1.3T CVT尊贵型</a></li>

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
        <div class="rightline"></div>
        <div class="helpbar">
            <div class="hbtitle">网站公告<span><a href="/help/index" target="_blank" title="网站公告"><img src="/Content/images/left.jpg"  />更多</a></span></div>
            <ul>
                 <li><span>[04-04]</span>[活动]<a href="/help/show.php?type=39558753834" title="2014年4月改签名送汽油活动" target="_blank">2014年4月改签名送汽油活动</a></li>
                 <li><span>[04-04]</span>[活动]<a href="/help/show.php?type=39558753726" title="2014年4月发点评拿财富活动开始" target="_blank">2014年4月发点评拿财富活动开始</a></li>
                 <li><span>[04-04]</span>[活动]<a href="/help/show.php?type=39558753541" title="2014年3月改签名送汽油活动获奖名单" target="_blank">2014年3月改签名送汽油活动获奖名单</a></li>
                 <li><span>[04-04]</span>[活动]<a href="/help/show.php?type=39558753419" title="2014年3月发点评,拿财富活动获奖名单" target="_blank">2014年3月发点评,拿财富活动获奖名单</a></li>
                 <li><span>[03-03]</span>[活动]<a href="/help/show.php?type=36821298446" title="2014年3月改签名送汽油活动" target="_blank">2014年3月改签名送汽油活动</a></li>
                 <li><span>[03-03]</span>[活动]<a href="/help/show.php?type=36821298445" title="2014年3月发点评拿财富活动开始" target="_blank">2014年3月发点评拿财富活动开始</a></li>
                
            </ul>
        </div>
        <div class="rightline"></div>
        <div class="sidebar1">
            <div class=" mouth text3">会员排行榜</div>
            <div class="mouth2 text4">
                <span class="color4 fr">汽油最多</span>
                <span class="color3">财富榜</span>
            </div>
            <div class="mouth3" style="width:300px;">
                <div class="mouth3_img" >
                    <img src="/Content/images/zh_dps_yhdt.jpg" width="45" height="46" title="2014momo" />
                </div>
                <div class="mouth3_img" >
                    <img src="/attached/headimg/19362262495.jpg" width="45" height="46" title="xixiai88" />
                </div>
                <div class="mouth3_img" >
                    <img src="/attached/headimg/19530344355.jpg" width="45" height="46" title="sx429044767" />
                </div>
                <div class="mouth3_img" >
                    <img src="/Content/images/zh_dps_yhdt.jpg" width="45" height="46" title="wewewe" />
                </div>
                <div class="mouth3_img" >
                    <img src="/attached/headimg/24984658367.jpg" width="45" height="46" title="qiutianlai" />
                </div>
            </div>
            <div class="mouth2 text4">
                <span class=" color4 fr">行驶里程</span>
                <span class="color3">威望榜</span>
            </div>
            <div class="mouth3" style="width:300px;">
                <div class="mouth3_img" >
                    <img src="/Content/images/zh_dps_yhdt.jpg" width="45" height="46" title="2014momo" />
                   
                </div>
                <div class="mouth3_img" >
                    <img src="/attached/headimg/19362262495.jpg" width="45" height="46" title="xixiai88" />
                   
                </div>
                <div class="mouth3_img" >
                    <img src="/attached/headimg/19530344355.jpg" width="45" height="46" title="sx429044767" />
                   
                </div>
                <div class="mouth3_img" >
                    <img src="/Content/images/zh_dps_yhdt.jpg" width="45" height="46" title="wewewe" />
                   
                </div>
                <div class="mouth3_img" >
                    <img src="/attached/headimg/24984658367.jpg" width="45" height="46" title="qiutianlai" />
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<div class="prizeindex">
    <div class="prizeindexl">奖品专区<span><a href="/prize" title="奖品专区" target="_blank"><img src="/content/images/left.jpg" />更多</a></span></div>
    <div class="prizeindexr">如何获得奖品？马上查看<a href="/about/show.php?type=19198948650" target="_blank" title="《车道评测网攻略》">《车道评测网攻略》</a></div>
    <div class="car_content5">
        <a href="/Prize/show.php?type=38147837418" title="威卡司吸盘式万用固定座" target="_blank">
            <img src="/attached/image/201403/19112234_6898.jpg" alt="威卡司吸盘式万用固定座" /></a>
        <span><a href="/Prize/show.php?type=38147837418" title="威卡司吸盘式万用固定座" target="_blank">威卡司吸盘式万用固定座</a></span><br />
        兑换财富：<strong>12000</strong>
    </div>
    <div class="car_content5">
        <a href="/Prize/show.php?type=38147836910" title="卡饰社多功能防滑垫" target="_blank">
            <img src="/attached/image/201403/19111308_5578.jpg" alt="卡饰社多功能防滑垫" /></a>
        <span><a href="/Prize/show.php?type=38147836910" title="卡饰社多功能防滑垫" target="_blank">卡饰社多功能防滑垫</a></span><br />
        兑换财富：<strong>2600</strong>
    </div>
    <div class="car_content5">
        <a href="/Prize/show.php?type=38147836568" title="轩之缘车载蓝牙免提电话" target="_blank">
            <img src="/attached/image/201403/19110428_7328.jpg" alt="轩之缘车载蓝牙免提电话" /></a>
        <span><a href="/Prize/show.php?type=38147836568" title="轩之缘车载蓝牙免提电话" target="_blank">轩之缘车载蓝牙免提电话</a></span><br />
        兑换财富：<strong>38000</strong>
    </div>
    <div class="car_content5">
        <a href="/Prize/show.php?type=38147836409" title="E路航便携式GPS导航仪" target="_blank">
            <img src="/attached/image/201403/19105648_2518.jpg" alt="E路航便携式GPS导航仪" /></a>
        <span><a href="/Prize/show.php?type=38147836409" title="E路航便携式GPS导航仪" target="_blank">E路航便携式GPS导航仪</a></span><br />
        兑换财富：<strong>45000</strong>
    </div>
    <div class="car_content5">
        <a href="/Prize/show.php?type=18425711050" title="中国石化加油卡面值200元" target="_blank">
            <img src="/attached/image/201308/02142052_0048.jpg" alt="中国石化加油卡面值200元" /></a>
        <span><a href="/Prize/show.php?type=18425711050" title="中国石化加油卡面值200元" target="_blank">中国石化加油卡面值200元</a></span><br />
        兑换财富：<strong>27000</strong>
    </div>
    <div class="car_content5">
        <a href="/Prize/show.php?type=18425711049" title="中国石化加油卡面值500元" target="_blank">
            <img src="/attached/image/201308/02140652_5148.jpg" alt="中国石化加油卡面值500元" /></a>
        <span><a href="/Prize/show.php?type=18425711049" title="中国石化加油卡面值500元" target="_blank">中国石化加油卡面值500元</a></span><br />
        兑换财富：<strong>65000</strong>
    </div>
</div>
-->
<div class="link">
<span>友情链接：</span>
<a href="http://www.csadec.com/" target="_blank">汽车估损师</a>
<a href="http://www.zjchewang.com/" target="_blank">浙江车网</a>
 <a href="http://www.shiguche88.com/" target="_blank">事故车交易网</a>
<a href="http://www.chebiaow.com/" target="_blank">车标志大全</a> 
<a href="http://www.1diaocha.com/" target="_blank">第一调查网</a>
<a href="http://www.chiefchain.com/" target="_blank">洗车店加盟</a>
<a href="http://www.jsrzx.com/" target="_blank">驾驶</a>
<a href="http://www.cheyipai.com/" target="_blank">车易拍</a>
<a href="http://www.qichexl.com/ " target="_blank">汽车销量网</a>
<a href="http://www.100chee.com/" target="_blank">百车网</a>
<a href="http://www.sinocars.com/" target="_blank">华夏汽车网</a>
<a href="http://www.tjbsq.com/" target="_blank">天津港汽车</a>
<a href="http://pingce.xincheping.com/" target="_blank">汽车评测</a>
<a href="http://www.paochefang.com/" target="_blank">跑车图片
</a>
<a href="http://www.medved-put.com/ " target="_blank">车险计算器</a>
<a href="http://www.syqcw.net/" target="_blank">十堰汽车网</a>
<a href="http://www.chexianinfo.com/" target="_blank">车险信息网</a>
<a href="http://www.wanche168.com/" target="_blank">玩车网</a>
<a href="http://www.qp110.com/" target="_blank">汽车配件</a>
<a href="http://www.cheyian.com/" target="_blank">车易安</a>
<a href="http://www.bushome.net/" target="_blank">客车之家论坛</a>
<a href="http://www.dinuanbaoyang.com/" target="_blank">地暖保养</a>
<a href="http://www.cvworld.cn/" target="_blank">第一商用车网</a>
</div>