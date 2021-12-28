<?php  
 $connect = mysqli_connect("localhost", "root", "", "epidemic");  
 $query ="SELECT * FROM states";  
 $result = mysqli_query($connect, $query);  
?>  

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BE Project</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">MBD</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>
                            <div class="sb-sidenav-menu-heading">Diseases</div>
                            <a class="nav-link" href="dengue.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Dengue
                            </a>
                            <a class="nav-link" href="malaria.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Malaria                                
                            </a>
                            <div class="sb-sidenav-menu-heading">Other</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Blog
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                About Us
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Malaria</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Malaria</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table mr-1"></i>
                                        India
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>  
                                                <tr>  
                                                    <td>Region</td>  
                                                    <td>Confirmed</td>  
                                                    <td>Recovered</td>  
                                                    <td>Deaths</td>  
                                                    <td>Recovery Ratio</td>  
                                                </tr>  
                                            </thead>
                                            <tfoot>  
                                                <tr>  
                                                    <td>Region</td>  
                                                    <td>Cases</td>  
                                                    <td>Recovered</td>  
                                                    <td>Deaths</td>  
                                                    <td>Recovery Ratio</td>  
                                                </tr>  
                                            </tfoot>
                                            <tbody>    
                                                <?php  
                                                while($row = mysqli_fetch_array($result))  
                                                {  
                                                    echo '  
                                                    <tr>  
                                                            <td>'.$row["region"].'</td>  
                                                            <td>'.$row["confirmed"].'</td>  
                                                            <td>'.$row["recovered"].'</td>  
                                                            <td>'.$row["death"].'</td>  
                                                            <td>'.$row["recovery_ratio"].'</td>  
                                                    </tr>  
                                                    ';  
                                                }  
                                                ?>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        India
                                        <select class="mx-5">
                                            <option value="green">Cases</option>
                                            <option value="red">Deaths</option>
                                        </select>
                                    </div>
                                    <div class="card-body">
                                        <div class="green box">
                                                <iframe title="Malaria Cases" aria-label="Map" id="datawrapper-chart-sm41P" src="https://datawrapper.dwcdn.net/sm41P/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="759"></iframe>
                                                <script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();</script>
                                        </div>
                                        <div class="red box" id="deaths">
                                                <iframe title="Malaria Deaths" aria-label="Map" id="datawrapper-chart-VzLVn" src="https://datawrapper.dwcdn.net/VzLVn/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="759"></iframe>
                                                <script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();</script>
                                        </div>
                                    </div>
                                </div>
                                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $("select").change(function(){
                                            $( "select option:selected").each(function(){
                                                if($(this).attr("value")=="red"){
                                                    $(".box").hide();
                                                    $(".red").show();
                                                }
                                                if($(this).attr("value")=="green"){
                                                    $(".box").hide();
                                                    $(".green").show();
                                                }
                                            });
                                        }).change();
                                    });
                                </script>
                                
                                <!-- <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div> -->
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; BE Project Group 5 20-21</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>

