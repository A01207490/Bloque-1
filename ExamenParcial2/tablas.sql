CREATE TABLE `tipos_incidente` (
  `tipo_incidente_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_incidente_nombre` varchar(512) NOT NULL,
  PRIMARY KEY (`tipo_incidente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8

CREATE TABLE `lugares` (
  `lugar_id` int(11) NOT NULL AUTO_INCREMENT,
  `lugar_nombre` varchar(512) NOT NULL,
  PRIMARY KEY (`lugar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8

CREATE TABLE `incidentes` (
  `incidente_fecha` datetime NOT NULL,
  `lugar_id` int(11) NOT NULL,
  `tipo_incidente_id` int(11) NOT NULL,
  PRIMARY KEY (`incidente_fecha`,`lugar_id`,`tipo_incidente_id`),
  KEY `incidentes_FK` (`lugar_id`),
  KEY `incidentes_FK_1` (`tipo_incidente_id`),
  CONSTRAINT `incidentes_FK` FOREIGN KEY (`lugar_id`) REFERENCES `lugares` (`lugar_id`),
  CONSTRAINT `incidentes_FK_1` FOREIGN KEY (`tipo_incidente_id`) REFERENCES `tipos_incidente` (`tipo_incidente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
