CREATE TABLE IF NOT EXISTS personal (
  Documento VARCHAR(16) NOT NULL,
  Nombre_Completo VARCHAR(96) NOT NULL,
  Correo VARCHAR(128) NOT NULL,
  PRIMARY KEY (Documento));

CREATE TABLE IF NOT EXISTS estado_vehiculo(
  ID_Estado_Vehiculo SERIAL NOT NULL,
  Descripcion VARCHAR(128) NOT NULL,
  PRIMARY KEY (ID_Estado_Vehiculo));

CREATE TABLE IF NOT EXISTS tipo_vehiculo (
  ID_Tipo_Vehiculo SERIAL NOT NULL,
  Descripcion VARCHAR(32) NOT NULL,
  PRIMARY KEY (ID_Tipo_Vehiculo));

CREATE TABLE IF NOT EXISTS vehiculo (
  Placa VARCHAR(12) NOT NULL,
  Marca VARCHAR(32) NOT NULL,
  Modelo VARCHAR(45) NOT NULL,
  ID_Tipo_Vehiculo INT NOT NULL,
  Personal_Documento VARCHAR(16) NOT NULL,
  ID_Estado INT NOT NULL,
  PRIMARY KEY (Placa));

CREATE TABLE IF NOT EXISTS repuesto (
  ID_Repuesto SERIAL NOT NULL,
  Nombre VARCHAR(128) NOT NULL,
  Valor DECIMAL NOT NULL,
  PRIMARY KEY (ID_Repuesto));

CREATE TABLE IF NOT EXISTS dagnho (
  ID_Dagnho SERIAL NOT NULL,
  Nombre VARCHAR(32) NOT NULL,
  Descripcion VARCHAR(255) NOT NULL,
  PRIMARY KEY (ID_Dagnho));

CREATE TABLE IF NOT EXISTS mantenimiento (
  ID_Mantenimiento SERIAL NOT NULL,
  Descripcion VARCHAR(255) NOT NULL,
  Fecha_Programado DATE NOT NULL,
  Placa_Vehiculo VARCHAR(12) NOT NULL,
  PRIMARY KEY (ID_Mantenimiento));

CREATE TABLE IF NOT EXISTS mantenimiento_dagnho (
  ID_Mantenimiento_Dagnho SERIAL NOT NULL,
  ID_Mantenimiento INT NOT NULL,
  ID_Dahno INT NOT NULL,
  PRIMARY KEY (ID_Mantenimiento_Dagnho));

CREATE TABLE IF NOT EXISTS mantenimiento_repuesto (
  ID_Mantenimiento_Repuesto SERIAL NOT NULL,
  ID_Mantenimiento INT NOT NULL,
  ID_Repuesto INT NOT NULL,
  PRIMARY KEY (ID_Mantenimiento_Repuesto));


-- Datos tipo - Vehículo
INSERT INTO public.tipo_vehiculo(
  id_tipo_vehiculo, descripcion)
VALUES (1, 'Motocicleta');
INSERT INTO public.tipo_vehiculo(
  id_tipo_vehiculo, descripcion)
VALUES (2, 'Carro');
INSERT INTO public.tipo_vehiculo(
  id_tipo_vehiculo, descripcion)
VALUES (3, 'Camioneta');
INSERT INTO public.tipo_vehiculo(
  id_tipo_vehiculo, descripcion)
VALUES (4, 'Ambulancia');
INSERT INTO public.tipo_vehiculo(
  id_tipo_vehiculo, descripcion)
VALUES (5, 'Furgoneta');
INSERT INTO public.tipo_vehiculo(
  id_tipo_vehiculo, descripcion)
VALUES (6, 'Otro');


-- Dato Estado_Vehiculo:
INSERT INTO public.estado_vehiculo(
  id_estado_vehiculo, descripcion)
VALUES (1, 'Nuevo');
INSERT INTO public.estado_vehiculo(
  id_estado_vehiculo, descripcion)
VALUES (2, 'Usado');
INSERT INTO public.estado_vehiculo(
  id_estado_vehiculo, descripcion)
VALUES (3, 'Otro');


-- Repuestos:
INSERT INTO public.repuesto(
  id_repuesto, nombre, valor)
VALUES (1, 'Repuesto 1', 100000);
INSERT INTO public.repuesto(
  id_repuesto, nombre, valor)
VALUES (2, 'Repuesto 2', 150000);
INSERT INTO public.repuesto(
  id_repuesto, nombre, valor)
VALUES (3, 'Repuesto 3', 75000);


-- Daños:
INSERT INTO public.dagnho(
  id_dagnho, nombre, descripcion)
VALUES (1, 'Daño 1', 'Descripción...');
INSERT INTO public.dagnho(
  id_dagnho, nombre, descripcion)
VALUES (2, 'Daño 2', 'Descripción...');
INSERT INTO public.dagnho(
  id_dagnho, nombre, descripcion)
VALUES (3, 'Daño 3', 'Descripción...');
