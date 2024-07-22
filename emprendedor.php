<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Emprendedor</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <style>
    /* CSS para centrar el modal */
    .modal-dialog-centered {
      display: flex;
      align-items: center;
      min-height: calc(100% - 1rem);
    }

    .modal-content {
      margin: auto;
    }
  </style>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
        <?php include("menulateral.php");  ?>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Emprendedor</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Emprendedor</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
  <!-- Botón para abrir el modal de agregar -->
  <button class="btn btn-primary" data-toggle="modal" data-target="#registerModal">Agregar</button>

  <!-- Modal de agregar -->
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Registro de Emprendedores</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="register-form">
            <label for="business-name">Nombre del Negocio:</label>
            <input type="text" id="business-name" name="business-name" class="form-control"><br>
            <label for="phone-number">Número de Teléfono:</label>
            <input type="text" id="phone-number" name="phone-number" class="form-control"><br>
            <label for="description">Descripción:</label>
            <input type="text" id="description" name="description" class="form-control"><br>
            <label for="location">Ubicación:</label>
            <input type="text" id="location" name="location" class="form-control"><br>
            <button type="button" class="btn btn-primary" id="register-btn">Registrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal de editar -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Editar Emprendedor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="edit-form">
            <label for="edit-business-name">Nombre del Negocio:</label>
            <input type="text" id="edit-business-name" name="business-name" class="form-control"><br>
            <label for="edit-phone-number">Número de Teléfono:</label>
            <input type="text" id="edit-phone-number" name="phone-number" class="form-control"><br>
            <label for="edit-description">Descripción:</label>
            <input type="text" id="edit-description" name="description" class="form-control"><br>
            <label for="edit-location">Ubicación:</label>
            <input type="text" id="edit-location" name="location" class="form-control"><br>
            <button type="button" class="btn btn-primary" id="save-edit-btn">Guardar Cambios</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal de confirmación de eliminación -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Confirmar Eliminación</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de que deseas eliminar este registro?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger" id="confirm-delete-btn">Eliminar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <table id="entrepreneursTable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Nombre del Negocio</th>
          <th>Número de Teléfono</th>
          <th>Descripción</th>
          <th>Ubicación</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody id="table-body">
        <!-- Aquí se mostrarán los registros -->
      </tbody>
    </table>
  </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Ekko Lightbox -->
  <script src="plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- Filterizr-->
  <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function () {
      // Inicializar la tabla con DataTables
      var table = $('#entrepreneursTable').DataTable();
      var rowToDelete; // Para almacenar la fila a eliminar

      function addRowEvents(row) {
        $(row).find('.edit-btn').on('click', function () {
          var row = table.row($(this).parents('tr'));
          var data = row.data();
          $('#edit-business-name').val(data[0]);
          $('#edit-phone-number').val(data[1]);
          $('#edit-description').val(data[2]);
          $('#edit-location').val(data[3]);
          $('#save-edit-btn').data('row', row);
          $('#editModal').modal('show');
        });

        $(row).find('.delete-btn').on('click', function () {
          rowToDelete = table.row($(this).parents('tr'));
          $('#deleteModal').modal('show');
        });
      }

      $('#register-btn').click(function () {
        var businessName = $('#business-name').val();
        var phoneNumber = $('#phone-number').val();
        var description = $('#description').val();
        var location = $('#location').val();

        if (businessName && phoneNumber && description && location) {
          var newRow = table.row.add([
            businessName,
            phoneNumber,
            description,
            location,
            '<button class="btn btn-info btn-sm edit-btn">Editar</button> <button class="btn btn-danger btn-sm delete-btn">Eliminar</button>'
          ]).draw().node();

          // Agregar eventos de edición y eliminación a la nueva fila
          addRowEvents(newRow);

          // Forzar el cierre del modal de agregar
          $('#registerModal').modal('hide');
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();

          // Limpiar los campos del formulario de agregar
          $('#business-name').val('');
          $('#phone-number').val('');
          $('#description').val('');
          $('#location').val('');
        } else {
          alert("Todos los campos son obligatorios.");
        }
      });

      $('#save-edit-btn').click(function () {
        var row = $(this).data('row');
        var businessName = $('#edit-business-name').val();
        var phoneNumber = $('#edit-phone-number').val();
        var description = $('#edit-description').val();
        var location = $('#edit-location').val();

        if (businessName && phoneNumber && description && location) {
          row.data([
            businessName,
            phoneNumber,
            description,
            location,
            '<button class="btn btn-info btn-sm edit-btn">Editar</button> <button class="btn btn-danger btn-sm delete-btn">Eliminar</button>'
          ]).draw();

          // Agregar eventos de edición y eliminación a la fila editada
          addRowEvents(row.node());

          // Forzar el cierre del modal de editar
          $('#editModal').modal('hide');
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();
        } else {
          alert("Todos los campos son obligatorios.");
        }
      });

      $('#confirm-delete-btn').click(function () {
        rowToDelete.remove().draw();
        $('#deleteModal').modal('hide');
      });
    });
  </script>
</body>

</html>