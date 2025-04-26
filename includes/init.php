<?php
    $con = include 'database.php';

    function create_users_table() {
        global $con; // Make $con accessible
        $create_usr_qry = "CREATE TABLE IF NOT EXISTS users (
            id VARCHAR(255) PRIMARY KEY,
            name VARCHAR(255),
            email VARCHAR(255) UNIQUE,
            password VARCHAR(255),
            currency VARCHAR(10),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
        $result = mysqli_query($con, $create_usr_qry);
        if (!$result) {
            die("Error creating users table: " . mysqli_error($con));
        }
    }

    function create_trans_table() {
        global $con; // Make $con accessible
        $create_trans_qry = "CREATE TABLE IF NOT EXISTS transactions (
            id VARCHAR(255) PRIMARY KEY,
            user_id VARCHAR(255),
            amount DECIMAL(10, 2),
            category VARCHAR(255),
            type ENUM('income', 'expense'),
            date DATE,
            note TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users(id)
        )";
        $result = mysqli_query($con, $create_trans_qry);
        if (!$result) {
            die("Error creating transactions table: " . mysqli_error($con));
        }
    }

    function create_savings_goals_table() {
        global $con; // Make $con accessible
        $create_saving_qry = "CREATE TABLE IF NOT EXISTS savings_goals (
            id VARCHAR(255) PRIMARY KEY,
            user_id VARCHAR(255),
            goal_name VARCHAR(255),
            target_amount DECIMAL(10, 2),
            saved_amount DECIMAL(10, 2) DEFAULT 0,
            status ENUM('in-progress', 'completed'),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users(id)
        )";
        $result = mysqli_query($con, $create_saving_qry);
        if (!$result) {
            die("Error creating savings goals table: " . mysqli_error($con));
        }
    }

    create_users_table();
    echo "Users table created successfully.<br>";
    create_trans_table();
    echo "Transactions table created successfully.<br>";
    create_savings_goals_table();
    echo "Savings goals table created successfully.<br>";
