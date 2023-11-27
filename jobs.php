<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script async data-id="five-server" src="http://localhost:5500/fiveserver.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Openings</title>
    <link rel="stylesheet" href="style/style.css">
    <style>
        .image-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 50px;
        }
    </style>
</head>

<body class="background-image">
<img src="images/x.png" class="x-img" id="x1" alt="X shape" >
      <img src="images/x.png" class="x-img" id="x2" alt="X shape" >
      <img src="images/x.png" class="x-img" id="x3" alt="X shape" >
      <img src="images/x.png" class="x-img" id="x4" alt="X shape" >
      <img src="images/x.png" class="x-img" id="x5" alt="X shape" >

      <img src="images/stop.png" class="stop-img" id="stop1" alt="Square shape">
      <img src="images/stop.png" class="stop-img" id="stop2" alt="Square shape">
      <img src="images/stop.png" class="stop-img" id="stop3" alt="Square shape">
      <img src="images/stop.png" class="stop-img" id="stop4" alt="Square shape">
      <img src="images/stop.png" class="stop-img" id="stop5" alt="Square shape">
      <img src="images/triangle.png" class="triangle-img" id="triangle1" alt="Triangle shape">
      <img src="images/triangle.png" class="triangle-img" id="triangle2" alt="Triangle shape">
      <img src="images/triangle.png" class="triangle-img" id="triangle3" alt="Triangle shape">
      <img src="images/triangle.png" class="triangle-img" id="triangle4" alt="Triangle shape">
      <img src="images/sparkle.png" class="sparkle-img" id="sparkle1" alt="Sparkle">
      <img src="images/sparkle.png" class="sparkle-img" id="sparkle2" alt="Sparkle">
      <img src="images/sparkle.png" class="sparkle-img" id="sparkle3" alt="Sparkle">
      <img src="images/sparkle.png" class="sparkle-img" id="sparkle4" alt="Sparkle">
      <img src="images/sparkle.png" class="sparkle-img" id="sparkle5" alt="Sparkle">
      <img src="images/sparkle.png" class="sparkle-img" id="sparkle6" alt="Sparkle">
      <img src="images/sparkle.png" class="sparkle-img" id="sparkle7" alt="Sparkle">
      <img src="images/record.png" class="record-img" id="record1" alt="Circle shape">
      <img src="images/record.png" class="record-img" id="record2" alt="Circle shape">
    <header>
        <h1 class="way">DESCRIBE YOUR FUTURE JOBS</h1>
    </header>
    <?php include_once 'menu.inc'; ?>
    <aside>
    <div class="image-container">
        <img class="mind" src="images/AI.png" alt="Artificial Intelligence concept" width="300" height="200">
        <img class="flop" src="images/IT.png" alt="Information Technology concept" width="200" height="200">
        <img class="push" src="images/engineer.png" alt="Software Engineer concept" width="200" height="200">
        <img class="nike" src="images/tech.png" alt="Technology concept" width="230" height="200">
    </div>
</aside>

<section>
    <h2 class="face">Position 1: IT Technician</h2><br>
    <aside></aside>
    <p class="fixT"><strong> National average salary:</strong> 51,569$</p><br>
    <p class="fixT"><strong>Primary duties:</strong> An IT technician collaborates with support specialists to 
    analyze  and diagnose computer issues. They also monitor processing functions, install relevant  software, and 
    perform tests on computer equipment and applications when necessary. They may also train a company's employees, 
    clients, and other users on a new program or function as well🚀.</p>
    <p class="fixT"><strong> Requirements:</strong> A bachelor's degree in computer science or a related IT field is
    often required. Coursework in business administration, management, and finance may help these professionals better 
    apply their IT knowledge to improving business practices🤖.
</section>
<br>
<section>
    <h3 class="pop">Position 2: Software Engineer</h3><br>
    <aside></aside>
    <p class="fixT"><strong> National average salary:</strong> 93,817$</p><br>
    <p class="fixT"><strong>Primary duties:</strong> Software engineers apply their knowledge of mathematics and 
    computer science to create and improve new software. They may work on enterprise applications, 
    operating systems, and network control systems, which are all examples of software that can be used to help 
    businesses scale their IT infrastructure😉
    <p class="fixT"><strong> Requirements:</strong> Most computer scientists need both a bachelor's and a master's degree to
    become experts in software development and maintenance. They learn and practice skills
    in technical problem-solving, diagnosis, troubleshooting, and programming languages🔥.
</section>
<br>
<section>   
    <h4 class="play">Position 3: Computer Scientist</h4><br>
    <aside></aside>
    <p class="fixT"><strong> National average salary:</strong> 108,521$</p><br>
    <p class="fixT"><strong>Primary duties:</strong> A computer scientist applies their technological skills and resources to solve
    IT problems for businesses. They write new software to complete tasks in a quick and efficient period as well as develop new 
    functions that can be of use for employees or clients. Some computer scientists may also be application developers who help program 
    software to serve users. IT companies heavily rely on computer scientists to create new programming languages and bolster 
    the efficiency of hardware and software programs☁️.
    <p class="fixT"><strong> Requirements:</strong> Most computer scientists need to have a bachelor's degree, but employers may
    require a master's degree as well. Previous work experience may also be valuable to prospective employers💻.
</section> 
<br>
<div class="button-container">
    <a href="apply.php" class="btn">
        <strong>NEXT</strong>
        <div id="container-stars">
            <div id="stars"></div>
        </div>
    </a>
</div>

<?php include_once 'footer.inc'; ?>
</body>
</html>