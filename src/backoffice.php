<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts.css">
    <title>userName</title>
</head>
<body>
    <main class="user-body">
        <section class="user-space">
            <div class="user-banner">
                <img src="assets/images/profiles/profiles_banner/cyberpunk-night-city2.jpg" alt="">
            </div>


            <div class="user-panel">
                <article class="user-profile">
                    <div class="user-pics">
                        <div class="user-info">
                            <span class="user-name">Judy Alvarez</span>
                            <span class="user-title">Space-Child</span>
                        </div>
                        <img src="assets/images/profiles/profiles_pictures/cute-anime-girl-R.jpg" width="300px" height="500px" alt="profile-pics">
                            <div class="user-btn-panel">
                                <a href="user.php"><button>My Profile</button></a>
                                <a href="friendslist.php"><img src="assets/images/icones/Friend List(1).png" width="35px" alt=""></a>
                                <a href=""><img src="assets/images/icones/Wishlist.png" width="35px" alt=""></a>
                                <a href=""><img src="assets/images/icones/GearWhite-Small-icon01.png" width="35px" alt=""></a>
                            </div>                    
                    </div>
                    <div class="user-about">
                        <h3>About Me</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id ex  felis. Ut sapien orci, dictum sed massa eu, euismod tincidunt tellus.  Curabitur eget ex cursus, hendrerit dui sed, auctor metus. Aliquam  blandit a nisi a auctor. In at ex nec nunc maximus consequat in ac  magna. Nunc diam magna, eleifend sed fermentum ut, iaculis id ante.  Mauris vel quam non mauris maximus fermentum. Quisque porta et mauris  quis sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id ex  felis. Ut sapien orci, dictum sed massa eu, euismod tincidunt tellus.  Curabitur eget ex cursus, hendrerit dui sed, auctor metus. Aliquam  blandit a nisi a auctor. In at ex nec nunc maximus consequat in ac  magna. Nunc diam magna, eleifend sed fermentum ut, iaculis id ante.  Mauris vel quam non mauris maximus fermentum. Quisque porta et mauris  quis sollicitudin.</p>
                    </div>
                    <div class="user-social-media">
                        <a href="#"><img src="assets/images/icones/Mediainstagram.png" width="35px" alt="instagram-icon"></a>
                        <a href="#"><img src="assets/images/icones/Mediafacebook.png" width="35px" alt="facebook-icon"></a>
                        <a href="#"><img src="assets/images/icones/X-twitter.png" width="35px" alt="twitter-icon"></a>
                        <a href="#"><img src="assets/images/icones/steam.png" width="35px" alt="steam-icon"></a>
                        <a href="#"><img src="assets/images/icones/twitch.webp" width="35px" alt="twitch-icon"></a>
                        <a href="#"><img src="assets/images/icones/SL.png" width="35px" alt="SL-icon"></a>
                    </div>
                </article>


                <article class="backoffice-panel">
                    <div class="backoffice-intro">
                        <h1>Add Books</h1>
                        <div class="divider"></div>
                        <div class="add-books-panel">
                            <div>
                                <span>Title:</span> <input type="text">
                            </div>
                            <div>
                                <label for="dropdown">Choose an option:</label>
                                    <select id="dropdown" name="options">
                                        <option value="option1">Completed</option>
                                        <option value="option2">Ongoing...</option>
                                    </select>
                            </div>
                            <div>
                                <span>Number of published volumes:</span> <input type="number" min="1" max="300">
                            </div>
                        </div>



                        </div>
                    </div>
                </article>





            </div>
        </section>
    </main>
    <footer>
            <p>© Copyright 2024 De Meyer Guilain. Tous droits réservés.</p>
            <p>Plan du site | Mentions légales | Politique de confidentialité</p>
            <p>Special thanks</p>
    </footer>
</body>
<script src="script.js"></script>
</html>