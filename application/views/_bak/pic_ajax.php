{eval ob_end_clean();}
{eval ob_start();}
{eval @header("Expires: -1");}
{eval @header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);}
{eval @header("Pragma: no-cache");}
{eval @header("Content-type: application/xml; charset=<?=$charset?>");}
{eval echo '<?xml version="1.0" encoding="'.WIKI_CHARSET.'"?>';}
<root>
<!--{if isset($piclist)}-->
	<list><![CDATA[<!--{loop $piclist $key $data}-->
		<li id="li_<?=$key?>" onclick="pic.change_pic(<?=$data['id']?>,<?=$key?>)"><a href="javascript:void(0);" class="a-img1"><img src="<?=$data['attachment']?>" alt="<?=$data['description']?>" /></a></li>
		<!--{/loop}-->]]></list>
<!--{/if}-->
<!--{if isset($pic)}-->
	<pic><data0><![CDATA[<img src="<?=$pic['attachment']?>"/> ]]></data0><data1><![CDATA[<?=$pic['description']?>]]></data1><data2><![CDATA[<?=$pic['fileborder']?>]]></data2><data3><![CDATA[<?=$pic['filesize']?>]]></data3><data4><![CDATA[<?=$pic['filetype']?>]]></data4><data5><![CDATA[ <a href="?user-space-<?=$pic['uid']?>" target="_blank"><?=$pic['username']?></a> ]]></data5></pic>
<!--{/if}-->
</root>
