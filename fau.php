<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .row {
            width: max-content;
            margin: 100px auto;
            display: flex;
            /* display: inline; */
            flex-direction: row;
            height: 397px;
            overflow: hidden;
        }
    </style>
</head>

<body>

    <div class="row">
        <div class="satu">
            <?php
            for ($i = 0; $i < 22; $i++) {
                for ($a = 0; $a < 7; $a++) {
                    echo "&#10084;";
                }
                echo "<br>";
            }

            ?>
        </div>
        <div class="dua">
            <?php

            for ($i = 0; $i < 4; $i++) {
                for ($a = 0; $a < 10; $a++) {
                    echo "&#10084;";
                }
                echo "<br>";
            }
            for ($i = 0; $i < 5; $i++) {
                for ($a = 0; $a < 10; $a++) {
                    echo "";
                }
                echo "<br>";
            }
            for ($i = 0; $i < 4; $i++) {
                for ($a = 0; $a < 10; $a++) {
                    echo "&#10084;";
                }
                echo "<br>";
            }

            ?>
        </div>
        <div class="tiga">
            <?php

            for ($i = 0; $i < 22; $i++) {
                for ($a = 0; $a < 27; $a++) {
                    echo "&nbsp;";
                }
                echo "<br>";
            }
            ?>
        </div>
        <div class="empat">
            <?php

            for ($i = 0; $i < 22; $i++) {
                for ($a = 0; $a < 7; $a++) {
                    echo "&#10084;";
                }
                echo "<br>";
            }
            ?>
        </div>
        <div class="lima">
            <?php

            for ($i = 0; $i < 4; $i++) {
                for ($a = 0; $a < 5; $a++) {
                    echo "&#10084;";
                }
                echo "<br>";
            }
            for ($i = 0; $i < 5; $i++) {
                for ($a = 0; $a < 5; $a++) {
                    echo "";
                }
                echo "<br>";
            }
            for ($i = 0; $i < 4; $i++) {
                for ($a = 0; $a < 5; $a++) {
                    echo "&#10084;";
                }
                echo "<br>";
            }

            ?>
        </div>
        <div class="enam">
            <?php

            for ($i = 0; $i < 22; $i++) {
                for ($a = 0; $a < 7; $a++) {
                    echo "&#10084;";
                }
                echo "<br>";
            }
            ?>
        </div>
        <div class="tiga">
            <?php

            for ($i = 0; $i < 22; $i++) {
                for ($a = 0; $a < 27; $a++) {
                    echo "&nbsp;";
                }
                echo "<br>";
            }
            ?>
        </div>
        <div class="empat">
            <?php

            for ($i = 0; $i < 22; $i++) {
                for ($a = 0; $a < 7; $a++) {
                    echo "&#10084;";
                }
                echo "<br>";
            }
            ?>
        </div>
        <div class="lima">
            <?php
            for ($i = 0; $i < 18; $i++) {
                for ($a = 0; $a < 5; $a++) {
                    echo "";
                }
                echo "<br>";
            }
            for ($i = 0; $i < 4; $i++) {
                for ($a = 0; $a < 5; $a++) {
                    echo "&#10084;";
                }
                echo "<br>";
            }

            ?>
        </div>
        <div class="empat">
            <?php

            for ($i = 0; $i < 22; $i++) {
                for ($a = 0; $a < 7; $a++) {
                    echo "&#10084;";
                }
                echo "<br>";
            }
            ?>
        </div>
    </div>


</body>

</html>