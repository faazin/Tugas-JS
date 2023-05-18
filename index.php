<?php
include "koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM customer");
?>
<html>

<head>
    <title>Tugas</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/v/zf/dt-1.13.4/date-1.4.1/datatables.min.css" rel="stylesheet" />

    <script src="https://cdn.datatables.net/v/zf/dt-1.13.4/date-1.4.1/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
</head>

<body style="margin: 4%;">
    <form action="" method="post">
        <table id="myTable">
            <thead>
                <th>No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </thead>
            <?php if (mysqli_num_rows($query) > 0) {
                $no = 1;
                while ($data = mysqli_fetch_array($query)) {
            ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data["first_name"]; ?></td>
                        <td><?php echo $data["last_name"]; ?></td>
                        <td><?php echo $data["email"]; ?></td>
                        <td><?php echo $data["phone"]; ?></td>
                        <td><?php echo $data["address"]; ?></td>
                        <td>
                            <a href="#"> Delete </a> |
                            <a href="#"> Edit </a>
                        </td>
                    </tr>
            <?php
                    $no++;
                }
            }
            ?>
        </table>
    </form>
    <a href="tambah.php""> Tambah Data </a>
</body>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

</html>