<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<div class="header">
    <i class="fas fa-home" onclick="window.location.href = 'home.php'"></i>

    <form action="profilePage.php" method="post" class="profileButtonForm">
	    <input class="profileIcon" src=<?php echo "'".$_SESSION['image']."'";?> type="image" name="submit" value="profile page"/>
    </form>
</div>