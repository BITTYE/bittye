<div class="header">
    <div class="container">
        <div class="row">
            <div class="topbar col-md-12">
                <a href="#" class="logo navbar-brand"><img src="images/bitty-pass.png" alt=""/></a>
                <nav role="navigation" class="navbar navbar-default navbar-static" id="navbar-example">
                    <div class="container-fluid">
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
                    </div>
                    <!-- /.container-fluid -->
                    <div class="collapse navbar-collapse bs-example-js-navbar-collapse pull-right">
                        <div class="dropdown">
                            <a data-toggle="dropdown" href="#">Login</a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <?php include "login.php"?>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <a data-toggle="dropdown" href="#">Register</a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <?php include "register.php"?>
                            </ul>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                            </ul>
                        </div>
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
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