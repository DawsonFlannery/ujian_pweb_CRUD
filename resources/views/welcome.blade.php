<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Mahasiswa Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/dw.jpg') }}');
            background-size: cover;
            background-position: center;
        }
        .container {
            text-align: center;
            color: #fff;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }
        .btn {
            display: inline-block;
            padding: 15px 30px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #2980b9;
        }

        footer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #0000007c;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        


    </style>
</head>
<body>

    <div class="container">
   
        <h1>Welcome to Pendaftaran UKM</h1>
        <p>Pendaftaran UKM Badminton untuk Kampus Gunadarma</p>

        <!-- Link/Button to Mahasiswa Page -->
        <a href="{{ route('mahasiswa.index') }}" class="btn">Go to Mahasiswa Page</a>
        <br/>

        <footer>
            <div class="countdown" id="countdown">

            </div>
            &copy; 2023 PWEB_DawsonFS
        </footer>

            
    </div>
    
</body>

</html>
