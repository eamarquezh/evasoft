use evasoft;
drop table if exists evasoft.fechas;
create table evasoft.fechas(
tipos varchar(250),
fecha varchar(250),
index(tipos)
);

insert into evasoft.fechas (tipos,fecha) values('fecha_limite','2023-02-04');

update evasoft.fechas set fecha = '2023-03-05' where tipos = 'fecha_limite';
select * from evasoft.fechas;