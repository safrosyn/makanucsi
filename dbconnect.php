<?php
                $user = 'root';

                $pass = '14june1993';

                $dbname = 'makanucsi';

                $db = new mysqli('localhost', $user, $pass, $dbname);

                if (!$db) {
                    echo "unable to connect: " . $conn->connect_error;
                    }

                
