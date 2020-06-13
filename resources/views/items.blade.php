
@extends('layouts.admin')


@section('content')




    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">





             <!-- right column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Item</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <!-- form start -->
            <form class="form-horizontal">
                <div class="card-body">


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Supplier Name</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                      </select>
                                </div>
                              </div>

                        </div>
                        <div class="col-sm-6 ">
                          <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Item Name</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Item Name">
                                </div>
                              </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Item barcode</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="inputPhone" placeholder="Item barcode">
                                </div>
                              </div>

                        </div>
                        <div class="col-sm-6 ">
                          <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Item Description</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                              </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Main Category</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                      </select>
                                </div>
                              </div>

                        </div>
                        <div class="col-sm-6 ">
                          <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Sub Category</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                      </select>
                                </div>
                              </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Warrenty</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option>No Warrenty</option>
                                        <option>6 Months</option>
                                        <option>1 Year</option>
                                        <option>2 Years</option>
                                        <option>3 years</option>
                                      </select>
                                </div>
                              </div>

                        </div>
                        <div class="col-sm-6 ">
                          <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Re-OrderLevel</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="inputEmail3" placeholder="Re-OrderLevel">
                                </div>
                              </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Buying Price</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="inputPhone" placeholder="Buying Price">
                                </div>
                              </div>

                        </div>
                        <div class="col-sm-6 ">
                          <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Selling Price</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="inputEmail3" placeholder="Selling Price">
                                </div>
                              </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Floor No</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="inputPhone" placeholder="Floor No">
                                </div>
                              </div>

                        </div>
                        <div class="col-sm-6 ">
                          <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Rack No</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="inputEmail3" placeholder="Rack No">
                                </div>
                              </div>

                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Rack Level</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="inputPhone" placeholder="Rack Level">
                                </div>
                              </div>

                        </div>
                        <div class="col-sm-6 ">
                          <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Rack Partition</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="inputEmail3" placeholder="Rack Partition">
                                </div>
                              </div>

                        </div>
                    </div>






                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info btn-lg">Create</button>
                </div>
                <!-- /.card-footer -->
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (right) -->


















                  <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



  @endsection
