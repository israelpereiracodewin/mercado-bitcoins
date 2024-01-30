

@assets
    <link href="{{ asset('build/assets/login.css') }}" rel="stylesheet">
@endassets

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-lg-5">
            <form wire:submit="save" class="mb-auth__form" novalidate>
                <div class="mb-control">
                    <label class="mb-control__label">Digite o seu email</label>
                    <input type="email" wire:model="form.email"  placeholder="Ex: john@mb.com" class="mb-control__input mb-control__input--dark"/>
                    @error('form.email') <span class="mb-control__error">{{ $message }}</span> @enderror 
                </div>
                <div class="mb-control">
                    <label class="mb-control__label">Senha</label>
                    <input type="password" placeholder="123456" wire:model="form.password" class="mb-control__input mb-control__input--dark"/>
                    @error('form.password') <span class="mb-control__error">{{ $message }}</span> @enderror 
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
