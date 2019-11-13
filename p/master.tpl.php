<?php
//Created from blank.html
?><!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="Windows-1251">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="apptoken" content="<?php echo $route->app->token; ?>">
  
  <title>SB Admin 2 - Blank</title>
  <!-- Custom fonts for this template-->
  <link href="/p/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  
  <!-- Custom styles for this template-->
  <link href="/p/sbadmin2/css/sb-admin-2.min.css" rel="stylesheet">
	<script src="/j/landcacherswinstaller.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

   <?php  
	if (Auth::getUid()) {
		include __DIR__ . '/view/master/sidebar.php';
	}
   ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

		<?php  
			if (Auth::getUid()) {
				include __DIR__ . '/view/master/topbar.php';
			}
		?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $route->app->pageHeading;?></h1>
          <?php include $route->view;?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; andryuxa.ru 2019. Admin panel free template from <a href="https://startbootstrap.com/previews/sb-admin-2/" target="_blank">SB Admin-2</a></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
<b4confirmdlg :params="b4ConfirmDlgParams" id="appConfirmDlg" ></b4confirmdlg>
<b4alertdlg :params="b4AlertDlgParams" id="appAlertDlg" ></b4alertdlg>
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

	
	
	 <!--div class="modal fade" id="appConfirmDlg" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="modalLabel"> params.title </h5>
			  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			  </button>
			</div>
			<div class="modal-body"> params.body </div>
			<div class="modal-footer">
			  <button class="btn btn-secondary" type="button" click="onClickCacnel" data-dismiss="modal"> params.btnCancelText </button>
			  <button  class="btn btn-primary" type="button" click="onClickOk"> params.btnOkText </button >
			</div>
		  </div>
		</div>
	  </div-->
	
  <!-- Logout Modal TODO drop it later-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script charset="UTF-8" src="/j/b.js"></script>
  
  <script src="/p/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="/p/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="/p/sbadmin2/js/sb-admin-2.min.js"></script>
  <!-- TODO add cacheclient and simply vue app for login-->
  

</body>

</html>
