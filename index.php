
<?php
require_once 'studentmanager.php';

$manager = new StudentManager();

// Adding students
$manager->addStudent(new student(1, "shuvo", 25));
$manager->addStudent(new student(2, "Ashnur", 22));
$manager->addStudent(new student(3, "Tonmoy", 23));

//updating a student
$manager->updateStudent(2, "SHU", 23);


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
