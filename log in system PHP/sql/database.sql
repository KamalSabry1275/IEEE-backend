CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  username TEXT NOT NULL UNIQUE,
  email TEXT NOT NULL,
  password TEXT NOT NULL
);

CREATE TABLE products (
  id SERIAL PRIMARY KEY,
  productname TEXT NOT NULL UNIQUE,
  price TEXT NOT NULL,
  username TEXT NOT NULL REFERENCES users(username)
);