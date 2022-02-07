<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="penumpang" content="">

        <title>Penumpang</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{asset('backend/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{asset('backend/css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('backend/css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{asset('backend/css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('backend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

             <!-- Navbar -->
             @include('layouts.backend.navbar')
            <!-- /Navbar -->

            <!-- Sidebar -->
            @include('layouts.backend.sidebar')
            <!-- /Sidebar -->


            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Penumpang</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    {{-- TABLE --}}
                <div class = "row">
                    <div class ="col-lg-12">
                        <div class = "panel panel-default">
                            <div class="panel-heading">
                                Tampil Data Penumpang
                                <a href="{{ route('penumpang.index') }}" class = "btn btn-primary float-righht">Kembali</a>
                            </div>
                            <form Action="" method="post">
                            @csrf
                            @method('put')
                        <div class="panel-body">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$penumpang->nama}}" disabled>
                             </div>
                             <div class="panel-body">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jk" value="{{$penumpang->jk}}" disabled>
                             </div>
                            <div class="panel-body">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="no_hp" value="{{$penumpang->no_hp}}" disabled>
                             </div>
                             <div class="panel-body">
                            <label>Jenis Tiket</label>
                            <input type="text" class="form-control" name="jenis" value="{{$penumpang->jenis}}" disabled>
                             </div>
                             <div class="panel-body">
                            <label>Asal Berangkat</label>
                            <input type="text" class="form-control" name="asal" value="{{$penumpang->asal}}" disabled>
                             </div>
                             <div class="panel-body">
                            <label>Tujuan Berangkat</label>
                            <input type="text" class="form-control" name="tujuan" value="{{$penumpang->tujuan}}" disabled>
                             </div>
                             <div class="panel-body">
                            <label>Tanggal Berangkat</label>
                            <input type="text" class="form-control" name="tgl_berangkat" value="{{$penumpang->tgl_berangkat}}" disabled>
                             </div>
                             <div class="panel-body">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" value="{{$penumpang->jumlah}}" disabled>
                             </div>
                             <div class="panel-body">
                            <label>Total Bayar</label>
                            <input type="text" class="form-control" name="total" value="{{$penumpang->total}}" disabled>
                             </div>
                    </form>
                        </div>
                         <!-- / .panel -->
                    </div>
                    <!-- /.col-lg-12-->
                </div>
                    {{-- /TABLE--}}


                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{asset('backend/js/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('backend/js/metisMenu.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{asset('backend/js/raphael.min.js')}}"></script>
        <script src="{{asset('backend/js/morris.min.js')}}"></script>
        <script src="{{asset('backend/js/morris-data.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{asset('backend/js/startmin.js')}}"></script>

    </body>
</html>
