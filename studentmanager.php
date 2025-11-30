<?php
require_once 'student.php';

class StudentManager {

    private $students = [];

    // Create
    public function addStudent(Student $student) {
        $this->students[] = $student;
    }

    public function getAllStudents() {
        return $this->students;
    }

    public function updateStudent($id, $name, $age) {
        foreach ($this->students as $student) {
            if ($student->getId() === $id) {
                $student->setName($name);
                $student->setAge($age);
                return true;
            }
        }
        return false;
    }

    public function deleteStudent($id) {
        foreach ($this->students as $index => $student) {
            if ($student->getId() === $id) {
                unset($this->students[$index]);
                $this->students = array_values($this->students); // Reindex array
                return true;
            }
        }
        return false;
    }

}

?>
