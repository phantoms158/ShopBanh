<?php $__env->startSection('content'); ?>
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
    <h1>Common Form Elements</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Product-info</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="admin/product/addnew" method="post" class="form-horizontal">
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
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
              <div class="control-group">
                <label class="control-label">Name Product:</label>
                <div class="controls">
                  <input type="text" class="span11" name="name" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Product Type :</label>
                <select class="form-control" name="id_prodcut">
                                <?php $__currentLoopData = $productType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($pt->id); ?>"><?php echo e($pt->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
              </div>
              <div class="control-group">
                <label class="control-label">Description </label>
                <div class="controls">
                  <input type="text" class="span11" name="description" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Unit Price</label>
                <div class="controls">
                  <input type="text"  class="span11" name="unit_price"  />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Promotion Price</label>
                <div class="controls">
                  <input type="text" class="span11" name="promotion_price"/>
                </div>
              </div>
              <div class="control-group">
                
                                <label class="control-label">Image</label>
                                <input type="file" name="image" class="form-group"></input>
              </div>
              <div class="control-group">
                <label class="control-label">Unit</label>
                <div class="controls">
                  <textarea class="span11" name="unit"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">New</label>
                <div class="controls">
                  <textarea class="span11" name="new" ></textarea>
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-success">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
    </div><hr>
   
      
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>