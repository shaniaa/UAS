<?php /* C:\xampp\htdocs\QuisWeb2.0_ShaniaAzmi_D11161030\resources\views/carts/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">

    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        
        <?php $total = 0 ?>

        <?php if(session('cart')): ?>
        <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php $total += $product['price'] * $product['quantity'] ?>

        <tr>
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-3 hidden-xs"><img src="<?php echo e(asset('image_files/'.$product['image_url'])); ?>" width="100" height="100" class="img-responsive"/></div>
                    <div class="col-sm-9">
                        <h4 class="nomargin"><?php echo e($product['name']); ?></h4>
                    </div>
                </div>
            </td>
        <td data-th="Price">$<?php echo e($product['price']); ?></td>
        <td data-th="Quantity">
            <input type="number" value="<?php echo e($product['quantity']); ?>" class="form-control quantity" />
        </td>
        <td data-th="Subtotal" class="text-center">$<?php echo e($product['price'] * $product['quantity']); ?></td>
        <td class="action" data-th="">
            <button class="btn btn-info btn-sm mt-2 update-cart" data-id="<?php echo e($id); ?>">Update</button>
            <button class="btn btn-danger btn-sm mt-2 remove-from-cart" data-id="<?php echo e($id); ?>">Remove</button>
        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total <?php echo e($total); ?></strong></td>
        </tr>
        <tr>
            <td>
            <a href="<?php echo e(url('/products')); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i>Lanjutkan Belanja</a>
            <a href="<?php echo e(route('admin.orders.create')); ?>" class="btn btn-danger"><i class="fa fa-angel-left">Lanjut ke Pembayaran</i></a>
            </td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total $<?php echo e($total); ?></strong></td>
        </tr>
        </tfoot>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>