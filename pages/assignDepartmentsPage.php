<?php 
    session_start();
    require_once('../database/connection.php');
    require_once('../database/getUsers.php');   

    $db = getDatabaseConnection('../database/');

?>


<!DOCTYPE html>
<html>
<script src ="../scripts/removeAgentDepartment.js"></script>
<script src ="../scripts/departments.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/assignDepartmentsPage.css" rel="stylesheet">
</head>
<body>
    <?php include('../templates/header.php')?>
    <div class='agentDepartments bigSquare'>
        <h2>Assign Departments</h2>
        <?php
            $agents = getAgents($db);
            foreach($agents as $agent){
                $agent_id = $agent['agent_id'];
                error_log("agent_id: ".$agent_id);
        ?>

            <div class="userBanner" id="agent_<?php echo $agent_id ?>">
                <div style="grid-column:1;display:flex;align-items:center;justify-self:flex-start" onclick="window.location.href='profilePage2.php?user_id=<?php echo $agent['user_id']?>'">
                    <img class="profileIcon" src="<?php echo $agent['image'] ?>"/>
                    <span style="color:#000"><?php echo $agent['username']?></span>
                </div>
                <div class ='agentDepartmentList' style="grid-column: 2; display:flex;flex-direction:column">
                    <?php
                        $agentDepartments = getAgentDepartments($db, $agent['agent_id']);
                        foreach($agentDepartments as $department){
                    ?>
                            <span class="departmentSpan" onclick='removeAgentDepartment("<?php echo $agent['agent_id'].'","'.$department['department'] ?>",this)'>
                               <?php echo $department['department'] ?>
                               <i style="color:#007bff" class="fas fa-times"></i>
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
                <input style="grid-column: 4" type="submit" name="submit" value="assign department"
                onclick="addAgentDepartment(<?php echo $agent_id ?>)">
            </div> 

        <?php 
            }
        ?>
    </div>
    <div class="bigSquare">
        <h2>Add Or Remove Departments</h2>
        <div class="addRemoveDepartment">
            <div class="departmentList" style="display:flex;flex-direction:column;justify-content:center;color:#fff;padding:10px;">
                    <?php 
                        require_once('../database/fetchDepartments.php');
                        $departments = fetchDepartments();

                        foreach($departments as $department){
                    ?>
                            <span class="departmentSpan"  onclick='removeDepartment("<?php echo $department ?>",this)'>
                                <?php echo $department ?>
                                <i style="color:#007bff" class="fas fa-times"></i>
                            </span>

                    <?php
                        }
                    ?>
            </div>
            <div class="addDepartment">
                <div class="userBanner">
                        <h3>add department</h3>
                        <input id="addDepartmentBox" style="grid-column: 1" type="text" name="department" value=""/>
                        <input onclick="addDepartment()" style="grid-column: 2" type="submit" name="submit" value="add department"/>
                </div>
            </div>
        </div>
    </div>

    <?php include('../templates/footer.php')?>
</body>
</html>
