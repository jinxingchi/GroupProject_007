CREATE TABLE IF NOT EXISTS products (
  id_product int(11) NOT NULL AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  description varchar(250) NOT NULL,
  price decimal(6,2) NOT NULL,
  imageURL varchar(250),
  PRIMARY KEY (id_product)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7;

INSERT INTO products (id_product, name, description, price, imageURL) VALUES
(1, '007: Skyfall', '2012', '49.99', 'skyfall.jpg'),
(2, '007: Spectre', 'the newest one', '59.99', 'spectre.jpg'),
(3, '007: Skyfall', '2012', '49.99', 'skyfall.jpg'),
(4, '007: Spectre', 'the newest one', '59.99', 'spectre.jpg'),
(5, '007: Skyfall', '2012', '49.99', 'skyfall.jpg'),
(6, '007: Spectre', 'the newest one', '59.99', 'spectre.jpg');