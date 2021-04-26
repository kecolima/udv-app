<header>
</header>
<body class="col-sm bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img width="200" height="200" ALT="HTML" src="{{url(mix('site/img/udv.png'))}}" alt="">
                <br>
                “O Símbolo da União é Luz, Paz e Amor”
                <br>
                Mestre Gabriel
            </div>
            <div class="col-sm">
                <form action="{{ route('logar_usuario') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Login:</strong>
                                <textarea name="login" id="login" class="form-control" placeholder="Login"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Senha:</strong>
                                <input type="senha" name="senha" id="data" class="form-control" placeholder="Senha">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <a href="" title="">Registrar-se</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<footer class="bg-light text-center text-lg-start fixed-bottom">
@include('site.footer')
</footer>






