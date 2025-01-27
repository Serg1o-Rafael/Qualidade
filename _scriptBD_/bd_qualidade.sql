CREATE DATABASE QUALIDADE;

use QUALIDADE;

CREATE TABLE MATERIAIS(
    ID int not null PRIMARY KEY AUTO_INCREMENT,
    OP VARCHAR (15) not null,
    CLIENTE INT not null,
    PEDIDO INT not null,
    REVESTIMENTO VARCHAR(20) null,
    DATA_ENTRADA varchar(10) not null,
    DATA_ENTREGA varchar(10) not null);
   
    
    
CREATE TABLE MONITORAMENTO(
    ID_MATERIAL int not null,
    OP VARCHAR (15) not null,
    LOCAL VARCHAR(20) NOT NULL,
    CALIBRACAO VARCHAR (20) not null,
    VISUAL VARCHAR (20) not null,
    QUANT_TOTAL INT null,
    SOBRA INT NULL,
    RELATORIO_DIM VARCHAR(20) NOT NULL,
    SNQC VARCHAR (20) null,
  
   
   FOREIGN KEY (ID_MATERIAL) REFERENCES MATERIAIS(ID));
   

    CREATE TABLE RETRABALHO(
        ID int not null PRIMARY KEY AUTO_INCREMENT,
        ID_OP int not null,
        OP VARCHAR (15) not null,
        QUANT_TOTAL INT not null,
        DATA varchar(10) not null,
        DATA_SAIDA VARCHAr(10) null,
        ESPECIFICAÇÃO TEXT not null,

    FOREIGN KEY(ID_OP) REFERENCES MATERIAIS(ID));


    CREATE TABLE OPS_LIBERADAS(
        ID int not null PRIMARY KEY AUTO_INCREMENT,
        OP VARCHAR (15) not null,
        QUANT_TOTAL int not null,
        SOBRA int not null,
        DATA varchar (10) not null);
 





    
   
  
    
   