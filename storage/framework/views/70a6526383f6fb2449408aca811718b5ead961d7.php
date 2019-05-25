<?php /* D:\xampp\htdocs\ecomerce\resources\views/admin/products/edit.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Edit Product</h2>
            <br/>
            <?php if(count($errors)): ?>
                <div class="form-group">
                    <div clas="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <br/>

            <form action="<?php echo e(route('admin.products.update',$products->id)); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <?php echo method_field('PATCH'); ?>
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama Produk" value="<?php echo e($products->name); ?>">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="price" class="form-control" placeholder="Harga" value="<?php echo e($products->price); ?>">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea id="ckview" name="description" class="form-control" rows="3" placeholder="Deskripsi"><?php echo e($products->description); ?></textarea>
                </div>
                <div class="form-group">
					<label>Image</label>
					<input type="file" name="image_url" class="form-control" value="<?php echo e($products->image_url); ?>">
				</div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-primary">Back</a>
            </form>        
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<script src="<?php echo e(url('plugins/tinymce/jquery.tinymce.min.js')); ?>"></script>
<script src="<?php echo e(url('plugins/tinymce/tinymce.min.js')); ?>"></script>
<script>tinymce.init({ selector: '#ckview' });</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>