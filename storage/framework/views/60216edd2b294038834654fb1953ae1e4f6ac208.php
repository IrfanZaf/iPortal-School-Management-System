
<?php $__env->startSection('admin'); ?>


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">School Subject List</h3>
	<a href="<?php echo e(route('school.subject.add')); ?>" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Subject</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Name</th> 
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($key+1); ?></td>
				<td> <?php echo e($subject->name); ?></td>				 
				<td>
<a href="<?php echo e(route('school.subject.edit',$subject->id)); ?>" class="btn btn-info">Edit</a>
<a href="<?php echo e(route('school.subject.delete',$subject->id)); ?>" class="btn btn-danger" id="delete">Delete</a>

				</td>
				 
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							 
						</tbody>
						<tfoot>
							 
						</tfoot>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			       
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\schoolmanagement\resources\views/backend/setup/school_subject/view_school_subject.blade.php ENDPATH**/ ?>