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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<head>
    <title>Homepage</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('header.php')?>
    <div class='userList'>
        <?php 
            foreach($users as $user){
        ?>
            <form class="userBanner" method="post" action="database/changeRank.php">
                <p style="grid-column: 1"><?php echo $user['username']?></p>
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
    <div class='agentDepartments'>
        <?php
            $agents = getAgents($db);
            foreach($agents as $agent){
                $agent_id = $agent['agent_id'];
                error_log("agent_id: ".$agent_id);
        ?>

            <form class="userBanner" method="post" action="database/newDepartmentAgent.php">
                <p style="grid-column: 1"><?php echo $agent['username']?></p>

                <div class ='agentDepartmentList' style="grid-column: 2; display:flex;flex-direction:column">
                    <?php
                        $agentDepartments = getAgentDepartments($db, $agent['agent_id']);
                        foreach($agentDepartments as $department){
                    ?>
                            <span class="departmentSpan" onclick='removeAgentDepartment("<?php echo $agent['agent_id'].'","'.$department['department'] ?>",this)'>
                               <?php echo $department['department'] ?>
                            </span>
                    <?php
                        }
                    ?>

                </div>
                
                <select style="grid-column: 3" id="departments" class="profileTextbox" name="departments">
                    <?php
                        $departments = getNotAgentDepartments($db, $agent_id);
                        foreach($departments as $department){
                    ?>
                        <option value="<?php echo $department['name']?>"/><?php echo $department['name']?></option>
                    <?php
                        }
                    ?>
                </select>
                <input style="grid-column: 4" type="submit" name="submit" value="assign department">
                <input type="hidden" name="agent_id" value=<?php echo $agent_id ?>>
            </form> 

        <?php 
            }
            $agents = null;
        ?>

    </div>
    <?php include('footer.php')?>
</body>
</html>
