<?php 
include_once("../header.php"); 
$id = '';
if(!empty($_GET['id']) && is_numeric($_GET['id'])){
	$id = $_GET['id'];
}
$sql = "select * from `car_report` where car_id={$id}";
$res = mysql_query($sql);
$result = mysql_fetch_assoc($res);
?>




<script type="text/javascript">
    function CheckUseful() {
        var id = $("#ID").val();
        $.post("/Report/GetUsefulCount", { id: id }, function (data) {
            if (data == "1") {
                $("#UsefulStrong").text(parseInt($("#UsefulStrong").text()) + 1);
            } else if (data == "2") {
                alert("你今天已经点击了！");
            }
        });
    }

    function CheckDownload(theObj) {
        var id = $("#ID").val();
        if ($(theObj).attr("href") != "javascript:void(0)") {
            $.post("/Report/GetDownloadCount", { id: id }, function (data) {
                if (data == "1") {
                    $("#DownloadStrong").text(parseInt($("#DownloadStrong").text()) + 1);
                }
            });
        }
    }
    $(document).ready(function(e) {			
	t = $('.fixed').offset().top;
	mh = $('.report').height();
	fh = $('.fixed').height();
	$(window).scroll(function(e){
		s = $(document).scrollTop();	
		if(s > t - 10){
			$('.fixed').css('position','fixed');
			if(s + fh > mh){
				$('.fixed').css('top',mh-s-fh+'px');	
			}				
		}else{
			$('.fixed').css('position','');
		}
	})
});
</script>

<div class="daohang">
    <a href="/" style="color: #135EBD">首页</a> > <a href="/Report">质量报告</a> > 
    <?php echo $result['daohang']; ?>
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

<?php echo $result['content']; ?>


<?php include_once("../footer.php"); ?>