-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2023 a las 19:51:10
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_quiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `totalPreguntas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `config`
--

INSERT INTO `config` (`id`, `usuario`, `password`, `totalPreguntas`) VALUES
(1, 'admin', 'admin', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas`
--

CREATE TABLE `estadisticas` (
  `id` int(11) NOT NULL,
  `visitas` int(11) NOT NULL,
  `respondidas` int(11) NOT NULL,
  `completados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estadisticas`
--

INSERT INTO `estadisticas` (`id`, `visitas`, `respondidas`, `completados`) VALUES
(1, 43, 16, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `tema` int(11) NOT NULL,
  `pregunta` text NOT NULL,
  `opcion_a` text NOT NULL,
  `opcion_b` text NOT NULL,
  `opcion_c` text NOT NULL,
  `correcta` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `tema`, `pregunta`, `opcion_a`, `opcion_b`, `opcion_c`, `correcta`) VALUES
(1, 2, '¿Cuál es la etiqueta para crear un título de nivel 1 en HTML?', ' &lt;title&gt;', ' &lt;h1&gt;', ' &lt;head&gt;', 'B'),
(2, 2, '¿Qué etiqueta se utiliza para insertar una imagen en una página web?', '&lt;img src=&quot;imagen.jpg&quot;&gt;', '&lt;img&gt;', '&lt;image&gt;', 'A'),
(3, 2, '¿Cuál es la etiqueta para crear un enlace en HTML?', '&lt;link&gt;', '&lt;a&gt;', '&lt;href&gt;', 'B'),
(4, 2, '¿Cuál es la etiqueta para crear una lista ordenada en HTML?', ' &lt;ul&gt;', '&lt;li&gt;', ' &lt;ol&gt;', 'C'),
(5, 2, '¿Qué atributo se utiliza para establecer el texto alternativo de una imagen en HTML?', ' alt', ' text', 'description', 'A'),
(6, 2, '¿Cuál es la etiqueta para agregar un salto de línea en HTML?', '&lt;br&gt;', ' &lt;nl&gt;', '&lt;lb&gt;', 'A'),
(7, 2, '¿Cuál es la etiqueta para crear un botón en HTML?', '&lt;button&gt;', '&lt;input type=&quot;button&quot;&gt;', '&lt;btn&gt;', 'A'),
(8, 2, '¿Qué etiqueta se utiliza para crear una tabla en HTML?', '&lt;table&gt;', '&lt;tab&gt;', ' &lt;tr&gt;', 'A'),
(9, 2, '¿Cuál es la etiqueta para crear un párrafo en HTML?', ' &lt;par&gt;', '&lt;para&gt;', ' &lt;p&gt;', 'C'),
(10, 2, '¿Qué atributo se utiliza para establecer el color de fondo de un elemento en HTML?', 'bgcolor', ' background-color', ' color', 'B'),
(11, 3, '¿Cuál es la etiqueta correcta para crear una lista desordenada en HTML?', '&lt;ul&gt;', '&lt;ol&gt;', '&lt;li&gt;', 'C'),
(12, 3, '¿Qué etiqueta se utiliza para definir el encabezado de una tabla en HTML?', ' &lt;head&gt;', '&lt;header&gt;', '&lt;th&gt; ', 'C'),
(13, 3, '¿Cuál es la etiqueta correcta para insertar un salto de línea en un atributo &quot;alt&quot; de una imagen?', '&lt;nl&gt;', '&lt;br&gt;', '&lt;br/&gt;', 'C'),
(14, 3, '¿Qué atributo se utiliza para establecer el color de texto de un elemento en HTML?', 'color', 'font-color', 'style', 'C'),
(15, 3, '¿Cuál es la etiqueta para crear un enlace que se abra en una nueva ventana o pestaña del navegador?', '&lt;a href=&quot;url&quot; target=&quot;_self&quot;&gt;', ' &lt;a href=&quot;url&quot; target=&quot;_blank&quot;&gt;', '&lt;a href=&quot;url&quot; target=&quot;_parent&quot;&gt;', 'B'),
(16, 3, '¿Cuál es la etiqueta correcta para definir una celda de encabezado en una tabla?', '&lt;td&gt;', ' &lt;th&gt;', '&lt;tr&gt;', 'B'),
(17, 3, '¿Qué etiqueta se utiliza para crear un formulario en HTML?', ' &lt;form&gt; ', '&lt;input type=&quot;form&quot;&gt;', '&lt;input type=&quot;submit&quot;&gt;', 'A'),
(18, 3, '¿Cuál es la etiqueta correcta para insertar un salto de línea en un párrafo?', ' &lt;br&gt;', '&lt;nl&gt;', '&lt;lb&gt;', 'A'),
(19, 3, '¿Qué atributo se utiliza para establecer el ancho de una imagen en HTML?', 'width', 'size', 'length', 'A'),
(20, 3, '¿Cuál es la etiqueta para crear una lista de definición en HTML?', '&lt;ul&gt;', '&lt;dl&gt;', '&lt;ol&gt;', 'B'),
(21, 4, '¿Cuál es la propiedad CSS utilizada para establecer el color de texto?', 'text-color', 'color', 'text-style', 'B'),
(22, 4, '¿Qué propiedad se utiliza para establecer el tamaño de fuente de un texto?', 'font-style', 'font-size', 'text-size', 'B'),
(23, 4, '¿Cuál es la propiedad CSS utilizada para establecer el margen exterior de un elemento?', 'margin', 'padding', 'border', 'A'),
(24, 4, '¿Qué propiedad se utiliza para establecer el estilo de borde de un elemento?', 'border-style', 'border-width', 'border-color', 'A'),
(25, 4, '¿Cuál es la propiedad CSS utilizada para alinear el contenido de un elemento horizontalmente?', 'text-align', 'horizontal-align', 'align-items', 'A'),
(26, 4, '¿Qué propiedad se utiliza para establecer el color de fondo de un elemento?', 'background-color', 'color', 'background', 'A'),
(27, 4, '¿Cuál es la propiedad CSS utilizada para establecer el ancho de un elemento?', 'length', 'size', 'width', 'C'),
(28, 4, '¿Qué propiedad se utiliza para establecer el espacio entre las letras de un texto?', 'text-space', 'letter-spacing', 'line-height', 'B'),
(29, 4, '¿Cuál es la propiedad CSS utilizada para establecer el tamaño de la caja de un elemento?', 'box-size', 'size', 'width', 'C'),
(30, 4, '¿Qué propiedad se utiliza para establecer la altura de un elemento?', 'size', 'height', 'length', 'B'),
(31, 5, '¿Cuál es la propiedad CSS utilizada para establecer el espacio entre las líneas de un texto?', 'line-height', 'line-spacing', 'text-spacing', 'A'),
(32, 5, '¿Qué propiedad se utiliza para establecer la opacidad de un elemento?', 'opacity', 'visibility', 'display', 'A'),
(33, 5, '¿Cuál es la propiedad CSS utilizada para establecer el espacio entre elementos adyacentes?', 'margin', 'padding', 'gap', 'C'),
(34, 5, '¿Qué propiedad se utiliza para establecer la alineación vertical del contenido de un elemento?', 'vertical-align', 'align-items', 'text-align', 'A'),
(35, 5, '¿Cuál es la propiedad CSS utilizada para establecer una sombra alrededor de un elemento?', 'shadow', 'text-shadow', 'box-shadow', 'C'),
(36, 5, '¿Qué propiedad se utiliza para establecer el estilo de borde de un elemento individualmente (arriba, abajo, izquierda, derecha)?', 'border-style', 'border', 'border-individual', 'B'),
(37, 5, '¿Cuál es la propiedad CSS utilizada para establecer el tamaño mínimo de un elemento?', 'min-size', 'min-width', 'min-height', 'B'),
(38, 5, '¿Qué propiedad se utiliza para establecer la posición de un elemento en relación a su contenedor padre?', 'position', 'top', 'left', 'A'),
(39, 5, '¿Cuál es la propiedad CSS utilizada para establecer el orden de apilamiento de elementos posicionados?', 'z-index', 'stack-order', 'order', 'A'),
(40, 5, '¿Qué propiedad se utiliza para establecer una imagen de fondo en un elemento?', 'background', 'background-color', 'background-image', 'C'),
(41, 1, '¿Que tiene de malo este codigo ?let high Score', 'Contiene un espacio', 'Contiene una letra mayúscula', 'Niguna', 'A'),
(42, 1, '¿Por qué damos a las variables descriptivas como city o country en lugar de x o y?', 'Para que sean mas rápidos de escribir', 'Es por que es obligatorio ponerlo', 'Para ayudarnos a entender a los que hay dentro de ellos.', 'C'),
(43, 1, '¿Que palabras podemos usar para declara variables?', 'let', 'let y variable ', 'let y const', 'C'),
(44, 1, '¿Para que usamos camel case?', 'Para crear nombres con varias palabras', 'Para crear nombres de variables con espacios', 'Para crear solo variables ', 'A'),
(45, 1, '¿Cual es el valor de esta variable? let name = “Karin”;', '”Karin”', 'name', 'let', 'A'),
(46, 1, '¿Como sabemos que un valor es una cadena?', 'Contiene un símbolo =', 'Es una palabra entre comillas dobles', 'Son muchas variables juntas', 'B'),
(47, 1, '¿Que esta pasando en este código? const browser = “Chrome”?', 'La variable “Chrome” almacena el valor browser', 'Esta mal definida la variable', 'La variable  browser almacena el valor “Chrome” ', 'A'),
(48, 1, '¿Cual es el nombre de esta variable?  let hobby = “Tree shaping”;', 'let', 'hobby', '“Tree shaping”', 'B'),
(49, 1, '¿Que significa const?', 'Continuo', 'Ninguna', 'Constante', 'C'),
(50, 1, '¿Podemos asignar un nuevo valor a  una variable let?', 'Verdadero', 'Falso', '.', 'A'),
(51, 6, '¿Cual es el estándar opcional para asegurarse de que las constantes no cambien sus valores?', 'mayuscula', 'caso de serpiente minúscula', '.', 'A'),
(52, 6, '¿Que devemos usar como predeterminado?', 'const', 'let', 'count', 'B'),
(53, 6, '¿Como sabemos que “Hello, World!” es una cadena?', 'Comienza y termina con comillas dobles', 'Solo es texto', 'Contiene letras y símbolos', 'A'),
(54, 6, '¿Que es una consola?', 'Es un área donde escribimos codigo', 'Es donde escribimos documentos', 'Un área que muestra la salida', 'C'),
(55, 6, '¿Que hace la instrucción especial console.log()?', 'Crea una variable', 'Muestra un valor en la consola', 'Crea un arreglo', 'B'),
(56, 6, '¿Que muestra este codigo en consola?\r\nconst sport = “B-ball”;\r\nconsole.log(sport);\r\n\r\n', 'sport', 'Un Error', 'B-ball', 'C'),
(57, 6, '¿Cual de estas lineas de codigo actualiza la variable currentStatus?', 'currentStatus = “Working out”;', 'let currentStatus =”Working out”;', ' currentStatus =”Working ”;', 'A'),
(58, 6, '¿Que muestra este codigo en la consola?\r\nconst currentStatus = “Watching Netflix”;\r\nconsole.log(currentStatus );\r\n', 'currentStatus ', 'Watching Netflix', 'const currentStatus', 'B'),
(59, 1, '¿Que tiene de malo este código?\r\nfirstName =”Lori”;\r\nfirstName =”Joe”;\r\n', 'Falta la palabra clave let en la primera linea ', 'Repite firstName', 'Nada', 'A'),
(60, 6, '¿Que muestra este codigo en la consola?\r\nlet firstName =”Lori”;\r\nfirstName =”Joe”;\r\nconsole.log(firstName );\r\n', 'Lori', 'Joe', 'LoriJose', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`id`, `nombre`) VALUES
(1, 'JavaScript facil'),
(2, 'HTML Facil'),
(3, 'HTML Medio'),
(4, 'CSS Facil'),
(5, 'CSS Medio'),
(6, 'JavaScript Medio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `clave`, `estatus`) VALUES
(2, 'moises', 'moi123@outlook.com', '123456789', 1),
(4, 'omar', 'omar321@gmail.com', '25f9e794323b453885f5181f1b624d0b', 1),
(5, 'alberto', 'beto321@outlook.com', '25f9e794323b453885f5181f1b624d0b', 1),
(6, 'lalo', 'lalo321@gmail.com', '25f9e794323b453885f5181f1b624d0b', 1),
(7, 'jaime', 'jaime543@gmail.com', '6ebe76c9fb411be97b3b0d48b791a7c9', 1),
(8, 'damian', 'demian1155@outlook.com', '25f9e794323b453885f5181f1b624d0b', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
