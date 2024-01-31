
<div class="container mb-dashboard__profile">
    <div class="row justify-content-md-center">
        <div class="col col-lg-5">
            <form wire:submit="save" class="mb-dashboard__form" novalidate>
            <div class="mb-control">
                    <label class="mb-control__label">Assim que queres ser chamado?</label>
                    <input type="text" wire:model="form.name" value="{{$name}}" placeholder="Ex: John" class="mb-control__input mb-control__input--light"/>
                    @error('form.name') <span class="mb-control__error">{{ $message }}</span> @enderror 
                </div>
                <div class="mb-control">
                    <label class="mb-control__label">Digite um novo email</label>
                    <input type="email" wire:model="form.email" value="{{$email}}" placeholder="Ex: john@mb.com" class="mb-control__input mb-control__input--light"/>
                    @error('form.email') <span class="mb-control__error">{{ $message }}</span> @enderror 
                </div>
                <div class="mb-control">
                    <label class="mb-control__label">Se necessário, podes alterar a sua senha.</label>
                    <input type="password" placeholder="E lembre-se, não conte para ninguém ;)" wire:model="form.password" class="mb-control__input mb-control__input--light"/>
                    @error('form.password') <span class="mb-control__error">{{ $message }}</span> @enderror 
                </div>
                <div class="mb-control">
                    <button type="submit" title="Atualizar dados pessoai" class="mb-btn mb-btn--primary">Atualizar dados pessoais</button>
                    <a href="/logout" 
                        class="mb-btn mb-btn--link" 
                        title="Sair desta conta">Sair desta conta
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