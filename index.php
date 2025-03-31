<?php
include 'db.php';

// Fetch doctor details
$doctor_query = "SELECT * FROM doctors LIMIT 1";
$doctor_result = $conn->query($doctor_query);
$doctor = $doctor_result->fetch_assoc();

// Handle appointment booking
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $doctor_id = $doctor['id'];

    $insert_query = "INSERT INTO appointments (name, phone, date, doctor_id) 
                     VALUES ('$name', '$phone', '$date', '$doctor_id')";

    if ($conn->query($insert_query) === TRUE) {
        echo "<script>alert('Appointment booked successfully!');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor Appointment Booking</title>
</head>
<body>
    <h2>Doctor Details</h2>
    <p><strong>Name:</strong> <?php echo $doctor['name']; ?></p>
    <p><strong>Specialization:</strong> <?php echo $doctor['specialization']; ?></p>

    <h2>Book an Appointment</h2>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        
        <label>Phone:</label>
        <input type="text" name="phone" required><br><br>
        
        <label>Date:</label>
        <input type="date" name="date" required><br><br>

        <button type="submit">Book Appointment</button>
    </form>
</body>
</html>
