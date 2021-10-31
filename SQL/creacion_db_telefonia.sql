CREATE TABLE usuario (
   id INT PRIMARY KEY AUTO_INCREMENT,
   usuario VARCHAR(20),
   nombre VARCHAR(20),
   nivel TINYINT,
   email VARCHAR(50),
   telefono VARCHAR(20),
   marca VARCHAR(20),
   compañia VARCHAR(20),
   saldo FLOAT,
   activo BOOLEAN,
   fechaNacimiento DATE
);

INSERT INTO usuario
VALUES
('1','BRE2271','BRENDA','2','brenda@live.com','655-330-5736','SAMSUNG','CLARO','100','1', '1998-11-20'),
('2','OSC4677','OSCAR','3','oscar@gmail.com','655-143-4181','LG','PILLOFON','0','1','1968-08-29'),
('3','JOS7086','JOSE','3','francisco@gmail.com','655-143-3922','NOKIA','MOVISTAR','150','1','1972-12-01'),
('4','LUI6115','LUIS','0','enrique@outlook.com','655-137-1279','SAMSUNG','PILLOFON','50','1','1988-07-11'),
('5','LUI7072','LUIS','1','luis@hotmail.com','655-100-8260','NOKIA','CLARO','50','0','1991-12-25'),
('6','DAN2832','DANIEL','0','daniel@outlook.com','655-145-2586','SONY','PERSONAL','100','1','1995-07-29'),
('7','JAQ5351','JAQUELINE','0','jaqueline@outlook.com','655-330-5514','BLACKBERRY','TUENTI','0','1','1990-01-01'),
('8','ROM6520','ROMAN','2','roman@gmail.com','655-330-3263','LG','CLARO','50','1','1998-11-21'),
('9','BLA9739','BLAS','0','blas@hotmail.com','655-330-3871','LG','PERSONAL','100','1','1998-11-22'),
('10','JES4752','JESSICA','1','jessica@hotmail.com','655-143-6861','SAMSUNG','PILLOFON','500','1','1999-05-28'),
('11','DIA6570','DIANA','1','diana@live.com','655-143-3952','SONY','PERSONAL','100','0','1994-10-07'),
('12','RIC8283','RICARDO','2','ricardo@hotmail.com','655-145-6049','MOTOROLA','CLARO','150','1','1992-01-15'),
('13','VAL6882','VALENTINA','0','valentina@live.com','655-137-4253','BLACKBERRY','AT&T','50','0','1990-09-12'),
('14','BRE8106','BRENDA','3','brenda2@gmail.com','655-100-1351','MOTOROLA','NEXTEL','150','1','1998-01-05'),
('15','LUC4982','LUCIA','3','lucia@gmail.com','655-145-4992','BLACKBERRY','CLARO','0','1','1965-11-20'),
('16','JUA2337','JUAN','0','juan@outlook.com','655-100-6517','SAMSUNG','TUENTI','0','0','1938-05-15'),
('17','ELP2984','ELPIDIO','1','elpidio@outlook.com','655-145-9938','MOTOROLA','MOVISTAR','500','1','1999-11-10'),
('18','JES9640','JESSICA','3','jessica2@live.com','655-330-5143','SONY','CLARO','200','1','2001-11-20'),
('19','LET4015','LETICIA','2','leticia@yahoo.com','655-143-4019','BLACKBERRY','PERSONAL','100','1','2005-11-15'),
('20','LUI1076','LUIS','3','luis2@live.com','655-100-5085','SONY','PERSONAL','150','1','1979-04-22'),
('21','HUG5441','HUGO','2','hugo@live.com','655-137-3935','MOTOROLA','NEXTEL','500','1','1986-08-23');