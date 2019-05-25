<?php /* C:\xampp\htdocs\laravel\Quis Web2.0_AgusHartanto_d11161002\resources\views/admin/products/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container col-md-8">
    
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <h2>Product</h2>
            <div>
                <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-primary">Tambah Produk</a>
            </div>
            <br/>
            
        

    <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Create At</th>
                        <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($product['id']); ?></td>
                        <td><?php echo e($product['name']); ?></td>
                        <td><?php echo e($product['price']); ?></td>
                        <td><?php echo e($product['created_at']); ?></td>
                        <td>
                        <a href="<?php echo e(route('admin.products.edit',$product->id)); ?>" class="btn btn-primary">Edit</a>
                        <a href="<?php echo e(route('admin.products.show',$product->id)); ?>" class="btn btn-danger">Detail</a>
                        <form action="<?php echo e(route('admin.products.destroy',$product->id)); ?>" method="post">
                                 <?php echo csrf_field(); ?>
                                <?php echo method_field('Delete'); ?>
                                <button class="btn btn-primary" onclick="return confirm('Yakin Mau di Hapus ?')" type="submit">Delete</button>
                        </form>
                        </td>
                        
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tfoot>
                        <tr>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Create At</th>
                        <th>Aksi</th>
                        </tr>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>    
    </div>
</div>
<br><br>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>