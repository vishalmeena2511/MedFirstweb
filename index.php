<!DOCTYPE html>
<html>
<?php

if(!isset($_REQUEST['submit']))
{
    $con=mysqli_connect("localhost","root","","altitude");
    if ($conn->connect_error) {
        die("Connection failed: " . $con->connect_error);
}

$mad=$_GET['medic'];
$sql="select * from medicine where and Medicine='$mad'";
$result = $con->query($sql);

$arr=mysqli_fetch_array($result,MYSQL_ASSOC);
$num_record=mysqli_num_rows($result);
$latitude=array_column($arr,'Latitude');
$longitude=array_column($arr,'Longitude');
$array = [];
while( $arr=mysqli_fetch_array($result,MYSQL_ASSOC))
{
    $array[] = $arr;
}
foreach( $array as $test )
    {
        echo "<br>".$test['ShopID'];
    }
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["ShopID"]. " - Name: ". $row["ShopName"]. " " . $row["Medicine"] . "<br>";
    }
} else {
    echo "0 results";
}
$a=array();


class CoordDistance
 {
    public $lat_a = 0;
    public $lon_a = 0;
    
    public $measure_unit = 'kilometers';

    public $measure_state = false;
    public $error = '';
        public function DistABB()

      {
          $delta_lat = $Latitude[i] - $this->lat_a ;
          $delta_lon = $Longitude[i] - $this->lon_a ;

          $earth_radius = 6372.795477598;

          $alpha    = $delta_lat/2;
          $beta     = $delta_lon/2;
          $a        = sin(deg2rad($alpha)) * sin(deg2rad($alpha)) + cos(deg2rad($this->lat_a)) * cos(deg2rad($this->lat_b)) * sin(deg2rad($beta)) * sin(deg2rad($beta)) ;
          $c        = asin(min(1, sqrt($a)));
          $distance = 2*$earth_radius * $c;
          $distance = round($distance, 4);      
          array_push($a,$distance);
      }
     public function DistAB()

      {
          $delta_lat = $Latitude[i] - $this->lat_a ;
          $delta_lon = $Longitude[i] - $this->lon_a ;

          $earth_radius = 6372.795477598;

          $alpha    = $delta_lat/2;
          $beta     = $delta_lon/2;
          $a        = sin(deg2rad($alpha)) * sin(deg2rad($alpha)) + cos(deg2rad($this->lat_a)) * cos(deg2rad($this->lat_b)) * sin(deg2rad($beta)) * sin(deg2rad($beta)) ;
          $c        = asin(min(1, sqrt($a)));
          $distance = 2*$earth_radius * $c;
          $distance = round($distance, 4);
          for($j=0;$j<=$num_record;$j++)
          {
            if(min(array($a))==$distance) 
            {
              $nearest_lat=$Latitude[i];
              $nearest_lon=$Longitude[i];
              echo $nearest_lat;
              break;
            }
          }
      }
    }
function getDist()
{
for($j=0;$j<=$num_record;$j++)
    {
            DistABB();
            DistAB();
    }
}
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MEDFIRST- A better way to find medicine</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style.css">                                  <!-- Hero slider style -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    
</head>

    <body>
        <section class="cd-hero">
            <ul class="cd-hero-slider autoplay">  
          
                <li class="selected">
                    <div class="cd-full-width">
                        <div class="tm-slide-content-div">
                            <form action="index.html" id="search-form">
                                <i class="fa fa-plus-square tm-slide-icon"></i>
                                <h2 style="text-shadow:2px 3px 6px grey">MedFirst</h2>
                                <p class="m-b-mid">Save Time + Efforts</p>
                                <div class="form-group" method="post" action="">
                                    <input name="medic" type="text" class="form-control center-block tm-max-w-400" id="input1" placeholder="Enter the name of Medicine">
                                <div id="demo"></div>
                              </div>                                
                                <a href="http://maps.google.com/?ie=UTF8&hq=&ll=<?php$nearest_lat?>,<?php$nearest_lon?>&z=13"><button type="submit" class="cd-btn">Get Directed</button></a>
                                
                            </form>                            
                        </div>                        
                    </div> <!-- .cd-full-width -->
                </li>

                

                
            </ul> <!-- .cd-hero-slider -->
        </section> <!-- .cd-hero -->
        <div class="container-fluid tm-section tm-section-2">
            <label class="label label-primary"><h1> Find the best shop in 2 steps! </h1></label>
            <div class="row tm-media-row tm-flex-container-reverse">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tm-flex-child-2">
                    <img src="img/tm-img-320x320-2.jpg" alt="Image" class="img-fluid img-circle img-thumbnail tm-media-img">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 tm-flex-child-1">
                    <div class="tm-media-text-container-left">
                        <h2 class="tm-media-title tm-gray-text">Type it</h2>
                        <p class="tm-media-description tm-gray-text-2">Enter the name of the medicine prescribed to you by your doctor.</p>    
                       </div>                    
                </div>

            </div>

            <div class="row tm-media-imgrow">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="img/tm-img-320x320-3.jpg" alt="Image" class="img-fluid img-circle img-thumbnail tm-media-img">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <div class="tm-media-text-container-right">
                        <h2 class="tm-media-title tm-gray-text">Find it</h2>
                        <p class="tm-media-description tm-gray-text-2">Select the highlighted shop, and you will get the directions of the pharmacy closest to you.</p>    
                    </div>                    
                </div>
            </div>
        </div>
         <section class="tm-section tm-section-3 tm-bg-purple">
            <div class="container-fluid">
            <h1 class="tm-text-white">About</h1> <br> <br>
            <p class="tm-text-white">Searching for the medicines around you cna be tiring, even more when you couldn't find the one medicine your doctor has prescribed to you. Our website will help you by making this tiring process easy. Because now you don't have to roam to different shops in the search for the medicines because now you can know if where you that medicine at a shop nearest to you. </p>
            </div>
        </section>
        <section class="center-block tm-section tm-section-4">
            <div class="container-fluid tm-section-3-inner">
                <div class="row center-block text-xs-center tm-section-3-header">
                    <div class="col-xs-12">
                        <h2 class="tm-section-3-title">Our Team</h2>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div id="tmCarousel" class="carousel slide tm-carousel" data-ride="carousel"> 
                        <!-- 
                        	Remove data-interval="false" to auto play
                        	Add data-interval="false" to disable auto play
                         -->

                            <ol class="carousel-indicators">
                                <li data-target="#tmCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#tmCarousel" data-slide-to="1" class=""></li>
                                <li data-target="#tmCarousel" data-slide-to="2" class=""></li>
                                <li data-target="#tmCarousel" data-slide-to="3" class=""></li>
                            </ol>

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="carousel-content">
                                        <div>
                                            <img src="img/tm-img-270x270-4.jpg" alt="Image" class="img-fluid img-circle img-thumbnail tm-media-img">
                                            <p class="text-xs-center tm-carousel-item-text"><b>Mudit Tripathi</b>, Team leader<br>
                                             Mudit has handled the backend of the project.</p>
                                        </div>
                                    </div>                               
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <div>
                                            <img src="img/tm-img-270x270-1.jpg" alt="Image" class="img-fluid img-circle img-thumbnail tm-media-img">
                                            <p class="text-xs-center tm-carousel-item-text"><b>Mahima Godara</b>, Design<br>
                                            Mahima Provided grace and beauty to the project by her designing.</p>
                                        </div>
                                    </div>                               
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <div>
                                            <img src="img/tm-img-270x270-2.jpg" alt="Image" class="img-fluid img-circle img-thumbnail tm-media-img">
                                            <p class="text-xs-center tm-carousel-item-text"><b>Vishal Meena</b>, Interfacing<br>
                                            Vishal handeled the interefacing and the API Integration</p>
                                        </div>
                                    </div>                                
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <div>
                                            <img src="img/tm-img-270x270-3.jpg" alt="Image" class="img-fluid img-circle img-thumbnail tm-media-img">
                                            <p class="text-xs-center tm-carousel-item-text"><b>Apurva Jain</b>,Content creator<br>
                                            Apurva provided all the content required foe the developmenyt of the project.</p>
                                        </div>
                                    </div>                                
                                </div>

                            </div>
                            
                        </div> 
                    </div>
                </div>
            </div>            
        </section>

        <!-- Contact section -->
        <section class="tm-bg-purple tm-section">
            <div class="container-fluid tm-section-5-inner">
                <div class="row">
                    <div class="col-xs-12 tm-text-white text-xs-center">
                        <h2 class="tm-section-3-title">Contact Us</h2>
                        <p class="tm-section-3-description">You can put your queries regarding the website on our social media or simply write to us below.</p>
                    </div>
                </div>
                <div class="row">
                    <form action="index.html" method="post" class="tm-contact-form">
                        
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required/>
                            </div>
                            <div class="form-group">
                                <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject" required/>
                            </div>    
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Your message" required></textarea>
                            </div>    
                        </div>

                        <div class="col-xs-12">
                            <button type="submit" class="cd-btn pull-xs-right">Send</button>                              
                        </div>
                    </form>  
                </div>

                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <div class="tm-social-icons-container">
                            <a href="#" class="tm-social-icon-link"><i class="fa fa-facebook tm-social-icon"></i></a>
                            <a href="#" class="tm-social-icon-link"><i class="fa fa-google-plus tm-social-icon"></i></a>
                            <a href="#" class="tm-social-icon-link"><i class="fa fa-twitter tm-social-icon"></i></a>

                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <footer class="col-xs-12 text-xs-center">
                        <p class="tm-text-white tm-copyright-text">Copyright &copy; 2018 <b>MedFirst<b> </p>
                    </footer>
                </div>
            </div>
        </section>

        <!-- load JS files -->

<script>
    var x = document.getElementById("demo");
    function getLocation() {
        if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
        }
}
    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude; 
}
</script>

        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) --> 
        <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/hero-slider-script.js"></script>            <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="js/jquery.touchSwipe.min.js"></script>         <!-- http://labs.rampinteractive.co.uk/touchSwipe/demos/ -->
        <script>     
       
            $(document).ready(function(){

                /* Auto play bootstrap carousel 
                * http://stackoverflow.com/questions/13525258/twitter-bootstrap-carousel-autoplay-on-load
                -----------------------------------------------------------------------------------------*/                
                $('.carousel').carousel({
                  interval: 3000
                })

                /* Enable swiping carousel for tablets and mobile
                 * http://lazcreative.com/blog/adding-swipe-support-to-bootstrap-carousel-3-0/
                 ---------------------------------------------------------------------------------*/
                if($(window).width() <= 991) {
                    $(".carousel-inner").swipe( {
                        //Generic swipe handler for all directions
                        swipeLeft:function(event, direction, distance, duration, fingerCount) {
                            $(this).parent().carousel('next'); 
                        },
                        swipeRight: function() {
                            $(this).parent().carousel('prev'); 
                        },
                        //Default is 75px, set to 0 for demo so any distance triggers swipe
                        threshold:0
                    });
                }  

                /* Handle window resize */
                $(window).resize(function(){
                    if($(window).width() <= 991) {
                        $(".carousel-inner").swipe( {
                            //Generic swipe handler for all directions
                            swipeLeft:function(event, direction, distance, duration, fingerCount) {
                                $(this).parent().carousel('next'); 
                            },
                            swipeRight: function() {
                                $(this).parent().carousel('prev'); 
                            },
                            //Default is 75px, set to 0 for demo so any distance triggers swipe
                            threshold:0
                        });
                     }
                });                             
            });

        </script>             

</body>
</html>