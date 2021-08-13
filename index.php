
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
<header class="site-header sticky-top py-1">
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid" style="justify-content: unset">
            <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="d-inline-block align-text-top" width="30" height="24" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);"><defs><clipPath id="__lottie_element_2"><rect width="48" height="48" x="0" y="0"></rect></clipPath></defs><g clip-path="url(#__lottie_element_2)"><g style="display: block;" transform="matrix(1,0,0,1,29,29)" opacity="1"><g opacity="1" transform="matrix(1,0,0,1,0,0)"><path fill="rgb(21,101,192)" fill-opacity="1" d=" M-9,7 C-9,7 7,7 7,7 C7,7 13,13 13,13 C13,13 13,-9 13,-9 C13,-11.208999633789062 11.208999633789062,-13 9,-13 C9,-13 -9,-13 -9,-13 C-11.208999633789062,-13 -13,-11.208999633789062 -13,-9 C-13,-9 -13,3 -13,3 C-13,5.209000110626221 -11.208999633789062,7 -9,7"></path></g></g><g transform="matrix(1,0,0,1,19.5,19)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,0,0)"><path fill="rgb(33,150,243)" fill-opacity="1" d=" M9.5,7 C9.5,7 -7.5,7 -7.5,7 C-7.5,7 -13.5,13 -13.5,13 C-13.5,13 -13.5,-9 -13.5,-9 C-13.5,-11.208999633789062 -11.708999633789062,-13 -9.5,-13 C-9.5,-13 9.5,-13 9.5,-13 C11.708999633789062,-13 13.5,-11.208999633789062 13.5,-9 C13.5,-9 13.5,3 13.5,3 C13.5,5.209000110626221 11.708999633789062,7 9.5,7"></path></g></g><g transform="matrix(0,0,0,0,42,14.058683395385742)" opacity="1" style="display: none;"><g opacity="1" transform="matrix(1,0,0,1,0,0)"><path fill="rgb(21,101,192)" fill-opacity="1" d=" M-9,7 C-9,7 7,7 7,7 C7,7 13,13 13,13 C13,13 13,-9 13,-9 C13,-11.208999633789062 11.208999633789062,-13 9,-13 C9,-13 -9,-13 -9,-13 C-11.208999633789062,-13 -13,-11.208999633789062 -13,-9 C-13,-9 -13,3 -13,3 C-13,5.209000110626221 -11.208999633789062,7 -9,7"></path></g></g><g transform="matrix(0,0,0,0,6,14.056793212890625)" opacity="1" style="display: none;"><g opacity="1" transform="matrix(1,0,0,1,0,0)"><path fill="rgb(33,150,243)" fill-opacity="1" d=" M9.5,7 C9.5,7 -7.5,7 -7.5,7 C-7.5,7 -13.5,13 -13.5,13 C-13.5,13 -13.5,-9 -13.5,-9 C-13.5,-11.208999633789062 -11.708999633789062,-13 -9.5,-13 C-9.5,-13 9.5,-13 9.5,-13 C11.708999633789062,-13 13.5,-11.208999633789062 13.5,-9 C13.5,-9 13.5,3 13.5,3 C13.5,5.209000110626221 11.708999633789062,7 9.5,7"></path></g></g></g></svg>
            </a><a href="#" class="text-decoration-none">Chatroom</a>
            <ul class="nav" style="justify-content: end!important;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Instructions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
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
</body>
</html>
