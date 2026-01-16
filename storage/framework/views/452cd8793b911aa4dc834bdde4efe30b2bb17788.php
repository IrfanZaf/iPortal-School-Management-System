
<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">

		
<div class="col-12">
<div class="box bb-3 border-warning">
				  <div class="box-header">
	 <h4 class="box-title">Manage <strong>Employee Attendance Report</strong></h4>
				  </div>

				  <div class="box-body">
				
 <form method="GET" action="<?php echo e(route('report.attendance.get')); ?>" target="_blank">
			<?php echo csrf_field(); ?>
			<div class="row">



<div class="col-md-4">

 		 <div class="form-group">
		<h5>Employee Name <span class="text-danger"> </span></h5>
		<div class="controls">
	 <select name="employee_id" id="employee_id" required="" class="form-control">
			<option value="" selected="" disabled="">Select Employee</option>
			 <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <option value="<?php echo e($employee->id); ?>" ><?php echo e($employee->name); ?></option>
		 	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 

 


 <div class="col-md-4">

 		 <div class="form-group">
		<h5>Date<span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="date" name="date" class="form-control" required="" > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 			





 			<div class="col-md-4" style="padding-top: 25px;" >

  <input type="submit" class="btn btn-rounded btn-primary" value="Search">

	  
 			</div> <!-- End Col md 4 --> 		
			</div><!--  end row --> 

 

		</form> 

			       
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>

 

 


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\schoolmanagement\resources\views/backend/report/attend_report/attend_report_view.blade.php ENDPATH**/ ?>