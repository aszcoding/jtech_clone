<?php if ($resultCheck > 0) {
    while ($row = $result->fetch_assoc()) { ?>
        <div class="service">
            <div class="img_container">
                <img class="service_img" />
            </div>
            <div class="overlay">
                <h3 class="service_title"><?php echo $row["service_title"]; ?></h3>
            </div>
            <div class="service_details"></div>
        </div>
    <?php }
    } ?>
</div>
<?php

