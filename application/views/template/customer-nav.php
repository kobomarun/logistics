<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">

            <li> <a href="<?php echo base_url();?>customerdash" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a></li>
            <li><a href="javascript:void(0);" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Shipping<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?php echo base_url(); ?>myshipment/">My Shipments</a></li>
                    <li> <a href="<?php echo base_url(); ?>myshipment/delivered">Delivered Shipments</a></li>
                    <li> <a href="<?php echo base_url(); ?>myshipment/transit">In-Transit Shipments</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-people fa-fw"></i> <span class="hide-menu">Transaction History<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?php echo base_url(); ?>myshipment/invoice">Invoice</a></li>
                    <li> <a href="<?php echo base_url(); ?>myshipment/paid">Paid Shipments</a></li>
                    <li> <a href="<?php echo base_url(); ?>myshipment/pending">Pending Shipments</a></li>
                </ul>
            </li>
            <li> <a href="<?php echo base_url(); ?>myshipment/tracking" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Track Shipment</span></a> </li>
            <
        </ul>
    </div>
</div>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><?php echo strtoupper($pageName); ?></h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">FAREX</a></li>
                    <li class="active"> <?php echo $pageName; ?></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>

<!-- Left navbar-header end -->
