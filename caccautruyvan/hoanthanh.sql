
-- câu 1.
-- SELECT customerName
-- FROM `classicmodels`.`customers`;
-- câu2-- 
-- SELECT contactLastName,contactFirstName,state
-- FROM `classicmodels-- `.`customers`;
-- câu3-- 
-- select*from classicmodels.customers;
-- câu4-- 
-- SELECT lastName,firstName FROM classicmodels.employees order by lastName DESC  ;
-- câu5
--  SELECT lastName,firstName FROM classicmodels.employees order by lastName DESC , firstName ASC;
-- câu6
-- SELECT productCode,orderLineNumber,priceEach from classicmodels.orderdetails order by priceEach DESC;
-- Câu7
-- SELECT orderNumber,status FROM classicmodels.orders order by field(status,'In Process','On Hold','Cancelled','Resolved','Disputed','Shipped') ;
-- cau 8
-- SELECT firstName,lastName,jobTitle from classicmodels.employees where jobTitle ='Sales Rep';
-- cau9
-- SELECT firstName,lastName,jobTitle,officeCode FROM classicmodels.employees where jobTitle ='Sales Rep' AND  officeCode=1;
-- cau10
-- SELECT firstName,lastName,jobTitle,officeCode FROM classicmodels.employees where jobTitle ='Sales Rep'OR officeCode=1 ORDER BY officeCode ASC,jobTitle ASC
-- cau11
-- SELECT firstName,lastName,jobTitle,officeCode FROM classicmodels.employees where officeCode between 1 and 3;
-- cau12
--  SELECT lastName,firstName  FROM classicmodels.employees where lastName like '%son';
-- cau13
-- SELECT firstName,lastName,reportsTo  FROM classicmodels.employees where reportsTo is NULL;
-- câu14
-- SELECT firstName,lastName,jobTitle  FROM classicmodels.employees where jobTitle not like 'Sales Rep';
-- cau15
-- SELECT firstName,lastName,officeCode  FROM classicmodels.employees where officeCode >=5;
-- cau16
-- SELECT DISTINCT contactFirstName FROM classicmodels.customers;
-- cau17
-- SELECT DISTINCT state, country FROM classicmodels.customers WHERE state IS NOT NULL;
-- cau18
-- SELECT COUNT(state) AS country FROM classicmodels.customers WHERE country = 'USA';
-- cau19
-- SELECT state FROM classicmodels.customers  WHERE state IS NOT NULL LIMIT 5 ;
-- cau20
-- SELECT customerName,country,state FROM classicmodels.customers where country ='USA' and state ='CA';
-- câu21
-- SELECT customerName,country,state,creditLimit FROM classicmodels.customers where country ='USA' and state='CA' and creditLimit >100000;
-- câu22
-- SELECT customerName,country FROM classicmodels.customers where country ='USA' OR country= 'France';
-- cau23
-- SELECT customerName,country,state,creditLimit FROM classicmodels.customers where country ='USA' OR country= 'France' OR creditlimit > 100000;
-- cau24
-- SELECT productName, productCode, buyPrice FROM  classicmodels.products WHERE buyPrice >= 90 AND buyPrice <=100;   
-- SELECT productName, productCode, buyPrice FROM  classicmodels.products WHERE buyPrice  BETWEEN 90 AND 100;
-- cau25
-- SELECT productName , buyPrice, productCode FROM classicmodels.products WHERE buyPrice < 20 OR buyPrice > 100;
-- cau26
-- SELECT orderNumber,requiredDate, status FROM classicmodels.orders WHERE requiredDate  BETWEEN  '2003-01-01' AND '2003-01-31';
-- cau27
-- SELECT productCode,productName	 FROM classicmodels.products where productCode like '%_20%' ;
-- cau28
-- SELECT customerNumber,customerName,creditLimit, MAX(creditLimit)  FROM classicmodels.customers where creditLimit   	;
-- cau29
--  SELECT customerName,country,salesrepemployeenumber FROM classicmodels.customers where salesRepEmployeeNumber is NULL;
-- cau30
-- SELECT lastName,firstName FROM classicmodels.employees  ;
-- câu31
-- SELECT orderLineNumber,quantityOrdered FROM classicmodels.orderdetails where quantityOrdered ORDER BY  quantityOrdered DESC;
-- cau32
-- SELECT productCode, productName, productDescription FROM classicmodels.products;
-- cau33
-- SELECT orderNumber,status FROM classicmodels.orders;
-- cau34
-- SELECT orderdetails.productCode,orderdetails.orderLineNumber,orders.orderDate,orderdetails.quantityOrdered,orderdetails.priceEach,products.productName, orders.orderDate	 FROM classicmodels.orderdetails,classicmodels.orders,classicmodels.products WHERE 	products.productCode = orderdetails.productCode AND orders.orderNumber = orderdetails.orderNumber;
-- cau35
-- SELECT productCode,productName,MSRP FROM classicmodels.products where productCode ='S10_1678' ;
-- cau36
-- SELECT customers.customerNumber, customers.customerName, orders.orderNumber, orders.status FROM classicmodels.orders, classicmodels.customers;
-- cau37
-- SELECT customers.customerNumber, customers.customerName, orders.orderNumber, orders.status FROM classicmodels.orders, classicmodels.customers, classicmodels.payments WHERE orders.shippedDate IS NULL; 
-- cau38
-- SELECT employees.firstName, employees.lastName, customers.customerName, payments.checkNumber, payments.amount FROM classicmodels.payments, classicmodels.employees, classicmodels.customers WHERE customers.salesRepEmployeeNumber = employees.employeeNumber OR customers.salesRepEmployeeNumber IS NULL ORDER BY payments.checkNumber ASC, customers.customerName ASC;
-- cau39
-- SELECT concat(A.lastName, ' ', A.firstName) as ManagerName,  concat(B.lastName, ' ', B.firstName) AS EmployeeName FROM   classicmodels.employees A,  classicmodels.employees B WHERE A.employeeNumber = B.reportsTo ORDER BY ManagerName ASC;

