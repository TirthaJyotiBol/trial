import './index.php';
function getData(){

    fetch("https://covid-19-india2.p.rapidapi.com/details.php", {
	    "method": "GET",
	    "headers": {
		"x-rapidapi-host": "covid-19-india2.p.rapidapi.com",
		"x-rapidapi-key": "fe3c2e3a48mshe9904984e461d13p1156f4jsndcd6e7ff76eb"
	    }
    })
    .then(response => {
        return response.json();
    })
    .then(data => {
        return data;
    //  console.log(data);
    })
    .catch(err => {
	    console.error(err);
    });

    }

getData();

