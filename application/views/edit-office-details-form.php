<div class="row">
  <div class="col-md-12">
    <?php if($this->session->flashdata('success')) { ?>
      <div class="alert alert-success">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php } ?>

    <form class="" action="<?php echo base_url();?>settings/editoffice/<?php echo $view['id']; ?>" method="post">
      <div class="form-group">
        <div class="col-md-3">
          <label for="">Enter Office Name</label>
        <input type="text" name="name"  class="form-control" value="<?php echo $view['name']; ?>" required>
      </div>
      <div class="col-md-3">
        <label for="">Enter Office Address</label>
      <input type="text" name="address"  class="form-control" value="<?php echo $view['address']; ?>" required>
    </div>

    <div class="col-md-3">
      <label for="">Enter Office Phone Number</label>
    <input type="number" name="phone"  class="form-control" value="<?php echo $view['phone']; ?>" required>
  </div>

      <div class="col-md-2">
        <input type="submit" name="submit" value="Submit" class="btn btn-info" style="margin-top:25px;">
      </div>
    </form>
  </div>
</div>
  <div style="height:100px;"></div>
  </div>
