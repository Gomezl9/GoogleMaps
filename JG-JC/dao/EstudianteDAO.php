<?php
    include_once '../config/database.php';
    include_once '../dto/EstudianteDTO.php';

    class EstudianteDAO {
        private $conn;

        public function __construct() {
            // Intenta obtener la conexión usando la clase Database
            $this->conn = Database::getInstance()->getConnection();
            if (!$this->conn) {
                die("Error al conectar con la base de datos.");
            }
        }

        public function insertarEstudiante(EstudianteDTO $estudiante) {
            // Consulta preparada para insertar los datos
            $query = "INSERT INTO datosestudiantes 
                    (cedula, nombres, apellidos, direccion, ubicacion_residencia_lat, ubicacion_residencia_lng, direccion_trabajo, ubicacion_trabajo_lat, ubicacion_trabajo_lng) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            // Prepara la consulta
            $stmt = $this->conn->prepare($query);

            if (!$stmt) {
                die("Error al preparar la consulta: " . $this->conn->error);
            }

            $stmt->bind_param(
                "ssssddsdd",
                $estudiante->getCedula(),
                $estudiante->getNombres(),
                $estudiante->getApellidos(),
                $estudiante->getDireccion(),
                $estudiante->getUbicacionResidenciaLat(),
                $estudiante->getUbicacionResidenciaLng(),
                $estudiante->getDireccionTrabajo(),
                $estudiante->getUbicacionTrabajoLat(),
                $estudiante->getUbicacionTrabajoLng()
            );

            // Ejecuta la consulta y verifica si fue exitosa
            if (!$stmt->execute()) {
                echo "Error al ejecutar la consulta: " . $stmt->error;
            } else {
                echo "Datos guardados exitosamente.";
            }

            // Cierra la consulta
            $stmt->close();
        }
    }
?>
