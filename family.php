<?php
//This Page to Manage|Add|Edit|Delete about family
session_start();
if (isset($_SESSION['adminUsername'])){
    include "includes/header.inc";
    include  "includes/navs.inc";
    $do= isset($_GET['do'])? $_GET['do']: 'manage';
    //if the page is main page
    if ($do == 'manage'){
        echo "manage page";
    }elseif($do == 'add'){?>
            <div id="content">
                        <h1 class="text-center">إضافه عائلة</h1>
                <div class="container">

                </div>

            </div>
    <?php
    }elseif ($do == 'insert'){

    }elseif ($do == 'edit'){

    }elseif ($do == 'update'){

    }elseif ($do == 'delete'){

    }else{
        echo "Error";
    }

    include "includes/footer.inc";
}else{
    header('Location: index.php');
}
