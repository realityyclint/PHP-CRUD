<?php
    include ("dbconn.php");

    function read($conn) {
        $sql = "SELECT * FROM students";
        $statement = $conn->prepare($sql);
        $statement->execute([]);

        if($statement->rowCount() > 0){
            $students = $statement->fetchAll();

        }
        return $students;

    }

     function update($conn, $id) {
        $sql = "SELECT * FROM students WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

        if($statement->rowCount() > 0){
            $student = $statement->fetch();

        }
        return $student;

    }
?>