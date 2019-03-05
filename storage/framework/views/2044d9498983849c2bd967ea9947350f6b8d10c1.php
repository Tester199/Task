<?php /* E:\new_xampp\htdocs\task\resources\views/auth/register.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Add User')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right"><?php echo e(__('First Name')); ?></label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control<?php echo e($errors->has('fname') ? ' is-invalid' : ''); ?>" name="fname" value="<?php echo e(old('fname')); ?>" required autofocus>

                                <?php if($errors->has('fname')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('fname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Last Name')); ?></label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control<?php echo e($errors->has('lname') ? ' is-invalid' : ''); ?>" name="lname" value="<?php echo e(old('lname')); ?>" required autofocus>

                                <?php if($errors->has('lname')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('lname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mobile')); ?></label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control" name="mobile" value="<?php echo e(old('mobile')); ?>" required onKeyPress="return isNumberKey(event);">

                                <?php if($errors->has('mobile')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('mobile')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Date of Birth')); ?></label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" data-provide="datepicker" required>

                                <span class="input-group-addon">
<span class="glyphicon glyphicon-calendar"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Location')); ?></label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control"  name="location" required>

                                <?php if($errors->has('location')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('location')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <!-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Submit')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfW5lSBWHopDFPPGGf-1qNqsWC_Jd2lfQ&sensor=false&libraries=places&language=en&v=3.exp"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
<script>
$(document).ready(function (){
$('#location').click(function (){
var autocomplete = new google.maps.places.Autocomplete(this);
});
});
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)&&charCode!=46){
        return false;
    } else {
        return true;
    }
}
</script>

<style type="text/css">
#navbarSupportedContent{
    display: none !important;
}
</style>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>