<?php if ($resultCheck > 0) {
    while ($row = $result->fetch_assoc()) { ?>
        <div class="service">
            <div class="img_container">
                <img class="service_img"<?php echo $row["img_src"]; ?> />
            </div>
            <div class="overlay">
                <h3 class="service_title"><?php echo $row["service_title"]; ?></h3>
            </div>
            <div class="service_details">
            <p class='service_description'><?php echo $row['description']; ?></p>
            </div>
        </div>
    <?php }
    } ?>
</div>
<?php

