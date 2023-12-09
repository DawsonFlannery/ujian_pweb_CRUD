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
            text-align: left;
            padding: 10px 0;
        }

        .profile-picture {
            width: 150; /* Adjust the size as needed */
            height: 150px; /* Adjust the size as needed */
            border-radius: 50%; /* Make it rounded */
            object-fit: cover;
            margin-bottom: 10px;
        }

        .profile-title {
            font-size: 1.5rem;
        }


    </style>
</head>
<body>

    <div class="container">
        <img class="profile-picture" src="{{ asset('images/dwcr.jpg') }}" alt="Profile Picture">
        <h1>Welcome to Pendaftaran UKM</h1>
        <p>Pendaftaran UKM Badminton untuk Kampus Gunadarma</p>

        <!-- Link/Button to Mahasiswa Page -->
        <a href="{{ route('mahasiswa.index') }}" class="btn">Go to Mahasiswa Page</a>
        <br/>

        <footer>
            <div class="countdown" id="countdown">

            </div>
            &copy; 2023 Still mager, ngantuk weh
        </footer>

        {{-- <script>
            // Get the current date and New Year's date
            const currentDate = new Date();
            const newYearDate = new Date(currentDate.getFullYear() + 1, 0, 1);
    
            // Calculate the time difference between now and New Year's
            const timeDifference = newYearDate - currentDate;
    
            // Function to update countdown
            function updateCountdown() {
                const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);
    
                document.getElementById('countdown').innerHTML = `Countdown: ${days}d ${hours}h ${minutes}m ${seconds}s`;
            }

            // Initial call to display countdown immediately
            updateCountdown();

            // Update countdown every second
            setInterval(updateCountdown, 1000);

        //     setTimeout(function() {
        //     window.location.reload();
        // }, 1000);
    
            
            
        </script> --}}
    
    </div>
    
</body>

</html>
