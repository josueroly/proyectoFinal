  <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ app()->getlocale() }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Sistema de Control</title>

  <!-- CSFR Token-->  
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('lib/plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lib/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('lib/plugins/datatables/dataTables.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lib/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <!--SweetAlertAnimate-->
<body>
  <section class="content-header">

      <div class="container-fluid">

      <div class="row" style="justify-content: center;">
        <div class="col-10">
            

          <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <tr><th >Código</th>
                  <td colspan="2" align="center">{{ $detalles->id }}</td><th>C.I.</th><td colspan="2" align="center">{{ $detalles->ci_pac }}</td>
                </tr>
                <tr><th>Nombre</th>
                  <td>{{ $detalles->nom_pac }}</td><td>{{ $detalles->app_pac }}</td><td>{{ $detalles->apm_pac }}</td><th>Sexo:</th> <td>{{ $detalles->sex_pac }}</td>
                </tr>
                <tr><th>Dirección</th>
                  <td colspan="5">{{ $detalles->dir_pac }}</td>
                </tr>
                <tr><th>Tel/Cel</th>
                  <td colspan="2">{{ $detalles->tel_pac }}</td><th>Tel/Cel Referencia</th><td colspan="2">{{ $detalles->telRef_pac }}</td>
                </tr>
                <tr><th>Estado Civil</th>
                  <td>{{ $detalles->estCiv_pac }}</td><th>Profesión</th><td>{{ $detalles->pro_pac }}</td><th>Fecha Nacimiento</th><td>{{ $detalles->fecNac }}</td>
                </tr>

              </table>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    </section>





  
</body>  


</head>



</html>
