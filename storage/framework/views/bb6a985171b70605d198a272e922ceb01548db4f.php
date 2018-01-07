<?php $__env->startSection('content'); ?>
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Product</a> </div>
    <h1>Product</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
            <?php if(count($errors)>0): ?>
                        <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($err); ?><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                    <?php if(session('thongbao')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('thongbao')); ?><br>
                        </div>
                    <?php endif; ?>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>ProductType</th>
                  <th>Description</th>
                  <th>unit_price</th>
                  <th>promotion_price</th>
                  <th>image</th>
                  <th>unit</th>
                  <th>new</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="gradeX">
                  <td><?php echo e($prd->id); ?></td>
                  <td><?php echo e($prd->name); ?></td>
                  <td><?php echo e($prd->producttype); ?></td>
                  <td><?php echo e($prd->description); ?></td>
                  <td><?php echo e($prd->unit_price); ?></td>
                  <td><?php echo e($prd->promotion_price); ?></td>
                  <td><img src="source/image/product/<?php echo e($prd->image); ?>"></td>
                  <td><?php echo e($prd->unit); ?></td>
                  <td><?php echo e($prd->new); ?></td>
                  <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/update/<?php echo e($prd->id); ?>"> Edit</a></td>
                  <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/delete/<?php echo e($prd->id); ?>"> Delete</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>