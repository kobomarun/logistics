<div class="row">
  <div class="col-md-12">
    <?php if($this->session->flashdata('success')) { ?>
      <div class="alert alert-success">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php } ?>

    <form class="" action="<?php echo base_url();?>settings/paymentmethod" method="post">
      <div class="form-group">
        <div class="col-md-12">
          <label for="">Enter New Payment Method</label>
        </div>
        <div class="col-md-6">
        <input type="search" name="method" value="" class="form-control" required>
      </div>
      <div class="col-md-6">
        <input type="submit" name="submit" value="Submit" class="btn btn-info">
      </div>
    </form>
  </div>
</div>
  <div style="height:100px;"></div>
  <div class="container">
      <div id="" class="col-md-12">
        <table class="table">
          <thead>
              <tr role="">
                <th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">SN</th>
                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Name</th>
                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Action</th>
              </tr>
          </thead>

          <tbody>
            <?php if(!empty($view)) { $count = 1; foreach($view as $row) { ?>
            <tr role="" class="odd">
              <td class="sorting_1"><?php echo $count++; ?></td>
              <td><?php echo $row->name; ?></td>
              <td>
                <a href="<?php echo base_url(); ?>settings/editshippingstatus/<?php echo $row->id; ?>"><button class="btn btn-primary">Edit</button></a>
               </td>
          </tr>
        <?php } } ?>
      </tbody>
      </table></div>
  </div>
  </div>
