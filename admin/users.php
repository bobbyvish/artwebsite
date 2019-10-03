<?php include('include/navbar.php');?>


        <div class="container-fluid body-section">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                      <a href="#" class="list-group-item active">
                        <i class="fa fa-tachometer"></i> Dashboard
                      </a>
                      <a href="#" class="list-group-item">
                          <span class="badge">14</span>
                          <i class="fa fa-file-text"></i> All Posts
                      </a>
                      <a href="#" class="list-group-item">
                          <span class="badge">10</span>
                          <i class="fa fa-comment"></i> Comments  
                      </a>
                      <a href="#" class="list-group-item">
                          <span class="badge">11</span>
                          <i class="fa fa-folder-open"></i> Categories
                      </a>
                      <a href="#" class="list-group-item">
                          <span class="badge">9</span>
                          <i class="fa fa-users"></i> Users
                      </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <h1><i class="fa fa-users"></i> Users <small>View All Users</small></h1><hr>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                      <li class="active"><i class="fa fa-users"></i> Users</li>
                    </ol>
                    
                    <div class="row">
                        <div class="col-sm-8">
                            <form action="">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control">
                                                <option value="delete">Delete</option>
                                                <option value="author">Change to Author</option>
                                                <option value="admin">Change to Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-8">
                                        <input type="submit" class="btn btn-success" value="Apply">
                                        <a href="#" class="btn btn-primary">Add New</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                               <th><input type="checkbox"></th>
                                <th>Sr #</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Posts</th>
                                <th>Edit</th>
                                <th>Del</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               <td><input type="checkbox"></td>
                                <td>1</td>
                                <td>15 Jan 2016</td>
                                <td>Muhammad Babar</td>
                                <td>networm786</td>
                                <td>networm786@gmail.com</td>
                                <td><img src="img/unknown-picture.png" width="30px"></td>
                                <td>1234567</td>
                                <td>Admin</td>
                                <td>11</td>
                                <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                <td><a href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <tr>
                               <td><input type="checkbox"></td>
                                <td>1</td>
                                <td>15 Jan 2016</td>
                                <td>Muhammad Babar</td>
                                <td>networm786</td>
                                <td>networm786@gmail.com</td>
                                <td><img src="img/unknown-picture.png" width="30px"></td>
                                <td>1234567</td>
                                <td>Admin</td>
                                <td>11</td>
                                <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                <td><a href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <tr>
                               <td><input type="checkbox"></td>
                                <td>1</td>
                                <td>15 Jan 2016</td>
                                <td>Muhammad Babar</td>
                                <td>networm786</td>
                                <td>networm786@gmail.com</td>
                                <td><img src="img/unknown-picture.png" width="30px"></td>
                                <td>1234567</td>
                                <td>Admin</td>
                                <td>11</td>
                                <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                <td><a href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <tr>
                               <td><input type="checkbox"></td>
                                <td>1</td>
                                <td>15 Jan 2016</td>
                                <td>Muhammad Babar</td>
                                <td>networm786</td>
                                <td>networm786@gmail.com</td>
                                <td><img src="img/unknown-picture.png" width="30px"></td>
                                <td>1234567</td>
                                <td>Admin</td>
                                <td>11</td>
                                <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                <td><a href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <tr>
                               <td><input type="checkbox"></td>
                                <td>1</td>
                                <td>15 Jan 2016</td>
                                <td>Muhammad Babar</td>
                                <td>networm786</td>
                                <td>networm786@gmail.com</td>
                                <td><img src="img/unknown-picture.png" width="30px"></td>
                                <td>1234567</td>
                                <td>Admin</td>
                                <td>11</td>
                                <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                <td><a href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <footer class="text-center">
            Copyright &copy; by <a href="#">Muhammad Babar</a> from 2011 - 2016
        </footer>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>