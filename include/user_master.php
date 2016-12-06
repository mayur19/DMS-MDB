
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document Management System</title>

    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/test.css" rel="stylesheet">


</head>

<body>

<div>
    <div class="row">
        <div class="col-xs-2">
            <h4><a href="../user/home.php"><i class="fa fa-home"></i>Home</a></h4>
        </div>
        <div class="col-xs-8">
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="col-xs-2">
            <div class="text-center">
                <form action="../logout.php">
                    <input id="logout_button" class="btn" style="margin-top:20px;" type="submit" value="Logout">
                </form>
            </div>
        </div>
    </div>

    <hr class="style-4">

</div>

<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Events</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                    <?php
                        $sql = "SELECT eventname FROM dms_event";
                        $result = mysqli_query($db,$sql);
                        while($row = mysqli_fetch_assoc($result)) {
                        $summary = implode($row);
                        echo "<li>
                             <form action='../user/display_all.php' method='post'>
                                <input type='hidden' name='action' value='submit' />
                                <input type='submit' name='submit' value='" .$summary."' id='side' onclick='location.href='display_all.php';'>"
                            ."</form>
                        </li>";
            }
            ?>
            <li class="nav-divider"></li>
            <li><a href="javascript:;">Privacy</a></li>
            <li><a href="javascript:;">Settings</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="../js/jquery.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<!-- Material Design Bootstrap -->
<script type="text/javascript" src="../js/test.js"></script>


</body>

</html>