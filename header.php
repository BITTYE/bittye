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
                                <div class="omb_login">
                                    <h3 class="omb_authTitle">Login or <a href="#">Sign up</a></h3>
                                    <div class="row omb_row-sm-offset-3 omb_socialButtons">
                                        <div class="col-xs-4 col-sm-2">
                                            <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
                                                <i class="fa fa-facebook visible-xs"></i>
                                                <span class="hidden-xs">Facebook</span>
                                            </a>
                                        </div>
                                        <div class="col-xs-4 col-sm-2">
                                            <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
                                                <i class="fa fa-twitter visible-xs"></i>
                                                <span class="hidden-xs">Twitter</span>
                                            </a>
                                        </div>
                                        <div class="col-xs-4 col-sm-2">
                                            <a href="#" class="btn btn-lg btn-block omb_btn-google">
                                                <i class="fa fa-google-plus visible-xs"></i>
                                                <span class="hidden-xs">Google+</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row omb_row-sm-offset-3 omb_loginOr">
                                        <div class="col-xs-12 col-sm-6">
                                            <hr class="omb_hrOr">
                                            <span class="omb_spanOr">or</span>
                                        </div>
                                    </div>

                                    <div class="row omb_row-sm-offset-3">
                                        <div class="col-xs-12 col-sm-6">
                                            <form class="omb_loginForm" action="" autocomplete="off" method="POST">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input type="text" class="form-control" name="username" placeholder="email address">
                                                </div>
                                                <span class="help-block"></span>

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                    <input  type="password" class="form-control" name="password" placeholder="Password">
                                                </div>
                                                <span class="help-block">Password error</span>

                                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row omb_row-sm-offset-3">
                                        <div class="col-xs-12 col-sm-3">
                                            <label class="checkbox">
                                                <input type="checkbox" value="remember-me">Remember Me
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="omb_forgotPwd">
                                                <a href="#">Forgot password?</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <a data-toggle="dropdown" href="#">Register</a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                                    <form role="form">
                                        <h2>Please Sign Up <small>It's free and always will be.</small></h2>
                                        <hr class="colorgraph">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
                                            </div>
                                            <div class="col-xs-8 col-sm-9 col-md-9">
                                                By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
                                            </div>
                                        </div>

                                        <hr class="colorgraph">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                                            <div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Sign In</a></div>
                                        </div>
                                    </form>
                                </div>
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
                        <ul class="nav navbar-nav">
                           <?php include "header-category.php"?>
                           <?php include "header-category.php"?>
                           <?php include "header-category.php"?>
                           <?php include "header-category.php"?>
                           <?php include "header-category.php"?>
                           <?php include "header-category.php"?>
                           <?php include "header-category.php"?>
                        </ul>
                    </div>
                </nav>
                <?php include "subscription.php"?>
            </div>
        </div>
    </div>
</div>