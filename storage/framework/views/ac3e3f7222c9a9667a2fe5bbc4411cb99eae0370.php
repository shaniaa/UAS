<?php /* D:\xampp\htdocs\ecomerce\resources\views/post_insert.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Menampilkan Rich Text Editor</h3>
        </div>
        <div class="col-md-12">
            <form >
                <textarea nam="editor" id="ckview"></textarea>
            </form>
        <div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<script src="<?php echo e(url('plugins/tinymce/jquery.tinymce.min.js')); ?>"></script>
<script src="<?php echo e(url('plugins/tinymce/tinymce.min.js')); ?>"></script>"
<script>tinymce.init({selector:'#ckview'});</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>