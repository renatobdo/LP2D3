CREATE TABLE produtos (
    id INT NOT NULL AUTO_INCREMENT, 
    tipo VARCHAR(45) NOT NULL, 
    nome VARCHAR(45) NOT NULL, 
    descricao VARCHAR(90) NOT NULL, 
    imagem VARCHAR(80) NOT NULL, 
    preco DECIMAL (5,2) NOT NULL, 
PRIMARY KEY (id));

select * from produtos;


INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Café', 'Café Cremoso', 'Café cremoso irresistivelmente suave e que envolve seu paladar', 'cafe-cremoso.jpg', '5.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Café', 'Café com Leite', 'A harmonia perfeita do café e do leite, uma experiência reconfortante', 'cafe-com-leite.jpg', '2.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Café', 'Cappuccino', 'Café suave, leite cremoso e uma pitada de sabor adocicado', 'cappuccino.jpg', '7.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Café', 'Café Gelado', 'Café gelado refrescante, adoçado e com notas sutis de baunilha ou caramelo.', 'cafe-gelado.jpg', '3.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Almoço', 'Bife', 'Bife, arroz com feijão e uma deliciosa batata frita', 'bife.jpg', '27.90');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Almoço', 'Filé de peixe', 'Filé de peixe salmão assado, arroz, feijão verde e tomate.', 'prato-peixe.jpg', '24.99');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Almoço', 'Frango', 'Saboroso frango à milanesa com batatas fritas, salada de repolho e molho picante', 'prato-frango.jpg', '23.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Almoço', 'Fettuccine', 'Prato italiano autêntico da massa do fettuccine com peito de frango grelhado', 'fettuccine.jpg', '22.50');

select * from produtos;

update produtos set imagem = 'img/cafe-cremoso.jpg' where id = 1;
update produtos set imagem = 'img/cafe-com-leite.jpg' where id = 2;
update produtos set imagem = 'img/cappuccino.jpg' where id = 3;
update produtos set imagem = 'img/cafe-gelado.jpg' where id = 4;
