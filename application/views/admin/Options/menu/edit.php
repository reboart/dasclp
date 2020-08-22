
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                
                <!-- Row -->
                <div class="row">
                    <div class="col-md-7">

                        <form action="<?= base_url('admin/update');?>" method="post">

                  <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" value="<?php echo $menu_edit->id ?>" name="id">
                        <input type="text" class="form-control" id="menuid" name="menuid" value="<?php echo $menu_edit->menu_id ?>"placeholder="MenuID">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="usermenu" name="usermenu" value="<?php echo $menu_edit->title ?>"placeholder="Menu Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" value="<?php echo $menu_edit->url ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" value="<?php echo $menu_edit->icon ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="condition" name="in_active" value="<?php echo $menu_edit->in_active ?>">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-success">Update</button>
                  </div>
              </form>
                    </div>
                </div>
                <!-- Row -->
                
                <!-- ============================================================== -->
            </div>
 