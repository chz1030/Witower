<?$this->view('header')?>
<div id="content" class="page-company">
	<div class="breadcrumb">
		<strong>企业</strong> >> 产品管理
	</div>
	<?$this->view('company/sidebar')?>
	<div id="right">
		<div class="model">
			<div class="title"><h3>产品管理</h3></div>
			<div class="main">
				<div class="tab">
				</div>
				<div class="show_content">
					<form>
						<button class="btn" type="button" onclick="location.href='/company/addproduct'">增加新产品</button>
						<table class="table table-bordered">
							<thead>
								<tr> <td>编号</td><td>产品名称</td><td>图片</td><td class="descript">描述</td><td>操作</td><td>统计</td></tr>
							</thead>
							<tbody>
<?foreach($products as $product){?>								
								<tr> 
									<td><?//=$product[no]?></td>
									<td><?=$product['name']?></td>
									<td><img src="/uploads/images/product/<?=$product['id']?>.jpg" width="80px"></td>
									<td><?//=$product[intro]?></td>
									<td>
										<button class="btn btn-small" type="button" onclick="location.href='/company/editproduct/<?=$product['id']?>'">修改</button><br>
										<button class="btn btn-small" type="button" onclick="window.open('/company/createproject/<?=$product['id']?>')">发布项目</button>
									</td>
									<td>
										3个进行中的项目<br>
										6个投票中的项目<br>
										5个作品
									</td>
								</tr>
<?}?>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?$this->view('footer')?>