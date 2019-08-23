<div>
    <div>
        <span>
        <img src="<?php echo $user["profile_image"]; ?>" />
        </span>
    </div>
    <div>
        <div class="title">
            <h2>
            <?php echo $user['username']; ?>
            </h2>
        </div>
            <?php echo $user['date_inscription']; ?>
        
        <div>
            <?php echo $user['email']; ?>
        </div>
    </div>
</div>