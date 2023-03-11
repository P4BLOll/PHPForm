<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="container">

            <form>

                <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" id="dois" aria-current="page" href="#">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link disabled" id="dois">Consultar</a>
                            </li>
                        </ul>
                        </div>
                    </div> 
                </nav>

                <div class="inputs">
                    <h2>Cadastrar - Agendamento de Potenciais Clientes</h2>
                    <p>Sistema Utilizado para Agendamento de Serviços</p>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>

                    <div class="form-outline">
                        <label class="form-label" for="typePhone">Telefone:</label>
                        <input type="tel" id="typePhone" class="form-control" placeholder="(xx)xxxxx-xxxx">
                    </div>

                    <div class="col-auto">
                        <label for="formGroupExampleInput" class="form-label">Origem</label>
                        <select class="form-select" id="autoSizingSelect">
                            <option value="1">Celular</option>
                            <option value="2">Outro...</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Data do Contato</label>
                        <input type="date" class="form-control" id="formGroupExampleInput" value="dd/mm/yy" min="200-01-01" max="2025-12-31">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Observação:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>

                </div>
                
            </form>
        </div>
    </body>
</html>