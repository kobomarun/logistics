<div class="row">
  <div class="col-sm-12">
    <div class="white-box">
      <?php if($this->session->flashdata('success')) { ?>
        <div class="alert alert-success">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
      <?php } ?>
        <div class="table-responsive">
            <div id="example23_wrapper" class="dataTables_wrapper">
              <table id="example23" class="display nowrap dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Tracking Number</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Date and Time</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Status</th>
                    </tr>
                </thead>

                <tbody>
                  <?php if(!empty($track)) { foreach($track as $row) { ?>
                  <tr role="row" class="odd">
                    <td class="sorting_1"><?php echo $row->tracking_no; ?></td>
                    <td><?php echo $row->date; ?></td>
                    <td><?php echo $row->status; ?></td>
                    <
                </tr>
              <?php } } ?>
            </tbody>
            </table></div>
        </div>
    </div>
  </div>
</div>
