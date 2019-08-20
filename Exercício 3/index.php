<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            3º Exercício
        </title>
    </head>

    <body>
        <div class="main-content">
            <form method="POST" action="process.php" id="main-content-form">
                <p>
                    <input type="text" name="manufacturer" class="form-items" id="manufacturer-input" placeholder="Fabricante" required>
                </p>

                <p>
                    <input type="text" name="brand" class="form-items" id="brand-input" placeholder="Marca" required>

                    <input type="text" name="model" class="form-items" id="model-input" placeholder="Modelo" required>
                </p>

                <p>
                    <input type="number" name="manufacture-year" class="form-items" id="manufacture-year-input" placeholder="Ano de Fabricação" required>

                    <input type="number" name="mileage" class="form-items" id="mileage-input" placeholder="Kilometragem" required>
                </p>

                <div class="submit-buttons-box">
                    <p>
                        <input type="reset" class="submit-buttons" id="reset-button">

                        <input type="submit" class="submit-buttons" id="submit-button">
                    </p>
                </div>
            </form>
        </div>
    </body>
</html>