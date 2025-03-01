

<?php
include 'connect.php';
$sql = "SELECT name, contact, email FROM userdetails WHERE id = 1"; // Change the WHERE clause as needed
$result = $conn->query($sql);

// Step 3: Check if there is data and fetch it
if ($result->num_rows > 0) {
    // Fetch the row
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $contact = $row['contact'];
    $email = $row['email'];
} else {
    //array_push($errors,"No user found");
    echo "No user found";
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Dashboard | Eldercare</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3ebff;
            color: #4a235a;
        }
        .dashboard-container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(74, 35, 90, 0.2);
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #7d3c98;
            padding: 10px 20px;
            color: white;
        }
        .navbar .nav-links {
            display: flex;
            gap: 15px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
        }
        .navbar a:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        .navbar .icons {
            display: flex;
            gap: 15px;
        }
        .navbar .icon {
            cursor: pointer;
            font-size: 18px;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px;
            border-radius: 5px;
        }
        
        /* Profile Header */
        .profile-header {
            display: flex;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 3px solid #e0c3fc;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #7d3c98;
        }
        .profile-info {
            flex: 1;
            margin-left: 20px;
            min-width: 200px;
        }
        .profile-name {
            font-size: 22px;
            font-weight: bold;
        }
        .contact-info {
            font-size: 14px;
            color: #6a1b9a;
            margin-top: 6px;
        }
        .edit-profile {
            background: #7d3c98;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            cursor: pointer;
            text-decoration: none;
            font-weight: 500;
        }

        /* Overview Cards */
        .overview {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }
        .card {
            background: #f9f1ff;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            flex: 1;
            margin: 5px;
            border: 1px solid #7d3c98;
            min-width: 120px;
        }
        .card h3 {
            font-size: 16px;
            margin: 5px 0;
        }
        .card p {
            font-size: 20px;
            font-weight: bold;
            color: #7d3c98;
        }

        /* Section Styling */
        .section {
            margin-top: 25px;
            padding: 15px;
            background: #f9f1ff;
            border-radius: 10px;
            border: 1px solid #7d3c98;
        }
        .list-item {
            background: white;
            padding: 12px;
            margin-bottom: 8px;
            border-radius: 8px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn {
            display: block;
            margin: 10px auto;
            padding: 10px 20px;
            border-radius: 10px;
            background-color: #a061ba;
            color: white;
            font-size: medium;
            border: none;
            cursor: pointer;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .dashboard-container {
                width: 90%;
                margin: 20px auto;
            }
            .profile-header {
                flex-direction: column;
                align-items: center;
            }
            .profile-info {
                text-align: center;
                margin-left: 0;
            }
            .overview {
                flex-direction: column;
            }
            .card {
                width: 100%;
            }
            
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Back</a>
        </div>
        <div class="icons">
            <span class="icon" onclick="searchFunction()">🔍</span>
            <span class="icon" onclick="notifyFunction()">🔔</span>
            <span class="icon" onclick="profileFunction()">👤</span>
        </div>
    </div>
    <div class="dashboard-container">
        <div class="profile-header">
            <img src="img.jpeg" alt="Profile Picture" class="profile-img">
            

<!-- Step 4: Display the data in HTML -->
<div class="profile-info">
    <div class="profile-name"><?php echo htmlspecialchars($name); ?></div>
    <div class="contact-info">📞 <?php echo htmlspecialchars($contact); ?> | ✉ <?php echo htmlspecialchars($email); ?></div>
</div>      
            <a href="#" class="edit-profile">Edit Profile</a>
        </div>

        <div class="overview">
            <div class="card"><h3>Request Received</h3><p>12</p></div>
            <div class="card"><h3>Services Completed</h3><p>30</p></div>
            <div class="card"><h3>Hours Contributed</h3><p>120</p></div>
            <div class="card"><h3>Reviews</h3><p>15</p></div>
        </div>

        <div class="section">
            <h3>Request Received</h3>
            <ul class="list">
                <li class="list-item"><span>Ram Gupta</span> <span class="accepted">Accepted</span></li>
                <li class="list-item"><span>Robert Kim</span> <span class="pending">Pending</span></li>
                <li class="list-item"><span>Manorama Jha</span> <span class="rejected">Rejected</span></li>
            </ul>
            <button class="btn">Show More</button>
        </div>

        <div class="section">
            <h3>Service History</h3>
            <ul class="list">
                <li class="list-item"><span>Helped Mr. Sharma with daily activities for 15 Days</span></li>
                <li class="list-item"><span>Assisted Mrs. Sharma in their daily activities for 20 Days</span></li>
                <li class="list-item"><span>Assisted Mr. Jha in daily activities for 20 Days</span></li>
                <li class="list-item"><span>Assisted Mrs. Gupta in her medical condition for 1 month</span></li>
            </ul>
            <button class="btn">Show More</button>
        </div>
    </div>
</body>
</html>
?>