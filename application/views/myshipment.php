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
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Receiver's Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Receiver's Phone</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Status</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Tracking No.</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Cash Collected</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" >Payment</th>
                    </tr>
                </thead>

                <tbody>
                  <?php if(!empty($view)) { $sum = 0; foreach($view as $row) { $sum += $row->amount; ?>
                  <tr role="row" class="odd">
                    <td><?php echo $row->r_name; ?></td>
                    <td><?php echo $row->r_phone; ?></td>
                    <td class="sorting_1"><?php echo $row->status; ?></td>
                    <td><?php echo $row->tracking_no; ?></td>
                    <td>N<?php echo number_format($row->amount,2); ?></td>
                    <td>
                      <?php if($row->pay_status == 'Not Paid') { ?>
                        <span class="alert alert-danger"><?php echo $row->pay_status; ?></span>
                      <?php } else { ?>
                        <span class="alert alert-success"><?php echo $row->pay_status; ?></span>
                      <?php } ?>
                    </td>

                </tr>
              <?php } } ?>

            </tbody>
            </table></div>
        </div>
    </div>
  </div>
</div>
