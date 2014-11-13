<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<?php
    include("../../connect.php");
?>

<body>

    <div id="wrapper">

        <?php include ('../../component/navigation.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Position</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create Position
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="position_action.php" method="POST">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <!-- <input type="hidden" name="id" class="form-control"> -->
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="list_position.php"><button class="btn btn-default">List</button></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="../../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../js/plugins/morris/raphael.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../js/sb-admin-2.js"></script>

</body>

</html>
