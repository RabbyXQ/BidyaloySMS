<!-- Page List Table -->
<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th><?php echo get_phrase('title'); ?></th>
        <th><?php echo get_phrase('slug'); ?></th>
        <th><?php echo get_phrase('status'); ?></th>
        <th><?php echo get_phrase('actions'); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php
      $pages = $this->db->get('pages')->result_array();
      foreach ($pages as $page) {
      ?>
      <tr>
        <td><?php echo $page['title']; ?></td>
        <td><?php echo $page['slug']; ?></td>
        <td>
          <?php echo ($page['status'] == 1) ? 'Active' : 'Inactive'; ?>
        </td>
        <td>
          <button class="btn btn-info btn-sm" onclick="rightModal('<?php echo site_url('modal/popup/page/edit/'.$page['id']); ?>', '<?php echo get_phrase('edit_page'); ?>')">
            <i class="mdi mdi-pencil"></i> <?php echo get_phrase('edit'); ?>
          </button>
          <button class="btn btn-danger btn-sm" onclick="deletePage(<?php echo $page['id']; ?>)">
            <i class="mdi mdi-delete"></i> <?php echo get_phrase('delete'); ?>
          </button>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<script>
// Delete Page Action
function deletePage(pageId) {
  if(confirm('<?php echo get_phrase('are_you_sure_to_delete'); ?>')) {
    $.ajax({
      url: '<?php echo site_url('page/delete/'); ?>' + pageId,
      success: function(response) {
        if(response === 'success') {
          toastr.success('<?php echo get_phrase('page_deleted_successfully'); ?>');
          location.reload();
        } else {
          toastr.error('<?php echo get_phrase('page_deletion_failed'); ?>');
        }
      }
    });
  }
}
</script>
