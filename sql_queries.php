<?php
// SQL Queries

// PDO
$db = new PDO("mysql:host=localhost;dbname=world", 'my_user', 'my_password');

// Retrieve First name and Last Name
$stmt = $db->prepare('SELECT FirstName, LastName FROM persons');

$stmt->execute();

$getPersons = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Delete minors (under 18 years)
$stmt = $db->prepare('
    DELETE FROM persons
    WHERE TIMESTAMPDIFF(YEAR, Birthdate, CURDATE()) < 18;
    ');
$stmt->execute();

// Get children and parents
$stmt = $db->prepare(
    "SELECT 
    p.FirstName AS 'Parent First Name',
    p.LastName AS 'Parent Last Name',
    c.FirstName AS 'Child First Name',
    c.LastName AS 'Child First Name',
    FROM
        persons p
    JOIN 
        children c ON p.PersonId = c.ParentId;
    ");

$stmt->execute();

$getChildrenAndParents = $stmt->fetchAll(PDO::FETCH_ASSOC);
