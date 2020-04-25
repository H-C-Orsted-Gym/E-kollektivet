var ctx = document.getElementById('chart1').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45]
        }]
    },

    // Configuration options go here
    options: {}
});

var ctx2 = document.getElementById('chart2').getContext('2d');
var chart2 = new Chart(ctx2, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        datasets: [{
			data: [1,2,3,4],
			backgroundColor: [
				'#ff6384',
				'#36a2eb',
				'#cc65fe',
				'#ffce56'
			]
		}],
		labels: [
			'Red',
			'Blue',
			'Purple',
			'Yellow'
		]
    },

    // Configuration options go here
    options: {}
});