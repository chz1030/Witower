<? $this->view('header') ?>
	<div class="model">
		<div class="title">
			<h3>创意 <?=$wit['name']?> 的版本</h3>
			<?if($wit['selected']){?><span class="icon-check" title="已选中"></span><?}?>
			<?if($wit['deleted']){?><span class="icon-remove-sign" title="已删除"></span><?}?>
<?if(($this->user->isLogged(array('witower','wit')) || $this->user->id==$project['id']) && $project['status']==='buffering'){?>
<?	if($wit['selected']){?>
			<a href="/wit/unselect/<?=$wit['id']?>" class="btn btn-small" style="margin-left:1em">取消选中此创意</a>
<?	}else{?>
			<a href="/wit/select/<?=$wit['id']?>" class="btn btn-small" style="margin-left:1em">选中此创意</a>
<?	}?>
<?}?>
		</div>
		<form method="post">
			<div class="main">
				<?=$this->view('alert')?>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>版本</th>
							<th>标题</th>
							<th>作者</th>
							<th>时间</th>
							<th>得分</th>
<?if($this->user->isLogged(array('witower','wit')) || $project['company']==$this->user->id){?>
							<th>操作</th>
<?}?>
						</tr>
					</thead>
					<tbody>
<?foreach ($versions as $id => $version){?>
						<tr class="fields">
							<td>
								<label>
									<?=$version['num']?>
<?	if($version['deleted']){?>
									<span class="icon-remove-sign" title="已删除"></span>
<?	}?>
								</label>
							</td>
							<td><?=$version['name']?></td>
							<td>
								<a href="/space/<?=$version['user']?>" ><?= $version['author_name'] ?></a>
<?	if(!$this->input->get('user')){?>
								<a href="?user=<?=$version['user']?>" title="只看该作者"><span class="icon-filter"></span></a>
<?	}?>
							</td>
							<td>
								<?= date('Y-m-d H:i',$version['time']) ?>
							</td>
							<td>
								智塔：<?=$version['score_witower']?>, 企业：<?=$version['score_company']?>
<?	if($this->user->isLogged(array('witower','wit')) || $project['company']==$this->user->id){?>
<?		if($project['status']!='end'){?>
								<p class="form-inline">
									<input type="text" name="score[<?=$version['id']?>]" value="<?=$version['score']?>" placeholder="评分" style="width:3em">
									<input type="text" name="comment[<?=$version['id']?>]" value="<?=$version['comment']?>" placeholder="评语">
									<button type="submit" class="btn">打分</button>
								</p>
<?		}?>
<?	}?>
							</td>
<?	if($this->user->isLogged(array('witower','wit')) || $project['company']==$this->user->id){?>
							<td>
<?		if($version['deleted']){?>
								<a href="/wit/recoverversion/<?=$version['id']?>" class="btn btn-small">恢复</a>
<?		}else{?>
								<a href="/wit/removeversion/<?=$version['id']?>" class="btn btn-small">删除</a>
<?		}?>								
							</td>
<?	}?>
						</tr>
						<tr class="summary version">
							<td class="content" colspan="<?if($this->user->isLogged(array('witower','wit')) || $project['company']==$this->user->id){?>6<?}else{?>5<?}?>">
								<?= $version['content'] ?>
							</td>
						</tr>
<?}?>
					</tbody>
				</table>
			</div>
		</form>
	</div>

<script type="text/javascript" src="/js/diff_match_patch.js"></script>
<script type="text/javascript" src="/js/jquery.pretty-text-diff.min.js"></script>
<script type="text/javascript">
$(function(){
	$('.version').on('click',function(){
		$(this).siblings('.version:hidden').show().removeClass('changed')
		.siblings().removeClass('changed').removeClass('original')
		.siblings('.diff').remove();

		$(this).clone().insertBefore(this).addClass('diff');
		$(this).addClass('changed').hide()
			.nextAll('.version:first').addClass('original')
			.parent().prettyTextDiff({
				originalContainer:'.version.original>.content',
				changedContainer:'.version.changed>.content',
				diffContainer:'.version.diff>.content'
			})
			.children('.version.diff').children('.content').find('br:first').remove();
	});
	$('.version:first').trigger('click');
});
</script>
		
<? $this->view('footer') ?>
