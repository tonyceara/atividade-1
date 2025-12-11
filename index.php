<?php
// index.php - Ponto de entrada (Roteador/Front Controller)

require_once 'TaskController.php';

// Instancia o Controller
$controller = new TaskController();

// Chama a ação/método padrão (index)
$controller->index();
