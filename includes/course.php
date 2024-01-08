<?php 
require_once('config/db-config.php');
// SQL query to retrieve data
$sql = "SELECT id,name FROM course where status='active' ";

$result = $database->query($sql);
$result = $database->fetchAll($result);

?>
<section class="course-two" id="course">
            <div class="course-two__shape-top wow fadeInRight" data-wow-delay="300ms"><img src="assets/images/shapes/course-shape-1.png" alt="eduact"></div>
            <div class="container wow fadeInUp" data-wow-delay="200ms">
                <div class="section-title">
                    <h5 class="section-title__tagline">
                        Best Course
                        <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                            <g clip-path="url(#clip0_324_36194)">
                                <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                                <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                                <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                                <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                            </g>
                        </svg>
                    </h5>
                    <h2 class="section-title__title">Featured Course On This Month</h2>
                </div><!-- section-title -->

               <div>

        
              <?php if(isset($_POST['read']))
                { 
                $id= $_POST['read'];
                $sql = "SELECT cp.*,c.* FROM course as c
                join chapters as cp on c.id=cp.course_id
                 where c.id=".$id;
                $result2 = $conn->query($sql);
                $data= $result2->fetch_assoc();
               
                ?>
               <div class="row" >  
                <div class="col-12 ">
                    <div class="card p-4" style="text-align:center;"> 
                  <?php echo $data['chapters']; ?>
                  <p> <?php echo $data['duration']; ?> </p>
                  <p> <?php echo $data['details']; ?> </p>
                    </div>
                </div>
               </div>
               <?php  }    ?>


                 
                
           
            <?php // Check if there are results
          
        if (count($result) > 0) { ?>
             <div class="course-two__slider eduact-owl__carousel owl-with-shadow owl-theme owl-carousel" data-owl-options='{
            "items": 3,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": true,
            "dots":false,
            "nav":true,
            "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow\"></span>"],
            "responsive":{
                "0":{
                    "items":1
                },
                "992":{
                    "items": 2
                },
                "1200":{
                    "items": 3
                },
                "1400":{
                    "margin": 36,
                    "items": 3
                }
            }
            }'>

            <?php foreach ($result as $row) { ?>
                <div class="item">
                        <div class="course-two__item">
                            <div>New Year 2024 % 50 discount Offer </div>
                            <div class="course-two__thumb">
                                <img src="assets/images/course/course-2-1.png" alt="eduact">
                                <a class="course-two__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353 177">
                                    <path d="M37 0C16.5655 0 0 16.5655 0 37V93.4816C0 103.547 4.00259 113.295 11.7361 119.737C54.2735 155.171 112.403 177 176.496 177C240.589 177 298.718 155.171 341.261 119.737C348.996 113.295 353 103.546 353 93.4795V37C353 16.5655 336.435 0 316 0H37Z" />
                                </svg>
                            </div><!-- /.course-thumb -->
                            <div class="course-two__content">
                                <div class="course-two__time">20 Hours</div>
                                <div class="course-two__ratings">
                                    <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                                    <div class="course-two__ratings__reviews">(25 Reviews)</div>
                                </div>
                                <h3 class="course-two__title">
                                    <a href="management-consulting.html"> <?php echo $row["name"]; ?></a>
                                </h3>
                                <div class="course-two__bottom">
                                    <div class="course-two__author">
                                        <img src="assets/images/course/author-1.png" alt="eduact">
                                        <h5 class="course-two__author__name">Guy Hawkins</h5>
                                        <p class="course-two__author__designation">Project Manager</p>
                                    </div>
                                    <div class="course-two__meta">
                                        <h4 class="course-two__meta__price">$473.00</h4>
                                        <p class="course-two__meta__class">15 Lessons</p>
                                    </div>
                                </div>
                                 <!-- Button trigger modal -->
                                 
                                 <button type="button" id="load<?php echo $row["id"];?>" class="btn btn-primary load-course-detail" data-bs-toggle="modal" data-bs-target="#courseModal">
                                    Enrole now
                                    </button>
                            </div><!-- /.course-content -->
                        </div><!-- /.course-card-two -->
                    </div>
                <?php  }    ?>
                </div>
            <?php  }  ?>
            
               
                    
                   
                </div>
            </div>
            <div class="course-two__shape-bottom wow fadeInLeft" data-wow-delay="400ms"><img src="assets/images/shapes/course-shape-2.png" alt="eduact"></div>
        </section>


        
<!-- Modal -->
<div class="modal fade" id="courseModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="courseModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="result">
            <div  class="accordion accordion-flush" id="accordionFlushExample">
                Course Details          
            </div>
        </div> 
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
    </div>
    </div>
  </div>
</div>


