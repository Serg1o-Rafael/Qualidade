CREATE DATABASE QUALIDADE;

use QUALIDADE;

CREATE TABLE INFO_MATERIAL(
    OP INT not null PRIMARY KEY,
    CLIENTE INT not null,
    PEDIDO INT not null,
    DATA_ENTREGA DATE not null,
    INSP_Q bit not null,
    REVESTIMENTO bit not null,
    SEM REVESTIMENTO bit not null);
    
    
CREATE TABLE STATUS(
    OP INT NOT NULL,
    LOCAL VARCHAR(20) NOT NULL,
    CALIBRACAO VARCHAR (20) not null,
    VISUAL VARCHAR (20) not null,
    QUANT_TOTAL INT null,
    SOBRA INT NULL,
    RELATORIO_DIM VARCHAR(20) NOT NULL,
    SNQC VARCHAR (20) null,
   
     FOREIGN KEY (OP) REFERENCES info_material(OP));
   
   
  
    
   