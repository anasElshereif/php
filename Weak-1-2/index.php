<?php 
 echo "hello world <br />";
 print "hello world <br />";
//  comment
/* multi line 
comment*/
?>
<?=  "we love php" ?>
<!-- start weak two -->
<!-- 

echo "<br />";
 -->

 <?php
    /*
    ============================================
    = Data Types
    = ----------
    = bool  => Boolean
    = int   => Integer
    = float => Floating Point Number | double
    = string
    = array
    = Other Types
    = gettype()
    ============================================
    */

    echo gettype(True);
    echo '<br>';
    echo gettype(False);
    echo '<br>';
    echo gettype(true);
    echo '<br>';
    echo gettype(100);
    echo '<br>';
    echo gettype(-200);
    echo '<br>';
    echo gettype(0);
    echo '<br>';
    echo gettype(70.30);
    echo '<br>';
    echo gettype(-60.30);
    echo '<br>';
    echo gettype('Elzero');
    echo '<br>';
    echo gettype("Elzero");
    echo '<br>';
    echo gettype(array("EG" => "Egypt", "KSA" => "Saudi Arabia"));
    echo '<br>';
    echo gettype(array("Egypt", "Saudi Arabia"));
    echo '<br>';
    echo gettype(["Egypt", "Saudi Arabia"]);

    echo array("EG" => "Egypt", "KSA" => "Saudi Arabia");


    /*
    ============================================
    = Data Types
    = ----------
    = Type Juggling + Automatic Type Conversion
    ============================================
    */

    echo 1 + "2"; // 3
    echo '<br>';
    echo gettype(1 + "2"); // Integer
    echo '<br>';
    echo True; // 1
    echo '<br>';
    echo gettype(True); // Boolean
    echo '<br>';
    echo True + True; // 2
    echo '<br>';
    echo gettype(True + True); // Integer
    echo '<br>';
    echo 5 + '5 Lessons'; // 10 => Warning
    echo '<br>';
    echo gettype(5 + '5 Lessons'); // Integer => Warning
    echo '<br>';
    echo 10 + 15.5; // 25.5
    echo '<br>';
    echo gettype(10 + 15.5); // double => Float
    echo '<br>'; 



    /*
    ============================================
    = Data Types
    = ----------
    = Type Casting
    = ----------------------
    = "boolean" or "bool"
    = "integer" or "int"
    = "float" or "double" or "real"
    = "string"
    = "array"
    = "object"
    = "null"
    = ------
    = Search For Settype
    ============================================
    */

    echo 5 + (int) "5 Lessons";
    echo '<br>';
    echo 5 + (integer) "5 Lessons";
    echo '<br>';
    echo 5 + ( integer ) "5 Lessons";
    echo '<br>';
    echo gettype(5 + (int) "5 Lessons");
    echo '<br>';
    echo 10 + 15.5;
    echo '<br>';
    echo 10 + (int) 15.5;
    echo '<br>';
    echo gettype(10 + (int) 15.5);
    echo '<br>';
    echo 10.5 + 10.5;
    echo '<br>';
    echo gettype(10.5 + 10.5);
    echo '<br>';
    echo (int) 10.5 + (int) 10.5; // 20
    echo '<br>';
    echo gettype((int) 10.5 + (int) 10.5);
    echo '<br>';
    echo (int) (10.5 + 10.5); // 21






    /*
    ============================================
    = Data Types
    = ----------
    = Boolean + Converting To Boolean
    ============================================
    */

    var_dump((bool) "");
    echo '<br>';
    var_dump((bool) array());
    echo '<br>';
    var_dump((bool) []);
    echo '<br>';
    var_dump((bool) 0);
    echo '<br>';
    var_dump((bool) "0");
    echo '<br>';
    var_dump((bool) "Elzero");
    echo '<br>';
    var_dump((bool) array(1));
    echo '<br>';
    var_dump((bool) [1]);
    echo '<br>';
    var_dump((bool) 100);
    echo '<br>';
    var_dump((bool) -100);
    echo '<br>';
    var_dump((bool) 10.5);
    echo '<br>';
    var_dump((bool) -10.5);






    /*
    ============================================
    = Data Types
    = ----------
    = String And Escaping
    = -------------------
    = nl2br()
    ============================================
    */

    echo 'Hello PHP';
    echo '<br>';
    echo "Hello PHP";
    echo '<br>';
    echo "Hello 'PHP'";
    echo '<br>';
    echo 'Hello "PHP"';
    echo '<br>';
    echo 'Hello \'PHP\'';
    echo '<br>';
    echo "Hello \"PHP\"";
    echo '<br>';
    echo "Hello PHP\\";
    echo '<br>';
    echo 'Hello PHP
    On Multiple
    Lines';
    echo '<br>';
    echo nl2br('Hello PHP
    On Multiple
    Lines');




        /*
    ============================================
    = Data Types
    = ----------
    = String And Escaping
    = -------------------
    = Heredoc
    = Nowdoc
    ============================================
    */

    $name = "Osama";

    // Heredoc
    echo <<<"Here"
    Hello PHP
    Special Characters $$$ ' ' ' """"" \\\\
    Hello My Name Is $name
    Here;

    echo '<br>';

    // Nowdoc
    echo <<<'Now'
    Hello PHP
    Special Characters $$$ ' ' ' """"" \\\\
    Hello My Name Is $name
    Now;

    echo '<br>';

    echo '<ul>';
        echo "<li>" . $name . "</li>";
        echo "<li>" . $name . "</li>";
        echo "<li>" . $name . "</li>";
        echo "<li>" . $name . "</li>";
    echo '</ul>';

    echo '<br>';

    echo <<<"navlinks"
    <ul>
        <li>$name</li>
        <li>$name</li>
        <li>$name</li>
        <li>$name</li>
    </ul>
    navlinks;





    /*
    ============================================
    = Data Types
    = ----------
    = Array
    = -------------------
    = Array With Key
    = Array Without Keys
    = Array With One Key
    = Array Value Override
    = ------------------
    = print_r()
    ============================================
    */

    echo '<pre>';
    print_r([
        0 => "Sameh",
        "A" => "Ahmed",
        "B" => "Basem",
        "Mahmoud",
        True => "Sayed",
        "1" => "Osama",
        "Gamal",
        9 => "Amera",
        "Eman",
        "Mohamed",
        False => "Asmaa",
        8 => "Haytham",
        "Samer",
        "Names" => [
        "Osama",
        "Ahmed",
        "Sayed" => [
            "1",
            "2",
            "3"
        ]
        ]
    ]);
    echo '</pre>';