<?php $site_google_captcha_v3_site_key = get_static_option('site_google_captcha_v3_site_key'); ?>
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(get_static_option('site_google_captcha_v3_site_key')); ?>"></script>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute("<?php echo e(get_static_option('site_google_captcha_v3_site_key')); ?>", {action: 'homepage'}).then(function (token) {
            let gcaptcha_token = document.getElementById('gcaptcha_token');
            if (gcaptcha_token) {
                gcaptcha_token.value = token;
            }
        });
    });
</script><?php /**PATH /home/bytesed/public_html/laravel/zaika/@core/resources/views/frontend/partials/google-captcha.blade.php ENDPATH**/ ?>