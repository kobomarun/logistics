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
        <form action="<?php echo base_url();?>shipping/activatemultiplepayment" method="post">
          <input type="submit" name="" value="Activate Payment"/>
        <div class="table-responsive">
            <div id="example23_wrapper" class="dataTables_wrapper">
              <table id="example23" class="display nowrap dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                <thead>
                    <tr role="row">
                      <th class="" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"></th>
                      <th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Sender's Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Receiver's Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Receiver's Phone</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Tracking No.</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Cash Collected</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" >Payment Status</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Action</th>
                    </tr>
                </thead>

                <tbody>
                  <?php if(!empty($view)) { foreach($view as $row) { ?>
                  <tr role="row" class="odd">
                    <td>
                        <?php if($row->pay_status == 'Paid') { ?>
                      <input type="checkbox"  disabled>
                    <?php } else { ?>
                      <input type="checkbox" name="check[]" value="<?php echo $row->tracking_no; ?>" >
                    <?php } ?>

                    </td>
                    <td class="sorting_1"><?php echo $row->s_name; ?></td>
                    <td><?php echo $row->r_name; ?></td>
                    <td><?php echo $row->r_phone; ?></td>
                    <td><?php echo $row->tracking_no; ?></td>
                    <td>N<?php echo number_format($row->amount,2); ?></td>
                    <td>
                      <?php if($row->pay_status == 'Paid') { ?>
                        <span class="alert alert-success">Paid</span>
                      <?php } else { ?>
                        <a href="<?php echo base_url(); ?>shipping/pay_customer/<?php echo $row->tracking_no; ?>"><button class="btn alert-danger">Pay Now</button>
                        <?php } ?></a>
                    </td>
                    <td>
                      <a href="<?php echo base_url(); ?>shipping/invoice/<?php echo $row->tracking_no; ?>"><button class="btn btn-primary">invoice</button></a> |
                      <a href="<?php echo base_url(); ?>shipping/editshipment/<?php echo $row->tracking_no; ?>"><button class="btn btn-primary">Edit</button></a>
                     </td>
                </tr>
              <?php } } ?>
            </tbody>
          </table>
        </form>
        </div>
        </div>
    </div>
  </div>
</div>
