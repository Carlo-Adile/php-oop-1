<?php
require_once __DIR__ . "/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP e OOP</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  
  <div id="app">
    <header id="my_header">
      <nav class="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" id="my_navHead">Productions</a>
        </div>
      </nav>
    </header>

    <main>
      <div class="container-xl py-4">
        <div class="row">
          <div class="col">
            <div class="card">
              <ul class="list-group list-group-flush">
                <li class="list-group-item" v-for="production in productions" :key="production.id">
                  <h5>{{ production.title }}</h5>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </main>



  </div>

<!-- axios -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
<!-- vue -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- app.js -->
<script src='./assets/js/app.js'></script>

</body>
</html>