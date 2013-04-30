{eval ob_end_clean();}
{eval ob_start();}
{eval @header("Expires: -1");}
{eval @header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);}
{eval @header("Pragma: no-cache");}
{eval @header("Content-type: application/xml; charset=".WIKI_CHARSET);}
{eval echo '<?xml version="1.0" encoding="'.WIKI_CHARSET.'"?>';}
<root><![CDATA[
<!--{if $type<=2}-->
<span id="page" style="display:none"><?=$page?></span>

	<!--{loop $comments $key $comment}-->
	<!--{if $comment!==''}-->
	<div class="columns" id="li_<?=$key?>">
		<span class="col-h2" id="u_<?=$comment['id']?>">
		{lang commentUser}<!--{if $comment['authorid']==0 }--><?=$comment['author']?><!--{else}--><a href="{url user-space-$comment['authorid']}" ><?=$comment['author']?></a><!--{/if}-->
		</span>
		<span class="more gray">{lang commentTime}<span class="gray"><?=$comment['time']?></span></span>
		<div class="com_content">
		<?=$comment[reply]?>
		<p class="m-t10" id="c_<?=$comment['id']?>"><?=$comment[comment]?></p>
		<p class="a-r">
			<span><img src="style/default/down.gif"/><span id="op_<?=$comment['id']?>"><a href="javascript:void(0)"  onclick="oppose_comment(<?=$comment['id']?>);">{lang commentOppose}</a></span>(<span id="o_<?=$comment['id']?>"><?=$comment['oppose']?></span>)</span>
			
			<span><img src="style/default/up.gif"/><span id="ae_<?=$comment['id']?>"><a href="javascript:void(0)"  onclick="aegis_comment(<?=$comment['id']?>);" >{lang commentAegis}</a></span>(<span id="a_<?=$comment['id']?>"><?=$comment['aegis']?></span>)</span>
			<span><img src="style/default/reply.gif"/><a href="javascript:void(0)"  onclick="reply_comment(<?=$comment['id']?>);">{lang commentReply}</a></span>
			<span><img src="style/default/jubao.gif"/><a href="javascript:void(0)"  onclick="report_comment(<?=$comment['id']?>);">{lang commentReport}</a></span>
			<!--{if $commentEdit}-->
			<span><img src="style/default/ament.gif"/><a href="javascript:void(0)"  onclick="edit_comment(<?=$comment['id']?>);">{lang commentEdit}</a></span>
			<span><img src="style/default/delete.gif"/><a href="javascript:void(0)"  onclick="del_comment(<?=$comment['id']?>);">{lang commentDel}</a></span>
			<!--{/if}-->
		  
		</p>
		</div>
	</div>
	<!--{else}-->
	<div class="columns" id="li_<?=$key?>" style="display:none"></div>
	<!--{/if}-->
	<!--{/loop}-->
	
	<!--{if $departstr}-->
	<div id="fenye" class="a-r m-t10"> 
	<?=$departstr?>
	</div>
	<!--{/if}-->
	
<!--{elseif $type==3}-->
		<span class="col-h2"><!--{if $comments['authorid']==0 }--><?=$comments['author']?><!--{else}--><a href="{url user-space-$comments['authorid']}" ><?=$comments['author']?></a><!--{/if}--></span>
		<span class="more gray">{lang commentTime}<span class="gray"><?=$time?></span></span>
		<div class="com_content">
		<?=$reply?>
		<p class="m-t10" id="c_<?=$id?>"><?=$comment?></p>
		<p class="a-r">
			<span><img src="style/default/down.gif"/><span id="op_<?=$id?>"><a href="javascript:void(0)"  onclick="oppose_comment(<?=$id?>);">{lang commentOppose}</a></span>(<span id="o_<?=$id?>"><?=$comments['oppose']?></span>)</span>
			<span><img src="style/default/up.gif"/><span id="ae_<?=$id?>"><a href="javascript:void(0)"  onclick="aegis_comment(<?=$id?>);" >{lang commentAegis}</a></span>(<span id="a_<?=$id?>"><?=$comments['aegis']?></span>)</span>
			<span><img src="style/default/reply.gif"/><a href="javascript:void(0)"  onclick="reply_comment(<?=$id?>);">{lang commentReply}</a></span>
			<span><img src="style/default/jubao.gif"/><a href="javascript:void(0)"  onclick="report_comment(<?=$id?>);">{lang commentReport}</a></span>
			<!--{if $commentEdit}-->
			<span><img src="style/default/ament.gif"/><a href="javascript:void(0)"  onclick="edit_comment(<?=$id?>);">{lang commentEdit}</a></span>
			<span><img src="style/default/delete.gif"/><a href="javascript:void(0)"  onclick="del_comment(<?=$id?>);">{lang commentDel}</a></span>
			<!--{/if}-->
		</p>
		</div>
<!--{/if}-->
]]></root>
