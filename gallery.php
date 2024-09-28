<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel = "icon" href = "./assets/logo/NaturaVerdeLogo.png" type = "image/x-icon"><title>Natura Verde Farm and Private Resort</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="./css/common/gallery.css">
    <title>GALLERY</title>
</head>
<style>

  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif
}
::-webkit-scrollbar {
    width: 8px; 
  }
  
  ::-webkit-scrollbar-thumb {
  background: #A9A9A9; 
  border-radius: 10px;
  }
  
  ::-webkit-scrollbar-track {
  background: #f1f1f1; 
  }


.gallery-sec{
    padding: 2em 0;
    width: 100%;
    height: auto;

}
.gallery-sec .gallery-container{
    width: 100%;
    height: auto;

  
}

.image-slider-pos{
    width: 100%;
    height: 50vh;
    
}
.image-slider-pos .image-slider-container{
    margin: 0 auto;
}

.slider-container{
    width: 100%;
    height: 50vh;
}
.img-box{
    width: 100%;
}
.swiper-wrapper{
    /* width: 100%; */
    height: 40vh;
    /* border: 3px solid purple; */
}
.img-box img{
    /* max-height: 100%; */
    padding: 5px;
    height: 40vh;
    border-radius: 10px;
    /* border: 3px solid greenyellow; */
}

.card-slider{
    width: 78%;
    margin: auto;
 
}
.gallery-container .gallery-desc{
    width: 100%;
    height: 15vh;
    /* border: 3px solid rgb(205, 185, 185);  */
}
.gallery-desc h1{
    text-align: center;
    line-height: 30px;
    font-family:  Arial, sans-serif;
}
.gallery-sec .resort-details-container{
    width: 100%;
    height: auto;
    display: flex;
    justify-content: space-between;
  

}
.category-container{
    width: 30%;
    height: auto;
 
}
.title-description-container {
    width: 100%;
    height: 57vh;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap; /* Adjusted from wrap to nowrap */
    /* border: solid 2px lightskyblue; */
}

.cat-title {
    /* border: 2px solid darkcyan; */
    width: 100%;
    height: 10vh;
    color: #126234;
    text-transform: uppercase;
    display: flex;
    justify-content: center;
    align-items: flex-end;

}
.hr-one {
    margin: 5px auto;
     width: 340px;
     border: 0;
     height: 2px;
     background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(121, 121, 121, 0.96), rgba(255, 255, 255, 0));
 }
 
 .h50 {
     clear: both;
     height: 50px;
 }
 
.cat-description {
  
    width: 100%;
    height: auto;
    color: #126234;
    display: flex;
    justify-content: center;
    align-items: center;    
   
   
}

.cat-description p {
    width: 65%;
    text-align: justify;
 
}
/* .space{
   
} */

.cards-images{
    width: 70%;
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
 
}
.cat-images {
    width: 23%;
    height: 45vh;
    background: #126234;
    object-fit: cover;
    margin-bottom: 5em;
    transition: transform 0.8s ease;
    overflow: hidden;
	transition: transform 0.5s ease;

    &:hover {
		transform: scale(1.2);
	}

	&--inverted:hover {
		transform: scale(0.96);
	}
}

.cat-images img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s ease;
}


</style>
<header>
<?php include('header_unauthenticated.php') ?> 
</header>
<body>
<section class="gallery-sec"> 
<div class="gallery-container">
        <div class="image-slider-pos animate__animated animate__bounceInDown">
        <div class="swiper card-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img-box">
                            <img src="resources/image-slider/Pic1.jpg">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                            <img src="resources/image-slider/Pic2.jpg">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                            <img src="resources/image-slider/Pic3.jpg">
                    </div>
                </div>
              
                <div class="swiper-slide">
                    <div class="img-box">
                            <img src="resources/image-slider/Pic4.jpg">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                            <img src="resources/image-slider/Pic5.jpg">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                            <img src="resources/image-slider/Pic6.jpg">
                    </div>
                </div>
              
                <div class="swiper-slide">
                    <div class="img-box">
                            <img src="resources/image-slider/Pic7.jpg">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                            <img src="resources/image-slider/Pic8.jpg">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                            <img src="resources/image-slider/Pic9.jpg">
                    </div>
                </div>
                  <div class="swiper-slide">
                    <div class="img-box">
                            <img src="resources/image-slider/Pic10.jpg">
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <br> <br> 
            <div class="swiper-pagination"></div>
        </div>
       
        </div>
        <div class="gallery-desc">
            <h1 class="animate__animated animate__bounceInDown">
                      A vacation home rental surrounded by lush greened that's perfect <br>
                      for reunions, birthdays,wedding and other occasions.
             </h1>
        </div>
        <div class="resort-details-container">
            
            <div class="category-container">
            <?php
            // Include the database connection
            include './db_connection.php';

            // Select category titles and descriptions from the database
            $sql = "SELECT categorytitle, categorydescription FROM `resortcategory_tbl` ORDER BY id ASC";
            $res = mysqli_query($conn, $sql);

            // Check if there are rows in the result
            if (mysqli_num_rows($res) > 0) {
                // Loop through the result and display category titles and descriptions
                while ($category = mysqli_fetch_assoc($res)) {
                    echo '<div class="title-description-container animate__animated animate__bounceInLeft">';
                    echo '<div class="cat-title"><h1>';
                    echo $category['categorytitle'];
                    echo '</h1></div>';
                    echo '<div class="hr-one"></div>';
                    echo '<div class="h50"></div>';
                    echo '<div class="cat-description animate__animated animate__bounceInLeft">';
                    echo '<p>';
                    echo $category['categorydescription'];
                    echo '</p></div>';
                    echo '<div class="space">';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                // Display a message if there are no categories
                echo '<p>No categories found</p>';
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>


        <div class="cards-images animate__animated animate__bounceInRight">
        <?php
        include './db_connection.php';

        $sql = "SELECT * FROM categoryimages_tbl ORDER BY id ASC";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($image = mysqli_fetch_assoc($res)) {
                echo '<div class="cat-images">';
                echo '<img src="./uploads/' . $image['img_url'] . '" alt="Image">';
                echo '</div>';
            }
        } else {
            echo '<p>No images found</p>';
        }

        mysqli_close($conn);
        ?>
        </div>

</div>

</div>
</section>
</body>
<footer>
<?php include './footer.php'; ?>  
</footer>
<script>
    var swiper = new Swiper(".card-slider", {
      slidesPerView: 4,
      spaceBetween: 5,
     // loop:true,
    //  speed: 1000,
     autoplay:{
       delay:2000,
     },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
   
        },
        480: {
          slidesPerView: 2,
    
        },
        500: {
          slidesPerView: 2,
    
        },
        768: {
          slidesPerView: 4,
        
        },
        1200: {
          slidesPerView: 5,
        
        },
      },
    });
  </script>
</html>
