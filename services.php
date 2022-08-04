<div class="container">
    <?php if ($resultCheck > 0) {
        while ($row = $result->fetch_assoc()) { ?>
            <div class="service">
                <h3 class="service_title"><?php echo $row["service_title"]; ?></h3>
                <div class="img_container">
                    <img class="service_img" />
                </div>
                <div class="overlay"></div>
                <div class="service_details"></div>
            </div>
    <?php }
    } ?>
</div>
<?php

