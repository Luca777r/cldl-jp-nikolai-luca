CREATE TABLE Component(
   id INT AUTO_INCREMENT,
   categorie VARCHAR(50),
   model VARCHAR(50),
   brand VARCHAR(50),
   price DECIMAL(15,2),
   quantity INT,
   numberCreated INT,
   dateAdd DATE,
   isPeripheral BOOLEAN,
   CONSTRAINT Component_PK PRIMARY KEY(id)
);

CREATE TABLE Processor(
   id INT,
   frequences DECIMAL(15,2),
   nbCore INT,
   chipset VARCHAR(50),
   CONSTRAINT Processor_PK PRIMARY KEY(id),
   CONSTRAINT Processor_Component_FK FOREIGN KEY(id) REFERENCES Component(id)
);

CREATE TABLE StorageSystem(
   id INT,
   isSsd BOOLEAN,
   memory INT,
   CONSTRAINT StorageSystem_PK PRIMARY KEY(id),
   CONSTRAINT StorageSystem_Component_FK FOREIGN KEY(id) REFERENCES Component(id)
);

CREATE TABLE Ram(
   id INT,
   memory DECIMAL(15,2),
   nbStrip INT,
   typeFrequences VARCHAR(50),
   CONSTRAINT Ram_PK PRIMARY KEY(id),
   CONSTRAINT Ram_Component_FK FOREIGN KEY(id) REFERENCES Component(id)
);

CREATE TABLE GraphicCard(
   id INT,
   chipset VARCHAR(50),
   memory DECIMAL(15,2),
   CONSTRAINT GraphicCard_PK PRIMARY KEY(id),
   CONSTRAINT GraphicCard_Component_FK FOREIGN KEY(id) REFERENCES Component(id)
);

CREATE TABLE Mouse(
   id INT,
   isPad BOOLEAN,
   isWired BOOLEAN,
   numKey INT,
   CONSTRAINT Mouse_PK PRIMARY KEY(id),
   CONSTRAINT Mouse_Component_FK FOREIGN KEY(id) REFERENCES Component(id)
);

CREATE TABLE Keyboard(
   id INT,
   isWired BOOLEAN,
   hasNumKeypad BOOLEAN,
   keypadType VARCHAR(50),
   CONSTRAINT Keyboard_PK PRIMARY KEY(id),
   CONSTRAINT Keyboard_Component_FK FOREIGN KEY(id) REFERENCES Component(id)
);

CREATE TABLE Monitor(
   id INT,
   diagonalSize DECIMAL(15,2),
   CONSTRAINT Monitor_PK PRIMARY KEY(id),
   CONSTRAINT Monitor_Component_FK FOREIGN KEY(id) REFERENCES Component(id)
);

CREATE TABLE PowerSupply(
   id INT,
   powerSupply DECIMAL(15,2),
   CONSTRAINT PowerSupply_PK PRIMARY KEY(id),
   CONSTRAINT PowerSupply_Component_FK FOREIGN KEY(id) REFERENCES Component(id)
);

CREATE TABLE Motherboard(
   id INT,
   socket VARCHAR(50),
   format VARCHAR(50),
   CONSTRAINT Motherboard_PK PRIMARY KEY(id),
   CONSTRAINT Motherboard_Component_FK FOREIGN KEY(id) REFERENCES Component(id)
);

CREATE TABLE GlobalUser(
   id INT AUTO_INCREMENT,
   password VARCHAR(128),
   email VARCHAR(128),
   CONSTRAINT GlobalUser_PK PRIMARY KEY(id)
);

CREATE TABLE Computer(
   id INT AUTO_INCREMENT,
   isLaptop BOOLEAN,
   quantity VARCHAR(50),
   dateAdd VARCHAR(50),
   name VARCHAR(50),
   idGlobalUser INT NOT NULL,
   CONSTRAINT Computer_PK PRIMARY KEY(id),
   CONSTRAINT Computer_GlobalUser_1_FK FOREIGN KEY(idGlobalUser) REFERENCES GlobalUser(id)
);

CREATE TABLE Concepteur(
   idGlobalUser INT,
   CONSTRAINT Concepteur_PK PRIMARY KEY(idGlobalUser),
   CONSTRAINT Concepteur_GlobalUser_FK FOREIGN KEY(idGlobalUser) REFERENCES GlobalUser(id)
);

CREATE TABLE Monteur(
   idGlobalUser INT,
   CONSTRAINT Monteur_PK PRIMARY KEY(idGlobalUser),
   CONSTRAINT Monteur_GlobalUser_FK FOREIGN KEY(idGlobalUser) REFERENCES GlobalUser(id)
);

CREATE TABLE Message(
   id INT AUTO_INCREMENT,
   dateAdd DATE,
   text VARCHAR(500),
   idComputer INT NOT NULL,
   idGlobalUser INT NOT NULL,
   CONSTRAINT Message_PK PRIMARY KEY(id),
   CONSTRAINT Message_Computer_1_FK FOREIGN KEY(idComputer) REFERENCES Computer(id),
   CONSTRAINT Message_GlobalUser_2_FK FOREIGN KEY(idGlobalUser) REFERENCES GlobalUser(id)
);

CREATE TABLE Assembler(
   idComputer INT,
   idComponent INT,
   CONSTRAINT Assembler_PK PRIMARY KEY(idComputer, idComponent),
   CONSTRAINT Assembler_Computer_FK FOREIGN KEY(idComputer) REFERENCES Computer(id),
   CONSTRAINT Assembler_Component_1_FK FOREIGN KEY(idComponent) REFERENCES Component(id)
);