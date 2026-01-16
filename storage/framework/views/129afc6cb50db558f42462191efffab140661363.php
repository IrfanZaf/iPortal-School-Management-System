
<?php $__env->startSection('admin'); ?>


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			 

			<div class="col-12">




<div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
 <div class="widget-user-header bg-black">
	  <h3 class="widget-user-username">User Name : <?php echo e($user->name); ?></h3>

	   <a href="<?php echo e(route('profile.edit')); ?>" style="float: right;" class="btn btn-rounded btn-success mb-5"> Edit Profile</a>	
	  
	  <h6 class="widget-user-desc">User Type : <?php echo e($user->usertype); ?></h6>
	  <h6 class="widget-user-desc">User Email : <?php echo e($user->email); ?></h6>

	
					</div>
					<div class="widget-user-image">
  <img class="rounded-circle"
   src="<?php echo e((!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg')); ?> " alt="User Avatar">
					</div>
					<div class="box-footer">
					  <div class="row">
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">Mobile No</h5>
							<span class="description-text"><?php echo e($user->mobile); ?></span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4 br-1 bl-1">
						  <div class="description-block">
							<h5 class="description-header">Address</h5>
							<span class="description-text"><?php echo e($user->address); ?></span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">Gender</h5>
							<span class="description-text"><?php echo e($user->gender); ?></span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->
					</div>
				  </div>


 


			  
			 
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\schoolmanagement\resources\views/backend/user/view_profile.blade.php ENDPATH**/ ?>