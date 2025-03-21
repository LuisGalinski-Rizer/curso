<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Prompts\Table;

class MeuControlador extends Controller
{
    public function produtos() {
        echo "<h1>Produtos</h1>";
        echo "<ol>";
        echo "<li>Celular</li>";
        echo "<li>Impressora</li>";
        echo "<li>Tablelet</li>";
        echo "<li>Fone</li>";
        echo "</ol>";
    }

    public function getNome() {
        return "nome teste";
    }


    public function getIdade() {
        return "300 anos";
    }

    public function multiplicar($n1, $n2) {
        return $n1 * $n2;
    }
}
