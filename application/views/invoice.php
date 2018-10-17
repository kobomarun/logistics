<div class="row">
  <div class="col-md-12">
    <div class="white-box printableArea" id="DivIdToPrint">
      <div>
        <h3 style="padding:4px"><span style="font-size: 38px; padding:0px; border:1px solid green; float: left;">FAR</span><span style="font-size:38px; padding:1px;background:green; width:100px; float: left;color:#fff;">EX  </span></h3>
        <br /><br /><h5>Fast and Reliable Express Service</h5>
        <address>
          Suite 107,LSDPC Ogba Shopping Arcade<br />
          Ogba, Lagos
        </address>
      </div>
      <div class="text-right">
          <button id="print" onclick='printDiv();' class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
      </div><br />
        <h3><b>INVOICE</b> <span class="pull-right">#<?php echo $view['tracking_no']; ?></span></h3>
        <hr>

        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <address>
                        <h3> &nbsp;<b class="">From</b></h3>
                        <p class="text-muted m-l-5"><?php echo $view['s_name']; ?>,
                            <br> <?php echo $view['s_address']; ?>,
                            <br> <?php echo $view['s_city']; ?>,
                            <br> <?php echo $view['s_state']; ?>
                          <br/><?php echo $view['s_phone']; ?></p>
                    </address>
                    <p><b><?php echo $view['pay_method']; ?></b></p>
                </div>
                <div class="pull-right text-right">
                    <address>
                        <h3>To,</h3>
                        <h4 class="font-bold"><?php echo $view['r_name']; ?></h4>
                        <p class="text-muted m-l-30"><?php echo $view['r_address']; ?>,
                            <br> <?php echo $view['r_city']; ?>,
                            <br><?php echo $view['r_state']; ?>,
                            <br> <?php echo $view['r_phone']; ?></p>
                        <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i> <?php echo $view['collection_date']; ?></p>
                        <p><b>Payment Method:</b> <?php echo $view['pay_method']; ?></p>

                        <!-- <p><b>Due Date :</b> <i class="fa fa-calendar"></i> 25th Jan 2017</p> -->
                    </address>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive m-t-40" style="clear: both;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th width="20%">Description</th>
                                <th class="text-right">Declare Value</th>
                                <th class="text-right">Type of Shipment</th>
                                <th class="text-right">Weight(KG)</th>
                                <th class="text-right">Size Charge</th>
                                <th class="text-right">Shipping Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td width="30%"><?php echo $view['description']; ?></td>
                                <td class="text-right"><?php echo $view['declare']; ?> </td>
                                <td class="text-right"> <?php echo $view['shipment_type']; ?> </td>
                                <td class="text-right"> <?php echo $view['weight']; ?> </td>
                                <td class="text-right"> <?php echo $view['size']; ?> </td>
                                <td class="text-right"> <?php echo $view['price']; ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <div class="pull-right m-t-30 text-right">
                  <h5>Charges</h5>
                  <hr />
                  <p>Size Charges: N<?php echo $view['size']; ?></p>

                  <hr />
                  <p>Sub - Total amount: N<?php echo  $total =  $view['price'] + $view['size']; ?></p>

                    <hr>
                    <h3><b>Total :</b> N<?php echo number_format($total,2); ?></h3>
                </div>
                <div class="clearfix"></div>
                <div class="pull-left m-t-30 text-lef">
                  <p>Prepared by adelabu samson</p>
                </div>

                <hr>
                <!-- <div class="text-right">
                    <button id="print" onclick='printDiv();' class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                </div> -->
            </div>
        </div>
    </div>
  </div>
</div>
<script>
function printDiv() {
  window.print();
}
</script>
