@extends('layouts.main')

@section('title')
    Контакт
@endsection

@section('content')
    <div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Обратная связь</h2>
                <p>Seamlessly predominate enterprise metrics without performance based process improvements.</p>
            </div>
        </div>
        <div class="breadcrumb-img-1">
            <img src="{{ asset('assets/front/img/about/breadcrumb-1.png') }}" alt="">
        </div>
        <div class="breadcrumb-img-2">
            <img src="{{ asset('assets/front/img/about/breadcrumb-2.png') }}" alt="">
        </div>
    </div>
    <div class="contact-us-area pt-160 pb-160">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="contact-form-area contact-form-padding bg-gray">
                        <h2>Связаться</h2>
                        <form id="contact-form" action="https://demo.hasthemes.com/dking-preview/dking/assets/mail-php/mail.php" method="post">
                            <div class="single-contact-form">
                                <input name="name" type="text" placeholder="Ваше имя (необязательно, но для удобства были бы рады его узнать)">
                            </div>
                            <div class="single-contact-form">
                                <input name="email" type="email" placeholder="Ваш e-mail (обязательно, но никаких рассылок без вашего согласия!) *">
                            </div>
                            <div class="single-contact-form">
                                <input name="phone" type="text" placeholder="Тел.номер (необязательно, и даже если оставите, то сразу удалим после разрешения вопроса)">
                            </div>
                            <div class="single-contact-form">
                                <textarea name="message" placeholder="Ваше сообщение *" spellcheck="false"></textarea>
                                <p>* Обязательные поля</p>
                                <button class="submit" type="submit">Отправить</button>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="contact-info-area">
                        <div class="single-contact-info">
                            <div class="contact-info-title">
                                <h4>Head Quater</h4>
                            </div>
                            <p>2055 Niagara Falls Blvd, Amherst NY 14228</p>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-info-title">
                                <h4>Contact with</h4>
                            </div>
                            <p>info@yourdomain.com</p>
                            <p>(+68) 120034509</p>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-info-title">
                                <h4>Follow us</h4>
                            </div>
                            <ul>
                                <li><a href="contact-us.html#"><i class="icon-social-twitter"></i></a></li>
                                <li><a href="contact-us.html#"><i class="icon-social-pinterest"></i></a></li>
                                <li><a href="contact-us.html#"><i class="icon-social-instagram"></i></a></li>
                                <li><a href="contact-us.html#"><i class="icon-social-facebook-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
