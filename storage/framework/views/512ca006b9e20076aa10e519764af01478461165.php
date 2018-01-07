<?php $__env->startSection('content'); ?>
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Product Type</a> <a href="#" class="current">Add</a> </div>
    <h1>Add ProductType</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>base-info</h5>
          </div>
          <div class="widget-content nopadding">
          
            <form action="admin/user/update/<?php echo e($user->id); ?>" method="post" class="form-horizontal">
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
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
              <div class="control-group">
                <label class="control-label">Full Name:</label>
                <div class="controls">
                  <input type="text" class="span11" name="full_name" value="<?php echo e($user->full_name); ?>" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                  <input type="text" class="span11" name="email" value="<?php echo e($user->email); ?>"/>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Address:</label>
                <div class="controls">
                  <input type="text"  class="span11" name="address" value="<?php echo e($user->address); ?>" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Phone</label>
                <div class="controls">
                  <input type="text" class="span11" name="phone" value="<?php echo e($user->phone); ?> "/>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                  <input type="text" class="span11" name="password" />
                </div>
              </div>
              <label class="radio-inline">
                                    <input name="quyen" value="0" type="radio" checked="">Thường
                                </label>
                                <label class="radio-inline">
                                    <input name="quyen" value="1" type="radio">Admin
                                </label>
              <div class="form-actions">
                <button type="submit" class="btn btn-success">Edit</button>
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