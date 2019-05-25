<?php /* C:\xampp\htdocs\laravel\pertemuan11.2\resources\views/admin/products/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container col-md-8">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Product</h2>
            <div>
                <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-primary">Tambah Produk</a>
            </div>
            <br/>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Created at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($product['id']); ?></td>
                                <td><?php echo e($product['name']); ?></td>
                                <td><?php echo e($product['price']); ?></td>
                                <td><?php echo e($product['created_at']); ?></td>
                                <td width=5%>
                                    <a href="<?php echo e(route('admin.products.edit',$product->id)); ?>" class="btn btn-primary">Edit</a>
                                </td>
                                <td width=5%>
                                    <a href="<?php echo e(route('admin.products.show',$product->id)); ?>" class="btn btn-danger">Detail</a>
                                </td>
                                <td>                                                             
                                    <form action="<?php echo e(route('admin.products.destroy',$product->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('Delete'); ?>
                                        <button class="btn btn-primary" onclick="return confirm('Yakin Mau di Hapus ?')" type="submit">Delete</button>
                                    </form>
                                </td>
                            <tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>