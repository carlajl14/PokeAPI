<?php

class PokemonModel {
    
    /**
     * Obtener el número de pokemons a mostrar
     * 
     * @param type $num
     * @return type
     */
    public function getPokemons($num) {
        $urlmiservicio = "https://pokeapi.co/api/v2/pokemon/?limit=".$num."&offset=0";
        $conexion = curl_init();
        //Url de la petición
        curl_setopt($conexion, CURLOPT_URL, $urlmiservicio);
        //Tipo de petición
        curl_setopt($conexion, CURLOPT_HTTPGET, TRUE);
        //Tipo de contenido de la respuesta
        curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        //para recibir una respuesta
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($conexion);
        if ($res) {
            return $res;
        }
        curl_close($conexion);
    }
    
    /**
     * Devolver el pokemon pasado por parámetro
     * 
     * @return type
     */
    public function getPokemon($id) {
        $urlmiservicio = "https://pokeapi.co/api/v2/pokemon/" . $id;
        $conexion = curl_init();
        //Url de la petición
        curl_setopt($conexion, CURLOPT_URL, $urlmiservicio);
        //Tipo de petición
        curl_setopt($conexion, CURLOPT_HTTPGET, TRUE);
        //Tipo de contenido de la respuesta
        curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        //para recibir una respuesta
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($conexion);
        if ($res) {
            return $res;
        }
        curl_close($conexion);
    }
}

