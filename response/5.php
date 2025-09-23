<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="overflow-hidden">
    <?php $value = $_POST['value']; ?>

    <!-- Aba 1: Conteúdo centralizado -->
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-white p-4 rounded shadow-sm w-100" style="max-width: 400px;">
            <h5 class="text-center mb-3">Resposta</h5>

            <div class="result bg-black rounded p-3">
                <p class="text-white">
                    <?= "Valor Inserido: ".($value);  ?>
                </p>
                <p class="text-white">
                    <?= "Parte Inteira: " .($value);  ?>
                </p>
                <p class="text-white">
                    <?= "Parte Decimal: " .($value);  ?>
                </p>
            </div>

            <div class="d-grid mt-3">
                <button class="btn btn-primary mt-3" onclick="history.back()">Voltar</button>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>