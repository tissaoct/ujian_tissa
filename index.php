<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Tugas</title>
</head>
<body>
    <h1>Manajemen Tugas</h1>
    
    <form action="add_task.php" method="post">
        <input type="text" name="task_name" placeholder="Nama Tugas" required>
        <textarea name="task_description" placeholder="Deskripsi Tugas"></textarea>
        <button type="submit">Tambah Tugas</button>
    </form>

    <h2>Daftar Tugas</h2>
    <ul>
        <?php
        // Tampilkan daftar tugas dari database
        $conn = mysqli_connect('localhost', 'root', '', 'tissa_ujian');

        if ($conn) {
            $query = "SELECT * FROM tasks";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>";
                    echo "<strong>" . $row['task_name'] . "</strong>: " . $row['task_description'];
                    echo " <a href='update_task.php?id=" . $row['id'] . "'>Update</a>";
                    echo " <a href='delete_task.php?id=" . $row['id'] . "'>Hapus</a>";
                    echo "</li>";
                }
            } else {
                echo "<li>Tidak ada tugas.</li>";
            }

            mysqli_close($conn);
        } else {
            echo "Koneksi ke database gagal.";
        }
        ?>
    </ul>
</body>
</html>
