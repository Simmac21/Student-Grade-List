# Student-Grade-List

This is a single-page web app that allows the user to view and edit a student's grade list using Ajax.

Tables in the Database:

    Created a database table for the student list with 3 columns: id (int primary key), fullName (varchar length 60), and grade (int, default 0).
    
The PHP Files

This web app contains four PHP files:

Student Record:

    This file contains a definition for a class that will hold a single student record.
    
Connect:

    This file establishes a connection to the database.
    
Get List:

    This file gets the entire table from the database, sorted alphabetically, creates an array of student objects, and outputs a JSON encoding of this array.
    
Add Student:

    This file receives POST parameters for a new student and inserts it into the database.
    
The JavaScript File:

With an Ajax request, the app retrieves and displays the list of students when it initially loads.
When a user adds a new student to the list (by clicking the button or pressing enter in one of the fields), an Ajax request is sent to add the new student.
When it gets the response from this first request, it launches another Ajax request to retrieve the entire list and display it again on the page.


    
