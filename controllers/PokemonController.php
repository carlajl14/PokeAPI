<?php

class PokemonController {
    
    private $model;
    private $view;
    
    public function __construct() {
        $this->model = new PokemonModel();
        $this->view = new PokemonView();
    }
    
    /**
     * Función para todos los pokemons
     */
    public function allPokemons() {
        $id = $_POST['pokemon'];
        $pokemons = $this->model->getPokemon($id);
        
        $this->view->viewPokemon($pokemons);
    }
    
    /**
     * Obtener información de los pokemons
     */
    public function getOnePokemon() {
        $num = $_POST['pokemons'];
        $pokemon = $this->model->getPokemons($num);
        
        $this->view->viewSelectPokemon($pokemon);
    }
}
