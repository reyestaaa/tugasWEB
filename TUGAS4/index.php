<html lang="en">
<head>
    <title>TUGAS 5</title>
    <style>

        h1 {
            text-align: center;  
        }

        h2 {
            text-align: center;
        }

        p {
            padding-top: 50px;
        }

        p span {
            font-weight: bold;
        }
        
        li {
            padding-top: 2em;
            font-weight: 700;
        }

        label {
            font-weight: bold;
        }

        input[type=text]{
                width: 40%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
        }

        textarea {
                width: 50%;
                height: 150px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                resize: none;
        }

        input[type=button], input[type=submit], input[type=reset] {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 16px 32px;
                text-decoration: none;
                margin: 7px 100px;
                cursor: pointer;
                float: left;

                
            }

    </style>
</head>
<body>
    <h1>Formulir Pendaftaran <br> Training Of Trainer & Rekrutmen Relawan</h1>
    <hr>
    <h2>Yayasan Taman Semesta</h2>
    <p> <span>ASSALAMUALAIKUM</span> <br><br>
        Semoga menjumpa dalam kendaan sehat. Kami mengucapkan terima kasih atas <br>
        keterturikan teman-teman mengikuti Tot dan Rekrutmen relawan ini. Agar <br>
        memudahkan kami dalen mengenal calon peserta, silahkan mengist formula di <br>
        bawah ini
        </p>
    
    <form action="" method="POST">
        <br>
        <label>1. IDENTITAS</label>
        <ul>
            <li>Nama: <br> <input type="text"></li>

            <li>Alamat:</li>
            <input type="text">
            <li>Tempat/Tanggal Lahir:</li>
            <input type="text">
            <li>Asal Perguruan Tinggi:</li>
            <input type="text">
            <li>Jurusan: </li>
            <input type="text">
            <li>Hp: </li>
            <input type="text">
        </ul>
        <label>2. Motivasi</label>
        <ul>
            <li>PENDAPAT DAN IMPIANMU TENTANG PENDIDIKAN INDONESIA : <br>
                <textarea name="" id="" cols="30" rows="10" placeholder="Silahkan Isi"></textarea></li>
            <li>Alasan Bergabung di yayasan :  <br>
                <textarea name="" id="" cols="30" rows="10" placeholder="Silahkan Isi"></textarea></li>
            <li>Harapan Setelah Diterima : <br>
                <textarea name="" id="" cols="30" rows="10" placeholder="Silahkan Isi"></textarea></li>
        </ul>

        <input type="submit" name="proses" value="Proses" />
        <input type="reset" value="Reset">
        


    </form>
</body>
</html>