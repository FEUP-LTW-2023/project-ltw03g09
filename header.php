<div class="header">
    <form action="home.php" method="post" class="profileButtonForm">
	    <input style="background:none;border:none;color:#fff;" type="submit" src="" name="submit" value="home"/>
    </form>
    <form action="profilePage.php" method="post" class="profileButtonForm">
	    <input style="width:64px;height:64px;border-radius:50%;padding:1em;" src=<?php echo "'".$_SESSION['image']."'";?> type="image" name="submit" value="profile page"/>
    </form>
</div>