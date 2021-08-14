
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Chatroom</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="icon" href="img/icons8-chat.gif">
    <meta name="theme-color" content="#7952b3">
    <!-- Custom styles for this template -->
    <link href="css/app.css" rel="stylesheet">
</head>
<body>
<?php
include "navbar.html";
?>
<main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Chatroom</h1>
            <p class="lead fw-normal">Chat with your mates without worrying anything using our free platform.</p>
            <form method="post" action="createroom.php">
                <div class="mb-3">
                    <label for="create_room" class="form-label">Enter Your Chatroom Name</label>
                    <input type="text" name="room" class="form-control" id="create_room">
                    <div id="emailHelp" class="form-text">We'll never share your details with anyone else.</div>
                </div>
            <button  type="submit" class="btn btn-outline-secondary">Let's Start</button>
            </form>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
