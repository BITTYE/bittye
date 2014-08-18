<div class="header">
    <div class="container">
        <div class="row">
            <div class="topbar col-md-12">
                <a href="#" class="logo navbar-brand"><img src="images/bitty-pass.png" alt=""/></a>
                <nav role="navigation" class="navbar navbar-default navbar-static" id="navbar-example">
                    <div class="container-fluid no-padding">
                        <div class="navbar-header">
                            <button data-target=".bs-example-js-navbar-collapse" data-toggle="collapse" type="button"
                                    class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- /.nav-collapse -->
                        <div class="user-profile pull-right">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">User Profile<span
                                            class="glyphicon glyphicon-user pull-right"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><span class="pull-left">Account Settings</span> <span
                                                class="glyphicon glyphicon-cog pull-right"></span></a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><span class="pull-left">User stats</span> <span
                                                class="glyphicon glyphicon-stats pull-right"></span></a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><span class="pull-left">Messages</span> <span class="badge pull-right"> 42 </span></a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><span class="pull-left">Favourites Snippets</span> <span
                                                class="glyphicon glyphicon-heart pull-right"></span></a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><span class="pull-left">Sign Out</span> <span
                                                class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="login-section collapse navbar-collapse bs-example-js-navbar-collapse pull-right">
                            <button class="btn btn-success btn-md" data-toggle="modal" data-target="#login-modal">
                                Login
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php include "login.php"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger btn-md" data-toggle="modal" data-target="#register-modal">
                                Register
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <?php include "register.php"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger btn-md" data-toggle="modal" data-target="#register-modal">
                                Logout
                            </button>
                        </div>
                        <!-- /.container-fluid -->
                        <!-- Modal -->
                        <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque,
                                            modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis
                                            perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem
                                            ad.</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque,
                                            modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis
                                            perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem
                                            ad.</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque,
                                            modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis
                                            perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem
                                            ad.</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque,
                                            modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis
                                            perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem
                                            ad.</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque,
                                            modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis
                                            perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem
                                            ad.</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque,
                                            modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis
                                            perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem
                                            ad.</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque,
                                            modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis
                                            perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem
                                            ad.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree
                                        </button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                            </ul>
                        </div>
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse"
                                    data-target=".js-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">MegaMenu</a>
                        </div>

                        <div class="collapse navbar-collapse js-navbar-collapse">
                            <?php include "header-category.php"?>
                        </div>
                    </div>
                </nav>
                <?php include "subscription.php"?>
            </div>
        </div>
    </div>
</div>