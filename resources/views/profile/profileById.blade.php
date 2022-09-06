@extends('layouts.app')

@section('content')
    <div class="content-profile-seller">
        <div class="content-info-profile-seller">
            <div class="content-profile-avatar">
                <div class="photo-profile">
                    <img src="{{ URL::asset('assets/img/profile/profile.jpg') }}">
                </div>
                <center><a class="button-login" href="{{ route('users.edit', $user->id) }}">Editar usuario</a></center>
                <button class="button-login">Mensajes</button>
                <button class="button-login buttom-donate">Donar</button>
                <button class="button-login buttom-report">Reportar</button>
            </div>
            <div class="profile-info">
                <h4>{{ $user->name }}</h4>
                @if (!empty($user->getRoleNames()))
                    @foreach ($user->getRoleNames() as $roleName)
                        <h4><span class="">{{ $roleName }}</span></h4>
                    @endforeach
                @endif
                <h4>{{ $user->email }}</h4>
            </div>
            <div class="content-profile-qualification">
                @for ($i = 1; $i <= $qualification; $i++)
                    <img src="{{ URL::asset('assets/img/icons/Star.png') }}" class="star-icon">
                @endfor
            </div>
        </div>

        <div class="content-buttonsProfile-inf">
            <div class="buttons-info-profile">
                <div id="review" class="button-profile selected" onclick="showOptionSelected('review')">
                    Reseñas
                </div>
                <div id="product" class="button-profile" onclick="showOptionSelected('product')">
                    Productos
                </div>
                <div id="history" class="button-profile" onclick="showOptionSelected('history')">
                    Historia
                </div>
            </div>
            <div class="content-description-profile-seller">

                <div id="review-content" class="content-reviews-profile" style="display: block;">

                    <div class="content-buttons-info-profile">
                        <div class="reviews-info-profile">
                            @foreach ($qualifications as $item)
                                <div class="content-card-qualification">
                                    <div class="content-star">
                                        @for ($i = 1; $i <= $item['reviews']; $i++)
                                            <img src="{{ URL::asset('assets/img/icons/Star.png') }}"
                                                class="star-icon-reviews">
                                        @endfor
                                    </div>
                                    <div class="content-comment">
                                        <p>{{ $item['comment'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-content" class="content-products-profile" style="display: none;">
                <div class="product-content">
                    <div class="carousel-products">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($products as $product)
                                    <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                                        <div class="content-carousel-item-product">
                                            <img src="{{ URL::asset($product->image) }}" style="width: 350px;">
                                            <div class="card-carousel-inf">
                                                <br><b>Producto:</b> {{ $product->title }}
                                                <br><b>Descripción:</b> {{ $product->body }}
                                                <div class="card-carousel-buyProducts">
                                                    <input type="number" class="counter-products" min="1" pattern="^[0-9]+" name="amountFood">
                                                    <button class="button-login circle-button" name="buy" onclick="confirmSale()"><u>Comprar</u></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div id="history-content" class="content-history-profile" style="display: none;">
                <div class="content-history-seller">
                    <div class="content-history-seller-withoutImg">
                        <h1>SOY MUY POBRE</h1>
                        <p>Historia troste :C</p>
                    </div>
                    <img src="{{ URL::asset('assets/img/Historia/pobre.jpeg') }}" style="width: 350px;">
                </div>
            </div>
            <div class="f1"></div>
        </div>
    @endsection
