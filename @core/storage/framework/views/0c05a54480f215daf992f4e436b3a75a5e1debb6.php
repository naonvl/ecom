
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Create Campaign')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.media.css','data' => []]); ?>
<?php $component->withName('media.css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.niceselect.css','data' => []]); ?>
<?php $component->withName('niceselect.css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/flatpickr.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.msg.error','data' => []]); ?>
<?php $component->withName('msg.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.msg.flash','data' => []]); ?>
<?php $component->withName('msg.flash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Create Campaign')); ?></h4>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('campaign-list')): ?>
                        <div class="text-right">
                            <a href="<?php echo e(route('admin.campaigns.all')); ?>" class="btn btn-primary"><?php echo e(__('All Campaigns')); ?></a>
                        </div>
                        <?php endif; ?>
                        <div class="row new_campaign mt-5">
                            <div class="col-sm-3">
                                <div class="nav flex-column nav-pills side_nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-campaign-tab" data-toggle="pill" href="#v-pills-campaign" role="tab" aria-controls="v-pills-campaign" aria-selected="true"><?php echo e(__('Campaign')); ?></a>
                                    <a class="nav-link" id="v-pills-products-tab" data-toggle="pill" href="#v-pills-products" role="tab" aria-controls="v-pills-products" aria-selected="false"><?php echo e(__('Products')); ?></a>
                                </div>
                                <div class="form-group mt-5">
                                    <input type="checkbox" id="set_fixed_percentage"> 
                                    <label for="set_fixed_percentage"><?php echo e(__('Set Fixed Percentage')); ?></label>
                                    <div id="fixe_price_cut_container" style="display: none">
                                        <input type="number" id="fixed_percentage_amount" class="form-control mb-2" placeholder="<?php echo e(__('Price Cut Percentage')); ?>">
                                        <button class="btn btn-sm btn-primary mb-2" id="fixed_price_sync_all"><?php echo e(__('Sync Price')); ?></button>
                                        <p class="text-secondary mb-4"><?php echo e(__('This will change all the campaign price to given a pecentage.')); ?></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="set_fixed_date"> 
                                    <label for="set_fixed_date"><?php echo e(__('Set Fixed Date')); ?></label>
                                    <div id="fixe_date_container" style="display: none">
                                        <input type="text" id="fixed_from_date" class="form-control mb-2 flatpickr" placeholder="<?php echo e(__('From Date')); ?>">
                                        <input type="text" id="fixed_to_date" class="form-control mb-2 flatpickr" placeholder="<?php echo e(__('To Date')); ?>">
                                        <button class="btn btn-sm btn-primary" id="fixed_date_sync_all"><?php echo e(__('Sync Date')); ?></button>
                                        <p class="text-secondary mb-4"><?php echo e(__('This will change all the start and end date to a selected date.')); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('campaign-create')): ?>
                            <div class="col-sm-9">
                                <form action="<?php echo e(route('admin.campaigns.new')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-campaign" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card border-primary mb-3" style="border: 1px solid">
                                                        <div class="card-header bg-transparent border-primary font-weight-bold"><?php echo e(__('Create Info')); ?></div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="campaign_name"><?php echo e(__('Campaign Name')); ?></label>
                                                                <input type="text" class="form-control" id="campaign_name" name="campaign_name" placeholder="Campaign Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="campaign_subtitle"><?php echo e(__('Campaign Subtitle')); ?></label>
                                                                <input type="text" class="form-control" id="campaign_subtitle" name="campaign_subtitle" placeholder="Campaign Subtitle">
                                                            </div>
                                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.media-upload','data' => ['title' => __('Campaign Image'),'name' => 'image','dimentions' => '1920x1080']]); ?>
<?php $component->withName('media-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Campaign Image')),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('image'),'dimentions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('1920x1080')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                            <div class="form-group">
                                                                <label for="campaign_status"><?php echo e(__('Campaign Status')); ?></label>
                                                                <select name="status" id="status" class="form-control">
                                                                    <option value="draft"><?php echo e(__('Draft')); ?></option>
                                                                    <option value="publish"><?php echo e(__('Publish')); ?></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-products" role="tabpanel" aria-labelledby="v-pills-products-tab">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="product_repeater_container">
                                                        <div class="card border-primary mb-3" style="border: 1px solid">
                                                            <div class="card-header bg-transparent border-primary campaign-card-header">
                                                                <span><?php echo e(__('Campaign Product')); ?></span>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group select_product">
                                                                    <label for="product_id"><?php echo e(__('Select Product')); ?></label>
                                                                    <select name="product_id[]" id="product_id" class="form-control nice-select wide repeater_product_id">
                                                                        <option value=""><?php echo e(__('Select Product')); ?></option>
                                                                        <?php $__currentLoopData = $all_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($product->id); ?>" 
                                                                                data-price="<?php echo e($product->price); ?>"
                                                                                data-sale_price="<?php echo e($product->sale_price); ?>"
                                                                                data-stock="<?php echo e(optional($product->inventory)->stock_count ?? 0); ?>"
                                                                            >
                                                                                <?php echo e($product->title); ?>

                                                                            </option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label for="original_price"><?php echo e(__('Original Price')); ?></label>
                                                                            <input type="number" class="form-control original_price" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label for="campaign_price"><?php echo e(__('Price for Campaign')); ?></label>
                                                                            <input type="number" name="campaign_price[]" class="form-control campaign_price" step="0.01">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label for="available_num_of_units"><?php echo e(__('No. of Units Available')); ?></label>
                                                                            <input type="number" class="form-control available_num_of_units" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label for="units_for_sale"><?php echo e(__('No. of Units for Sale')); ?></label>
                                                                            <input type="number" name="units_for_sale[]" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label for="start_date"><?php echo e(__('Start Date')); ?></label>
                                                                            <input type="text" name="start_date[]" id="start_date" class="form-control start_date flatpickr">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label for="end_date"><?php echo e(__('End Date')); ?></label>
                                                                            <input type="text" name="end_date[]" id="end_date" class="form-control start_date flatpickr">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="button" class="btn btn-outline-primary" id="add_product_btn"><?php echo e(__('Add Product')); ?></button>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary"><?php echo e(__('Create Campaign')); ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.media.markup','data' => []]); ?>
<?php $component->withName('media.markup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.media.js','data' => []]); ?>
<?php $component->withName('media.js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <script src="<?php echo e(asset('assets/backend/js/flatpickr.js')); ?>"></script>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.niceselect.js','data' => []]); ?>
<?php $component->withName('niceselect.js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <script>
        (function ($) {
            $(document).ready(function () {
                flatpickr(".flatpickr", {
                    altInput: true,
                    altFormat: "F j, Y",
                    dateFormat: "Y-m-d",
                });

                if ($('.nice-select').length > 0) {
                    $('.nice-select').niceSelect();
                }

                $(document).on('click', '.cross-btn', function () {
                    let container = $(this).closest('.card');
                    container.slideUp('slow');
                    setTimeout(() => {container.remove();}, 1000);
                });

                $(document).on('change', '.repeater_product_id', function () {
                    let stock = $(this).find('option:checked').data('stock');
                    $(this).closest('.card-body').find('.available_num_of_units').val(stock);
                });

                $(document).on('change', '.select_product select', function () {
                    let selected_product_id = $(this).val();
                    let container = $(this).closest('.card');
                    let original_price_field = container.find('.original_price');
                    let campaign_price_field = container.find('.campaign_price');
                    $(this).prev().val(selected_product_id);
                    let data = $(this).find('option:checked').data();
                    let product_price = data['sale_price'];

                    $(this).closest('.card-body').find('.available_num_of_units').val(data['stock']);

                    $(this).closest('.card-body').find('.original_price').val(product_price);

                    if ($('#set_fixed_percentage').is(':checked')) {
                        let percentage = $('#fixed_percentage_amount').val().trim();
                        let price_after_percentage = product_price - (product_price / 100 * percentage);
                        campaign_price_field.val(price_after_percentage);
                    }
                });

                $('#set_fixed_percentage').on('change', function () {
                    if ($(this).is(':checked')) {
                        $('#fixe_price_cut_container').slideDown('500')
                    } else {
                        $('#fixe_price_cut_container').slideUp('500');
                        setTimeout(function () {
                            $('#fixed_percentage_amount').val('');
                        }, 500);
                    }
                });

                $('#set_fixed_date').on('change', function () {
                    if ($(this).is(':checked')) {
                        $('#fixe_date_container').slideDown(500);
                    } else {
                        $('#fixe_date_container').slideUp(500);
                        setTimeout(function () {
                            $('#fixe_date_container input').val('');
                        }, 500);
                    }
                });

                $('#fixed_price_sync_all').on('click', function () {
                    let fixed_percentage = $('#fixed_percentage_amount').val().trim();

                    if (!fixed_percentage.length) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'warning',
                            title: '<?php echo e(__("Set percentage first")); ?>',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }

                    let all_prices = $('.original_price');
                    console.log(all_prices);
                    for (let i = 0; i < all_prices.length; i++) {
                        let price_container = $(all_prices[i]).closest('.col');
                        let final_price_container = price_container.next();
                        let product_price = $(all_prices[i]).val().trim();
                        let price_after_percentage = product_price - (product_price / 100 * fixed_percentage);
                        price_after_percentage = price_after_percentage.toFixed(2);
                        console.log(price_after_percentage);
                        final_price_container.find('.campaign_price').val(price_after_percentage);
                    }
                });

                $('#fixed_date_sync_all').on('click', function () {
                    console.log(111);
                    if ($('#set_fixed_date').is(':checked')) {
                        let from_date = $('#fixed_from_date').val();
                        let to_date = $('#fixed_to_date').val();

                        $('.start_date.flatpickr-input').val(from_date);
                        $('.end_date.flatpickr-input').val(to_date);

                        flatpickr(".flatpickr", {
                            altInput: true,
                            altFormat: "F j, Y",
                            dateFormat: "Y-m-d",
                        });
                    } else {
                        Swal.fire({
                            position: 'top-start',
                            icon: 'warning',
                            title: '<?php echo e(__("Set fixed date first")); ?>',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });

                $('#add_product_btn').on('click', function () {
                    let from_date = undefined;
                    let to_date = undefined;

                    if ($('#set_fixed_date').is(':checked')) {
                        from_date = $('#fixed_from_date').val();
                        to_date = $('#fixed_to_date').val();
                    }

                    $('#product_repeater_container').append(`
                        <div class="card border-primary mb-3" style="border: 1px solid">
                            <div class="card-header bg-transparent border-primary campaign-card-header">
                                <span><?php echo e(__('Campaign Product')); ?></span>
                                <span class="cross-btn"><i class="las la-times-circle"></i></span>
                            </div>
                            <div class="card-body">
                                <div class="form-group select_product">
                                    <label for="product_id"><?php echo e(__('Select Product')); ?></label>
                                    <select name="product_id[]" id="product_id" class="form-control nice-select wide repeater_product_id">
                                        <?php $__currentLoopData = $all_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($product->id); ?>" 
                                                data-price="<?php echo e($product->price); ?>"
                                                data-sale_price="<?php echo e($product->sale_price); ?>"
                                                data-stock="<?php echo e(optional($product->inventory)->stock_count ?? 0); ?>"
                                            >
                                                <?php echo e($product->title); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="original_price"><?php echo e(__('Original Price')); ?></label>
                                            <input type="number" class="form-control original_price" disabled>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="campaign_price"><?php echo e(__('Price for Campaign')); ?></label>
                                            <input type="number" name="campaign_price[]" class="form-control campaign_price" step="0.01">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="available_num_of_units"><?php echo e(__('No. of Units Available')); ?></label>
                                            <input type="number" class="form-control available_num_of_units" disabled>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="units_for_sale"><?php echo e(__('No. of Units for Sale')); ?></label>
                                            <input type="number" name="units_for_sale[]" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="start_date"><?php echo e(__('Start Date')); ?></label>
                                            <input type="text" name="start_date[]" id="start_date" class="form-control start_date flatpickr" ${from_date ? `value="${from_date}"` : ''}>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="end_date"><?php echo e(__('End Date')); ?></label>
                                            <input type="text" name="end_date[]" id="end_date" class="form-control end_date flatpickr" ${to_date ? `value="${to_date}"` : ''}>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);

                    $('#product_repeater_container .nice-select').niceSelect('destroy');
                    $('#product_repeater_container .nice-select').niceSelect();

                    flatpickr(".flatpickr", {
                        altInput: true,
                        altFormat: "F j, Y",
                        dateFormat: "Y-m-d",
                    });
                });
            });
        })(jQuery)
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/zaika/@core/resources/views/backend/campaign/new.blade.php ENDPATH**/ ?>