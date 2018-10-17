<div class="row">
  <div class="col-md-12">
    <?php if($this->session->flashdata('success')) { ?>
      <div class="alert alert-success">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php } ?>

    <form class="" action="<?php echo base_url();?>settings/shippingprices" method="post">
      <div class="form-group">
        <div class="col-md-3">
          <label for="">Enter New weight(KG)</label>
        <input type="search" name="weight" value="" class="form-control" required>
      </div>
      <div class="col-md-3">
        <label for="">Price for Mainland/Lekki/VI</label>
      <input type="number" name="main-price" value="" class="form-control" required>
    </div>
      <!-- <div class="col-md-3">
        <label for="">Select Area</label>
        <select class="form-control" name="area">
          <option value="Mainland/VI/Lekki Phase 1">Mainland / VI /Lekki Phase 1</option>
          <option value="area1">Area 1</option>
          <option value="area2">Area 2</option>
        </select>
    </div> -->
    <div class="col-md-2">
      <label for="">Price Area 1</label>
    <input type="number" name="1-price" value="" class="form-control" required>
  </div>
  <div class="col-md-2">
    <label for="">Price for Area 2</label>
  <input type="number" name="2-price" value="" class="form-control" required>
</div>
      <div class="col-md-2">
        <input type="submit" name="submit" value="Submit" class="btn btn-info" style="margin-top:25px;">
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
                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Weight(KG)</th>
                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Area</th>
                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Price(N)</th>
                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Action</th>
              </tr>
          </thead>

          <tbody>
            <?php if(!empty($view)) { $count = 1; foreach($view as $row) { ?>
            <tr role="" class="odd">
              <td class="sorting_1"><?php echo $count++; ?></td>
              <td><?php echo $row->weight; ?></td>
              <td><?php echo $row->area; ?></td>
              <td>N<?php echo number_format($row->pricing); ?></td>
              <td>
                <a href="<?php echo base_url(); ?>settings/editshippingstatus/<?php echo $row->id; ?>"><button class="btn btn-primary">Edit</button></a>
               </td>
          </tr>
        <?php } } ?>
      </tbody>
      </table></div>
  </div>
  </div>
