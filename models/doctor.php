<?php
    namespace Models;

    class Doctor{
        
        function __construct(

            private string $id,
            private string $nombre,
            private string $apellidos,
            private string $telefono,
            private string $especialidad
            
        ){}

            /**
             * Get the value of id
             */ 
            public function getId()
            {
                        return $this->id;
            }

            /**
             * Set the value of id
             *
             * @return  self
             */ 
            public function setId($id)
            {
                        $this->id = $id;

                        return $this;
            }

            /**
             * Get the value of nombre
             */ 
            public function getNombre()
            {
                        return $this->nombre;
            }

            /**
             * Set the value of nombre
             *
             * @return  self
             */ 
            public function setNombre($nombre)
            {
                        $this->nombre = $nombre;

                        return $this;
            }

            /**
             * Get the value of apellidos
             */ 
            public function getApellidos()
            {
                        return $this->apellidos;
            }

            /**
             * Set the value of apellidos
             *
             * @return  self
             */ 
            public function setApellidos($apellidos)
            {
                        $this->apellidos = $apellidos;

                        return $this;
            }

            /**
             * Get the value of telefono
             */ 
            public function getTelefono()
            {
                        return $this->telefono;
            }

            /**
             * Set the value of telefono
             *
             * @return  self
             */ 
            public function setTelefono($telefono)
            {
                        $this->telefono = $telefono;

                        return $this;
            }

            /**
             * Get the value of especialidad
             */ 
            public function getEspecialidad()
            {
                        return $this->especialidad;
            }

            /**
             * Set the value of especialidad
             *
             * @return  self
             */ 
            public function setEspecialidad($especialidad)
            {
                        $this->especialidad = $especialidad;

                        return $this;
            }

    }