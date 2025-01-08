<!-- Page Title Section -->
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-body py-2">
        <h4 class="page-title d-inline-block">
          <i class="mdi mdi-file-document title_icon"></i> <?php echo get_phrase('pages'); ?>
        </h4>
        <button type="button" class="btn btn-outline-primary btn-rounded alignToTitle float-end mt-1" onclick="rightModal('<?php echo site_url('modal/popup/page/create'); ?>', '<?php echo get_phrase('create_page'); ?>')">
          <i class="mdi mdi-plus"></i> <?php echo get_phrase('add_page'); ?>
        </button>
      </div> <!-- end card body -->
    </div> <!-- end card -->
  </div><!-- end col -->
</div>

<!-- Page List Section -->
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <?php include 'list.php'; ?>
      </div>
    </div>
  </div>
</div>
