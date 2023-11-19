<!DOCTYPE html>
<html>
<head>
    
    <title>NATURE✔</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>

<?php include 'menu.php'?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/3.png" alt="Areial Beauty" width="1100" height="600">
      <div class="carousel-caption">
        <h3>Areial Beauty</h3>
        <p>Such a great time!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/4.png" alt="Chicago" width="1100" height="600">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/5.png" alt="New York" width="1100" height="600">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class='my-5'>
      <div class='py-5'>
               <h2 class='text-center'>Nature</h2>
     </div>
 <div class='container-fluid'>  
     <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
    <img src="image/6.png" width='400' height='300' aboutimg>
           </div>
           <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">Nature Is Life.</h2>
           <p  py-5>Nature is a breathtaking tapestry of life, where every element harmoniously intertwines. From the majestic mountains to the serene rivers, nature's beauty knows no bounds. It is a sanctuary that nurtures and sustains all living beings. The vibrant colors of flowers and the soothing melody of birds remind us of the wonders of life. Nature is not just a part of our existence; it is our lifeblood, reminding us to cherish and protect the precious gift of life.</p>
          <a href="Nature.php" class="btn btn-success">See Full Detail</a>
         </div>
     </div>
</div>
</section>

<section class='my-5'>
      <div class='py-5'>
               <h2 class='text-center'>About Us</h2>
              </div>
        <div class=''container-fluid">
               <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                               <div class="card">
                                   <img class="card-img-top" src="image/11.jpg" alt="Card image">
                                   <div class="card-body">
                                           <h4 class="card-title">Beautiful Scenery</h4>
                                           <p class="card-text">White Mountains.</p>
                                          <a href="https://en.wikipedia.org/wiki/Mountain" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        </div>
                     <div class="col-lg-4 col-md-4 col-12">
                               <div class="card">
                                     <img class="card-img-top" src="image/21.jpg" alt="Card image">
                                        <div class="card-body">
                                           <h4 class="card-title">Taj Mahal</h4>
                                           <p class="card-text">One Out Of Seven Wonders.</p>
                                           <a href="https://en.wikipedia.org/wiki/Taj_Mahal" class="btn btn-primary">See Profile</a>
                                  </div>
                              </div>
                          </div>
                        <div class="col-lg-4 col-md-4 col-12">
                               <div class="card">
                                    <img class="card-img-top" src="image/22.jpg" alt="Card image">
                                       <div class="card-body">
                                           <h4 class="card-title">Pyramid Giza</h4>
                                           <p class="card-text">Ancient Egyptian Construction.</p>
                                          <a href="https://en.wikipedia.org/wiki/Giza" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        </div>
              <a href="About.php" class="btn btn-success "><center>See Full Detail</center></a>
                 </div>
            </div>
</section>

<?php include 'gallery.php' ?>
<section class='my-5'>
      <div class='py-5'>
               <h2 class='text-center'>Contacts</h2>
                   </div>
                    <div class="w-50 m-auto">
                        <form action="userinfo.php" methos="POST">
                             <div class="form-group">
                                  <label>Username:</label>
                                   <input type="text" name="user" autocomplete="off" class="form-control">
                               </div>
                                  <div class="form-group">
                                  <label>Email Id:</label>
                                   <input type="text" name="email" autocomplete="off" class="form-control">
                               </div>
                                    <div class="form-group">
                                  <label>Mobile Number:</label>
                                   <input type="text" name="number" autocomplete="off" class="form-control">
                               </div>
                                    <div class="form-group">
                                  <label>Comments:</label>
                                   <textarea class="form-control" name="comments"></textarea>
                               </div>
                                <button type="submit" class="btn btn-success">Submit</button>

                        </form>
                 </div>
</section>

<footer>
 <center><p class='p-3 bg-dark text-white'>@Creator : Aayush Kumar Kurmi</p></center>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>