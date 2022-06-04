<!DOCTYPE html>
<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
        header("location:index.php");
        exit;
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/bootstrap-profiles.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <!-- Start your project here-->
  <section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div>
      </div>
  
      <div id="postConta" class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img id="profileImage" src="https://randomuser.me/api/portraits/med/women/5.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
              <h5 id="userName" class="my-3">John Smith</h5>
              <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary">Follow</button>
                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
              </div>
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fas fa-globe fa-lg text-warning"></i>
                  <p class="mb-0">https://mdbootstrap.com</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                  <p class="mb-0">@mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p id="fullUserName" class="text-muted mb-0">Johnatan Smith</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">ID</p>
                </div>
                <div class="col-sm-9">
                  <p id="id" class="text-muted mb-0">--</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p id="email" class="text-muted mb-0">example@example.com</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Phone</p>
                </div>
                <div class="col-sm-9">
                  <p id="phone" class="text-muted mb-0">(097) 234-5678</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Birthday</p>
                </div>
                <div class="col-sm-9">
                  <p id="birthday" class="text-muted mb-0">--</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Gender</p>
                </div>
                <div class="col-sm-9">
                  <p id="gender" class="text-muted mb-0">--</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Timezone</p>
                </div>
                <div class="col-sm-9">
                  <p id="timezone" class="text-muted mb-0">--</p>
                </div>
              </div>
              
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                  <p id="address" class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                </div>
              </div>
            </div>
          </div>
          

        </div>
      </div>
    </div>
  </section>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
   <!-- Custom scripts -->
   <script type="text/javascript">

var loadProfile = function () {

  var url_string = window.location.href;
var url = new URL(url_string);
var id = url.searchParams.get("id");

  var myurl = 'https://dummyapi.io/data/v1/user/'+id;

  $.ajax({
    type : 'GET',
    beforeSend: function(request) {
      request.setRequestHeader("app-id", "629207e5db43d0291d8c22a4");
    },
    url: myurl,
    crossDomain: true,
    contentType: "application/json",
   // data : data1,
       dataType: 'json',
    //    data: '{"keyword":"'+kw+'","userLatitude":"'+lat+'","userLongitude":"'+lng+'"}',
    success : function(data) {
            console.log(data);
            $("#profileImage").attr("src", data.picture);
            $("#userName").html(capitalizeFirstLetter(data.title)+' '+capitalizeFirstLetter(data.firstName)+' '+capitalizeFirstLetter(data.lastName));
            $("#fullUserName").html(capitalizeFirstLetter(data.firstName)+' '+capitalizeFirstLetter(data.lastName));
            $("#id").html(data.id);
            $("#birthday").html(data.dateOfBirth.substring(0, 10).replace("T", " "));
            $("#email").html(data.email);
            $("#gender").html(capitalizeFirstLetter(data.gender));
            $("#timezone").html(data.location.timezone);
            $("#phone").html(data.phone);
            $("#address").html(data.location.street+" "+data.location.city+", "+data.location.state+", "+data.location.country);


    },
    error: function (responseData, textStatus, errorThrown) {
                console.log(responseData);

    }
  }); 
}

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}


var loadPosts = function () {

  var url_string = window.location.href;
var url = new URL(url_string);
var id = url.searchParams.get("id");

var myurl = 'https://dummyapi.io/data/v1/user/'+id+'/post?limit=10';

$.ajax({
  type : 'GET',
  beforeSend: function(request) {
    request.setRequestHeader("app-id", "629207e5db43d0291d8c22a4");
  },
  url: myurl,
  crossDomain: true,
  contentType: "application/json",
 // data : data1,
     dataType: 'json',
  //    data: '{"keyword":"'+kw+'","userLatitude":"'+lat+'","userLongitude":"'+lng+'"}',
  success : function(data) {
          console.log(data);
        $.each(data.data, function(index, post) {
          console.log(post);

          var post_html = '<div class="mt-3 col-12 col-md-12 col-lg-6 col-xl-4"><div class="card" style="border-radius: 15px;"><div class="card-body p-4">'+
          '<div class="d-flex text-black"><img src="'+post.owner.picture+'" alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3" style="width: 70px;"><div class="flex-grow-1 ms-3">' +
                '<a on href="profile?id='+post.owner.id+'"><h5 class="mb-1">'+capitalizeFirstLetter(post.owner.title)+' '+capitalizeFirstLetter(post.owner.firstName)+' '+capitalizeFirstLetter(post.owner.lastName)+'</h5></a><small class="mb-2 pb-1" style="color: #2b2a2a;">'+post.publishDate.substring(0, 10)+'</small></div></div><div class="mt-2 d-flex text-black"><div class="flex-shrink-0">' +
                '<img src="'+post.image+'" alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;"></div><div class="flex-grow-1 ms-3">'+
                '<p class="mb-2 pb-1 mt-4" style="color: #2b2a2a;">'+post.text+'</p>' +
                '<span class=""><i class="fas fa-thumbs-up"> '+post.likes+'</i></span><div class="d-flex pt-1">'+
                '<small class="mb-2 pb-1" style="color: #2b2a2a;">Time: '+post.publishDate.substring(10, 19).replace("T", " ")+'</small></div></div></div></div></div></div>';

           
             
                      $("#postConta").append(post_html);
      });

  },
  error: function (responseData, textStatus, errorThrown) {
              console.log(responseData);

  }
}); 
}

loadProfile();
loadPosts();
  </script>
  
</body>

</html>