<?php
// Show PHP errors
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

// GET


// POST

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Head metas, css, and title -->
        <?php require_once 'includes/head.php'; ?>
    </head>
    <body>
        <!-- Header banner -->
        <?php require_once 'includes/header.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar menu -->
                <?php require_once 'includes/sidebar.php'; ?>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                  <h1 style="margin-top: 10px">Add / Edit Users</h1>
                  <p>Required fields are in (*)</p>
                  <form  method="post">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input class="form-control" type="text" name="id" id="id" value="" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input  class="form-control" type="text" name="name" id="name" placeholder="First Name and Last Name" value="" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input  class="form-control" type="text" name="email" id="email" placeholder="johndoel@gmail.com" value="" required maxlength="100">
                    </div>
                    <input class="btn btn-primary mb-2" type="button" name="btn_save" value="Save">                    
                  </form>
                </main>
            </div>
        </div>
        <!-- Footer scripts, and functions -->
        <?php require_once 'includes/footer.php'; ?>
    </body>
</html>
