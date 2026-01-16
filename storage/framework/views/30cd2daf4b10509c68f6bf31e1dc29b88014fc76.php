
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
					<h4 class="box-title">Manage <strong>MarkSheet Generate</strong></h4>
				  </div>

				  <div class="box-body">
				
 <form method="GET" action="<?php echo e(route('report.marksheet.get')); ?>" target="_blank">
			<?php echo csrf_field(); ?>
			<div class="row">



<div class="col-md-3">

 		 <div class="form-group">
		<h5>Year <span class="text-danger"> </span></h5>
		<div class="controls">
	 <select name="year_id" id="year_id" required="" class="form-control">
			<option value="" selected="" disabled="">Select Year</option>
			 <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <option value="<?php echo e($year->id); ?>" ><?php echo e($year->name); ?></option>
		 	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 3 --> 



 			
 		<div class="col-md-3">

 		 <div class="form-group">
		<h5>Class <span class="text-danger"> </span></h5>
		<div class="controls">
	 <select name="class_id" id="class_id"  required="" class="form-control">
			<option value="" selected="" disabled="">Select Class</option>
			 <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value="<?php echo e($class->id); ?>"><?php echo e($class->name); ?></option>
		 	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 3 --> 


 		


<div class="col-md-3">

 		 <div class="form-group">
		<h5>Exam Type <span class="text-danger"> </span></h5>
		<div class="controls">
 <select name="exam_type_id" id="exam_type_id"  required="" class="form-control">
			<option value="" selected="" disabled="">Select Class</option>
			 <?php $__currentLoopData = $exam_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value="<?php echo e($exam->id); ?>"><?php echo e($exam->name); ?></option>
		 	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 3 --> 



 <div class="col-md-3">

 		 <div class="form-group">
		<h5>ID No <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="id_no" class="form-control" required="" > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 3 --> 			





 			<div class="col-md-3"  >

  <input type="submit" class="btn btn-rounded btn-primary" value="Search">

	  
 			</div> <!-- End Col md 3 --> 		
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

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\schoolmanagement\resources\views/backend/report/marksheet/marksheet_view.blade.php ENDPATH**/ ?>