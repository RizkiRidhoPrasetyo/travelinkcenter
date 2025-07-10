<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Travelink Center Member Card</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .card {
            border: 2px solid #2D2766;
            border-radius: 12px;
            width: 340px; /* Kartu member standar: 85.6mm x 53.98mm, skala px: 340x215 */
            height: 215px;
            padding: 18px 20px 18px 20px;
            margin: 0 auto;
            background: #f8fafc;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .header {
            text-align: center;
            color: #2D2766;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 8px;
        }
        .logo {
            width: 70px;
            margin: 0 auto 10px auto;
            display: block;
        }
        .info {
            font-size: 13px;
            margin-bottom: 4px;
        }
        .label {
            font-weight: bold;
            color: #2D2766;
        }
        .footer {
            margin-top: 8px;
            text-align: center;
            font-size: 10px;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="{{ public_path('assets/images/TravelinkCenter.png') }}" class="logo" alt="Travelink Center Logo">
        <div class="header">Member Card</div>
        <div class="info"><span class="label">Name:</span> {{ $name }}</div>
        <div class="info"><span class="label">Email:</span> {{ $email }}</div>
        <div class="info"><span class="label">Phone:</span> {{ $phone }}</div>
        <div class="info"><span class="label">Region:</span> {{ $region }}</div>
        <div class="info"><span class="label">Member Since:</span> {{ $member_since }}</div>
        <div class="info"><span class="label">Member ID:</span> {{ $id }}</div>
        <div class="footer">Travelink Center &copy; {{ date('Y') }}</div>
    </div>
</body>
</html>
