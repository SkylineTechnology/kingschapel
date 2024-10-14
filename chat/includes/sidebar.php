<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../passport/<?php echo $db_passport; ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo $db_fullname; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="../index">
                    <i class="fa fa-dashboard"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="active treeview">
                <a href="forum_group.php">
                    <i class="fa fa-dashboard"></i> <span>Forum Group</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Menber contact</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu">
                    <?php
                    $get_role_id = mysqli_query($conn, "select * from department where dept_name='$role'");
                    $row_id = mysqli_fetch_array($get_role_id);
                    $role_id = $row_id["dept_id"];
                    $result = mysqli_query($conn, "select * from members where dept='$role_id' and email <> '$username' LIMIT 10");
                    while ($row2 = mysqli_fetch_array($result)) {
                        ?>
                        <li class="user-panel">
                            <div class="pull-left image">
                                <img src="../passport/<?php echo $row2["passport"]; ?>" class="img-circle" alt="User Image" />
                            </div>
                            <div class="pull-left info">
                                <a class="fa fa-dashboard" href="chat.php?m=<?php echo base64_encode($row2["email"]); ?>">
                                    <?php echo $row2["fullname"]; ?>
                                </a>                       
                            </div>
                        </li>
                        <?php
                    }
                    ?> 
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>