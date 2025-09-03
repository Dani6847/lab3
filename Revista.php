<?php

require_once("Autor.php");
require_once("IPublicable.php");

class Revista implements IPublicable {
    private string $titulo;
    private int $anio;
    private Autor $autor;
    private string $periodicidad;

    public function __construct(string $titulo, int $anio, Autor $autor, string $periodicidad) {
        $this->titulo = $titulo;
        $this->anio = $anio;
        $this->autor = $autor;
        $this->periodicidad = $periodicidad;
    }

    public function getInfo(): string {
        return "Revista: {$this->periodicidad} - {$this->titulo} ({$this->anio})\n" . $this->autor->getInfo();
    }
}
