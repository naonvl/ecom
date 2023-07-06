<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/line-awesome.min-v1.3.0.css')); ?>">
    <title><?php echo e(__('Product Order Invoice')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/bootstrap.min-v4.6.0.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/common/css/order.css')); ?>">
</head>

<body>
    <?php echo $__env->make("backend.products.order.invoice-partial", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="print-hover-btn" style="display: block;">
        <i class="las la-print"></i>
    </div>
    <script>
        ready(init);

        function ready(fn) {
            if (document.readyState != 'loading') {
                fn();
            } else {
                document.addEventListener('DOMContentLoaded', fn);
            }
        }

        function init() {
            document.addEventListener('click', function() {
                window.print();
            });
        }
    </script>
</body>

</html>
<?php /**PATH /home/bytesed/public_html/laravel/zaika/@core/resources/views/backend/products/order/pdf.blade.php ENDPATH**/ ?>