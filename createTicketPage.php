
<!DOCTYPE html>
<html>
<head>
    <title>Ticket page</title>
</head>
<body>
    <h1>Ticket page</h1>
    <p>This is where tickets are created</p>

    <form action="database/createTicket.php" method="post">  
	    <input type="text" name="title" placeholder="title">
        <p/>
	    <input list="departments" name="department" placeholder="department">
	    <input type="text" name="label" placeholder="label (ex: #feupRulzzz)">
        <datalist id="departments">
            <?php
                require_once('database/fetchDepartments.php');
                $departments = fetchDepartments();
                echo $departments[0];
                foreach($departments as $department){
                    echo '<option value="'.$department.'"/>';
                }
            ?>
        </datalist>
        <p/>
        <textarea name="text" rows="10" cols="50" placeholder="text"></textarea>
        <p/>
	    <input type="submit" name="submit" value="submit">
    </form>

    <form action="home.php" method="post">
	<input type="submit" name="submit" value="home">
    </form>


    <a href="logout.php">Logout</a>
</body>
</html