<?$this->view('header')?>
<style type="text/css">
<!--
.a-img1 img {
max-width:140px;
max-height:140px;
}
li img {
max-width:140px;
max-height:140px;
}
-->
</style>

<p class="a-r resoult_total">
{lang searchImgTip} 
</p>
<div class="l w-310">
<div class="a-c p-10 s_result">
<span class="j-zhong theme_img">
<a href="{url pic-view-<?=$leftpic['id']?>-<?=$leftpic['did']?>}" target="_blank" class="a-img1" ><img src="<?=$leftpic['attachment']?>" alt="<?=$leftpic['description']?>" /></a> </span>
<h1 class="h2 a-c"><a href="{url doc-view-$leftpic['did']}" target="_blank"><?=$leftpic['description']?></a></h1>
<p class="m-t10 a-l">&nbsp;&nbsp;&nbsp;&nbsp;<?=$leftpic['summary']?> ……<span class="block c-b r">[ <a href="{url doc-view-$leftpic['did']}" target="_blank">{lang goin}</a>]</span> </p>
</div>
</div>
	<div class="r w-630">
	<ul class="gray dt_list">
	<!--{if $piclist}-->
	<!--{loop $piclist $key $data}-->
		<li>
		<label class="dt_element"><a href="{url pic-view-<?=$data['id']?>-<?=$data['did']?>}" target="_blank"><img src="<?=$data['attachment']?>" alt="<?=$data['description']?>" /></a></label>
		<p class="a-c m-lr8"><?=$data['sizeinfo']?></p><a href="{url doc-view-$data['did']}" target="_blank" class="gray"><?=$data['description']?></a>
		</li>
	<!--{/loop}-->
<!--{else}-->
no pictures
<!--{/if}-->
	</ul>
	<div class="c-b"></div>
	<div id="fenye" class="m-t10 m-r8 a-r"> 
	<?=$departstr?>
	</div>
</div>
<?$this->view('footer')?>