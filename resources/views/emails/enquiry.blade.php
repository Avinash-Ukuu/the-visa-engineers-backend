<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiry Mail</title>
</head>

<body>
    <h2>New Enquiry Received</h2>

    <p><strong>Name:</strong> {{ $enquiry->full_name }}</p>
    <p><strong>Email:</strong> {{ $enquiry->email }}</p>
    <p><strong>Phone:</strong> {{ $enquiry->phone }}</p>
    <p><strong>Visa Type:</strong> {{ $enquiry->visa_type }}</p>
    <p><strong>Country:</strong> {{ $enquiry->country }}</p>
    <p><strong>Message:</strong> {{ $enquiry->message }}</p>
</body>

</html>
