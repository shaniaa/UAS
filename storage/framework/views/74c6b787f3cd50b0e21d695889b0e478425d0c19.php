<?php /* C:\xampp\htdocs\laravel\pertemuan 9\resources\views/admin/products/create.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Tambah Product</h2>
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

            <form action="<?php echo e(route('admin.products.store')); ?>" enctype="multipart/form-data" method="POST">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama Produk">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="price" class="form-control" placeholder="Harga">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Deskripsi"></textarea>
                </div>
                <div class="form-group increment">
					<label>Image</label>
					<input required type="file" name="image_url" class="form-control">
				</div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-primary">Back</a>
            </form>        
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>