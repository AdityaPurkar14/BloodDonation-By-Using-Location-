<?php
    // Include the file containing your database connection configuration
    include 'include/config.php';
    include 'include/adminnavigation.php'; 

    // Establish a database connection
    $connection = mysqli_connect("localhost", "root", "", "donatetheblood") or die("Database is not connected." . mysqli_connect_error());

    // Check the connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>

<?php include 'include/adminheader.php'; ?>

<style>
    /* Your CSS styles here */
    .background-container {
        background-color: #e74c3c; /* Red background color */
        color: white; /* White text color */
        padding: 20px 0;
        text-align: center;
    }
    .admin-dashboard {
        font-weight: bold;
        font-size: 24px;
    }
    .donor-info {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 15px;
    }
    .donor-info .btn {
        margin-top: 10px;
    }
</style>


    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center">Donors</h1>
            <hr class="white-bar">
        </div>
    </div>

    <div class="background-container">
        <h2 class="admin-dashboard">Admin Dashboard</h2>
    </div>

    <div class="container" style="padding-top: 20px;">
        <div class="row data">
            <?php
                $sql = "SELECT * FROM donor";
                $result = mysqli_query($connection, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Your PHP logic for displaying donors here
                        echo '<div class="col-md-3 col-sm-12 col-lg-3 donor-info">
                                <h4 class="name">' . $row['name'] . '</h4>
                                <p><strong>City:</strong> ' . $row['city'] . '</p>
                                <p><strong>Blood Group:</strong> ' . $row['blood_group'] . '</p>
                                <p><strong>Gender:</strong> ' . $row['gender'] . '</p>
                                <p><strong>Email:</strong> ' . $row['email'] . '</p>
                                <p><strong>Contact No:</strong> ' . $row['contact_no'] . '</p>
                                <a href="?delete_id=' . $row['id'] . '" class="btn btn-danger">Delete</a>
                              </div>';
                    }
                } else {
                    echo '<div class="col-md-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Data not found</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                          </div>';
                }

                // Check if delete button is clicked
                if (isset($_GET['delete_id'])) {
                    // Retrieve the ID of the donor to be deleted
                    $id = $_GET['delete_id'];

                    // Construct the DELETE SQL query
                    $sql = "DELETE FROM donor WHERE id = $id";

                    // Execute the SQL query
                    if (mysqli_query($connection, $sql)) {
                        // Deletion successful, redirect back to the page
                        header("Location: ".$_SERVER['PHP_SELF']);
                        exit();
                    } else {
                        // Deletion failed, display an error message
                        echo "Error deleting record: " . mysqli_error($connection);
                    }
                }
            ?>
        </div>
    </div>

<?php
    include 'include/footer.php';
    // Close the database connection
    mysqli_close($connection);
?>
