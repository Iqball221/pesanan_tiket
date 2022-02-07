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
                            <h1 class="page-header">PEMESANAN TIKET KERETA</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data Penumpang
                                    <a href="{{ route('penumpang.index') }}" class = "btn btn-primary float-righht">Kembali</a>
                                </div>
                               <form action="{{ route('penumpang.store') }}" method = "post">
                                   @csrf  <!-- Melindungi data -->
                                   <div class = "panel-body">
                                   <label>Nama</label>
                                   <input type="text" class="form-control" name="nama">
                                   </div>

                                   <div class = "panel-body">
                                   <label>Jenis Kelamin</label><br>
                                   <input type="radio" name="jk" value = "Perempuan">Perempuan 
                                   <input type="radio" name="jk" value = "Laki-laki">Laki-laki
                                   </div>

                                   <div class = "panel-body">
                                   <label>No Telepon</label>
                                   <input type="text" class="form-control" name="no_hp">
                                   </div>

                                   <div class = "panel-body">
                                   <label>Jenis Tiket</label><br>
                                   <select name="jenis">
                                    <option value="Ekonomi">Ekonomi</option>
                                    <option value="Bisnis">Bisnis</option>
                                    <option value="Eksekutif">Eksekutif</option>
                                   </select>
                                   </div>
                                   
                                   <div class = "panel-body">
                                   <label>Asal Berangkat</label>
                                   <input type="text" class="form-control" name="asal">
                                   </div>
                                   
                                   <div class = "panel-body">
                                   <label>Tujuan Berangkat</label>
                                   <input type="text" class="form-control" name="tujuan">
                                   </div>
                                  
                                   <div class = "panel-body">
                                   <label>Tanggal Berangkat</label>
                                   <input type="date" class="form-control" name="tgl_berangkat">
                                   </div>
                                  
                                   <div class = "panel-body">
                                   <label>Jumlah</label>
                                   <input type="number" class="form-control" name="jumlah">
                                   </div>    
                                   
                                   <div class = "panel-body">
                                   <label>Total</label>
                                   <input type="text" class="form-control" name="total">
                                   </div>  
                                   <div class = "panel-body">
                                       <button type = "reset" class = "btn btn-warning">Reset</button>
                                       <button type = "submit" class = "btn btn-primary">Tambah</button>
                                   </div>
                                            
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                    <!-- /.row -->
                   
                    <!-- /.row -->
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
