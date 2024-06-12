CREATE DATABASE db_produtos;
USE db_produtos;
 

CREATE TABLE tbl_produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    descricao TEXT,
    preco DECIMAL(10, 2),
    imagem VARCHAR(255),
    tipo VARCHAR(50)
);

INSERT INTO tbl_produtos (id, titulo, descricao, preco, imagem, tipo) VALUES
    ('01', 'Burguer', 'Nosso clássico pão, carne e queijo, com Hambúrguer de 160g grelhado na Parrilla, duas fatias de queijo cheddar, pão de brioche e nosso delicioso molho Mam', 23.99, 'https://files.menudino.com/cardapios/59084/3.jpg', 'Hambúrguer'),
    ('02', 'Saladman', 'Hambúrguer de 160g grelhado na Parrilla, duas fatias de Queijo Cheddar, Pão de brioche, Pickles, Alface e Tomate frescos, Cebola e nosso delicioso molho Mam', 27.99, 'https://files.menudino.com/cardapios/59084/4.jpg', 'Hambúrguer'),
    ('03', 'Toca', 'Esse é irresistível. Hambúrguer de 160g grelhado na Parrilla, duas fatias de queijo cheddar, pão de brioche, Bacon, Cebola Caramelizada finalizada no melado e nosso delicioso molho Mam', 30.00, 'https://files.menudino.com/cardapios/59084/5.jpg', 'Hambúrguer'),
    ('04', 'Alto', 'Esse é monstruoso. Duplo Hambúrguer são 320g de carne grelhado na Parrilla, duas fatias de queijo cheddar, pão de brioche, Pickles, Bacon e nosso delicioso molho Mam', 41.99, 'https://files.menudino.com/cardapios/59084/6.jpg', 'Hambúrguer'),
    ('05', 'Mam Smash', 'Duplo Hambúrguer de 50g smashado com cebola, duas fatias de queijo cheddar, pão de brioche, Pickles, Bacon, e nosso delicioso molho Mam', 25.99, 'https://files.menudino.com/cardapios/59084/8.jpg', 'Hambúrguer'),
    ('06', 'Salad Smash', 'TDuplo Hambúrguer de 50g, duas fatias de Queijo Cheddar, Pão de brioche, Alface e Tomate frescos, Cebola e nosso delicioso molho Mam', 21.99, 'https://files.menudino.com/cardapios/59084/7.jpg', 'Hambúrguer'),
    ('07', 'Toca Smash', 'Duplo Hambúrguer de 50g, duas fatias de queijo cheddar, pão de brioche, Bacon, Cebola Caramelizada finalizada no melado e nosso delicioso molho Mam', 21.99, 'https://files.menudino.com/cardapios/59084/10.jpg', 'Hambúrguer'),
    ('08', 'Kids', 'Hambúrguer de 50g, uma fatias de queijo cheddar e pão de brioche', 14.99, 'https://files.menudino.com/cardapios/59084/9.jpg', 'Hambúrguer'),
    ('09', 'Coca-Cola', 'Lata 350mL', 6.00, 'https://files.menudino.com/cardapios/59084/11.jpg', 'Bebida'),
    ('10', 'Guaraná Antarctica', 'Lata 269mL', 6.00, 'https://files.menudino.com/cardapios/59084/12.jpg', 'Bebida'),
    ('11', 'Suco DellVale', 'Lata 290mL', 7.00, 'https://files.menudino.com/cardapios/59084/13.jpg', 'Bebida'),
    ('12', 'Bebida da Casa', '300ml', 5.00, 'https://files.menudino.com/cardapios/59084/14.jpg', 'Bebida');
    
    SELECT *  FROM tbl_produtos;