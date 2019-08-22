<div class="produit">
    <div class="header">
        <span class="profile_image">
        <img src="<?php echo $user["profile_image"]; ?>" />
        </span>
    </div>
    <div class="infos">
        <div class="title">
            <h2>
            <?php echo $user['username']; ?>
            </h2>
        </div>
            <?php echo $user['date_inscription']; ?>
        
        <div class="description">
            <?php echo $user['email']; ?>
        </div>
    </div>
</div>