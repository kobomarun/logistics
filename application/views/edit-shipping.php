<div class="row">
  <form method="post" action="<?php echo base_url(); ?>shipping/edited">
  <div class="col-md-6">
      <div class="white-box">
          <h3 class="box-title m-b-0">Sender's Details</h3>
          <p class="text-muted m-b-30 font-13"> Shipping details </p>
          <div class="row">
              <div class="col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label for="exampleInputuname">Sender's Full Name</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-user"></i></div>
                          <input type="text" class="form-control" name="sname" placeholder="Full Name" value="<?php echo $view['s_name']; ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Sender's Address</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-location-arrow"></i></div>
                          <input type="text" class="form-control" name="saddress" value="<?php echo $view['s_address']; ?>" placeholder="Enter Address" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">City</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                          <input type="text" class="form-control" name="scity" placeholder="Enter City" value="<?php echo $view['s_city']; ?>"required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Select State</label>
                      <select class="form-control" data-placeholder="Choose a State" tabindex="1" name="sstate" required>
                        <option value="<?php echo $view['s_state']; ?>"><?php echo $view['s_state']; ?></option>
                          <option value="Category 1">Lagos</option>
                          <option value="Category 2">Category 2</option>
                          <option value="Category 3">Category 5</option>
                          <option value="Category 4">Category 4</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputpwd1">Email</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-email"></i></div>
                          <input type="email" value="<?php echo $view['s_email']; ?>"class="form-control" name="semail" placeholder="Enter email" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputpwd2">Phone Number</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-phone"></i></div>
                          <input type="number" value="<?php echo $view['s_phone']; ?>"class="form-control" name="sphone" placeholder="Enter Phone Number">
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>
  <div class="col-md-6">
      <div class="white-box">
          <h3 class="box-title m-b-0">Reciever's Details</h3>
          <p class="text-muted m-b-30 font-13">  details </p>
          <div class="row">
              <div class="col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label for="exampleInputuname">Reciever's Full Name</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-user"></i></div>
                          <input type="text" class="form-control" name="rname" value="<?php echo $view['r_name']; ?>" placeholder="Full Name" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Reciever's Address</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-location-arrow"></i></div>
                          <input type="text" class="form-control" value="<?php echo $view['r_address']; ?>" name="raddress" placeholder="Enter Address" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">City</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                          <input type="text" class="form-control" value="<?php echo $view['r_city']; ?>" name="rcity" placeholder="Enter City" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Select State</label>
                      <select class="form-control" data-placeholder="Choose a State" tabindex="1" name="rstate">
                        <option value="<?php echo $view['r_state']; ?>"><?php echo $view['r_state']; ?></option>
                          <option value="Category 1">Lagos</option>
                          <option value="Category 2">Category 2</option>
                          <option value="Category 3">Category 5</option>
                          <option value="Category 4">Category 4</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputpwd1">Email</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-email"></i></div>
                          <input type="email" value="<?php echo $view['r_email']; ?>" class="form-control" name="remail" placeholder="Enter email" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputpwd2">Phone Number</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-phone"></i></div>
                          <input type="number" value="<?php echo $view['r_phone']; ?>" class="form-control" name="rphone" placeholder="Enter Phone Number">
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>
  <hr />
<div class="row white-box">
  <div class="col-md-6 ">
    <div class="form-group">
        <label for="exampleInputpwd1">Full Description</label>
        <div class="input-group">
          <textarea name="description" rows="4" cols="60"><?php echo $view['description']; ?></textarea>
        </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputpwd1">Declared Value</label>
        <div class="input-group">
          <textarea name="declare" rows="4" cols="60"><?php echo $view['declare']; ?></textarea>
        </div>
    </div>

  </div>
</div>
  <div class="form-group white-box" align="center">

    <div class="form-group">
        <label for="exampleInputpwd1">Weight</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="ti-money"></i></div>
            <input type="text" value="<?php echo $view['weight']; ?>"class="form-control" name="weight" placeholder="Enter Package Weight" required>
        </div>
    </div>

    <div class="form-group">
        <label for="exampleInputpwd1">Price</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="ti-money"></i></div>
            <input type="number" value="<?php echo $view['price']; ?>"class="form-control" name="price" placeholder="Enter Price" required>
            <input type="hidden" name="id" value="<?php echo $view['tracking_no']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Select Status</label>
        <select class="form-control" data-placeholder="Choose a State" tabindex="1" name="status">
          <option value="<?php echo $view['status']; ?>"><?php echo $view['status']; ?></option>
            <option value="Collection Center">Collection Center</option>
            <option value="Transit">Transit</option>
            <option value="Delivered">Delivered</option>
            <option value="Returned">Returned</option>

        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Type of Shipment</label>
        <select class="form-control" data-placeholder="Choose a State" tabindex="1" name="shipment_type">
          <option value="<?php echo $view['shipment_type']; ?>"><?php echo $view['shipment_type']; ?></option>
            <option value="Parcel">Parcel</option>
            <option value="Service Document">Service Document</option>
            <option value="Others">Others</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputpwd2">Delivery Date</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon-calender"></i></span>
            <input type="text" name="dates" value="<?php echo $view['delivery_date']; ?>"class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
          </div><br /> <hr/>
      <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="width:300px;">Add Shipping</button>
  </div>

</form>
</div>
