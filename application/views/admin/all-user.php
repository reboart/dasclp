  <!-- Begin Page Content -->
        <div class="container-fluid">

          		
          		<a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#newmenumodal">Add New User</a>
					<?= form_error('user','<div class="alert alert-danger" role="alert">','</div>'); ?>
					<?= $this->session->flashdata('massage');?>
  <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">All User</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  	<thead>
	          			<tr>
	          				<th scope="row">No</th>
	          				<th scope="row">Name</th>
	          				<th scope="row">Email</th>
	          				<th scope="row">Image</th>
	          				<th scope="row">Role Id</th>
	          				<th scope="row">Status</th>
	          				<th scope="row">Date</th>
	          				<th scope="row">Action</th>
	          			</tr>
	          		</thead>
                  
                  <tbody>
	          			<?php $i = 1;?>
	          			<?php foreach ($alluser as $au):?>
	          				
		      			<tr>
		      				<th scope="row"><?=$i?></th>
		      				<td><?= $au['name'];?></td>
		      				<td><?= $au['email'];?></td>
		      				<td><?= $au['image'];?></td>
		      				<td><?= $au['role_id'];?></td>
		      				<td><?= $au['is_active'];?></td>
		      				<td><?= $au['date_created'];?></td>
		      				
		      				<td>
		      					<a href="<?= base_url();?>edit/<?= $au['id'];?>" class="badge badge-success" data-toggle="modal" data-target="#editmenumodal">Edit</a>
		      					<a href="<?= base_url('admin');?>/delete/<?= $au['id'];?>" class="badge badge-danger" onclick="return confirm('yakin');">Del</a>
		      				</td>
		      			</tr>
		      			<?php $i++;?>
		      		<?php endforeach;?>
		      		</tbody>
                </table>
              </div>
            </div>
          </div>

          	

    	 </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->





		<!-- Modal -->
		<div class="modal fade" id="newmenumodal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="newmenumodalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="newmenumodalLabel">Add New User</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form class="user p-4" method="post" action="<?= base_url('admin/add_user');  ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="fullname" name="name" placeholder="Full Name" value="<?= set_value('name');?>">
                  <?= form_error('name','<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email"placeholder="Email Address" value="<?= set_value('email');?>">
                  <?= form_error('email','<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1','<small class="text-danger pl-3">','</small>');?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2"name="password2" placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-success btn-user btn-block">Register Account
                </button>
              </form>
              <hr>
		    </div>
		  </div>
		</div>