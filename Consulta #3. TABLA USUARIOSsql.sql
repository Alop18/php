CREATE TABLE Usuarios(
	Id INT PRIMARY KEY NOT NULL,
	Nombre VARCHAR(50)  NULL,
	Apellido VARCHAR(50)  NULL,
	Edad INT  NULL,
	Direccion_calle VARCHAR(50)  NULL,
	Direccion_ciudad VARCHAR(50)  NULL,
	Direccion_pais VARCHAR(50)  NULL,
	Ocupación VARCHAR(50)  NULL,
	Correo VARCHAR(50)  NULL,
	Hobbie VARCHAR(50)  NULL,
	Celular INT  NULL,
	Fijo INT  NULL,
	Amigos VARCHAR(50)  NULL);
	
	
INSERT INTO usuarios (id, nombre, apellido, edad, direccion_calle, direccion_ciudad, direccion_pais, ocupación, correo, hobbie, celular, fijo, amigos) VALUES
('1','Waldir', 'De la Cruz', NULL, 'Calle 123', 'Bogotá', 'Colombia', 'Ingeniero de Software', 'waldir.delacruz@example.com', 'futbol, ps3, leer, viajar', '3148549658, 3201234567', '98745, 3124156', 'Carlos, Ana, Luis'),
('2','Adriana', 'Ortiz', NULL, 'Avenida Siempre Viva', 'Medellín', 'Colombia', 'Diseñadora Gráfica', 'adriana.ortiz@example.com', 'Montar moto, dormir, yoga', '3014548452, 3148549658', '3124156', 'María, Juan, Felipe'),
('3','Paola', 'Jimenez', NULL, 'Carrera 7', 'Cali', 'Colombia', 'Estudiante', 'paola.jimenez@example.com', 'dormir, ver tv, bailar, pintar', '3154548452, 3178848569', '5023698', 'Laura, Andrés, Camila'),
('4','Carlos', 'Pérez', NULL, 'Calle 456', 'Barranquilla', 'Colombia', 'Médico', 'carlos.perez@example.com', 'nadar, correr, leer, viajar', '3101234567, 3156549871', '123456, 654321', 'Pedro, Lucía, Sandra'),
('5','Lucía', 'Gómez', NULL, 'Carrera 12', 'Cartagena', 'Colombia', 'Arquitecta', 'lucia.gomez@example.com', 'dibujar, pintar, correr, yoga', '3161234567, 3174567891', '987654, 321456', 'Carolina, Marta, Ricardo');

	
	DROP TABLE Usuarios;