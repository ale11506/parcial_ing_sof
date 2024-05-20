CREATE TABLE Control(
    cont_id SERIAL PRIMARY KEY,
    cont_nombre_servido VARCHAR(100),
    cont_menu VARCHAR(50),
    cont_fecha DATE,
    cont_hora VARCHAR(50),
    cont_tiempo_comida VARCHAR(50),
    cont_nombre_Servidor VARCHAR(100)
);
select * from control