<div class="row">
  <form method="post" action="<?php echo base_url(); ?>shipping/processshipping">
    <div class="col-md-12">
      <div class="form-group">
          <label for="exampleInputEmail1">Select Customer</label>
          <select class="form-control" onchange="loadCustomer()" tabindex="1" name="customer" id="customer">
            <option value="0"></option>
            <?php foreach($view as $row){ ?>
              <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
            <?php } ?>
          </select>
      </div>
    </div>
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
                          <input type="text" class="form-control" name="sname" id="sname" placeholder="Full Name" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Sender's Address</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-location-arrow"></i></div>
                          <input type="text" class="form-control" name="saddress" id="saddress"placeholder="Enter Address" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">City</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                          <input type="text" class="form-control" id="scity" name="scity" placeholder="Enter City" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Select State</label>
                      <select class="form-control" id="sstate"  data-placeholder="Choose a State" tabindex="1" name="sstate" required>
                        <?php foreach($state as $row){ ?>
                          <option value="<?php echo $row->name; ?>"><?php echo $row->name; ?></option>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputpwd1">Email</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-email"></i></div>
                          <input type="email" class="form-control" id="semail" name="semail" placeholder="Enter email" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputpwd2">Phone Number</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-phone"></i></div>
                          <input type="number" id="sphone" class="form-control" name="sphone" placeholder="Enter Phone Number">
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
                          <input type="text" class="form-control" name="rname" placeholder="Full Name" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Reciever's Address</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-location-arrow"></i></div>
                          <input type="text" class="form-control" name="raddress" placeholder="Enter Address" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">City</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                          <input type="text" class="form-control" name="rcity" placeholder="Enter City" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Select State</label>
                      <select class="form-control" data-placeholder="Choose a State" tabindex="1" name="rstate" required>
                        <?php foreach($state as $row){ ?>
                          <option value="<?php echo $row->name; ?>"><?php echo $row->name; ?></option>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputpwd1">Email</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-email"></i></div>
                          <input type="email" class="form-control" name="remail" placeholder="Enter email" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputpwd2">Phone Number</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-phone"></i></div>
                          <input type="number" class="form-control" name="rphone" placeholder="Enter Phone Number">
                      </div>
                  </div>
                  <div class="form-group" id="amount" style="display:none">
                      <label for="exampleInputpwd2">Amount to fetch from client</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-money"></i></div>
                          <input type="number" value="0" class="form-control" id = "amount" name="amount" placeholder="Enter amount to collect from client">
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
          <textarea name="description" rows="4" cols="60"></textarea>
        </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputpwd1">Declared Value</label>
        <div class="input-group">
          <textarea name="declare" rows="4" cols="60"></textarea>
        </div>
    </div>

  </div>
</div>
  <div class="form-group white-box" align="center">
    <div class="form-group">
        <label for="exampleInputEmail1">Customer Payment Method</label>
        <select class="form-control" data-placeholder="Payment Method" tabindex="1" name="pay_method" required>
          <?php foreach($method as $row) { ?>
            <option value="<?php echo $row->name; ?>"><?php echo $row->name; ?></option>
          <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputpwd1">Weight</label>
          <select class="form-control" data-placeholder="Payment Method" tabindex="1" name="weight" id="weight" onchange="setWeight()"required>
            <option value="">Select Weight</option>
            <?php foreach($pricing as $row) { ?>
              <option value="<?php echo $row->weight; ?>"><?php echo $row->weight; ?></option>
            <?php } ?>
          </select>
    </div>
    <div class="form-group">
        <label for="exampleInputpwd1">Select Location</label>
          <select class="form-control" data-placeholder="Payment Method" tabindex="1" id="location" onchange="getPrice()"required>
            <option value="">Select Location</option>
            <option value="Mainland/VI/Lekki Phase 1">Mainland/VI/Lekki Phase 1</option>
            <option value="Area 1">Area 1</option>
            <option value="Area 2">Area 2</option>
          </select>
    </div>
    <div class="form-group">
        <label for="exampleInputpwd1">Size Charges</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="ti-money"></i></div>
            <input type="text" class="form-control" name="size" id="size" value="" placeholder="Enter Size Charges" required onblur="addSize()">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputpwd1">Price</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="ti-money"></i></div>
            <input type="number" class="form-control" name="price" id ="price" placeholder="Enter Price" required>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputpwd1">Has Shipping Payment Made?</label>
          <select class="form-control" data-placeholder="Payment M" tabindex="1" name="payment_made" required>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Select Status</label>
        <select class="form-control" data-placeholder="Choose a State" tabindex="1" name="status">
          <?php foreach($status as $row) { ?>
            <option value="<?php echo $row->name; ?>"><?php echo $row->name; ?></option>
          <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Type of Shipment</label>
        <select class="form-control" data-placeholder="Choose a State" tabindex="1" name="shipment_type">
          <?php foreach($type as $row) { ?>
            <option value="<?php echo $row->name; ?>"><?php echo $row->name; ?></option>
          <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputpwd2">Delievery Date</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon-calender"></i></span>
            <input type="text" name="dates" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
          </div><br /> <hr/>
      <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="width:300px;">Add Shipping</button>
  </div>

</form>
</div>
<script>
function loadCustomer() {
  var customerid = document.getElementById('customer').value;
var baseurl = "<?php echo base_url(); ?>";
  $.ajax({
          type: "post",
          url: baseurl+"users/loadCustomers",
          data: {
            id: customerid
          },
          success: function(response) {
            var data = JSON.parse(response);
            console.log(data);
            document.getElementById('sname').value = data.name;
            document.getElementById('saddress').value = data.address;
            document.getElementById('sphone').value = data.phone;
            document.getElementById('semail').value = data.email;
            document.getElementById('scity').value = data.city;
            document.getElementById('sstate').value = data.state;
            document.getElementById('amount').style='display:block';
          }

        });
}

function setWeight() {
  var weight = document.getElementById('weight').value;
  localStorage.setItem('weight',weight);
}

function addSize() {
  var price = document.getElementById('price').value;
  var size = document.getElementById('size').value;
  var sum = parseInt(price) + parseInt(size);
  document.getElementById('price').value = sum;

}

function getPrice() {
  var area = document.getElementById('location').value;
  var weight =localStorage.getItem("weight");
  var baseurl = "<?php echo base_url(); ?>";

  $.ajax({
      type: "post",
      url: baseurl+"shipping/getPrice",
      data: {
        weight: weight,
        area: area
      },
      success: function(response) {
        var data = JSON.parse(response);
        console.log(response);
        document.getElementById('price').value = response;
      }

    });
}
</script>
