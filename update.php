<?php
    $servername= "localhost:3307";
    $username = "root";
    $password = "";
    $dbname= "mhs";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    } 
    
    if (isset($_GET['npm'])) {
        $npm = $_GET['npm'];
        $sql = "SELECT * FROM identitas WHERE npm = '$npm'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nama = $row['nama'];
            $alamat = $row['alamat'];
            $tanggal_lahir = $row['tgl_lhr'];
            $jenis_kelamin = $row['jk'];
            $email = $row['email'];
        }
    }

    // update
    if (isset($_POST['update'])) {
        $npm = $_POST["npm"];
        $nama = strtoupper($_POST["nama"]);
        $alamat = strtoupper($_POST["alamat"]);
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $email = $_POST["email"];
        
        $sql = "UPDATE identitas 
                SET nama='$nama', alamat='$alamat', tgl_lhr='$tanggal_lahir', jk='$jenis_kelamin', email='$email' 
                WHERE npm='$npm'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Data berhasil diupdate!');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>

<style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 300px;
        }

        .form {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="number"],
        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
            transition: border 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="date"]:focus,
        input[type="number"]:focus,
        select:focus {
            border: 1px solid #007BFF;
            outline: none;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .radio-label {
            margin-bottom: 10px;
        }

        .select-container {
            margin-bottom: 15px;
        }
</style>

<div class="container">
    <div class="box">
        <form action="" method="POST">
            <div class="form">
                <label for="npm">NPM : </label>
                <input type="text" name="npm" id="npm" value="<?= htmlspecialchars($row['npm'] ?? '') ?>" readonly>
                    
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat" required>
            
                <label for="tanggal-lahir">Tanggal Lahir : </label>
                <input type="date" id="tanggal-lahir" name="tanggal_lahir" required>
            
                <label for="jenis-kelamin">Jenis Kelamin : </label>
                <div class="radio-label">
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" checked>Laki-laki<br>
                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>
                </div>
            
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>

                <button type="submit" name="update" value="Tambah Data">Submit</button>
            </div>
        </form>

        <a href="index.php"><button>Kembali</button></a>
        
    </div>
</div>