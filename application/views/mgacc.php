<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Antara Digital</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.0.0" href="/assets/css/shards-dashboards.1.0.0.min.css">
    <link rel="stylesheet" href="../assets/css/extras.1.0.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
  <body class="h-100">

  <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="<?php echo site_url('/'); ?>" style="line-height: 27px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-6" style="max-width: 150px;" src="/assets/images/Antara.png" alt="Antara Digital">

                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="<?php echo site_url('admin'); ?>">
                  <i class="material-icons">home</i>
                  <span>Main Menu</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="form-components.html">
                  <i class="material-icons">view_module</i>
                  <span>Forms &amp; Components</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin_Konten/getNews'); ?>">
                  <i class="material-icons">table_chart</i>
                  <span>List News</span>
                </a>
              </li>
		<?php if ($this->session->userdata['admin']['status'] == "super") { ?>
              		<li class="nav-item">
                		<a class="nav-link active" href="<?php echo site_url('admin/manageAccount'); ?>">
                  			<i class="material-icons">person</i>
                  			<span>Manage Account</span>
                		</a>
              		</li>
		<?php } ?>

            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                  <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
              </form>
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item border-right dropdown notifications">
                  <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="nav-link-icon__wrapper">
                      <i class="material-icons">&#xE7F4;</i>
                      <span class="badge badge-pill badge-danger">2</span>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE6E1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Analytics</span>
                        <p>Your website’s active users count increased by
                          <span class="text-success text-semibold">28%</span> in the last week. Great job!</p>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE8D1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Sales</span>
                        <p>Last week your store’s sales count decreased by
                          <span class="text-danger text-semibold">5.52%</span>. It could have been worse!</p>
                      </div>
                    </a>
                    <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="/assets/images/avatars/0.jpg" alt="User Avatar">
                    <span class="d-none d-md-inline-block"><?php echo $this->session->userdata['admin']['username']; ?></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="user-profile-lite.html">
                      <i class="material-icons">&#xE7FD;</i> Profile</a>
                    <a class="dropdown-item" href="#">
                      <i class="material-icons">settings</i> Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="<?php echo site_url('admin_Konten/logout'); ?>">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Manage Account</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom bg-white" >
                    <h6 class="m-0">Akun-akun yang tercantum dalam database</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
				<?php for ($i = 1; $i <= count($this->session->userdata('columnName')); $i++) { 
					if ($this->session->userdata('columnName')[$i] == 'password' || $this->session->userdata('columnName')[$i] == 'status') continue;
                          		?><th scope="col" class="border-0"><?php echo $this->session->userdata('columnName')[$i]; ?></th>
				<?php } ?>
                          	<th scope="col" class="border-0">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
			<?php if (count($this->session->userdata('allAdminData')['id']) == 0) { ?>
				<div style="color: red;">
					Belum ada akun yang telah dibuat.
				</div>
			<?php } else {
				for ($i = 1; $i <= count($this->session->userdata('allAdminData')['id']); $i++) { 									//iterasi untuk baris (x)
					$id = $this->session->userdata('allAdminData')['id'][$i]; ?>
                        		<tr id="row<?php echo $id; ?>"> 
						<?php for ($j = 1; $j <= count($this->session->userdata('columnName')); $j++) { 						//iterasi untuk kolom (y) pada baris (x) --> [x,y]
                        				$columnName = $this->session->userdata('columnName')[$j]; 
							$output = $this->session->userdata('allAdminData')[$columnName][$i]; ?>
							<td align="center">
								<?php if ($this->session->userdata('allAdminData')[$columnName][$i] == null) echo "offline";
								else echo $output; 
								?>
							</td> 
						<?php } ?>
						<form method="post" id="form<?php echo $id; ?>" >
							<td>
								<i class="material-icons">power_settings_new</i>
								<input id="logout_button_<?php echo $id; ?>" type="submit" value="Logout" onclick="reassuringDelete('<?php echo $id ?>')" style="background-color: red; border-radius: 5px; color: white">
								<h6></h6>
								<i class="material-icons">delete_forever</i>
								<input id="delete_button_<?php echo $id; ?>" type="submit" value="Delete" onclick="reassuringDelete('<?php echo $id ?>', '<?php echo $this->session->userdata('allAdminData')['username'][$i] ?>')">
							</td>
						</form>
					</tr>
				<?php }
			} ?>
				<tr>
					<td>Tambah Akun</td>
					<form action="<?php echo site_url('admin_Konten/addClient'); ?>" id="form_addClient" method="post">
                          			<td><input name="input_username" type="text" placeholder="Username"></td>
						<td>Logo klien: <input type="file" name="logoKlien" ></td>
						<td></td>
						<td></td>
						<td></td>
						<td><a href="#" onclick="addClient()"><i class="material-icons">add</i>Tambahkan</a></td>
					</form>
				</tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
          </div>
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <ul class="nav">

            </ul>
            <span class="copyright ml-auto my-auto mr-2">Copyright © 2018
              <a href="" rel="nofollow">Antara Digital</a>
            </span>
          </footer>
        </main>
      </div>
    </div>
    <div class="promo-popup animated">
      <a href="http://bit.ly/shards-dashboard-pro" class="pp-cta extra-action">
        <img src="https://dgc2qnsehk7ta.cloudfront.net/uploads/sd-blog-promo-2.jpg"> </a>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="../assets/js/extras.1.0.0.min.js"></script>
    <script src="../assets/js/shards-dashboards.1.0.0.min.js"></script>
	<script>
		function reassuringLogout(id, nama) {
    			document.getElementById("row"+id).style.color = "white";
    			document.getElementById("row"+id).style.backgroundColor = "red";
			setTimeout(popUp, 10);
			function popUp() {
				if (confirm("Apakah anda yakin ingin melakukan Logout pada akun yang bernama "+nama+" (ID="+id+")?")) {
       					window.location = "<?php echo site_url('admin_Sistem/'); ?>";
					return true;
				} else {
    					document.getElementById("row"+id).style.color = "black";
    					document.getElementById("row"+id).style.backgroundColor = "white";
					return false;
				}
			}
		}
		function reassuringDelete(id, nama) {
    			document.getElementById("row"+id).style.color = "white";
    			document.getElementById("row"+id).style.backgroundColor = "red";
    			document.getElementById("login_button_"+id).style.color = "white";
    			document.getElementById("login_button_"+id).style.backgroundColor = "white";
			setTimeout(popUp, 10);
			function popUp() {
				if (confirm("Apakah anda yakin ingin menghapus akun yang bernama "+nama+" (ID="+id+")?")) {
					alert(nama+" (ID="+id+") telah berhasil dihapus!");
       					//window.location = "<?php echo site_url('admin'); ?>";
					return true;
				} else {
    					document.getElementById("row"+id).style.color = "black";
    					document.getElementById("row"+id).style.backgroundColor = "white";
    					document.getElementById("login_button_"+id).style.color = "white";
    					document.getElementById("login_button_"+id).style.backgroundColor = "red";
					return false;
				}
			}
		}
		function addClient() {
			document.getElementById('form_addClient').submit();
		}
	</script>
  </body>
</html>
