<h1>Reset Password</h1>
<div class="container">
<form action="<?php echo e(url('/confirmPass')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <h2>Password</h2>
    <input type="password" name="password" id="password">
    <h2>Confirm Password</h2>
    <input type="password" name="confirmPassword" id="confirmPassword">
    <input type="hidden" name="otp" value="<?php echo e($otp); ?>">
    <input type="submit" value="submit" name="submit">
</form>
</div>
<?php /**PATH C:\xampp\htdocs\Laravel\resources\views/confirm.blade.php ENDPATH**/ ?>