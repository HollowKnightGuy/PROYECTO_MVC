<?php

    namespace Controllers;
    use Models\Paciente;

    class PacienteController {
        private Paciente $patient;

        function __construct()
        {
            $this->patient=new Paciente();
        }

        public function mostrarTodos(){
            $todos_mis_pacientes=$this->patient->getAll();
            require_once 'views/paciente/mostrar_todo.php';
        }
    }

?>