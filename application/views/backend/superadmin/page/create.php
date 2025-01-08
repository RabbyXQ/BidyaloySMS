<form method="POST" class="d-block ajaxForm" action="<?php echo route('page/create'); ?>" style="min-width: 300px;">
    <div class="form-group row mb-2">
        <label for="title" class="col-md-3 col-form-label"><?php echo get_phrase('title'); ?></label>
        <div class="col-md-9">
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
    </div>

    <div class="form-group row mb-2">
        <label for="slug" class="col-md-3 col-form-label"><?php echo get_phrase('slug'); ?></label>
        <div class="col-md-9">
            <input type="text" name="slug" id="slug" class="form-control" required>
        </div>
    </div>

    <div class="form-group row mb-2">
        <label for="content" class="col-md-3 col-form-label"><?php echo get_phrase('content'); ?></label>
        <div class="col-md-9">
            <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
        </div>
    </div>

    <div class="form-group col-md-12">
        <button class="btn btn-block btn-primary" type="submit"><?php echo get_phrase('add_page'); ?></button>
    </div>
</form>

<script>
$(document).ready(function () {
    $('select.select2:not(.normal)').each(function () { 
        $(this).select2({ dropdownParent: '#right-modal' }); 
    });

    // Initialize form validation
    $(".ajaxForm").validate({
        rules: {
            title: {
                required: true,
                minlength: 3
            },
            slug: {
                required: true,
                minlength: 3
            },
            content: {
                required: true,
                minlength: 10
            }
        },
        messages: {
            title: {
                required: "<?php echo get_phrase('title_required'); ?>",
                minlength: "<?php echo get_phrase('title_min_length'); ?>"
            },
            slug: {
                required: "<?php echo get_phrase('slug_required'); ?>",
                minlength: "<?php echo get_phrase('slug_min_length'); ?>"
            },
            content: {
                required: "<?php echo get_phrase('content_required'); ?>",
                minlength: "<?php echo get_phrase('content_min_length'); ?>"
            }
        },
        submitHandler: function(form) {
            var $form = $(form);
            ajaxSubmit(form, $form);
        }
    });
});

// AJAX submission
function ajaxSubmit(e, form) {
    e.preventDefault();
    $.ajax({
        url: form.attr('action'),
        type: 'POST',
        data: form.serialize(),
        success: function(response) {
            var res = JSON.parse(response);
            if (res.status) {
                alert(res.notification); // Show success message
                // Redirect to the parent page after successful creation
                window.location.href = "<?php echo site_url('superadmin/page'); ?>"; // Replace with your parent page URL
            } else {
                alert(res.notification); // Show error message
            }
        },
        error: function() {
            alert("<?php echo get_phrase('ajax_error'); ?>"); // Show AJAX error message
        }
    });
}
</script>
