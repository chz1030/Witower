<?$this->view('header')?>
<script type="text/javascript" src="js/popWindow.js"></script>
<script type="text/javascript">
function updateverifycode() {
	var img = 'index.php?user-code-'+Math.random();
	$('#verifycode').attr("src",img); 
}
function check_code(){
	var result=false;
	
	$.ajax({
		async:false,
		url:"index.php?user-checkcode",
		type:'POST',
		data:{ code:$.trim($('#code').val())},
		dataType : 'xml',
		success :function(xml){
			var message=xml.lastChild.firstChild.nodeValue;
			if(message=='OK'){
				$('#checkcode').html('OK!');
				result=true;
			}else{
				$('#checkcode').html('{lang loginTip4}');
				divDance('divcode');
			}
		}
	});
	return result;
}

function checkemail(){
	var ele=$('#emailinfo');
	var email=$.trim($('#email').val());
	if(email==""){
		ele.html("{lang getPassTip1}");
		divDance('divemail');
		return false;
	}else if (email!="" && !email.match(/^[\w\.\-]+@([\w\-]+\.)+[a-z]{2,4}$/ig)){
		ele.html("{lang getPassTip2}");
		divDance('divemail');
		return false;
	}else{
		ele.html('OK!');
	 	return true;
	}
}

function docheck(){
	if( checkemail()){
		<!--{if $checkcode != "3"}-->
		if(check_code()){
			return true;
		}else{
			return false;
		}
		<!--{/if}-->
		return true;
	}else{
		return false;
	}
}
</script>
<div class="hd_map">
	<a href="{WIKI_URL}"><?=$setting['site_name']?></a> &gt; {lang getPass}</div>
<div class="w-550 a-r reg-back">{lang getPassTip3} <a href="{url user-register}" target="_self"> {lang register}</a></div>
<form name="form" action="{url user-getpass}" method="post" onsubmit="return docheck();">
<ul class="bor-ccc ul_l_s reg-bd">
	<li><span class="l a-r">Email</span>
	<input name="email" maxlength="50" id="email" type="text"  class="reg-inp" onblur="checkemail()"/><label id="emailinfo" class="m-lr8"></label></li>
	<!--{if $checkcode != "3"}-->
	<li class="yzm m-t10">
		<span class="l a-r">{lang verifyCode}</span>
		<input name="code" id="code"  tabindex="5"  type="text" onblur="check_code()" maxlength="4" />
			<label class="m-l8">
				<img id="verifycode" src="{url user-code}" onclick="updateverifycode();" />
			</label>&nbsp;
			<a href="javascript:updateverifycode();">{lang codeNotClear}</a>
			<label id="checkcode" class="m-lr8"></label>
	</li>
	<!--{/if}-->
	<li><input name="submit" type="submit" value="{lang getPass}"   class="btn_inp m-t8"/></li>
</ul>
</form>
<script type="text/javascript"> 
$('email').focus();
</script>
<div class="c-b"></div>
<?$this->view('footer')?>

