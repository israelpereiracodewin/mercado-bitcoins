
@assets
    <link href="{{ asset('build/assets/register.css') }}" rel="stylesheet">
@endassets

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-lg-5">
            <form wire:submit="save" class="mb-auth__form" novalidate>
            <div class="mb-control">
                    <label class="mb-control__label">O seu nome</label>
                    <input type="text" wire:model="form.name" placeholder="Ex: John" class="mb-control__input mb-control__input--dark" />
                    @error('form.name') <span class="mb-control__error">{{ $message }}</span> @enderror 
                </div>
                <div class="mb-control">
                    <label class="mb-control__label">Digite o seu email</label>
                    <input type="email" wire:model="form.email" placeholder="Ex: john@mb.com" class="mb-control__input mb-control__input--dark" />
                    @error('form.email') <span class="mb-control__error">{{ $message }}</span> @enderror 
                </div>
                <div class="mb-control">
                    <label class="mb-control__label">A sua senha.</label>
                    <input type="password" placeholder="E não conte para ninguém ;)" wire:model="form.password" class="mb-control__input mb-control__input--dark" />
                    @error('form.password') <span class="mb-control__error">{{ $message }}</span> @enderror 
                </div>
                <div class="mb-control">
                    <button type="submit" title="Autenticar" class="mb-btn mb-btn--primary">Registar</button>
                    <a href="/login" 
                        wire:navigate
                        class="mb-btn mb-btn--link" 
                        title="Autenticar">Autenticar
                    </a>
                </div>
                <div wire:loading>
                    <div class="mb-loading">
                        <figure class="mb-loading__figure">
                            <img src="{{ asset('imgs/logo.png') }}" class="mb-loading__img" alt="Mb logo"/>
                        </figure>
                    </div><!-- SVG loading spinner -->
                </div>
            </form>
        </div>
    </div>
</div>
