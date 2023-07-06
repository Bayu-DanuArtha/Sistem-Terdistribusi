<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://universitasmulia.ac.id/wp-content/uploads/2021/05/ilustrasi-informatics-1030x579.jpg');
            background-size: cover;
            background-position: center;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        .container {
            width: 400px;
            background: linear-gradient(45deg, #00b4db, #0083b0);
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .table-wrapper {
            padding: 20px;
            color: #fff;
            
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 100%;
        }

        th {
            background-color: transparent;
            color: #fff;
            padding: 12px;
            font-weight: bold;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        td:first-child {
            font-weight: bold;
            color: #fff;
        }

        h2 {
            margin: 0;
            padding: 20px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Identity</h2>
        <div class="table-wrapper">
            <table>
                <?php
                // Informasi identitas satu orang
                $nama = "I Kadek Bayu Danu Artha";
                $nim = "2115101025";
                $kelas = "4IKI";
                $program_studi = "Ilmu Komputer";
                ?>

                <tr>
                    <th>Name</th>
                    <td><?php echo $nama; ?></td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td><?php echo $nim; ?></td>
                </tr>
                <tr>
                    <th>Class</th>
                    <td><?php echo $kelas; ?></td>
                </tr>
                <tr>
                    <th>Study Program</th>
                    <td><?php echo $program_studi; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
