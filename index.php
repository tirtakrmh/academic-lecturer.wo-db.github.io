<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik Kampus</title>
    <style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    margin: 0;
}

div {
    text-align: center;
}

h1 {
    color: #000;
}

a {
    text-decoration: none;
    color: #000;
    display: inline-block;
    padding: 10px;
    margin: 5px;
    border: 2px solid #007BFF;
    border-radius: 8px;
    transition: background-color 0.3s, color 0.3s;
}

a:hover {
    color: #fff;
    background-color: #007BFF;
}

/* Add this CSS in the style tag of your dosen.php, kartumengajar.php, and matkul.php files */

body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    margin: 0;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

input[type="text"] {
    padding: 10px;
    width: 300px;
    margin: 5px;
    border: 1px solid #007BFF;
    border-radius: 5px;
}

input[type="submit"], input[type="button"] {
    padding: 10px;
    width: 150px;
    margin: 10px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

input[type="button"] {
    background-color: #f44336;
    color: white;
}

input[type="button"]:hover {
    background-color: #d32f2f;
}

table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #007BFF;
    color: black;
}

td {
    background-color: #f2f2f2;
}

/* Add this at the end of your existing CSS in the index.php file */

@media only screen and (max-width: 600px) {
    input[type="text"], input[type="submit"], input[type="button"] {
        width: 80%;
    }
}
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div>
        <center>
            <h1>SISTEM INFORMASI</h1>
            <h1>AKADEMIK KAMPUS</h1><br>
            <a href="dosen.php">Dosen</a>
            <a href="matkul.php">Mata Kuliah</a>
            <a href="kartumengajar.php">Kartu Mengajar</a>
        </center>
    </div>
</body>
</html>