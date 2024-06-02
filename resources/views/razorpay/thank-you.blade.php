<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            text-align: center;
        }

        .tick-svg {
            width: 100px;
            height: 100px;
            animation: scaleCheckmark 0.5s ease-in-out;
        }

        @keyframes scaleCheckmark {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-white">Thank You for Your Donation!</h2>
        <p class="text-white">Your contribution is greatly appreciated.</p>
        <p class="text-white">Your generosity will make a difference in someone's life.</p>
        <!-- Animated green tick SVG -->
        <svg class="tick-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#fff">
            <path
                d="M436 121c-22-21-57-21-79 0L193 328l-79-79c-22-22-57-22-79 0s-22 57 0 79l112 112c11 11 26 17 39 17s28-6 39-17l256-256c22-22 22-57 0-79zM221.5 422.9c-4.7 4.7-12.3 4.7-17 0l-138-138c-4.7-4.7-4.7-12.3 0-17s12.3-4.7 17 0l121 121 263-263c4.7-4.7 12.3-4.7 17 0s4.7 12.3 0 17L221.5 422.9z" />
        </svg>
        <p class="text-white" id="timer">Redirecting in 3 seconds...</p>
        <div class="pt-3 col-12">
            <a href="/" class="btn btn-outline-light"><i class="fas fa-arrow-left"></i> Back to Home</a>
        </div>
    </div>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
        let count = 3;
        const countdown = setInterval(() => {
            count--;
            document.getElementById('timer').innerText =
                `Redirecting in ${count} second${count !== 1 ? 's' : ''}...`;
            if (count === 0) {
                clearInterval(countdown);
                window.location.href = '/';
            }
        }, 1000);
    </script>
</body>

</html>
