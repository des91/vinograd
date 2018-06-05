<?php
    require_once('require/header.php');
?>
    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Виноград Владислава</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Добро пожаловать<br><br>
                    <p class="lead">В 2006 году был посажен виноградник возле дома 220 сортов и гибридных форм селекционеров из России, Украины, 
                        Японии, Китая, США, Италии, Бельгии.</p>
                    <div align="center">
                        <a href="files/catalog/catalog.doc" class="btn btn-primary btn-lg">Скачать каталог товаров</a>
                    </div>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive img-thumbnail" src="content/img/1.JPG" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Телефон</h3>
                    <p class="lead">
                        Иркутск: +7(904)-153-79-24
                    </p>
                    <p class="lead">
                        Крым: +7(978)-100-27-14
                    </p>
                </div>
                <div class="col-md-3">
                    <h3>Email</h3>
                    <p class="lead">
                        <a href="mailto: vladislav0962@inbox.ru" style="font-size: 20px;">vladislav0962@inbox.ru</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <h3>Соцсети</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="lead">
                                <a href="#" target="_blank">
                                    <img src="content/img/ok.png" style="max-height: 70px;">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <h1>Саженцы виноградника Владислава</h1>
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive img-thumbnail" src="content/img/2.JPG" alt="">
                </div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="content/img/1.JPG" alt="" style="max-height: 180px;">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="content/img/2.JPG" alt="" style="max-height: 180px;">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="content/img/3.JPG" alt="" style="max-height: 180px;">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="content/img/4.JPG" alt="" style="max-height: 180px;">
                </div>
            </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Обратная связь</h2><br>
                    <p>Вы можете отправить мне сообщение, заполнив форму обратной связи.
                            Я с радостью отвечу на любые ваши вопросы.</p><br>
                    <form class="form-horizontal" role="form" method="POST" action="index.php">
                        <input type="hidden" name="command" value="send">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name ="name" placeholder="Ваше имя">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ваш email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <textarea class="form-control" name="message" name="message" placeholder="Ваше сообщение">

                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-danger">Отправить</button>
                            </div>
                        </div>
                    </form>
                    <?php
                        if ($_POST['command']=='send')
                        {
                            if (empty($_POST['name']) or empty($_POST['email']) or empty($_POST['message']))
                            {
                                echo '<div class="alert alert-danger col-sm-10" role="alert">Заполните все поля указанной формы</div>';
                            }
                            else
                            {
                                $sql="insert into questions (date_action, name, email, message) values (NOW(), '".$_POST['name']."', '".$_POST['email']."', '".$_POST['message']."')";
                                $execute = mysqli_query($conn, $sql);
                                if ($execute)
                                {
                                    echo '<div class="alert alert-success col-sm-10" role="alert">Ваше обращение успешно отправлено!</div>';
                                }
                                else
                                {
                                    echo '<div class="alert alert-danger col-sm-10" role="alert">Не удалось отправить обращение!</div>';
                                }
                            }
                        }
                    ?>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <iframe src="https://yandex.ru/map-widget/v1/-/CBep7TRvTD" width="560" height="400" frameborder="0"></iframe>
                </div>               
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Виноград Владислава</h2><br>
                    <br>
                    <p>
                        Телефон мобильный: Иркутск: +7(904)-153-79-24, Крым: +7(978)-100-27-14 
                    </p>
                    <p>
                        Email: <a href="mailto: vladislav0962@inbox.ru" style="color: white;">vladislav0962@inbox.ru</a> 
                    </p>
                    <p>
                        Одноклассники: <a href="#" style="color: white;">Троицкий Влад</a> 
                    </p>
                    <p>
                        Крым, Кировский р-он, с. Первомайское, ул. Школьная, дом 49
                    </p>
                    <p>
                        Троицкий Владислав Николаевич
                    </p>
                </div>
                <div class="col-lg-6">

                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.banner -->
<?php
    require_once('require/footer.php');
?>