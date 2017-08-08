<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>
    <main>
        <section class="site-content">
            <div class="strip"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-sm-4 col-12">
                        <div class="picture-left float-xl-left float-lg-none">
                            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExample" data-slide-to="1"></li>
                                    <li data-target="#carouselExample" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/slide1.png" alt="First slide" width="330px" height="584px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/slide2.png" alt="Second slide" width="330px" height="584px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/slide3.png" alt="Third slide" width="330px" height="584px">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-sm-8 col-12 text-sm-left text-center">
                        <div class="content-right d-inline-block">
                            <h1 class="text-uppercase">Push yourself & your designs</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="content-button float-sm-right float-none text-uppercase border-0">
                                <a href="#" class="d-inline-block text-center">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="feedback">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-4 col-md-0">
                    </div>
                    <div class="col-xl-7 col-lg-8 col-sm-12">
                        <form class="feedback-form d-inline-block float-left w-100" action="#" method="post">
                            <h2 class="text-left">Let's talk</h2>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-fullname w-100">
                                        <div class="form-name d-inline-block w-100">
                                            <input type="text" name="name" id="name-field" placeholder="Your name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-surname d-inline-block w-100">
                                        <input type="text" name="surname" id="surname-field" placeholder="Your surname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-details">
                                        <div class="form-email d-inline-block w-100">
                                            <input type="text" name="email" id="email-field" placeholder="Your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-volume d-inline-block w-100">
                                        <select name="volume" id="volume-field">
                                            <option disabled selected>Application Design</option>
                                            <option value="Landing">Landing</option>
                                            <option value="Medium difficulty">Medium difficulty</option>
                                            <option value="Premium">Premium</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-comment d-inline-block w-100">
                                        <textarea name="comment" id="comment-field" rows="5" placeholder="Describe your request here"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-sm-center text-center">
                                    <div class="form-checkbox w-100">
                                        <h2>Subscription to:</h2>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="agreement d-inline-block">
                                                    <input type="checkbox"  class="checkbox" id="checkbox-1" name="checkbox-1" value="News and updates" checked>
                                                    <label for="checkbox-1">News and updates</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="negation d-inline-block">
                                                    <input type="checkbox" class="checkbox" id="checkbox-2" name="checkbox-2" value="Contact with me">
                                                    <label for="checkbox-2">Contact with me</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 text-sm-center text-center">
                                    <div class="form-button float-md-right float-sm-none d-inline-block">
                                        <button type="submit" class="text-uppercase">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>