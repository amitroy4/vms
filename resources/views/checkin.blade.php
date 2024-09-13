<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Checkin Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 600px;
        }
        .form-group div {
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 10px;
            display: flex;
            align-items: center;
            background-color: #e9ecef;
        }
        .form-group div input,
        .form-group div select {
            border: none;
            outline: none;
            flex: 1;
        }
        .form-group div i {
            margin-right: 10px;
            color: #00796b;
        }
        .btn-custom {
            background-color: #00796b;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 16px;
        }
        .btn-custom:hover {
            background-color: #004d40;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2 class="text-center mb-4" style="color: #00796b;">Visitor Checkin</h2>
        <form action="{{route('visitor.store')}}" method="POST">

            @csrf
            <div class="form-group">
                <div>
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <i class="fas fa-phone"></i>
                    <input type="tel" class="form-control" name="contact_number" placeholder="Contact Number" required>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <i class="fas fa-id-card"></i>
                    <select class="form-control" name="identification" required>
                        <option value="">Identification Type</option>
                        <option value="nid">NID</option>
                        <option value="passport">Passport</option>
                        <option value="driving_license">Driving License</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <i class="fas fa-id-card-alt"></i>
                    <input type="text" class="form-control" name="identification_number" placeholder="Identification Number" required>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <i class="fas fa-pen"></i>
                    <input type="text" class="form-control" name="purpose_of_visit" placeholder="Purpose of Visit" required>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <i class="fas fa-user-tie"></i>
                    <input type="text" class="form-control" name="host_name" placeholder="Host Name" required>
                </div>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-custom">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
