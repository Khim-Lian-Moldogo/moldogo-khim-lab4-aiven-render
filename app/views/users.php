<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            width: 85%;
            max-width: 900px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #0066e6;
            color: white;
            padding: 10px;
            text-align: left;
            font-size: 13px;
        }

        td {
            padding: 9px;
            border: 1px solid #ddd;
            font-size: 13px;
        }

        tr:nth-child(even) {
            background-color: #f8f8f8;
        }

        tr:hover {
            background-color: #eef5ff;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>User Management</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($users as $user): ?>
    <tr>
        <td><?= htmlspecialchars($user['id']); ?></td>
        <td><?= htmlspecialchars($user['firstname']); ?></td>
        <td><?= htmlspecialchars($user['lastname']); ?></td>
        <td><?= htmlspecialchars($user['email']); ?></td>
        <td><?= htmlspecialchars($user['username']); ?></td>
    </tr>
<?php endforeach; ?>

            </tbody>
        </table>

    </div>

</body>
</html>