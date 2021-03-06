-- Insert preliminary test data into database tables

--------------------------------------------------------------------
-- T A B L E S   W I T H   O N L Y   P R I M A R Y   K E Y S   ( 9 )
--------------------------------------------------------------------

INSERT INTO
    tblCustomerType
VALUES
    (11, 'B2C'),    -- Consumer customers
    (21, 'B2B');    -- Business customers

INSERT INTO
    tblEmploymentLevel
VALUES
    (10, 'Worker'),
    (20, 'Supervisor/Lead'),
    (30, 'Upper Management'),
    (40, 'Senior Management'),
    (50, 'Executive Management');

INSERT INTO
    tblEmploymentType
VALUES
    (55, 'Fixed term, part-time'),
    (59, 'Fixed term, full-time'),
    (95, 'Permanent, part-time'),
    (99, 'Permanent, full-time');

INSERT INTO
    tblDepartment
VALUES
    (30, 'Purchasing'),
    (40, 'Warehousing & Shipping'),
    (50, 'Sales & Marketing'),
    (60, 'Finance & Accounting'),
    (70, 'Human Resources');

INSERT INTO tblForwarder VALUES ();

INSERT INTO tblProductCategory VALUES ();

INSERT INTO
    tblSalaryType
VALUES
    (3, 'Hourly'),
    (5, 'Weekly'),
    (7, 'Monthly'),
    (9, 'Annual');

INSERT INTO tblSupplier VALUES ();

INSERT INTO tblUser VALUES ();

--------------------------------------------------------------------
-- T A B L E S   W I T H   F O R E I G N   K E Y S   ( 1 4 )
--------------------------------------------------------------------

INSERT INTO tblCustomer();

INSERT INTO tblEmployee();

INSERT INTO tblEmployment();

INSERT INTO tblPass();

INSERT INTO tblProduct();

INSERT INTO tblPurchaseOrder();

INSERT INTO tblPurchaseInvoice();

INSERT INTO tblPurchaseOrdersProducts();

INSERT INTO tblSaleOrder();

INSERT INTO tblSaleInvoice();

INSERT INTO tblSaleInvoiceNotice();

INSERT INTO tblSaleOrdersProducts();

INSERT INTO tblShipment();

INSERT INTO tblWorkOrder();
