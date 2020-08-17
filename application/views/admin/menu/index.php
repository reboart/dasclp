

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
          

          <div class="row">
          	<div class="col-lg-9">
          		
          		<a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#newmenumodal">Add New Menu</a>
					<?= form_error('usermenu','<div class="alert alert-danger" role="alert">','</div>'); ?>
					<?= $this->session->flashdata('massage');?>
          		<table class="table table-hover">
          			<thead>
	          			<tr>
	          				<th scope="row">No</th>
	          				<th scope="row">Menu</th>
	          				<th scope="row">Url</th>
	          				<th scope="row">Icon</th>
	          				<th scope="row">Status</th>
	          				<th scope="row">Action</th>
	          			</tr>
	          		</thead>
	          		<tbody>
	          			<?php $i = 1;?>
	          			<?php foreach ($usermenu as $um):?>
	          				
		      			<tr>
		      				<th scope="row"><?=$i?></th>
		      				<td><?= $um['title'];?></td>
		      				<td><?= $um['url'];?></td>
		      				<td><?= $um['icon'];?></td>
		      				<td><?= $um['in_active'];?></td>
		      				<td>
		      					<a href="<?= $um['id'];?>" class="badge badge-success" data-toggle="modal" data-target="#editmenumodal">Edit</a>
		      					<a href="<?= base_url('admin');?>/deletemenu/<?= $um['id'];?>" class="badge badge-danger" onclick="return confirm('yakin');">Del</a>
		      				</td>
		      			</tr>
		      			<?php $i++;?>
		      		<?php endforeach;?>
		      		</tbody>
          		</table>
          		
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
		        <h5 class="modal-title" id="newmenumodalLabel">Add New Menu</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('admin/menu/index');?>" method="post">

			      <div class="modal-body">
			       	<div class="form-group">
					    <input type="text" class="form-control" id="usermenu" name="usermenu" placeholder="Menu Name">
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="url" name="url" placeholder="Page Url">
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon">
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="condition" name="in_active" placeholder="condisi">
					</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save</button>
			      </div>
			  </form>
		    </div>
		  </div>
		</div>


<!-- modal edit -->

<div class="modal fade" id="editmenumodal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="editmenumodalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="editmenumodalLabel">Edit Menu</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('admin/editmenu');?>" method="post">
			      <div class="modal-body">
			       	<div class="form-group">
					    <input type="text" class="form-control" id="usermenu" name="usermenu" placeholder="Menu Name" value="<?= $um['title'];?>">
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="url" name="url" placeholder="Page Url" value="<?= $um['url'];?>">
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon" value="<?= $um['icon'];?>">
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="condition" name="in_active" placeholder="condisi" value="<?= $um['in_active'];?>">
					</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save</button>
			      </div>
			  </form>
			
		    </div>
		  </div>
		</div>
		





