<?php if ($resultCheck > 0) {
    while ($row = $result->fetch_assoc()) { ?>
        <div class="service">
            <div class="img_container">
            <?php echo '<img src="data:image/jpg;base64,'. base64_encode($row["img_src"]).' "class="service_img" "alt='.$row['img_name'];'" "/>';?>
            </div>
            <div class="overlay">
                <h3 class="service_title"><?php echo $row["service_title"]; ?></h3>
            </div>
            <div class="service_details">
            <p class="service_description"><?php echo $row["description"]; ?></p>
            </div>
        </div>
    <?php }
    } ?>
</div>
<?php

