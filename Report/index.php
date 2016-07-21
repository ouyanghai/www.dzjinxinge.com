<?php include_once("../header.php"); ?>


<script type="text/javascript">
    function CheckConsensus(id) {
        $.post("/Report/GetConsensusCount", { id: id }, function (data) {
            if (data == "1") {
                $("#ConsensusStrong" + id).text(parseInt($("#ConsensusStrong" + id).text()) + 1);
            } else if (data == "2") {
                alert("你今天已经点击了！");
            }
        });
    }

    function CheckGood(id) {
        $.post("/Report/GetGoodCount", { id: id }, function (data) {
            if (data == "1") {
                $("#GoodStrong" + id).text(parseInt($("#GoodStrong" + id).text()) + 1);
            } else if (data == "2") {
                alert("你今天已经点击了！");
            }
        });
    }

    function CheckDingYue() {
        var email = $.trim($("#txtemail").val());
        var filter2 = /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/;
        if (!filter2.test(email.replace(/^\s+|\s+$/g, ""))) 
        {
            alert("邮箱格式不正确！");
        }else{
            $.post("/Report/InsertReportDingYue", { email: email }, function (data) {
                if (data == "1") {
                    alert('订阅成功');
                    $("#txtemail").val("");
                }
            });
        }
    }

    $(function(){
        $("#txtTitle").focus(function(){
            $(this).val("");
        });

        $("#txtTitle").blur(function(){
            var value=  $(this).val();
            if($.trim(value)=="")
            {
                $(this).val("按报告标题搜索质量报告");
            }
        });
        //判断是否要显示搜寻的条数
        if(window.location.href.indexOf("#GoSearch")>0)
        {
            $("#showRpCount").show();
            $("#atag001").hide();
        }else{
            $("#showRpCount").hide();
            $("#atag001").show();
        }
    });
</script>
<!--面包屑导航-->
<div class="daohang">
    <a href="/" style="color: #135EBD">首页</a> > <a href="/Report">质量报告</a>
</div>
<div class="chezhan_ad">
    <script type="text/javascript">
        /*960*90 创建于 2015-08-20*/
        var cpro_id = "u2273851";
    </script>
    <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
</div>
<div class="reportbanner">
    <img src="/Content/images/reportbanner.jpg" />
</div>

<div class="report">
    <ul id="retags">
            <li class="selectTag" onclick="selectTag('retagContent61878930680',this)" style="cursor:pointer">大众迈腾</li>
            <li class="" onclick="selectTag('retagContent56477951135',this)" style="cursor:pointer">丰田凯美瑞</li>
            <li class="" onclick="selectTag('retagContent54644207535',this)" style="cursor:pointer">本田飞度</li>
            <li class="" onclick="selectTag('retagContent53459517259',this)" style="cursor:pointer">标致307</li>
            <li class="" onclick="selectTag('retagContent52877489054',this)" style="cursor:pointer">东风本田CR-V</li>
            <li class="" onclick="selectTag('retagContent52151270898',this)" style="cursor:pointer">丰田卡罗拉</li>
            <li class="" onclick="selectTag('retagContent51629278523',this)" style="cursor:pointer">大众高尔夫</li>
            <li class="" onclick="selectTag('retagContent51002847571',this)" style="cursor:pointer">宝马3系</li>
            <li class="" onclick="selectTag('retagContent50417925434',this)" style="cursor:pointer">比亚迪F3</li>
            <li class="" onclick="selectTag('retagContent49791538281',this)" style="cursor:pointer">大众速腾</li>
            <li class="" onclick="selectTag('retagContent49164997870',this)" style="cursor:pointer">雪佛兰赛欧</li>
            <li class="" onclick="selectTag('retagContent48580362049',this)" style="cursor:pointer">大众捷达</li>
            <li class="" onclick="selectTag('retagContent47872069062',this)" style="cursor:pointer">别克君威</li>
            <li class="" onclick="selectTag('retagContent47215678409',this)" style="cursor:pointer">大众帕萨特</li>
            <li class="" onclick="selectTag('retagContent46589234079',this)" style="cursor:pointer">雪佛兰科鲁兹</li>
            <li class="" onclick="selectTag('retagContent45487322063',this)" style="cursor:pointer">大众POLO</li>
            <li class="" onclick="selectTag('retagContent44861023761',this)" style="cursor:pointer">大众朗逸</li>
            <li class="" onclick="selectTag('retagContent44338947996',this)" style="cursor:pointer">本田雅阁</li>
            <li class="" onclick="selectTag('retagContent44130100802',this)" style="cursor:pointer">大众新宝来</li>
            <li class="" onclick="selectTag('retagContent42993144263',this)" style="cursor:pointer">奥迪A6L</li>
            <li class="" onclick="selectTag('retagContent42341807062',this)" style="cursor:pointer">福特福克斯</li>
            <li class="" onclick="selectTag('retagContent41825919955',this)" style="cursor:pointer">别克凯越</li>
    </ul>
    <div id="retagContent">
        <div class="retagContent selectTag" id="retagContent61878930680">
            <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201412/18164500_2068.png" alt=""/>
            </div>
            <div class="right">
                <div class="rer01"><a href="/Report/ReportShow/61878930680" target="_blank">    
                    2014年11月《大众迈腾》汽车质量调查报告</a>
                </div>
                <div class="rer02">
                    <span>概述：</span>
                    大众迈腾综合“吐槽”指数仅为2.78%，共涉及车门、发动机等16大类部件124个“吐槽点”，我们抽了134位大众迈腾车主进行调查，新车占92.54%，二手车占7.46%。大众迈腾车主对爱车的综合评价尚佳。
                    <a href="/Report/ReportShow/61878930680" target="_blank">[查看详情]</a>
                </div>
                <div class="rer03">
                    <span>用户“吐槽”TOP5</span>
                    <a class="rera01">内饰-有异味</a>
                    <a class="rera02">雨刮器-有松动</a> 
                    <a class="rera03">车头/尾灯-有雾气/水汽</a> 
                    <a class="rera04">空调-制冷/制热效果不好</a>
                    <a class="rera05">导航-地图信息不准</a>
                    <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('61878930680');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong61878930680" >8</strong>)</a>
                </div>
                <div class="rer04">
                    <span>用户“口碑”TOP5</span>
                    <a class="rera06">汽车仪表质量不错</a>
                    <a class="rera07">传动系统质量不错</a>
                    <a class="rera08">仪表台音响/娱乐设备不错</a> 
                    <a class="rera09">收音机质量不错</a>           
                    <a class="rera10">刹车系统质量不错</a> 
                    <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('61878930680')" style="cursor: pointer;">不错(<strong id="GoodStrong61878930680">2</strong>)</a>
                </div>
            </div>
            </div>
            <div class="retagContent" id="retagContent56477951135">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201410/17154201_5563.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/56477951135" target="_blank">2014年10月《丰田凯美瑞》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>丰田凯美瑞综合“吐槽”指数仅为3.12%，共涉及车门、发动机等16大类部件124个“吐槽点”，我们抽了147位丰田凯美瑞车主进行调查，新车占97.86%，二手车占2.04%。丰田凯美瑞车主对爱车的综合评价尚佳。<a href="/Report/ReportShow/56477951135" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                        <a class="rera01">导航-地图信息不准</a>
                        <a class="rera02">内饰-有异味</a>
                        <a class="rera03">雨刮器-有松动</a> 
                        <a class="rera04">空调-制冷/制热效果不好</a>
                        <a class="rera05">车头/尾灯-有雾气/水汽</a> 
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('56477951135');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong56477951135" >5</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                         <a class="rera06">汽车仪表盘质量不错</a>
                        <a class="rera07">传动系统质量不错</a>
                        <a class="rera08">汽车变速箱质量不错</a> 
                        <a class="rera09">汽车座椅质量不错</a>           

                        <a class="rera10">刹车系统质量不错</a> 
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('56477951135')" style="cursor: pointer;">不错(<strong id="GoodStrong56477951135">1</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent54644207535">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201409/26164751_7503.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/54644207535" target="_blank">2014年9月《本田飞度》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>本田飞度综合“吐槽”指数仅为3.86%，共涉及车门、发动机等16大类部件124个“吐槽点”，我们抽了127位本田飞度车主进行调查，新车占84.25%，二手车占15.75%。本田飞度车主对爱车的综合评价尚佳。<a href="/Report/ReportShow/54644207535" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                        <a class="rera01">雨刮器-有不正常噪音</a>
                <a class="rera02">内饰-有异味</a>
                  <a class="rera03">雨刮器-有松动</a> 
                <a class="rera04">空调-制冷/制热效果不好</a>

                <a class="rera05">车头/尾灯-有雾气/水汽</a> 
                                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('54644207535');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong54644207535" >2</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                         <a class="rera06">汽车仪表盘质量不错</a>
                    <a class="rera07">传动系统质量不错</a>
                    <a class="rera08">汽车变速箱质量不错</a> 
                    <a class="rera09">汽车座椅质量不错</a>           

                    <a class="rera10">刹车系统质量不错</a> 
                                            <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('54644207535')" style="cursor: pointer;">不错(<strong id="GoodStrong54644207535">3</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent53459517259">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201409/12163438_8507.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/53459517259" target="_blank">2014年9月《东风标致307》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>标致307综合“吐槽”指数仅为4.22%，共涉及车门、发动机等16大类部件124个“吐槽点”，我们抽了152位标致307车主进行调查，新车占93.42%，二手车占6.58%。标致307车主对爱车的综合评价尚佳。<a href="/Report/ReportShow/53459517259" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                        <a class="rera01">雨刮器-有不正常噪音</a>
    <a class="rera02">车头/尾灯-灯泡坏掉</a>
      <a class="rera03">雨刮器-有松动</a> 
    <a class="rera04">空调-制冷/制热效果不好</a>

    <a class="rera05">内饰-有异味</a> 
                            
                            <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('53459517259');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong53459517259" >4</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                         <a class="rera06">汽车仪表盘质量不错</a>
<a class="rera07">传动系统质量不错</a>
<a class="rera08">汽车变速箱质量不错</a> 
<a class="rera09">汽车内饰灯质量不错</a>           

<a class="rera10">传动收音机质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('53459517259')" style="cursor: pointer;">不错(<strong id="GoodStrong53459517259">2</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent52877489054">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201409/05160451_0228.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/52877489054" target="_blank">2014年8月《东风本田CR-V》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>东风本田CR-V综合“吐槽”指数仅为2.67%，共涉及车门、发动机等16大类部件124个“吐槽点”，我们抽了163位东风本田CR-V车主进行调查，新车占90.18%，二手车占9.82%。东风本田CR-V车主对爱车的综合评价尚佳。<a href="/Report/ReportShow/52877489054" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                        <a class="rera01">雨刮器有松动</a>
<a class="rera02">内饰有异味</a>
  <a class="rera03">空调-制冷/制热效果不好</a> 
<a class="rera04">导航系统-地图信息不准</a>

<a class="rera05">车头/尾灯-有雾气/水汽</a> 
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('52877489054');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong52877489054" >1</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                         <a class="rera06">汽车仪表盘质量不错</a>
<a class="rera07">变速箱质量不错</a>
<a class="rera08">汽车座椅质量不错</a> 
<a class="rera09">汽车刹车系统质量不错</a>           

<a class="rera10">传动系统质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('52877489054')" style="cursor: pointer;">不错(<strong id="GoodStrong52877489054">1</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent52151270898">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201408/28154811_9567.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/52151270898" target="_blank">2014年8月《一汽丰田卡罗拉》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>丰田卡罗拉综合“吐槽”指数仅为2.74%，共涉及车门、发动机等16大类部件124个“吐槽点”，我们抽了157位丰田卡罗拉车主进行调查，新车占94.90%，二手车占5.10%。丰田卡罗拉车主对爱车的综合评价尚佳。<a href="/Report/ReportShow/52151270898" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                        <a class="rera01">雨刮器有松动</a>
<a class="rera02">内饰有异味</a>
  <a class="rera03">空调-制冷/制热效果不好</a> 
<a class="rera04">导航系统-地图信息不准</a>

<a class="rera05">车头/尾灯-有雾气/水汽</a> 
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('52151270898');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong52151270898" >1</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                         <a class="rera06">汽车仪表盘质量不错</a>
<a class="rera07">变速箱质量不错</a>
<a class="rera08">汽车座椅质量不错</a> 
<a class="rera09">汽车刹车系统质量不错</a>           

<a class="rera10">传动系统质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('52151270898')" style="cursor: pointer;">不错(<strong id="GoodStrong52151270898">2</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent51629278523">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201408/22152747_2060.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/51629278523" target="_blank">2014年8月《大众高尔夫》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>大众高尔夫综合“吐槽”指数仅为2.50%，共涉及车门、发动机等16大类部件124个“吐槽点”，我们抽了147位大众高尔夫车主进行调查，新车占93.20%，二手车占6.80%。大众高尔夫车主对爱车的综合评价尚佳。<a href="/Report/ReportShow/51629278523" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                        <a class="rera01">雨刮器有松动</a>
<a class="rera02">内饰有异味</a>
  <a class="rera03">空调-制冷/制热效果不好</a> 
<a class="rera04">导航系统-地图信息不准</a>

<a class="rera05">雨刮器-有不正常噪音 </a> 
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('51629278523');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong51629278523" >0</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                         <a class="rera06">汽车仪表盘质量不错</a>
<a class="rera07">变速箱质量不错</a>
<a class="rera08">汽车内饰灯质量不错</a> 
<a class="rera09">汽车刹车系统质量不错</a>           

<a class="rera10">传动系统质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('51629278523')" style="cursor: pointer;">不错(<strong id="GoodStrong51629278523">0</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent51002847571">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201408/15163917_0716.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/51002847571" target="_blank">2014年8月《宝马3系》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>宝马3系综合“吐槽”指数仅为2.95%，共涉及车门、发动机等16大类部件124个“吐槽点”，我们抽了164位宝马3系车主进行调查，车主中男性占54.88%，女性占45.12%。宝马3系车主对爱车的综合评价尚佳。<a href="/Report/ReportShow/51002847571" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                        <a class="rera01">雨刮器有松动</a>
<a class="rera02">内饰有异味</a>
  <a class="rera03">空调-制冷/制热效果不好</a> 
<a class="rera04">导航系统-地图信息不准</a>

<a class="rera05">车头/尾灯-有雾气/水汽 </a> 
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('51002847571');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong51002847571" >1</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                         <a class="rera06">汽车仪表盘质量不错</a>
<a class="rera07">变速箱质量不错</a>
<a class="rera08">汽车座椅质量不错</a> 
<a class="rera09">汽车刹车系统质量不错</a>           

<a class="rera10">传动系统质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('51002847571')" style="cursor: pointer;">不错(<strong id="GoodStrong51002847571">1</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent50417925434">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201408/08133150_5747.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/50417925434" target="_blank">2014年7月《比亚迪F3》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>比亚迪F3综合“吐槽”指数仅为3.99%，共涉及车门、发动机等16大类部件124个“吐槽点”，我们抽了188位比亚迪F3车主进行调查，车主中男性占62.50%，女性占37.50%。比亚迪F3车主对爱车的综合评价尚佳。<a href="/Report/ReportShow/50417925434" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                        <a class="rera01">雨刮器有松动</a>
<a class="rera02">内饰有异味</a>
  <a class="rera03">空调-制冷/制热效果不好</a> 
<a class="rera04">车头/尾灯-车灯不够亮</a>

<a class="rera05">车头/尾灯-有雾气/水汽 </a> 
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('50417925434');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong50417925434" >1</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                         <a class="rera06">汽车仪表盘质量不错</a>
<a class="rera07">变速箱质量不错</a>
<a class="rera08">汽车座椅质量不错</a> 
<a class="rera09">汽车刹车系统质量不错</a>           

<a class="rera10">收音机质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('50417925434')" style="cursor: pointer;">不错(<strong id="GoodStrong50417925434">1</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent49791538281">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201408/01132627_1545.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/49791538281" target="_blank">2014年7月《大众速腾》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>大众速腾综合“吐槽”指数仅为2.60%，共涉及车门、发动机等16大类部件124个“吐槽点”，我们抽了188位速腾车主进行调查，车主中男性占51.06%，女性占48.94%。大众速腾车主对爱车的综合评价尚佳。<a href="/Report/ReportShow/49791538281" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                         <a class="rera01">汽车内饰有异味</a>
  <a class="rera02">空调-制冷/制热效果不好</a> 
<a class="rera03">导航系统地图信息不准</a>
<a class="rera04">雨刮器有松动</a>
<a class="rera05">雨刮器有不正常噪音 </a> 
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('49791538281');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong49791538281" >3</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                         <a class="rera06">汽车仪表盘质量不错</a>

<a class="rera07">汽车传动系统质量不错</a> 
<a class="rera08">汽车刹车系统质量不错</a>           
<a class="rera09">座椅质量不错</a>
<a class="rera10">内饰灯质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('49791538281')" style="cursor: pointer;">不错(<strong id="GoodStrong49791538281">2</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent49164997870">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201407/24163416_1041.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/49164997870" target="_blank">2014年7月《雪佛兰赛欧》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>雪佛兰赛欧综合“吐槽”指数仅为2.61%，共涉及车门、发动机等16大类部件124个“吐槽点”，我们抽了165位赛欧车主进行调查，车主中男性占55.76%，女性占44.24%。雪佛兰赛欧车主对爱车的综合评价尚佳。<a href="/Report/ReportShow/49164997870" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                        <a class="rera01">汽车内饰有异味</a>

<a class="rera02">车头/尾灯-车灯不够亮</a>
  <a class="rera03">空调-制冷/制热效果不好</a> 

<a class="rera04">车头/尾灯-灯泡坏掉 </a>  
<a class="rera05">雨刮器有松动</a>
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('49164997870');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong49164997870" >4</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                        <a class="rera06">汽车仪表盘质量不错</a>

<a class="rera07">汽车座椅质量不错</a>
<a class="rera08">汽车刹车系统质量不错</a>           
<a class="rera09">变速箱质量不错</a>

<a class="rera10">汽车传动系统质量不错</a> 
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('49164997870')" style="cursor: pointer;">不错(<strong id="GoodStrong49164997870">3</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent48580362049">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201407/17150415_4097.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/48580362049" target="_blank">2014年6月《大众捷达》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>大众捷达综合“吐槽”指数仅为3.98%，共涉及车门、发动机等16大类部件124个“吐槽点”，我们抽了200位捷达车主进行调查，车主中男性占57.50%，女性占42.50%。大众捷达车主对爱车的综合评价尚佳。<a href="/Report/ReportShow/48580362049" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                        <a class="rera01">汽车内饰有异味</a>
  <a class="rera02">空调-制冷/制热效果不好</a> 
<a class="rera03">车头/尾灯-车灯不够亮</a>

<a class="rera04">雨刮器有松动</a>
<a class="rera05">车头/尾灯-灯泡坏掉 </a> 
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('48580362049');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong48580362049" >1</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                          <a class="rera06">汽车仪表盘质量不错</a>

<a class="rera07">汽车传动系统质量不错</a> 
<a class="rera08">汽车刹车系统质量不错</a>           
<a class="rera09">变速箱质量不错</a>
<a class="rera10">内饰灯质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('48580362049')" style="cursor: pointer;">不错(<strong id="GoodStrong48580362049">2</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent47872069062">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201407/09155716_2707.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/47872069062" target="_blank">2014年6月《别克君威》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>别克君威综合“吐槽”指数仅为3.58%，共涉及车门、发动机等16大类部件124个“吐槽点”，别克君威车主对爱车的综合评价尚佳。雨刮器有松动、内饰有异味、内饰有污点、车头/尾灯-车灯不够亮以及导航系统-地图信<a href="/Report/ReportShow/47872069062" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                        <a class="rera01">雨刮器有松动</a>
<a class="rera02">汽车内饰有异味</a>
  <a class="rera03">内饰-有污点</a> 
<a class="rera04">车头/尾灯-车灯不够亮</a>
<a class="rera05">导航系统-地图信息不准</a>
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('47872069062');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong47872069062" >6</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                         <a class="rera06">汽车仪表盘质量不错</a>
<a class="rera07">汽车刹车系统质量不错</a>
<a class="rera08">汽车传动系统质量不错</a>            
<a class="rera09">变速箱质量不错</a>
<a class="rera10">内饰灯质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('47872069062')" style="cursor: pointer;">不错(<strong id="GoodStrong47872069062">4</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent47215678409">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201407/02171133_7775.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/47215678409" target="_blank">2014年6月《大众帕萨特》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>大众帕萨特综合“吐槽”指数仅为3.13%，共涉及车门、发动机等16大类部件124个“吐槽点”，大众帕萨特车主对爱车的综合评价尚佳。空调-制冷/制热效果、雨刮器有松动、内饰有异味、车头/尾灯-车灯不够亮以及雨刮<a href="/Report/ReportShow/47215678409" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                          <a class="rera01">空调-制冷/制热效果不好</a> 
<a class="rera02">雨刮器有松动</a>
<a class="rera03">汽车内饰有异味</a>
<a class="rera04">车头/尾灯-车灯不够亮</a>
                   <a class="rera05">收音机有不正常噪音</a>
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('47215678409');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong47215678409" >5</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                         <a class="rera06">汽车仪表盘质量不错</a>
<a class="rera07">汽车变速箱质量不错</a>   
  <a class="rera08">汽车传动系统质量不错</a>
<a class="rera09">汽车刹车系统质量不错</a>
<a class="rera10">座椅质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('47215678409')" style="cursor: pointer;">不错(<strong id="GoodStrong47215678409">2</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent46589234079">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201406/25140310_7025.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/46589234079" target="_blank">2014年5月《雪佛兰科鲁兹》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>雪佛兰科鲁兹综合“吐槽”指数仅为2.87%，共涉及车门、发动机等16大类部件124个“吐槽点”，雪佛兰科鲁兹车主对爱车的综合评价尚佳。内饰有异味、雨刮器有松动、车头/尾灯-车灯不够亮、雨刮器有不正常噪音以及<a href="/Report/ReportShow/46589234079" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                        <a class="rera01">汽车内饰有异味</a>
                 <a class="rera02">雨刮器有松动</a>
                   <a class="rera03">雨刮器有不正常噪音</a>
<a class="rera04">车头/尾灯-车灯不够亮</a>
                    <a class="rera05">空调-制冷/制热效果不好</a>
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('46589234079');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong46589234079" >7</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                         <a class="rera06">汽车仪表盘质量不错</a>
              <a class="rera07">汽车收音机质量不错</a>
                    <a class="rera08">汽车传动系统质量不错</a>
               <a class="rera09">汽车刹车系统质量不错</a>
               <a class="rera10">座椅质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('46589234079')" style="cursor: pointer;">不错(<strong id="GoodStrong46589234079">3</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent45487322063">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201406/12150939_3890.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/45487322063" target="_blank">2014年5月《大众POLO》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>大众POLO综合“吐槽”指数仅为2.80%，共涉及车门、发动机等16大类部件124个“吐槽点”，大众POLO车主对爱车的综合评价尚佳。内饰有异味、雨刮器有松动、雨刮器有不正常噪音、车头/尾灯-灯泡坏掉及车头/尾灯-有<a href="/Report/ReportShow/45487322063" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                         <a class="rera01">汽车内饰有异味</a>
                 <a class="rera02">雨刮器有松动</a>
                    <a class="rera03">雨刮器有不正常噪音</a>
                    
                    <a class="rera04">车头/尾灯-灯泡坏掉</a>
                    <a class="rera05">车头/尾灯-有雾气/水汽</a>
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('45487322063');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong45487322063" >11</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                         <a class="rera06">汽车仪表盘质量不错</a>
               <a class="rera07">汽车变速箱质量不错</a>
                    <a class="rera08">汽车传动系统质量不错</a>
              
                    <a class="rera09">汽车刹车系统质量不错</a>
                    <a class="rera10">座椅质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('45487322063')" style="cursor: pointer;">不错(<strong id="GoodStrong45487322063">7</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent44861023761">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201406/05170043_1320.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/44861023761" target="_blank">2014年5月《大众朗逸》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>
大众朗逸综合“吐槽”指数仅为2.71%，共涉及车门、发动机等16大类部件124个“吐槽点”，大众朗逸车主对爱车的综合评价尚佳。内饰有异味、雨刮器有不正常噪音、雨刮器有松动、车头/尾灯-灯泡坏掉及收音机有不正<a href="/Report/ReportShow/44861023761" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                        
  <a class="rera01">汽车内饰有异味</a>
                    <a class="rera02">雨刮器有不正常噪音</a>
                    <a class="rera03">雨刮器有松动</a>
                    <a class="rera04">车头/尾灯-灯泡坏掉</a>
                    <a class="rera05">收音机-有不正常噪音</a>
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('44861023761');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong44861023761" >4</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                        <a class="rera06">汽车仪表盘质量不错</a>
               
                    <a class="rera08">汽车传动系统质量不错</a>
              <a class="rera07">汽车变速箱质量不错</a>
                    <a class="rera09">汽车车门质量不错</a>
                    <a class="rera10">座椅质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('44861023761')" style="cursor: pointer;">不错(<strong id="GoodStrong44861023761">4</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent44338947996">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201405/30151355_7220.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/44338947996" target="_blank">2014年4月《本田雅阁》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>本田雅阁综合“吐槽”指数仅为3.45%，共涉及车门、发动机等16大类部件124个“吐槽点”，本田雅阁车主对爱车的综合评价尚佳。雨刮器有松动、车头/尾灯-有雾气/水汽、内饰有污点、内饰有异味以及收音机有不正<a href="/Report/ReportShow/44338947996" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                          <a class="rera01">汽车雨刮器有松动</a>
                    <a class="rera02">车头/尾灯-有雾气/水汽</a>
                    <a class="rera03">内饰有污点</a>
                    <a class="rera04">内饰有异味</a>
                    <a class="rera05">收音机有不正常噪音</a>
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('44338947996');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong44338947996" >3</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                        <a class="rera06">汽车仪表盘质量不错</a>
                    <a class="rera07">汽车变速箱质量不错</a>
                    <a class="rera08">汽车传动系统质量不错</a>
                    <a class="rera09">汽车杀车系统质量不错</a>
                    <a class="rera10">座椅质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('44338947996')" style="cursor: pointer;">不错(<strong id="GoodStrong44338947996">4</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent44130100802">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201405/30152311_3460.png" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/44130100802" target="_blank">2014年4月《大众新宝来》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>大众新宝来综合“吐槽”指数仅为2.55%，共涉及车门、发动机等16大类部件124个“吐槽点”，大众新宝来车主对爱车的综合评价尚佳。内饰有异味、雨刮器有松动、雨刮器有不正常噪音、空调制冷/制热效果不好收音机<a href="/Report/ReportShow/44130100802" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                          <a class="rera01">汽车内饰有异味</a>
                    <a class="rera02">雨刮器有松动</a>
                    <a class="rera03">雨刮器有不正常噪音</a>
                    <a class="rera04">空调制冷/制热效果不好</a>
                    <a class="rera05">收音机有不正常噪音</a>
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('44130100802');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong44130100802" >10</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                        <a class="rera06">汽车仪表盘质量不错</a>
                    <a class="rera07">汽车变速箱质量不错</a>
                    <a class="rera08">汽车传动系统质量不错</a>
                    <a class="rera09">汽车杀车系统质量不错</a>
                    <a class="rera10">前门质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('44130100802')" style="cursor: pointer;">不错(<strong id="GoodStrong44130100802">8</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent42993144263">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201405/14161157_3120.jpg" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/42993144263" target="_blank">2014年4月《奥迪A6L》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>奥迪A6L综合“吐槽” 指数仅为2.84%，共涉及车门、发动机等16大类部件124个“吐槽点”，奥迪A6L车主对爱车的综合评价尚佳。汽车导航-地图不准、雨刮器有松动、车灯-有雾气、内饰-有异味以及收音机-无法/很难接<a href="/Report/ReportShow/42993144263" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                                            <a class="rera01">汽车导航地图不准</a>
                    <a class="rera02">雨刮器有松动</a>
                    <a class="rera03">汽车车灯有雾气</a>
                    <a class="rera04">汽车内饰有异味</a>
                    <a class="rera05">收音机无法接收AM频道</a>
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('42993144263');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong42993144263" >18</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                                            <a class="rera06">汽车仪表盘质量不错</a>
                    <a class="rera07">汽车座椅质量不错</a>
                    <a class="rera08">汽车杀车系统质量不错</a>
                    <a class="rera09">汽车车门质量不错</a>
                    <a class="rera10">汽车变速箱质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('42993144263')" style="cursor: pointer;">不错(<strong id="GoodStrong42993144263">17</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent42341807062">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201405/06133850_2126.jpg" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/42341807062" target="_blank">2014年4月《福特福克斯》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>福特福克斯综合“吐槽” 指数仅为2.96%，共涉及车门、发动机等16大类部件124个 “吐槽点”，福特福克斯车主对爱车的综合评价尚佳。汽车内饰有异味、雨刮器有松动、雨刮器有不正常噪音、空调系统制冷/制热效果<a href="/Report/ReportShow/42341807062" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                                            <a class="rera01">汽车内饰有异味</a>
                    <a class="rera02">雨刮器有不正常噪音</a>
                    <a class="rera03">空调系统制冷制热效果不好</a>
                    <a class="rera04">雨刮器有松动</a>
                    <a class="rera05">收音机有不正常噪音</a>
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('42341807062');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong42341807062" >22</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                                            <a class="rera06">汽车仪表盘质量不错</a>
                    <a class="rera07">汽车座椅质量不错</a>
                    <a class="rera08">汽车变速箱质量不错</a>
                    <a class="rera09">汽车车门质量不错</a>
                    <a class="rera10">汽车内饰灯质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('42341807062')" style="cursor: pointer;">不错(<strong id="GoodStrong42341807062">28</strong>)</a>
                    </div>
                </div>
            </div>
            <div class="retagContent" id="retagContent41825919955">
                <div class="left">
                    <img src="http://www.qupingche.com/attached/image/201404/30104959_9750.jpg" alt=""/>
                </div>
                <div class="right">
                    <div class="rer01"><a href="/Report/ReportShow/41825919955" target="_blank">2014年3月《别克凯越》汽车质量调查报告</a></div>
                    <div class="rer02"><span>概述：</span>别克凯越综合“吐槽” 指数仅为3.4%，共涉及车门、发动机等16大类部件124个“吐槽点”，别克凯越车主对爱车的综合评价尚佳。汽车内饰有异味、雨刮器有松动、雨刮器有不正常噪音、空调系统制冷/制热效果不好等<a href="/Report/ReportShow/41825919955" target="_blank">[查看详情]</a></div>
                    <div class="rer03">
                        <span>用户“吐槽”TOP5</span>
                                            <a class="rera01">汽车内饰有异味</a>
                    <a class="rera02">雨刮器有不正常噪音</a>
                    <a class="rera03">雨刮器有松动</a>
                    <a class="rera04">空调系统制冷制热效果不好</a>
                    <a class="rera05">车头/尾灯有坏掉</a>
                        
                        <a href="javascript:void(0);" class="tonggan" onclick="CheckConsensus('41825919955');this.removeAttribute('href')" style="cursor: pointer;">同感(<strong id="ConsensusStrong41825919955" >30</strong>)</a>
                    </div>
                    <div class="rer04">
                        <span>用户“口碑”TOP5</span>
                                            <a class="rera06">汽车车门质量不错</a>
                    <a class="rera07">汽车仪表盘质量不错</a>
                    <a class="rera08">汽车变速箱质量不错</a>
                    <a class="rera09">刹车系统质量不错</a>
                    <a class="rera10">传动系统质量不错</a>
                        <a href="javascript:void(0);" class="bucuo" onclick="CheckGood('41825919955')" style="cursor: pointer;">不错(<strong id="GoodStrong41825919955">34</strong>)</a>
                    </div>
                </div>
            </div>
    </div>
</div>
<script type="text/javascript">
    function selectTag(showContent, selfObj) {
        // 操作标签
        var retagContent = $(".retagContent");
        retagContent.hide();
        $("#" + showContent).show();
        $("#retags").find("li").removeClass("selectTag");
        $(selfObj).addClass("selectTag");
    }
</script>
<div class="height20"></div>
<div class="report">



<?php 
	if(!empty($_GET['page']) && $_GET['page']==2){
		include("./report2.php");
	}else if(!empty($_GET['page']) && $_GET['page']==3){
		include("./report3.php");
	}else{
		include("./report1.php");
	}
?>

    <div class="right">
        <div class="dingyue">
            <div class="dytitle">免费订阅最新汽车质量报告</div>
            <div class="dyleft">您的邮箱：</div>
            <div class="dyright">
                <input type="text" datatype="e" id="txtemail" class="input160" errormsg="Email格式不正确！" />
            </div>
            <div class="dyleft"></div>
            <div class="dyright"><a onclick="CheckDingYue()" style="cursor: pointer;">免费订阅</a></div>
        </div>
        <div class="youshi">
            <div class="yszhi"><a>实时更新</a><span>样本数量满足汽车质量调查报告所需最低标准，即发布最新汽车质量调查报告。</span>  <a>购车专享</a> <span>我们为即将购车的车友精心准备汽车质量调查报告，让您对汽车质量更了如指掌。</span><a>0赞助0广告</a><span>没有赞助，也没有广告，我们用最中立客观的态度为大家提供汽车质量调查报告。</span></div>
        </div>
		<div class="rightlinek"></div>
		<div class="zh_prize_ad">
<img src="/ad/2014shijiebei.jpg" alt="看2014巴西世界杯，关注球星与车的那些事儿" />
</div>
    </div>

    <div class="clear"></div>
    <!--分页显示开始-->
    <div class="pagebar">
        <div id="pager">
<?php 
$cur_page = 1;
if(!empty($_GET['page']) && is_numeric($_GET['page'])){
	$cur_page = ($_GET['page']>0 && $_GET['page']<4)?$_GET['page']:1;
}
$n_page = ($cur_page+1 > 3) ? 3:$cur_page+1;
$p_page = ($cur_page-1 < 1) ? 1:$cur_page-1;
?>
<!--MvcPager 1.5 for ASP.NET MVC 3.0 © 2009-2011 Webdiyer (http://www.webdiyer.com)-->
<div>
	<a href='/Report?page=1'>首页</a>&nbsp;&nbsp;
	<a href='/Report?page=<?php echo $p_page ?>'>上一页</a>&nbsp;&nbsp;
	<?php for($i=1;$i<4;$i++){
		if($cur_page == $i){
			echo $i.'&nbsp;&nbsp;';
		}else{
			echo "<a href='/Report?page={$i}'>{$i}</a>&nbsp;&nbsp;";
		}
	} ?>
	<a href='/Report?page=<?php echo $n_page; ?>'>下一页</a>&nbsp;&nbsp;
	<a href='/Report?page=3'>尾页</a></div>
<!--MvcPager 1.5 for ASP.NET MVC 3.0 © 2009-2011 Webdiyer (http://www.webdiyer.com)-->

        </div>
    </div>
    <!--分页显示结束-->
</div>
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
        <div class="hcright"><a href="/comment/show/92" target="_blank" title="比亚迪f0">比亚迪f0</a><a href="/comment/show/576" target="_blank" title="铃木奥拓">铃木奥拓</a><a href="/comment/show/580" target="_blank" title="北斗星">北斗星</a><a href="/comment/show/105" target="_blank" title="长安奔奔">长安奔奔</a><a href="/comment/show/54" target="_blank" title="宝骏乐驰">宝骏乐驰</a><a href="/comment/show/668" class="huang" target="_blank" title="奇瑞QQ">奇瑞QQ</a><a href="/comment/show/482" target="_blank" title="吉利熊猫">吉利熊猫</a><a href="/comment/show/385" target="_blank" title="哈飞路宝">哈飞路宝</a><a href="/comment/show/457" target="_blank" title="江淮悦悦">江淮悦悦</a><a href="/comment/show/774" target="_blank" title="双环小贵族">双环小贵族</a><a href="/comment/show/321" target="_blank" title="菲亚特500">菲亚特500</a><a href="/comment/show/152" target="_blank" title="宝马i3">宝马i3</a></div>
        <div class="hcleft">小型车</div>
        <div class="hcright"><a href="/comment/show/260" target="_blank" title="大众polo">大众polo</a><a href="/comment/show/823" target="_blank" title="现代瑞纳">现代瑞纳</a><a href="/comment/show/579" target="_blank" title="长安铃木雨燕">长安铃木雨燕</a><a href="/comment/show/204" target="_blank" title="本田飞度">本田飞度</a><a href="/comment/show/357" target="_blank" title="福特嘉年华">福特嘉年华</a><a href="/comment/show/201" target="_blank" title="本田锋范">本田锋范</a><a href="/comment/show/693" target="_blank" title="日产骊威">日产骊威</a><a href="/comment/show/116" target="_blank" title="长安悦翔">长安悦翔</a><a href="/comment/show/852" class="huang" target="_blank" title="雪佛兰赛欧">雪佛兰赛欧</a><a href="/comment/show/674" target="_blank" title="起亚k2">起亚k2</a><a href="/comment/show/216" target="_blank" title="标致207">标致207</a></div>
        <div class="hcleft">紧凑型</div>
        <div class="hcright"><a href="/comment/show/252" target="_blank" title="大众新宝来">大众新宝来</a><a href="/comment/show/358" class="huang" target="_blank" title="福特福克斯">福特福克斯</a><a href="/comment/show/1229" target="_blank" title="起亚K3S">起亚K3S</a><a href="/comment/show/848" target="_blank" title="雪佛兰科鲁兹">雪佛兰科鲁兹</a><a href="/comment/show/251" target="_blank" title="大众捷达">大众捷达</a><a href="/comment/show/253" target="_blank" title="大众速腾">大众速腾</a><a href="/comment/show/257" target="_blank" title="大众朗逸">大众朗逸</a><a href="/comment/show/677" target="_blank" title="起亚k3">起亚k3</a><a href="/comment/show/95" target="_blank" title="比亚迪F3">比亚迪F3</a><a href="/comment/show/250" target="_blank" title="大众高尔夫">大众高尔夫</a><a href="/comment/show/224" target="_blank" title="别克凯越">别克凯越</a><a href="/comment/show/261" target="_blank" title="桑塔纳">桑塔纳</a></div>
        <div class="hcleft">中型车</div>
        <div class="hcright"><a href="/comment/show/255" class="huang" target="_blank" title="大众迈腾">大众迈腾</a><a href="/comment/show/361" target="_blank" title="福特蒙迪欧">福特蒙迪欧</a><a href="/comment/show/258" target="_blank" title="大众帕萨特">大众帕萨特</a><a href="/comment/show/200" target="_blank" title="本田雅阁">本田雅阁</a><a href="/comment/show/229" target="_blank" title="别克君威">别克君威</a><a href="/comment/show/335" target="_blank" title="丰田凯美瑞">丰田凯美瑞</a><a href="/comment/show/124" target="_blank" title="奥迪A4">奥迪A4</a><a href="/comment/show/141" target="_blank" title="宝马3系">宝马3系</a><a href="/comment/show/678" target="_blank" title="起亚K5">起亚K5</a><a href="/comment/show/611" target="_blank" title="马自达6">马自达6</a><a href="/comment/show/101" class="huang" target="_blank" title="奥迪A4L">奥迪A4L</a><a href="/comment/show/227" class="huang" target="_blank" title="别克君越">别克君越</a></div>
        <div class="hcleft">中大型</div>
        <div class="hcright"><a href="/comment/show/126" target="_blank" title="奥迪A6">奥迪A6</a><a href="/comment/show/170" target="_blank" title="奔驰E级">奔驰E级</a><a href="/comment/show/475" target="_blank" title="捷豹XF">捷豹XF</a><a href="/comment/show/522" target="_blank" title="克莱斯勒300c">克莱斯勒300c</a><a href="/comment/show/535" target="_blank" title="雷克萨斯gs">雷克萨斯gs</a><a href="/comment/show/142" class="huang" target="_blank" title="宝马5系">宝马5系</a><a href="/comment/show/228" target="_blank" title="林荫大道">林荫大道</a><a href="/comment/show/506" target="_blank" title="sls赛威">sls赛威</a><a href="/comment/show/128" target="_blank" title="奥迪A7">奥迪A7</a><a href="/comment/show/328" target="_blank" title="丰田新皇冠">丰田新皇冠</a><a href="/comment/show/952" target="_blank" title="凯迪拉克xts">凯迪拉克xts</a><a href="/comment/show/648" target="_blank" title="讴歌RL">讴歌RL</a></div>
        <div class="hcleft">豪华型</div>
        <div class="hcright"><a href="/comment/show/175" target="_blank" title="奔驰S级">奔驰S级</a><a href="/comment/show/270" target="_blank" title="大众辉腾">大众辉腾</a><a href="/comment/show/151" target="_blank" title="宝马7系">宝马7系</a><a href="/comment/show/129" class="huang" target="_blank" title="奥迪A8L">奥迪A8L</a><a href="/comment/show/476" target="_blank" title="捷豹XJ">捷豹XJ</a><a href="/comment/show/540" target="_blank" title="雷克萨斯LS">雷克萨斯LS</a><a href="/comment/show/531" target="_blank" title="劳斯莱斯幻影">劳斯莱斯幻影</a><a href="/comment/show/606" target="_blank" title="玛莎拉蒂总裁">玛莎拉蒂总裁</a><a href="/comment/show/921" target="_blank" title="奥迪S8">奥迪S8</a><a href="/comment/show/83" target="_blank" title="宾利慕尚">宾利慕尚</a><a href="/comment/show/687" target="_blank" title="起亚K9">起亚K9</a><a href="/comment/show/1254" target="_blank" title="红旗L5">红旗L5</a></div>
        <div class="hcleft">SUV</div>
        <div class="hcright"><a href="/comment/show/394" target="_blank" title="哈弗H6">哈弗H6</a><a href="/comment/show/104" target="_blank" title="奥迪Q5">奥迪Q5</a><a href="/comment/show/359" target="_blank" title="长安福特翼虎">长安福特翼虎</a><a href="/comment/show/337" target="_blank" title="丰田汉兰达">丰田汉兰达</a><a href="/comment/show/332" target="_blank" title="丰田RAV4">丰田RAV4</a><a href="/comment/show/262" class="huang" target="_blank" title="大众途观">大众途观</a><a href="/comment/show/330" target="_blank" title="丰田普拉多">丰田普拉多</a><a href="/comment/show/595" target="_blank" title="揽胜极光">揽胜极光</a><a href="/comment/show/196" target="_blank" title="本田CR-V">本田CR-V</a><a href="/comment/show/1009" target="_blank" title="铃木锋驭">铃木锋驭</a><a href="/comment/show/934" target="_blank" title="长安cs75">长安cs75</a><a href="/comment/show/1021" target="_blank" title="标致2008">标致2008</a></div>
        <div class="hcleft">MPV</div>
        <div class="hcright"><a href="/comment/show/263" target="_blank" title="大众途安">大众途安</a><a href="/comment/show/809" class="huang" target="_blank" title="五菱宏光">五菱宏光</a><a href="/comment/show/449" target="_blank" title="江淮瑞风">江淮瑞风</a><a href="/comment/show/121" target="_blank" title="长安欧诺">长安欧诺</a><a href="/comment/show/225" target="_blank" title="别克GL8">别克GL8</a><a href="/comment/show/205" target="_blank" title="本田奥德赛">本田奥德赛</a><a href="/comment/show/710" target="_blank" title="日产帅客">日产帅客</a><a href="/comment/show/338" target="_blank" title="丰田逸致">丰田逸致</a><a href="/comment/show/285" target="_blank" title="东风菱智">东风菱智</a><a href="/comment/show/397" target="_blank" title="海马普力马">海马普力马</a><a href="/comment/show/447" target="_blank" title="江淮和悦RS">江淮和悦RS</a><a href="/comment/show/866" target="_blank" title="毕加索">毕加索</a></div>
        <div class="hcleft">跑车</div>
        <div class="hcright"><a href="/comment/show/853" target="_blank" title="雪佛兰科迈罗">雪佛兰科迈罗</a><a href="/comment/show/163" target="_blank" title="宝马Z4">宝马Z4</a><a href="/comment/show/56" target="_blank" title="保时捷911">保时捷911</a><a href="/comment/show/125" target="_blank" title="奥迪A5">奥迪A5</a><a href="/comment/show/718" target="_blank" title="日产GT-R">日产GT-R</a><a href="/comment/show/140" target="_blank" title="奥迪TT">奥迪TT</a><a href="/comment/show/190" target="_blank" title="奔驰cls">奔驰cls</a><a href="/comment/show/833" class="huang" target="_blank" title="现代劳恩斯酷派">现代劳恩斯酷派</a><a href="/comment/show/371" target="_blank" title="福特野马">福特野马</a><a href="/comment/show/272" target="_blank" title="大众尚酷">大众尚酷</a><a href="/comment/show/190" target="_blank" title="奔驰CLS级">奔驰CLS级</a><a href="/comment/show/137" target="_blank" title="奥迪R8">奥迪R8</a></div>
        <div class="hcleft">新能源</div>
        <div class="hcright"><a href="/comment/show/98" class="huang" target="_blank" title="比亚迪秦">比亚迪秦</a><a href="/comment/show/275" target="_blank" title="大众途锐">大众途锐</a><a href="/comment/show/227" target="_blank" title="别克君越">别克君越</a><a href="/comment/show/153" target="_blank" title="宝马i8">宝马i8</a><a href="/comment/show/335" target="_blank" title="丰田凯美瑞">丰田凯美瑞</a><a href="/comment/show/89" target="_blank" title="比亚迪e6">比亚迪e6</a><a href="/comment/show/195" target="_blank" title="本田思域">本田思域</a><a href="/comment/show/783" target="_blank" title="特斯拉model s">特斯拉model s</a><a href="/comment/show/782" target="_blank" title="腾势">腾势</a><a href="/comment/show/331" target="_blank" title="丰田普锐斯">丰田普锐斯</a><a href="/comment/show/859" target="_blank" title="雪佛兰沃蓝达">雪佛兰沃蓝达</a></div>
    </div>
</div>
<div class="height20"></div>
<script type="text/javascript">
    $(function () {
        $("#searchBtn").click(function () {
            var title = $('#txtTitle').val();
            window.location = "/Report?Title=" + title+"#GoSearch";
        });
    });
</script>

<?php include_once("../footer.php"); ?>
