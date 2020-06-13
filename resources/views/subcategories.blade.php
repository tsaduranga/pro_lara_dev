
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
                <h3 class="card-title">Add Sub Category</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <!-- form start -->
            <form class="form-horizontal">
                <div class="card-body">



                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Name in Cheque</label>
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
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Sub category Name</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Sub category Name">
                                </div>
                              </div>

                        </div>
                    </div>





                    <div class="row">

                        <div class="col-sm-6 ">

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Descrition</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
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
