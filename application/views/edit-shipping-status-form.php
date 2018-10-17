<div class="row">
  <div class="col-md-12">
    <?php if($this->session->flashdata('success')) { ?>
      <div class="alert alert-success">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php } ?>

    <form class="" action="" method="post">
      <div class="form-group">
        <div class="col-md-12">
          <label for="">Edit Shipping Status</label>
        </div>
        <div class="col-md-6">
        <input type="search" name="status" value="<?php echo $edit['name']; ?>" class="form-control">
      </div>
      <div class="col-md-6">
        <input type="submit" name="submit" value="Update" class="btn btn-info">
      </div>
    </form>
  </div>
</div>
  <div style="height:100px;"></div>
  </div>
