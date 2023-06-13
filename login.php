<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Login</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="cadastro_usuario.php">Cadastro</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container d-flex justify-content-center">
    <div class="col-lg-6">
      <h2 class="text-center">Login</h2>
      <form action="processar_login.php" method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Nome de usuário:</label>
          <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha:</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-hzBBuSj5usirgTUIbnkdo2OyGYYC3tjFsXu82CrqGo7mu4e4MZZKxQZSGJwCPbo3" crossorigin="anonymous"></script>
</body>

</html>
