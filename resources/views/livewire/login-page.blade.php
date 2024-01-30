

@assets
    <link href="{{ asset('build/assets/login.css') }}" rel="stylesheet">
@endassets

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-lg-5">
            <form action="" class="mb-auth__form">
                <div class="mb-control">
                    <label class="mb-control__label">Digite o seu email</label>
                    <input type="email" name="email" placeholder="Ex: john@mb.com" class="mb-control__input"/>
                </div>
                <div class="mb-control">
                    <label class="mb-control__label">Senha</label>
                    <input type="password" placeholder="123456" name="password" class="mb-control__input"/>
                </div>
                <div class="mb-control">
                    <button type="submit" title="Autenticar" class="mb-btn mb-btn--primary">Autenticar</button>
                    <a href="/register" 
                        wire:navigate
                        class="mb-btn mb-btn--link" 
                        title="Preciso registar-me">Preciso registar-me
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
