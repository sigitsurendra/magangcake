<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sigitsurendra
 * Date: 11/15/14
 * Time: 8:05 AM
 * To change this template use File | Settings | File Templates.
 */
$sessionUserMagang = $this->Session->read("UserRoleMagang");
?>

        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>

                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
					<?php
					echo
                    $this->Html->image('magangcoid/logo.png',array('alt'=>'Magang'));
					?>
					</a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/magangcake/">Beranda</a></li>
                        <?php
                         if(!isset($sessionUserMagang)){
                        ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Daftar  <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="/magangcake/students/daftar">Siswa</a></li>
                                <li><a href="/magangcake/companies/daftar">Perusahaan</a></li>
                                <li><a href="#">Lembaga Pendidikan</a></li>
                            </ul>
                        </li>
                        <?php } ?>
                        <li><a href="services.html">Services</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php
                                if(isset($sessionUserMagang)){
                                    $idRole = $sessionUserMagang['Userrole']['idRole'];
                                    if(isset($idRole)){
                                        if($idRole == '2'){
                                            //Student
                                            $namaStudent = $sessionUserMagang['Student']['Name'];
                                            echo ('Welcome ' .  $namaStudent) ;
                                        } else if ($idRole == '3'){
                                            //company
                                            $namaContact = $sessionUserMagang['Companycontactperson']['Name'];
                                            echo ('Welcome ' .  $namaContact) ;
                                        } else if ($idRole == '4'){
                                            //Education
                                            $namaContact = $sessionUserMagang['Educationcontactperson']['Name'];
                                            echo ('Welcome ' .  $namaContact) ;
                                        } else {
                                            echo 'Please Log Out';
                                        }
                                    } else {
                                        echo 'Please Log Out';
                                    }
                                } else {
                                    echo 'Welcome Guest';
                                }

                                ?>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if(isset($sessionUserMagang)){ ?>
                                <li><a href="/magangcake/users/logout">Logout</a></li>
                                    <?php } else {?>
                                <li><a href="/magangcake/users/login">Login</a></li>
                                <?php }?>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

