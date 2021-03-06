<?php
/**
 * 重定向，对于站内跳转，url写成REQUEST_URI即可，如'user?browser'
 * 有php和js两种方式
 * 对于php跳转，采用发送301header的方式，因此之前整个系统不能输出任何内容
 * 对于js跳转，输出js代码交给浏览器完成跳转，因此会发生内容输出
 * $unsetPara目前只适用于js跳转，用以将原来url中的某个变量去除
 */
function redirect($url='',$method='php',$base_url=NULL){
	$CI=&get_instance();
	is_null($base_url) && $base_url=$CI->config->item('base_url');
	
	if($method=='php'){
		header("location:{$base_url}".$url);
	}
	elseif($method=='js'){
		echo "<script>location.href='$base_url.$url</script>";
	}
	exit;
}

/**
 * 输出1K的空格来强制浏览器输出
 * 使用后在下文执行任何输出，再紧跟flush();即可即时看到
 */
function forceExport(){
	ob_end_clean();   //清空并关闭输出缓冲区
	echo str_repeat(' ',1024);
}

function followButton($uid){
	$CI=&get_instance();
	if($CI->user->hasFollowed($uid)){
?>
<a href="#" class="add-follow btn btn-mini">已关注</a>
<?php
	}elseif($uid==$CI->user->id){
?>
<a href="#" class="add-follow btn btn-mini">我自己</a>
<?php		
	}elseif($CI->user->isLogged()){
?>
<a href="#" class="add-follow btn btn-mini" user="<?=$uid?>">加关注</a>
<?php
	}else{
?>
<a href="/login?<?=http_build_query(array('forward'=>substr($CI->input->server('REQUEST_URI'),1)))?>" class="add-follow btn btn-mini" user="<?=$uid?>">加关注</a>
<?php
	}
}
?>