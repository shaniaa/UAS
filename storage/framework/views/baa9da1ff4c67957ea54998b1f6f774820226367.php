<?php /* C:\xampp\htdocs\laravel\pertemuan 9\resources\views/products/show.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">, 
            <img src="<?php echo e(route('products.image', ['imageName' => $product['image_url']])); ?>" class="card-img-top" alt="...">
        </div>

        <div class="col-md-9">
            <h3>
                <?php echo e($product->name); ?>

            </h3>
            <h4>
            <?php echo e($product->price); ?>

            </h4>
            <div class="mt-4">
               <a href="#" class="btn btn-primary"> Beli</a>
            </div>
            <div class="mt-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#description" role="tab" data-toggle="tab">Deskripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="review" role="tab" data-toggle="tab">Review</a>
                    </li>
                </ul>

                <!-- Tab panes-->
                <div class="tab-content nt-2">
                    <div role="tabpanel" class="tab-pane fade in active show" id="description">
                    <?php echo $product->description; ?>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="review">
                        Content untuk review disini
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>