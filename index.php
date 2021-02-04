<?php
?>

<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title>Hakizen's Commissions!</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#commissionStyles"> Styles</a></li>
          <li><a href="#commissionForm">Form</a></li>
          <li><a href="#socials">Social Media</a></li>
          <li><a href="admin.php" class="admin">Admin</a></li>
        </ul>
    <header>
    </header>
        <section id="home">
            <p>
            <h1>HA • KI • ZEN</h1>
            <h2>Commission Info</h2>
            </p>
            <div class="rules">
                <p>
                    - Please describe or link a picture of the character/person you want me to draw!
                    You could also send pictures of character/person to me on Twitter/Insta!
                </p>
                <p>
                    - If you want me to draw them in a specific pose, let me know! Please link a picture
                    or a quick sketch of the pose in the (doesn't matter if it's 'bad'). If you don't
                    have a picture or sketch, please describe it as best as you can.
                </p>
                <p>
                    - Let me know what color background you want
                </p>
            </div>
            <div class="rules">
                <p>
                    Terms of services
                </p>
                <p>
                    I will message you when I start working on your commission.
                    Because of school I may take a maximum of 2 weeks on each commission.
                    Please keep this in mind before commissioning.
                </p>
            </div>
            <!--
                <ul class="buttons">
                    <li><a href="commissionStyles.php">Commission Styles</a></li>
                    <li><a href="forum.php">Commission Here!</a></li>
                </ul>
                -->
        </section>

        <section id="commissionStyles">
            <h2>Commission Styles</h2>
            <img class="images" src="../images/cartoonStyle.jpg" alt="Cartoon">
            <img class="images" src="../images/fulBodyStyle.jpg" alt="Full Body">
            <img class="images" src="../images/90sStyle.jpg" alt="90s Anime">
        </section>

        <section id="commissionForm">
            <h2>Commission Form</h2>
            <div class="rules">
                <h3>Please fill in this form!</h3>
                <p>
                    <label for="name"></label>
                    <input id="name" type="text" name="name" placeholder="Name">
                </p>
                <p>
                    <label for="twitter"></label>
                    <input id="twitter" type="text" name="twitter" placeholder="Twitter">
                </p>
                <p>
                    <label for="email"></label>
                    <input id="email" type="email" name="email" placeholder="E-mail">
                </p>
                <select>
                    <option selected disabled>--Select a style--</option>
                    <option value="1">Cartoon €15,-</option>
                    <option value="2">Full Body €25,-</option>
                    <option value="3">90's Anime €30,-</option>
                </select>
                <p>
                    <label for="description"></label>
                    <textarea id="description" name="description" placeholder="Please enter commission details (´｡• ᵕ •｡`)/)" ></textarea>
                </p>
                <input type="submit" value="Submit Request!" name="submit">
            </div>
        </section>
    </body>
    <footer id="socials">
        <a href="https://twitter.com/hakizenk">Twitter</a>
        <a href="https://www.instagram.com/hakizen/">Instagram</a>
        <a href="https://ko-fi.com/hakizen">Ko-fi</a>
    </footer>
</html>
