<?php
// TaskModel.php - Gerencia os dados e a lógica de negócio

class TaskModel {
    private $tasks = [
        'Comprar leite',
        'Estudar padrão MVC',
        'Pagar contas'
    ];

    /**
     * Retorna todas as tarefas.
     * @return array
     */
    public function getAllTasks() {
        return $this->tasks;
    }

    /**
     * Adiciona uma nova tarefa à lista (Lógica de negócio).
     * @param string $taskName
     */
    public function addTask($taskName) {
        // Lógica de validação ou persistência de dados real (em um app real)
        $this->tasks[] = $taskName;
    }
}
