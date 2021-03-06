<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/admin.css');?>"/>
</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span><span>Admin</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href=""><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                        <span>Petugas</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-tie"></span>
                        <span>Tambah Petugas</span></a>
                </li>
                <li>
                    <a href="" class="active"><span class="las la-receipt"></span>
                        <span>Sumbangan</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                        <span>Tasks</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here"/>
            </div>

            <div class="user-wrapper">
                <img src="1.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Willi Nardo</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>
        <main>
            

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Sumbangan</h3>
                        </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thread>
                                        <tr>
                                            <td>Nama</td>
                                            <td>Sifat Sumbangan</td>
                                            <td>Status</td>
                                            <td>Action</td>
                                        </tr>
                                    </thread>
                                    <tbody>
                                        <tr>
                                            <td>Willi Nardo</td>
                                            <td>Pribadi</td>
                                            <td><span class="status purple"></span>
                                                review
                                            </td>
                                            <td><button>Detail<span class="las la-arrow-right"></span></button></td>
                                        </tr>
                                        <tr>
                                            <td>Alvin Daeli</td>
                                            <td>Angkatan</td>
                                            <td><span class="status pink"></span>
                                                in progress
                                            </td>
                                            <td><button>Detail<span class="las la-arrow-right"></span></button></td>
                                        </tr>
                                        <tr>
                                            <td>Tiara Amalia</td>
                                            <td>Angkatan</td>
                                            <td><span class="status orange"></span>
                                                pending
                                            </td>
                                            <td><button>Detail<span class="las la-arrow-right"></span></button></td>
                                        </tr>
                                        <tr>
                                            <td>Timothy</td>
                                            <td>Pribadi</td>
                                            <td><span class="status purple"></span>
                                                review
                                            </td>
                                            <td><button>Detail<span class="las la-arrow-right"></span></button></td>
                                        </tr>
                                        <tr>
                                            <td>Ruth Calista</td>
                                            <td>Pribadi</td>
                                            <td><span class="status pink"></span>
                                                in progress
                                            </td>
                                            <td><button>Detail<span class="las la-arrow-right"></span></button></td>
                                        </tr>
                                        <tr>
                                            <td>Tiara Amalia</td>
                                            <td>Angkatan</td>
                                            <td><span class="status orange"></span>
                                                pending
                                            </td>
                                            <td><button>Detail<span class="las la-arrow-right"></span></button></td>
                                        </tr>
                                        <tr>
                                            <td>Willi Nardo</td>
                                            <td>Pribadi</td>
                                            <td><span class="status purple"></span>
                                                review
                                            </td>
                                            <td><button>Detail<span class="las la-arrow-right"></span></button></td>
                                        </tr>
                                        <tr>
                                            <td>Alvin Daeli</td>
                                            <td>Pribadi</td>
                                            <td><span class="status pink"></span>
                                                in progress
                                            </td>
                                            <td><button>Detail<span class="las la-arrow-right"></span></button></td>
                                        </tr>
                                        <tr>
                                            <td>Tiara Amalia</td>
                                            <td>Angkatan</td>
                                            <td><span class="status orange"></span>
                                                pending
                                            </td>
                                            <td><button>Detail<span class="las la-arrow-right"></span></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                    
                        
            
            </div>

        </main>
    </div>
</body>
</html>
