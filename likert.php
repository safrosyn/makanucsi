<!DOCTYPE html>
<?php include("dbconnect.php")?>
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="makeup.css">
    <link rel="stylesheet" type="text/css" href="likertcss.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
  <title>Makan@UCSI University</title>
  </head>
  <body>
  <div style="background:#e8d2d0">
<?php include("header.php"); ?>
<img src="img\quizhead.png" alt="food outlets location" width="1507" height="330">
<p>
<center>
<h1>Find out your Big 5 trait</h1>

<h5>The Big Five personality traits, also known as the five-factor model and the OCEAN model, is a taxonomy for personality traits.
When factor analysis is applied to personality survey data, some words used to describe aspects of personality are often applied to the same person.</h5></p>
<br>
</div>

 <div class="wrap">
 <form action="likertgrade.php" method="post" id="quiz">




    <label class="statement">1.Tends to find fault with others</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-1-answers" id="question-1-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-1-answers" id="question-1-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">2.Does a thorough job</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-2-answers" id="question-2-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-2-answers" id="question-2-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">3.Is talkative</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-3-answers" id="question-3-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-3-answers" id="question-3-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">4.Is original, comes up with new ideas</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-4-answers" id="question-4-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-4-answers" id="question-4-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">5.Is reserved</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-5-answers" id="question-5-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-5-answers" id="question-5-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-5-answers" id="question-6-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">6.Is helpful and unselfish with others</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-6-answers" id="question-6-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-6-answers" id="question-6-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">7.Can be somewhat careless</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-7-answers" id="question-7-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-7-answers" id="question-7-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">8.Is relax, handles stress well</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-8-answers" id="question-8-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-8-answers" id="question-8-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">9.Is curious about many different things</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-9-answers" id="question-9-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-9-answers" id="question-9-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">10.Is full of energy</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-10-answers" id="question-10-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-10-answers" id="question-10-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">11.Is depressed, blue</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-11-answers" id="question-11-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-11-answers" id="question-11-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-11-answers" id="question-11-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-11-answers" id="question-11-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-11-answers" id="question-11-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>


    <label class="statement">12.Starts quarrel with others</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-12-answers" id="question-12-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-12-answers" id="question-12-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-12-answers" id="question-12-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-12-answers" id="question-12-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-12-answers" id="question-12-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">13.Is a reliable worker</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-13-answers" id="question-13-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-13-answers" id="question-13-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-13-answers" id="question-13-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-13-answers" id="question-13-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-13-answers" id="question-13-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">14.Can be tense</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-14-answers" id="question-14-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-14-answers" id="question-14-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-14-answers" id="question-14-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-14-answers" id="question-14-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-14-answers" id="question-14-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">15.Is ingenious, a deep thinker</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-15-answers" id="question-15-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-15-answers" id="question-15-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-15-answers" id="question-15-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-15-answers" id="question-15-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-15-answers" id="question-15-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">16.Generates a lot of enthusiasm</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-16-answers" id="question-16-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-16-answers" id="question-16-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-16-answers" id="question-16-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-16-answers" id="question-16-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-16-answers" id="question-16-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">17.Has a forgiving nature</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-17-answers" id="question-17-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-17-answers" id="question-17-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-17-answers" id="question-17-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-17-answers" id="question-17-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-17-answers" id="question-17-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">18.Tends to be disorganized</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-18-answers" id="question-18-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-18-answers" id="question-18-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-18-answers" id="question-18-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-18-answers" id="question-18-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-18-answers" id="question-18-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">19.Worries a lot </label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-19-answers" id="question-19-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-19-answers" id="question-19-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-19-answers" id="question-19-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-19-answers" id="question-19-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-19-answers" id="question-19-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">20.Has an active imagination</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-20-answers" id="question-20-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-20-answers" id="question-20-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-20-answers" id="question-20-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-20-answers" id="question-20-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-20-answers" id="question-20-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">21.Tends to be quiet</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-21-answers" id="question-21-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-21-answers" id="question-21-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-21-answers" id="question-21-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-21-answers" id="question-21-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-21-answers" id="question-21-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">22.Is generally trusting</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-22-answers" id="question-22-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-22-answers" id="question-22-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-22-answers" id="question-22-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-22-answers" id="question-22-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-22-answers" id="question-22-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>

<label class="statement">23.Tends to be lazy</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-23-answers" id="question-23-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-23-answers" id="question-23-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-23-answers" id="question-23-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-23-answers" id="question-23-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-23-answers" id="question-23-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">24.Is emotionally stable, not easily upset</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-24-answers" id="question-24-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-24-answers" id="question-24-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-24-answers" id="question-24-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-24-answers" id="question-24-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-24-answers" id="question-24-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">25.Is inventive</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-25-answers" id="question-25-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-25-answers" id="question-25-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-25-answers" id="question-25-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-25-answers" id="question-25-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-25-answers" id="question-25-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">26.Has an assertive personality</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-26-answers" id="question-26-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-26-answers" id="question-26-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-26-answers" id="question-26-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-26-answers" id="question-26-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-26-answers" id="question-26-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">27.Can be cold and aloof</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-27-answers" id="question-27-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-27-answers" id="question-27-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-27-answers" id="question-27-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-27-answers" id="question-27-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-27-answers" id="question-27-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">28.Perseveres until the task is finished</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-28-answers" id="question-28-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-28-answers" id="question-28-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-28-answers" id="question-28-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-28-answers" id="question-28-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-28-answers" id="question-28-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">29.Can be moody</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-29-answers" id="question-29-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-29-answers" id="question-29-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-29-answers" id="question-29-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-29-answers" id="question-29-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-29-answers" id="question-29-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">30.Values artistic, aesthetic experiences </label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-30-answers" id="question-30-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-30-answers" id="question-30-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-30-answers" id="question-30-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-30-answers" id="question-30-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-30-answers" id="question-30-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">31.Is sometimes shy, inhibited</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-31-answers" id="question-31-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-31-answers" id="question-31-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-31-answers" id="question-31-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-31-answers" id="question-31-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-31-answers" id="question-31-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">32.Is considerate and kind to almost everyone</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-32-answers" id="question-32-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-32-answers" id="question-32-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-32-answers" id="question-32-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-32-answers" id="question-32-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-32-answers" id="question-32-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
    </ul>

    <label class="statement">33. Does things efficiently</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="question-33-answers" id="question-33-answers-A" value="Strongly Agree">
        <label>Strongly agree</label>
      </li>
      <li>
          <input type="radio" name="question-33-answers" id="question-33-answers-B" value="Agree" />
        <label>Agree</label>
      </li>
      <li>
          <input type="radio" name="question-33-answers" id="question-33-answers-C" value="Neutral" />
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="question-33-answers" id="question-33-answers-D" value="Disagree" />
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="question-33-answers" id="question-33-answers-D" value="Strongly Disagree" />
        <label>Strongly disagree</label>
      </li>
</ul>
      <label class="statement">34.Remains calm in tense situation</label>
      <ul class='likert'>
        <li>
          <input type="radio" name="question-34-answers" id="question-34-answers-A" value="Strongly Agree">
          <label>Strongly agree</label>
        </li>
        <li>
            <input type="radio" name="question-34-answers" id="question-34-answers-B" value="Agree" />
          <label>Agree</label>
        </li>
        <li>
            <input type="radio" name="question-34-answers" id="question-34-answers-C" value="Neutral" />
          <label>Neutral</label>
        </li>
        <li>
          <input type="radio" name="question-34-answers" id="question-34-answers-D" value="Disagree" />
          <label>Disagree</label>
        </li>
        <li>
          <input type="radio" name="question-34-answers" id="question-34-answers-D" value="Strongly Disagree" />
          <label>Strongly disagree</label>
        </li>
</ul>
        <label class="statement">35.Prefers work that is routine</label>
        <ul class='likert'>
          <li>
            <input type="radio" name="question-35-answers" id="question-35-answers-A" value="Strongly Agree">
            <label>Strongly agree</label>
          </li>
          <li>
              <input type="radio" name="question-35-answers" id="question-35-answers-B" value="Agree" />
            <label>Agree</label>
          </li>
          <li>
              <input type="radio" name="question-35-answers" id="question-35-answers-C" value="Neutral" />
            <label>Neutral</label>
          </li>
          <li>
            <input type="radio" name="question-35-answers" id="question-35-answers-D" value="Disagree" />
            <label>Disagree</label>
          </li>
          <li>
            <input type="radio" name="question-35-answers" id="question-35-answers-D" value="Strongly Disagree" />
            <label>Strongly disagree</label>
          </li>
</ul>
          <label class="statement">36.Is outgoing, sociable</label>
          <ul class='likert'>
            <li>
              <input type="radio" name="question-36-answers" id="question-36-answers-A" value="Strongly Agree">
              <label>Strongly agree</label>
            </li>
            <li>
                <input type="radio" name="question-36-answers" id="question-36-answers-B" value="Agree" />
              <label>Agree</label>
            </li>
            <li>
                <input type="radio" name="question-36-answers" id="question-36-answers-C" value="Neutral" />
              <label>Neutral</label>
            </li>
            <li>
              <input type="radio" name="question-36-answers" id="question-36-answers-D" value="Disagree" />
              <label>Disagree</label>
            </li>
            <li>
              <input type="radio" name="question-36-answers" id="question-36-answers-D" value="Strongly Disagree" />
              <label>Strongly disagree</label>
            </li>
</ul>
            <label class="statement">37.Is sometimes rude to others</label>
            <ul class='likert'>
              <li>
                <input type="radio" name="question-37-answers" id="question-37-answers-A" value="Strongly Agree">
                <label>Strongly agree</label>
              </li>
              <li>
                  <input type="radio" name="question-37-answers" id="question-37-answers-B" value="Agree" />
                <label>Agree</label>
              </li>
              <li>
                  <input type="radio" name="question-37-answers" id="question-37-answers-C" value="Neutral" />
                <label>Neutral</label>
              </li>
              <li>
                <input type="radio" name="question-37-answers" id="question-37-answers-D" value="Disagree" />
                <label>Disagree</label>
              </li>
              <li>
                <input type="radio" name="question-37-answers" id="question-37-answers-D" value="Strongly Disagree" />
                <label>Strongly disagree</label>
              </li>
</ul>
              <label class="statement">38.Makes plans and follows through with them</label>
              <ul class='likert'>
                <li>
                  <input type="radio" name="question-38-answers" id="question-38-answers-A" value="Strongly Agree">
                  <label>Strongly agree</label>
                </li>
                <li>
                    <input type="radio" name="question-38-answers" id="question-38-answers-B" value="Agree" />
                  <label>Agree</label>
                </li>
                <li>
                    <input type="radio" name="question-38-answers" id="question-38-answers-C" value="Neutral" />
                  <label>Neutral</label>
                </li>
                <li>
                  <input type="radio" name="question-38-answers" id="question-38-answers-D" value="Disagree" />
                  <label>Disagree</label>
                </li>
                <li>
                  <input type="radio" name="question-38-answers" id="question-38-answers-D" value="Strongly Disagree" />
                  <label>Strongly disagree</label>
                </li>
</ul>
                <label class="statement">39.Gets nervous easily</label>
                <ul class='likert'>
                  <li>
                    <input type="radio" name="question-39-answers" id="question-39-answers-A" value="Strongly Agree">
                    <label>Strongly agree</label>
                  </li>
                  <li>
                      <input type="radio" name="question-39-answers" id="question-39-answers-B" value="Agree" />
                    <label>Agree</label>
                  </li>
                  <li>
                      <input type="radio" name="question-39-answers" id="question-39-answers-C" value="Neutral" />
                    <label>Neutral</label>
                  </li>
                  <li>
                    <input type="radio" name="question-39-answers" id="question-39-answers-D" value="Disagree" />
                    <label>Disagree</label>
                  </li>
                  <li>
                    <input type="radio" name="question-39-answers" id="question-39-answers-D" value="Strongly Disagree" />
                    <label>Strongly disagree</label>
                  </li>
</ul>
                  <label class="statement">40.Likes to reflect, play with ideas</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="question-40-answers" id="question-40-answers-A" value="Strongly Agree">
                      <label>Strongly agree</label>
                    </li>
                    <li>
                        <input type="radio" name="question-40-answers" id="question-40-answers-B" value="Agree" />
                      <label>Agree</label>
                    </li>
                    <li>
                        <input type="radio" name="question-40-answers" id="question-40-answers-C" value="Neutral" />
                      <label>Neutral</label>
                    </li>
                    <li>
                      <input type="radio" name="question-40-answers" id="question-40-answers-D" value="Disagree" />
                      <label>Disagree</label>
                    </li>
                    <li>
                      <input type="radio" name="question-40-answers" id="question-40-answers-D" value="Strongly Disagree" />
                      <label>Strongly disagree</label>
                    </li>
</ul>
                    <label class="statement">41.Has few artistic interests</label>
                    <ul class='likert'>
                      <li>
                        <input type="radio" name="question-41-answers" id="question-41-answers-A" value="Strongly Agree">
                        <label>Strongly agree</label>
                      </li>
                      <li>
                          <input type="radio" name="question-41-answers" id="question-41-answers-B" value="Agree" />
                        <label>Agree</label>
                      </li>
                      <li>
                          <input type="radio" name="question-41-answers" id="question-41-answers-C" value="Neutral" />
                        <label>Neutral</label>
                      </li>
                      <li>
                        <input type="radio" name="question-41-answers" id="question-41-answers-D" value="Disagree" />
                        <label>Disagree</label>
                      </li>
                      <li>
                        <input type="radio" name="question-41-answers" id="question-41-answers-D" value="Strongly Disagree" />
                        <label>Strongly disagree</label>
                      </li>
</ul>
                      <label class="statement">42.Likes to cooperates with others</label>
                      <ul class='likert'>
                        <li>
                          <input type="radio" name="question-42-answers" id="question-42-answers-A" value="Strongly Agree">
                          <label>Strongly agree</label>
                        </li>
                        <li>
                            <input type="radio" name="question-42-answers" id="question-42-answers-B" value="Agree" />
                          <label>Agree</label>
                        </li>
                        <li>
                            <input type="radio" name="question-42-answers" id="question-42-answers-C" value="Neutral" />
                          <label>Neutral</label>
                        </li>
                        <li>
                          <input type="radio" name="question-42-answers" id="question-42-answers-D" value="Disagree" />
                          <label>Disagree</label>
                        </li>
                        <li>
                          <input type="radio" name="question-42-answers" id="question-42-answers-D" value="Strongly Disagree" />
                          <label>Strongly disagree</label>
                        </li>
</ul>
                        <label class="statement">43.Is easily distracted</label>
                        <ul class='likert'>
                          <li>
                            <input type="radio" name="question-43-answers" id="question-43-answers-A" value="Strongly Agree">
                            <label>Strongly agree</label>
                          </li>
                          <li>
                              <input type="radio" name="question-43-answers" id="question-43-answers-B" value="Agree" />
                            <label>Agree</label>
                          </li>
                          <li>
                              <input type="radio" name="question-43-answers" id="question-43-answers-C" value="Neutral" />
                            <label>Neutral</label>
                          </li>
                          <li>
                            <input type="radio" name="question-43-answers" id="question-43-answers-D" value="Disagree" />
                            <label>Disagree</label>
                          </li>
                          <li>
                            <input type="radio" name="question-43-answers" id="question-43-answers-D" value="Strongly Disagree" />
                            <label>Strongly disagree</label>
                          </li>
</ul>
                          <label class="statement">44.Is sophisticated in art, music or literature</label>
                          <ul class='likert'>
                            <li>
                              <input type="radio" name="question-44-answers" id="question-44-answers-A" value="Strongly Agree">
                              <label>Strongly agree</label>
                            </li>
                            <li>
                                <input type="radio" name="question-44-answers" id="question-44-answers-B" value="Agree" />
                              <label>Agree</label>
                            </li>
                            <li>
                                <input type="radio" name="question-44-answers" id="question-44-answers-C" value="Neutral" />
                              <label>Neutral</label>
                            </li>
                            <li>
                              <input type="radio" name="question-44-answers" id="question-44-answers-D" value="Disagree" />
                              <label>Disagree</label>
                            </li>
                            <li>
                              <input type="radio" name="question-44-answers" id="question-44-answers-D" value="Strongly Disagree" />
                              <label>Strongly disagree</label>
                            </li>
</ul>


                            <li>
                                <div class="quiz-overlay"></div>

                                <input type="submit" value="Submit Quiz" id="submit-quiz" />
                            </li>
                          </ul>

  </form>

</div>

</center>



<?php include("lilmenu.php"); ?>

<br>
<?php include("footer.php"); ?>

  </body>
</html>
