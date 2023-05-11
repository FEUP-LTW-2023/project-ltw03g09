<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<div class="header">
    <i style="color:#fff; display:flex; align-items: center; padding-left: 1em; font-size:20px;cursor:pointer" class="fas fa-home" onclick="window.location.href = 'home.php'"></i>

    <form action="profilePage.php" method="post" class="profileButtonForm">
	    <input style="width:64px;height:64px;border-radius:50%;padding:1em;" src=<?php echo "'".$_SESSION['image']."'";?> type="image" name="submit" value="profile page"/>
    </form>
</div>