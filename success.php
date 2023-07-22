<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Success!</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .success-page {
      text-align: center;
      padding: 30px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .success-page h1 {
      font-size: 28px;
      color: #007BFF; /* Blue color for the success message */
      margin-bottom: 10px;
    }

    .success-page p {
      font-size: 18px;
      color: #333;
      margin-bottom: 20px;
    }

    /* Styling for the "Back to Home" button */
    .back-home-btn {
      display: inline-block;
      background-color: #007BFF; /* Blue color for the button */
      color: #fff; /* Text color for the button */
      padding: 12px 24px;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .back-home-btn:hover {
      background-color: #0056b3; /* Darker blue color on hover */
    }

    .back-home-btn:focus {
      outline: none; /* Remove focus outline */
    }

    .back-home-btn:active {
      background-color: #004080; /* Darker color on click */
    }
  </style>
</head>
<body>
  <div class="success-page">
    <h1>Book inserted successfully!</h1>
    <p>Thank you for adding the book.</p>
    <a class="back-home-btn" href="index.php">Back to Home</a>
  </div>
</body>
</html>
