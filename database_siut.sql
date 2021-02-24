-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2021 a las 22:40:16
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE db_siut;

USE db_siut;

CREATE TABLE `administrador` (
  `IdAdministrador` int(11) NOT NULL,
  `NumeroAdmin` int(11) NOT NULL,
  `NombreAD` varchar(50) NOT NULL,
  `ApellidoPAD` varchar(20) NOT NULL,
  `ApellidoMAD` varchar(20) NOT NULL,
  `EmailAD` varchar(50) NOT NULL,
  `ContrasenaAD` varchar(40) NOT NULL,
  `IdUsuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

CREATE TABLE `alumnos` (
  `IdAlumnos` int(11) NOT NULL,
  `NombreA` varchar(50) NOT NULL,
  `ApellidoPA` varchar(20) NOT NULL,
  `ApellidoMA` varchar(20) NOT NULL,
  `SexoA` varchar(30) NOT NULL,
  `EmailA` varchar(50) NOT NULL,
  `ContrasenaA` varchar(40) NOT NULL,
  `Matricula` int(11) NOT NULL,
  `FechaNA` date NOT NULL,
  `TelCasaA` varchar(30) NOT NULL,
  `TelCelularA` varchar(30) NOT NULL,
  `ZonaDomicilioA` varchar(20) NOT NULL,
  `GrupoSanguineoA` varchar(10) NOT NULL,
  `IdUsuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `alumnosfaltas` (
  `IdAlumnosFaltas` int(11) NOT NULL,
  `IdFaltas` int(11) NOT NULL,
  `IdAlumnos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `asignatura` (
  `IdAsignatura` int(11) NOT NULL,
  `IdentificacionMateria` varchar(30) NOT NULL,
  `NombreMateria` varchar(80) NOT NULL,
  `Horas` int(11) NOT NULL,
  `UnidadesTotales` int(11) NOT NULL,
  `IdCuatrimestre` int(11) NOT NULL,
  `IdGlobal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `calificaciones` (
  `IdCalificaciones` int(11) NOT NULL,
  `Valor` int(11) NOT NULL,
  `UnidadTematica` int(11) NOT NULL,
  `Letra` varchar(5) NOT NULL,
  `Oportunidad` int(11) NOT NULL,
  `Saber` varchar(5) NOT NULL,
  `Hacer` varchar(5) NOT NULL,
  `Ser` varchar(5) NOT NULL,
  `IdAlumnos` int(11) NOT NULL,
  `IdPromedio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `carreras` (
  `IdCarrera` int(11) NOT NULL,
  `IdentifcacionCarrera` varchar(50) NOT NULL,
  `NombreCarrera` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `cuatrimestre` (
  `IdCuatrimestre` int(11) NOT NULL,
  `Grado` int(11) NOT NULL,
  `Periodo` varchar(50) NOT NULL,
  `Turno` varchar(30) NOT NULL,
  `IdNivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--

CREATE TABLE `cuatrimestrecarrera` (
  `IdCuatrimestreCarrera` int(11) NOT NULL,
  `IdCarrera` int(11) NOT NULL,
  `IdCuatrimestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `curso` (
  `IdCurso` int(11) NOT NULL,
  `ClaveCurso` varchar(50) NOT NULL,
  `IdCalificaciones` int(11) NOT NULL,
  `IdAsignatura` int(11) NOT NULL,
  `IdProfesores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `cursosgrupos` (
  `IdCursosGrupos` int(11) NOT NULL,
  `IdCurso` int(11) NOT NULL,
  `IdGrupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `documentosa` (
  `IdDocumentosA` int(11) NOT NULL,
  `ActaNA` mediumblob NOT NULL,
  `CurpA` mediumblob NOT NULL,
  `FotoA` mediumblob NOT NULL,
  `IneA` mediumblob NOT NULL,
  `CertificadoA` mediumblob NOT NULL,
  `IdAlumnos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `documentosp` (
  `IdDocumentosP` int(11) NOT NULL,
  `ActaNP` mediumblob NOT NULL,
  `CurpP` mediumblob NOT NULL,
  `FotoP` mediumblob NOT NULL,
  `IneP` mediumblob NOT NULL,
  `CertificadoP` mediumblob NOT NULL,
  `IdProfesores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `faltas` (
  `IdFaltas` int(11) NOT NULL,
  `CantidadFaltas` int(11) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `global` (
  `IdGlobal` int(11) NOT NULL,
  `CalificacionFinal` varchar(10) NOT NULL,
  `LetraFinal` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `grupo` (
  `IdGrupo` int(11) NOT NULL,
  `Grupo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `inscripcion` (
  `IdInscripcion` int(11) NOT NULL,
  `Estatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `inscripcionalumnos` (
  `IdInscripcionAlumnos` int(11) NOT NULL,
  `IdInscripcion` int(11) NOT NULL,
  `IdAlumnos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `nivel` (
  `IdNivel` int(11) NOT NULL,
  `Nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `pagos` (
  `IdPagos` int(11) NOT NULL,
  `ToelfItp` mediumblob NOT NULL,
  `IncripCuatriIng` mediumblob NOT NULL,
  `CertificadoT` mediumblob NOT NULL,
  `ExamenGlobal` mediumblob NOT NULL,
  `BecaHermanos` mediumblob NOT NULL,
  `ExpedicionTit` mediumblob NOT NULL,
  `ConstanciaG` mediumblob NOT NULL,
  `RentaL` mediumblob NOT NULL,
  `ColegIngBB` mediumblob NOT NULL,
  `ComplementarioIng` mediumblob NOT NULL,
  `ExamenExtra` mediumblob NOT NULL,
  `HistorialAca` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `pagosalumnos` (
  `IdPagosAlumnos` int(11) NOT NULL,
  `IdPagos` int(11) NOT NULL,
  `IdAlumnos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `profesores` (
  `IdProfesores` int(11) NOT NULL,
  `NumEmpleado` int(11) NOT NULL,
  `NombreP` varchar(50) NOT NULL,
  `ApellidoPP` varchar(20) NOT NULL,
  `ApellidoMP` varchar(20) NOT NULL,
  `SexoP` varchar(20) NOT NULL,
  `FechaNP` date NOT NULL,
  `EmailP` varchar(50) NOT NULL,
  `ContrasenaP` varchar(40) NOT NULL,
  `TelCasaP` varchar(30) NOT NULL,
  `TelCelularP` varchar(30) NOT NULL,
  `ZonaDomicilioP` varchar(20) NOT NULL,
  `GrupoSanguineoP` varchar(10) NOT NULL,
  `IdUsuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `promedio` (
  `IdPromedio` int(11) NOT NULL,
  `Promedio` varchar(10) NOT NULL,
  `Letra` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `usuarios` (
  `IdUsuarios` int(11) NOT NULL,
  `Usuario` int(11) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `administrador`
  ADD PRIMARY KEY (`IdAdministrador`),
  ADD KEY `fk_id_usuariosa` (`IdUsuarios`);

ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`IdAlumnos`),
  ADD KEY `fk_id_usuarios` (`IdUsuarios`);

ALTER TABLE `alumnosfaltas`
  ADD PRIMARY KEY (`IdAlumnosFaltas`),
  ADD KEY `fk_id_faltas` (`IdFaltas`),
  ADD KEY `fk_id_alumnosf` (`IdAlumnos`);

ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`IdAsignatura`),
  ADD KEY `fk_id_cuatrimestre` (`IdCuatrimestre`),
  ADD KEY `fk_id_global` (`IdGlobal`);

ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`IdCalificaciones`),
  ADD KEY `fk_id_alumnos` (`IdAlumnos`),
  ADD KEY `fk_id_promedio` (`IdPromedio`);

ALTER TABLE `carreras`
  ADD PRIMARY KEY (`IdCarrera`);

ALTER TABLE `cuatrimestre`
  ADD PRIMARY KEY (`IdCuatrimestre`),
  ADD KEY `fk_id_nivel` (`IdNivel`);

ALTER TABLE `cuatrimestrecarrera`
  ADD PRIMARY KEY (`IdCuatrimestreCarrera`),
  ADD KEY `fk_id_carrera` (`IdCarrera`),
  ADD KEY `fk_id_cuatrimestrec` (`IdCuatrimestre`);

ALTER TABLE `curso`
  ADD PRIMARY KEY (`IdCurso`),
  ADD KEY `fk_id_calificacion` (`IdCalificaciones`),
  ADD KEY `fk_id_asignatura` (`IdAsignatura`),
  ADD KEY `fk_id_profesores` (`IdProfesores`);

ALTER TABLE `cursosgrupos`
  ADD PRIMARY KEY (`IdCursosGrupos`),
  ADD KEY `fk_id_curso` (`IdCurso`),
  ADD KEY `fk_id_grupo` (`IdGrupo`);

ALTER TABLE `documentosa`
  ADD PRIMARY KEY (`IdDocumentosA`),
  ADD KEY `fk_id_alumnosd` (`IdAlumnos`);

ALTER TABLE `documentosp`
  ADD PRIMARY KEY (`IdDocumentosP`),
  ADD KEY `fk_id_profesoresd` (`IdProfesores`);

ALTER TABLE `faltas`
  ADD PRIMARY KEY (`IdFaltas`);

ALTER TABLE `global`
  ADD PRIMARY KEY (`IdGlobal`);

ALTER TABLE `grupo`
  ADD PRIMARY KEY (`IdGrupo`);

ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`IdInscripcion`);

ALTER TABLE `inscripcionalumnos`
  ADD PRIMARY KEY (`IdInscripcionAlumnos`),
  ADD KEY `fk_id_inscripcion` (`IdInscripcion`),
  ADD KEY `fk_id_alumnosi` (`IdAlumnos`);

ALTER TABLE `nivel`
  ADD PRIMARY KEY (`IdNivel`);

ALTER TABLE `pagos`
  ADD PRIMARY KEY (`IdPagos`);

ALTER TABLE `pagosalumnos`
  ADD PRIMARY KEY (`IdPagosAlumnos`),
  ADD KEY `fk_id_pagos` (`IdPagos`),
  ADD KEY `fk_id_alumnosp` (`IdAlumnos`);

ALTER TABLE `profesores`
  ADD PRIMARY KEY (`IdProfesores`),
  ADD KEY `fk_id_usuariosp` (`IdUsuarios`);

ALTER TABLE `promedio`
  ADD PRIMARY KEY (`IdPromedio`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuarios`);


ALTER TABLE `administrador`
  MODIFY `IdAdministrador` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `alumnos`
  MODIFY `IdAlumnos` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `alumnosfaltas`
  MODIFY `IdAlumnosFaltas` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `asignatura`
  MODIFY `IdAsignatura` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `calificaciones`
  MODIFY `IdCalificaciones` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `carreras`
  MODIFY `IdCarrera` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `cuatrimestre`
  MODIFY `IdCuatrimestre` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `cuatrimestrecarrera`
  MODIFY `IdCuatrimestreCarrera` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `curso`
  MODIFY `IdCurso` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `cursosgrupos`
  MODIFY `IdCursosGrupos` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `documentosa`
  MODIFY `IdDocumentosA` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `documentosp`
  MODIFY `IdDocumentosP` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `faltas`
  MODIFY `IdFaltas` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `global`
  MODIFY `IdGlobal` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `grupo`
  MODIFY `IdGrupo` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `inscripcion`
  MODIFY `IdInscripcion` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `inscripcionalumnos`
  MODIFY `IdInscripcionAlumnos` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nivel`
  MODIFY `IdNivel` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `pagos`
  MODIFY `IdPagos` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `pagosalumnos`
  MODIFY `IdPagosAlumnos` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `profesores`
  MODIFY `IdProfesores` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `promedio`
  MODIFY `IdPromedio` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuarios`
  MODIFY `IdUsuarios` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_id_usuariosa` FOREIGN KEY (`IdUsuarios`) REFERENCES `usuarios` (`IdUsuarios`);

ALTER TABLE `alumnos`
  ADD CONSTRAINT `fk_id_usuarios` FOREIGN KEY (`IdUsuarios`) REFERENCES `usuarios` (`IdUsuarios`);

ALTER TABLE `alumnosfaltas`
  ADD CONSTRAINT `fk_id_alumnosf` FOREIGN KEY (`IdAlumnos`) REFERENCES `alumnos` (`IdAlumnos`),
  ADD CONSTRAINT `fk_id_faltas` FOREIGN KEY (`IdFaltas`) REFERENCES `faltas` (`IdFaltas`);

ALTER TABLE `asignatura`
  ADD CONSTRAINT `fk_id_cuatrimestre` FOREIGN KEY (`IdCuatrimestre`) REFERENCES `cuatrimestre` (`IdCuatrimestre`),
  ADD CONSTRAINT `fk_id_global` FOREIGN KEY (`IdGlobal`) REFERENCES `global` (`IdGlobal`);

ALTER TABLE `calificaciones`
  ADD CONSTRAINT `fk_id_alumnos` FOREIGN KEY (`IdAlumnos`) REFERENCES `alumnos` (`IdAlumnos`),
  ADD CONSTRAINT `fk_id_promedio` FOREIGN KEY (`IdPromedio`) REFERENCES `promedio` (`IdPromedio`);

ALTER TABLE `cuatrimestre`
  ADD CONSTRAINT `fk_id_nivel` FOREIGN KEY (`IdNivel`) REFERENCES `nivel` (`IdNivel`);

ALTER TABLE `cuatrimestrecarrera`
  ADD CONSTRAINT `fk_id_carrera` FOREIGN KEY (`IdCarrera`) REFERENCES `carreras` (`IdCarrera`),
  ADD CONSTRAINT `fk_id_cuatrimestrec` FOREIGN KEY (`IdCuatrimestre`) REFERENCES `cuatrimestre` (`IdCuatrimestre`);

ALTER TABLE `curso`
  ADD CONSTRAINT `fk_id_asignatura` FOREIGN KEY (`IdAsignatura`) REFERENCES `asignatura` (`IdAsignatura`),
  ADD CONSTRAINT `fk_id_calificacion` FOREIGN KEY (`IdCalificaciones`) REFERENCES `calificaciones` (`IdCalificaciones`),
  ADD CONSTRAINT `fk_id_profesores` FOREIGN KEY (`IdProfesores`) REFERENCES `profesores` (`IdProfesores`);

ALTER TABLE `cursosgrupos`
  ADD CONSTRAINT `fk_id_curso` FOREIGN KEY (`IdCurso`) REFERENCES `curso` (`IdCurso`),
  ADD CONSTRAINT `fk_id_grupo` FOREIGN KEY (`IdGrupo`) REFERENCES `grupo` (`IdGrupo`);

ALTER TABLE `documentosa`
  ADD CONSTRAINT `fk_id_alumnosd` FOREIGN KEY (`IdAlumnos`) REFERENCES `alumnos` (`IdAlumnos`);

ALTER TABLE `documentosp`
  ADD CONSTRAINT `fk_id_profesoresd` FOREIGN KEY (`IdProfesores`) REFERENCES `profesores` (`IdProfesores`);

ALTER TABLE `inscripcionalumnos`
  ADD CONSTRAINT `fk_id_alumnosi` FOREIGN KEY (`IdAlumnos`) REFERENCES `alumnos` (`IdAlumnos`),
  ADD CONSTRAINT `fk_id_inscripcion` FOREIGN KEY (`IdInscripcion`) REFERENCES `inscripcion` (`IdInscripcion`);

ALTER TABLE `pagosalumnos`
  ADD CONSTRAINT `fk_id_alumnosp` FOREIGN KEY (`IdAlumnos`) REFERENCES `alumnos` (`IdAlumnos`),
  ADD CONSTRAINT `fk_id_pagos` FOREIGN KEY (`IdPagos`) REFERENCES `pagos` (`IdPagos`);

ALTER TABLE `profesores`
  ADD CONSTRAINT `fk_id_usuariosp` FOREIGN KEY (`IdUsuarios`) REFERENCES `usuarios` (`IdUsuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
