DROP DATABASE supplement_shop;
CREATE DATABASE IF NOT EXISTS supplement_shop;
USE supplement_shop;

-- CREATE TABLE user(
--   user_email VARCHAR (255) NOT NULL,
--   full_name VARCHAR (255),
--   billing_address VARCHAR (255),
--   shipping_address VARCHAR (255),
--   zip_code INT ,
--   country VARCHAR (255),
--   city VARCHAR (255),
--   user_password VARCHAR (255) NOT NULL,
--   permission_type VARCHAR (255) NOT NULL,
--   CONSTRAINT PRIMARY KEY (user_email)
-- )ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE user(
  user_email VARCHAR (255) NOT NULL,
  full_name VARCHAR (255),
  address VARCHAR (255),
  zip_code INT ,
  city VARCHAR (255),
  user_password VARCHAR (255) NOT NULL,
  permission_type VARCHAR (255) NOT NULL,
  CONSTRAINT PRIMARY KEY (user_email)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- INSERT INTO user VALUES ('admin@mail.com','Jamith Nimantha','No 150,Kanamptiya Road',null ,80000,'Sri Lanka','Galle','123456','admin');
INSERT INTO user VALUES ('admin@mail.com','Jamith Nimantha','No 150,Kanamptiya Road',80000,'Galle','123456','admin');

CREATE TABLE product(
  product_id VARCHAR (255) NOT NULL,
  product_name VARCHAR (255),
  product_description VARCHAR (255),
  product_qty INT ,
  product_price DECIMAL,
  product_image_path VARCHAR (255),
  CONSTRAINT PRIMARY KEY (product_id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;