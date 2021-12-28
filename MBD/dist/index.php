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
                        <h1 class="mt-4">Mosquito-borne Diseases</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                        <div class="container my-5">
                            <h2>What are mosquito-borne diseases?</h2>
                            <p>When a mosquito feeds on blood, it also swallows any viruses or parasites living in the blood. These viruses and parasites can be transferred to the next person the mosquito bites through its saliva. Any disease that is spread in this way from mosquito to human (or animal) is known as a 'mosquito-borne disease'. </p>
                            <p>While the mosquito may not be affected, these mosquito-borne diseases can cause immense suffering for humans. Nearly 700 million people contract mosquito-borne illnesses each year, causing more than one million deaths.</p>
                            <p>Common types of mosquito-borne diseases include malaria, dengue, West Nile virus, chikungunya, yellow fever and Zika.</p>
                        </div>
                        <div class="container my-5 bg-warning text-white">
                            <div class="row">
                                <div class="col-xl-7">
                                    <h2 class="p-3">Malaria</h2>
                                    <div class="px-3">
                                        <p>A disease caused by a plasmodium parasite, transmitted by the bite of infected mosquitoes.
                                            The severity of malaria varies based on the species of plasmodium.
                                            Some population groups are at considerably higher risk of contracting malaria, and developing severe disease, than others. These include infants, children under 5 years of age, pregnant women and patients with HIV/AIDS, as well as non-immune migrants, mobile populations and travellers.
                                        </p>    
                                        <p>People travelling to areas where malaria is common typically take protective drugs before, during and after their trip. Treatment includes antimalarial drugs.</p>
                                    </div>
                                    <h4 class="px-3">Symptoms</h4>
                                    <div class="px-3">
                                        <ul>
                                            <li>chills</li>
                                            <li>fever</li>
                                            <li>fatigue</li>
                                            <li>sweating</li>
                                            <li>shivering</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-5 d-flex align-items-center justify-content-center">
                                    <img src="malaria1.png" alt="Malaria" width="80%">
                                </div>
                            </div>
                        </div>
                        <div class="container my-5 border border-danger rounded">
                            <div class="row">
                                <div class="col-xl-5 d-flex align-items-center justify-content-center">
                                    <img src="malaria1.png" alt="Malaria" width="80%">
                                </div>
                                <div class="col-xl-7">
                                    <h2 class="p-3">Dengue</h2>
                                    <div class="px-3">
                                        <p>Dengue fever is a mosquito-borne disease caused by the dengue virus. Symptoms typically begin three to fourteen days after infection. Recovery generally takes two to seven days. Dengue fever can develop into dengue heamorrhagic fever, a more severe form of the disease, which includes symptoms such as bleeding under the skin and constant vomiting. In recent decades, the global incidence of dengue has grown dramatically, with around 40 per cent of the world's population now at risk. Every year, approximately 25,000 people around the world die from dengue fever.</p>
                                    </div>
                                    <h4 class="px-3">Symptoms</h4>
                                    <div class="px-3">
                                        <ul>
                                            <li>high fever</li>
                                            <li>headaches</li>
                                            <li>vomiting</li>
                                            <li>joint pain</li>
                                            <li>rash</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container my-5 bg-warning text-white">
                            <div class="row">
                                <div class="col-xl-7">
                                    <h2 class="p-3">Zika</h2>
                                    <div class="px-3">
                                        <p>Zika fever, also known as Zika virus disease or simply Zika, is a mosquito-borne disease caused by the Zika virus. In many cases there are no symptoms, but it can present in a similar way to dengue fever.  Women who are infected by Zika virus during pregnancy can bear children with serious health conditions, including microcephaly and Guillain-Barré Syndrome, which can cause life-long disabilities.</p>
                                    </div>
                                    <h4 class="px-3">Symptoms</h4>
                                    <div class="px-3">
                                        <ul>
                                            <li>fever</li>
                                            <li>rash</li>
                                            <li>conjunctivitis</li>
                                            <li>headaches</li>
                                            <li>achy muscles and joints</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-5 d-flex align-items-center justify-content-center">
                                    <img src="malaria1.png" alt="Malaria" width="80%">
                                </div>
                            </div>
                        </div>
                        <div class="container my-5 border border-danger rounded">
                            <div class="row">
                                <div class="col-xl-5 d-flex align-items-center justify-content-center">
                                    <img src="malaria1.png" alt="Malaria" width="80%">
                                </div>
                                <div class="col-xl-7">
                                    <h2 class="p-3">Chikungunya</h2>
                                    <div class="px-3">
                                        <p>Chikungunya is a viral disease transmitted to humans via infected mosquitoes. In most cases, a patient's condition will improve within a week, however occasionally the joint pain may last for months or even years. Chikungunya shares some clinical signs with Zika and dengue, leading to potential misdiagnosis in areas where these diseases are prevalent. Treatment is aimed at relieving symptoms. Most people feel better within a week or so, after the virus runs its course.</p>
                                    </div>
                                    <h4 class="px-3">Symptoms</h4>
                                    <div class="px-3">
                                        <ul>
                                            <li>sudden-onset fever</li>
                                            <li>joint and muscle pain</li>
                                            <li>rash</li>
                                            <li>headache</li>
                                            <li>fatigue</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="container my-4">
                                    <hr>
                                    <p class="font-weight-bold">Key Facts</p>
                                    <ul>
                                        <li>Malaria is a parasitic infection transmitted by Anopheline mosquitoes. It causes an estimated 219 million cases globally, and results in more than 400,000 deaths every year. Most of the deaths occur in children under the age of 5 years.</li>
                                        <li>Dengue is the most prevalent viral infection transmitted by Aedes mosquitoes. More than 3.9 billion people in over 129 countries are at risk of contracting dengue, with an estimated 96 million symptomatic cases and an estimated 40,000 deaths every year.</li>
                                        <li>Other viral diseases transmitted by mosquitoes include chikungunya fever, Zika virus fever, yellow fever, West Nile fever, Japanese encephalitis.</li>
                                        <li>Many of mosquito-borne diseases are preventable, through protective measures, and community mobilisation.</li>
                                    </ul>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="container my-4">
                                    <hr>
                                    <p class="font-weight-bold">Related</p>
                                    <ul>
                                        <li><a href="https://www.who.int/news-room/fact-sheets/detail/malaria">Malaria</a></li>
                                        <li><a href="https://www.who.int/en/news-room/fact-sheets/detail/dengue-and-severe-dengue">Dengue</a></li>
                                        <li><a href="https://www.who.int/en/news-room/fact-sheets/detail/chikungunya">Chikungunya</a></li>
                                        <li><a href="https://www.who.int/health-topics/zika-virus-disease">Zika virus</a></li>
                                        <li><a href="https://www.who.int/en/news-room/fact-sheets/detail/yellow-fever">Yellow fever</a></li>
                                        <li><a href="https://www.who.int/en/news-room/fact-sheets/detail/japanese-encephalitis">Japanese encephalitis</a></li>
                                        <li><a href="https://www.who.int/news-room/fact-sheets/detail/vector-borne-diseases">Vector-borne diseases</a></li>        
                                    </ul>
                                    <hr>
                                </div>
                            </div>
                        </div>  
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
