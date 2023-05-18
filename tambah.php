<html>

<head>
    <title>Tambah Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <style>
        input {
            margin-right: 1%;
        }

        input.error {
            border: 1px solid red;
            font-weight: 300;
            color: red;
        }

        .lebar {
            width: 14%;
        }
    </style>
</head>

<body>
    <form action="proses_tambah.php" method="post" id="form">
        <table style="width:70%">
            <tr>
                <td class="lebar">First Name</td>
                <td><input type="text" id="nama_depan" name="nama_depan"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" id="nama_belakang" name="nama_belakang"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" id="surel" name="surel"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" id="no_telp" name="no_telp"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" id="alamat" name="alamat"></td>
            </tr>
            <tr>
                <td colspan=2><input type="submit" name="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
    <script>
        $(document).ready(function() {
            $("#form").validate({
                rules: {
                    nama_depan: {
                        required: true,
                    },
                    nama_belakang: {
                        required: true,
                    },
                    surel: {
                        required: true,
                    },
                    no_telp: {
                        required: true,
                    },
                    alamat: {
                        required: true,
                    }

                },
                messages: {
                    nama_depan: "First name is required",
                    nama_belakang: "Last name is required",
                    surel: "Email is required",
                    no_telp: "Phone is required",
                    alamat: "Address is required"
                }
            });
        });
    </script>
</body>

</html>