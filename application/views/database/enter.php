<!-- Begin Page Content -->
<div class="container-fluid">
    <form>
      <div class="container">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="fullname">
        </div>

        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Address">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Jalan...">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
            <div class="form-group col-md-4">
              <label for="disabledSelect">State</label>
              <select id="disabledSelect" disable class="form-control">
                <option selected>Indonesia</option>
              </select>
            </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group">
          <label>Prov</label>
          <input type="text" class="form-control" id="provinsi">
        </div>
      <button type="submit" class="btn btn-success">Input</button>
    </form>
  </div>
</div>