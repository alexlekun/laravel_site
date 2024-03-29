<?php require APPROOT . '/views/inc/header.php'; ?>
	<a href="<?php echo URLROOT; ?>/pages/index" class="btn btn-light mt-2"><i class="fa fa-backward"></i> Back</a>	
	<div class="card card-body bg-light mt-3">
		<h2>Edit</h2>
		<p>Edit post with this form</p>
		<form action="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id']; ?>" method="post">
      <div class="form-group">
        <label for="title">Title: <sup>*</sup></label>
        <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
        <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
      </div>
      <div class="form-group">
        <label for="body">Body: <sup>*</sup></label>
        <input type="textarea" name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['body']; ?>">
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>
      <input type="submit" value="Edit" class="btn btn-success">
    </form>
	</div>	
	
<?php require APPROOT . '/views/inc/footer.php'; ?>