<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = mysqli_connect('localhost', 'root', '', 'tissa_ujian');

    if ($conn) {
        $taskName = $_POST['task_name'];
        $taskDescription = $_POST['task_description'];

        $query = "INSERT INTO tasks (task_name, task_description) VALUES ('$taskName', '$taskDescription')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: index.php");
        } else {
            echo "Gagal menambahkan tugas: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "Koneksi ke database gagal.";
    }
}
?>
