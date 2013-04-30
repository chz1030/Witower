<?$this->view('header')?>
<div class="l w-710 o-v p-b10 resoult_list">
	<div class="p-10 bor-ccc cre_search">
	<form name="createform" method="post" action="{url doc-create}">
	<dl class="ul_l_s">
		<dd class="create">{lang notExistTipLeft}<a href="{url doc-create}" ><strong><?=$title?></strong></a>{lang notExistTip}
		<input name="title" type="hidden" value="<?=$title?>"/>
		<input name="create" type="submit" value="{lang createDoc}" class="btn_inp v-m"/><br />
		<!--{if $search_tip_switch=='1' }-->{lang searchConsultHudong}
		<a href="http://fun.hudong.com/edmclick.do?senderid=91&pici=19&nexturl=http://www.hudong.com/wiki/<?=$searchword?>" target="_blank"><?=$title?></a>
		<!--{/if}-->
		</dd>
	</dl>
	</form>
	</div> 

	<!--{if !empty($list)}-->
	<p class="resoult_total bold">{lang searchCorrelative}</p>
	<!--{loop $list $key $doc}-->
	<dl class="col-dl">
	<dt class="h2"><a href="{url doc-view-$doc['did']}"><?=$doc['title']?></a></dt>
	<dd><p><span class="bold">{lang summary}:&nbsp;&nbsp;</span><?=$doc['summary']?><a href="{url doc-view-$doc['did']}" class="block">[{lang readFullText}]</a></p></dd>
	</dl>
	<!--{/loop}-->
	<dl class="col-dl">
		<dd><a href="{url search-fulltext-title-{eval echo urlencode($title)}--all-0--time-desc-1-1}">{lang searchMore}</a></dd>
	</dl>
	<!--{/if}-->
</div>

<div class="r w-230">
	<!--
	<div class="ad">
		<a href="#" target="_blank"><img src="style/default/ad-230.jpg"/></a>
	</div>
	-->
	<div class="columns ad">
	<p class="a-c m-t10 col-p" >
	{lang moreDetail}<a href="http://www.hudong.com/wiki/{eval echo urlencode(<?=$searchtext?>)}" target="_blank">{lang hudong}</a><br/>
	{lang moreDetail}<a href="http://www.google.com.hk/search?hl=zh-CN&newwindow=1&q={eval echo urlencode(<?=$searchtext?>)}&aq=f" target="_blank">{lang google}</a>
	</p>
	</div>
</div>
<div class="c-b"></div>
<?$this->view('footer')?>