<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Setting</li>
    <li class="breadcrumb-item active">User Management</li>
  </ol>
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-12">
        <div class="card-header">
          <i class="fa fa-table"></i> User Management</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Fullname</th>
                  <th>Faculty</th>
                  <th>Department</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Username</th>
                  <th>Fullname</th>
                  <th>Faculty</th>
                  <th>Department</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach($get as $data):?>
                  <tr>
                    <td><?php echo isset($data['username'])?$data['username']:'-';?></td>
                    <td><?php echo isset($data['fullname'])?$data['fullname']:'-';?></td>
                    <td><?php echo isset($data['faculty'])?$data['faculty']:'-';?></td>
                    <td><?php echo isset($data['department'])?$data['department']:'-';?></td>
                  </tr>
                <?php endforeach?>              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>