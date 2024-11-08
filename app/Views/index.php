<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLTU ASAM-ASAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 1rem;
            text-align: center;
            position: relative;
        }

        .header .title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .header .subtitle {
            font-size: 0.8rem;
            color: #d1e7fd;
        }

        .content {
            padding: 1rem;
        }

        .measure-card {
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-bottom: 1rem;
        }

        .measure-card h5 {
            font-size: 1rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 0.5rem;
        }

        .measure-card p {
            font-size: 1.2rem;
            color: #007bff;
            margin: 0;
        }

        .bottom-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 2rem;
        }

        .bottom-icon img {
            width: 30px;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="title">PLTU ASAM-ASAM</div>
        <div class="subtitle">Kendali IoT</div>
    </div>

    <div class="content">

        <div class="measure-card">
            <h5>Overall RMS</h5>
            <p><?= $acceleration ?> m/s²</p>
            <small>ACCELERATION</small>
        </div>

        <div class="measure-card">
            <h5><?= $velocity ?></h5>
            <p>VELOCITY [mm/s]</p>
        </div>

        <div class="measure-card">
            <h5><?= $demodulation ?></h5>
            <p>DEMULATION [du_m/s²]</p>
        </div>

        <div class="measure-card">
            <h5><?= $custom_value ?></h5>
            <p>Custom Value</p>
        </div>

        <div class="bottom-icon">
            <img src="https://via.placeholder.com/30" alt="Icon">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>