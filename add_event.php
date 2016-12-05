<?php
    include("config.php");
    session_start();

    if (isset($_SESSION['user_id'])) {
        
    }
    else{
        header("location: index.html");
    }
    include("master.php");
?>
<div class="col-xs-10">
<form action="event_action.php" method="post">
    Event Name : <input type="text" name="event_name">
    Description : <input type="text" name="description">
    <input type="submit" value="Add Event" id="add_button" class="btn">
</form>
</div>