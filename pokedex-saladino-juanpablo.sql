-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2020 a las 20:34:33
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokedex-saladino-juanpablo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `numero` tinyint(4) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`numero`, `nombre`, `tipo`, `descripcion`, `imagen`) VALUES
(1, 'Bulbasaur', 'Hierba', 'Bulbasaur es un Pokemon de tipo planta/veneno introducido en la primera generacion. Es uno de los Pokemon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Squirtle y Charmander (excepto en Pokemon Amarillo). Destaca por ser el primer Pokemon de la Pokedex Nacional.', 'Bulbasaur.png'),
(4, 'Charmander', 'Fuego', 'Charmander es un pequeño lagarto bípedo. Sus características de fuego son resaltadas por su color de piel anaranjado y su cola con la punta envuelta en llamas. Charmander, como sus evoluciones Charmeleon y Charizard, tiene una pequeña llama en la punta de su cola. La intensidad con la que esta arde es un indicador del estado físico y emocional de este Pokémon. Cuando la intensidad de la llama está baja, su salud puede estar en riesgo. Cuando arde con normalidad, Charmander está saludable y alegre. Cuando la llama de su cola arde con más intensidad, es porque está enfadado, y si la llama de su cola se vuelve azul es porque encontró un rival fuerte y digno de él. Si la llama desaparece o se apaga, moriría.', 'Charmander.png'),
(7, 'Squirtle', 'Agua', 'Squirtle es una de las especies más difíciles de encontrar. Habita tanto aguas dulces como marinas, preferiblemente zonas bastante profundas. Son pequeñas tortugas color celeste con caparazones color café; o rojas en algunos casos, con una cola enrollada que los distingue. Poco después de nacer, sus caparazones se endurecen y se hacen más resistentes a los ataques; muchos objetos rebotarán en ella.\r\nLa forma redonda de su caparazón y las figuras en su superficie hacen que Squirtle tenga una muy buena forma hidrodinámica, lo que le da mayor velocidad al nadar. Cuando se siente atacado, Squirtle esconde completamente su cuerpo en el interior de su caparazón, lo que hace que resulte imposible atacarle, además cuando esta dentro de su caparazón puede atacar escupiendo agua por todos los agujeros del caparazón. Es capaz de escupir agua por su boca con gran fuerza, ya sea para atacar o intimidar.\r\n\r\nSquirtle es relativamente fácil de criar gracias a su destacado carácter alegre y simpático, aunque su relativa lentitud en tierra firme y la dificultad para equilibrar sus ataques acuáticos con ataques de otros tipos pueden crear algunos problemas al entrenador. Squirtle normalmente come algas, pero también le gustan otros alimentos como la fruta. En tierra firme, a Squirtle le puede resultar un poco más difícil andar, pero le resulta mas fácil ir a cuatro patas.', 'Squirtle.png'),
(11, 'Leo Messi', 'Normal', 'Traeme la copa, Messi', 'Messi.png'),
(16, 'Pidgey', 'Volador', 'Pidgey es uno de los Pokémon más comunes, ya que se encuentra siempre en cualquier sitio. Suele estar en bandadas\r\nlideradas principalmente por un Pidgeot. Son de naturaleza amistosa y bastante valientes. Son Pokémon calmados, y atraer su atención es fácil. Por ejemplo, cuando escuchan una hermosa melodía suelen detenerse a escucharla.\r\n\r\nEn los sitios donde habitan Pidgey siempre se les ve por todas partes, pero su hábitat verdadero siempre suele ser algún bosque, donde pueden encontrar alimento fácilmente y estar seguros.', 'Pidgey.png'),
(25, 'Pikachu', 'Electrico', 'Pikachu almacena una gran cantidad de electricidad en sus mejillas. Estas parecen cargarse eléctricamente durante la noche mientras duerme. Las mejillas de Pikachu también pueden ser recargadas mediante una descarga eléctrica, como se ha podido observar en algunos episodios del anime. A veces suelta unas pequeñas descargas cuando se acaba de despertar.\r\n\r\nLas mejillas son las que generan electricidad, pero esta es conducida y descargada por la punta de su cola produciendo descargas eléctricas, que aumentan de poder dependiendo del estado de ánimo de Pikachu. Muchas veces, en las tormentas se juntan y absorben electricidad de los relámpagos.', 'Pikachu.png'),
(110, 'Weezing', 'Veneno', 'Weezing y Koffing suelen vivir en lugares muy contaminados, ya sea en vertederos, pantanos o en ciudades industriales. Hasta hace no mucho tiempo Weezing era uno de los Pokémon con peor fama que existían. La gente los cazaba con odio, creyéndolos trasmisores de horribles enfermedades y pestes. Esta idea no podía estar más equivocada ya que los últimos descubrimientos lo muestran como una verdadera máquina de limpieza.\r\n\r\nAl evolucionar, Koffing genera en su cuerpo otras dos cámaras en donde descompone aún más los desechos que ingiere. Weezing puede ser comparado con un pequeño horno, ya que todo lo que coma será descompuesto y convertido en un gas volátil que no es dañino para la naturaleza (excepto para los humanos). Actualmente se está tratando de poblar los basurales con estas criaturas, para solucionar ese serio problema de contaminación.\r\n\r\nDebido a su gas, también es utilizado en la industria del combustible y gracias a los fluidos que crecen en su interior se fabrican los más delicados y exquisitos perfumes, que son muy famosos en Ciudad Azulona.', 'Weezing.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `rol`) VALUES
(15, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
