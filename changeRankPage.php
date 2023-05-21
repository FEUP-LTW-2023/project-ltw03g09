<?php 
    session_start();
    require_once('database/connection.php');
    require_once('database/getUsers.php');   

    $db = getDatabaseConnection('database/');
    $users = getUsers($db);


?>

<!DOCTYPE html>
<html>
<script src ="scripts/removeAgentDepartment.js"></script>
<script src ="scripts/departments.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<head>
    <title>Homepage</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/changeRankPage.css" rel="stylesheet">
</head>
<body>
    <?php include('header.php')?>
    <h2>Change Rank</h2>
    <div class='userList bigSquare'>
        <?php 
            foreach($users as $user){
        ?>
            <form class="userBanner" method="post" action="database/changeRank.php">
            <div style="display: flex;justify-self:stretch">
                <img class="profileIcon" src="<?php echo $user['image']?>">
                <p style="grid-column: 1"><?php echo $user['username']?></p>
            </div>
                <select style="grid-column: 2" id="rank" class="profileTextbox" name="rank">
                    <option value="client" >client</option>
                    <option value="agent" <?php if($user['agent_id']) echo 'selected'?> >agent</option>
                    <option value="admin" <?php if($user['admin_id']) echo 'selected'?> >admin</option>
                </select>
                <input style="grid-column: 3" type="submit" name="submit" value="change rank">
                <input type="hidden" name="user_id"  value=<?php echo $user['user_id']?>>
                <input type="hidden" name="agent_id" value=<?php echo $user['agent_id']?>>
                <input type="hidden" name="admin_id" value=<?php echo $user['admin_id']?>>
            </form>
        <?php
            }
        ?>
    </div>
    <?php include('footer.php')?>
</body>
</html>
