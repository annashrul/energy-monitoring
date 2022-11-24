<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
    <title>ENERGY MONITORING</title>
    <link href="" rel="icon" type="image/x-icon" />

    {{-- <link href="fe/src/assets/img/favicon.ico" rel="icon" type="image/x-icon" /> --}}
    <link href="{{ asset('fe/src/assets/img/favicon.ico') }}" rel="icon" type="image/x-icon" />
    <link href="{{ asset('fe/layouts/vertical-dark-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet" />
    <link href="{{ asset('fe/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/layouts/vertical-dark-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/layouts/vertical-dark-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/src/assets/css/dark/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/src/assets/css/dark/components/font-icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/src/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/src/assets/css/light/components/list-group.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/src/assets/css/dark/components/list-group.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/src/assets/css/light/widgets/modules-widgets.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/src/assets/css/dark/widgets/modules-widgets.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/src/assets/css/light/widgets/modules-widgets.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/src/assets/css/dark/apps/mailbox.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/src/plugins/css/light/apex/custom-apexcharts.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/src/plugins/css/dark/apex/custom-apexcharts.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/src/plugins/src/vanillaSelectBox/vanillaSelectBox.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('fe/src/plugins/css/light/vanillaSelectBox/custom-vanillaSelectBox.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('fe/src/plugins/css/dark/vanillaSelectBox/custom-vanillaSelectBox.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('fe/src/assets/css/light/elements/infobox.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/src/assets/css/dark/elements/infobox.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .p-0 {
            padding: 0 !important;
        }

        .pl-10 {
            padding-left: 10px !important;
        }

        .pr-10 {
            padding-right: 10px !important;
        }

        .pt-3 {
            padding-top: 3px !important;
        }

        .pb-10 {
            padding-bottom: 10px !important;
        }

        .pr-0 {
            padding-right: 0 !important;
        }

        .w-100 {
            width: 100% !important;
        }

        .color-label-gauge {
            display: flex;
            align-items: center;
            vertical-align: middle;
            text-align: center;
            align-content: center;
        }

        .status-color-label-gauge {
            height: 20px;
            width: 20px;
        }

        button.btn-no-hover:hover {
            background-color: transparent !important;
            box-shadow: none !important;
        }

        button.btn-no-hover {
            background-color: transparent !important;
            box-shadow: none !important;
            margin-bottom: 5px !important;
            margin-top: 5px !important;
            align-items: center !important;
            vertical-align: middle !important;
            align-content: center !important;
            font-weight: bold !important;
            cursor: default !important;
        }

        body.dark .btn-outline-secondary:hover {
            color: #805dca !important;
        }

        body.dark .btn-outline-secondary {
            border: none !important;
            font-size: 18px !important;
            padding: 0 !important;
        }

        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }

        .widget-content-area>p {
            border-radius: 7px !important;
            color: #888ea8 !important;
        }

        body.dark .widget-card-four .progress-bar:before {
            background-color: transparent !important;
        }

        .bold {
            font-weight: bold !important;
        }

        .ml-0 {
            margin-left: 0 !important;
        }

        .mt-0 {
            margin-top: 0 !important;
        }

        .green {
            color: green !important;
        }

        .white {
            color: white !important;
        }

        .fs-14 {
            font-size: 14px !important;
        }

        .fs-17 {
            font-size: 17px !important;
        }

        .fs-20 {
            font-size: 20px !important;
        }

        .fs-34 {
            font-size: 34px !important;
        }

        .hr-location {
            margin-bottom: 5px !important;
            margin-top: 5px !important;
        }

        .mtm-20 {
            margin-top: -20px !important;
        }

        .zoom {
            zoom: 90% !important;
        }

        .bg-green {
            background-color: green !important;
        }

        .bs-none {
            box-shadow: none !important;
        }

        .first-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1050;
            background: rgba(168, 168, 168, .5)
        }

        .first-loader img {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px
        }
    </style>
</head>

<body class="layout-boxed mb-5" style="zoom:95%">
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <div class="main-container p-0" id="container">
        <div id="content" class="main-content ml-0 mt-0 p-0">
            <div class="layout-px-spacing ml-0">
                <div class="middle-content container-xxl p-0">
                    <div class="row layout-top-spacing">
                        <div class="col-12 col-xs-12 col-md-12 zoom mb-3"
                            style="display: flex;justify-content: space-between;">
                            <h3 class="text-left bold">Energy Monitoring Dashboard</h3>
                            <select id="select-location" onchange="changeLocation()"></select>
                        </div>

                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 zoom">
                        <div class="row">
                            <div class="col-7 col-xs-7 col-md-8">
                                <div class="widget widget-card-four">
                                    <div class="widget-content">
                                        <div class="w-header">
                                            <div class="w-info">
                                                <h5 class="value bold">Daily Consumption</h5>
                                            </div>
                                            <div class="task-action bold" style="cursor: pointer;"
                                                onclick="setDailyConsumption()">
                                                <i data-feather="info"></i>
                                            </div>
                                        </div>
                                        <div class="w-info bold" id="title-progress"></div>
                                        <div class="w-progress-stats" style="margin-top: -5px" id="value-progress">
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="widget widget-wallet-one mt-3">
                                    <ul class="list-group list-group-media" id="group-container"></ul>
                                </div>
                            </div>
                            <div class="col-5 col-xs-5 col-md-4">
                                <div class="row">
                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="widget widget-table-one pb-0">
                                            <div class="widget-heading">
                                                <i data-feather="info"></i>
                                                <div class="task-action bold" id="notif"
                                                    style="font-size: 16px;text-align: right;">

                                                </div>
                                            </div>
                                            <div class="widget-content mtm-20">
                                                <div class="transactions-list pb-3" id="filter-location-container">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                        <div class="widget widget-table-one">
                                            <div class="widget-heading">
                                                <h5 class="">Uptime & Status</h5>
                                                <div class="task-action">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#"><i
                                                                data-feather="alert-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content mtm-20">
                                                <div class="transactions-list" id="uptime-container"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                        <div class="widget widget-chart-three">
                            <div class="widget-heading">
                                <div class="">
                                    <h5 class="">Electric Consumption</h5>
                                </div>
                                <div class="dropdown ">
                                    <select id="select-location-filter-electric-consumption"
                                        onchange="changeLocation($(this).val())"></select>
                                    <select id="select-location-filter-electric-consumption-periode"
                                        onchange="changePeriodeElectricConsumption()"></select>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div id="electric-consumption-chart"></div>
                                <div id="electric-consumption-chart-monthly"></div>
                                <div id="electric-consumption-chart-daily"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                        <div class="widget widget-chart-three">
                            <div class="widget-heading">
                                <div class="">
                                    <h5 class="">Total Gentani ( KWH / Unit )</h5>
                                </div>
                            </div>
                            <div class="widget-content" style="padding-left: 20px;padding-right:20px">
                                <div id="electric-consumption-chart-total"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('fe/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('fe/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('fe/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="https://unpkg.com/chart.js@2.8.0/dist/Chart.bundle.js"></script>
    <script src="{{ asset('fe/src/plugins/src/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('fe/src/plugins/src/font-icons/feather/feather.min.js') }}"></script>
    <script src="{{ asset('fe/layouts/vertical-dark-menu/loader.js') }}"></script>
    <script src="{{ asset('fe/src/plugins/src/vanillaSelectBox/vanillaSelectBox.js') }}"></script>
    <script>
        let img =
            "https://raw.githubusercontent.com/annashrul/siijid/d41c362eb636e4bc31ea3d420626cd81407b6f71/assets/spin.svg";

        let dataMonth = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        let dataLocation = ["Press Shop 1", "Welding Shop 1", "Toso Plant 1", "Assembly Plant 1", "Quality Plant 1",
            "Other"
        ];
        let dataElectricYearly = [1694, 9362, 3494, 5139, 9028, 2100, 9524, 3918, 9424, 5160, 0, 0];
        let dataElectricMonthly = [2733, 8486, 3929, 5133, 6286, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0
        ];
        let dataElectricDaily = [6860, 7587, 9511, 1413, 3544, 3277, 5249, 7390, 1299, 434, 9218, 8075, 9424, 5160, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0
        ];
        let dataElectricGentani = [Math.random() * 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        let noYearly = 9;
        let noMonthly = 4;
        let noDaily = 0;
        let noGentani = 0;
        let noDailyConsumption = 1;
        const interval = 1000;
        const intervalDaily = 3600000;
        let isTrueGentani = false;
        const strSelectPeriode = 'select-location-filter-electric-consumption-periode';
        const strElectricConsumption = 'electric-consumption-chart';
        const block = {
            "display": "block"
        };
        const none = {
            "display": "none"
        };

        window.onload = function() {
            feather.replace();
            setNotif();
            tempProgress();
            group();
            filterLocation();
            uptimeStatus();
            widgetAvg();
            filterChartElectricConsumption();
            getChartElectricConsumptionDaily();
            getChartElectricConsumptionTotal();
            changePeriodeElectricConsumption();
            realtimeProgress();
            insertDaily();
            checkInsert();

            // setInterval(function() {
            //     getDaily();

            //     console.log("satu menit")
            // }, 60000)

            var date = new Date();

            setTimeout(function() {
                setInterval(function() {
                    getDaily();
                    console.log("satu menit")
                }, 60000);
            }, (60 - date.getSeconds()) * 1000);
            // setAbnotmality()


        };

        async function setResolve() {
            const myData2 = {
                problem_id: "ECO-001",
            }

            const response = await fetch('http://172.16.0.21:38011/alert/resolve', {
                method: 'POST',
                body: JSON.stringify(myData2), // string or object
                headers: {
                    'Content-Type': 'application/json'
                }
            });
            const myJson = await response.json(); //extract JSON from the http response
            console.log(myJson);
        }

        function setAbnotmality() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "http://172.16.0.21:38011/alert/alert",
                type: "POST",
                data: {
                    sequence_name: "ENERGY MONITORING",
                    problem_detail: "Energy consumption was over capacity up to 13.600 MWh",
                    problem_id: "ECO-001",
                    action: "please check"
                },
                // beforeSend: function() {
                //     $('body').append('<div class="first-loader"><img src="' + img + '"></div>')
                // },
                // complete: function() {
                //     $('.first-loader').remove()
                // },
                dataType: "JSON",
                success: function(res) {
                    // console.log(res);
                    // getDaily();

                }
            })
        }


        function calculatePercent(h, m, s) {
            const hours = h;
            const minute = m;
            let i = 0;
            const arrTime = ['5:0', '10:0', '15:0', '20:0', '25:0', '30:0', '35:0', '40:0', '45:0', '50:0', '55:0', '0:0'];
            let jam = Number(hours);
            let menit = Number(minute) + "0";
            let newHours = jam - 1;
            let newArr = [];
            for (let x = 0; x < arrTime.length; x++) {
                if (arrTime[x] === "0:0" || hours === "0") {
                    jam = 1;
                }
                let rplc = Number(arrTime[x].replaceAll(":", ""));
                if (rplc < Number(menit)) {
                    newArr.push(arrTime[x])
                }
            }
            let totalCalculate = arrTime.length * Number(hours) + newArr.length;
            totalCalculate = totalCalculate / 288 * 1
            if (Number(hours) === 0) {
                i = i + newArr.length / 288 * 60;
            } else {
                i = i + totalCalculate * (60 / 100 * 100);
            }

            const totalLoop = arrTime.length * Number(hours) + newArr.length
            let angkaDefault = totalLoop * 41.6666666667;

            return {
                total: angkaDefault,
                percent: i,
                arrTime: arrTime
            }
        }


        function realtimeProgress(isTrue = true) {
            const timeNow = new Date();
            const hours = timeNow.getHours();
            const minute = timeNow.getMinutes();
            const second = timeNow.getSeconds();
            const base = calculatePercent(hours, minute, second);

            let i = base.percent;
            let angkaDefault = base.total;

            //  getDaily()
            let timers = setInterval(() => {

                const currentDate = new Date();
                const h = currentDate.getHours();
                const m = currentDate.getMinutes();
                const s = currentDate.getSeconds();
                const baseTrue = calculatePercent(h, m, s);
                // console.log("current time", `${h}:${m}:${s}`);
                if (noDailyConsumption !== 1) {
                    clearTimeout(timers);
                } else {
                    let isTrue = false;
                    for (let key = 0; key < baseTrue.arrTime.length; key++) {
                        if (baseTrue.arrTime[key] === `${m}:${s}`) {
                            isTrue = true;
                            break;
                        }
                    }

                    if (`${m}:${s}` === "0:0" || i > 60) {
                        clearTimeout(timers);
                        angkaDefault = 0;
                        realtimeProgress();
                        setNotif();
                        tempProgress(angkaDefault, "0", "green", "bg-success");
                    } else {
                        if (isTrue) {
                            const baseTrues = calculatePercent(h, m, s);
                            angkaDefault = baseTrues.total;
                            angkaDefault = angkaDefault + 41.6666666667;
                            i = baseTrues.percent;
                        }

                        setNotif();
                        tempProgress(angkaDefault.toFixed(0), i.toFixed(1), "green", "bg-success");
                    }
                }
            }, 1000);
        }

        function getTotal() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                contentType: 'application/json; charset=utf-8',
                url: "{{ route('get_yearly') }}",
                type: "GET",
                dataType: "JSON",
                // beforeSend: function() {
                //     $('body').append('<div class="first-loader"><img src="' + img + '"></div>')
                // },
                // complete: function() {
                //     $('.first-loader').remove()
                // },
                success: function(response) {
                    const newData = response['series'];
                    let Theme = "dark";
                    Apex.tooltip = {
                        theme: Theme
                    };
                    let options = {
                        colors: ['green'],
                        chart: {
                            fontFamily: "Nunito, sans-serif",
                            height: 350,
                            type: "area",
                            zoom: {
                                enabled: false
                            },
                            dropShadow: {
                                enabled: true,
                                opacity: 0.2,
                                blur: 10,
                                left: -7,
                                top: 22,
                            },
                            toolbar: {
                                show: false
                            },
                        },

                        stroke: {
                            show: true,
                            width: 2,
                            curve: "smooth",
                            lineCap: "square",
                        },
                        dataLabels: {
                            enabled: false
                        },
                        series: [{
                            name: '',
                            data: newData
                        }, ],
                        labels: dataMonth,
                        xaxis: {
                            axisBorder: {
                                show: false,
                            },
                            axisTicks: {
                                show: false,
                            },
                            crosshairs: {
                                show: true,
                            },
                            labels: {
                                offsetX: 0,
                                offsetY: 0,
                                style: {
                                    fontSize: "12px",
                                    fontFamily: "Nunito, sans-serif",
                                    cssClass: "apexcharts-xaxis-title",
                                },
                            },
                        },
                        yaxis: {
                            labels: {
                                formatter: function(value, index) {
                                    return value;
                                },
                                offsetX: -15,
                                offsetY: 0,
                                style: {
                                    fontSize: "12px",
                                    fontFamily: "Nunito, sans-serif",
                                    cssClass: "apexcharts-yaxis-title",
                                },
                            },
                        },
                        grid: {
                            strokeDashArray: 5,
                            xaxis: {
                                lines: {
                                    show: false,
                                },
                            },
                            yaxis: {
                                lines: {
                                    show: false,
                                },
                            },
                            padding: {
                                top: -50,
                                right: 0,
                                bottom: 0,
                                left: 5,
                            },
                        },
                        legend: {
                            position: "top",
                            horizontalAlign: "right",
                            offsetY: -50,
                            fontSize: "12px",
                            fontFamily: "Nunito, sans-serif",
                            fontWeight: "bold",
                            markers: {
                                width: 2,
                                height: 10,
                                strokeWidth: 0,
                                strokeColor: "#fff",
                                fillColors: undefined,
                                radius: 12,
                                onClick: undefined,
                                offsetX: -5,
                                offsetY: 0,
                            },
                            itemMargin: {
                                horizontal: 10,
                                vertical: 20,
                            },
                        },
                        tooltip: {
                            x: {
                                show: false,
                            },
                            y: {
                                show: false,
                            },
                        },
                        fill: {
                            type: "gradient",
                            gradient: {
                                type: "vertical",
                                shadeIntensity: 1,
                                inverseColors: !1,
                                opacityFrom: 0.19,
                                opacityTo: 0.05,
                                stops: [100, 100],
                            },
                        },
                        responsive: [{
                            breakpoint: 767,
                            options: {
                                chart: {
                                    fontFamily: "Nunito, sans-serif",
                                    type: "area",
                                    zoom: {
                                        enabled: false
                                    },
                                    dropShadow: {
                                        enabled: true,
                                        opacity: 0.2,
                                        blur: 10,
                                        left: -7,
                                        top: 22,
                                    },
                                    toolbar: {
                                        show: false
                                    },
                                },
                                legend: {
                                    offsetY: -50,
                                },
                            },
                        }, ],
                    };
                    let chart = new ApexCharts(
                        document.querySelector(`#${strElectricConsumption}-total`),
                        options
                    );
                    chart.render();
                    chart.updateSeries([{
                        data: response['series']
                    }]);
                }
            });
        }

        function getYearly() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('get_yearly') }}",
                contentType: 'application/json; charset=utf-8',
                type: "GET",
                dataType: "JSON",
                // beforeSend: function() {
                //     $('body').append('<div class="first-loader"><img src="' + img + '"></div>')
                // },
                // complete: function() {
                //     $('.first-loader').remove()
                // },
                success: function(response) {
                    let res = tempChartConsumptionPeriode(dataMonth, response['series']);
                    var chart = new ApexCharts(
                        document.querySelector(`#${strElectricConsumption}`),
                        res
                    );
                    chart.render();
                    chart.updateSeries([{
                        data: response['series']
                    }]);
                }
            });
        }

        function getMonthly() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                contentType: 'application/json; charset=utf-8',
                url: "{{ route('get_monthly') }}",
                type: "GET",
                dataType: "JSON",
                // beforeSend: function() {
                //     $('body').append('<div class="first-loader"><img src="' + img + '"></div>')
                // },
                // complete: function() {
                //     $('.first-loader').remove()
                // },
                success: function(response) {
                    const labelDaily = [];
                    for (let i = 0; i < 30; i++) {
                        if (i < 9) {
                            labelDaily.push(`0${i+1}`);
                        } else {
                            labelDaily.push(`${i+1}`);
                        }
                    }
                    let res = tempChartConsumptionPeriode(response['tanggal'], response['series']);
                    var chart = new ApexCharts(
                        document.querySelector(`#${strElectricConsumption}-monthly`),
                        res
                    );
                    chart.render();
                    chart.updateSeries([{
                        data: response['series']
                    }]);
                }
            });
        }

        function getDaily() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                contentType: 'application/json; charset=utf-8',
                url: "{{ route('get_daily') }}",
                type: "GET",
                dataType: "JSON",
                // beforeSend: function() {
                //     $('body').append('<div class="first-loader"><img src="' + img + '"></div>')
                // },
                // complete: function() {
                //     $('.first-loader').remove()
                // },
                success: function(response) {
                    console.log("######################### GET DAILY ############################")
                    const labelDaily = [];
                    for (let i = 1; i < 25; i++) {
                        if (i < 9) {
                            labelDaily.push(`0${i}:00`);
                        } else {
                            labelDaily.push(`${i}:00`);
                        }
                    }
                    let def = tempChartConsumptionPeriode(labelDaily,
                        response, 'daily');
                    var chart = new ApexCharts(
                        document.querySelector(
                            `#${strElectricConsumption}-daily`),
                        def
                    );
                    chart.render();
                    chart.updateSeries([{
                        data: response
                    }]);
                    getTotal();
                }
            });
        }

        function checkInsert() {
            const currentDate = new Date();
            const h = currentDate.getHours();
            let newData = [];
            for (let i = 0; i < Number(h); i++) {
                let newHours = i;
                if (`${i}`.length === 1) {
                    newHours = `0${i}`
                }
                newData.push(newHours);
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('insertFirst') }}",
                type: "POST",
                data: {
                    series: Math.random() * 10000,
                    idx: newData
                },
                // beforeSend: function() {
                //     $('body').append('<div class="first-loader"><img src="' + img + '"></div>')
                // },
                // complete: function() {
                //     $('.first-loader').remove()
                // },
                dataType: "JSON",
                success: function(res) {
                    console.log("############################### INSERT DAILY ############################")
                    getDaily();

                }
            })
            // console.log(newData)
        }


        function insertDaily() {
            setInterval(() => {
                const currentDate = new Date();
                const h = currentDate.getHours();
                const m = currentDate.getMinutes();
                const s = currentDate.getSeconds();

                console.log(`${h}:${m}:${s}`)
                let arr = [];
                for (let i = 0; i < 24; i++) {
                    if (i < 10) {
                        arr.push(`0${i}:0:0`);
                    } else {
                        arr.push(`${i}:0:0`);
                    }
                }

                const newArr = arr.filter((res) => res.includes(`${h}:${m}:${s}`));
                if (newArr.length > 0) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('insert') }}",
                        type: "POST",
                        data: {
                            series: Math.random() * 10000,
                            idx: h
                        },
                        // beforeSend: function() {
                        //     $('body').append('<div class="first-loader"><img src="' + img + '"></div>')
                        // },
                        // complete: function() {
                        //     $('.first-loader').remove()
                        // },
                        dataType: "JSON",
                        success: function(res) {
                            getDaily();

                        }
                    })
                }
            }, 1000)


        }

        function tempProgress(title = '0', val = '0', color = 'green', bgName = 'bg-success') {
            $("#notif").css({
                'color': color
            });
            let titleHtml = `<p class="value bold fs-34" style="color:${color}">${title} <span>mW/h</span></p>`;
            let valueHtml = `<div class="progress" style="background-color:#0a0d26">
                <div class="progress-bar ${bgName} bs-none" role="progressbar" style="width:${val}%" aria-valuenow="${val}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="w-icon">
                <p class="bold" style="color:${color}">${val}%</p>
            </div>`;
            $("#title-progress").html(titleHtml);
            $("#value-progress").html(valueHtml)
        }

        function setNotif(label = 'Normal Condition', value = 'no abnormality condition\n') {
            $("#notif").html(`${label} <br><span id="value-notif" style="color:white">${value}</span>`)
        }

        function setDailyConsumption() {
            console.log(noDailyConsumption)
            if (noDailyConsumption === 1) {
                noDailyConsumption = 0
                setNotif("Warning", "90%");
                tempProgress("13.600", "90", "#e7515a", "bg-danger");
                realtimeProgress(false);
                setAbnotmality()
                return;
            }
            // if (noDailyConsumption === 2) {
            //     setAbnotmality()
            //     setNotif("Critical", "90%");
            //     noDailyConsumption = 0;
            //     tempProgress("13.600", "90", "#e7515a", "bg-danger");
            //     realtimeProgress(false);
            //     return;
            // }
            if (noDailyConsumption === 0) {
                setResolve();
                noDailyConsumption = noDailyConsumption + 1;
                setNotif();
                tempProgress();
                realtimeProgress(false);

            }
        }

        // **************************************************
        // start Filter Location
        // **************************************************
        function changeLocation(val) {
            checkInsert()
        }
        // **************************************************
        // end Filter Location
        // **************************************************

        // **************************************************
        // start Chart Electric Consumption
        // **************************************************
        function changePeriodeElectricConsumption() {
            isTrueGentani = true;
            const val = $(`#${strSelectPeriode}`).val();
            let yearly = $(`#${strElectricConsumption}`);
            let monthly = $(`#${strElectricConsumption}-monthly`);
            let daily = $(`#${strElectricConsumption}-daily`);
            yearly.css(none);
            monthly.css(none);
            daily.css(none);
            if (val === "monthly") {
                // getMonthly();
                monthly.css(block);
                getChartElectricConsumptionMonthly();
            } else if (val === "yearly") {
                // getYearly();
                yearly.css(block);
                getChartElectricConsumptionYearly();
            } else {
                daily.css(block);
                getChartElectricConsumptionDaily();
            }
            getChartElectricConsumptionTotal(true)

        }

        function tempChartConsumptionPeriode(label, data) {
            return {
                chart: {
                    height: 250,
                    type: 'bar',
                    toolbar: {
                        show: false,
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded',
                        borderRadius: 10,
                    },
                },
                dataLabels: {
                    enabled: false
                },
                legend: {
                    position: 'bottom',
                    horizontalAlign: 'center',
                    fontSize: '14px',
                    markers: {
                        width: 10,
                        height: 10,
                        offsetX: -5,
                        offsetY: 0
                    },
                    itemMargin: {
                        horizontal: 10,
                        vertical: 8
                    }
                },
                grid: {
                    borderColor: '#191e3a',
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                series: [{
                    name: '',
                    data: data
                }, ],
                xaxis: {
                    categories: label,
                },
                colors: ['green'],
                yaxis: {
                    labels: {
                        formatter: function(value, index) {
                            return value + " mW/h";
                        },
                        style: {
                            fontSize: "12px",
                            fontFamily: "Nunito, sans-serif",
                            cssClass: "apexcharts-yaxis-title",
                        },
                    },
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        type: 'vertical',
                        shadeIntensity: 0.3,
                        inverseColors: false,
                        opacityFrom: 1,
                        opacityTo: 0.8,
                        stops: [0, 100]
                    }
                },
                tooltip: {
                    marker: {
                        show: false,
                    },
                    y: {
                        formatter: function(val) {
                            return val + " mW/h"
                        }
                    }
                },
                responsive: [{
                    breakpoint: 767,
                    options: {
                        chart: {
                            type: 'bar',
                            toolbar: {
                                show: false,
                            }
                        },

                    },
                }],
            };
        }

        function getChartElectricConsumptionDaily(isUpdate) {
            getDaily()
        }

        function getChartElectricConsumptionMonthly(isUpdate) {
            getMonthly();
        }

        function getChartElectricConsumptionYearly(isUpdate) {
            getYearly();
        }

        function getChartElectricConsumptionTotal() {
            getTotal()

        }
        // **************************************************
        // start Energy Capacity & Target Limit
        // **************************************************
        function group() {
            let html = "";
            const data = [{
                    title: "Energy Capacity",
                    desc: "mW/h",
                    value: "20.000 mW/h"
                },
                {
                    title: "Average Cost",
                    desc: "Rp / Unit",
                    value: "Rp. 604.201"
                },
                {
                    title: "Average Production Unit",
                    desc: "Unit",
                    value: "9.8 Unit"
                },
            ];
            data.map((res, i) => {
                html += `<li class="list-group-item">
                <div class="media">
                    <div class="me-3">
                        <i data-feather="zap"></i>
                    </div>
                    <div class="media-body">
                        <h5 class="tx-inverse bold">${res.title}</h5>
                        <p class="mg-b-0 bold">( ${res.desc} )</p>
                        <h6 class="amount bold">${res.value}</h6>
                    </div>
                </div>
            </li>`;
                html += data.length - 1 === i ? `` : "<hr style='margin-bottom: 14px'/>";
            });
            $("#group-container").html(html);
        }
        // **************************************************
        // end Energy Capacity & Target Limit
        // **************************************************
        function filterChartElectricConsumption() {
            let selectHtml = "";
            let selectPeriodeHtml = ["Daily", "Monthly", "Yearly"];
            dataLocation.map((res) => {
                selectHtml += `<option value="${res.toLowerCase().replaceAll(" ","_")}">${res}</option>`;
            });
            selectPeriodeHtml.map((res) => {
                selectPeriodeHtml += `<option value="${res.toLowerCase().replaceAll(" ","_")}">${res}</option>`;
            });
            document.getElementById("select-location-filter-electric-consumption").innerHTML = selectHtml;
            document.getElementById(`${strSelectPeriode}`).innerHTML = selectPeriodeHtml;
            new vanillaSelectBox("#select-location-filter-electric-consumption", {
                "keepInlineStyles": true,
                "maxHeight": 200,
                "minWidth": 200,
                "search": true,
                "placeHolder": "All"
            });
            new vanillaSelectBox(`#${strSelectPeriode}`, {
                "keepInlineStyles": true,
                "maxHeight": 200,
                "minWidth": 210,
                "search": true,
                "placeHolder": "Daily"
            });

        }
        // **************************************************
        // start Filter Location
        // **************************************************
        function filterLocation() {
            let selectHtml = "";
            dataLocation.map((res) => {
                selectHtml += `<option value="${res.toLowerCase().replaceAll(" ","_")}">${res}</option>`;
            });
            document.getElementById("select-location").innerHTML = selectHtml;
            new vanillaSelectBox("#select-location", {
                "keepInlineStyles": true,
                "maxHeight": 200,
                "minWidth": 210,
                "search": true,
                "placeHolder": "Karawang 1"
            });


        }
        // **************************************************
        // end Filter Location
        // **************************************************

        // **************************************************
        // start Uptime & Status
        // **************************************************
        function uptimeStatus() {
            let html = "";
            dataLocation.map((res, i) => {
                const isTrue = dataLocation.length - 1 === i;
                html += `<div class="t-item">
                <div class="t-company-name">
                    <div class="t-name">
                        <h4>${res}</h4>
                        <p class="meta-date bold">6h 37m</p>
                    </div>
                </div>
                <div class="t-rate rate-dec">
                    <span class="p-0 bold group-list">
                        <a class="pr-0 nav-link list-actions g-dot-${
                isTrue ? "success" : "success"
                }"><p class="fs-14 white bold pt-3">${isTrue ? "ON" : "ON" }</p></a>
                    </span>
                </div>
            </div>
            ${isTrue ? "" : '<hr class="hr-location">'}`;
            });
            $("#uptime-container").html(html);
        }
        // **************************************************
        // end Uptime & Status
        // **************************************************

        // **************************************************
        // start  average widget
        // **************************************************
        function widgetAvg() {
            let html = "";
            let data = [{
                    data1: ["Today", "Avg Today"]
                },
                {
                    data2: ["Month", "Avg Month"]
                },
            ];
            data.map((row, j) => {
                html += `<div class="col-6 col-xs-6 col-md-6"><div class="widget widget-card-four">`;
                row[`data${j + 1}`].map((res, i) => {
                    html += `<div class="widget-content">
                        <div class="w-header">
                            <div class="w-info"><h5 class="value bold">${res}</h5></div>
                            <div class="task-action bold">+0% Than Yesterday</div>
                        </div>
                        <div class="w-content">
                            <div class="w-info bold">
                                <p class="value fs-34 green bold">8.000 <span>mW / h</span> </p>
                            </div>
                        </div>
                    </div>${
                    row[`data${j + 1}`].length - 1 === i ? "" : "<hr/>"
                    }`;
                });
                html += `</div></div>`;
            });
            $("#avg-container").html(html);
            // document.getElementById("avg-container").innerHTML = html;
        }
        // **************************************************
        // end  average widget
        // **************************************************
    </script>
</body>

</html>
