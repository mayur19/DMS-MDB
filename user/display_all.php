<?php
    include("../include/config.php");
    session_start();

    if (isset($_SESSION['user_id'])) {
        $user = $_SESSION['user_id'];
    }
    else{
        header("location: ../index.html");
    }
include("../include/user_master.php");
include("../include/user_upload.php");

if (isset($_POST['action'])) {
    
    $eventname = mysqli_real_escape_string($db,$_POST['submit']);
    //echo $eventname;
    
    $sql = "SELECT event_id FROM dms_event WHERE eventname='$eventname'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $_SESSION['event_id'] = $row['event_id'];
    $event_id = $_SESSION['event_id'];

    $sql1 = "SELECT dm_id FROM dms_data_master WHERE event_id='$event_id' AND user_id='$user'";
    $result1 = mysqli_query($db,$sql1);
    $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

    $dm_id = $row1['dm_id'];
}
echo "<div class=row >";
$sql3 = "SELECT * FROM dms_data WHERE dm_id='$dm_id'";
$retval3 = mysqli_query( $db,$sql3 );
    $count = 0;
        while($row = mysqli_fetch_assoc($retval3)) {
            //echo $row['filename'];
            if ($count==5) {
                echo "<div class=row></div>
                        <div class=col-xs-2></div>";
            }
            echo "<div class=col-xs-2 id='dispImg'><a href='../uploads/" . $row['filename'] . "'>
                <img src='../uploads/".$row['filename']."' height='150' width='150' />"
                    .$row['filename']."</div>";
                $count++;
            }
echo "</div>";
?>