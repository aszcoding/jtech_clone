<?php if ($resultCheck > 0) {
    while ($row = $result->fetch_assoc()) { ?>
        <div class="service">
            <div class="img_container">
            <?php 
            $name = 'img_name';
            $stmt = $pdo->prepare("SELECT `img_data` FROM `images` WHERE `img_name`=?");
            $stmt->execute([$name]);
            $img = $stmt->fetch();
            $img = $img["img_src"];
            $img = base64_encode($img);
            $ext = pathinfo($name, PATHINFO_EXTENSION);
            echo "<img src='data:image/".$ext.";base64,".$img."'/>";
            ?>
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

