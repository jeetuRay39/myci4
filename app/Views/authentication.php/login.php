<!doctype html>
<html lang="en">

<head>
  <title>Codeigniter 4</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js"
     integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

</head>

<body>
  <header>
  </header>
  <main>
    <div class="card-body">
        <form action="<?= base_url('students/add') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-2">
                <label >Name</label>
                <input type="text" name="name" class="form-control" placeholder="enter your name" Required>
            </div>
            <div class="form-group mb-2">
                <label >Email</label>
                <input type="text" name="email" class="form-control" placeholder="enter your email" Required>
            </div>
            <div class="form-group mb-2">
                <label >Phone</label>
                <input type="text" name="password" class="form-control" placeholder="enter your phonenumber" Required>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mt-2 " > Login</button>
            </div>
            <div class="form-group">
            <a href="<?=base_url('/register') ?>" class="btn btn-primary btn-sm mt-2">Register</a>
            </div>

        </form>
        
    </div>




  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>