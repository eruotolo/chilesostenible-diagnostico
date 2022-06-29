-- MariaDB dump 10.17  Distrib 10.4.10-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: chilesostenible
-- ------------------------------------------------------
-- Server version	10.4.10-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `encuesta`
--

DROP TABLE IF EXISTS `encuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuesta` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `empresa` varchar(200) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `pais` varchar(200) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `region` varchar(300) DEFAULT NULL,
  `nroempleado` varchar(100) DEFAULT NULL,
  `tamano` varchar(150) DEFAULT NULL,
  `rubro` varchar(150) DEFAULT NULL,
  `rut` varchar(30) DEFAULT NULL,
  `p1-1` varchar(150) DEFAULT NULL,
  `p1-2` varchar(150) DEFAULT NULL,
  `p2-1` varchar(150) DEFAULT NULL,
  `p2-2` varchar(150) DEFAULT NULL,
  `p2-3` varchar(150) DEFAULT NULL,
  `p2-4` varchar(150) DEFAULT NULL,
  `p2-5` varchar(150) DEFAULT NULL,
  `p2-6` varchar(150) DEFAULT NULL,
  `p2-7` varchar(150) DEFAULT NULL,
  `p3-1` varchar(150) DEFAULT NULL,
  `p3-2` varchar(150) DEFAULT NULL,
  `p3-3` varchar(150) DEFAULT NULL,
  `p3-4` varchar(150) DEFAULT NULL,
  `p3-5` varchar(150) DEFAULT NULL,
  `p3-6` varchar(150) DEFAULT NULL,
  `p3-7` varchar(150) DEFAULT NULL,
  `p4-1` varchar(150) DEFAULT NULL,
  `p4-2` varchar(150) DEFAULT NULL,
  `p4-3` varchar(150) DEFAULT NULL,
  `p4-4` varchar(150) DEFAULT NULL,
  `p4-5` varchar(150) DEFAULT NULL,
  `p4-6` varchar(150) DEFAULT NULL,
  `p5-1` varchar(150) DEFAULT NULL,
  `p5-2` varchar(150) DEFAULT NULL,
  `p5-3` varchar(150) DEFAULT NULL,
  `p5-4` varchar(150) DEFAULT NULL,
  `p5-5` varchar(150) DEFAULT NULL,
  `p5-6` varchar(150) DEFAULT NULL,
  `p6-1` varchar(150) DEFAULT NULL,
  `p6-2` varchar(150) DEFAULT NULL,
  `p7-1` varchar(150) DEFAULT NULL,
  `p7-2` varchar(150) DEFAULT NULL,
  `p7-3` varchar(150) DEFAULT NULL,
  `p7-4` varchar(150) DEFAULT NULL,
  `p7-5` varchar(150) DEFAULT NULL,
  `p7-6` varchar(150) DEFAULT NULL,
  `p7-7` varchar(150) DEFAULT NULL,
  `p7-8` varchar(150) DEFAULT NULL,
  `p8-1` varchar(150) DEFAULT NULL,
  `p9-1` varchar(150) DEFAULT NULL,
  `p9-2` varchar(150) DEFAULT NULL,
  `p9-3` varchar(150) DEFAULT NULL,
  `p9-4` varchar(150) DEFAULT NULL,
  `p10-1` varchar(150) DEFAULT NULL,
  `p11-1` varchar(150) DEFAULT NULL,
  `p12-1` varchar(150) DEFAULT NULL,
  `p12-2` varchar(150) DEFAULT NULL,
  `p12-3` varchar(150) DEFAULT NULL,
  `p13-1` varchar(150) DEFAULT NULL,
  `p13-2` varchar(150) DEFAULT NULL,
  `p14-1` varchar(150) DEFAULT NULL,
  `p14-2` varchar(150) DEFAULT NULL,
  `p14-3` varchar(150) DEFAULT NULL,
  `p14-4` varchar(150) DEFAULT NULL,
  `p14-5` varchar(150) DEFAULT NULL,
  `p14-6` varchar(150) DEFAULT NULL,
  `p15-1` varchar(150) DEFAULT NULL,
  `p15-2` varchar(150) DEFAULT NULL,
  `p15-3` varchar(150) DEFAULT NULL,
  `p15-4` varchar(150) DEFAULT NULL,
  `p15-5` varchar(150) DEFAULT NULL,
  `p16-1` varchar(150) DEFAULT NULL,
  `p16-2` varchar(150) DEFAULT NULL,
  `p16-3` varchar(150) DEFAULT NULL,
  `p16-4` varchar(150) DEFAULT NULL,
  `p17-1` varchar(150) DEFAULT NULL,
  `p17-2` varchar(150) DEFAULT NULL,
  `p17-3` varchar(150) DEFAULT NULL,
  `p17-4` varchar(150) DEFAULT NULL,
  `p17-5` varchar(150) DEFAULT NULL,
  `p17-6` varchar(150) DEFAULT NULL,
  `p18-1` varchar(150) DEFAULT NULL,
  `p18-2` varchar(150) DEFAULT NULL,
  `p18-3` varchar(150) DEFAULT NULL,
  `p18-4` varchar(150) DEFAULT NULL,
  `p18-5` varchar(150) DEFAULT NULL,
  `p18-6` varchar(150) DEFAULT NULL,
  `p18-7` varchar(150) DEFAULT NULL,
  `p18-8` varchar(150) DEFAULT NULL,
  `p19-1` varchar(150) DEFAULT NULL,
  `p19-2` varchar(150) DEFAULT NULL,
  `p19-3` varchar(150) DEFAULT NULL,
  `p19-4` varchar(150) DEFAULT NULL,
  `p19-5` varchar(150) DEFAULT NULL,
  `p19-6` varchar(150) DEFAULT NULL,
  `p20-1` varchar(150) DEFAULT NULL,
  `p20-2` varchar(150) DEFAULT NULL,
  `p20-3` varchar(150) DEFAULT NULL,
  `p20-4` varchar(150) DEFAULT NULL,
  `p20-5` varchar(150) DEFAULT NULL,
  `p20-6` varchar(150) DEFAULT NULL,
  `p20-7` varchar(150) DEFAULT NULL,
  `p21-1` varchar(150) DEFAULT NULL,
  `p21-2` varchar(150) DEFAULT NULL,
  `p21-3` varchar(150) DEFAULT NULL,
  `p21-4` varchar(150) DEFAULT NULL,
  `p21-5` varchar(150) DEFAULT NULL,
  `p21-6` varchar(150) DEFAULT NULL,
  `p21-7` varchar(150) DEFAULT NULL,
  `p22-1` varchar(150) DEFAULT NULL,
  `p22-2` varchar(150) DEFAULT NULL,
  `p22-3` varchar(150) DEFAULT NULL,
  `p22-4` varchar(150) DEFAULT NULL,
  `p22-5` varchar(150) DEFAULT NULL,
  `p23-1` varchar(150) DEFAULT NULL,
  `p23-2` varchar(150) DEFAULT NULL,
  `p23-3` varchar(150) DEFAULT NULL,
  `p23-4` varchar(150) DEFAULT NULL,
  `p23-5` varchar(150) DEFAULT NULL,
  `p24-1` varchar(150) DEFAULT NULL,
  `p24-2` varchar(150) DEFAULT NULL,
  `p24-3` varchar(150) DEFAULT NULL,
  `p24-4` varchar(150) DEFAULT NULL,
  `p25-1` varchar(150) DEFAULT NULL,
  `p25-2` varchar(150) DEFAULT NULL,
  `p25-3` varchar(150) DEFAULT NULL,
  `p25-4` varchar(150) DEFAULT NULL,
  `p25-5` varchar(150) DEFAULT NULL,
  `p26-1` varchar(150) DEFAULT NULL,
  `p26-2` varchar(150) DEFAULT NULL,
  `p26-3` varchar(150) DEFAULT NULL,
  `p26-4` varchar(150) DEFAULT NULL,
  `p26-5` varchar(150) DEFAULT NULL,
  `p26-6` varchar(150) DEFAULT NULL,
  `p26-7` varchar(150) DEFAULT NULL,
  `p27-1` varchar(150) DEFAULT NULL,
  `p27-2` varchar(150) DEFAULT NULL,
  `p27-3` varchar(150) DEFAULT NULL,
  `p27-4` varchar(150) DEFAULT NULL,
  `p28-1` varchar(150) DEFAULT NULL,
  `p28-2` varchar(150) DEFAULT NULL,
  `p28-3` varchar(150) DEFAULT NULL,
  `p28-4` varchar(150) DEFAULT NULL,
  `p29-1` varchar(150) DEFAULT NULL,
  `p29-2` varchar(150) DEFAULT NULL,
  `p29-3` varchar(150) DEFAULT NULL,
  `p29-4` varchar(150) DEFAULT NULL,
  `p30-1` varchar(150) DEFAULT NULL,
  `p30-2` varchar(150) DEFAULT NULL,
  `p31-1` varchar(150) DEFAULT NULL,
  `p31-2` varchar(150) DEFAULT NULL,
  `p32-1` varchar(150) DEFAULT NULL,
  `p32-2` varchar(150) DEFAULT NULL,
  `p32-3` varchar(150) DEFAULT NULL,
  `p33-1` varchar(150) DEFAULT NULL,
  `p33-2` varchar(150) DEFAULT NULL,
  `p34-1` varchar(150) DEFAULT NULL,
  `p34-2` varchar(150) DEFAULT NULL,
  `p34-3` varchar(150) DEFAULT NULL,
  `p34-4` varchar(150) DEFAULT NULL,
  `p35-1` varchar(150) DEFAULT NULL,
  `p35-2` varchar(150) DEFAULT NULL,
  `p35-3` varchar(150) DEFAULT NULL,
  `p35-4` varchar(150) DEFAULT NULL,
  `p36-1` varchar(150) DEFAULT NULL,
  `p36-2` varchar(150) DEFAULT NULL,
  `p36-3` varchar(150) DEFAULT NULL,
  `p36-4` varchar(150) DEFAULT NULL,
  `p37-1` varchar(150) DEFAULT NULL,
  `p37-2` varchar(150) DEFAULT NULL,
  `p37-3` varchar(150) DEFAULT NULL,
  `p37-4` varchar(150) DEFAULT NULL,
  `p37-5` varchar(150) DEFAULT NULL,
  `p38-1` varchar(150) DEFAULT NULL,
  `p38-2` varchar(150) DEFAULT NULL,
  `p38-3` varchar(150) DEFAULT NULL,
  `p38-4` varchar(150) DEFAULT NULL,
  `p39-1` varchar(150) DEFAULT NULL,
  `p39-2` varchar(150) DEFAULT NULL,
  `p39-3` varchar(150) DEFAULT NULL,
  `p39-4` varchar(150) DEFAULT NULL,
  `p39-5` varchar(150) DEFAULT NULL,
  `p39-6` varchar(150) DEFAULT NULL,
  `p40-1` varchar(150) DEFAULT NULL,
  `p40-2` varchar(150) DEFAULT NULL,
  `p40-3` varchar(150) DEFAULT NULL,
  `p40-4` varchar(150) DEFAULT NULL,
  `p40-5` varchar(150) DEFAULT NULL,
  `p40-6` varchar(150) DEFAULT NULL,
  `p40-7` varchar(150) DEFAULT NULL,
  `p40-8` varchar(150) DEFAULT NULL,
  `last` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuesta`
--

LOCK TABLES `encuesta` WRITE;
/*!40000 ALTER TABLE `encuesta` DISABLE KEYS */;
INSERT INTO `encuesta` VALUES (2,'nachodeleon77@gmail.com','Empresaxxx','2022-05-10 17:40:29','Yemen','Nachoxx','Seleccione su regiÃ³n','De 301 a mÃ¡s','Empresa mediana (ingresos por ventas sobre 25.001 UF hasta 100.000 UF anual)','Turismo','27039661-5','Si','No','No','No','No','No','No','','Si','No','No','No','No','No','No','Si','Si','No','No','No','No','Si','No','No','No','No','Pepe','No','Si','No','No','No','No','No','No','No','No','Si','No','No','No','No','Si','No','Si','Si','Si','Si','Si','No','No','No','No','No','No','Si','No','No','No','No','Si',NULL,NULL,NULL,'Si','No','No','No','No','Si','No','No','No','No','No','No','No','No','Si','No','No','No','No','No','Si','No','No','No','No','No','No','Si','No','Si','No','No','No','No','No','Si','Si','Si','Si','No','Si','Si','Si','No','No','No','No','No','Si','Si','Si','Si','Si','No','Si','Si','Si','Si','Si','No','No','Si','Si','Si','Si','Si','Si','Si','Si','Si','Si','Si','Si','No','pepe','No','Jajaja','Si','Si',NULL,'No','dsa','No','No','No','Si','No','No','No','Si','No','No','No','Si','No','No','No','No','Si','No','No','No','Si','No','No','No','No','No','Si','Si','Si','Si','Si','Si','Si','Si','pepe',27),(16,'dasdadasdsafd@dsaads.com','dsada s','2022-05-16 11:11:45','Australia','dsadasd asdas ','','De 0 a 9','Empresa pequeÃ±a (ingresos por ventas sobre 2.401 UF hasta 25.000 anual)','GestiÃ³n de residuos','27039661-5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(17,'dasadhgsdhj@dsa.com','ds ads ','2022-05-16 11:20:40','Bahamas','dsaa da ','','De 200 a 300','Empresa pequeÃ±a (ingresos por ventas sobre 2.401 UF hasta 25.000 anual)','Pepe','27039661-5','Si','Si',NULL,NULL,NULL,NULL,'Si',NULL,NULL,NULL,NULL,NULL,'Si','Si',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7),(18,'dasdas@dsadas.com','das das dad as','2022-05-17 22:35:55','Bangladesh','dasdsad sada s','Seleccione su regiÃ³n',NULL,NULL,NULL,'27039661-5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,'das@dsadasdas.com','d asdas das ','2022-05-17 22:36:04','Azerbaijan','dsadsa dsa','',NULL,NULL,NULL,'27039661-5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `encuesta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pregunta-titulo`
--

DROP TABLE IF EXISTS `pregunta-titulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pregunta-titulo` (
  `Codigo` varchar(10) NOT NULL,
  `Pregunta` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pregunta-titulo`
--

LOCK TABLES `pregunta-titulo` WRITE;
/*!40000 ALTER TABLE `pregunta-titulo` DISABLE KEYS */;
INSERT INTO `pregunta-titulo` VALUES ('p1-1','p1. ¿Su empresa cuenta con una misión o propósito formal?'),('p1-2','p1. La misión o propósito cuenta con objetivo(s) sociales y/o ambiental(es) específico(s)'),('p2-1','p2. La empresa tiene un código de ética formalizado por escrito'),('p2-2','p2. La empresa cuenta con un código anticorrupción'),('p2-3','p2. La empresa tiene una política de denuncias formalizada por escrito'),('p2-4','p2. La empresa implementa controles financieros internos'),('p2-5','p2. La empresa realizó una evaluación de riesgos relacionados con cuestiones éticas en los últimos dos años'),('p2-6','p2. Otra:'),('p2-7','p2. Ninguna de las anteriores'),('p3-1','p3. Hemos realizado una evaluación de materialidad utilizando mecanismos de involucramiento de los grupos de interesados.'),('p3-2','p3. La empresa ha identificado y medido las métricas en función de los resultados de la evaluación de materialidad'),('p3-3','p3. Realizamos un seguimiento de los indicadores de impacto que hemos elegido en función de la misión de la empresa o de la decisión de los directivos'),('p3-4','p3. Hemos establecido objetivos de desempeño para todos los temas y las mediciones identificados como significativos'),('p3-5','p3. Hemos desarrollado una Estrategia de Sostenibilidad'),('p3-6','p3. Implementamos Reportes de Sostenibilidad'),('p3-7','p3. Ninguna de las anteriores'),('p4-1','p4. ¿Su empresa cuenta con un directorio formal?'),('p4-2','p4. Independiente'),('p4-3','p4. Migrante'),('p4-4','p4. Mujer'),('p4-5','p4. Persona parte de la comunidad LGTBQ+'),('p4-6','p4. Ninguna de las anteriores'),('p5-1','p5. Titularidad Real'),('p5-2','p5. Desempeño financiero'),('p5-3','p5. Desempeño social y ambiental (Reporte de Impacto)'),('p5-4','p5. Miembros del directorio (Junta Directiva)'),('p5-5','p5. Otra:'),('p5-6','p5. Ninguna de las anteriores'),('p6-1','p6. ¿Cuenta con un manual de trabajadores que contenga toda la información que implique alguna incidencia en la experiencia de los/as trabajadores/as: beneficios, reglas, mecanismos, derechos y deberes?'),('p6-2','p6. ¿Realiza instancias de socialización del manual o políticas de trabajadores/as?'),('p7-1','p7. Cuenta con una declaración formal o política de No Discriminación (por ejemplo en el Manual de Trabajadores)'),('p7-2','p7. Tiene una declaración sobre compromiso con inclusión y equidad'),('p7-3','p7. Cuenta con una Política contra el acoso que contenga mecanismos de denuncia interna'),('p7-4','p7. Las descripciones de las tareas internas en la empresa tienen un lenguaje inclusivo y equitativo'),('p7-5','p7. Los procesos de búsquedas para nuevas contrataciones tienen un mensaje de compromiso con la diversidad, equidad e inclusión.'),('p7-6','p7. Se evalúan las instalaciones de la empresa en sus distintas áreas, identificando posibles brechas de accesibilidad y potenciales mejoras.'),('p7-7','p7. Cuenta con al menos 1 baño neutro en cada instalación.'),('p7-8','p7. Ninguna de las anteriores'),('p8-1','p8. ¿Cuenta con bandas claras de sueldos, que les permita reconocer posiciones en concordancia con rentas dignas y acorde a la realidad interna y del mercado?'),('p9-1','p9. Cargo'),('p9-2','p9. Género'),('p9-3','p9. Edad'),('p9-4','p9. Ninguna de las anteriores'),('p10-1','p10. ¿Cuenta con un Protocolo que establezca el mecanismo y los criterios para definir cómo se toman las decisiones respeto a las capacitaciones; quienes se capacitan, cómo se solicita apoyo, en qué tipos de capacitaciones la empresa apoya, etc.?'),('p11-1','p11. ¿Cuenta con un Presupuesto Anual para capacitaciones?'),('p12-1','p12. ¿Mide el clima laboral de forma anual en su empresa?'),('p12-2','p12. ¿Gestiona de alguna manera políticas o programas según los resultados de la Encuesta de Clima?'),('p12-3','p12. ¿Comparte los resultados de la encuesta de clima con sus trabajadores?'),('p13-1','p13. ¿Cuenta con un modelo de gestión del desempeño que permita establecer un plan de acompañamiento y desarrollo de carrera?'),('p13-2','p13. ¿Capacita y promueve formalmente el uso de las evaluaciones de desempeño y la retroalimentación por parte de la Jefaturas y Gerentes con sus equipos?'),('p14-1','p14. La empresa comparte políticas o reglas con sus proveedores, pero no cuenta con un proceso de verificación'),('p14-2','p14. La empresa exige que los proveedores completen una evaluación diseñada internamente'),('p14-3','p14. Una entidad externa realiza auditorías o evaluaciones de rutina de los proveedores de la empresa al menos una vez cada dos años'),('p14-4','p14. La empresa realiza auditorías o evaluaciones de rutina de sus proveedores al menos cada dos años'),('p14-5','p14. La empresa utiliza herramientas de evaluación de riesgos o de impacto creadas por entidades independientes (como Sedex o la Evaluación de Impacto B)'),('p14-6','p14. Ninguna de las anteriores'),('p15-1','p15. Cumplimiento de las leyes y regulaciones locales, incluidas aquellas relacionadas con el desempeño social y ambiental'),('p15-2','p15. Buenas prácticas de gobernanza, incluidas políticas relacionadas con la ética y la corrupción'),('p15-3','p15. Prácticas positivas que excedan los requisitos normativos (p. ej., procesos de fabricación que no dañen el medioambiente, excelentes prácticas laborales, etc.)'),('p15-4','p15. Certificaciones otorgadas por organismos independientes que acreditan un buen desempeño social y/o ambiental'),('p15-5','p15. Ninguna de las anteriores'),('p16-1','p16. 0- 20%'),('p16-2','p16. 20-39%'),('p16-3','p16. 40-59%'),('p16-4','p16. Más del 60%'),('p17-1','p17. La empresa monitorea la diversidad en la participación societaria de sus proveedores'),('p17-2','p17. La empresa tiene una política que documenta la preferencia por aquellos proveedores cuyos propietarios pertenecen a grupos subrepresentados'),('p17-3','p17. La empresa tiene metas formales en cuanto al porcentaje específico de compras a proveedores con mayor diversidad entre sus propietarios'),('p17-4','p17. La empresa tiene un programa formal para comprar y dar asistencia a proveedores con mayor diversidad entre sus propietarios'),('p17-5','p17. NO APLICA: Recopilar datos de los proveedores o tener políticas que den tratamiento preferencial a ciertos proveedores es ilegal en el país donde opera la empresa'),('p17-6','p17. Ninguna de las anteriores'),('p18-1','p18. \"Donaciones financieras o en especie (sin incluir causas políticas)\"'),('p18-2','p18. Inversiones destinadas a la comunidad'),('p18-3','p18. Servicio comunitario o pro bono'),('p18-4','p18. Adopción de políticas o prácticas para promover un mejor desempeño social o ambiental'),('p18-5','p18. Asociaciones con organizaciones benéficas o participación en organizaciones comunitarias'),('p18-6','p18. Descuentos en productos o servicios para grupos desfavorecidos específicos'),('p18-7','p18. La empresa otorga participación societaria o accionaria a una organización sin fines de lucro'),('p18-8','p18. Ninguna de las anteriores'),('p19-1','p19. Mapeo de grupos de interés'),('p19-2','p19. Análisis de materialidad'),('p19-3','p19. Diagnóstico comunitario'),('p19-4','p19. Apoyo o financiamiento ocasional en el desarrollo de proyectos comunitarios'),('p19-5','p19. Política/Programa de relacionamiento comunitario'),('p19-6','p19. Ninguna de las anteriores'),('p20-1','p20. La organización cuenta con un comité de equidad.'),('p20-2','p20. La organización cuenta con una política de proveedores/as que facilite la participación de empresas lideradas por mujeres o que sean propiedad de mujeres.'),('p20-3','p20. Promueven formalmente una cultura pro-equidad, trabajando los sesgos inconscientes, la conciliación de la vida laboral, familiar y personal y, prácticas específicas que aseguren la equidad dentro de la organización.'),('p20-4','p20. Contempla programas de formación en liderazgo para mujeres.'),('p20-5','p20. Asegura cuotas para presencia de Mujeres en cargos de alta dirección: gerencias, subgerencias y directorios.'),('p20-6','p20. Otra:'),('p20-7','p20. Ninguna de las anteriores'),('p21-1','p21. Agua'),('p21-2','p21. Flora o vegetación'),('p21-3','p21. Fauna'),('p21-4','p21. Suelos'),('p21-5','p21. Áridos'),('p21-6','p21. Minerales'),('p21-7','p21. Ninguna de las anteriores'),('p22-1','p22. Medición'),('p22-2','p22. Mitigación'),('p22-3','p22. Reparación'),('p22-4','p22. Compensación'),('p22-5','p22. Ninguna de las anteriore'),('p26-2','p26. Ha incorporado principios de ecodiseño'),('p26-1','p26. Ha realizado análisis de ciclo de vida a productos'),('p25-5','p25. Ninguna de las anteriores'),('p25-4','p25. Compostaje'),('p25-3','p25. Reciclaje'),('p25-2','p25. Reutilización'),('p25-1','p25. Reducción'),('p24-4','p24. Compromiso de disminuir generación de residuos entre 76% a 99%'),('p24-3','p24. Compromiso de disminuir generación de residuos entre 51% a 75%'),('p24-2','p24. Compromiso de disminuir generación de residuos entre 26 a 50%'),('p24-1','p24. Compromiso de disminuir generación de residuos entre 1% a 25%'),('p23-5','p23. No aplica'),('p23-4','p23. Ninguna de las anteriores'),('p23-3','p23. Estamos en proceso de creación de un plan de manejo de recursos naturales'),('p23-2','p23. Seguimos la Estrategia Nacional de Biodiversidad 2017-2030'),('p26-3','p26. Ha rediseñado productos con fin de disminuir la huella de carbono generada'),('p26-4','p26. Ha cambiado material virgen por material reciclado en sus productos'),('p26-5','p26. Ha hecho plan para la disposición correcta de los residuos de su producto'),('p26-6','p26. Ninguna de las anteriores'),('p26-7','p26. No aplica para nuestro rubro (servicios)'),('p27-1','p27. Sí y tiene planes de gestión sobre estos'),('p27-2','p27. Sí'),('p27-3','p27. No, pero se está trabajando en ello'),('p27-4','p27. No'),('p28-1','p28. Sí y está disponible públicamente'),('p28-2','p28. Sí'),('p28-3','p28. No, pero se está trabajando en ella'),('p28-4','p28. No'),('p29-1','p29. Sí y están disponible públicamente'),('p29-2','p29. Sí'),('p29-3','p29. No, pero se está trabajando en ello'),('p29-4','p29. No'),('p30-1','p30. No'),('p30-2','p30. Sí, ¿cuáles?'),('p31-1','p31. No'),('p31-2','p31. Sí, ¿cuáles?'),('p32-1','p32. Sí, bajo los estándares GRI'),('p32-2','p32. Sí'),('p32-3','p32. No'),('p33-1','p33. No'),('p33-2','p33. Sí, ¿cuáles?'),('p34-1','p34. Ha medido el consumo energético'),('p34-2','p34. Ha implementado planes de eficiencia energética'),('p34-3','p34. Ha invertido en equipos más eficientes energéticamente'),('p34-4','p34. Ninguna de las anteriores'),('p35-1','p35. Ha diversificado su matriz energética'),('p35-2','p35. Ha invertido en equipos generadores de energía eléctrica renovable'),('p35-3','p35. Ha medido los porcentajes de generación de energía eléctrica renovable en su matriz energética'),('p35-4','p35. Ninguna de las anteriores'),('p36-1','p36. Ha generado planes para integrar la electromovilidad'),('p36-2','p36. Ha generado planes para mejorar la eficiencia energética'),('p36-3','p36. Otros planes para alcanzar la carbono neutralidad'),('p36-4','p36. Ninguna de las anteriores'),('p37-1','p37. Mide el Alcance 1'),('p37-2','p37. Mide el Alcance 2'),('p37-3','p37. Mide el Alcance 3'),('p37-4','p37. Tiene los resultados públicamente disponibles'),('p37-5','p37. Ninguna de las anteriores'),('p38-1','p38. Estableció metas para el alcance 1'),('p38-2','p38. Estableció metas para el alcance 2'),('p38-3','p38. Estableció metas para el alcance 3'),('p38-4','p38. Ninguna de las anteriores'),('p39-1','p39. Huella hídrica verde'),('p39-2','p39. Huella hídrica azul'),('p39-3','p39. Huella hídrica gris'),('p39-4','p39. Tiene los resultados públicamente disponibles'),('p39-5','p39. Cuenta con una estrategia de gestión hídrica'),('p39-6','p39. Ninguna de las anteriores'),('p23-1','p23. Hemos creado un plan de manejo de recursos naturales'),('ID','ID'),('email','E-mail'),('empresa','Empresa'),('fecha','Fecha'),('pais','Pais'),('nombre','Nombre'),('region','Region'),('tamano','Tamaño'),('rubro','Rubro'),('rut','RUT'),('p40-1','p40. ¿Por medio de qué organización te enteraste de esta iniciativa? BCI.'),('p40-2','p40. EBCO.'),('p40-3','p40. Endeavor.'),('p40-4','p40. Explora.'),('p40-5','p40. Fundación Imagen de Chile.'),('p40-6','p40. Sistema B Chile.'),('p40-7','p40. Universidad Adolfo Ibáñez'),('p40-8','p-40. Otra(detallar)'),('last','Ultima Pregunta');
/*!40000 ALTER TABLE `pregunta-titulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `description` varchar(150) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `dateregistered` datetime DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `referer` int(10) unsigned DEFAULT 0,
  `firstname` varchar(300) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `admin` tinyint(4) DEFAULT 0,
  `lastname` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-17 23:46:05
