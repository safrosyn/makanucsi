
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="makeup.css">
    <link rel="stylesheet" type="text/css" href="likertcss.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="custom.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Which Big 5 Personality Are You?</title>
    <meta charset="utf-8">
</head>
<body>


  <?php include("header.php"); ?>





        <?php


            if(
                  !isset($_POST['question-1-answers'])
                ||!isset($_POST['question-2-answers'])
                ||!isset($_POST['question-3-answers'])
                ||!isset($_POST['question-4-answers'])
                ||!isset($_POST['question-5-answers'])
                ||!isset($_POST['question-6-answers'])
                ||!isset($_POST['question-7-answers'])
                ||!isset($_POST['question-8-answers'])
                ||!isset($_POST['question-9-answers'])
                ||!isset($_POST['question-10-answers'])
                ||!isset($_POST['question-11-answers'])
                ||!isset($_POST['question-12-answers'])
                ||!isset($_POST['question-13-answers'])
                ||!isset($_POST['question-14-answers'])
                ||!isset($_POST['question-15-answers'])
                ||!isset($_POST['question-16-answers'])
                ||!isset($_POST['question-17-answers'])
                ||!isset($_POST['question-18-answers'])
                ||!isset($_POST['question-19-answers'])
                ||!isset($_POST['question-20-answers'])
                ||!isset($_POST['question-21-answers'])
                ||!isset($_POST['question-22-answers'])
                ||!isset($_POST['question-23-answers'])
                ||!isset($_POST['question-24-answers'])
                ||!isset($_POST['question-25-answers'])
                ||!isset($_POST['question-26-answers'])
                ||!isset($_POST['question-27-answers'])
                ||!isset($_POST['question-28-answers'])
                ||!isset($_POST['question-29-answers'])
                ||!isset($_POST['question-30-answers'])
                ||!isset($_POST['question-31-answers'])
                ||!isset($_POST['question-32-answers'])
                ||!isset($_POST['question-33-answers'])
                ||!isset($_POST['question-34-answers'])
                ||!isset($_POST['question-35-answers'])
                ||!isset($_POST['question-36-answers'])
                ||!isset($_POST['question-37-answers'])
                ||!isset($_POST['question-38-answers'])
                ||!isset($_POST['question-39-answers'])
                ||!isset($_POST['question-40-answers'])
                ||!isset($_POST['question-41-answers'])
                ||!isset($_POST['question-42-answers'])
                ||!isset($_POST['question-43-answers'])
                ||!isset($_POST['question-44-answers'])


              ){
                ?>
                <hr>
                <center><h1>Error!</h1>
                  <?php
                      echo "Not all the questions have been answered. Please return and answer all questions";
                   ?>
                   <br>
                   <a class="btn btn-outline-primary" href="likert.php" role="button" style="margin-top:20px">Go Back</a>
                </center>
              <?php
            }
            else{



            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
            $answer11 = $_POST['question-11-answers'];

            $answer12 = $_POST['question-12-answers'];
            $answer13 = $_POST['question-13-answers'];
            $answer14 = $_POST['question-14-answers'];
            $answer15 = $_POST['question-15-answers'];
            $answer16 = $_POST['question-16-answers'];
            $answer17 = $_POST['question-17-answers'];
            $answer18 = $_POST['question-18-answers'];
            $answer19 = $_POST['question-19-answers'];
            $answer20 = $_POST['question-20-answers'];
            $answer21 = $_POST['question-21-answers'];
            $answer22 = $_POST['question-22-answers'];

            $answer23 = $_POST['question-23-answers'];
            $answer24 = $_POST['question-24-answers'];
            $answer25 = $_POST['question-25-answers'];
            $answer26 = $_POST['question-26-answers'];
            $answer27 = $_POST['question-27-answers'];
            $answer28 = $_POST['question-28-answers'];
            $answer29 = $_POST['question-29-answers'];
            $answer30 = $_POST['question-30-answers'];
            $answer31 = $_POST['question-31-answers'];
            $answer32 = $_POST['question-32-answers'];
            $answer33 = $_POST['question-33-answers'];

            $answer34 = $_POST['question-34-answers'];
            $answer35 = $_POST['question-35-answers'];
            $answer36 = $_POST['question-36-answers'];
            $answer37 = $_POST['question-37-answers'];
            $answer38 = $_POST['question-38-answers'];
            $answer39 = $_POST['question-39-answers'];
            $answer40 = $_POST['question-40-answers'];
            $answer41 = $_POST['question-41-answers'];
            $answer42 = $_POST['question-42-answers'];
            $answer43 = $_POST['question-43-answers'];
            $answer44 = $_POST['question-44-answers'];




            //A is Openness B is Agreeaable C is Conscientse D is Neurotic E is Extra

            $totalO = 0; //openness
            $totalC = 0; //conscientiousness
            $totalE = 0; //extraversion
            $totalA = 0; //agreeableness
            $totalN = 0; //neurotic

            //tend to find fault with others, reverse A
            if ($answer1 == "Strongly Agree") { $totalA = $totalA + 1; }
            if ($answer1 == "Agree") { $totalA = $totalA + 2; }
            if ($answer1 == "Neutral") { $totalA = $totalA + 3; }
            if ($answer1 == "Disagree") { $totalA = $totalA + 4; }
            if ($answer1 == "Strongly Disagree"){ $totalA = $totalA + 5; }

            //does a thorough job, C
            if ($answer2 == "Strongly Agree") { $totalC = $totalC + 5; }
            if ($answer2 == "Agree") { $totalC = $totalC + 4; }
            if ($answer2 == "Neutral") { $totalC = $totalC + 3; }
            if ($answer2 == "Disagree"){ $totalC = $totalC + 2; }
            if ($answer1 == "Strongly Disagree") { $totalC = $totalC + 1; }

            //E
            if ($answer3 == "Strongly Agree") { $totalE = $totalE + 5; }
            if ($answer3 == "Agree") { $totalE = $totalE + 4; }
            if ($answer3 == "Neutral") { $totalE = $totalE + 3; }
            if ($answer3 == "Disagree") { $totalE = $totalE + 2; }
            if ($answer3 == "Strongly Disagree"){ $totalE = $totalE + 1; }

            //o
            if ($answer4 == "Strongly Agree") { $totalO = $totalO + 5; }
            if ($answer4 == "Agree") { $totalO = $totalO + 4; }
            if ($answer4 == "Neutral") { $totalO = $totalO + 3; }
            if ($answer4 == "Disagree") { $totalO = $totalO + 2; }
            if ($answer4 == "Strongly Disagree"){ $totalO = $totalO + 1; }

            //E reverse
            if ($answer5 == "Strongly Agree") { $totalE = $totalE + 1; }
            if ($answer5 == "Agree") { $totalE = $totalE + 2; }
            if ($answer5 == "Neutral") { $totalE = $totalE + 3; }
            if ($answer5 == "Disagree") { $totalE = $totalE + 4; }
            if ($answer5 == "Strongly Disagree"){ $totalE = $totalE + 5; }

            //A
            if ($answer6 == "Strongly Agree") { $totalA = $totalA + 5; }
            if ($answer6 == "Agree") { $totalA = $totalA + 4; }
            if ($answer6 == "Neutral") { $totalA = $totalA + 3; }
            if ($answer6 == "Disagree") { $totalA = $totalA + 2; }
            if ($answer6 == "Strongly Disagree"){ $totalA = $totalA + 1; }
            //reverse C
            if ($answer7 == "Strongly Agree") { $totalC = $totalC + 1; }
            if ($answer7 == "Agree") { $totalC = $totalC + 2; }
            if ($answer7 == "Neutral") { $totalC = $totalC + 3; }
            if ($answer7 == "Disagree") { $totalC = $totalC + 4; }
            if ($answer7 == "Strongly Disagree"){ $totalC = $totalC + 5; }
            //reverse N
            if ($answer8 == "Strongly Agree") { $totalN = $totalN + 1; }
            if ($answer8 == "Agree") { $totalN = $totalN + 2; }
            if ($answer8 == "Neutral") { $totalN = $totalN + 3; }
            if ($answer8 == "Disagree") { $totalN = $totalN + 4; }
            if ($answer8 == "Strongly Disagree"){ $totalN = $totalN + 5; }
            //o
            if ($answer9 == "Strongly Agree") { $totalO = $totalO + 5; }
            if ($answer9 == "Agree") { $totalO = $totalO + 4; }
            if ($answer9 == "Neutral") { $totalO = $totalO + 3; }
            if ($answer9 == "Disagree") { $totalO = $totalO + 2; }
            if ($answer9 == "Strongly Disagree"){ $totalO = $totalO + 1; }
            //E
            if ($answer10 == "Strongly Agree") { $totalE = $totalE + 5; }
            if ($answer10 == "Agree") { $totalE = $totalE + 4; }
            if ($answer10 == "Neutral") { $totalE = $totalE + 3; }
            if ($answer10 == "Disagree") { $totalE = $totalE + 2; }
            if ($answer10 == "Strongly Disagree"){ $totalE = $totalE + 1; }
            //N
            if ($answer11 == "Strongly Agree") { $totalN = $totalN + 5; }
            if ($answer11 == "Agree") { $totalN = $totalN + 4; }
            if ($answer11 == "Neutral") { $totalN = $totalN + 3; }
            if ($answer11 == "Disagree") { $totalN = $totalN + 2; }
            if ($answer11 == "Strongly Disagree"){ $totalN = $totalN + 1; }
            //reverse A
            if ($answer12 == "Strongly Agree") { $totalA = $totalA + 1; }
            if ($answer12 == "Agree") { $totalA = $totalA + 2; }
            if ($answer12 == "Neutral") { $totalA = $totalA + 3; }
            if ($answer12 == "Disagree") { $totalA = $totalA + 4; }
            if ($answer12 == "Strongly Disagree"){ $totalA = $totalA + 5; }
            //C
            if ($answer13 == "Strongly Agree") { $totalC = $totalC + 5; }
            if ($answer13 == "Agree") { $totalC = $totalC + 4; }
            if ($answer13 == "Neutral") { $totalC = $totalC + 3; }
            if ($answer13 == "Disagree"){ $totalC = $totalC + 2; }
            if ($answer13 == "Strongly Disagree") { $totalC = $totalC + 1; }
            //N
            if ($answer14 == "Strongly Agree") { $totalN = $totalN + 5; }
            if ($answer14 == "Agree") { $totalN = $totalN + 4; }
            if ($answer14 == "Neutral") { $totalN = $totalN + 3; }
            if ($answer14 == "Disagree") { $totalN = $totalN + 2; }
            if ($answer14 == "Strongly Disagree"){ $totalN = $totalN + 1; }
            //O
            if ($answer15 == "Strongly Agree") { $totalO = $totalO + 5; }
            if ($answer15 == "Agree") { $totalO = $totalO + 4; }
            if ($answer15 == "Neutral") { $totalO = $totalO + 3; }
            if ($answer15 == "Disagree") { $totalO = $totalO + 2; }
            if ($answer15 == "Strongly Disagree"){ $totalO = $totalO + 1; }
            //E
            if ($answer16 == "Strongly Agree") { $totalE = $totalE + 5; }
            if ($answer16 == "Agree") { $totalE = $totalE + 4; }
            if ($answer16 == "Neutral") { $totalE = $totalE + 3; }
            if ($answer16 == "Disagree") { $totalE = $totalE + 2; }
            if ($answer16 == "Strongly Disagree"){ $totalE = $totalE + 1; }
            //A
            if ($answer17 == "Strongly Agree") { $totalA = $totalA + 5; }
            if ($answer17 == "Agree") { $totalA = $totalA + 4; }
            if ($answer17 == "Neutral") { $totalA = $totalA + 3; }
            if ($answer17 == "Disagree") { $totalA = $totalA + 2; }
            if ($answer17 == "Strongly Disagree"){ $totalA = $totalA + 1; }
            //reverse C
            if ($answer18 == "Strongly Agree") { $totalC = $totalC + 1; }
            if ($answer18 == "Agree") { $totalC = $totalC + 2; }
            if ($answer18 == "Neutral") { $totalC = $totalC + 3; }
            if ($answer18 == "Disagree") { $totalC = $totalC + 4; }
            if ($answer18 == "Strongly Disagree"){ $totalC = $totalC + 5; }
            //N
            if ($answer19 == "Strongly Agree") { $totalN = $totalN + 5; }
            if ($answer19 == "Agree") { $totalN = $totalN + 4; }
            if ($answer19 == "Neutral") { $totalN = $totalN + 3; }
            if ($answer19 == "Disagree") { $totalN = $totalN + 2; }
            if ($answer19 == "Strongly Disagree"){ $totalN = $totalN + 1; }
            //O
            if ($answer20 == "Strongly Agree") { $totalO = $totalO + 5; }
            if ($answer20 == "Agree") { $totalO = $totalO + 4; }
            if ($answer20 == "Neutral") { $totalO = $totalO + 3; }
            if ($answer20 == "Disagree") { $totalO = $totalO + 2; }
            if ($answer20 == "Strongly Disagree"){ $totalO = $totalO + 1; }
            //REVERSE E
            if ($answer21 == "Strongly Agree") { $totalE = $totalE + 1; }
            if ($answer21== "Agree") { $totalE = $totalE + 2; }
            if ($answer21== "Neutral") { $totalE = $totalE + 3; }
            if ($answer21 == "Disagree") { $totalE = $totalE + 4; }
            if ($answer21 == "Strongly Disagree"){ $totalE = $totalE + 5; }
            //A
            if ($answer22 == "Strongly Agree") { $totalA = $totalA + 5; }
            if ($answer22 == "Agree") { $totalA = $totalA + 4; }
            if ($answer22 == "Neutral") { $totalA = $totalA + 3; }
            if ($answer22 == "Disagree") { $totalA = $totalA + 2; }
            if ($answer22 == "Strongly Disagree"){ $totalA = $totalA + 1; }
            //reverse c
            if ($answer23 == "Strongly Agree") { $totalC = $totalC + 1; }
            if ($answer23 == "Agree") { $totalC = $totalC + 2; }
            if ($answer23 == "Neutral") { $totalC = $totalC + 3; }
            if ($answer23 == "Disagree") { $totalC = $totalC + 4; }
            if ($answer23 == "Strongly Disagree"){ $totalC = $totalC + 5; }
            //reverse n
            if ($answer24 == "Strongly Agree") { $totalN = $totalN + 1; }
            if ($answer24 == "Agree") { $totalN = $totalN + 2; }
            if ($answer24 == "Neutral") { $totalN = $totalN + 3; }
            if ($answer24 == "Disagree") { $totalN = $totalN + 4; }
            if ($answer24 == "Strongly Disagree"){ $totalN = $totalN + 5; }
            //o
            if ($answer25 == "Strongly Agree") { $totalO = $totalO + 5; }
            if ($answer25 == "Agree") { $totalO = $totalO + 4; }
            if ($answer25 == "Neutral") { $totalO = $totalO + 3; }
            if ($answer25 == "Disagree") { $totalO = $totalO + 2; }
            if ($answer25 == "Strongly Disagree"){ $totalO = $totalO + 1; }
            //E
            if ($answer26 == "Strongly Agree") { $totalE = $totalE + 5; }
            if ($answer26 == "Agree") { $totalE = $totalE + 4; }
            if ($answer26 == "Neutral") { $totalE = $totalE + 3; }
            if ($answer26 == "Disagree") { $totalE = $totalE + 2; }
            if ($answer26 == "Strongly Disagree"){ $totalE = $totalE + 1; }
            //REVERSE A
            if ($answer27 == "Strongly Agree") { $totalA = $totalA + 1; }
            if ($answer27 == "Agree") { $totalA = $totalA + 2; }
            if ($answer27 == "Neutral") { $totalA = $totalA + 3; }
            if ($answer27 == "Disagree") { $totalA = $totalA + 4; }
            if ($answer27 == "Strongly Disagree"){ $totalA = $totalA + 5; }
            //C
            if ($answer28 == "Strongly Agree") { $totalC = $totalC + 5; }
            if ($answer28 == "Agree") { $totalC = $totalC + 4; }
            if ($answer28 == "Neutral") { $totalC = $totalC + 3; }
            if ($answer28 == "Disagree"){ $totalC = $totalC + 2; }
            if ($answer28 == "Strongly Disagree") { $totalC = $totalC + 1; }
            //N
            if ($answer29 == "Strongly Agree") { $totalN = $totalN + 5; }
            if ($answer29 == "Agree") { $totalN = $totalN + 4; }
            if ($answer29 == "Neutral") { $totalN = $totalN + 3; }
            if ($answer29 == "Disagree") { $totalN = $totalN + 2; }
            if ($answer29 == "Strongly Disagree"){ $totalN = $totalN + 1; }
            //O
            if ($answer30 == "Strongly Agree") { $totalO = $totalO + 5; }
            if ($answer30 == "Agree") { $totalO = $totalO + 4; }
            if ($answer30 == "Neutral") { $totalO = $totalO + 3; }
            if ($answer30 == "Disagree") { $totalO = $totalO + 2; }
            if ($answer30 == "Strongly Disagree"){ $totalO = $totalO + 1; }
            //REVERSE E
            if ($answer31 == "Strongly Agree") { $totalE = $totalE + 1; }
            if ($answer31== "Agree") { $totalE = $totalE + 2; }
            if ($answer31== "Neutral") { $totalE = $totalE + 3; }
            if ($answer31 == "Disagree") { $totalE = $totalE + 4; }
            if ($answer31 == "Strongly Disagree"){ $totalE = $totalE + 5; }
            //A
            if ($answer32 == "Strongly Agree") { $totalA = $totalA + 5; }
            if ($answer32 == "Agree") { $totalA = $totalA + 4; }
            if ($answer32 == "Neutral") { $totalA = $totalA + 3; }
            if ($answer32 == "Disagree") { $totalA = $totalA + 2; }
            if ($answer32 == "Strongly Disagree"){ $totalA = $totalA + 1; }
            //C
            if ($answer33 == "Strongly Agree") { $totalC = $totalC + 5; }
            if ($answer33 == "Agree") { $totalC = $totalC + 4; }
            if ($answer33 == "Neutral") { $totalC = $totalC + 3; }
            if ($answer33 == "Disagree"){ $totalC = $totalC + 2; }
            if ($answer33 == "Strongly Disagree") { $totalC = $totalC + 1; }
            //REVERSE N
            if ($answer34 == "Strongly Agree") { $totalN = $totalN + 1; }
            if ($answer34 == "Agree") { $totalN = $totalN + 2; }
            if ($answer34 == "Neutral") { $totalN = $totalN + 3; }
            if ($answer34 == "Disagree") { $totalN = $totalN + 4; }
            if ($answer34 == "Strongly Disagree"){ $totalN = $totalN + 5; }
            // REVERSE O
            if ($answer35 == "Strongly Agree") { $totalO = $totalO + 1; }
            if ($answer35 == "Agree") { $totalO = $totalO + 2; }
            if ($answer35 == "Neutral") { $totalO = $totalO + 3; }
            if ($answer35 == "Disagree") { $totalO = $totalO + 4; }
            if ($answer35 == "Strongly Disagree"){ $totalO = $totalO + 5; }
            //E
            if ($answer36 == "Strongly Agree") { $totalE = $totalE + 5; }
            if ($answer36== "Agree") { $totalE = $totalE + 4; }
            if ($answer36== "Neutral") { $totalE = $totalE + 3; }
            if ($answer36 == "Disagree") { $totalE = $totalE + 2; }
            if ($answer36 == "Strongly Disagree"){ $totalE = $totalE + 1; }
            //REVERSE A
            if ($answer37 == "Strongly Agree") { $totalA = $totalA + 1; }
            if ($answer37 == "Agree") { $totalA = $totalA + 2; }
            if ($answer37 == "Neutral") { $totalA = $totalA + 3; }
            if ($answer37 == "Disagree") { $totalA = $totalA + 4; }
            if ($answer37 == "Strongly Disagree"){ $totalA = $totalA + 5; }
            //C
            if ($answer38 == "Strongly Agree") { $totalC = $totalC + 5; }
            if ($answer38 == "Agree") { $totalC = $totalC + 4; }
            if ($answer38 == "Neutral") { $totalC = $totalC + 3; }
            if ($answer38 == "Disagree"){ $totalC = $totalC + 2; }
            if ($answer38 == "Strongly Disagree") { $totalC = $totalC + 1; }
            //N
            if ($answer39 == "Strongly Agree") { $totalN = $totalN + 5; }
            if ($answer39 == "Agree") { $totalN = $totalN + 4; }
            if ($answer39 == "Neutral") { $totalN = $totalN + 3; }
            if ($answer39 == "Disagree") { $totalN = $totalN + 2; }
            if ($answer39 == "Strongly Disagree"){ $totalN = $totalN + 1; }
            //O
            if ($answer40 == "Strongly Agree") { $totalO = $totalO + 5; }
            if ($answer40 == "Agree") { $totalO = $totalO + 4; }
            if ($answer40 == "Neutral") { $totalO = $totalO + 3; }
            if ($answer40 == "Disagree") { $totalO = $totalO + 2; }
            if ($answer40 == "Strongly Disagree"){ $totalO = $totalO + 1; }
            //REVERSE O
            if ($answer41 == "Strongly Agree") { $totalO = $totalO + 1; }
            if ($answer41 == "Agree") { $totalO = $totalO + 2; }
            if ($answer41 == "Neutral") { $totalO = $totalO + 3; }
            if ($answer41 == "Disagree") { $totalO = $totalO + 4; }
            if ($answer41 == "Strongly Disagree"){ $totalO = $totalO + 5; }
            //A
            if ($answer42 == "Strongly Agree") { $totalA = $totalA + 5; }
            if ($answer42 == "Agree") { $totalA = $totalA + 4; }
            if ($answer42 == "Neutral") { $totalA = $totalA + 3; }
            if ($answer42 == "Disagree") { $totalA = $totalA + 2; }
            if ($answer42 == "Strongly Disagree"){ $totalA = $totalA + 1; }
            // REVERSE C
            if ($answer43 == "Strongly Agree") { $totalC = $totalC + 1; }
            if ($answer43 == "Agree") { $totalC = $totalC + 2; }
            if ($answer43 == "Neutral") { $totalC = $totalC + 3; }
            if ($answer43 == "Disagree") { $totalC = $totalC + 4; }
            if ($answer43 == "Strongly Disagree"){ $totalC = $totalC + 5; }
            //O
            if ($answer44 == "Strongly Agree") { $totalO = $totalO + 5; }
            if ($answer44 == "Agree") { $totalO = $totalO + 4; }
            if ($answer44 == "Neutral") { $totalO = $totalO + 3; }
            if ($answer44 == "Disagree") { $totalO = $totalO + 2; }
            if ($answer44 == "Strongly Disagree"){ $totalO = $totalO + 1; }

  ?>
            <div class="results-overlay">
              <center>
              <?php
                if ($totalO >= $totalC && $totalO >= $totalE && $totalO >= $totalA && $totalO>= $totalN) {
                  $result= "Openness to experience";
                      //echo "Congrats! Your result is " . $result . ".";
                }
                elseif ($totalC >= $totalO && $totalC >= $totalE && $totalC >= $totalA && $totalC>= $totalN) {
                  $result = "Conscientiousness";
                      //echo "Congrats! Your result is " . $result . ".";
                }
                elseif ($totalE>= $totalO && $totalE >= $totalC && $totalE >= $totalA && $totalE>= $totalN) {
                  $result ="Extraversion"; ?>

                 <?php    //echo"Congrats! Your result is " . $result . ".";
                }
                elseif ($totalA >= $totalO && $totalA >= $totalC && $totalA >= $totalE && $totalA>= $totalN) {
                       $result = "Agreeableness";
                  //echo "Congrats! Your result is " . $result . ".";

                }
               elseif ($totalN >= $totalO && $totalN >= $totalC && $totalN >= $totalE && $totalN>= $totalA) {
                     $result = "Neuroticism";
                    //echo "Congrats! Your result is " . $result . ".";
                }

?>
<p> <?php
                $user = 'root';

                $pass = '14june1993';

                $dbname = 'makanucsi';

                $db = new mysqli('localhost', $user, $pass, $dbname);// or die ("unable to connect");

                if (!$db) {
                    echo "unable to connect: " . $conn->connect_error;
                    }
                /*else{
                  echo "Below are the list of meals recommended to you!";
                }*/

                $sql0 = "SELECT * FROM big_five WHERE (type_name='$result')";
                $res = mysqli_query($db, $sql0);

                while($row = mysqli_fetch_assoc($res)){
                  $big5_id = $row['type_id'];
                }



                $sql1 = "INSERT INTO big5_quiz (result, big_5_id) VALUES ('$result', '$big5_id')";
                if (mysqli_query($db, $sql1)) {
                    echo "";
                } else {
                    echo "Error: " . $sql1 . "<br>" . mysqli_error($db);
                }
/*$sql = "INSERT INTO big_five (user_id, result_type) VALUES ('$id', '$result')";


if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}*/



$db->close();
?></div>









  <?php
  if($result=="Agreeableness"){
     setcookie("user", $result, time()+120);
     include("agree_content.php");
  }
  else if($result=="Openness to experience"){
     setcookie("user", $result, time()+120);
     include("openness_content.php");
  }
  else if($result=="Neuroticism"){
     setcookie("user", $result, time()+120);
     include("neuro_content.php");
  }
  else if($result=="Conscientiousness"){
     setcookie("user", $result, time()+120);
     include("consc_content.php");
  }
  else if($result=="Extraversion"){
    setcookie("user", $result, time()+120);
    include("extra_content.php");
  }
  else{
    echo "result not detected!";
  }

  ?>











<?php
}       ?>
