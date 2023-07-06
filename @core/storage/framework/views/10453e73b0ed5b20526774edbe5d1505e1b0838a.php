<script>
(function ($) {
    "use strict"
    $(document).ready(function () {
        $('.swal-delete').on('click', function () {
            Swal.fire({
                title: "<?php echo e(__('Do you want to delete this item?')); ?>",
                showCancelButton: true,
                confirmButtonText: 'Delete',
                confirmButtonColor: '#dd3333',
                }).then((result) => {
                if (result.isConfirmed) {
                    let route = $(this).data('route');
                    $.post(route, {_token: '<?php echo e(csrf_token()); ?>'}).then(function (data) {
                        if (data) {
                            Swal.fire('Deleted!', '', 'success');
                            setTimeout(function () {
                                location.reload();
                            }, 1000);
                        }
                    });
                }
            });
        });
    });
})(jQuery)
</script>
<?php /**PATH /home/bytesed/public_html/laravel/zaika/@core/resources/views/components/table/btn/swal/js.blade.php ENDPATH**/ ?>