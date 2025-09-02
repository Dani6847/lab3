<?php

require_once("Autor.php");

class ImprimirAutor {
    public function getInfo(Autor $autor): string {
        // Imprime los atributos del autor (usando getters como pide la guía)
        return "Autor: " . $autor->getNombre() . " (" . $autor->getNacionalidad() . ")";
    }
}
