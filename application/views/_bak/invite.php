<?$this->view('header')?>
<div id="append_parent"></div>
<script type="text/javascript">
var userAgent = navigator.userAgent.toLowerCase();
var is_ie = (userAgent.indexOf('msie') != -1 && !(userAgent.indexOf('opera') != -1 && opera.version())) && userAgent.substr(userAgent.indexOf('msie') + 5, 3);
function copyTxt(txt){
	if(is_ie) {
		clipboardData.setData('Text',txt);
		alert ("{lang copyURLTip}");
	} else {
		prompt("{lang pleaseCopyThis}",txt); 
	}
}
function autoPreview(val, id) {
	var previewObj = document.getElementById(id);
	if(typeof previewObj == 'object') {
		if(val.length >= 300) 
			return false;
		else
			previewObj.innerHTML = val.replace(/\n/ig, "<br />");
	}
}

</script>
<div class="hd_map">
	<a href="{WIKI_URL}"><?=$setting['site_name']?></a> &gt; <a href="{url user-profile}">{lang selfManage}</a> &gt; {lang editProfile}</div>
	
	<div class="r w-710 o-v m-t10 p-b10 gl_manage_main">
		<h2 class="h3 bold">{lang myInviteLink}</h2>
		
		
		
		<div style="padding: 10px 20px; color: #666;">
		{lang inviteLinkTip}<br />
			<span style="font-size: 16px; font-weight: bold;">
			<a onclick="javascript:copyTxt(this.href);return false;" href="<?=$invite_url?>"><?=$invite_url?></a>
			</span>
		</div>
		<br />
		
		<h2 class="h3 bold">{lang emailInvite}</h2>
		<div style="padding: 10px 20px; color: #666;">
		{lang emailInviteTip}<br />
		<form action="{url user-invite}" style="color: #000;" method="POST">
		{lang insertYourEmail}<br />
		<textarea name="toemails" cols="70" rows="8" /><?=$toemails?></textarea><br />
		<span style="color:red"><?=$mail_error?></span><br />
		{lang inviteWords}<br />
		<textarea name="ps" cols="70" rows="3" onkeyup="autoPreview(this.value, 'PreContainer')"><?=$ps?></textarea><br />
		<span style="color:red"><?=$ps_error?></span><br />
		<input type="submit" name="submit" value="{lang sendInvite}" />
		</form>
		<br />
		{lang invitePreview}
		<div style="border: 1px solid #CCC; background: #F0F0F0; padding: 10px; line-height: 14px;">
		<?=$preview?>
		</div>
		</div>
		
		<br />
	
</div>

<div class="l w-230">
<div class="m-t10 p-b10 sidebar gl_manage">
	<h2 class="col-h2"><span onclick="expand('usermanage');">{lang profile}</span></h2>	
	<ul id="usermanage">
		<li><a href="{url user-profile}" target="_self"><img alt="" src="style/default/gl_manage/grzl.gif" />{lang profile}</a></li>
		<li><a href="{url user-editprofile}" target="_self"><img src="style/default/gl_manage/grzl_set.gif"/>{lang editProfile}</a></li>
		<li><a href="{url user-editpass}" target="_self"><img src="style/default/gl_manage/change_pw.gif"/>{lang editPass}</a></li>
		<li><a href="{url user-editimage}" target="_self"><img src="style/default/gl_manage/grzl_set.gif" />{lang editImage}</a></li>
		<li><a href="{url doc-managesave}" target="_self"><img src="style/default/gl_manage/ctbccgx.gif"/>{lang manageSave}</a></li>
		<li><a href="{url user-invite}" target="_self" class="on"><img src="style/default/gl_manage/invite.png"/>{lang regInvite}</a></li>
	</ul>
	<h2 class="col-h2"><span onclick="expand('userpms');">{lang shortmessage}</span></h2>		
	<ul id="userpms">
		<li><a href="{url pms-box-inbox}" target="_self"><img alt="" src="style/default/gl_manage/sjx.gif" />{lang inbox}</a></li>
		<li><a href="{url pms-box-outbox}" target="_self" ><img src="style/default/gl_manage/fjx.gif"/>{lang outbox}</a></li>
		<li><a href="{url pms-sendmessage}" target="_self" ><img src="style/default/gl_manage/fdxx.gif"/>{lang sendmessage}</a></li>
		<li><a href="{url pms-box-drafts}" target="_self"><img src="style/default/gl_manage/cgx.gif" />{lang draft}</a></li>
		<li><a href="{url pms-blacklist}" target="_self"><img src="style/default/gl_manage/hllb.gif"/>{lang blacklist}</a></li>
	</ul>
</div>
</div>
<div class="c-b"></div>
<?$this->view('footer')?>