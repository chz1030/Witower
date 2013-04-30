<?$this->view('header')?>
<style>
	.LeftFrame{
		float:left;
		width:48%;
		height:570px;
		border:solid 1px;
		overflow-x:scroll;
		overflow-y:scroll
	}
	.RightFrame{
		float:left;
		width:48%;
		height:570px;
		border:solid 1px;
		overflow-x:scroll;
		overflow-y:scroll
	}
</style>
<script type="text/javascript">
function DriveRightScroll(){
	var RightDivObj = $('#RightScroll');
	var LeftDivObj = $('#LeftScroll');
	
	if (LeftDivObj.attr("scrollTop") < (RightDivObj.attr("scrollHeight") - RightDivObj.attr("clientHeight"))){
		RightDivObj.attr("scrollTop",LeftDivObj.attr("scrollTop"));
		RightDivObj.attr("scrollLeft",LeftDivObj.attr("scrollLeft"));
	}
}
function DriveLeftScroll(){
	var RightDivObj = $('#RightScroll');
	var LeftDivObj = $('#LeftScroll');
	if (RightDivObj.attr("scrollTop") < (LeftDivObj.attr("scrollHeight") - LeftDivObj.attr("clientHeight"))){
		LeftDivObj.attr("scrollTop",RightDivObj.attr("scrollTop"));
		LeftDivObj.attr("scrollLeft",RightDivObj.attr("scrollLeft"));
	}
}
</script>
<script type = "text/javascript" src = "js/compare.js"></script>
<div class="w-950 hd_map">
	<a href="index.php" target="_self"><?=$setting['site_name']?></a> &gt;&gt; <a href="{url doc-view-$doc['did']}" target="_self"><?=$doc['title']?></a> &gt;&gt; {lang compare} </div>
<div class="o-v">
	<h1 class="title_thema bor_b-ccc"><strong class="l"><?=$doc['title']?></strong><a href="{url doc-view-$doc['did']}" target="_self" class="r">{lang backDoc}</a></h1>
	<div class="edition">
		<ul class="l">
			<li>{lang edition}:<label><?=$edition[0]['editions']?></label>&nbsp;&nbsp;{lang editTime}:<label><?=$edition[0]['time']?></label>&nbsp;&nbsp;{lang editionCreator}:<a href="{url user-space-$edition[0]['authorid']}"><?=$edition[0]['author']?></a></li>
			<li>{lang docLength}:<label><?=$edition[0]['words']?>{lang word}</label>&nbsp;&nbsp;{lang image}<label><?=$edition[0]['images']?>{lang piece}</label></li>
		</ul>
		<ul class="r">
			<li>{lang edition}:<label><?=$edition[1]['editions']?></label>&nbsp;&nbsp;{lang editTime}:<label><?=$edition[1]['time']?></label>&nbsp;&nbsp;{lang editionCreator}:<a href="{url user-space-$edition[1]['authorid']}"><?=$edition[1]['author']?></a></li>
			<li>{lang docLength}:<label><?=$edition[1]['words']?>{lang word}</label>&nbsp;&nbsp;{lang image}<label><?=$edition[1]['images']?>{lang piece}</label></li>
		</ul>
	</div>
	<div id="LeftScroll" class="LeftFrame" onscroll="DriveRightScroll()">
		<span id="LeftContent" align="left"><?=$edition[0]['content']?></span>
	</div>
	<div id="RightScroll" class="RightFrame" onscroll="DriveLeftScroll()">
		<span id="RightContent" align="left"><?=$edition[1]['content']?></span>
	</div>
	
</div>
<script type="text/javascript">CompareById('LeftContent', 'RightContent');</script>
<p class="main l mar-t8"><label class="fanwei">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>{lang compareTip1} <label class="dian">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>{lang compareTip2} </p>
<?$this->view('footer')?>