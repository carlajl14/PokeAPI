<?php
include './controllers/PokemonController.php';
include './views/PokemonView.php';
include './models/PokemonModel.php';

$pokemonController = new PokemonController();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PokeAPI</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <h1>Pokémon</h1>
        <div class="d-flex">
            <div>
                <form method="POST" class="form">
                    <div class="form-group">
                        <label>Número de Pokémons a cargar: </label>
                        <input type="number" name="pokemons">
                        <button type="submit" class="btn btn-primary" name="update">Actualizar lista</button>
                    </div>
                    <div class="form-group mt-2">
                        <?php
                        // Cargar la información de los pokemons
                        $pokemonController->getOnePokemon();
                        ?>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2" name="data">Cargar datos del Pokemon</button>
                </form>
            </div>
            <div>
                <?php
                // Mostrar el pokemon seleccionado
                if (isset($_POST['data'])) {
                    $pokemonController->allPokemons();
                }
                ?>
            </div>
        </div>
    </body>
</html>
