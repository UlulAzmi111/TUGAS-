<?php 

    require_once "../koneksi.php";

    $sql = "SELECT * FROM tblorder";

    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $data = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    echo json_encode($data);

?>