<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mirar receta</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('products.index')); ?>"> Regresar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <?php echo e($product->nombre); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo:</strong>
                <?php echo e($product->tipo); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ingredientes:</strong>
                <textarea disabled class="form-control" style="height:200px" name="ingredientes" placeholder="ingredientes"><?php echo e($product->ingredientes); ?></textarea>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Preparacion:</strong>
                <textarea disabled class="form-control" style="height:300px" name="preparacion" placeholder="preparacion"><?php echo e($product->preparacion); ?></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagen:</strong>
                <img src="/imagen/<?php echo e($product->imagen); ?>" width="500px">
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Desafio32\blog\resources\views/products/show.blade.php ENDPATH**/ ?>