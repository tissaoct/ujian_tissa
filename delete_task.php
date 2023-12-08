<?php
if (isset($_GET['id'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'tissa_ujian');

    if ($conn) {
        $taskId = $_GET['id'];

        $query = "DELETE FROM tasks WHERE id = $taskId";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: index.php");
        } else {
            echo "Gagal menghapus tugas: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "Koneksi ke database gagal.";
    }
}
?>
