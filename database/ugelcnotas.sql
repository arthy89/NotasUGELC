/*
 Navicat Premium Data Transfer

 Source Server         : LARMSQL
 Source Server Type    : MySQL
 Source Server Version : 50724 (5.7.24)
 Source Host           : localhost:3306
 Source Schema         : ugelcnotas

 Target Server Type    : MySQL
 Target Server Version : 50724 (5.7.24)
 File Encoding         : 65001

 Date: 18/07/2023 13:14:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for curso
-- ----------------------------
DROP TABLE IF EXISTS `curso`;
CREATE TABLE `curso`  (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `curso_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_curso`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_spanish2_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of curso
-- ----------------------------

-- ----------------------------
-- Table structure for estudiante
-- ----------------------------
DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE `estudiante`  (
  `id_est` int(11) NOT NULL AUTO_INCREMENT,
  `est_apell` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NULL DEFAULT NULL,
  `est_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NULL DEFAULT NULL,
  `id_inst` int(11) NULL DEFAULT NULL,
  `est_grado` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NULL DEFAULT NULL,
  `est_seccion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_est`) USING BTREE,
  INDEX `fk_est_inst`(`id_inst`) USING BTREE,
  CONSTRAINT `fk_est_inst` FOREIGN KEY (`id_inst`) REFERENCES `institucion` (`id_inst`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1090 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_spanish2_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of estudiante
-- ----------------------------
INSERT INTO `estudiante` VALUES (1, 'LAZARTE GONZALES', 'DEYSI LISET', 1, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (2, 'MAMANI CHUSI', 'KATHERIN', 1, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (3, 'PERIERA SUCA', 'ANGIE NICOL', 1, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (4, 'URIBE APAZA', 'ABEL', 1, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (5, 'BELLIDO MAYHUA', 'Fernando Marco', 2, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (6, 'CONDORI MAMANI', 'Meliza Yaquelin', 2, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (7, 'LIMACHE CHAMBILLA', 'Gyan Dree', 2, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (8, 'MAMANI CARMONA', 'Dayiro', 2, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (9, 'MAMANI CONDORI', 'Soleny Yesenia', 2, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (10, 'NINA MOROCCO', 'Stiven Alvaro', 2, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (11, 'PARI MAYTA', 'Luis Enrique', 2, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (12, 'PARI VILCA', 'Erick Alexanders', 2, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (13, 'QUILCA CHURA', 'Roymir Franck', 2, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (14, 'QUISPE MAMANI', 'Jhandery Nariedh', 2, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (15, 'ROCA VALENCIA', 'Indira Sara', 2, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (16, 'ZEVALLOS HILLA', 'Greys Guisel', 2, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (17, 'CAHUANA PAMPA', 'Melania', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (18, 'CALSINA CONDORI', 'Alvaro Sebastian', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (19, 'CCANCCAPA ZARATE', 'Merhiein Jazmin', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (20, 'CHUMBILLA CCOA', 'Sheyla Pamela', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (21, 'CHURA CRURATA', 'Ruth Yesenia', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (22, 'CRUZ HUALLA', 'Maythe Yhadeira', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (23, 'HANCCO RAMOS', 'Harry Yoel', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (24, 'HUAMAN VALERIANO', 'Jose Dayir', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (25, 'MAMANI HUARICALLO', 'Roy Gary Elvis', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (26, 'MAMANI HUAYTA', 'Yoshimar', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (27, 'MAQUE HUAHUASONCCO', 'Yoselin Zunyi', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (28, 'MAYHUA MERMA', 'Nadine Nayda', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (29, 'MERMA VEGA', 'Judith Yovana', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (30, 'MONTALVO PUMA', 'Miguel Angel', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (31, 'PALOMINO GRETA', 'Franklin', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (32, 'PARIAPAZA ALATA', 'Shamira Yoselyn', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (33, 'PAULO RAMOS', 'Nuria Bianeth', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (34, 'PERALTA QUISPE', 'Luis Fernando', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (35, 'QUISPE CONDORI', 'Derexs Raul', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (36, 'QUISPECONDORI PALOMINO', 'Sheyla', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (37, 'VARGAS MAZCO', 'Yaiza Yashira', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (38, 'VEGA CHUNGA', 'Shandiguer Rivaldo', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (39, 'VILCA MAMANI', 'Xiomara Karen', 78, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (40, 'CAHUANA DIAZ', 'FRANK CUOPER', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (41, 'CALSINA QUISPE', 'ROSSY ERIKA', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (42, 'CHURA MACHACA', 'THANIA SARITA', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (43, 'CONDORI GUTIERREZ', 'JHAYRO KEWIN', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (44, 'FARFAN CALCINA', 'LIDENY YERENDIL', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (45, 'HUAHUASONCCO CALCINA', 'LUZDELIA', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (46, 'HUARSOCCA QUISPE', 'HABRAHAM', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (47, 'JARA SOTO', 'SHEN JHOSUE', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (48, 'LAZARTE TURPO', 'LIZETH YARITA', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (49, 'MOLLOCONDO CALCINA', 'JIMENA MILAGROS', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (50, 'MUÑOZ ANAHUI', 'ANALY THANIA', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (51, 'MURGA ', 'MOROCCO KEY GRETZEL', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (52, 'PACO HUAYAPA', 'LADY JHASMIN', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (53, 'PACSI YANA', 'FRANK DAYIRO', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (54, 'PONCE BELIZARIO', 'ANYHELINA YURY', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (55, 'TURPO GUTIERREZ', 'LUZ YOSELYN', 3, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (56, 'APAZA MENDOZA', 'Jhampier Jairo', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (57, 'BARRIALES TUTACANO', 'Sheyla Shemy', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (58, 'CACERES VALENZUELA', 'Leo Adriel', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (59, 'CANO CASTELO', 'Illary Capsuco', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (60, 'CONDORI HURTADO', 'Erick Joel', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (61, 'CONDORI VILCA', 'Dayana Jadde', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (62, 'FLORES MENDOZA', 'Analy Trinidad', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (63, 'HANCCO TUTACANO', 'Shandy Melissa', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (64, 'MAMANI CARBAJAL', 'Alejandra Brouzkaren', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (65, 'MAMANI MAQUE', 'YOSEL', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (66, 'MAMANI TORREBLANCA', 'Yeferson Neymar', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (67, 'MONTES LUCAÑA', 'Karim Yoshue', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (68, 'PARICAHUA AGUILAR', 'Pady Ysabel', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (69, 'PATATINGO CUCHUYRUMI', 'Marco Victor', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (70, 'QUISPE LLACSA', 'Mirian Yessy', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (71, 'QUISPE SAYA', 'Yanet Milagros', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (72, 'SARAYA MAXI', 'Antony Baldemar', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (73, 'TACURI RIQUELME', 'Jesus Rodrigo', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (74, 'TAPARA GUTIERREZ', 'Nelson Puyol', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (75, 'TINTA MAMANI', 'Arely Yumni', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (76, 'YARESI YUPANQUI', 'Daniel Eusebio', 4, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (77, 'ALATA PONCE', 'Sandra Nayely', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (78, 'BARRIENTOS CUTIPA', 'Jhazel Jazlyn', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (79, 'CAHUANA CAYLLAHUA', 'Josemanuel Dickon', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (80, 'CANO PACO', 'Cristhiano Joshua', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (81, 'CARTA MAMANI', 'Dani Joel', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (82, 'LLANOS TORRES', 'Anhaly Jorley', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (83, 'MAMANI LIMA', 'Isaias Jefthe', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (84, 'MENDOZA FLORES', 'Bianka Yhadira', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (85, 'MOLLO QUISPE', 'Jhanfranco Milder', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (86, 'PACCO RAMOS', 'Ludmir Leonel', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (87, 'PACCO TAPARA', 'Zhenyu', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (88, 'QUISPE CARRASCO', 'Alexis Alonso', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (89, 'QUISPE MAMANI', 'Juan Miguel', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (90, 'QUISPE MOROCCO', 'Mariela Nayeli', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (91, 'QUISPE SALGADO', 'Mayra Kamila', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (92, 'RAMOS TRUJILLANO', 'Maycol Yhoel', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (93, 'TACAR QQUINCHO', 'Juvenal', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (94, 'TAPIA CANCAPA', 'Jolmer Antony', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (95, 'TINTA CCOA', 'Hector Javier', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (96, 'TINTA MAQQUE', 'Kriys Analy', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (97, 'ZEVALLOS CARRASCO', 'Yarely Estefany', 4, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (98, 'ANAHUI CHOQUEPATA', 'Lisseth Erika', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (99, 'ANCCASI PARI', 'Leydy Lisbeth', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (100, 'CACHURA SACA', 'Ashly Karem', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (101, 'CALSINA VILCA', 'Luz Flor', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (102, 'CHURA CONDORI', 'Naeli Miriam', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (103, 'CHURA TTITO', 'Bekan Wilber', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (104, 'CONDORI RODRIGO', 'Robert Max', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (105, 'FERNANDEZ PACCO', 'Dany Vladimir', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (106, 'FLORES PARI', 'Jose Marcial', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (107, 'GUTIERREZ YARISE', 'Shantal Yamilet', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (108, 'MAMANI LANUDO', 'Shannel Dayiro', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (109, 'MAMANI MEDRANO', 'Gianpiero Alonso', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (110, 'PERALTA QUISPE', 'Javier Edison', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (111, 'QUISANI TACCA', 'Nilda Flor', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (112, 'QUISPE HUAMAN', 'Mery', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (113, 'RIQUELME ZUBIETA', 'Sergio', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (114, 'TACCA MOLINA', 'Soledad Erika', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (115, 'TACURI BARRAGAN', 'Alexis', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (116, 'TACURI RAMOS', 'Adolfo Yoel', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (117, 'VILCA MAMANI', 'Yudith Analy', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (118, 'YARESI COZO', 'Analy Yarihtza', 4, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (119, 'Aroni Quispe', 'Royer Wilson', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (120, 'Calsina Coloque', 'Madeleine', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (121, 'Chala Avila', 'Angelina ', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (122, 'Choquehuanca Huaman', 'Shayla Katerine ', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (123, 'Chua Aguilar', 'Edith Danea', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (124, 'Chura Montalvo', 'Blanca Daysi ', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (125, 'Chura Montalvo', 'Yanet Sulma', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (126, 'Figueredo Zubieta', 'Analy Nadyn ', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (127, 'Hanccori Apaza', 'Leonel Jaime ', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (128, 'Huaman Teofilo', 'Rody', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (129, 'Lazarte Pachapuma', 'Fernando Jose', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (130, 'Lima Medina', 'Stefanny Giselle', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (131, 'Mamani Mamani', 'Alexandra Luz', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (132, 'Maras Arizabal', 'Alexis Mitward', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (133, 'Pizarro Huanca', 'Kalef Edgar', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (134, 'Puma Mamani', 'Miguel Angel ', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (135, 'Sayhua Lima', 'Katherin Diani ', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (136, 'Soncco Aleman', 'Deyvis Yhuri', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (137, 'Vilca Luque', 'Miguel Angel ', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (138, 'Nayda Luz', '', 4, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (139, 'ACCCHA COA', 'Yhulma Damaris', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (140, 'ALEMAN ALARCON', 'Susan Yaneth', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (141, 'CALSINA CALLIZANA', 'Jaquelin', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (142, 'CANO CCAMA', 'Yonatan Michel', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (143, 'CCORI GUTIERREZ', 'Josefernando', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (144, 'CHURA MAYHUA', 'Luis Fernando', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (145, 'CONDORIO QUISPE', 'Bladimir Nicanor', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (146, 'FLORES GUTIERREZ', 'Neyli Shomara', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (147, 'GARATE DE', 'LA FLOR Blanca Flor', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (148, 'HUALLPA HUANCA', 'Juan Carlos', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (149, 'MENDOZA BORNAS', 'Teves', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (150, 'QUISPE YARESI', 'Jennyfer Gimena ', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (151, 'RAMOS QUISPE', 'Belinda', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (152, 'SALGADO HUAMAN', 'Shyrley Danaee', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (153, 'SANCA GUZMAB', 'Yeison Michel', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (154, 'SONCCO PUMAQUISPE', 'Yaquelin', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (155, 'TACCA FLORES', 'Cliver Eriks', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (156, 'TITO PACCO', 'Nionel', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (157, 'YARESI PUMAQUISPE', 'Gendia', 4, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (158, 'ANDRADE MAMANI', 'Shantal Katerine ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (159, 'CCUNO VILCA', 'Aldair Fernando', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (160, 'CHOQUEHUANCA HUAMAN', 'Angel Raul', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (161, 'CHUMBILLA ESENARRO', 'Roy Rivaldo ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (162, 'CONDORI CANAZA', 'Yissell Alexandra ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (163, 'CONDORI MUÑOZ', 'Exon Maycol', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (164, 'CONDORI VILCA', 'Percy Ivan', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (165, 'HUAMAN TITO', 'Mary Cielo ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (166, 'HUMALLA QUISPE', 'Edwar Jheron ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (167, 'LIMACHE FLORES', 'Lizbeth Thania', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (168, 'PUMA PELAEZ', 'Adalid Osniel ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (169, 'QUISPE CENTENO', 'Susan Mayte ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (170, 'QUISPE HUALLA', 'Adeliz Nayely ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (171, 'QUISPE QUISPE', 'Vivian Griss', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (172, 'QUISPE TORDOYA', 'Juvenal Davis ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (173, 'RODRIGUEZ MUÑOZ', 'Analy Gimena', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (174, 'SAYHUA CHURA', 'Wilber David ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (175, 'SOLORZANO HUARSAYA', 'Flor De Maria ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (176, 'TACURI TORRICO', 'Yusidey Yanelis ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (177, 'TORREBLANCA LIMACHE', 'Vicki ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (178, 'VILCA MAMANI', 'Kevin Yasmani ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (179, 'YUCRA SAYA', 'Jordhy Axel ', 4, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (180, 'ARIZACA LIMACHELuz', 'Evely', 5, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (181, 'BERROCAL YAPO', 'Jose joel', 5, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (182, 'FLORES OBLITAS', 'Meliza', 5, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (183, 'HACCA CONDORPOCCOJosue', 'Misael', 5, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (184, 'HACCA MARRON', 'Mirian Nayaely', 5, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (185, 'HUAHAUSONCCO ARONI', 'Jhon Yasi', 5, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (186, 'LIMACHE MARRON', 'Nelsa Emerita', 5, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (187, 'lIMACHE MARRON', 'Sanny Emma', 5, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (188, 'LIMACHE PERALES', 'Lucy Thania', 5, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (189, 'MONRROY MAMANIYandel', 'Roly', 5, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (190, 'PAMPA CAHUANAAlicia', 'Lisbeth', 5, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (191, 'PAMPA LIMACHE', 'Sunmerly', 5, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (192, 'SONCCO QUISPE', 'Aldair Dickson', 5, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (193, 'YEPEZ LAYME', 'Jhambyk antohony', 5, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (194, 'QUISPE QUISPECONDORI', 'Jayer', 6, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (195, 'SOLORZANO TACORA', 'Neymar Eddy', 6, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (196, 'SONCCO APAZA', 'Carlos Yoel', 6, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (197, 'SURCO PACHA', 'Yeferson', 6, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (198, 'TAPIA QUISPE', 'Lexmy Yarita', 6, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (199, 'VALERIANO TAPIA', 'Kenyi Yeferson', 6, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (200, 'VALERIANO MAMANI', 'SONIA ELIZABETH ', 7, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (201, 'QUISPE QQUELCCALUIS', 'GABRIEL', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (202, 'QUISPE CALLOHUANCA', 'JHUNIOR SANTIAGO', 7, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (203, 'QUISPE APAZA', 'ELIS ROSMERY', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (204, 'QUIRO CHUCHI', 'YHONNY YANDEL ', 7, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (205, 'MERMA MAMANI', ' YURYURIEL SHANEL ', 7, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (206, 'MAMANI HUAHUASONCCO', 'JHON SAMUEL', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (207, 'MAMANI CHALLAPA', 'JOEL ANTONY', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (208, 'MAMANI CAHUANA', 'SAYURI KATERIN ', 7, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (209, 'MAMANI CAHUANA', 'NATALY ROSA ', 7, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (210, 'LUQUE CASTELLANOS', 'BIANCA NICOL', 7, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (211, 'LAURA TURPOMIRIAN', 'MARIA FERNANDA', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (212, 'HUMALLA LOAYZAANGIE', 'PAMELA', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (213, 'HUMALLA CCANCCAPA', 'VALERIA ARACELY', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (214, 'HUMALLA CCAMA', 'SOL ANALY', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (215, 'HUARANCCA VILCA', 'LUZVY YONMY', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (216, 'GUTIERREZ MAMANI', 'MILDER', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (217, 'FARFAN ZOLOAGA', 'MIRIAN  MARITZA', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (218, 'FARFAN TURPO', 'KELY YASMIN ', 7, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (219, 'FARFAN CHOQUELOQUE', 'OSCAR DENNIS ', 7, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (220, 'CONDORI HUMALLA', ' GRETHY YOSELINDA ', 7, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (221, 'CHUSI CCANCCAPA', 'ANALY MILAGROS ', 7, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (222, 'CHUCHI MOROCCO', 'ANDERSHON DERLY', 7, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (223, 'CHUA VENTURA', 'MIJAEL JHONATAN', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (224, 'CHALLAPA CHUPA', 'ELIOT JHON FREY', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (225, 'CALSINA TURPORONEL', 'ALDAIR', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (226, 'APAZA VILCA', 'YOHENIL MAYCOL', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (227, 'APAZA VILCA', ' YOHENIL MAYCOL', 7, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (228, 'CAYO QUISPECONDORI', 'Ney Dayiro', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (229, 'FUENTES VALENCIA', 'Flor Esperanza', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (230, 'MACHACA CRUZ', 'Katy Nayely', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (231, 'MAMANI TEJADA', ' Anthony Berklin', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (232, 'MAZA QUISPE', 'Angie Luz', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (233, 'MOLLO HUILCA', 'Yamilet Jayuri', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (234, 'PEREZ LAURA', ' Yandy Willy', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (235, 'QUISPE CRUZ', ' Gris Yoana', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (236, 'QUISPE ORDOÑEZ', 'Edilson Jose', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (237, 'RAMOS ENRIQUEZ', 'Luz Cielo', 7, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (238, 'APAZA CALDERON', 'María Fernanda', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (239, 'BARRIALES CONDORI', 'Ana Gabriela', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (240, 'BELLIDO AGUILAR', 'Neymar Xavi', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (241, 'CCAHUANA CCAMA', 'Brith Sheyla', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (242, 'CHINO APAZA', 'Milagros Camila', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (243, 'CHUSI PACOSONCO', 'Leydi Shamila', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (244, 'COZO CCAMA', 'Yamilet Evelin', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (245, 'GONZA CCAMA', 'Flor de María', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (246, 'HUAMANTUCO VALERIANO', 'Rosario Dioselina', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (247, 'NAREZO ROCHA', 'Amadeo Benjamin', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (248, 'PACHECCA CAHUANA', 'Simeone Jhairo', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (249, 'PALOMINO CCAHUANA', 'Yifer Hefrazil', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (250, 'PHOCCO AGUILAR', 'Luis Fernando', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (251, 'QUISPE PHOCCO', 'Eduardo Mateo', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (252, 'VALERIANO MAMANI', 'Flor Kelin', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (253, 'VALERIANO PHOCCO', 'Floricielo', 8, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (254, 'ANAHUI MAQUE', 'Flor de María', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (255, 'AQUINO HUALLA', 'Dandi Deysi', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (256, 'ARPITA MAQUE', 'Darwin Elvis', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (257, 'CCOA ANAHUI', 'Yeny Lizeth', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (258, 'CHOQUEHUANCA GRETA', 'Mendyaneth', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (259, 'CHURA PUÑO', 'Juan Carlos', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (260, 'FLORES HUAMANTUCO', 'Danitza Mayvee', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (261, 'FLORES ROSAS', 'Julia Virginia', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (262, 'FLORES VILCA', 'Aida Kiara', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (263, 'GUTIERREZ PUMA', 'Danny Yeison', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (264, 'HANCCO APAZA', 'Yandi Belinda', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (265, 'HANCCO ', 'CCOA Jhon Jhayson', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (266, 'HUARSAYA TINTA', 'Lizeth Briseyda', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (267, 'MACEDO CARBAJAL', 'Roseysela Dennis', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (268, 'MACEDO HUAMANTUCO', 'Yon Lider', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (269, 'MOROCCO CHOQUEHUANCA', 'Flor Sonia', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (270, 'RAMOS HANCCO', 'Cristhian Abel', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (271, 'ROSAS LIMACHE', 'Yaneth Yobana', 9, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (272, 'APUCOSI QUISPE', 'Mayly Emely', 10, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (273, 'APUCUSI CASTRILLO', 'Lizeth Eveli', 10, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (274, 'CCUNO TITO', 'Lizyandi Menguiy Nayely', 10, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (275, 'CHAMBI YUPANQUI', 'Yeremy Neymar', 10, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (276, 'HUALLA QUISPE', 'Gleny Marleny', 10, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (277, 'LLANOS MAMANI', 'Gladymel Patty', 10, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (278, 'BELLIDO MOLLO', 'JEAN FRANK', 11, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (279, 'MAQQUE MOLLO', 'AYMAR', 11, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (280, 'MOLLO CABRERA', 'MAGNO', 11, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (281, 'PACCO CONDORI', 'JHOVAN W', 11, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (282, 'QUISPE GARRIDO', 'AYDA LUZ', 11, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (283, 'QUISPE SOLIS', 'ROY ELBIO', 11, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (284, 'QUISPE SURCO', 'YERSON ARTURO', 11, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (285, 'TEJADA CRUZ', 'JHOJAN', 11, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (286, 'PEREZ', 'PEREZ', 11, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (287, 'PEREZ', 'PEREZ', 11, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (288, 'ALFEREZ CAHUANA', 'YOEL', 12, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (289, 'BERMUDES PACCOSONCCO', 'MARIELA INAIDA', 12, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (290, 'GONZALES BERMUDEZ', 'NOEMI FLOR', 12, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (291, 'PEREZ VIRUNDE', 'RUDY ELIAZAR', 12, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (292, 'VILLAGRA HANCCO', 'SHADY JHOANA', 12, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (293, 'Ccoyori Quispecondori', 'Yordy Denis', 13, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (294, 'Sucapuca Tejada', 'Erick Oliver', 13, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (295, 'APAZA QUISPE', 'Yenifer Shantal', 14, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (296, 'CAHUANA AGUILAR', 'Rosiel Nyeli', 14, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (297, 'LIZAMA QUISPE', 'Yuly Mayumi', 14, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (298, 'MONRROY LEZAMA', 'Cristhian Jandel                     ', 14, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (299, 'SACACA CONDORI', 'Arjen Dillmar', 14, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (300, 'VALENZUELA HANCCORI', 'Britney Lizet', 14, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (301, 'VARGAS UMALLA', 'Yetson Yeremy', 14, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (302, 'ACROTA AGUILAR', 'Rigoberto Manuel', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (303, 'ARAUJO FLORES', 'Leonel Marcos', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (304, 'CHURA ESPETIA', 'Anali ', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (305, 'CHURA RAMOS', 'Maria Elizabeth', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (306, 'CONDORI HUAYQUILLA', 'Oscar', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (307, 'CRUZ CCAMA', 'Evangelina', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (308, 'GUTIERREZ MAMANI', 'Lizbeth Eva', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (309, 'HERPANOCCA TORRES', 'Edwin', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (310, 'LIMACHE PERALTA', 'Luz Marina', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (311, 'MAMANI APAZA', 'Randy Oliver', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (312, 'MAMANI VALENZUELA', 'Nayda Isabel', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (313, 'MENDOZA PUMA', 'Flora Mashel', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (314, 'MOLLOCONDO CHOQUELUQUE', 'Karen Adelma', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (315, 'OBLITAS PERALTA', 'Estrella Nayely', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (316, 'PERALTA MAMANI', 'Luis Miguel', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (317, 'PUMA GUZMAN', 'Demecio', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (318, 'QUISPE BARRAGAN', 'Carlos Rodrigo', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (319, 'QUISPE BARRAGANMarco', 'Antonio', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (320, 'RAMOS MAMANI', 'Leonel Maycor', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (321, 'RAMOS MOLLO', 'Eddy Roy', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (322, 'RAMOS VILCA', 'Paul Benjamin', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (323, 'RIVERA MENDOZA', 'Brandom Ariel', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (324, 'SALAZAR CUNO', 'Roxana Isis', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (325, 'SULLCA PARI', 'Jhon Maycol', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (326, 'VALENZUELA CALLOHUANCA', 'Sindia Severiana ', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (327, 'VEGA PERALTA', 'Cristhian Edwin', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (328, 'VIVEROS RAMOS', 'Daniela Fernanda', 15, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (329, 'CHUMBILLA PACCO', 'SAYUMI ZUMAYA', 16, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (330, 'COA QUISPE', 'JHAEL DONOBAN', 16, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (331, 'LAGAR PUMAKAJA', 'TREISY CLARIBETH', 16, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (332, 'QUISPE CRUZ', 'IVAN HERMAIN', 16, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (333, 'QUISPE ICHUTA', 'EYDI NEDALI', 16, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (334, 'QUISPE LIMA', 'MAX MERG', 16, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (335, 'QUISPE MAMANI', 'MARCIA', 16, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (336, 'QUISPE YAPO', 'GREYSS RITA', 16, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (337, 'QUISPECONDORI HUAMAN', 'LIN JETSUN', 16, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (338, 'Accarapi Aguilar', 'Yenifer Kely', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (339, 'Albornoz Aguilar', 'Jhostin Fernando', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (340, 'Arone Pacco', 'Anghy Briyit', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (341, 'Ataulluco Mamani', 'Neymar Jhairo', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (342, 'Caballero Huaman', 'Shary Anahi', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (343, 'Carta Chosi', 'Jhostin Jiampier', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (344, 'Cayo Salca', 'Jayde', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (345, 'Ccallasaca Huallpa', 'Yonmi Julieta', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (346, 'Ccallo Ramos', 'Angie Kiara Janli', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (347, 'Checmapuco Bornaz', 'Dreix Geampiero', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (348, 'Cruz Guzman', 'Rimbert Roy', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (349, 'Flores Mendoza', 'Brisayda', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (350, 'Gayoso Garcia', 'Sandra Anahi', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (351, 'Hancco Vargas', 'Gabriela', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (352, 'Huaricacha Aguilar', 'Marlon', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (353, 'Huaricacha Mamani', 'Renzo Samin', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (354, 'Mamani Chambi', 'Yinyu Leonel', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (355, 'Molina Rivera', 'Roxsana', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (356, 'Morocco Carrazco', 'Diego', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (357, 'Ocsa Hualpa', 'Jeampiero Axel', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (358, 'Ortiz Quispe', 'Italo Mathias', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (359, 'Ponce Figueroa', 'Anahi Fernanda', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (360, 'Ramos Pacsi', 'Carla Yesenia', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (361, 'Riquelme Condori', 'Yosmel Diorel', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (362, 'Suichiri Vargas', 'Marisol', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (363, 'Yucra Soncco', 'Yutmaly Nery', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (364, 'Zapata Cuchuiruni', 'Yelstin Harold', 17, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (365, 'ABARCA QUISPE', 'Ramiro Edgar', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (366, 'ACHENQUIPA CCOA', 'Kiara Kimberly M.', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (367, 'ANAHUI AGUILAR', 'Paola Sayuri', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (368, 'ARIZALA CCAPCHA', 'Grecia Ingrid', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (369, 'AZCUE CONDORI', 'Axel Saul', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (370, 'BUSTINZA VILCA', 'Max Alberto', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (371, 'CALLE YAYUARCANI', 'Zulma Iriz', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (372, 'CAYO MOLINA', 'Jhon Cesar', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (373, 'CCUNO RAMOS', 'Neymar Paolo', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (374, 'CHECMAPUCO SUAÑA', 'Jose Luis', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (375, 'COAQUIRA ALFEREZ', 'Michael Oscar', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (376, 'CORDOVA CONDORI', 'Yojan Yosi', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (377, 'CRUZ HUAMANI', 'Maykol Leonel', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (378, 'GAYOSO VARGAS', 'Yesica', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (379, 'HANCCO YAMPASI', 'Miguel Angel', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (380, 'HUANCA LUCAÑA', 'Alejandra Yuneimi', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (381, 'MAMANI HUAQUISTO', 'Johan Davizon', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (382, 'MAYHUA HUAQUISTO', 'Yady Cahori', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (383, 'MERMA APAZA', 'Alex Brus', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (384, 'MERMA CONDORI', 'Xavi Alonso', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (385, 'MOLINA CHURATA', 'Ollanta Vladimir', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (386, 'MOROCOIDE CORDOVA', 'Valery Azumy', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (387, 'QUISPE CONDORI', 'Leydi Stefani', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (388, 'QUISPE SUCAPUCA', 'Jhosimar Giovani', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (389, 'RODRIGUEZ SUICHIRI', 'Nilda Kiara', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (390, 'SANCHEZ PARI', 'Mark Senaine', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (391, 'TAPIA SAYHUA', 'Jhorman Edmundo', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (392, 'TICONA SAYHUA', 'Sheyla', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (393, 'ZEGARRA TTITO', 'Juliet Zaray', 17, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (394, 'AGUILAR AMESQUITA', 'ANDREE MISSAEL', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (395, 'APAZA CCAZA', 'NADINE SOYFER', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (396, 'BLAS RIVERA', 'ROCIO MARLENY', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (397, 'CALSINA MENDOZA', 'YIDDA PHOENIX', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (398, 'CARRASCO COLOMA', 'LUIS MIGUEL', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (399, 'CAYO SALCA', 'SHYME YOHEL', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (400, 'CHACON JARATA', 'PATRICK ANTHONY', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (401, 'CHIPANA VALERIANO', 'GELSON KHALED', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (402, 'CHOQUE PACSI', 'ANTONY VALENTIN', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (403, 'CHURA QUISPECONDORI', 'YOSHIRO', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (404, 'ESPINOSA MARCANI', 'JEREMI', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (405, 'FLORES FOROCA', 'JEANCARLOS', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (406, 'GONZALES QUISPE', 'AMILKAR GABRIEL', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (407, 'HUARACALLO ARENAS', 'SHARMELY MINHYI', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (408, 'HUAYLLA MAMANI', 'MAX AXEL HARRY', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (409, 'LUCANA CHECMAPUCO', 'FREDT CALEB', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (410, 'LUQUE JACHO', 'SOFIA DINA', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (411, 'MENDOZA HUARAYA', 'MAX SAMIR', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (412, 'MIRANDA VARGAS', 'JACKELINE', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (413, 'MULLISACA CHUMBILLA', 'JEFFERSON PAUL', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (414, 'QUISPE OCSA', 'KRISH ANTONIO', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (415, 'QUISPE PACSI', 'ZUJEY AZUMI', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (416, 'QUISPE TITO', 'SELENE KATALEYA', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (417, 'TAPIA TITO', 'NEYMAR', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (418, 'THUPA PACCO', 'NEYMAR YASTIN', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (419, 'TRUEBAS CHACON', 'JANALOREN LUCERO', 17, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (420, 'CACERES TEJADAAxel', 'Raidi', 18, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (421, 'ENRIQUEZ VILCA', 'Yover Fernando ', 18, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (422, 'HUANCA CHUQUITARQUI', 'Noe', 18, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (423, 'MAMANI MAMANI', 'Lizbeth Karen', 18, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (424, 'MAMANI VELAZCO', 'Allison Miley', 18, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (425, 'MITA TEJADA', 'Nilthon Yandel', 18, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (426, 'OCHOA TAPIA', 'Kely Melany', 18, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (427, 'QUISPE COPARA', 'Linhet Helhen', 18, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (428, 'QUISPE GONZALES', ' Jhon Gedeon', 18, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (429, 'QUISPE TEJADA', ' Neymar Cesar', 18, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (430, 'TEJADA CABRERA', ' Cristhian  Roni', 18, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (431, 'ZEBALLOS LIMA', 'Emely Shakira', 18, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (432, 'ACHAQUIHUI PATATINGO', 'Liz Delia', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (433, 'ALTAMIRANO MAMANI', 'Noemí Florlinda', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (434, 'CARRASCO QUISPE', 'Karen Romina', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (435, 'CCAMA QUISPE', 'Jimena Diana', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (436, 'COILA MACHICADO', 'Jasmin Gianela', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (437, 'CONDORI CHAMBI', 'Eddu Enrique', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (438, 'CONDORI PINEDA', 'Diego Rubiño Cafu', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (439, 'FLORES FIGUEREDO', 'Mildreth Blanca', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (440, 'GUZMAN CCAMI', 'Reyna', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (441, 'LUNA PATATINGO', 'Dany Alejandro', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (442, 'MAMANI CASTRILLO', 'Joel Nilzon', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (443, 'MAMANI SONCCO', 'Nuria Anahy', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (444, 'NINA MITA', 'Alex René', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (445, 'PATATINGO SOLIS', 'Yuli', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (446, 'RODRIGUEZ GUZMAN', 'Sheyla Gimena', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (447, 'SOLIS ZUBIETA', 'Yetty Rosales', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (448, 'VALDEZ QUISPE', 'Natsumi Tarlin', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (449, 'VALERIANO ZUBIETA', 'Angel Remigio', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (450, 'ZUBIETA CASTRO', 'Yuri Mayhumi', 19, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (451, 'Achata Ccoa', 'Nora Romina', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (452, 'Choquepata Turpo', 'Gary Abel', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (453, 'Condori Turpo', 'Yordy Florian', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (454, 'Condori Vega', 'Denisse Analiz', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (455, 'Condori Vega', 'Jose Miguel', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (456, 'Coronel Condori', 'Mary Carmen', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (457, 'Coronel Mamani', 'Shandy Flor', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (458, 'Huaman Vega', 'Emerson Anthony', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (459, 'Humalla Huaman', 'Renso Alexanders', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (460, 'Llacsa Quispe', 'Milder Briner', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (461, 'Pachapuma Pachapuma', 'Maria Fer.', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (462, 'Pachapuma Quispe', 'Xiara Brignet', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (463, 'Quispe Vega', 'Rossmery Analy', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (464, 'Saca Hancco', 'Yeferson Diego', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (465, 'Valencia Hancco', 'Walter Yohojan', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (466, 'Vega Quispe', 'Diógenes', 20, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (467, 'AROCUTIPA MORALES', 'Leonardo Santos', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (468, 'AVILA ROSEL', 'Dayiro Ademar', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (469, 'BUSTINZA CONDORI', 'Jose Williams', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (470, 'BUSTINZA CONDORI', 'William Henrry', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (471, 'CACERES PARI', 'Deysi Abigael', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (472, 'CARHUAPOMA MAMANI', 'Camila Anais', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (473, 'CARPIO COLLANTES', 'Briana Yeris', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (474, 'DIAZ QUISPE', 'Maythe Pamela', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (475, 'GUZMAN CARRASCO', 'Xiomara María Cristel', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (476, 'MAMANI HILAHUALA', 'Genesis Zulet', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (477, 'PACCO QUISPE', 'Dayron Dayiro', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (478, 'ROJAS CHAMBI', 'Edi', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (479, 'SUCARI TTITO', 'Luigi Freuder', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (480, 'TAPARA RAMOS', 'Alexis Jeremy', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (481, 'VARGAS BACA', 'Denilson Antony', 21, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (482, 'ANDIA CALCINA', 'BRITNEY BANERY', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (483, 'CABRERA CCAMI', 'JOSSENID BRIGIE', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (484, 'CALCINA QUISPE', 'ROSSE SOLEDAD', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (485, 'CHAMBI CONDORI', 'EDU NEYMAR', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (486, 'CHAÑI ALARCON', 'ANDREW EUSEBIO', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (487, 'CHURA TUMI', 'PIERO ADRIANO', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (488, 'GUARDIA VALDEZ', 'PIERINA KAORI', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (489, 'GUERRERO CRISANTO', 'FABRICIO JESUS', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (490, 'GUTIERREZ CONDORI', 'EYMI SARITH', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (491, 'MACHACA YANA', 'THELMA ZHAMIRA', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (492, 'MAMANI ANDRADE', 'MILETT SOLIMAR', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (493, 'MOLLO BERMEO', 'THIAGO ANDY', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (494, 'NINA MAYTA', 'JOSE ANTONIO', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (495, 'QUISPE CLAVITEA', 'AVRIL MILETT', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (496, 'QUISPE TURPO', 'JHON ALDO', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (497, 'SOPLAPUCO FUENTES', 'RENATA DE LOS ANGELES', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (498, 'SUCARI JUAREZ', 'MILENA YASHIRA', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (499, 'TORRES CAYTE', 'LEYSI ANHELY', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (500, 'VALDEZ CALCINA', 'MARYCIELO NICOL', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (501, 'VILLAZANTE SALCCA', 'YAMILETH DAYANA', 21, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (502, 'ANAHUI MAMANI', 'Jose Ivan', 22, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (503, 'HANCCO MERMA', 'Cristian Ronaldo', 22, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (504, 'MAMANI ZUBIETA', 'Brizaida Roxana', 22, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (505, 'MAMANI ZUVIETA', 'Nayda Luz', 22, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (506, 'MERMA GUZMAN', 'Nadynne Susana', 22, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (507, 'QUISPE HUAQUISTO', 'Antauro', 22, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (508, 'YUCRA LUCAÑA', 'Wendy', 22, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (509, 'CALLIZANA SACACA', 'Hector Raul', 23, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (510, 'CHUA CALLIZANA', 'Abimelec isbaq', 23, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (511, 'CHUA GUTIERREZ', 'Liz Analy', 23, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (512, 'QUISPE CHURATA', 'Sheyla liliana', 23, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (513, 'TAPARA CAHUANA', 'Dennys Antony', 23, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (514, 'ATAMARI GARCÍA', 'Yasmín Clarivet', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (515, 'ATAMARI QUISPE', 'Rosmeri', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (516, 'BUSTINCIO QUISPE', 'Edy Fernando Daniel', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (517, 'CAYO MOLINA', 'Yeni Elizabeth', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (518, 'GAYOSO MOLINA', 'Jhon Elder', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (519, 'GUTIERREZ POZO', 'Abigael Flor', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (520, 'GUTIERREZ USCAMAYTA', 'Yosimar', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (521, 'LLANOS MOLINA', 'Guido', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (522, 'MERMA VARGAS', 'Yodenid', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (523, 'MOLINA CUBA', 'Ademir Deivid', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (524, 'MOLINA MAMANI', 'Yesica Marily', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (525, 'MOLINA MOLINA', 'Ruth Sayda', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (526, 'MOLINA SALCCA', 'Andre Yovana', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (527, 'POSO MAMANI', 'Sayda Lisbeth', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (528, 'POSO MAMANI', 'Victor', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (529, 'POZOMOLINA Jerson', 'Antauro', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (530, 'QUISANI APAZA', 'Eliot Jesús', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (531, 'QUISANI APAZA', 'Maytee', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (532, 'SALCCA CCASA', 'Rony Clever', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (533, 'USCAMAYTA MOLINA', 'Mayra Gissel', 24, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (534, 'CARRASCO APAZA', 'Nayeli ', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (535, 'CARRASCO QUISPE', 'Nayda Rusbelu', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (536, 'CCATACCORA HUAYTA', ' Zulma', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (537, 'CUBA AVILA', 'Kevin Edu', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (538, 'ESPINOZA MAMANI', 'Juan Josue', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (539, 'GALARZA MOLINA', 'Alonzo Adriano', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (540, 'GUTIERREZ MOLINA', 'Yeny Luzed', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (541, 'GUTIERREZ MOLINA', 'Yiyme Soraya', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (542, 'MAMANI CHIVES', 'AzumiMaribel', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (543, 'MAMANI GUTIERREZ', 'Romario', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (544, 'MAMANI QUIZANI', 'Lurdes Emile', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (545, 'MOLINA HUAYTA', 'Roy Andy', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (546, 'MOLINA MOLINA', 'Edwin Mrio', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (547, 'PACCO CUBA', 'Leila Minerva', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (548, 'POZO URQUIZO', 'Mariluz ', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (549, 'QUISANI MENDOZA', ' Maegarita Marelina', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (550, 'QUISPE FLORES', 'Edwin Andy', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (551, 'USCAMAYTA MERMA', 'Peñayro', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (552, 'ZAPANA SILVESTRE', 'Ruben', 24, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (553, 'CCAHUANA GARCIA', 'Acler Cleto', 25, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (554, 'Ccanccapa Maque', 'David Samuel', 26, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (555, 'Ccotaluque Vega', 'Marilu Wendy', 26, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (556, 'Flores Llacsa', 'Edgar Elmer', 26, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (557, 'Laura Ramos', 'Deyvis Yoel', 26, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (558, 'Mamani Chicahuari', 'Lisbeth Diana', 26, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (559, 'Mamani Mayhua', 'Myriam Rocio', 26, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (560, 'Mamani Tordoya', 'Myrian Teresa', 26, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (561, 'Mayhua Mamani', 'Franklin Alexander', 26, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (562, 'Onofre Caceres', 'Irma Beatris', 26, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (563, 'Percca Salas', 'Randdy Yheremy', 26, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (564, 'Trujillano Quispe', ' Frank Yhony', 26, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (565, 'Vega Tejada', 'Andy Alberto', 26, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (566, 'Vega Tordoya', 'Greys Gimena', 26, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (567, 'APAZA MARRON', 'MARISOL', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (568, 'CAHUANA APAZA', 'TATIANA SHOMARA', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (569, 'CALDERON CONDORI', 'IVEHT YERLI', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (570, 'HUANCA APAZA', 'TREYSI BETHZA', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (571, 'HUANCA PACCOTICO', 'SULMA DIANA', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (572, 'LAYME CAHUANA', 'NAYOVI BELINDA', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (573, 'MAMANI TRUJILLO', 'MARIBEL', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (574, 'PACCO CHARCA', 'JORGE LUIS', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (575, 'PACCOTICO PEREZ', 'ALEX NEYMAR', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (576, 'QUELCCA LAYME', 'CRISS MARY', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (577, 'PILCO GOZME', 'NELCY LADY', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (578, 'SUERO MUÑOZ', 'DANITZA RUBY', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (579, 'TITO TURPO', 'YHEYSON', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (580, 'TURPO HUANCA', 'JACK DAYIRO', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (581, 'ZARATE CONDORI', 'DAYCLER', 27, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (582, 'NINA BERMUDEZ', 'Ruth', 28, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (583, 'HUANCA SIRENA', 'Yandy Meriyen', 28, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (584, 'QUISPE QUISPE', 'José gabriel', 28, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (585, 'SIRENA PACCOSONCCO', 'Milagros Adely', 28, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (586, 'castellanos cabrera', 'exel  duvan', 29, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (587, 'lima zuñiga', 'joey diland', 29, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (588, 'quispe condori', 'copara samira', 29, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (589, 'CALDERON', 'CALDERON', 30, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (590, 'CHALLA MOLINA', 'ROCIO', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (591, 'MOLINA CHALLA', 'LIZET', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (592, 'MOLINA MENDOZA', 'KELY FLOR', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (593, 'MOLINA RIVERA', 'LENIN LEONEL', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (594, 'MOLINA SUECCHIRE', 'JEFERSON', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (595, 'MOLINA SUICHIRI', 'MARIA', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (596, 'MOLINA TACCA', 'ROY SAUL', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (597, 'PILCO MENDOZA', 'LEYDI KAREN', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (598, 'PILCO MENDOZA', 'YESSICA', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (599, 'PILCO MOLINA', 'EDSON', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (600, 'RIVERA MAMANI', 'MARIO', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (601, 'MOLINA SUICHIRI', 'BERTHA', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (602, 'RIVERA SUICHIRI', 'ROSA MARGARITA', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (603, 'CHALLA MOLINA', 'ROCIO', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (604, 'MOLINA CHALLA', 'LIZET', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (605, 'MOLINA MENDOZA', 'KELY FLOR', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (606, 'MOLINA RIVERA', 'LENIN LEONEL', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (607, 'MOLINA SUECCHIRE', 'JEFERSON', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (608, 'MOLINA SUICHIRI', 'MARIA', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (609, 'MOLINA TACCA', 'ROY SAUL', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (610, 'PILCO MENDOZA', 'LEYDI KAREN', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (611, 'PILCO MENDOZA', 'YESSICA', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (612, 'PILCO MOLINA', 'EDSON', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (613, 'RIVERA MAMANI', 'MARIO', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (614, 'MOLINA SUICHIRI', 'BERTHA', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (615, 'RIVERA SUICHIRI', 'ROSA MARGARITA', 30, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (616, 'CALDERON', 'CALDERON', 30, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (617, 'AYMA NAREZO', 'Sofia', 31, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (618, 'CUBA QUISPE', 'Angeles Paloma', 31, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (619, 'MAMANI HUMALLA', 'Dylan Jhoel', 31, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (620, 'HUILLCA RODRIGUEZ', 'JAVIER', 32, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (621, 'LEQUE GOZME', 'SHAROL MAYUMI', 33, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (622, 'MAYTA CARRAZCO', 'NELSON GEOVANY', 33, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (623, 'MAYTA YUNGANINA', 'JUAN MAYCOL', 33, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (624, 'MONTESINOS QUISPE', 'SUNMIY RAFAELA', 33, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (625, 'VERUNDI ANAHUI', ' YHEFERSON', 33, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (626, 'ALATA COZO', 'Yoset', 34, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (627, 'GUZMAN PACCO', 'Yanely Rossy', 34, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (628, 'TITO HUARICALLO', 'Jhon Clenin', 34, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (629, 'TITO MURILLO', 'Yisma Adeli', 34, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (630, 'VALENZUELA GUTIERREZ', 'Luordes', 34, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (631, 'YARESI TITO', 'Yasmin Rosmery', 34, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (632, 'AMANQUI CHUSI', 'MARICIELO', 35, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (633, 'AGUILAR MURIEL', 'YAMILET', 35, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (634, 'LAZARTE CCANCCAPA', 'GROVER', 35, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (635, 'APAZA TAPARA', 'Yoshimar Solin', 36, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (636, 'CALLIZANA MAMANI', 'Clenith Deysi', 36, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (637, 'CONDORI TAPARA', 'Yhisu Mayumi', 36, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (638, 'HUARICALLO PATATINGO', 'Belinda Karina', 36, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (639, 'LEONARDO CAHUANA', 'Mia Mehibel', 36, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (640, 'MUÑOZ YARESI', 'Linn Mejohry', 36, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (641, 'PACCO MORIILO', 'Yaritza', 36, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (642, 'PEREZ HUARCA', 'Jhondy Leonel', 36, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (643, 'YARESI ALVAREZ', 'Yaritza Kelly', 36, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (644, 'YARESI HUAYTA', 'Neymar Hugo', 36, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (645, 'CCORI FERRO', 'Alexandra', 37, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (646, 'COLQUE JOSEC', 'Esmeralda', 37, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (647, 'GONZALES HANCCO', 'Brat Styven', 37, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (648, 'HANCCO OLLANCAY', 'William Adison', 37, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (649, 'LOPE CONDORI', 'Eva Yenirikc', 38, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (650, 'MOLLO MAMANI', 'Dante', 38, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (651, 'MOLLO MAYHUA', 'Milena', 38, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (652, 'YAPO BRAVO', 'Yosimar', 38, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (653, 'CABREA CHOQUE', 'Arnol Nestor', 39, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (654, 'HANCCO MITA', 'Missael Jhoseph', 39, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (655, 'VALENCIA QUISPE', 'Keith Kendra', 39, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (656, 'VEGA GARATE', 'Gladis', 39, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (657, 'APAZA JACHO', 'LICETH LIDIA', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (658, 'ARIZALA MONTESINOS', 'NILDA', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (659, 'CHALLA MACHACA', 'YAYSON ROGER', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (660, 'GAYOSO HUAYTA', 'JIMENA', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (661, 'GAYOSO MAMANI', 'BELINDA', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (662, 'GONZALES ARIZALA', 'GLADIS', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (663, 'GONZALES ARIZALA', 'LOURDES', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (664, 'GONZALES FLORES', 'YEFERSON', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (665, 'JACHO APAZA', 'BELINDA', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (666, 'JACHO GAYOSO', 'IDIA', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (667, 'QUISPE FLORES', 'YESENIA YAMILED', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (668, 'QUISPE GAYOSO', 'JEFERSON', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (669, 'RODRIGUEZ SALCCA', 'MARY SILVIA', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (670, 'SALCCA CHURATA', 'EDWIN ROY', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (671, 'SALCCA QUISPE', 'DINA', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (672, 'SAYHUA MINAYA', 'YEDISA', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (673, 'SUICHIRI CHALLA', 'KAROLINA XIOMARA', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (674, 'USCAMAYTA MOLINA', 'BRUCE', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (675, 'USCAMAYTA MONTESINOS', 'KELY YANETH', 40, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (676, 'QUISPE CHAMBI', 'Luis Anderson ', 41, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (677, 'SUCAPUCA ANDRADE', 'Valentin', 41, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (678, 'AGUILAR HUAQUISTO', 'ORIANA EMELI', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (679, 'ANDRADE FLORES', 'YOVANA', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (680, 'CHURA OLIVERA', 'JHAMILET ABIGAIL', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (681, 'CUNO CCOA', 'FERNANDO FRANN', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (682, 'HANCCO QUISPE', 'JOSUE JHORMAN', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (683, 'LANUDO QUISPE', 'BRISAYDA', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (684, 'LEON HANCCO', 'ALEXANDER ROONEY', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (685, 'LOPEZ MAYTA', 'FLOR LISET', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (686, 'LUNA CCANCCAPA', 'JUAN CARLOS', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (687, 'MORMONTOY CCOAJHON', 'YACSON', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (688, 'TITO HANCCO', 'SHANTAL YOVANA', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (689, 'TURPO RAMOS', 'SAHORI MIKEYLA', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (690, 'ZUBIETA ACROTA', 'ANYI SHAROL', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (691, 'ZUBIETA SANCCA', 'ANTUANETH ROXANA', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (692, 'ZUBIETA ZARA', 'MILDER', 42, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (693, 'Chislla Huaman', 'Elena', 43, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (694, 'Florea Garcia', 'Guido Benildo', 43, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (695, 'Flores Molina', 'Marco Antonio', 43, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (696, 'Garcia Ccasa', 'Fani Graciela', 43, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (697, 'Mamani Vargas', 'Huber Adan', 43, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (698, 'Mayhua Mamani', 'Grover Reyner', 43, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (699, 'Mayhua QuispeEdgar', 'Becler', 43, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (700, 'Tacca Mamani', 'Yojan', 43, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (701, 'Zapana Vargas', 'Zultner Erick', 43, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (702, 'DEZA PACOSONCCO', 'Jheyson Celestino', 44, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (703, 'GARCIA POSO', 'Carolina', 44, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (704, 'HUARICALLO FIGUEREDO', 'Eduardo', 44, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (705, 'LAURA MAMANI', 'Uvaldo', 44, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (706, 'MAMANI HUARICALLO', 'Reynaldo', 44, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (707, 'MOLINA MOLINA', 'Yemer', 44, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (708, 'USCAMAYTA VARGAS', 'Elmer Wilber', 44, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (709, 'VARGAS ZAPANA', 'Edwin', 44, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (710, 'BUTTGENBACH VEGA', 'Crisly Elizabeth', 45, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (711, 'EMANUEL JACHO', 'YERSON', 46, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (712, 'MAYTA TURPO', 'RINA MARIELA', 46, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (713, 'LUQUE MASCO', 'Alexander Willy Carlos', 47, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (714, 'MAMANI GARCIA', 'Wiliam Yunior', 47, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (715, 'SANTANDER JAVIER', 'Yazumi Yamile', 47, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (716, 'Soncco Alcca', 'Sheyla Sonaly', 48, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (717, 'ALFEREZ LUNA', 'GRISEHT RUBY', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (718, 'ANDRADE HUAHUASONCCO', 'ANGUI L', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (719, 'CENTENO ARIAS', 'BERCKI MATEO', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (720, 'CONDORI CACERES', 'MAURICIO FELIX', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (721, 'HANCCO HILARI', 'RONY MARTIN', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (722, 'HUAYTA MARAS', 'ALEX DAYIRO', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (723, 'MAMANI ANTESANA', 'NIKOL A.', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (724, 'MAMANI CCOYTO', 'REYNA SENOVIA', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (725, 'MARAS HANCCO', 'ESTEBAN AMERICO', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (726, 'MEXICANO SALAS', 'SEBASTIAN R.', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (727, 'PACCO CHECMAPOCCO', 'NANCY G.', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (728, 'PACHAPUMA ONOFRE', 'DENISSE Y.', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (729, 'PUMA RAMOS', 'EVER ANGEL', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (730, 'QUISPE MAMANI', 'DONI NILMAR', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (731, 'QUISPE MAMANI', 'JUANA', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (732, 'QUISPE MONOFRE', 'MERY ANGÉLICA', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (733, 'QUISPE PACCO', 'MAX ULE', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (734, 'RODRIGUEZ RAMOS', 'RUTH MARIELA', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (735, 'SILVESTYRE VARGAS', 'ROY ABDEL', 49, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (736, 'CAHUANA CHUSI', 'Jhonel', 50, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (737, 'PAMPA MUÑOZ', 'Rildo Jhon', 50, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (738, 'SAYA APAZA', 'Omar', 50, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (739, 'BARRIENTOS LUQUE', 'Yony Yosimar', 51, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (740, 'CARMONA LEON', 'Milagros Greys', 51, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (741, 'CHAMBI HUAQUISTO', 'Yasmani', 51, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (742, 'HUAMANSAIRE MAYHUA', 'Leonel Cristhian', 51, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (743, 'LEON SALAS', 'Bertha Eliana', 51, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (744, 'MAMANI POCCO', 'Edwar Geronimo', 51, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (745, 'MERMA MERMA', 'Ana', 51, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (746, 'PILLCO SALAS', 'Juan Deyvis', 51, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (747, 'POCCO MARTINEZ', 'Karina Delia', 51, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (748, 'QUISPE VASQUEZ', 'Jeremy Brayan', 51, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (749, 'SOLIS POCCO', 'Ronil Kelvin', 51, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (750, 'CCAMI POCCO', 'Rey Misterio', 51, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (751, 'CCUNO CARRASCO', 'Rosalia', 51, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (752, 'CHURA CCAMI', 'Kely Yeritza', 51, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (753, 'FIGUEREDO HUARSAYA', 'Roxana', 51, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (754, 'FIGUEREDO HUARSAYA', 'Welian Abel', 51, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (755, 'HUAMANSAYRI CHACA', 'Rafael Nilson', 51, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (756, 'LEON QUISPE', 'Ruth Lidea', 51, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (757, 'MERMA LEON', 'Juan Jose', 51, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (758, 'PERALTA CHURA', 'Demetria Pilar', 51, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (759, 'PERES SALAS', 'Edu Danti', 51, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (760, 'QUISPE GONSALES', 'Yasmin', 51, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (761, 'SARA MARTINEZ', 'Dabid Willar', 51, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (762, 'CONDORI HUAYNILLO', 'Mojamet Pol', 52, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (763, 'CORI ANCCASI', 'Cristian Jhordy', 52, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (764, 'LEON QUILLE', 'Belinda Alejandra', 52, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (765, 'TICONA CCOPA', 'Yhommy Kiara', 52, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (766, 'VARGAS CALLOHUANCA', 'Rodrigo J.', 52, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (767, 'PACOSONCO PAMPA', 'Yak Jhon', 53, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (768, 'CHURATA CHURA', 'Eudhy Concepcion', 54, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (769, 'HUMALLA HUARANCCA', 'Candy', 54, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (770, 'ILLPANOCCA QUISPE', 'Anady Rosmery', 54, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (771, 'MAYTA MAYTA', 'Idel Royer', 54, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (772, 'NARVAEZ QUILLE', 'Sadith Meliza', 54, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (773, 'RAMOS QUILLE', 'Rubi Damaris', 54, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (774, 'NAREZO GONZALES', 'Lourdes', 55, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (775, 'ACCHA TURPO', 'JHONATAN', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (776, 'ALARCON CHURA', 'KENSHI CRISTIAN', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (777, 'APAZA CHUA', 'MILDER', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (778, 'EMANUEL ZIRENA', 'YUNIOR YOEL', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (779, 'FARFAN GONZALES', 'YOSIEL ALVAN', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (780, 'GONZALES AMANQUI', 'KEVIN', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (781, 'GONZALES PINEDA', 'DAYRO LEONEL', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (782, 'LEQQUE PACSI', 'JEAN DALTON', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (783, 'MAYTA TURPO', 'XIOMARA YESICA', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (784, 'MUÑOZ CUEVAS', 'RONALDO', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (785, 'PACCO APAZA', 'YALMADY', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (786, 'PACCO CAHUANA', 'JOSE ALEX', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (787, 'QUISOCCAPA MAMANI', 'CHRIS ALBERTH', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (788, 'QUISPE MAMANI', 'FLOR BRIGUIT', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (789, 'QUISPE ZIRENA', 'YOSHIMAR EDU', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (790, 'SALGUERO ARQUERO', 'MELANI CRISTALEYSI', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (791, 'VIRUNDY JUCHATUMA', 'JENNY', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (792, 'ZIRENA GONZALES', 'LILIAM', 56, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (793, 'GAYOSO FLORES', 'Jacob', 57, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (794, 'MAMANI MAMANI', 'Walter', 57, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (795, 'MOLINA QUISPE', 'Noemi', 57, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (796, 'ANAYA YAPO', 'LEONARDO BECKER', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (797, 'APAZA APAZA', 'YELTSIN DAYIRO', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (798, 'CANSAYA CONDORI', 'FRANK KEVIN', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (799, 'CHOQUEHUAYTA BUSTINZA', 'ANGEL MANUEL', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (800, 'CUCHUIRUMI AGUIRRE', 'LEYLA BEYONCE', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (801, 'CUCHUIRUMI MONTES', 'LEO KENYI', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (802, 'FERNANDEZ QUISPE', 'GLENY YAMIL', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (803, 'HUAHUASONCCO CASAZOLA', 'YHONI ANTONI', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (804, 'HUAMAN QUISPE', 'JAHAYRA DANAY', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (805, 'HUAMANI ZAMORA', 'JEYSU YHAN', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (806, 'LOAYZA FLORES', 'LUZ AYDEE', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (807, 'LOPE COLOMA', 'JHON BRANDON', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (808, 'LUCANA QUISPE', 'JHIOR LUCIO', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (809, 'MAMANI CAPAJAÑA', 'YHON EDYLSON MEYER', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (810, 'MAMANI MAYTA', 'GABY MILAGROS', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (811, 'NAREZO QUISPE', 'LIZ CINTIA', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (812, 'PACCO HUANCA', 'AXEL ANTONY', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (813, 'QUISPE LOPEZ', 'BELINDA ROSMERY', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (814, 'QUISPE QUISPE', 'JANDY ALISSON', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (815, 'RIQUELME PACCO', 'BRYANNA ZAITH', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (816, 'RIQUELME PACHAPUMA', 'CINTHIA DIANA', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (817, 'RIVERA HINCHO', 'BRIYITH MERALY', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (818, 'TEJADA MOLLO', 'ANA LUZ', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (819, 'TURPO AGUILAR', 'SARAY', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (820, 'VILCA CONDORI', 'MARK DARWIN', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (821, 'YAPO ATAMARI', 'EMELI LESLI', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (822, 'RIQUELME CONDORI', 'JHON RONALD', 58, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (823, 'CHIVES MOLINA', 'Roy', 59, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (824, 'chiVES MOLINA', 'Yeyson', 59, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (825, 'FLORES MOLINA', 'Manuel ', 59, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (826, 'FLORES MOLINA', 'Miguel Angel', 59, 'SEXTO', '');
INSERT INTO `estudiante` VALUES (827, 'APAZA MOLINA', 'Jean Paul', 60, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (828, 'MAMANI MOLINA', 'Luz Mayra', 60, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (829, 'MOLINA FLORES', 'Yaziel Lizet', 60, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (830, 'USCAMAYTA GAYOSO', 'Ederson Edelfonso', 60, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (831, 'VILCA MAMANI', 'Vanesa', 60, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (832, 'YANA APANA', 'Yossuhe Rodrigo', 61, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (833, 'QUISPE TURPO', 'Reyna Rocio', 61, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (834, 'LUQUE TURPO', ' Ruth Karen', 61, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (835, 'CUTIZACA MAMANI', 'David Raul', 61, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (836, 'CONDORI QUISPE', 'Wiliam', 61, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (837, 'CACERES MURGA', 'Nestor Gabriel', 61, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (838, 'CACERES ALEJO', 'Leyla Shyori', 62, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (839, 'CANCAPA CCALA', 'Neymar Dayiro', 62, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (840, 'FLORES RIQELME', 'Zenayda Nohemi', 62, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (841, 'KANA QUISPE', 'Sulma Edith', 62, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (842, 'MAMANI KANA', 'Crober Edilson', 62, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (843, 'MORMONTOY MARAS', 'Saul Maycol', 62, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (844, 'NINA MITA', 'Alex Rene', 62, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (845, 'QUISPE LEVITA', 'Alexander ', 62, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (846, 'QUISPE VILCA', 'Giovanni', 62, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (847, 'CARRASCO MARTINEZ', 'FRANZ JOSEPH', 63, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (848, 'PACCO MAMANI', 'Nidia', 64, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (849, 'PIZARRO MAMANI', 'Sheyla Margot', 64, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (850, 'CHOQUE PINEDA', 'MAX FRANCO', 65, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (851, 'CORIMAYA QUISPE', 'JHANDY NITZY', 65, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (852, 'QUISPE VARGAS', 'CAYOLIZ LUCIANA', 65, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (853, 'SOTO MAYHUA', 'YOSEPMIR ROMARIO', 65, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (854, 'MAMANI', 'MAMANI', 66, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (855, 'MAMANI', 'MAMANI', 66, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (856, 'MOLINA MAMANI', 'Rosy Maribel', 67, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (857, 'PILCO MAMANI', 'Luis Billalba', 67, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (858, 'QUISPE CCASA', 'Ninfa', 67, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (859, 'QUISPE GAYOSO', 'Luz Clara', 67, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (860, 'QUISPE PILCO', 'Oswaldo', 67, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (861, 'SOLORZANO MAMANI', 'Noe', 67, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (862, 'MAMANI CUBA', 'Rossy', 68, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (863, 'MAMANI MOLINA', 'Sebastian', 68, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (864, 'MOLINA GAYOSO', 'Americo', 68, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (865, 'MOLINA MAMANI', 'Roy Jeferson', 68, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (866, 'MOLINA SUICHIRI', 'Blanca Nieves', 68, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (867, 'AQUINO CORDOVA', 'Mary Estefani', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (868, 'BARRIENTOS TORRES', 'Ana Critina', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (869, 'CABEZAS LUYA', 'Yusbel Juakin', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (870, 'CASTRO TORRES', 'Mark Reilly', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (871, 'CONDOLI HUAMAN', 'Aleida Nadine', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (872, 'FLORES ESPINO', 'Jenny Mael', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (873, 'HUILLCA CHUNGA', 'Kelvin Mijael', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (874, 'HUMPIRI MEDINA', 'Anabel Nadynne', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (875, 'LLANCCE MIGUEL', 'Jhan Marco', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (876, 'MAMANI PUMA', 'Frank Jason', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (877, 'MAYTAN PACHECO', 'Jamil', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (878, 'MEDINA LIMA', 'Julber Joel', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (879, 'MEJIA QUISPE', 'Jhosep', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (880, 'MIGUEL QUISPE', 'Grace Angie', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (881, 'MUCHA CONDOLI', 'Carmen Rosa', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (882, 'OCHOA AGAMA', 'Yelttsin Gerbert', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (883, 'SILVA ATACHAHUA', 'Elias', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (884, 'SUCAPUCA CASA', 'Juan Eduardo', 69, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (885, 'Acosta Velasco', 'Yandy Pamela', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (886, 'Aguilar Gil', 'Kenji Frank', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (887, 'Allca Quispe', 'Rolando', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (888, 'Calloquispe Apaza', 'Angel Royer', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (889, 'Carbajal Medina', 'Mayte Maricielo', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (890, 'Cardenas Parcco', 'Yobrihya Yaditza', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (891, 'Chura Flores', 'Weider Mishel', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (892, 'Condor Villano', 'Magda Sayuri', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (893, 'Curo Perez', 'Nery', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (894, 'Curo Perez', 'Yosely', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (895, 'Flores Medina', 'Andy Mishel', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (896, 'Gutierrez Velasco', 'Jhosman Eliseo', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (897, 'Hancco Zapana', 'Jhoselyn  Yovana', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (898, 'Huallpa Aguilar', 'Fran Barak', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (899, 'Huaman Vargas', 'Dario', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (900, 'Idme Jalanoca', 'Mariza Brigit', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (901, 'Jaime Huaman', 'Kevin Fabian', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (902, 'Lapa Vega', 'Edson', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (903, 'Lopez Caceres', 'Alexander', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (904, 'Ludeña Avalos', 'Jehan Franco', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (905, 'Ludeña Perez', 'Yorley Yeriza', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (906, 'Maucaylle Tito', 'Alejandra Katyrin', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (907, 'Miranda Pilco', 'Jesus Emanuel', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (908, 'Quihui Cucho', 'Johann', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (909, 'Quispe Quilla', 'Yuber Kim', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (910, 'Tomaylla Paucar', 'Yemmy', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (911, 'Vila Condori', 'Flor Catalea', 70, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (912, 'CATUNTA YANQUI', 'YAMILE FERNANDA', 71, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (913, 'HUISA LEAÑO', 'ELI YORWI', 71, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (914, 'IDME JALANOCA', 'MARITZA BRIGITH', 71, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (915, 'MAMANI COAQUIRA', 'NEYMAR LEONEL', 71, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (916, 'QUISPE PAUCCAR', 'MAX ANTONY', 71, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (917, 'CHUCHI VEGA', 'Vanessa', 72, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (918, 'QUILLA CONDORI', ' Yhamaris Yordanny', 72, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (919, 'YANA TURPO', 'Fletzin Jheyson', 72, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (920, 'CHAMORRO GUTIERREZ', 'Davis William', 73, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (921, 'GUZMAN CHOQUEPATA', 'Yandy Keila', 73, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (922, 'LEQQUE MAYTA', 'Cinthia Cleyne ', 73, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (923, 'PEREZ ALIAGA', 'Jhon Kennedy', 73, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (924, 'QUISPE APAZA', 'York Jack ', 73, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (925, 'RAMOS QUISPE', 'Sunmi Sayuri', 73, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (926, 'TAPARA BARRIENTOS', 'Luis Arturo ', 73, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (927, 'VILCATOMA CANCHANYA', 'Aracely Ariana ', 73, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (928, 'ARAGON QUISPE', 'Yohan Elvis', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (929, 'CCASANI CURI', 'Gisell Lorea', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (930, 'CHOQUE PAUCAR', 'Jhon Albert', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (931, 'CHOQUE PAUCAR', 'Jhosep Andree', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (932, 'GOMEZ TRUJILLO', 'Yesenia', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (933, 'HUACCACHI GOMEZ', 'Smith Antony', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (934, 'JAIME ARAUJO', 'Kaelia Larisa', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (935, 'LUQUE CHUQUITARQUI', 'Maycol', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (936, 'MOLINA FERNADEZ', 'Juan Prono', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (937, 'ÑAUPA MAMANI', 'Maikol Yoshep', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (938, 'PALOMINO YAPO', 'Sadan Jose', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (939, 'QUIROZ CHIARA', 'Yelsin Angel', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (940, 'TOQUE QUITO', 'Shunmy Bivian', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (941, 'VALLE JIMENEZ', 'Nelvi', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (942, 'VALVERDE CHICLLASTO', 'Miguel Angel', 74, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (943, 'ARONI HUAMAN', 'Saul', 75, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (944, 'CONDORPHOCCO MAMANI', 'Reyli Scott', 75, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (945, 'CULISE CANAHUIRE', 'Walter Said', 75, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (946, 'ESTRADA JACHO', 'Lourdes', 75, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (947, 'HUAHUASONCCO MAMANI', 'Wilson Joel', 75, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (948, 'LUNA SANTISTEBAN', 'Anali Maylin', 75, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (949, 'PAMPA CCANAHUIRE', 'Noe Leysser', 75, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (950, 'CALIZANA CASTELLANOS', 'Judith Zulema', 76, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (951, 'CARTA YARESI', 'Neymar Randy', 76, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (952, 'COAQUIRA QUILCA', 'Nicol Sheyly', 76, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (953, 'MEDINA QUISPE', 'Angelina Yuly', 76, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (954, 'HUARSAYA ALARCON ', 'MELANY ESTEFANI', 77, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (955, 'LARICO AVILA', 'SHIRLEY KIARA ', 77, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (956, 'LIMACHE FUENTES ', 'ANAHI MAR', 77, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (957, 'MACHACA QUISPE', 'DAYRON YEREMICK', 77, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (958, 'TICONA ESCOBAR', 'HEIDY MIVIAN ', 77, 'SEXTO', 'ÚNICA');
INSERT INTO `estudiante` VALUES (959, 'CAHUI VALERIANO', 'Yidda Melia', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (960, 'CALCINA VILCA', 'Joseph Sebastián', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (961, 'CHOQUEHUANCA SAYHUA', 'Angel', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (962, 'CHUQUIMAMANI FLORES', 'Briner', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (963, 'CONDORI CUBA', 'Enma Gladys', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (964, 'FLOREZ ROSELLO', 'Astrid Aymar', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (965, 'HANCCO MERMA', 'David Daniel', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (966, 'HUANCA FUENTES', 'Jhaelyn Sara', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (967, 'HUANCA PACCO', 'Chick', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (968, 'HUAQUISTO MAMANI', 'Mayumi Nadyne', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (969, 'LOPEZ HANCCO', 'Marilud Edit', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (970, 'LUNA CHOQUEHUANCA', 'Daira Nicoll', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (971, 'MARAS LUQUE', 'Zulma Aydee', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (972, 'PELAEZ LAURA', 'Richard Dyno', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (973, 'POCCO VEGA', 'Luis Daniel', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (974, 'QUISPE GUZMAN', 'James Scott', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (975, 'QUISPE RAMOS', 'Sheyla Jhesarelly', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (976, 'QUISPE RIVERA', 'Leonel Justin', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (977, 'RAMOS ALEMAN', 'Mishel Miryan', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (978, 'RAMOS MOLLOCONDO', 'Neymar', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (979, 'SONCCO PACORI', 'Carlos Alonso', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (980, 'TAYPE QUISPE', 'Yhilber Cristian', 78, 'SEXTO', 'A');
INSERT INTO `estudiante` VALUES (981, 'AGUIRRE VELASQUEZ', 'JHAMPIER SAMIR', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (982, 'APAZA PHUÑO', 'AXEL RUAMIR', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (983, 'BUSTINZA HUANCA', 'JHONNY JACKSON', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (984, 'CCAMA YARESI', 'JHOSENID GABRIELA', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (985, 'CHIVEZ CACERES', 'FRAN YERCY', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (986, 'CRUZ CHURA', 'JHOSEP URIBE', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (987, 'GOMEZ MERMA', 'SHIOMARA YENSI', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (988, 'GUTIERREZ MAMANI', 'DARLENE DEYSI', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (989, 'LOPE CCOA', 'BENJAMIN WILMER', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (990, 'LUQUE QUISPE', 'ANDREE STEVEN', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (991, 'MAYHUA CANO', 'DYLAN CRISTOFER', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (992, 'MAYTA CCALLISANA', 'JHAROL ERIK', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (993, 'MOROCCOIRE MONTOYA', 'LUZ YANETH', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (994, 'NUÑEZ MAMANI', 'MAIK ANDY', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (995, 'PEÑA PACHAPUMA', 'FRANKO ANTHONY', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (996, 'QUISPE HANCCO', 'YULY YENIFER', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (997, 'QUISPE MAMANI', 'DEIVIS RONETH', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (998, 'QUISPE PELAEZ', 'BRITANY LIZ', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (999, 'SOLIS BUSTAMANTE', 'EMILY GABRIELA', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (1000, 'TORDOYA APAZA', 'YEISON ANTONI', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (1001, 'VILCA BARRAGAN', 'YHANDY NYCOL', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (1002, 'VILCA RAMOS', 'Andriw Snayder', 78, 'SEXTO', 'B');
INSERT INTO `estudiante` VALUES (1003, 'AGUILAR TURPO', 'Zahid Reynaldo', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1004, 'CCALA LLANOS', 'Dhuman Gerarp', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1005, 'CCARI PERALTA', 'Metzli Jade', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1006, 'CONDORI APAZA', 'Frank Gabriel', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1007, 'CONDORI MAMANI', 'Rocio Yaneth', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1008, 'MACEDO QUISPE', 'Sandra Noemi', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1009, 'MAMANI CCOPA', 'Yhameli Nicol', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1010, 'MAMANI RAMOS', 'Nayra Jennifer', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1011, 'PALOMINO CHURA', 'Deysi Yanela', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1012, 'QUISPE APAZA', 'Maria', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1013, 'QUISPE GUZMAN', 'Chris Hansen', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1014, 'QUISPE PUMAQUISPE', 'Wilber Alex', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1015, 'RAMOS QUISPE', 'Emelin Milagros', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1016, 'SILVESTRE MARAS', 'Yorhs Daniro', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1017, 'TAPARA HANCCO', 'Rocio Kimberly', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1018, 'TICONA HANCCO', 'Aaron Esnayder', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1019, 'TORRES SALGUERO', 'Aaryam Roamir', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1020, 'VALERIANO HUILLCA', 'Mark Dilbert ', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1021, 'VALERIANO ONOFRE', 'Yosmel Josue', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1022, 'VEGA LIMA', 'Eddy Neymar', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1023, 'VELASQUEZ BALLENA', 'Ivan Dayiro', 78, 'SEXTO', 'C');
INSERT INTO `estudiante` VALUES (1024, 'ALLPACCA USCAMAYTA', 'CESAR', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1025, 'APAZA QUISPE', 'SAYACA', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1026, 'APAZA SONCCO', 'JADE VALERY', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1027, 'ARPITA MAQQUE', 'EVELYN DANITZA', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1028, 'CASAZOLA CACERES', 'YORLEY KATERIN', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1029, 'CRUZ QUILCA', 'NAYMAR CRISTIAN', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1030, 'FLORES MOLINA', 'NEYMAR', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1031, 'GUTIERREZ CHECASACA', 'LUZ ALIDA', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1032, 'HANCCO TICONA', 'YAMILE SAYURI', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1033, 'HUANCA FLORES', 'LESLY MARISOL', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1034, 'HUARICALLO LUNA', 'PAUL RUBIÑO', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1035, 'JARA LUQUE', 'KEVIN PAHOLO', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1036, 'LANUDO CCARITA', 'ANYELO CRISTHIAN', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1037, 'LUCAÑA HUANCA', 'FRANK SOLANO', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1038, 'PACCO MAMANI', 'JOSEPH DINGLER', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1039, 'PATATINGO MAMANI', 'NOHEMI LIZBETH', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1040, 'PATATINGO TAPARA', 'FERNANDINHO', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1041, 'RIVERA YUPANQUI', 'YAHIR JAMES', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1042, 'SAYHUA AGUILAR', 'DAYRON NEYMAR', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1043, 'SAYHUA QUISPE', 'SONIA IZABEL', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1044, 'SILVESTRE QUISPE', 'JHUDITH', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1045, 'TRUJILLANO GUZMAN', 'AXEL JUSTIN', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1046, 'VILLASANTE QUISPE', 'ROXANA MILAGROS', 78, 'SEXTO', 'D');
INSERT INTO `estudiante` VALUES (1047, 'BUTRON ROJAS', 'ALEXANDER LUCAS', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1048, 'CHALLA MENDOZA', 'YAQUILE', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1049, 'CHOQUE HANCCO', 'MIRIAM SAYURI', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1050, 'CONDORI APAZA', 'JENNER GODWER', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1051, 'CONDORI MARAS', 'WILLMER LIDAHER', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1052, 'HANCCO ARAGON', 'NEYMAR ERIK', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1053, 'HANCCO LLACSA', 'SHYOMARA', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1054, 'HANCCO LOPE', 'CAMILA YANETH', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1055, 'HANCCO RAMOS', 'KENY', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1056, 'MAMANI CALSINA', 'KATIA LUZ', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1057, 'MAMANI MAMANI', 'ANGEL DAVID', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1058, 'MAYHUA ANDRADE', 'YELTSIN JHOSMAR', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1059, 'MOLINA GAYOSO', 'GUISEL', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1060, 'MOLLOCONDO PACCO', 'EVELIN', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1061, 'MORMONTOY SOLIS', 'MAYCOL GUSTAVO', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1062, 'NARVAEZ PHOCCO', 'JHOSET NOLAN', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1063, 'QUEQUE RAMOS', 'ANDREA', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1064, 'SUICHIRI MOLINA', 'TAYLOR CLINTON', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1065, 'TTITO OSCAMAYTA', 'PAUL FERNANDO', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1066, 'TURPO SOLORZANO', 'DEIVIS MARCO', 78, 'SEXTO', 'F');
INSERT INTO `estudiante` VALUES (1082, 'prueba guardado', 'administrador', 3, 'CUARTO', 'D');
INSERT INTO `estudiante` VALUES (1084, 'preuba', 'sdjkfga', 3, 'SEXTO', 'E');
INSERT INTO `estudiante` VALUES (1085, 'asin indtusiad 2', 'asin inst 2', 27, 'QUINTO', 'A');
INSERT INTO `estudiante` VALUES (1086, 'prueba', 'prueba de noti', 3, 'QUINTO', 'C');
INSERT INTO `estudiante` VALUES (1087, 'sdfhsdgf', 'fdhrt', 2, 'TERCERO', 'C');
INSERT INTO `estudiante` VALUES (1089, 'nuea', 'asjdfga', 2, 'CUARTO', 'B');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for institucion
-- ----------------------------
DROP TABLE IF EXISTS `institucion`;
CREATE TABLE `institucion`  (
  `id_inst` int(11) NOT NULL AUTO_INCREMENT,
  `inst_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NULL DEFAULT NULL,
  `inst_nivel` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NULL DEFAULT NULL,
  `distrito` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_inst`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 79 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_spanish2_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of institucion
-- ----------------------------
INSERT INTO `institucion` VALUES (0, 'UGEL CARABAYA', 'SEDE', 'MACUSANI');
INSERT INTO `institucion` VALUES (1, 'IE. PRIMARIA N° 72763 TUPAC AMARU', 'PRIMARIA', 'COASA');
INSERT INTO `institucion` VALUES (2, 'IE. PRIMARIA N° 72780 \"Sagrado Corazón de Jesus\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (3, 'IE. PRIMARIA N° 72163 \"Coasa\"', 'PRIMARIA', 'COASA');
INSERT INTO `institucion` VALUES (4, 'IE. PRIMARIA N° 72164 \"Sara Chávez\"', 'PRIMARIA', 'MACUSANI');
INSERT INTO `institucion` VALUES (5, 'IE. PRIMARIA N° 72166 \"Upina\"', 'PRIMARIA', 'ITUATA');
INSERT INTO `institucion` VALUES (6, 'IE. PRIMARIA N° 72167 \"Kana\"', 'PRIMARIA', 'AYAPATA');
INSERT INTO `institucion` VALUES (7, 'IE. PRIMARIA N° 72168 \"Ajoyani\"', 'PRIMARIA', 'AYAPATA');
INSERT INTO `institucion` VALUES (8, 'IE. PRIMARIA N° 72169 \"Tambillo\"', 'PRIMARIA', 'ITUATA');
INSERT INTO `institucion` VALUES (9, 'IE. PRIMARIA N° 72170 \"Huanutuyo\"', 'PRIMARIA', 'MACUSANI');
INSERT INTO `institucion` VALUES (10, 'IE. PRIMARIA N° 72171 \"Hanac Ayllu\"', 'PRIMARIA', 'AYAPATA');
INSERT INTO `institucion` VALUES (11, 'IE. PRIMARIA N° 72172 \"Taype\"', 'PRIMARIA', 'MACUSANI');
INSERT INTO `institucion` VALUES (12, 'IE. PRIMARIA N° 72173 \"Esquena\"', 'PRIMARIA', 'COASA');
INSERT INTO `institucion` VALUES (13, 'IE. PRIMARIA N° 72174 \"Ccochahuma\"', 'PRIMARIA', 'AYAPATA');
INSERT INTO `institucion` VALUES (14, 'IE. PRIMARIA N° 72175 \"Tayac Cucho\"', 'PRIMARIA', 'ITUATA');
INSERT INTO `institucion` VALUES (15, 'IE. PRIMARIA N° 72176 \"Jorge Chavez\"', 'PRIMARIA', 'MACUSANI');
INSERT INTO `institucion` VALUES (16, 'IE. PRIMARIA N° 72177 \"José Antonio Encinas\"', 'PRIMARIA', 'AYAPATA');
INSERT INTO `institucion` VALUES (17, 'IE. PRIMARIA N° 72179 \"José Carlos Mariategui\"', 'PRIMARIA', 'OLLACHEA');
INSERT INTO `institucion` VALUES (18, 'IE. PRIMARIA N° 72180 \"Ayapata\"', 'PRIMARIA', 'AYAPATA');
INSERT INTO `institucion` VALUES (19, 'IE. PRIMARIA N° 72182 \"José María Arguedas Altamirano\"', 'PRIMARIA', 'CORANI');
INSERT INTO `institucion` VALUES (20, 'IE. PRIMARIA N° 72183 \"Isivilla\"', 'PRIMARIA', 'CORANI');
INSERT INTO `institucion` VALUES (21, 'IE. PRIMARIA N° 72184 \"Glorioso Francisco Bolognesi\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (22, 'IE. PRIMARIA N° 72187 \"Quelcaya\"', 'PRIMARIA', 'CORANI');
INSERT INTO `institucion` VALUES (23, 'IE. PRIMARIA N° 72188 \"Quety\"', 'PRIMARIA', 'ITUATA');
INSERT INTO `institucion` VALUES (24, 'IE. PRIMARIA N° 72189 \"Quicho\"', 'PRIMARIA', 'OLLACHEA');
INSERT INTO `institucion` VALUES (25, 'IE. PRIMARIA N° 72190 \"Chacamarca\"', 'PRIMARIA', 'COASA');
INSERT INTO `institucion` VALUES (26, 'IE. PRIMARIA N° 72191 \"Tantamaco\"', 'PRIMARIA', 'MACUSANI');
INSERT INTO `institucion` VALUES (27, 'IE. PRIMARIA N° 72192 \"José Macedo Mendoza\"', 'PRIMARIA', 'COASA');
INSERT INTO `institucion` VALUES (28, 'IE. PRIMARIA N° 72194 \"Saco\"', 'PRIMARIA', 'COASA');
INSERT INTO `institucion` VALUES (29, 'IE. PRIMARIA N° 72196 \"Icaco\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (30, 'IE. PRIMARIA N° 72197 \"Pumachanca\"', 'PRIMARIA', 'OLLACHEA');
INSERT INTO `institucion` VALUES (31, 'IE. PRIMARIA N° 72198 \"Ccopa\"', 'PRIMARIA', 'AYAPATA');
INSERT INTO `institucion` VALUES (32, 'IE. PRIMARIA N° 72199 \"Chimboya\"', 'PRIMARIA', 'CORANI');
INSERT INTO `institucion` VALUES (33, 'IE. PRIMARIA N° 72201 \"José Antonio Encinas\"', 'PRIMARIA', 'COASA');
INSERT INTO `institucion` VALUES (34, 'IE. PRIMARIA N° 72202 \"Pago Carabaya\"', 'PRIMARIA', 'ITUATA');
INSERT INTO `institucion` VALUES (35, 'IE. PRIMARIA N° 72203 \"Cuticarca\"', 'PRIMARIA', 'COASA');
INSERT INTO `institucion` VALUES (36, 'IE. PRIMARIA N° 72204 \"Ituata\"', 'PRIMARIA', 'ITUATA');
INSERT INTO `institucion` VALUES (37, 'IE. PRIMARIA N° 72206 \"Tahuana\"', 'PRIMARIA', 'COASA');
INSERT INTO `institucion` VALUES (38, 'IE. PRIMARIA N° 72209 \"Puente Arica\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (39, 'IE. PRIMARIA N° 72210 \"Camatani\"', 'PRIMARIA', 'AYAPATA');
INSERT INTO `institucion` VALUES (40, 'IE. PRIMARIA N° 72214 \"Palca\"', 'PRIMARIA', 'OLLACHEA');
INSERT INTO `institucion` VALUES (41, 'IE. PRIMARIA N° 72216 \"Kanchi\"', 'PRIMARIA', 'AYAPATA');
INSERT INTO `institucion` VALUES (42, 'IE. PRIMARIA N° 72218 \"Chacaconiza\"', 'PRIMARIA', 'CORANI');
INSERT INTO `institucion` VALUES (43, 'IE. PRIMARIA N° 72221 \"Chia\"', 'PRIMARIA', 'OLLACHEA');
INSERT INTO `institucion` VALUES (44, 'IE. PRIMARIA N° 72223 \"Asiento\"', 'PRIMARIA', 'OLLACHEA');
INSERT INTO `institucion` VALUES (45, 'IE. PRIMARIA N° 72224 \"Salimayo\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (46, 'IE. PRIMARIA N° 72226 \"Huarachani\"', 'PRIMARIA', 'COASA');
INSERT INTO `institucion` VALUES (47, 'IE. PRIMARIA N° 72227 \"Thiuni\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (48, 'IE. PRIMARIA N° 72228 \"Ccatacancha\"', 'PRIMARIA', 'MACUSANI');
INSERT INTO `institucion` VALUES (49, 'IE. PRIMARIA N° 72600 \"GrandiosoTupac Amaru\"', 'PRIMARIA', 'MACUSANI');
INSERT INTO `institucion` VALUES (50, 'IE. PRIMARIA N° 72603 \"Jururusa\"', 'PRIMARIA', 'ITUATA');
INSERT INTO `institucion` VALUES (51, 'IE. PRIMARIA N° 72609 Tupac Amaru II', 'PRIMARIA', 'CORANI');
INSERT INTO `institucion` VALUES (52, 'IE. PRIMARIA N° 72615 \"Norberto Odebrecht\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (53, 'IE. PRIMARIA N° 72632 \"Tambo Punco\"', 'PRIMARIA', 'ITUATA');
INSERT INTO `institucion` VALUES (54, 'IE. PRIMARIA N° 72642 \"Mallcuapo\"', 'PRIMARIA', 'ITUATA');
INSERT INTO `institucion` VALUES (55, 'IE. PRIMARIA N° 72660 \"Umachinquini\"', 'PRIMARIA', 'COASA');
INSERT INTO `institucion` VALUES (56, 'IE. PRIMARIA N° 72661 \"San Francisco de Asís\"', 'PRIMARIA', 'COASA');
INSERT INTO `institucion` VALUES (57, 'IE. PRIMARIA N° 72664 \"Parusani\"', 'PRIMARIA', 'OLLACHEA');
INSERT INTO `institucion` VALUES (58, 'IE. PRIMARIA N° 72666 \"Santa Clotilde\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (59, 'IE. PRIMARIA N° 72667 \"Rosaspata\"', 'PRIMARIA', 'OLLACHEA');
INSERT INTO `institucion` VALUES (60, 'IE. PRIMARIA N° 72668 \"Bellavista\"', 'PRIMARIA', 'OLLACHEA');
INSERT INTO `institucion` VALUES (61, 'IE. PRIMARIA N° 72669 \"Nueva Urbanización\"', 'PRIMARIA', 'AJOYANI');
INSERT INTO `institucion` VALUES (62, 'IE. PRIMARIA N° 72670 \"Acconsaya\"', 'PRIMARIA', 'CORANI');
INSERT INTO `institucion` VALUES (63, 'IE. PRIMARIA N° 72671 \"Queracucho\"', 'PRIMARIA', 'MACUSANI');
INSERT INTO `institucion` VALUES (64, 'IE. PRIMARIA N° 72672 \"Jatun Orcco\"', 'PRIMARIA', 'ITUATA');
INSERT INTO `institucion` VALUES (65, 'IE. PRIMARIA N° 72673 \"Casahuiri\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (66, 'IE. PRIMARIA N° 72674 \"Puerto Arturo\"', 'PRIMARIA', 'COASA');
INSERT INTO `institucion` VALUES (67, 'IE. PRIMARIA N° 72676 \"Chullupampa\"', 'PRIMARIA', 'OLLACHEA');
INSERT INTO `institucion` VALUES (68, 'IE. PRIMARIA N° 72677 \"Munaypata\"', 'PRIMARIA', 'OLLACHEA');
INSERT INTO `institucion` VALUES (69, 'IE. PRIMARIA N° 72740 \"Loromayo\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (70, 'IE. PRIMARIA N° 72741 \"Andrés Avelino Cáceres\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (71, 'IE. PRIMARIA N° 72742 \"El Carmen\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (72, 'IE. PRIMARIA N° 72743 \"Cuesta Blanca\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (73, 'IE. PRIMARIA N° 72745 \"Nueva Jerusalen\"', 'PRIMARIA', 'AYAPATA');
INSERT INTO `institucion` VALUES (74, 'IE. PRIMARIA N° 72746 \"Challhuamayo\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (75, 'IE. PRIMARIA N° 72749 \" Calasuca\"', 'PRIMARIA', 'ITUATA');
INSERT INTO `institucion` VALUES (76, 'IE. PRIMARIA N° 72777 \"Tantamayo\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (77, 'IE. PRIMARIA N° 72778 \"Sangari\"', 'PRIMARIA', 'SAN GABAN');
INSERT INTO `institucion` VALUES (78, 'IE. PRIMARIA N° 73002 \"Glorioso 821\"', 'PRIMARIA', 'MACUSANI');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- ----------------------------
-- Table structure for nota
-- ----------------------------
DROP TABLE IF EXISTS `nota`;
CREATE TABLE `nota`  (
  `id_nota` int(11) NOT NULL AUTO_INCREMENT,
  `id_est` int(11) NULL DEFAULT NULL,
  `id_curso` int(11) NULL DEFAULT NULL,
  `nota1` int(2) NULL DEFAULT NULL,
  `nota2` int(2) NULL DEFAULT NULL,
  `nota3` int(2) NULL DEFAULT NULL,
  `nota4` int(2) NULL DEFAULT NULL,
  `nota5` int(2) NULL DEFAULT NULL,
  `nota6` int(2) NULL DEFAULT NULL,
  `nota7` int(2) NULL DEFAULT NULL,
  `nota8` int(2) NULL DEFAULT NULL,
  `nota9` int(2) NULL DEFAULT NULL,
  `nota10` int(2) NULL DEFAULT NULL,
  `promedio` int(2) NULL DEFAULT NULL,
  PRIMARY KEY (`id_nota`) USING BTREE,
  INDEX `fk_nota_curso`(`id_curso`) USING BTREE,
  INDEX `fk_nota_est`(`id_est`) USING BTREE,
  CONSTRAINT `fk_nota_curso` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_nota_est` FOREIGN KEY (`id_est`) REFERENCES `estudiante` (`id_est`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_spanish2_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nota
-- ----------------------------

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `id_inst` int(11) NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  INDEX `fk_user_inst`(`id_inst`) USING BTREE,
  CONSTRAINT `fk_user_inst` FOREIGN KEY (`id_inst`) REFERENCES `institucion` (`id_inst`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Arhyel Ramos', 'arhyel.860@gmail.com', 'Admin', 0, '2023-04-24 00:24:46', '$2y$10$1JuIUCyUJb9KkpeeG77tB.bZIYgbPbpRsD0ICxQsQ40mEqoCNlQpG', '12q12q', 'UeAQ68X8XoAZRArk75mCJm66w14MVvZ2uGMyweVLIgWkdASwhNwSe2MZjXOu', '2023-04-24 00:24:46', '2023-05-08 03:12:28');
INSERT INTO `users` VALUES (8, 'PEDRO AUGUSTO RAMOS BARRIOS', 'pramosb58@gmail.com', 'Admin', 2, NULL, '$2y$10$1UCV4IQ2ghWxtklp316KqejS1rSMC/C.dAkEhjG.rHPZS/y/TeOyi', 'asdasd', 'ZakajN3n8eloHJEZXdU8XbbcemLe1gwQ5T5D3fpAM0qxvDguFSyNlyBUF8y9', '2023-05-06 04:52:09', '2023-05-27 13:49:34');
INSERT INTO `users` VALUES (9, 'GRIMALDA FLORES QUISPE', 'grimalda@gmail.com', 'Director', 4, NULL, '$2y$10$1uxjHchr.N1KZ9dBxPzd2.8Qwpoczoz2LhThF94K7T6ngLkx1C.Y6', '123456', NULL, '2023-05-27 13:23:00', '2023-05-27 13:23:00');
INSERT INTO `users` VALUES (14, 'Arhyel Pruebas', 'a@info.com', 'Director', 27, NULL, '$2y$10$Crm.DctHag0RNtXDghFGf.SiV50UYs/.Fy5j2N0OySKofW9bS.ary', '321321', 'Fa65ie7mY0sSBZ0rxTRSfJ5fZjzSfsCg6mOAMIFpFMDymltujdaprapsxAUd', '2023-07-15 22:13:47', '2023-07-15 22:39:24');

SET FOREIGN_KEY_CHECKS = 1;
