<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="gate.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .img {
            height:48px;
            width:200px;
        }
        .header {
            text-align: center;
            padding: 10px 0;
            border-bottom: 1px solidrgb(8, 11, 218);
        }
        .content {
            padding: 20px;
            padding-left: 60px;
            padding-right: 60px;
            font-size: 12px;
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            border-top: 1px solidrgb(8, 11, 218);
            font-size: 12px;
            color: #888888;
        }
        @media only screen and (max-width: 600px) {
            body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            }
            .container {
                width: 100%;
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .img {
                height:38px;
                width:150px;
            }
            .header {
                text-align: center;
                padding: 10px 0;
                border-bottom: 1px solidrgb(8, 11, 218);
            }
            .content {
                padding: 20px;
                padding-left: 60px;
                padding-right: 60px;
                font-size: 12px;
            }
            .footer {
                text-align: center;
                padding: 10px 0;
                border-top: 1px solidrgb(8, 11, 218);
                font-size: 12px;
                color: #888888;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
        <img src="https://gateglobal.io/gate_logo_bl.png" alt="Gate.io" class="img" />
            <h4>{{ $subject }}</h4>
        </div>
        <div class="content">
            <p>{!! nl2br(e($emailMessage)) !!}</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} gate.io. All rights reserved.</p>
        </div>
    </div>
</body>
</html>