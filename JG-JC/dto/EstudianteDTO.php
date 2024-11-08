<?php
    class EstudianteDTO {
        private $cedula;
        private $nombres;
        private $apellidos;
        private $direccion;
        private $ubicacionResidenciaLat;
        private $ubicacionResidenciaLng;
        private $direccionTrabajo;
        private $ubicacionTrabajoLat;
        private $ubicacionTrabajoLng;

        public function __construct($cedula, $nombres, $apellidos, $direccion, $ubicacionResidenciaLat, $ubicacionResidenciaLng, $direccionTrabajo, $ubicacionTrabajoLat, $ubicacionTrabajoLng) {
            $this->cedula = $cedula;
            $this->nombres = $nombres;
            $this->apellidos = $apellidos;
            $this->direccion = $direccion;
            $this->ubicacionResidenciaLat = $ubicacionResidenciaLat;
            $this->ubicacionResidenciaLng = $ubicacionResidenciaLng;
            $this->direccionTrabajo = $direccionTrabajo;
            $this->ubicacionTrabajoLat = $ubicacionTrabajoLat;
            $this->ubicacionTrabajoLng = $ubicacionTrabajoLng;
        }

        // Getters y Setters para cada propiedad
        public function getCedula() { 
            return $this->cedula; 
        }

        public function getNombres() {
            return $this->nombres;
        }

        public function getApellidos() {
            return $this->apellidos;
        }

        public function getDireccion() {
            return $this->direccion;
        }

        public function getUbicacionResidenciaLat() {
            return $this->ubicacionResidenciaLat;
        }

        public function getUbicacionResidenciaLng() {
            return $this->ubicacionResidenciaLng;
        }

        public function getDireccionTrabajo() {
            return $this->direccionTrabajo;
        }
        
        public function getUbicacionTrabajoLat() {
            return $this->ubicacionTrabajoLat;
        }

        public function getUbicacionTrabajoLng() {
            return $this->ubicacionTrabajoLng;
        }
    }
?>
