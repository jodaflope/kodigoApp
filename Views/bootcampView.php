<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kodigoApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Welcome to kodigoApp</h1>
    <h2 class="text-center">All Bootcamps</h2>
    <div class="container">
        <div class="row">

            <?php foreach ($bootcamps as $bootcamp) : ?>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://intensadigital.com/storage/servicios/diseno-desarrollo-web/desarrollo-web.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $bootcamp ['title']; ?></h5>
                                <p class="card-text"><?php echo $bootcamp ['description']; ?></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>