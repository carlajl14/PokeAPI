<?php

class PokemonView {
    
    public function viewSelectPokemon($pokemon) {
        $poke = json_decode($pokemon, true);
        echo '<select name="pokemon" class="form-control">';
        //echo '<option value="">Elige un pokemon</option>';
        foreach ($poke['results'] as $p) {
            $url = $p['url'];
            $parts = explode('/', rtrim($url, '/'));
            $number = $parts[count($parts) - 1];
            //$number = substr($p['url'], -3, -1);
            //$url = substr($p['url'], -2, -1);
            $numbers = $parts[count($parts) - 1];
            
            if ($number <= 9) {
                echo '<option value="'. $number .'">'. $p['name'] . ' (ID: '. $number .')</option>';
            } else {           
                echo '<option value="'. $numbers .'">'. $p['name'] . ' (ID: '. $numbers .')</option>';
            }
        }
        echo '</select>';
    }
    
    /**
     * Mostrar la tarjeta con el pokemon
     * 
     * @param type $pokemons
     */
    public function viewPokemon($pokemons) {
        $pokemon = json_decode($pokemons, true);
        echo '<div class="container d-flex flex-wrap">';
        echo '<div class="card">';
        echo '<div class="card-header">';
        foreach ($pokemon['forms'] as $poke) {
            echo ucfirst($poke['name']);
        }
        echo '</div>';
        echo '<div class="card-body">';
        //foreach($pokemon['sprites'] as $p) {
        $poke = $pokemon['sprites'];
        echo '<img src="'. $poke['front_default'] .'"/>';
        //}
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
