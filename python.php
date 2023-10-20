
<?php
if (isset($_POST['execute'])) 
{
    // Replace 'python_script.py' with the actual name of your Python script file.
    exec('python game.py', $output, $return_value);

    if ($return_value === 0) {
        echo "Python program executed successfully.";
    } else {
        echo "Python program execution failed.";
    }
}
?>
