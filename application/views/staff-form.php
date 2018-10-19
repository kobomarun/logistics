<div class="row">
  <form method="post" action="<?php echo base_url(); ?>settings/staff">
  <div class="col-md-12">
      <div class="white-box">
        <?php if($this->session->flashdata('success')) { ?>
          <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php } ?>


          <h3 class="box-title m-b-0">Staff Registration</h3>
          <p class="text-muted m-b-30 font-13"> Fill the below form </p>
          <div class="row">
              <div class="col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label for="exampleInputuname">Full Name /</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-user"></i></div>
                          <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Select Office</label>
                      <select class="form-control" data-placeholder="Choose a State" tabindex="1" name="office" required>
                        <?php foreach($office as $row){ ?>
                          <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Select position</label>
                      <select class="form-control" data-placeholder="Choose a State" tabindex="1" name="position" required>
                        <option value="4">Front Desk</option>
                        <option value="3">Countroller</option>
                        <option value="2">Accounting</option>
                        <option value="1">Super Admin</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputpwd1">Username</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-email"></i></div>
                          <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputpwd1">Password</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-lock"></i></div>
                          <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputpwd2">Email</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-phone"></i></div>
                          <input type="email" class="form-control" name="email" placeholder="Enter Phone Number">
                      </div>
                      <br /> <hr/>
                  <input type="submit" name="submit"  class="btn btn-success waves-effect waves-light m-r-10" style="width:300px;" value="Add Staff"/>
                  </div>

              </div>
          </div>
      </div>
  </div>

</form>

  <div style="height:100px;"></div>
  <div class="container">
      <div id="" class="col-md-12">
        <table class="table">
          <thead>
              <tr role="">
                <th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">SN</th>
                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Name</th>
                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Username</th>
                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Position</th>
                <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Action</th>
              </tr>
          </thead>

          <tbody>
            <?php if(!empty($staff)) { $count = 1; foreach($staff as $row) { ?>
            <tr role="" class="odd">
              <td class="sorting_1"><?php echo $count++; ?></td>
              <td><?php echo $row->name; ?></td>
              <td><?php echo $row->username; ?></td>
              <td>
                <?php  if($row->position == 1) {
                  echo "Super Admin";
                } else if($row->position == 2){
                  echo "Account";
                } else if($row->position == 3){
                  echo "Controller";
                } else if($row->position == 4){
                  echo "Front Desk";
                }
                 ?>
              </td>
              <td>
                <a href="<?php echo base_url(); ?>settings/editoffice/<?php echo $row->id; ?>"><button class="btn btn-primary">Edit</button></a>
               </td>
          </tr>
        <?php } } ?>
      </tbody>
      </table></div>
  </div>
</div>
