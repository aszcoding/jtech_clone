<?php if ($resultCheck > 0) {
    while ($row = $result->fetch_assoc()) { ?>
        <div class="service">
            <div class="img_container">
                <?php if($row["img_src"] != null) {
                    echo '<img src="data:image/jpg;base64,'. base64_encode($row["img_src"]).' "class="service_img" "alt='.$row['img_alt_txt'].'" />';
                }else{
                    echo '<img src="assets/img/main/club-wellness-evolutions.svg" "alt="Club wellness logo"/>';
                }
                ?>
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

