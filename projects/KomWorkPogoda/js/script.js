/* функція відпрацьовує після вибору Міста у select */
function fun1() {
    var sel = document.getElementById("mySelect").selectedIndex;
    var options = document.getElementById("mySelect").options;

    // console.dir(options[sel].attributes);
    // console.log(options[sel].attributes[1].value);

    /* у додаткових атрибутах тега  option прописуємо широту і долготу кожного Міста */
    let latitude = options[sel].attributes[1].value;
    let longitude = options[sel].attributes[2].value;
    let dataApidaily = "";
    let dataApihourly = "";

    // сервіс API погоди https://open-meteo.com/en/docs
    let url =
        "https://api.open-meteo.com/v1/forecast?latitude=" +
        latitude +
        "&longitude=" +
        longitude +
        "&hourly=temperature_2m,relativehumidity_2m,apparent_temperature,precipitation,surface_pressure,windspeed_10m,soil_temperature_0cm,soil_moisture_0_1cm&daily=temperature_2m_max,temperature_2m_min,apparent_temperature_max,apparent_temperature_min,sunrise,sunset,precipitation_sum,rain_sum,precipitation_hours,windspeed_10m_max,windgusts_10m_max,winddirection_10m_dominant&timezone=Africa%2FCairo";

    // let nameCity = document.querySelector("#nameCity");
    let temperature = document.querySelector("#v1");
    let minMaxTemp = document.querySelector("#v2");
    let rainSum = document.querySelector("#v4");
    let WindSpeed = document.querySelector("#v5");
    let Sunrise = document.querySelector("#v6");
    let Sunset = document.querySelector("#v7");
    let dateNow = document.querySelector("#dateNow");

    /* запрашуємо дані з API */
    fetch(url)
        .then((response) => response.json())
        .then((result) => {
            dataApidaily = result.daily;
            dataApihourly = result.hourly;
            // дістаємо потрібне значення
            //   let tempNow = result.current_weather.temperature;
            let dateApi = dataApidaily.time[0];
            let temperature1Apimin = dataApidaily.temperature_2m_min[0];
            let temperature1Apimax = dataApidaily.temperature_2m_max[0];
            let temperature2Apimin = dataApidaily.apparent_temperature_min[0];
            let temperature2Apimax = dataApidaily.apparent_temperature_max[0];

            let rainSumApi = dataApidaily.rain_sum[0];
            let precipitationSumApi = dataApidaily.precipitation_sum[0];
            let WindSpeedApi = dataApidaily.windspeed_10m_max[0];

            let sunriseApi = dataApidaily.sunrise[0];
            let sunsetApi = dataApidaily.sunset[0];

            //   nameCity.innerHTML = options[sel].text;
            dateNow.innerHTML = "Сьогодні<br>" + dateApi;
            temperature.innerHTML =
                "від " +
                temperature1Apimin +
                " до " +
                temperature1Apimax +
                " " +
                result.daily_units.temperature_2m_max;

            minMaxTemp.innerHTML =
                "від " +
                temperature2Apimin +
                " до " +
                temperature2Apimax +
                " " +
                result.daily_units.temperature_2m_max;

            rainSum.innerHTML =
                rainSumApi +
                " / " +
                precipitationSumApi +
                " " +
                result.daily_units.rain_sum;
            WindSpeed.innerHTML =
                WindSpeedApi + " " + result.daily_units.windspeed_10m_max;

            Sunrise.innerHTML = sunriseApi;
            Sunset.innerHTML = sunsetApi;

            //  alert(data);

            //       alert(dataArray.time.length);
            //   let array = [];

            let xValues = [];
            let yValues = [];
            for (let i = 0; i < 24; i++) {
                let row = [];
                let H = new Date(
                    String(dataApihourly.time[i] + "Z")
                ).getUTCHours();
                //  console.log(H);
                /*
                let M = new Date(
                    String(result.hourly.time[i] + "Z")
                ).getMonth(); 
                let DM = D + "." + M; */
                xValues.push(H);
                yValues.push(dataApihourly.temperature_2m[i]);
                // console.log(result.hourly.temperature_2m[i]);
                // array.push(row);
                //    let test = new Date(String(dataArray.time[i] + "Z")).getDate();
                //    console.log(test);
            }
            //  console.log(yValues.length);
            //  console.log(array[0]);
            // console.log(array);
            //   console.log(new Date("2022-11-29T00:00Z"));
            // let myChart = document.querySelector("#myChart1");
            //  var xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
            //  var yValues = [7, 8, 8, 9, 9, 19, 10, 11, 14, 14, 15];
            //        console.log(xValues);
            // графік теорія https://www.w3schools.com/js/js_graphics_chartjs.asp

            var chartTemperature = document
                .getElementById("v3")
                .getContext("2d");
            let chartData = {
                type: "bar",
                data: {
                    labels: xValues,
                    datasets: [
                        {
                            fill: false,
                            //   fillColor: "#fff",
                            //   strokeColor: "#fff",
                            lineTension: 0,
                            backgroundColor: "rgba(0,0,255,1.0)",
                            borderColor: "rgba(0,0,255,0.1)",
                            data: yValues,
                        },
                    ],
                },

                options: {
                    legend: { display: false },
                    scales: {
                        //    yAxes: [{ ticks: { min: 6, max: 20 } }],
                    },
                    // для коректного масштабування
                    responsive: true,
                    maintainAspectRatio: false,
                },
            };

            // рышення щоб при оновленні діаграми не зявлялись старі дані на графіку як наводиш курсор
            //  https://stackoverflow.com/questions/43490743/chartjs-mouse-hover-bug-showing-previous-charts
            if (typeof Graph === "undefined") {
                window.Graph = new Chart(chartTemperature, chartData);
            } else {
                //updating with new chart data
                window.Graph.config = chartData;
                //redraw the chart
                window.Graph.update();
            }
        });
}
