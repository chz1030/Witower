<?$this->view('header')?>
<script type="text/javascript" src="js/popWindow.js"></script> 
<div class="hd_map">
	<a href="{WIKI_URL}"><?=$setting['site_name']?></a> &gt; {lang getPass}</div>
<div class="w-550 a-r reg-back">{lang getPassTip3} <a href="{url user-register}" target="_self"> {lang register}</a></div>
<div class="a-c wid540 a-r reg-back">{lang resetTip1}</div>
<form name="form" action="{url user-getpass}" method="post" onsubmit="return checkemail()">
<ul class="bor-ccc ul_l_s reg-bd">
<input type="hidden" name="uid" value="<?=$uid?>"/>
<input type="hidden" name="verifystring" value="<?=$encryptstring?>"/>
	<li><span class="l a-r">{lang newPass}</span>
	<input name="password" id="password" type="password"  class="reg-inp" onblur="check_passwd()" maxlength="32" /><label id="passwdinfo" class="m-lr8">{lang editPassTip1}</label></li>
	<li><span class="l a-r">{lang renewPass}</span>
	<input name="repassword" id="repassword" type="password" class="reg-inp" onblur="check_repasswd()" maxlength="32"/><label class="m-lr8" id="cpasswdinfo"></label></li>
	<li><input name="submit" type="submit" value="{lang getPass}" class="btn_inp m-t8"/></li>
</ul>
</form>
<script type="text/javascript">
function check_passwd(){
	var passwd = $('#password').val();
	if(passwd.length<1 || passwd.length>32){
		$('#passwdinfo').html("{lang editPassTip1}");
		divDance('passwdinfo');
	}else{
		$('#passwdinfo').html("OK");
		divDance('passwdinfo');
	}
}
function check_repasswd(){
	if($('#password').val() == $('#repassword').val()){
		$('#cpasswdinfo').html("OK");
		divDance('cpasswdinfo');
	}else{
		$('#cpasswdinfo').html("{lang editPassTip3}");
		divDance('cpasswdinfo');
	}
}
</script>
<?$this->view('footer')?>