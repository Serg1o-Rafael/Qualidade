CREATE DATABASE QUALIDADE;

use QUALIDADE;

CREATE TABLE OPS(
    ID int not null PRIMARY KEY AUTO_INCREMENT,
    OP VARCHAR (15) not null,
    LOTE varchar (10) null,
    CLIENTE INT not null,
    PEDIDO INT not null,
    REVESTIMENTO VARCHAR(20) null,
    MATERIAL VARCHAR (5) not null,
    DATA_ENTRADA varchar(10) not null,
    DATA_ENTREGA varchar(10) not null);
   
    
    
CREATE TABLE MONITORAMENTO(
    ID_OP int not null,
    OP VARCHAR (15) not null,
    LOTE varchar (10) null,
    LOCAL VARCHAR(20) NOT NULL,
    QUANT_TOTAL INT null,
    SOBRA INT NULL,

   
   FOREIGN KEY (ID_OP) REFERENCES OPS(ID));
   

    CREATE TABLE RETRABALHO(
        ID int not null PRIMARY KEY AUTO_INCREMENT,
        ID_OP int not null,
        OP VARCHAR (15) not null,
        QUANT_TOTAL INT not null,
        DATA varchar(10) not null,
        DATA_RETORNO VARCHAr(10) null,
        ESPECIFICACAO TEXT not null,

    FOREIGN KEY(ID_OP) REFERENCES OPS(ID));


    CREATE TABLE OPS_LIBERADAS(
        ID int not null PRIMARY KEY AUTO_INCREMENT,
        OP VARCHAR (15) not null,
        QUANT_TOTAL int not null,
        SOBRA int not null,
        DATA varchar (10) not null);
 





    
   
  
    
   