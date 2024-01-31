
<section>    
    <header class="mb-dashboard__header">
        <form class="mb-dashboard__form-search" novalidate>
            <div class="mb-dashboard__fields">
                <div class="mb-control mb-dashboard__fields--search">
                    <input type="text" placeholder="Pesquisar..." 
                        wire:model.live="search" class="mb-control__input mb-control__input--search">
                </div>
                <div class="mb-control mb-dashboard__fields--quotes">
                    <select wire:model.live="quote" class="mb-control__select mb-control__select--select">
                        <option value="">Filtrar por cotação</option>
                        @foreach ($quotes as $quote)    
                            <option wire:key="{{ $quote->id }}" value="{{$quote->symbol}}">{{$quote->symbol}}</option>
                        @endforeach 
                    </select>
                </div>
            </div>
            <nav class="mb-dashboard__nav-view-modes" aria-label="Navegar pelos modos de visualização">
                <ul class="mb-dashboard__view-modes">
                    <li class="mb-dashboard__view-mode">
                        <button     
                            class="mb-dashboard__view-mode-btn"
                            title="Tabela"
                            type="button" wire:click="showTable">Tabela
                        </button>
                    </li>
                    <li class="mb-dashboard__view-mode">
                        <button 
                            class="mb-dashboard__view-mode-btn"
                            title="Gráfico"
                            type="button" wire:click="showGraph">Gráfico
                        </button>
                    </li>
                </ul>
            </nav>
            <div wire:loading>
                <div class="mb-loading">
                    <figure class="mb-loading__figure">
                        <img src="{{ asset('imgs/logo.png') }}" class="mb-loading__img" alt="Mb logo"/>
                    </figure>
                </div><!-- SVG loading spinner -->
            </div>
        </form>
       
    </header>
    
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-6 ">
                <div class="mb-dashboard__content">                   
                    @if ($viewMode === 'table')
                        <table class="mb-dashboard__table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Cotação</th>
                                    <th>Ultimo preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cryptos  as $index => $crypto)
                                    <tr wire:key="{{ $crypto->id }}">
                                        <td>#{{ $index + 1 }}</td>
                                        <td>{{ $crypto->currency }} {{ $crypto->base_symbol }}</td>
                                        <td>{{ $crypto->quote_symbol }}</td>
                                        <td>${{ $crypto->price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @elseif ($viewMode === 'graph')
                        <div style="width: 100%"><canvas id="acquisitions"></canvas></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>