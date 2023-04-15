<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blank Page
                <small>Subheading</small>
            </h1>

            <?php
            // $result = User::find_all_users();

            // while ($row = $result->fetch_array()){
            //     echo $row['username'] . "<br>";
            // }

            $found_user = User::find_user_by_id(1);

            $user = new User();
            echo $user->username = $found_user['username'];
            echo $user->password = $found_user['password'];
            echo $user->firstname = $found_user['first_name'];
            echo $user->lastname = $found_user['last_name'];

            
            ?>



            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>