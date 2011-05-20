<?php
$conn = $app['doctrine.dbal.connection'];

$sql = "SELECT s.student_id, p.name, s.gender, p.birth_date FROM students as s
        LEFT JOIN persons as p ON s.person_id = p.id
        WHERE s.student_id = :studentID
        LIMIT 1;";

$stmt = $conn->prepare($sql);
$stmt->bindValue("studentID", $studentId);
$stmt->execute();
$student = $stmt->fetch();