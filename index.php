
<?php
require_once 'studentmanager.php';

$manager = new StudentManager();

// Adding students
$manager->addStudent(new student(1, "Alice", 20));
$manager->addStudent(new student(2, "Bob", 22));
$manager->addStudent(new student(3, "Charlie", 23));

//updating a student
$manager->updateStudent(2, "Bobby", 23);


// Deleting a student
$manager->deleteStudent(1);


// Displaying all students

echo "<h2>Student List:</h2>";

foreach ($manager->getAllStudents() as $student) {
    echo "ID: " .$student->getID() . "<br>";

    echo "Name: " . $student->getName() . "<br>";
    echo "Age: " . $student->getAge() . "<br><br>";

    echo "<hr>";
}



?>
