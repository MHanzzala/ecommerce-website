<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <!-- <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Hanzala</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><?php echo $_SESSION['email']?></li>
        <li>  
        <a href="adminindex.php">
            <i class="fa fa-th"></i> <span>Home</span>
          </a>
        </li>

        <li>  
        <a href="categories.php">
            <i class="fa fa-th"></i> <span>Category</span>
          </a>
        </li>
        <li>  
        <a href="productsshow.php">
            <i class="fa fa-th"></i> <span>Products</span>
          </a>
        </li>
        <li>  
        <a href="orders.php">
            <i class="fa fa-th"></i> <span>Orders</span>
          </a>
        </li>
 
        <li>  
        <a href="adminpartials/logout.php">
            <i class="fa fa-th"></i> <span>Sign Out</span>
          </a>
        </li>

        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>