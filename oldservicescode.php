<div class="service_1">
      <div class="img_container"> 
          <img class="service_img" src="content/services/ic_1547765637_520x346_true.jpg"  alt="Arms on a desk with coffee and a laptop"/>
            <div class="overlay">
              <?php
                   $sql = "SELECT * FROM services WHERE id=4;";
                   $result = mysqli_query($conn, $sql);
                   $resultCheck = mysqli_num_rows($result);

                   if($resultCheck > 0){
                    while($row = $result->fetch_assoc()){
                      echo "<h3 class='service_title'>" . $row['title'] . "<br>" . "</h3>";
                      echo "<p class='service_description'>" . $row['description'] . "<br>" . "</p>";
                    }}
                $sql = "SELECT service FROM service_titles WHERE id=1;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = $result->fetch_assoc()){
              echo "<h3 class='service_title'>" . $row['service'] . "<br>" . "</h3>";
                }}

              ?>
          </div>
        </div>
        <div class="service_details">
           <?php

                $sql = "SELECT description FROM service_descriptions WHERE service_id=1;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = $result->fetch_assoc()){
              echo "<p class='service_description'>" . $row['description'] . "<br>" . "</p>";
                }}

            ?>
        </div>
      </div>

    <div class="service_2">
      <div class="img_container">
        <img class="service_img" src="content/services/ic_1549899859_520x346_true.jpg" alt="Hands dumping a small bowl of cherry tomatoes into a salad">
          <div class="overlay">
    <?php

        $sql = "SELECT service FROM service_titles WHERE id=2;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
        while($row = $result->fetch_assoc()){
        echo "<h3 class='service_title'>" . $row['service'] . "<br>" . "</h3>";
      }}

        ?>
    </div>
   </div>
   <div class="service_details">
           <?php

                $sql = "SELECT description FROM service_descriptions WHERE service_id=2;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = $result->fetch_assoc()){
              echo "<p class='service_description'>" . $row['description'] . "<br>" . "</p>";
                }}
            ?>
        </div>
    </div>

    <div class="service_3">
      <div class="img_container">
        <img class="service_img" src="content/services/ic_1549899952_520x346_true.jpg" alt="Concept map of a wellness center">
        <div class="overlay">
    <?php

        $sql = "SELECT service FROM service_titles WHERE id=3;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
        while($row = $result->fetch_assoc()){
        echo "<h3 class='service_title'>" . $row['service'] . "<br>" . "</h3>";
      }}

        ?>
    </div>
      </div>
      <div class="service_details">
           <?php

                $sql = "SELECT description FROM service_descriptions WHERE service_id=3;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = $result->fetch_assoc()){
              echo "<p class='service_description'>" . $row['description'] . "<br>" . "</p>";
                }}

            ?>
        </div>
    </div>

    <div class="service_4">
      <div class="img_container">
        <img class="service_img" src="content/services/ic_1547765525_520x346_true.jpg" alt="Pair of hands between two laptops, taking notes in a notebook">
        <div class="overlay">
    <?php

        $sql = "SELECT service FROM service_titles WHERE id=4;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
        while($row = $result->fetch_assoc()){
        echo "<h3 class='service_title'>" . $row['service'] . "<br>" . "</h3>";
      }}

        ?>
    </div>
      </div>
      <div class="service_details">
           <?php

                $sql = "SELECT description FROM service_descriptions WHERE service_id=4;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = $result->fetch_assoc()){
              echo "<p class='service_description'>" . $row['description'] . "<br>" . "</p>";
                }}

            ?>
        </div>
    </div>

    <div class="service_5">
      <div class="img_container">
        <img class="service_img" src="content/services/ic_1554303215_520x346_true.jpg" alt="Group of men and women in uniform, smiling">
        <div class="overlay">
    <?php

        $sql = "SELECT service FROM service_titles WHERE id=5;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
        while($row = $result->fetch_assoc()){
        echo "<h3 class='service_title'>" . $row['service'] . "<br>" . "</h3>";
      }}

        ?>
    </div>
      </div>
      <div class="service_details">
           <?php

                $sql = "SELECT description FROM service_descriptions WHERE service_id=5;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = $result->fetch_assoc()){
              echo "<p class='service_description'>" . $row['description'] . "<br>" . "</p>";
                }}

            ?>
        </div>
    </div>

    <div class="service_6">
      <div class="img_container">
        <img class="service_img" src="content/services/ic_1547765561_520x346_true.jpg" alt="Hands holding a tablet that's displaying charts">
        <div class="overlay">
          <?php

              $sql = "SELECT service FROM service_titles WHERE id=6;";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);

              if($resultCheck > 0){
              while($row = $result->fetch_assoc()){
              echo "<h3 class='service_title'>" . $row['service'] . "<br>" . "</h3>";
            }}

          ?>
        </div>
      </div>
      <div class="service_details">
           <?php

                $sql = "SELECT description FROM service_descriptions WHERE service_id=6;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = $result->fetch_assoc()){
              echo "<p class='service_description'>" . $row['description'] . "<br>" . "</p>";
                }}

                $conn->close();
            ?>
        </div>
    </div>





    <?php 
 $element = "<div class='service'>";
 $element2= "<div class='img_container'>";
 $element3= "<img class='service_img'/></div>";
 $element4= "<div class='overlay'></div>";
 $element5= "<div class='service_details'></div></div>";
 $count = 6;
 foreach( range(1,$count) as $item){
     echo $element, $element2, $element3, $element4, $element5;

 }

 ?>

<?php

if($resultCheck > 0){
while($row = $result->fetch_assoc()){
echo "<h3 class='service_title'>" . $row['service_title'] . "<br>" . "</h3>";
}}

?>
            <?php echo '<img src="data:image/jpg;base64,'. base64_encode($row["img_src"]).' "class="service_img" "alt='.$row['img_alt_txt'].'" "onerror="this.onerror=null; this.src="assets/img/main/club-wellness-evolutions.svg." />'?>