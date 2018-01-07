<?php $__env->startSection('content'); ?>
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản Phẩm <?php echo e($sanpham->name); ?></h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="<?php echo e(route('trang-chu')); ?>">Trang Chủ</a> / <span>Thông Tin Sản Phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<?php if($sanpham->promotion_price != 0): ?>
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
							<?php endif; ?>
							<img src="source/image/product/<?php echo e($sanpham->image); ?>" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h2><?php echo e($sanpham->name); ?></h2></p>
								<p class="single-item-price">
									<?php if($sanpham->promotion_price == 0): ?>
												<span class="flash-sale"><?php echo e($sanpham->unit_price); ?></span>
									<?php else: ?>
												<span class="flash-del"><?php echo e(number_format($sanpham->unit_price)); ?> đồng</span>
												<span class="flash-sale"><?php echo e(number_format($sanpham->promotion_price)); ?>đồng</span>
									<?php endif; ?>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p><?php echo e($sanpham->description); ?></p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Số Lượng:</p>
							<div class="single-item-options">
								<select class="wc-select" name="size">
									<option>Số Lượng:</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="<?php echo e(route('themgiohang',$sanpham->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô Tả:</a></li>
							
						</ul>

						<div class="panel" id="tab-description">
							<p><?php echo e($sanpham->description); ?></p>
						</div>
						
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản Phẩm Tương Tự</h4>

						<div class="row">
						<?php $__currentLoopData = $sp_tuongtu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sptt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-4">
								<div class="single-item">
								<?php if($sptt->promotion_price != 0): ?>
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										<?php endif; ?>
									<div class="single-item-header">
										<a href="<?php echo e(route('chitietsanpham',$sptt->id)); ?>"><img src="source/image/product/<?php echo e($sptt->image); ?>" alt="" height="250px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title"><?php echo e($sptt->name); ?></p>
										<p class="single-item-price" style="font-size: 15px">
											<?php if($sptt->promotion_price == 0): ?>
												<span class="flash-sale"><?php echo e($sptt->unit_price); ?></span>
									<?php else: ?>
												<span class="flash-del"><?php echo e(number_format($sptt->unit_price)); ?> đồng</span>
												<span class="flash-sale"><?php echo e(number_format($sptt->promotion_price)); ?>đồng</span>
									<?php endif; ?>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="<?php echo e(route('chitietsanpham',$sptt->id)); ?>">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<div class="row"><?php echo e($sp_tuongtu->links()); ?></div>
					</div> <!-- .beta-products-list -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>