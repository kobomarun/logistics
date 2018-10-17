<div class="row">
  <form method="post" action="<?php echo base_url(); ?>users/customerprocess">
  <div class="col-md-12">
      <div class="white-box">
        <?php if($this->session->flashdata('error')) { ?>
          <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php } ?>

          <h3 class="box-title m-b-0">Customer's Registration</h3>
          <p class="text-muted m-b-30 font-13"> Fill the below form </p>
          <div class="row">
              <div class="col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label for="exampleInputuname">Full Name / Company Name</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-user"></i></div>
                          <input type="text" class="form-control" name="sname" placeholder="Full Name / Company Name" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Address</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-location-arrow"></i></div>
                          <input type="text" class="form-control" name="saddress" placeholder="Enter Address" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">City</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                          <input type="text" class="form-control" name="scity" placeholder="Enter City" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Select State</label>
                      <select class="form-control" data-placeholder="Choose a State" tabindex="1" name="sstate" required>
                        <?php foreach($state as $row){ ?>
                          <option value="<?php echo $row->name; ?>"><?php echo $row->name; ?></option>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputpwd1">Email</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-email"></i></div>
                          <input type="email" class="form-control" name="semail" placeholder="Enter email" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputpwd1">Password</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-lock"></i></div>
                          <input type="password" class="form-control" name="pwd" placeholder="Enter email" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputpwd2">Phone Number</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-phone"></i></div>
                          <input type="number" class="form-control" name="sphone" placeholder="Enter Phone Number">
                      </div>
                      <br /> <hr/>
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="width:300px;">Add Shipping</button>
                  </div>

              </div>
          </div>
      </div>
  </div>

</form>
</div>
