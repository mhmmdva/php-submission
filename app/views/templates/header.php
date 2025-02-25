<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $data['judul']; ?></title>
   <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
   <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">

   <!-- jquery link-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
   <script src="<?= BASEURL; ?>/js/jquery.js"></script>

</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container">
         <a class="text-white navbar-brand" href="<?= BASEURL; ?>">PHP Submission</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ">
               <a class="text-white nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
               <a class="text-white nav-link" href="<?= BASEURL; ?>/about">About</a>
               <a class="text-white nav-link" href="<?= BASEURL; ?>/article">Article</a>
            </div>
         </div>
      </div>
   </nav>