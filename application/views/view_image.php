<div class="row">
	<?php foreach($datas as $data => $value):?>
	<div class="col-4">
		<div class="card" style="border: 0px">
			<div class="card-body">
				<h3 class="cart-title"><?php echo $value->title; ?></h3>
				<img src="<?php echo base_url().'upload/'.$value->image ?>" class="img-responsive" style="height: 300px;width: 250px">
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>