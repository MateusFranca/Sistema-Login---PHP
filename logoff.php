<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Logoff</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body text-center">
                        <?php
                        // Iniciar a sessão
                        session_start();

                        // Encerrar a sessão
                        session_unset();
                        session_destroy();

                        echo "<h2 class='card-title'>Sessão encerrada</h2>";
                        echo "<p class='card-text'>Você foi desconectado com sucesso.</p>";
                        echo "<a href='login.php' class='btn btn-primary'>Login</a>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-hzBBuSj5usirgTUIbnkdo2OyGYYC3tjFsXu82CrqGo7mu4e4MZZKxQZSGJwCPbo3" crossorigin="anonymous"></script>
</body>

</html>
