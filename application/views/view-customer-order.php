<div class="row">
  <div class="col-sm-12">
    <div class="white-box">
      <?php if($this->session->flashdata('success')) { ?>
        <div class="alert alert-success">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
      <?php } ?>
        <h3 class="box-title m-b-0">This customer Owe N<?php echo number_format($owe,2); ?> <button data-toggle="modal" data-target="#paynow" class="btn btn-info">Pay Now</button></h3><hr />
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
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Tracking No.</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Cash Collected</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Cash to Remit</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" >Customer Payment Status</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Shipping Payment Made?</th>
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
                    <td><?php echo $row->tracking_no; ?></td>
                    <td>N<?php echo number_format($row->amount,2); ?></td>
                    <td>N<?php echo number_format($row->remitted,2); ?></td>
                    <td>
                      <?php if($row->pay_status == 'Paid') { ?>
                        <span class="alert alert-success">Paid</span>
                      <?php } else { ?>
                        <a href="<?php echo base_url(); ?>shipping/pay_customer/<?php echo $row->tracking_no; ?>"><div class="btn alert-danger">Pay Now</div>
                        <?php } ?></a>
                    </td>
                    <td>
                      <?php if($row->payment_made == "No") {
                        echo $row->payment_made ." | Customer Owe N". number_format($row->price);
                      } else {
                        echo "Yes";
                      }?>
                    </td>
                    <td>
                      <a  ><div data-toggle="modal" data-target="#<?php echo $row->tracking_no; ?>" class="btn btn-primary">View</div></a>
                      <a href="<?php echo base_url(); ?>shipping/invoice/<?php echo $row->tracking_no; ?>"><div class="btn btn-primary">invoice</div></a> |
                      <a href="<?php echo base_url(); ?>shipping/editshipment/<?php echo $row->tracking_no; ?>"><butdivton class="btn btn-primary">Edit</div></a>
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

<?php if(!empty($view)) { foreach($view as $row) { ?>

<!-- Modal -->
<div id="<?php echo $row->tracking_no; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog" id="printableArea">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Name: <?php echo $row->s_name; ?></h4>
      </div>
      <div class="modal-body">
        <h4>Cash Collected : <?php echo $row->amount; ?></h4>
        <table class="table">
          <tr>
            <th><?php echo $row->pay_method; ?> Charges</th>
            <td><?php echo number_format($row->extra_charges,2); ?></td>
          </tr>
            <tr>
            <th>Shipping Charges</th>
            <td><?php echo number_format($row->price,2); ?></td>
          </tr>
          <tr>
          <th>Sub Total</th>
          <td><?php $sub = $row->price + $row->extra_charges; echo number_format($sub,2); ?> </td>
        </tr>
          <tr>
          <th></th>
          <td><?php echo number_format($row->amount,2); ?> - <?php echo number_format($sub,2); ?> = <b>N<?php echo number_format($row->amount - $sub); ?></b></td>
        </tr>
        <tr>
        <th>Cash To Remit</th>
        <td>N<?php echo number_format($row->remitted); ?></td>
      </tr>
        </table>
        <p>@FAREX</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" onclick="printDiv('printableArea')">Print</button>

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal for Debtors -->
<?php } } ?>

<div id="paynow" class="modal fade" role="dialog">
  <form action="<?php echo base_url();?>shipping/recovershipmoney" method="post">

  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Name: <?php echo $row->s_name; ?></h4>
      </div>
      <div class="modal-body">
        <table id="example23" class="display nowrap dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
          <thead>
              <tr role="row">
                <th class="" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"></th>
                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Tracking No.</th>
                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Shipping Payment Made?</th>
                </tr>
          </thead>
          <tbody>
            <?php if(!empty($view)) { foreach($view as $row) { ?>
            <tr role="row" class="odd">
              <td>
                <input type="checkbox" name="check[]" value="<?php echo $row->tracking_no; ?>" >
              </td>
              <td><?php echo $row->tracking_no; ?></td>

              <td>
                <?php if($row->payment_made == "No") {
                  echo $row->payment_made ." | Customer Owe N". number_format($row->price);
                } else {
                  echo "Yes";
                }?>
              </td>

          </tr>
        <?php } } ?>
        <tr>
          <td></td>
          <td>Date: <?php echo date("d-10-Y H:i:s"); ?></td>
          <td></td>

        </tr>
      </tbody>

    </table>

      </div>
      <div class="modal-footer">
        <input type="hidden" name="cid" value="<?php echo $this->uri->segment(3); ?>">
        <input type="submit" class="btn btn-default pull-left" value="Pay Now" />
      </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
