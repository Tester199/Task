<?php /* E:\new_xampp\htdocs\task\resources\views/index.blade.php */ ?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Users Data</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" />
</head>
<body>
   <div class="container">
      <div style="float:right;">
      <a href="http://localhost/task/public/register"><button class="btn btn-success">Add User</button></a>
   </div>
      <?php if(Session::has('message')): ?>
      <p class="alert <?php echo e(Session::get('alert-class','alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
      <?php endif; ?>
      <table class="table table-striped">
         <thead>
         <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Age</th>
            <th>Date of Birth</th>
            <th>Location</th>
            <th>Action</th>
         </tr>
         </thead>
         <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <td><?php echo e($user->id); ?></td>
               <td><?php echo e($user->fname); ?></td>
               <td><?php echo e($user->lname); ?></td>
               <td><?php echo e($user->email); ?></td>
               <td><?php echo e($user->mobile); ?></td>
               <td><?php echo e($user->age); ?></td>
               <td><?php echo e($user->dob); ?></td>
               <td><?php echo e($user->location); ?></td>
               
               <td><a href="http://localhost/task/public/register?id=<?php echo e($user->id); ?>">Edit</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
      </table>
      <?php echo e($users->links()); ?>

   </div>
</body>
</html>