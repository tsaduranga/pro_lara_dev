
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
                <h3 class="card-title">Supplier Payments</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <!-- form start -->
            <form class="form-horizontal">
                <div class="card-body">


  <!--   <div id="option1" class="group">asdf</div>
<div id="option2" class="group">kljh</div>
<div id="option3" class="group">zxcv</div>
<div id="option4" class="group">qwerty</div>
<select id="selectMe">
  <option value="option1">option1</option>
  <option value="option2">option2</option>
  <option value="div1">option3</option>
  <option value="div2">option4</option>
</select>  -->


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Payment Type</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="selectMe">
                                        <option value="cash">Cash</option>
                                        <option value="cheque">Cheque</option>
                                      </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 ">
                        <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Supplier</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option selected="selected" value='-' disabled="">Select Supplier ...</option>
                                        <option value="">supplier 1</option>
                                        <option value="">Supplier 2</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row payment" id="cash">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">price</label>
                                <div class="col-sm-8">
                                <input type="number" class="form-control" id="inputPhone" placeholder="price">
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 ">
                        <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Transaction Date</label>
                                <div class="col-sm-8">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="payment" id="cheque">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Cheque Name</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="inputPhone" placeholder="Cheque Name">
                                </div>
                              </div>

                        </div>
                        <div class="col-sm-6 ">

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Cheque Date</label>
                                <div class="col-sm-8">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Price</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="inputEmail3" placeholder="Price">
                                </div>
                              </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Bank</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option selected="selected" value='-' disabled="">Select Bank ...</option>
                                        <option value="">Bank 1</option>
                                        <option value="">Bank 2</option>
                                    </select>
                                </div>
                              </div>

                        </div>


                    </div>

                    <div class="row">
                        <div class="col-sm-6 ">

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Transaction Date</label>
                                <div class="col-sm-8">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
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








<script>


        $(document).ready(function () {
        $('.payment').hide();
        $('#cash').show();
        $('#selectMe').change(function () {
            $('.payment').hide();
            $('#'+$(this).val()).show();
        })
        });


        //Date range picker
        $('#reservationdate').datetimepicker({
                format: 'L'
            });
</script>









                  <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->





  @endsection
