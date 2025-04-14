
    <?php include("components/header.php") ?>
    <?php
    $query = "Select * from courses";
    $result = mysqli_query($conn, $query);  
    
    ?>
    <div class="container">
        <div class="courses">
            <div class="courses-heading"> <span> Courses </span> </div>
            <div class="courses-grid">
                <div class="courses-grid-wrapper">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {    ?>
                       
                        <div class="course-content">
                        <img src="assets/web.png" alt="">
                        <div class="course-name">
                            <span>
                              <?= $row['course_name'];?>
                            </span>
                        </div>
                        <div class="course-description">
                            <span>
                            <?= $row['course_details'];?>                            </span>
                        </div>
                        <div class="course-tech"></div>
                   
                    </div>
                    <?php  
                    }
                    
                    ?>
                    
                </div>
            </div>
        </div>
    </div>



</body>

</html>