<?php /* C:\xampp\htdocs\laravel\Quis Web2.0_AgusHartanto_d11161002\resources\views/products/show.blade.php */ ?>
<?php $__env->startSection('content'); ?>

  
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="<?php echo e(asset('image_files/'.$product['image_url'])); ?>" class="card-img-top" alt="...">
        </div>

        <div class="col-md-9">
            <h3>
                <?php echo e($product->name); ?>

            </h3>
            <h4>
            <?php echo e($product->price); ?>

            </h4>
            <?php for($i = 1; $i<=5; $i++): ?>
                <?php if($i <= $rating): ?>
                <span class="fa fa-star checked"></span>
                <?php else: ?>
                <span class="fa fa-star"></span>
                <?php endif; ?>
            <?php endfor; ?>
            
            <div class="mt-4">
               <a href="<?php echo e(route('carts.add', ['id' => $product['id']])); ?>" class="btn btn-primary"> Beli</a>
            </div>
            <div class="mt-2">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(route('products.show', ['id' => $product['id']])); ?>" class="social-button" target="_blank">
                Share Facebook
            </a>|

            <a href="https://twitter.com/intent/tweet?text=my share text&amp:url=<?php echo e(route('products.show', ['id' => $product['id']])); ?>" class="social-button" target="_blank">
                Share Twitter
            </a>|

            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo e(route('products.show', ['id' => $product['id']])); ?>&amp;title=my share text&amp;summary=dit is de linkedin summary" class="social-button" target="_blank">
                Share Linkedin
            </a>|

            <a href="https://wa.me/?text=<?php echo e(route('products.show', ['id' => $product['id']])); ?>" class="social-button" target="blank">
                Share Whatsapp
            </a>|
        </div>
            <div class="mt-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#description" role="tab" data-toggle="tab">Deskripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#review" role="tab" data-toggle="tab">Review</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content mt-2">
                    <div class="tab-pane fade in active show" id="description" role="tabpanel">
                        <?php echo $product->description; ?>

                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="review">
                        <form action="<?php echo e(route('products.store', ['id' => $product->id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                <label>Rating</label><br>
                                <!-- rating radio -->
                                <input type="radio" name="rating" value="1">1 <br> 
                                <input type="radio" name="rating" value="2">2 <br>
                                <input type="radio" name="rating" value="3">3 <br>
                                <input type="radio" name="rating" value="4">4 <br>
                                <input type="radio" name="rating" value="5">5 <br>
                                <div class="form-group">
                                <br/>
                                    <label>Komentar</label>
                                    <textarea name="description" class="form-control" rows="3" placeholder="Deskripsi" id="ckview"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <div>
                        <h3>Semua Komentar</h3> <br/>
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-12" style="background-color: #ecf0f1;margin-bottom: 2%">
                                    <div class="container">
                                        <div class="row" style="padding : 2% 0">
                                            <div class="col-md-3 text-md-center">
                                                <img src="https://fortunedotcom.files.wordpress.com/2018/07/gettyimages-961697338.jpg" class="img-circle" width="100px" height="100px" >
                                                <br>
                                                <?php echo e($review->created_at->diffForHumans()); ?>

                                            </div>
                                            <div class="col-md-8" style="text-align: justify; text-justify: inter-word">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <b class="text text-primary"><?php echo e($review->user->name); ?></b>
                                                    </div>
                                                    <div class="col-md-8 text-md-right">
                                                    Rating gived :
                                                    <?php for($i=1 ; $i <=5 ; $i++): ?>
                                                        <?php if($i<=$review->rating): ?>
                                                            <span class="fa fa-star checked"></span>
                                                        <?php endif; ?>
                                                    <?php endfor; ?>
                                                    </div>
                                                </div>
                                                <?php echo $review->description; ?>

                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<script src="<?php echo e(url('plugins/tinymce/jquery.tinymce.min.js')); ?>"></script>
<script src="<?php echo e(url('plugins/tinymce/tinymce.min.js')); ?>"></script>
<script>tinymce.init({ selector: '#ckview' });</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>