import './bootstrap';
import Chart from 'chart.js/auto'

(function(){

    let currentChart = null;
    let currentViewMode = 'table';

    const delay = ms => new Promise(resolve => setTimeout(resolve, ms));

    const createChart = async datas => {

        await delay(200);

        currentChart = new Chart(
            document.getElementById('acquisitions'),
            {
              type: 'line',
              data: {
                labels: datas.map(row => `${row.currency} ${row.base_symbol}`),
                datasets: [
                  {
                    label: 'Preço',
                    data: datas.map(row => row.price)
                  }
                ]
              }
            }
        );
    }

    const changeGraph = ( [ event ] ) => {
    
        if(!currentChart) 
            return;

        const newDatas = event.cryptos;

        currentChart.data.labels = newDatas.map(row => `${row.currency} ${row.base_symbol}`);

        currentChart.data.datasets[0].data = newDatas.map(row => row.price);

        currentChart.update();
    }

    const watchViewMode = ( [ event ] ) => {

        currentViewMode = event?.mode;

        if(!!currentChart) {
            currentChart.destroy();
            currentChart = null;
        }
        
        if(event?.mode === 'graph')
            createChart(event.cryptos);
    }

    const bootstrap = () => {

        window.Livewire.on('toggleView', watchViewMode)
        window.Livewire.on('changeGraph', changeGraph)
    }

    document.addEventListener('livewire:init', bootstrap)
})()