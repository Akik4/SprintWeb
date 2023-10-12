let ctx = document.getElementById('myChart').getContext('2d');
let ctx1 = document.getElementById('myChart2').getContext('2d');


let data = {
    labels: ["lorem", "lorem"],
    datasets : [{
        label: "Joueur Inscrits",
        data: [20, 80],
        backgroundColor: [
            '#27ae60',
            '#e74c3c',
          ],
    }]

}

let myChart = new Chart(ctx, {
    type: "doughnut",
    data: data,
    options: {
        responsive: true,
        plugin: {
            labels:{
                render: 'percentage',
            }
        }
    }
})



let data2 = {
    labels: ["lorem", "lorem"],
    datasets : [{
        label: "Joueur Inscrits",
        data: [30, 70, 23],
        backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            '#8e44ad'
          ],
    }]

}

let myChart2 = new Chart(ctx1, {
    type: "doughnut",
    data: data2,
    options: {
        responsive: true,
        plugin: {
            labels:{
                render: 'percentage',
            }
        }
    }
})