<?php

class Autor {
    private string $nombre;
    private string $nacionalidad;

    public function __construct(string $nombre, string $nacionalidad) {
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
    }

    // Getters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getNacionalidad(): string {
        return $this->nacionalidad;
    }

    // Setters
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setNacionalidad(string $nacionalidad): void {
        $this->nacionalidad = $nacionalidad;
    }

    public function getInfo(): string {
        return "Autor: {$this->nombre} ({$this->nacionalidad})";
    }
}
