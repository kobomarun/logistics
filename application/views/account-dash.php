        <!--row -->
        <div class="row">
            <div class="col-md-6 col-sm-6">
              <a href="<?php echo base_url(); ?>myshipment/pending">
                <div class="white-box">
                    <div class="r-icon-stats">
                        <i class="ti-money bg-danger"></i>
                        <div class="bodystate">
                            <h4>N<?php echo number_format($monthly_total,2); ?></h4>
                            <span class="text-muted">Income for <?php echo date("F") .", " . date("Y"); ?></span>
                        </div>
                    </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-sm-6">
              <a href="<?php echo base_url(); ?>myshipment/transit">
                <div class="white-box">
                    <div class="r-icon-stats">
                        <i class="ti-money bg-info"></i>
                        <div class="bodystate">
                            <h4>N<?php echo number_format($total,2); ?></h4>
                            <span class="text-muted">Total Income</span>
                        </div>
                    </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-sm-6">
              <a href="<?php echo base_url(); ?>myshipment/transit">
                <div class="white-box">
                    <div class="r-icon-stats">
                        <i class="ti-money bg-info"></i>
                        <div class="bodystate">
                            <h4><?php echo $customer_payment; ?></h4>
                            <span class="text-muted">Customer Pending Payment</span>
                        </div>
                    </div>
                </div>
              </a>
            </div>
        </div>
        <!--/row -->

    </div>
