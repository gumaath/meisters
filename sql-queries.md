```sql
-- Write an SQL query to retrieve the first names and last names of all persons in a hypothetical "persons" table. Display the results.

SELECT FirstName, LastName FROM persons;

-- Write an SQL query to remove all records from the "persons" table for individuals who are minors (under 18 years old) based on their date of birth.

DELETE FROM persons
WHERE TIMESTAMPDIFF(YEAR, Birthdate, CURDATE()) < 18;

-- Suppose you have two tables: "persons" and "children," where "persons" contains information about adults, and "children" contains information about their children. 
-- Write an SQL query that retrieves the first and last names of adults from the "persons" table along with the names of their children from the "children" table. Use a JOIN operation to combine the two tables.

SELECT 
    p.FirstName AS 'Parent First Name',
    p.LastName AS 'Parent Last Name',
    c.FirstName AS 'Child First Name',
    c.LastName AS 'Child First Name',
FROM
    persons p
JOIN 
    children c ON p.PersonId = c.ParentId;

```
