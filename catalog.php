<?php $title = "catalog"; ?>
<!-- header -->
<?php include "scripts/header.php";?>

<!-- main -->

<main class="m-page">
        <div class="container">
            <div>
                <div class="title">
                    <h1>Каталог</h1>
                    <div class="block3">
                        <?php
                        echo '<ul>';
                        foreach($catalog as $item) {
                            echo '<li><a href="'.$item['url'].'" ';
                            echo '>'.$item['title'].'</a></li>';
                            if( isset($item['children']) ){
                                echo "<ul class='dr-menu'>";
                                foreach($item['children'] as $child) {
                                    echo "<li><a href=".$child['url'].">".$child['title']."</a></li>";
                                }
                                echo "</ul>";
                            }
                            echo "</li>";
                        };
                        echo '</ul>';
                        ?>
                    </div>
                </div>
                <div class="catalog">
                    <div></div>
                    <span>Новинки</span>
                    <span>Акции</span>
                    <span>Я рекомендую</span>
                    <div class="catalog-icon">
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Доктор Нонна на НТВ в
                                    программе "Наши со Львом
                                    Новоженовым"</p>
                                <div class="price">280 грн.</div>
                                <div class="btn-price"><a href="#" class="btn btn-lg price-btn">Купить</a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Доктор Нонна на НТВ в
                                    программе "Наши со Львом
                                    Новоженовым"</p>
                                <div class="price">280 грн.</div>
                                <div class="btn-price"><a href="#" class="btn btn-lg price-btn">Купить</a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Доктор Нонна на НТВ в
                                    программе "Наши со Львом
                                    Новоженовым"</p>
                                <div class="price">280 грн.</div>
                                <div class="btn-price"><a href="#" class="btn btn-lg price-btn">Купить</a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Доктор Нонна на НТВ в
                                    программе "Наши со Львом
                                    Новоженовым"</p>
                                <div class="price">280 грн.</div>
                                <div class="btn-price"><a href="#" class="btn btn-lg price-btn">Купить</a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Доктор Нонна на НТВ в
                                    программе "Наши со Львом
                                    Новоженовым"</p>
                                <div class="price">280 грн.</div>
                                <div class="btn-price"><a href="#" class="btn btn-lg price-btn">Купить</a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Доктор Нонна на НТВ в
                                    программе "Наши со Львом
                                    Новоженовым"</p>
                                <div class="price">280 грн.</div>
                                <div class="btn-price"><a href="#" class="btn btn-lg price-btn">Купить</a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Доктор Нонна на НТВ в
                                    программе "Наши со Львом
                                    Новоженовым"</p>
                                <div class="price">280 грн.</div>
                                <div class="btn-price"><a href="#" class="btn btn-lg price-btn">Купить</a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Доктор Нонна на НТВ в
                                    программе "Наши со Львом
                                    Новоженовым"</p>
                                <div class="price">280 грн.</div>
                                <div class="btn-price"><a href="#" class="btn btn-lg price-btn">Купить</a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Доктор Нонна на НТВ в
                                    программе "Наши со Львом
                                    Новоженовым"</p>
                                <div class="price">280 грн.</div>
                                <div class="btn-price"><a href="#" class="btn btn-lg price-btn">Купить</a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Доктор Нонна на НТВ в
                                    программе "Наши со Львом
                                    Новоженовым"</p>
                                <div class="price">280 грн.</div>
                                <div class="btn-price"><a href="#" class="btn btn-lg price-btn">Купить</a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Доктор Нонна на НТВ в
                                    программе "Наши со Львом
                                    Новоженовым"</p>
                                <div class="price">280 грн.</div>
                                <div class="btn-price"><a href="#" class="btn btn-lg price-btn">Купить</a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Доктор Нонна на НТВ в
                                    программе "Наши со Львом
                                    Новоженовым"</p>
                                <div class="price">280 грн.</div>
                                <div class="btn-price"><a href="#" class="btn btn-lg price-btn">Купить</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="watch">
                    <h2>Вы смотрели</h2>
                    <div class="watch-icon">
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Шампунь ежедневного пользования</p>
                                <div class="price">280 грн.</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Шампунь ежедневного пользования</p>
                                <div class="price">280 грн.</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Шампунь ежедневного пользования</p>
                                <div class="price">280 грн.</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Шампунь ежедневного пользования</p>
                                <div class="price">280 грн.</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Шампунь ежедневного пользования</p>
                                <div class="price">280 грн.</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picture">
                                <a href="#"><img alt="picture" src="images/layer-1.png" /></a>
                            </div>
                            <div class="text">
                                <p>Шампунь ежедневного пользования</p>
                                <div class="price">280 грн.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>

<!-- footer -->
<?php include "scripts/footer.php";?>
