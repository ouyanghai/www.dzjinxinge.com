<?php 
include("../header.php");
$id='';
if(!empty($_GET['type']) && is_numeric($_GET['type'])){
	$id = $_GET['type'];
}
if(!empty($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
}
$sql = "select * from `test_info` where car_id={$id}";
$res = mysql_query($sql);
$row = '';
if(mysql_num_rows($res) > 0){
	$row = mysql_fetch_assoc($res);	
}


?>

<!--面包屑导航-->
<?php 
if(!empty($row)){
	echo $row['daohang'];
}else{
	echo "<div class='daohang'><a href='/'>首页</a> > <a href='/article'>汽车评测 </a>";
}
?>
<div class="chezhan_ad">
<script type="text/javascript">
    /*960*90 创建于 2015-08-20*/
    var cpro_id = "u2273851";
</script>
<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>

</div>
<div class="dianpingpic_content">
<div class="topbar">
	<span>汽车评测</span>去是车道评测网(http://www.dzjinxinge.com)专业汽车评测中心，为您提供最专业最全面的
	汽车评测报告,包含了丰富全面的各种汽车性能测试、加速测试、动力测试、刹车测试等精准的汽车数据测试报告，是中国最专业的汽车评测网站。
</div>
<div class="topbarshow"></div>
<div class="zh_prize_left">
	<div class="zh_prize_xxk"></div>
	<div class="zh_prize_xb">

<?php 
if(!empty($row)){
	echo $row['content'];
}else{
	echo "暂无相关评测";
}
?>


	</div>
</div>



<div class="zh_prize_right">
    <div class="zh_prize_ad">
<img src="/ad/2014shijiebei.jpg" alt="看2014巴西世界杯，关注球星与车的那些事儿" />
</div>
    <div class="rightlinek"></div>
    <div class="helpbar">
        <div class="hbtitle">上海通用雪佛兰 相关车型评测</div>
       
<ul>
    <li><a href="/Article/show.php?id=54539677360">测试2015款雪佛兰新款科鲁兹1.4T DCG旗舰版</a></li>
    <li><a href="/Article/show.php?id=51942357708">试驾2015款雪佛兰全新科鲁兹 1.4T DCG旗舰版</a></li>
    <li><a href="/Article/show.php?id=46798021236">测试2014款雪佛兰TRAX创酷1.4T自动四驱,城市小型SUV</a></li>
    <li><a href="/Article/show.php?id=46589254948">测试2014款雪佛兰爱唯欧三厢1.6AT风尚版,性价比大幅提升</a></li>
    <li><a href="/Article/show.php?id=42993109459">雪佛兰TRAX创酷1.4T和2013款福特翼搏1.5L哪个好？</a></li>
    <li><a href="/Article/show.php?id=41573743253">测试雪佛兰TRAX创酷1.4T AT/MT,舒适化/品质感强/价格亲民</a></li>
    <li><a href="/Article/show.php?id=35356484166">测试2012款雪佛兰迈锐宝2.0L豪华版,动力足够</a></li>
    <li><a href="/Article/show.php?id=35356484160">试驾2012款雪佛兰Volt沃蓝达电动车,即将到来!</a></li>
</ul>
    </div>
    <div class="searchs">
            <ul id="tags">
                <li style="background:url(/Content/images/search_btn2.jpg);background-position-y:35px;" onclick="selectTag('showArticle',1,this)"></li>
                <li style="background:url(/Content/images/search_btn1.jpg)" onclick="selectTag('ShowCar',2,this)"></li>
            </ul>
            <div id="tagContent">
                <div class="tagContent selectTag" id="tagContent0">
                    <div class="search01">
                        <span>汽车品牌</span>
                        <select id="SRbrands" class="selecteds">
                            <option value="" selected>请选择汽车品牌</option>
                        </select>
                    </div>
                    <div class="search01">
                        <span>相关车型</span>
                        <select ID="SRCars" class="selecteds">
                            <option value="" selected>请选择汽车类型</option>
                        </select>
                    </div>
                    <div class="search02">
                        <input id="srButton" name="" type="button" class="btn_search" />
                    </div>
                    <div id="showArticle">
                         <div class="search03"><span>热门评测搜索</span></div>
                        <div class="search04">
                            <ul><li><a href="/Article/index.php?brandid=77&type=1009" title="长安锋驭" target="_blank">锋驭</a></li>
                             <li><a href="/Article/index.php?brandid=14&type=1021" title="东风标致2008 " target="_blank">标致2008</a></li>
                                <li><a href="/Article/index.php?brandid=28&type=255" title="迈腾" target="_blank">迈腾</a></li>
                                <li><a href="/Article/index.php?brandid=28&type=252" title="新宝来" target="_blank">新宝来</a></li>
                               
                                <li><a href="/Article/index.php?brandid=39&type=358" title="福克斯" target="_blank">福克斯</a></li>
                             
                                <li><a href="/Article/index.php?brandid=28&type=253" title="速腾" target="_blank">速腾</a></li>
                                <li><a href="/Article/index.php?brandid=119&type=848" title="科鲁兹" target="_blank">科鲁兹</a></li>
                                <li><a href="/Article/index.php?brandid=11&type=175" title="奔驰S级" target="_blank">奔驰S级</a></li>
                                <li><a href="/Article/index.php?brandid=6&type=159" title="宝马X5" target="_blank">宝马X5</a></li>
                            </ul>
                        </div>
                     </div>
                    <div id="ShowCar" style="display:none">
                         <div class="search03"><span>热门点评搜索</span></div>
                        <div class="search04">
                            <ul>
                                <li><a href="/Comment/show.php?type=255" title="迈腾" target="_blank">迈腾</a></li>
                                <li><a href="/Comment/show.php?type=252" title="新宝来" target="_blank">新宝来</a></li>
                                <li><a href="/Comment/show.php?type=262" title="途观" target="_blank">途观</a></li>
                                <li><a href="/Comment/show.php?type=358" title="福克斯" target="_blank">福克斯</a></li>
                                <li><a href="/Comment/show.php?type=338" title="丰田逸致" target="_blank">丰田逸致</a></li>
                                <li><a href="/Comment/show.php?type=253" title="速腾" target="_blank">速腾</a></li>
                                <li><a href="/Comment/show.php?type=225" title="别克GL8" target="_blank">别克GL8</a></li>
                                <li><a href="/Comment/show.php?type=124" title="奥迪A4" target="_blank">奥迪A4</a></li>
                                <li><a href="/Comment/show.php?type=848" title="科鲁兹" target="_blank">科鲁兹</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">

    var rightSearchType = 1;

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
            var targerURL = '/Article/Index?' + $.param({ brandid: (brandid ? brandid : 0), carid: (carid ? carid : 0) });
            if (rightSearchType == 2) {
                if (carid == null || carid == '') { alert("请选择型号"); return;}
                targerURL = "/Comment/Show/" + carid;
            }
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
    <div class="rightlinek"></div>
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
                <a href="/Comment/show.php?type=1171"  target="_blank">布加迪Galibier</a></li>
            <li><span>
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star2.png" align="left" />
                 &nbsp;<strong>4.6</strong>分</span>
                <img src="/Content/images/kbph_2.jpg" align="left" /> &nbsp;
                <a href="/Comment/show.php?type=458"  target="_blank">新世代全顺</a></li>
            <li><span>
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star2.png" align="left" />
                 &nbsp;<strong>4.6</strong>分</span>
                <img src="/Content/images/kbph_3.jpg" align="left" /> &nbsp;
                <a href="/Comment/show.php?type=1217"  target="_blank">Huracan </a></li>
            <li><span>
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star2.png" align="left" />
                 &nbsp;<strong>4.5</strong>分</span>
                <img src="/Content/images/kbph_4.jpg" align="left" /> &nbsp;
                <a href="/Comment/show.php?type=134"  target="_blank">奥迪Q5-混动</a></li>
            <li><span>
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star.png" align="left" />
                <img src="/Content/images/star2.png" align="left" />
                 &nbsp;<strong>4.5</strong>分</span>
                <img src="/Content/images/kbph_5.jpg" align="left" /> &nbsp;
                <a href="/Comment/show.php?type=88"  target="_blank">比亚迪S6</a></li>
         </ul>
    </div>
     <div class="zh_prize_wb">
          <div class="zh_pr_wb_tp"><img src="http://www.qupingche.com/Content/images/prize_wb.jpg" width="25" height="25" /></div>
      <div class="zh_pr_wbgz"><a href="#" target="_blank">关注@车道评测网</a></div>
          <div class="zh_pr_gztp">
<iframe width="63" height="24" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" scrolling="no" border="0" src="http://widget.weibo.com/relationship/followbutton.php?language=zh_cn&width=63&height=24&uid=3572957671&style=1&btn=red&dpc=1"></iframe>
</div>
      <div class="zh_pr_gzrs">1845人已关注</div>
    </div>
</div>
</div>


<?php include("../footer.php") ?>