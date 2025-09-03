<?php

require_once("Autor.php");
require_once("ImprimirAutor.php");
require_once("IPublicable.php");
require_once("Libro.php");
require_once("Revista.php");

// Autor inicial
$autorElenaWhite = new Autor("Elena G. de White", "Americana");
echo $autorElenaWhite->getInfo() . "\n";

// (Paso 10) Usar la clase ImprimirAutor
$imprimirAutor = new ImprimirAutor();
echo $imprimirAutor->getInfo($autorElenaWhite) . "\n";

// (Paso 7) Crear 3 autores más
$autor1 = new Autor("Gabriel García Márquez", "Colombiana");
$autor2 = new Autor("Mario Vargas Llosa", "Peruana");
$autor3 = new Autor("Isabel Allende", "Chilena");

// (Paso 12) Crear 2 Libros y 2 Revistas
$libro1   = new Libro("Cien años de soledad", 1967, $autor1);
$libro2   = new Libro("La ciudad y los perros", 1963, $autor2);
$revista1 = new Revista("Letras y Artes", 2024, $autor3, "Mensual");
$revista2 = new Revista("Cultura y Ciencia", 2025, $autorElenaWhite, "Trimestral");

// Arreglo polimórfico de publicables
$publicables = [$libro1, $libro2, $revista1, $revista2];

foreach ($publicables as $item) {
    echo $item->getInfo() . "\n\n";
}
