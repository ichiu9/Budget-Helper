CREATE TABLE spreadsheet(
    id DATE,
    allowance DECIMAL(10,2),
    d_perc DECIMAL(5,2),
    s_perc DECIMAL(5,2),
    l_perc DECIMAL(5,2),
    PRIMARY KEY (id)
);

CREATE TABLE category(
    category_name VARCHAR(255),
    category_type VARCHAR(30),
    description VARCHAR(255),
    total_money Decimal(10,2),
    id DATE,
    PRIMARY KEY (category_name)
);

CREATE TABLE purchase(
    purchase_name VARCHAR(255),
    cost DECIMAL(10,2),
    date_purchased DATE
);

CREATE TABLE made_of(
    purchase_name VARCHAR(255),
    date_purchased DATE,
    category_name VARCHAR(255),
    id DATE
);


