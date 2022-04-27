<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DOX CAFFE | PoS</title>
  <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Default style -->
  <link rel="stylesheet" href="css/index.css">
  <!-- Custom Style -->
  <link rel="stylesheet" href="css/dashboard.css"><!--Link ke CSS dashboard-->
  <link rel="icon" href="img/logo.png"type = "image/x-icon">
</head>
<body id="body-pd">

<!-- Sidebar -->

      <div class="header_toggle"id="header">
        <button class="btn-toggle fa fa-bars"id="header-toggle">
        </button>
      </div>

    <div class="left-sidebar" id="side-bar">
      <nav class="nav">
        <div>
          <a href="index.html" class="nav_logo">
            <img src="img/logo.png" alt=""class="nav_logo-icon">
          </a>
          <div class="side-outlet">
            Jl. Buahbatu, Kec. Bandung
          </div>         
          <div class="padding-list">
          <div class="nav_list">
            <a href="/" class="nav_link active">
              <i class="fa-solid fa-chart-simple nav_icon"></i>
              <span class="nav_name">Dashboard</span>
            </a>
            <a href="pages/menu.html" class="nav_link">
              <i class="fa-solid fa-utensils nav_icon"></i>
              <span class="nav_name">Menus</span>
            </a>
            <a href="pages/menu-cashier.html" class="nav_link">
              <i class="fa-solid fa-utensils nav_icon"></i>
              <span class="nav_name">Menus (Cashier)</span>
            </a>
            <a href="pages/outlets.html" class="nav_link">
              <i class="fa-solid fa-shop nav_icon"></i>
              <span class="nav_name">Outlets</span>
            </a>
            <a href="pages/orders.html" class="nav_link">
              <i class="fa-solid fa-pen-to-square nav_icon"></i>
              <span class="nav_name">Orders</span>
            </a>
            <a href="pages/employees.html" class="nav_link">
              <i class="fa-solid fa-user-group nav_icon"></i>
              <span class="nav_name">Employees</span>
            </a>
          </div>
          </div>
        </div>
        <div class="nav_bottom">
          <div class="nav_bottom-profil">
            <img src="img/profil.png" alt="" class="profil_image">
            <span class="profil_name">John Doe <br> <span class="profil_role">Cashier</span></span>
            <button class="btn-logout nav_bottom-link fa-solid fa-right-from-bracket">
          </button>
          </div>
        </div>
      </nav>
    </div>
  
    <main>
      <div class="dashboard">
    <!-- 1 -->
    <div class="wrap">
    <div class="card">
      <div class="container_card">
        <i class="fa-solid fa-chart-simple logo_card"></i>
        <span class="title"><b>Dashboard</b> <br> <span class="detail">Analytical Dashboard</span></span>
      </div>
    </div>
    </div>
    <!-- 2 -->
    <div class="wrap">
    
      <div class="col_dashboard">
        <div class="card primary">
          <i class="fa-solid fa-utensils"></i>
          <div class="desc">
            <h4><b>Total Menu: 20</b></h4>
          </div>
        </div>
      </div>

      <div class="col_dashboard">
        <div class="card secondary">
          <i class="fa-solid fa-shop"></i>
          <div class="desc">
            <h4><b>Total Outlet : 5</b></h4>
           
          </div>
        </div>
      </div>

      <div class="col_dashboard">
        <div class="card primary">
          <i class="fa-solid fa-pen-to-square"></i>
          <div class="desc">
            <h4><b>Total Order : 10</b></h4>
          </div>
        </div>
      </div>      
      <div class="col_dashboard">
        <div class="card secondary">
          <i class="fa-solid fa-user-group"></i>
          <div class="desc">
            <h4><b>Total Karyawan : 10</b></h4>
          </div>
        </div>
      </div>
      </div>
    <!-- 3 -->
    <div class="wrap">
      <div class="card col left">
        <div class="title_left">
          <h3 class="recent">Recent Orders</h3>
          <a href="pages/orders.html"><button class="btn btn-primary">Show All</button></a>
        </div>
        <hr style="border :1px solid #C4C4C4;">
        <div class="container_table">
          <table class="table">
            <thead>
              <tr>
                <th>Menu</th>
                <th>ID</td>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Date</td>
              </tr>
            </thead>
            
            <tbody>
            <tr>
              <td data-label="Menu">Hamburger</td>
              <td data-label="ID">DC-120938721</td>
              <td data-label="Price">20.000</td>
              <td data-label="Qty">2</td>
              <td data-label="Total">40.000</td>
              <td data-label="Date">26 March 2022</td> 
            </tr>
    
            <tr>
              <td data-label="Menu">Hamburger</td>
              <td data-label="ID">DC-120938721</td>
              <td data-label="Price">20.000</td>
              <td data-label="Qty">2</td>
              <td data-label="Total">40.000</td>
              <td data-label="Date">26 March 2022</td>
            </tr>
    
            <tr>
              <td data-label="Menu">Hamburger</td>
              <td data-label="ID">DC-120938721</td>
              <td data-label="Price">20.000</td>
              <td data-label="Qty">2</td>
              <td data-label="Total">40.000</td>  
              <td data-label="Date">26 March 2022</td>
            </tr>

            <tr>
              <td data-label="Menu">Hamburger</td>
              <td data-label="ID">DC-120938721</td>
              <td data-label="Price">20.000</td>
              <td data-label="Qty">2</td>
              <td data-label="Total">40.000</td>
              <td data-label="Date">26 March 2022</td>   
            </tr>

            <tr>
              <td data-label="Menu">Hamburger</td>
              <td data-label="ID">DC-120938721</td>
              <td data-label="Price">20.000</td>
              <td data-label="Qty">2</td>
              <td data-label="Total">40.000</td>
              <td data-label="Date">26 March 2022</td>
            </tr>
          </tbody>
          </table>
        </div>
      </div>

      <div class="col right">
        <div class="card pd">
          <h3 style="padding-bottom: 3rem;">Today's Income</h3>
          <div class="daily">
            <h2>RP.3.200.000</h3>
            <i class="fa-solid fa-money-bill-wave"></i>
          </div>
          <div class="garis">
            <hr>
          </div>
        </div>
        
        <div class="card pd">
          <h3 style="padding-bottom: 3rem;">This Month's Income</h3>
          <div class="daily">
            <h2>RP.20.200.000</h3>
            <i class="fa-solid fa-money-bill-wave"></i>
          </div>
          <div class="garis">
            <hr>
          </div>
        </div>
      </div>
    </div>
    </main>
    

    <!-- Import JS -->
    <script src="https://kit.fontawesome.com/94fce472e4.js" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>

</html>