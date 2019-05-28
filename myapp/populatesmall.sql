INSERT INTO spreadsheet VALUES ('2019-05-20', 698.00, 20.00, 30.00, 50.00);

INSERT INTO category VALUES ('Food', 'Living Expenses','Essential Meals', 0.00, '2019-05-20');
INSERT INTO category VALUES ('Hygiene', 'Living Expenses','Haircuts, Products', 8.00, '2019-05-20');
INSERT INTO category VALUES ('Housekeeping', 'Living Expenses', 'Papertowels, Soap, Etc.', 0.00, '2019-05-20');
INSERT INTO category VALUES ('Gas', 'Living Expenses', 'Gas', 20.00, '2019-05-20');
INSERT INTO category VALUES ('Investment','Savings', 'Savings plans', 5.00, '2019-05-20');
INSERT INTO category VALUES ('Dining Out', 'Discretionary','Restaurants and bars, evenings out, etc.', 0.00, '2019-05-20');
INSERT INTO category VALUES ('Fun Bean', 'Discretionary', 'Bean', 0.00, '2019-05-20');

INSERT INTO purchase VALUES ('Vons Grocery Run', 50.90, '2019-05-20');
INSERT INTO purchase VALUES ('Vons Grocery Run', 70.20, '2019-05-18');
INSERT INTO purchase VALUES ('Papertowels', 10.00, '2019-05-20');
INSERT INTO purchase VALUES ('Gas', 40.00, '2019-05-20');
INSERT INTO purchase VALUES ('Saving', 200.00, '2019-05-20');
INSERT INTO purchase VALUES ('Sushi', 25.00, '2019-05-20');
INSERT INTO purchase VALUES ('IPA Bean', 13.00, '2019-05-20');


INSERT INTO made_of VALUES ('Vons Grocery Run', '2019-05-20', 'Food', '2019-05-20');
INSERT INTO made_of VALUES ('Vons Grocery Run', '2019-05-20', 'Food', '2019-05-18');
INSERT INTO made_of VALUES ('Papertowels', '2019-05-20', 'Housekeeping', '2019-05-18');
INSERT INTO made_of VALUES ('Gas', '2019-05-20', 'Gas', '2019-05-18');
INSERT INTO made_of VALUES ('Saving', '2019-05-20', 'Savings', '2019-05-18');
INSERT INTO made_of VALUES ('Sushi', '2019-05-20', 'Dining Out', '2019-05-18');
INSERT INTO made_of VALUES ('IPA Bean', '2019-05-20', 'Fun Bean', '2019-05-18');
