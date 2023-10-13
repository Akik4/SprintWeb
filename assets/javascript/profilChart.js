let graph = document.getElementById('graph').getContext('2d');
let graph1 = document.getElementById('graph1').getContext('2d');
let graph2 = document.getElementById('graph2').getContext('2d');

let graphData = {
    labels: ["monday", "tuesday", "wednesday", "thursday", "friday","saturday","Sunday" ],
    datasets : [{
        label: "temps de jeu sur les 7 derniers jours",
        data: [3, 1, 5, 2, 1, 1, 9],
        backgroundColor: [
            '#fbc531',
            '#4cd137',
            '#e84118',
            '#fbc531',
            '#4cd137',
            '#4cd137',
            '#e84118',
          ],
    }]

}
let graphData1 = {
    labels: ["Won", "Loose"],
    datasets : [{
        data: [230, 99],
        backgroundColor: [
            '#27ae60',
            '#e84118',
            
          ],
    }]

}
let graphData2 = {
    labels: ["easy", "medium", "hard"],
    datasets : [{
        label: "Levels",
        data: [20, 34, 23 ],
        backgroundColor: [
            '#4cd137',
            '#fbc531',
            '#e84118',
          ],
    }]

}

let stat = new Chart(graph, {
    type: "bar",
    data: graphData,
    options: {
        responsive: true,
    }
})
let statCamembert = new Chart(graph1, {
    type: "pie",
    data: graphData1,
    options: {
        responsive: true,
    }
})
let statCamembert2 = new Chart(graph2, {
    type: "pie",
    data: graphData2,
    options: {
        responsive: true,
    }
})