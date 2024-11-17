<?php
// Connection
include('./include/db_connect.php');

// Function to display featured categories
function display_women_categories() {
    global $db; // Ensure the database connection is accessible

    // Query to fetch all categories that contain "Women" in the name
    $select_categories = "SELECT * FROM category WHERE categoryName LIKE '%Women%'";
    $result_categories = mysqli_query($db, $select_categories);

    if (!$result_categories) {
        echo "SQL Error: " . mysqli_error($db); // Debugging output for errors
        return; // Stop execution if the query fails
    }

    // Check if categories exist
    if (mysqli_num_rows($result_categories) == 0) {
        echo "<h5 class='text-center text-danger'>No categories found.</h5>";
        return;
    }

    // Start the main container
    echo "<div class='featured-main' id='womens-categories'>";

    // Start the Bootstrap row
    echo "<div class='row'>";

    // Loop through each category and display a featured container
    $counter = 0; // Initialize a counter for the cards
    while ($row = mysqli_fetch_assoc($result_categories)) {
        $categoryID = $row['categoryID'];
        $categoryName = $row['categoryName'];
        
        // Create a dynamic image path based on the category name
        $imageName = strtolower(str_replace(' ', '-', $categoryName)) . '.jpg';

        // Output the category in a responsive column
        echo "
        <div class='col-12 col-sm-6 col-md-2 mb-3'> <!-- Updated columns for better responsiveness -->
            <div class='featured-container'>
                <a href='category.php?id=$categoryID'>
                    <img class='featured-image' src='./images/pictures/$imageName' alt='$categoryName' width='100%'>
                </a>
                <div class='featured-product-content'>
                    <div class='featured-product-info'>
                        <h3 class='featured-product-title'>$categoryName</h3>
                        <p class='featured-product-subtitle'>Womens Clothing</p>
                        <div class='featured-product-icons px-2'>
                            <i class='fas fa-female'></i>
                            <i class='fas fa-tshirt'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";

        $counter++;

        // After every 5 cards, close the current row and start a new one
        if ($counter % 5 == 0) {
            echo "</div><div class='row'>"; // Close the row and start a new row
        }
    }

    // Close the final row if there are any leftover categories
    if ($counter % 5 != 0) {
        echo "</div>"; // Close the final row
    }

    echo "</div>"; // Close the featured-main div
}

?>
