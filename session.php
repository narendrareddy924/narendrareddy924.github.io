        <?php
            include '../connection.php';

            session_start();
            if(isset($_SESSION['name'])){
                echo 'Welcome, <span class="text-primary font-weight-bolder font-italic">'.$_SESSION['name'].'</span>';
                echo '<span class="text-info font-weight-bolder font-italic"> '.$_SESSION['surname'].'</span>';
                echo '<a class="btn btn-danger ml-5 p-2" href="../logout.php?logout">Logout</a>';
            }else{
                header("location:../index.php");
            }
        ?>