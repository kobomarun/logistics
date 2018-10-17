<div class="row">
  <div class="col-sm-12">
    <div class="white-box">
      <?php if($this->session->flashdata('success')) { ?>
        <div class="alert alert-success">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
      <?php } ?>
        <h3 class="box-title m-b-0">Data Export</h3>
        <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF &amp; Print</p>
        <div class="table-responsive">
            <div id="example23_wrapper" class="dataTables_wrapper">
              <table id="example23" class="display nowrap dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Address</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Email</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" >Phone</th>
                      <!-- <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Tracking No.</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Action</th> -->
                    </tr>
                </thead>

                <tbody>
                  <?php if(!empty($view)) { foreach($view as $row) { ?>
                  <tr role="row" class="odd">
                    <td class="sorting_1"><?php echo $row->name; ?></td>
                    <td><?php echo $row->address . " " . $row->city . " " . $row->state; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->phone; ?></td>
                    <!-- <td><?php echo $row->tracking_no; ?></td>-->
                    <td>
                      <a href="<?php echo base_url(); ?>shipping/customerorders/<?php echo $row->id; ?>"><button class="btn btn-primary">View Orders</button></a> |
                      <!-- <a href="<?php echo base_url(); ?>shipping/editshipment/<?php echo $row->tracking_no; ?>"><button class="btn btn-primary">Edit</button></a> -->
                     </td>
                </tr>
              <?php } } ?>
            </tbody>
            </table></div>
        </div>
    </div>
  </div>
</div>
