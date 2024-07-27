<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        iframe {
            width: 80%;
            height: 90%;
            border: none;
        }
    </style>
</head>
<body>
    <iframe src="{{asset('website/assets/pdf/terms_of_service.pdf')}}" title="PDF Viewer"></iframe>
</body>
</html>
