<?php

$file = "sonur.m3u";



// Check if the form has been submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the edited content from the form

    $edited_content = $_POST["edited_content"];



    // Open the file for writing

    $handle = fopen($file, "w");



    if ($handle) {

        // Write the edited content to the file

        fwrite($handle, $edited_content);



        // Close the file

        fclose($handle);



        echo "File edited successfully.";

    } else {

        echo "Unable to open file for writing!";

    }

}



// Read the content of the file

$content = file_get_contents($file);

?>



<!DOCTYPE html>

<html>

<head>

    <title>Edit Text File</title>

<style>

        /* Style the textarea */

        #editable {

            width: 300px;

            height: 200px;

            resize: both; /* Allow resizing */

            overflow: auto; /* Enable scrolling */

            border: 1px solid #ccc;

            padding: 5px;

            

        }



        /* Style the submit button */

        input[type="submit"] {

            padding: 10px 20px; /* Adjust padding to make button bigger */

            font-size: 36px; /* Adjust font size if necessary */

            width: 300px; /* Set width of the button */

            height: 60px; /* Set height of the button */

            background-color: #4CAF50; /* Set background color */

            color: white; /* Set text color */

            border: none; /* Remove border */

            border-radius: 5px; /* Add border radius for rounded corners */

            cursor: pointer; /* Change cursor on hover */

        }



        /* Change button background color on hover */

        input[type="submit"]:hover {

            background-color: #45a049;

        }

        /* Set background color of the HTML page */

        body {

            background-color: black; /* Set background color */

            color: green; /* Set text color */

        }

    </style>

</head>

<body>

    <h1>View and Edit Text File</h1>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

        <textarea name="edited_content" rows="19" cols="90" style="background-color: black; color: green; font-size: 21px;"><?php echo htmlspecialchars($content); ?></textarea><br><br><br><br><br><br><br>

        <center><input type="submit" value="Save Changes"></center>

    </form>

</body>

</html>
