<?$this->view('header')?>
<style type="text/css">
<!--
.a-img1 img {
max-width:140px;
max-height:140px;
width: expression(this.width > 136 && this.width/this.height >= 1 ? 136 : true);
height: expression(this.height > 136 && this.width/this.height < 1 ? 136 : true);
}
.on{background:url(style/default/col_h2_on_bg.gif) repeat-x left top;}
-->
</style>
<div class="l w-230 tpbk_sideba">
<div class="columns  m-t10">
<h2 class="col-h2 <!--{if $type==2}-->on<!--{/if}-->"><a href="{url pic-piclist-2}">{lang pic_new}</a></h2>
</div>
<div class="columns  m-t10">
<h2 class="col-h2 <!--{if $type==3}-->on<!--{/if}-->"><a href="{url pic-piclist-3}">{lang pic_click}</a></h2>
</div>
<div class="columns  m-t10">
<h2 class="col-h2 <!--{if $type==1}-->on<!--{/if}-->"><a href="{url pic-piclist}">{lang pic_focus}</a></h2>
</div>
<div id="block_left">{block:left/}</div>
</div>
<div class="r w-710">
<ul class="gray list j-zhong tpbk_img_list">


<!--{if $piclist}-->
	<!--{loop $piclist $key $data}-->
	<li>
	<label>
	<a href="{url pic-view-<?=$data['id']?>-<?=$data['did']?>}" target="_blank" class="a-img1"><img src="<?=$data['attachment']?>" alt="<?=$data['description']?>" name="{lang picture}" /></a>
	</label>
	<a href="{url doc-view-$data['did']}" target="_blank" title="<?=$data['description']?>" class="a-c"><?=$data['subdescription']?></a>
	<p class="a-c m-lr8"><?=$data['sizeinfo']?></p>
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
