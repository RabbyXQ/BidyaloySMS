<!-- Edit Page Form in Modal -->
<form action="<?php echo site_url('page/update/'.$page['id']); ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title"><?php echo get_phrase('title'); ?></label>
    <input type="text" class="form-control" name="title" id="title" value="<?php echo $page['title']; ?>" required>
  </div>

  <div class="form-group">
    <label for="slug"><?php echo get_phrase('slug'); ?></label>
    <input type="text" class="form-control" name="slug" id="slug" value="<?php echo $page['slug']; ?>" required>
  </div>

  <div class="form-group">
    <label for="content"><?php echo get_phrase('content'); ?></label>
    <textarea class="form-control" name="content" id="content" rows="5" required><?php echo $page['content']; ?></textarea>
  </div>

  <div class="form-group">
    <label for="status"><?php echo get_phrase('status'); ?></label>
    <select class="form-control" name="status" id="status" required>
      <option value="1" <?php echo ($page['status'] == 1) ? 'selected' : ''; ?>><?php echo get_phrase('active'); ?></option>
      <option value="0" <?php echo ($page['status'] == 0) ? 'selected' : ''; ?>><?php echo get_phrase('inactive'); ?></option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary"><?php echo get_phrase('save_changes'); ?></button>
</form>
