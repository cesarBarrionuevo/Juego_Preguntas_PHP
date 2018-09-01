-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-09-2018 a las 17:32:39
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `codpre` int(4) NOT NULL,
  `pregunta` varchar(150) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `codcat` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`codpre`, `pregunta`, `codcat`) VALUES
(1, '¿En que año llegó Cristobal Colón a América?', 2),
(2, '¿Quién era el general de los nazis en la Segunda Guerra Mundial?', 2),
(3, '¿Cuántas veces fue reformada la Constitución Nacional Argentina?', 2),
(4, '¿En qué año murió San Martín?', 2),
(5, '¿Quién fue el primer presidente argentino en democracia?', 2),
(6, '¿En que año se independizo argentina?', 2),
(7, '¿Que se conmemora el 25 de mayo?', 2),
(8, '¿En que año comenzó la segunda guerra mundial?', 2),
(9, '¿Cuando derrumbaron las torres gemelas?', 2),
(10, '¿Cuantos años tuvieron el mandato el matrimonio Kirchner?', 2),
(11, '¿Cuanto tiempo duro la guerra de Malvinas?', 2),
(12, '¿Quien fue Hugo Chavez?', 2),
(13, '¿En que provincia se firmo la independencia?', 2),
(14, '¿Qué año se construyó el Muro de Berlín?', 2),
(15, '¿En qué año comenzó la campaña del desierto?', 2),
(16, '¿En qué año viajó el primer hombre a la luna?', 2),
(17, '¿Cuántos soldados argentinos murieron en la Guerra de las Malvinas?', 2),
(18, '¿Qué se celebra el 8 de Marzo?', 2),
(19, '¿Quién liberó a Argentina, Chile y Perú?', 2),
(20, '¿Dónde surgió la filosofía?', 2),
(21, '¿Cuántos colores tiene la bandera española?', 2),
(22, '¿Cuántos mandamientos hay en el cristianismo?', 2),
(23, '¿Cuáles son los principios del Derecho?', 2),
(24, '¿En que país nació Adolf Hitler?', 2),
(25, '¿Cómo se les llamaba a los primeros pobladores que se desplazaban en busca de alimento?', 2),
(26, '¿Cual es la forma de gobierno en la que el Rey toma las decisiones?', 2),
(27, '¿En que año salio la primera computadora al mercado?', 2),
(28, '¿En que salio la primer imprenta en Argentina?', 2),
(29, '¿En que fecha se construyo el obelisco?', 2),
(30, '¿Cuantas estrellas tiene la bandera de EEUU?', 2),
(31, '¿Quien fue el creador de Facebook?', 5),
(32, '¿Quien fue la ultima ex novia de Federico Bal?', 5),
(33, '¿A quien llaman la chica del clima?', 5),
(34, '¿Que colores tiene el logo de Google?', 5),
(35, '¿Como se llama el payaso de Los simpson?', 5),
(36, '¿De que color era Clifford, el perro gigante?', 5),
(37, '¿Que personaje de la serie \"El Chavo\" lloraba en la pared?', 5),
(38, '¿Quien vive en una piña debajo del mar?', 5),
(39, '¿En la serie \"Los padrinos mágicos\" de que color son los padrinos?', 5),
(40, '¿Como se llama el perro de la serie \"Casados con hijos\"?', 5),
(41, '¿Cual fue la ultima película Argentina que gano el Oscar?', 5),
(42, '¿Como se llamaban los \"3 chiflados\"?', 5),
(43, '¿De que color era el caballo de \"El zorro\"?', 5),
(44, '¿Quien es el artista que canta \"Deja de llorar\"?', 5),
(45, '¿Quien conduce el programa \"ShowMatch\"?', 5),
(46, '¿Que tipo de pájaro es el del logo de Twitter?', 5),
(47, '¿Quien es el artista que canta \"Amor salvaje\"?', 5),
(48, '¿Cuantas temporadas tiene la serie \"Breaking Bad\"?', 5),
(49, '¿Cuantos años tiene el programa \"Almorzando con Mirtha\"?', 5),
(50, '¿Quién creo Microsoft?', 5),
(51, '¿Como se llama el marido de Shakira?', 5),
(52, '¿Que deporte jugaba Pico Monaco?', 5),
(53, '¿Qué mascara usan los actores de la serie \"La casa de papel\"?', 5),
(54, '¿Cuál fue la primera película de Disney?', 5),
(55, '¿A quién apodan \"Pampita\"?', 5),
(56, '¿Cómo se llama el hobbit de \"El señor de los Anillos\"?', 5),
(57, '¿En que película es protagonista Leonardo Di Caprio?', 5),
(58, '¿Quién interpreta el papel de Bella en la saga \"Crepúsculo\"?', 5),
(59, '¿En que película de Disney pertenece la canción \"Un mundo ideal\"?', 5),
(60, '¿Quién es el protagonista principal de la película \"En busca de la felicidad\"?', 5),
(61, 'La Copa del Mundo  2018 se juega en: ', 1),
(62, '¿Qué día se juega el partido inaugural de la Copa del Mundo?', 1),
(63, '¿Qué países juegan el partido inaugural?', 1),
(64, '¿Cuántos países participan de la Copa del Mundo  ?', 1),
(65, '¿Cuántos países sudamericanos juegan la Copa del Mundo  ?', 1),
(66, 'El partido inaugural en que  estadio se juega?', 1),
(67, '¿En qué ciudad se juega el partido Inaugural?', 1),
(68, 'Argentina integra el Grupo junto con:', 1),
(69, '¿Qué día debuta Argentina?', 1),
(70, '¿Cuantos mundiales de Mayores jugó Leonel Messi?', 1),
(71, '¿Que número de camiseta usa Javier Mascherano?', 1),
(72, '¿Qué animal es la mascota de la Copa del Mundo  ?', 1),
(73, '¿Cuántas ciudades serán sede de la Copa del Mundo  ?', 1),
(74, ' Italia integra el grupo B:', 1),
(75, '¿Cuántos estadios se usarán en la Copa del Mundo  ?', 1),
(76, '- ¿Cómo se llama la pelota de la Copa del Mundo  ?', 1),
(77, 'Cuál país participa por primera vez en la Copa del Mundo  ?', 1),
(78, '¿Cuántas zonas hay en la Copa del Mundo  ?', 1),
(79, 'LuzhnikiStadium tiene una capacidad de 80.000 personas.', 1),
(80, '¿Cuál es el idioma oficial de Rusia?', 1),
(81, 'Quién es el director técnico de la selección de Perú?', 1),
(82, '¿En qué estación estival se juega la Copa del Mundo  ?', 1),
(83, 'La lista de jugadores por selección son:', 1),
(84, 'El nombre y apellido completo de Messi es “Lionel Andrés Messi Cuccittini”', 1),
(85, 'La zona F la integran Chile – Italia – Camerún – Sudáfrica', 1),
(86, '¿Cuántos días dura la Copa del Mundo ?', 1),
(87, '¿Qué día se juega la final de la Copa del Mundo?', 1),
(88, 'El partido inaugural y la final de la Copa del Mundo se juega en el mismo estadio', 1),
(89, 'Costa rica no juega la Copa del Mundo', 1),
(90, '¿Quién es el capitán de la Selección Argentina?', 1),
(91, '¿De que color es la sangre de los peces?', 6),
(92, '¿Cuál es el mamífero mas grande conocido hasta la actualidad?', 6),
(93, '¿Cómo se llama el nivel mas alto de la marea?', 6),
(94, '¿Con que parte del cuerpo hacen el zumbido las abejas?', 6),
(95, '¿Cuál es la formula química del agua?', 6),
(96, '¿De cuál de estas plantas se extrae la marihuana?', 6),
(97, '¿Que hueso se encuentra en el pene de la mayoría de los mamíferos?', 6),
(98, '¿Que es la hemofobia?', 6),
(99, '¿Que líquido almacenan los cactus?', 6),
(100, '¿De que color es el sudor de los hipopotamos?', 6),
(101, '¿Que sustancia permite realizar la fotocintesis?', 6),
(102, '¿Que es la levadura?', 6),
(103, '¿Que planeta solar en el sistema solar es mas parecido a la Tierra?', 6),
(104, '¿Puede morderte la cabeza cortada de una serpiente?', 6),
(105, '¿Que es un caracol?', 6),
(106, '¿Que ciencia se ocupa del clima?', 6),
(107, '¿Como se denomina la nube que se encuentra a nivel de la superficie?', 6),
(108, '¿Que es el aire?', 6),
(109, '¿De que animal viene el Sida?', 6),
(110, '¿Cuantas calorías tiene el agua?', 6),
(111, '¿Cual de estos animales no pertenece a la familia del caballo?', 6),
(112, '¿De donde provienen las perlas?', 6),
(113, '¿Cual de estos animales es vertebrado?', 6),
(114, '¿Como son las temperaturas del desierto?', 6),
(115, '¿que función tiene la atmósfera en la corteza terrestre? ', 6),
(116, '¿Que es un fosil?', 6),
(117, '¿Como se llama a la ciencia que estudia los fociles?', 6),
(118, '¿Que elementos determinan el tipo de animales y plantas que abitan el lugar?', 6),
(119, '¿Como están formados los seres unicelulares ?', 6),
(120, 'La membrana celular es una delgada capa formada por', 6),
(121, '¿Cuantos ángulos rectángulos hay en un paralelogramo ?', 4),
(122, 'Si tengo 23 años y mi papa me duplica la edad ¿Cuantos años tiene?', 4),
(123, '¿Cuantas monedas de 5 centavos necesito para pagan 1 peso?', 4),
(124, '¿Cuantos metros hay un kilometro?', 4),
(125, '¿Cuantos centímetros hay en un metro?', 4),
(126, '¿Que angulo forman las agujas del reloj a las 3?', 4),
(127, '¿Cuantos lados tiene un hexágono?', 4),
(128, '¿Cuantos lados tiene un eneagono?', 4),
(129, '¿Cuanto suman los ángulos interiores de un triangulo?', 4),
(130, '¿Cual es la formula de un cuerpo impar?', 4),
(131, '¿Cual es la formula es la de un numero par?', 4),
(132, '¿Cual es la raíz cuadrada de 400?', 4),
(133, '¿Cuanto es 3 al cuadrado? o 3ª', 4),
(134, '¿Cuanto es el cubo de 2? ', 4),
(135, '¿Cual es la formula del área de un rectángulo?', 4),
(136, '¿Cual es la formula del área de un triangulo?', 4),
(137, '¿Cual operación de 1?', 4),
(138, '¿Que operación da 0?', 4),
(139, '¿Cuanto es 15 por 5?', 4),
(140, '¿Cuanto suman dos ángulos suplementarios?', 4),
(141, '¿Cuanto suman dos ángulos complementarios?', 4),
(142, '¿Cuanto mide un angulo llano?', 4),
(143, '¿Cuanto es la raíz cuadrada de 16?', 4),
(144, '¿Cual es una ecuación?', 4),
(145, '¿La tercera parte de 300?', 4),
(146, '¿El 10% de 4000?', 4),
(147, 'La mitad de 50 mas 9 es...', 4),
(148, '¿El 20% de 1500 es...', 4),
(149, '¿De cuantas formas distintas se pueden ordenar 4 libros?', 4),
(150, '¿De cuantas formas diferentes se pueden sentar en fila 3 personas?', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`codpre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `codpre` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
