<?php include __DIR__ . "/public/header.html.php" ?>

<main>
    <section class="maincontent">
        <section class="aboutus">
            <div class="content">
                <div class="contentimg"><img src="public\assets\img\burger.jpg" alt="burger"></div>
                <div class="text">
                    <h3>Discover</h3>
                    <h2>Our gastronomy</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, mollitia beatae? Doloribus quis et possimus incidunt fugit saepe natus a officiis, earum quae itaque provident, aliquam vel voluptas sequi perferendis.</p>
                    <a href="">See more...<img src="public\assets\img\arrow-right.svg" alt=""></a>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="content">
                <div class="contentimgbis">
                    <img src="public\assets\img\crusted-chicken.jpg" alt="chicken">
                </div>
                <div class="text">
                    <h3>Tasteful</h3>
                    <h2>Recipes made with love</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quia placeat nostrum, et quod hic at in soluta quasi ullam quam dolor! Quia dolorum libero repellendus cumque praesentium animi eum.</p>
                    <a href="">See more...<img src="public\assets\img\arrow-right.svg" alt=""></a>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <section class="menu">
            <div class="menutext">
                <div class="text">
                    <h3>Menu</h3>
                    <h2>Certified bio</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore modi expedita aliquam impedit voluptatem error similique autem aut a, quisquam ut soluta? Neque laudantium maxime libero corrupti sapiente eum dolorum id illum, facere, suscipit non.</p>
                </div>
                <br>
                <br>
                <br>
                <div class="list">
                    <ul>
                        <li>Eggs</li>
                        <li>Porc</li>
                        <li>Chicken</li>
                        <li>Fish</li>
                        <li>Vegan</li>
                    </ul>
                </div>
            </div>
            <div class="menuprice">
                <div class="menucontent">
                    <div class="menudetails">
                        <div class="menucontentimg">
                            <img src="public\assets\img\crusted-chicken-square.jpg" alt="">
                        </div>
                        <div class="menucontenttext">
                            <h2>Amazing Crusted Chicken</h2>
                            <p class="menup">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            </p>
                            <h3>$20</h3>
                        </div>
                    </div>
                    <div class="menudetails">
                        <div class="menucontentimg">
                            <img src="public\assets\img\bobun-light-square.jpg" alt="">
                        </div>
                        <div class="menucontenttext">
                            <h2>BoBun Light Odd</h2>
                            <p class="menup">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <h3>$20</h3>
                        </div>
                    </div>
                    <div class="menudetails">  
                        <div class="menucontentimg">
                            <img src="public\assets\img\poisson-square.jpg" alt="">
                        </div>
                        <div class="menucontenttext">
                            <h2>Amazing Crusted Fish</h2>
                            <p class="menup">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                            </p>
                            <h3>$20</h3>
                        </div>
                    </div>
                    <div class="menudetails">
                        <div class="menucontentimg">
                            <img src="public\assets\img\paella-square.jpg" alt="">
                        </div>
                        <div class="menucontenttext">
                            <h2>Spicy Egg paella</h2>
                            <p class="menup">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <h3>$20</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <br>
            <br>
            <br>
        <section class="chef">
            <div class="cheftext">
                <h3>Chef</h3>
                <br>
                <h2>Meet our executive chef, christian jacob</h2>
                <br>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque a itaque ipsa consequatur amet voluptas veritatis minima perspiciatis animi harum, ad ipsum earum minus molestiae! Ad, libero officiis? Doloremque repudiandae maxime adipisci reiciendis sapiente. Dignissimos fugiat qui corrupti magnam nostrum!
                    <br>
                    <br>                
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, maiores qui! Voluptates fugiat illo id doloribus. Numquam minima et deleniti.
                </p>
                <br>
                <br>
                <br>
                <br>
                <a href="">See the cooks...<img src="public\assets\img\arrow-right.svg" alt=""></a>
            </div>
            <div class="chefimg">
                <img src="public\assets\img\chief.jpg" alt="chef">
            </div>
        </section>
    </section>
    <section class="reservation">
        <div class="content">
            <br>
            <br>
            <h3>Reservation</h3>
            <br>
            <h2>Make reservation</h2>
            <br>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit voluptates vero natus magni illo voluptate quibusdam officiis distinctio sunt iusto, sapiente quae veritatis ad eligendi quia animi iste porro. Beatae.
            </p>
            <br>
            <form action="">
                <label for="fullname"></label>
                <input type="text" placeholder="FULLNAME (FOCUS)">
                <label for="nbpersons" placeholder="FOR 2 PERSONS"></label>
                <input list="nbpersons" name="nbpersons" id="nbpersons">
                <datalist id="nbpersons">
                    <option value="FOR 2 PERSONS">
                    <option value="FOR 3 PERSONS">
                    <option value="FOR 4 PERSONS">
                    <option value="FOR 5 PERSONS">
                    <option value="FOR MORE THAN 6">
                </datalist>
                <label for="date"></label>
                <input type="date" id="date" name="date">
            </form>
        </div>
    </section>
</main>

