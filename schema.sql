#CREATE DATABASE venta;

USE iis320fhcpx25b6d;

CREATE TABLE  productos (
  id_producto int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  producto varchar(400) NOT NULL,
  descripcion varchar(100) NOT NULL,
  existencias int(11) NOT NULL,
  precio_compra int(11) NOT NULL,
  precio_venta int(11) NOT NULL
  
);

INSERT INTO productos (producto,descripcion,existencias,precio_compra,precio_venta) VALUES ("Computadora","Asus X556U","15","12000","14500");
INSERT INTO productos (producto,descripcion,existencias,precio_compra,precio_venta) VALUES ("Impresora","Multifuncional hp color","25","5000","6200");
INSERT INTO productos (producto,descripcion,existencias,precio_compra,precio_venta) VALUES ("DVD","Sony MHC-V7D mini componente","9500","10","10500");