
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card border-0">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs profile-tab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#about" role="tab">About</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#visimisi" role="tab">Visi & Misi</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#events" role="tab">Events</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#katamereka" role="tab">Kata Mereka</a> </li>

        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="about" role="tabpanel">
                <div class="card-block">
                    <div class="profiletimeline">
                        <div class="sl-item">

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="visimisi" role="tabpanel">
                <div class="card-block">
                    <div class="profiletimeline">
                        <div class="sl-item">
                            <table class="table table-hover">
                            <thead>
                            <tr>                            
                            <th scope="row">Icon</th>
                            <th scope="row">Menu</th>
                            <th scope="row">Condition</th>
                            <th scope="row">
                                <a href="" class="btn btn-sm btn-success">Edit</a>
                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('yakin');">Del</a>
                            </th>
                            </tr>
                            </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--second tab-->
            <div class="tab-pane" id="events" role="tabpanel">
                <div class="card-block">
                    <div class="box box-warning">
			      
			            <!-- /.box-header -->
			            <div class="box-body p-2">
			              <form role="form">
			              	<div class="form-group">
			                  <input type="file" id="fileupload">
			                </div>
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Title</label>
			                  <input type="text" class="form-control" placeholder="Enter Title ...">
			                </div>
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Time</label>
			                  <input type="text" class="form-control" placeholder="Enter Time...">
			                </div>
			               
			                <!-- textarea -->
			                <div class="form-group">
			                  <label>Textarea</label>
			                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
			                </div>
			                <div class="col-sm-12">
                                <button class="btn btn-success">Post</button>
                            </div>
			                
			              </form>
			            </div>
			            <!-- /.box-body -->

			            <div class="sl-item">
                            <table class="table table-hover">
                            <thead>
                            <tr>                            
                            <th scope="row">IMG</th>
                            <th scope="row">Title</th>
                            <th scope="row">Time</th>
                            <th scope="row">Description</th>
                            <th scope="row">
                                <a href="" class="btn btn-sm btn-success">Edit</a>
                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('yakin');">Del</a>
                            </th>
                            </tr>
                            </thead>
                            </table>
                        </div>
			          </div>
                </div>
            </div>
            <div class="tab-pane" id="katamereka" role="tabpanel">
                <div class="card-block">
                    <!-- /.box-header -->
			            <div class="box-body p-2">
			              <form role="form">
			              	<div class="form-group">
			                  <input type="file" id="fileupload">
			                </div>
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Name</label>
			                  <input type="text" class="form-control" placeholder="Enter Name ...">
			                </div>
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Status</label>
			                  <input type="text" class="form-control" placeholder="Enter Status...">
			                </div>
			               
			                <!-- textarea -->
			                <div class="form-group">
			                  <label>Kata Mereka</label>
			                  <textarea class="form-control" rows="3" placeholder="Kata Mereka ..."></textarea>
			                </div>
			                <div class="col-sm-12">
                                <button class="btn btn-success">Post</button>
                            </div>
			                
			              </form>
			            </div>
			            <!-- /.box-body -->
			            <div class="sl-item">
                            <table class="table table-hover">
                            <thead>
                            <tr>                            
                            <th scope="row">Foto</th>
                            <th scope="row">Name</th>
                            <th scope="row">Status</th>
                            <th scope="row">Kata Mereka</th>
                            <th scope="row">
                                <a href="" class="btn btn-sm btn-success">Edit</a>
                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('yakin');">Del</a>
                            </th>
                            </tr>
                            </thead>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
