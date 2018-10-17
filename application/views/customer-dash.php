        <!--row -->
        <div class="row">
            <div class="col-md-3 col-sm-6">
              <a href="<?php echo base_url(); ?>myshipment/pending">
                <div class="white-box">
                    <div class="r-icon-stats">
                        <i class="ti-user bg-danger"></i>
                        <div class="bodystate">
                            <h4><?php echo $paid; ?></h4>
                            <span class="text-muted">Pending Payment</span>
                        </div>
                    </div>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6">
              <a href="<?php echo base_url(); ?>myshipment/transit">
                <div class="white-box">
                    <div class="r-icon-stats">
                        <i class="ti-shopping-cart bg-info"></i>
                        <div class="bodystate">
                            <h4><?php echo $transit; ?></h4>
                            <span class="text-muted">Shipment - In Transit</span>
                        </div>
                    </div>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6">
              <a href="<?php echo base_url(); ?>myshipment/delivered">
                <div class="white-box">
                    <div class="r-icon-stats">
                        <i class="ti-wallet bg-success"></i>
                        <div class="bodystate">
                            <h4><?php echo $delivered; ?></h4>
                            <span class="text-muted">Shipment - Delivered</span>
                        </div>
                    </div>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="white-box">
                    <div class="r-icon-stats">
                        <i class="ti-star bg-inverse"></i>
                        <div class="bodystate">
                            <h4>56%</h4>
                            <span class="text-muted">New Leads</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/row -->

    </div>
