<?php
// dashboard.php
session_start();
// Vérification simple de session
if (!isset($_SESSION['user'])) {
    header("Location: auth/login.php");
    exit;
}
session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Dashboard | blog</title>
    <link rel="icon" href="assets/favicon.ico">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 220px;
            background: #007BFF;
            color: #fff;
            padding: 1rem;
        }

        .sidebar h3 {
            margin-bottom: 1rem;
        }

        .sidebar a {
            display: block;
            color: #fff;
            text-decoration: none;
            margin: 0.5rem 0;
            padding: 0.4rem;
            border-radius: 4px;
        }

        .sidebar a:hover {
            background: #0056b3;
        }

        .main-content {
            flex: 1;
            background: #f4f4f4;
            padding: 2rem;
        }

        .card {
            background: #fff;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
        }

        header {
            background: #fff;
            padding: 1rem;
            border-bottom: 1px solid #ddd;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Menu</h3>
            <a href="#">🏠 Blog</a>
            <a href="#">✍️ New article</a>
            <a href="#">👤 Profile</a>
            <a href="auth/logout.php">🚪 Logout</a>
        </div>
        <!-- Main Content -->
        <div class="main-content">
            <header>
                <h2>Welcome, <?= htmlspecialchars($_SESSION['user']) ?></h2>
            </header>
            <div class="card">
                <h3>Fast stats</h3>
                <p>Articles published: 5</p>
                <p>Comments: 12</p>
            </div>
            <div class="card">
                <h3>Latest activities</h3>
                <ul>
                    <li>New article added yesterday</li>
                    <li>Comment received the day before yesterday</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>