<?php
    include_once '../dto/EstudianteDTO.php';
    include_once '../dao/EstudianteDAO.php';

    if (isset($_POST['send'])) {
        $cedula = $_POST['cedula'];
        $nombres = $_POST['name'];
        $apellidos = $_POST['apellidos'];
        $direccion = $_POST['direccion'];
        $ubicacionResidenciaLat = $_POST['ubicacion_residencia_lat'];
        $ubicacionResidenciaLng = $_POST['ubicacion_residencia_lng'];
        $direccionTrabajo = $_POST['direccion_trabajo'];
        $ubicacionTrabajoLat = $_POST['ubicacion_trabajo_lat'];
        $ubicacionTrabajoLng = $_POST['ubicacion_trabajo_lng'];

        // Crear el DTO
        $estudiante = new EstudianteDTO($cedula, $nombres, $apellidos, $direccion, $ubicacionResidenciaLat, $ubicacionResidenciaLng, $direccionTrabajo, $ubicacionTrabajoLat, $ubicacionTrabajoLng);

        // Guardar usando el DAO
        $estudianteDAO = new EstudianteDAO();
        $estudianteDAO->insertarEstudiante($estudiante);
    }
?>