<?php /* C:\xampp\htdocs\uts\ecomerce\resources\views/admin/products/show.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Hasil Product</h2>
            <br/>
            <div class="table-responsive">
                <table class="table table-hover table-sm">
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Price</td>
                        <td>Description</td>
                        <td>Image</td>
                        <td>Created_At</td>
                    </tr>
                    <tr>
                        <td><?php echo e($products['id']); ?></td>
                        <td><?php echo e($products['name']); ?></td>
                        <td><?php echo e($products['price']); ?></td>
                        <td><?php echo e(strip_tags($products['description'])); ?></td>
                        <td> 
                        <!-- <?php echo e($products['image_url']); ?> -->
                        <img src="<?php echo e(url('image_files/'.$products->image_url)); ?>" class="img-thumbnail" width="300">
                        </td>
                        <td><?php echo e($products['created_at']); ?></td>
                    </tr>
            </div>
                <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-primary">Kembali</a>       
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>