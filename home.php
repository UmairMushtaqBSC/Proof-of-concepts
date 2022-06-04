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
        <div class="breadcrumb bg-light rounded-3 p-3 mb-4 col-12">
             <a class="col-10" href="#">Home</a>
             <a class="col-2" href="logout">logout</a>
        </div>

        
      </div>
  
      <div id="postConta" class="row">
  
      </div>
    </div>
  </section>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
   <!-- Custom scripts -->
   <script type="text/javascript">

var loadPosts = function () {

  var myurl = 'https://dummyapi.io/data/v1/post?limit=30';

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

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

loadPosts();
  </script>
  
</body>

</html>