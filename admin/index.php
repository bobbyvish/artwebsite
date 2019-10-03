
<?php include('include/navbar.php');?>
        <div class="container-fluid body-section">
            <div class="row">
               <?php include('include/sidebar.php');?>

                <div class="col-md-9">
                    <h1><i class="fa fa-tachometer"></i> Dashboard <small>Statistics Overview</small></h1><hr>
                    <ol class="breadcrumb">
                      <li class="active"><i class="fa fa-tachometer"></i> Dashboard</li>
                    </ol>

                    <div class="row tag-boxes">
                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge">11</div>
                                            <div class="text-right">New Comments</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View All Comments</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-file-text fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge">18</div>
                                            <div class="text-right">All Posts</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View All Posts</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge">30</div>
                                            <div class="text-right">All Users</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View All Users</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-folder-open fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge">9</div>
                                            <div class="text-right">All Categories</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View All Categories</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div><hr>

                    <h3>New Users</h3>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Sr #</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>28 Jan 2016</td>
                                <td>Muhammad Babar</td>
                                <td>babar786</td>
                                <td>Admin</td>
                            </tr>
                           
                        </tbody>
                    </table>
                    <a href="#" class="btn btn-primary">View All Users</a><hr>
                    <h3>New Posts</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sr #</th>
                                <th>Date</th>
                                <th>Post Title</th>
                                <th>Category</th>
                                <th>Views</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>25 Jan 2016</td>
                                <td>ththbftth</td>
                                <td>gfgfgh</td>
                                <td><i class="fa fa-eye"></i> 28</td>
                            </tr>
                           
                        </tbody>
                    </table>
                    <a href="#" class="btn btn-primary">View All Posts</a>
                </div>
            </div>
        </div>

        <footer class="text-center">
            Copyright &copy; by <a href="#"></a> 
        </footer>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>