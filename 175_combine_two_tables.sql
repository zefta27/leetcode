select FirstName, Lastname, City , State from Person LEFT JOIN Address ON Person.PersonId = Address.PersonId;