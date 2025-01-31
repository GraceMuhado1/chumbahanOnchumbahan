<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chums Live</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link href="spins.css" rel="stylesheet">
    
    <link href="fireworks.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.0.2.js" integrity="sha256-0u0HIBCKddsNUySLqONjMmWAZMQYlxTRbA8RfvtCAW0="
        crossorigin="anonymous"></script>
</head>

<body class=bgimage>

    <style>
.clickspin{
    position:relative;
    top:-6px
}


        #label{
    width: 506px;
    height: 119px;
    top: -442px;
    /* left: 28px; */
    display: block;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    text-align:center;
  }
  #label .chosen{
    font-size: 44px;
    font-weight: bold;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; 
    color: #491313;
  }

.mod-btn div{
    
    margin-left: auto;
    margin-right: auto;
}

@media only screen and (max-width: 650px){
.navbar{
    height: 90px;
}
    .home{
    display:block;
  }
  .home img{
    width: 14%;
    float: right;
    top: -55px;
    position: relative;
  }

  .chumlogo{
    width:17%
  }
}

  </style>

    </head>

    <body>

        <!DOCTYPE html>
        <html>

        <body>

            <div id="chumbahanWheel">
                <div class ="chumbahanContent" style = "position:relative;top:27px">
                <div class="chum-title">
                    <img src="img/chumbahan/header.png" class="chumtext-title">

                </div>

                <div class="hideobject" id="wheelObject"></div>
                <div class="hideobject_two" id="wheelObject2"></div>

                <div id="chart">

                    <p id="objects"></p>
                    <img src="img/chum.png" id="logo-wheel">

                    <div class="clickspin">
                        <img src="img/chumbahan/front.jpg">
                    </div>
                </div>

                <div id="label">
                    <!-- <h3 align="center"> </h3> -->
                    <div class="chosen"> </div>

                </div>
                </div>
            </div>
            <div class="row mod-btn">
           
                <div class="col-12 col-md-auto">
                <form action="https://chums.live/chumbahan/" data-confirm="Are you sure to reset the wheel?" class="col-12 col-md-auto">
                    <a class="page-scroll"> <button class="btn modify-btn" style="background-color:#eb8d33">
                            Reset Wheel </button></a>
               
                            </form>
                        </div>
     
                <div class="col col-lg-2">


                    <a href="#custom-choices" class="page-scroll" id="modifybtn"> <button class="btn modify-btn" style="background-color:#eb8d33">Modify
                            Wheel</button></a>

                </div>

            </div>

            <div class="modify-box card card-personal" id="custom-choices">
                <div class="container1">
                    <div>
                        <img src="img/chumbahan/wheelbuilder.png" class="title-builder">

                    </div>
                    <ul class="list-group">

                        <!-- <li class="list-group-item modify-title"><img src="img/chumbahan/wheelbuilder.png"></li> -->
                    </ul>
                    <div class="set-input">
                        <!-- <a style="color:white">Choices (enter up to 100 choices):</a> -->

                        <div class="custom-input">
                            <input type="text" class="cat_textbox inputtxt " id="addID" name="CAT_Custom_410672"
                                maxlength="100" value="0" style="display:none" />
                            <div class="input-group mb-3 " for="p_scnts" style="border-radius: 15px;">

                                <input type="text" id="p_scnt" size="20" name="p_scnt" class="form-control addtext inputtxt"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2" style="border-radius: 15px;">

                                <div class="input-group-append">
                                    <span class="remove-btn" id="remove1">X</span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input id="textbox2" type="text" class="form-control addtext inputtxt" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2" style="border-radius: 15px;">

                                <div class="input-group-append">
                                    <span class="remove-btn" id="remove2">X</span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input id="textbox3" type="text" class="form-control addtext inputtxt" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2" style="border-radius: 15px;">

                                <div class="input-group-append">
                                    <span class="remove-btn" id="remove3">X</span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input id="textbox4" type="text" class="form-control addtext inputtxt" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2" style="border-radius: 15px;">

                                <div class="input-group-append">
                                    <span class="remove-btn" id="remove4">X</span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input id="textbox5" type="text" class="form-control addtext inputtxt" aria-label="Recipients username"
                                    aria-describedby="basic-addon2" style="border-radius: 15px;">

                                <div class="input-group-append">
                                    <span class="remove-btn" id="remove5">X</span>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="small button secondary addChoices "> <button class="btn modify-btn " id="clickAdd"
                                style="background-color:#eb8d33">Add Choices</button></a>

                        <a href="#chumbahanWheel" class="small button secondary apply-btn " id="submitChoices"> <button
                                class="btn modify-btn clrbtn " style="background-color:#eb8d33">APPLY CHANGES</button></a>
                        <!-- 
                        <a href="#chart" id="submitChoices"> <button class="btn young-passion-gradient apply-btn">Apply
                                Wheel
                                Changes</button></a>
                                 -->

                        <div id="winner" class="winContainer"> </div>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-1.9.1.js" integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA="
                crossorigin="anonymous"></script>


            <script src="https://code.jquery.com/jquery-1.9.1.js" integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA="
                crossorigin="anonymous"></script>

            <script>
            </script>

            <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
            <script type="text/javascript" charset="utf-8">

                function getTheData() {
                    var some = document.getElementsByClassName("some");
                    var inputValues = new Array();

                    for (i in some) {
                        //extract the value of input elements
                        var singleVal = some[i].value;
                        if (singleVal !== "" && singleVal !== undefined) {
                            inputValues.push(singleVal);
                        }
                    }


                    var showVals = document.getElementById('chart');

                    //Convert to string format to see the output easily 
                    var stringFormat = String(inputValues);
                    showVals.innerHTML = stringFormat;
                    console.log(inputValues);
                }


                var padding = { top: 50, right: 40, bottom: 0, left: 50 },
                    w = 500 - padding.left - padding.right,
                    h = 600 - padding.top - padding.bottom,

                    r = Math.min(w, h) / 2,
                    rotation = 0,
                    oldrotation = 0,
                    picked = 100000,
                    oldpick = [],
                    color = d3.scale.category20();//category20c()
                //randomNumbers = getRandomNumbers();
                //http://osric.com/bingo-card-generator/?title=HTML+and+CSS+BINGO!&words=padding%2Cfont-family%2Ccolor%2Cfont-weight%2Cfont-size%2Cbackground-color%2Cnesting%2Cbottom%2Csans-serif%2Cperiod%2Cpound+sign%2C%EF%B9%A4body%EF%B9%A5%2C%EF%B9%A4ul%EF%B9%A5%2C%EF%B9%A4h1%EF%B9%A5%2Cmargin%2C%3C++%3E%2C{+}%2C%EF%B9%A4p%EF%B9%A5%2C%EF%B9%A4!DOCTYPE+html%EF%B9%A5%2C%EF%B9%A4head%EF%B9%A5%2Ccolon%2C%EF%B9%A4style%EF%B9%A5%2C.html%2CHTML%2CCSS%2CJavaScript%2Cborder&freespace=true&freespaceValue=Web+Design+Master&freespaceRandom=false&width=5&height=5&number=35#results

                let data = [];
                $(document).ready(function () {

                    $("#remove1").click(function () {
                        $("#remove1").remove();
                        $("#p_scnt").remove();
                    });

                    $("#remove2").click(function () {
                        $("#remove2").remove();
                        $("#textbox2").remove();

                    });

                    $("#remove3").click(function () {
                        $("#remove3").remove();
                        $("#textbox3").remove();
                    });

                    $("#remove4").click(function () {
                        $("#remove4").remove();
                        $("#textbox4").remove();
                    });


                    $("#remove5").click(function () {
                        $("#remove5").remove();
                        $("#textbox5").remove();
                    });

                    $("#modifybtn").click(function () {
                        $(".clickspin").remove();

                    });

                
 

                    var max_fields = 50;
                    var wrapper = $(".custom-input");
                    var add_button = $(".addChoices");
                    var oldValue = $('#addID');
                    var newVal;
                    var x = 1;
                    $(add_button).click(function (e) {
                        e.preventDefault();
                        newVal = parseFloat(oldValue.val()) + 1;
                        if (x < max_fields) {
                            x++;
                            $(wrapper).append(
                                $('<div class="input-group mb-3 "  for="chums_textbox_"><input  type="text" style = "border-radius: 15px;" class="form-control addtext inputtxt"  aria-label="Recipients username" aria-describedby="basic-addon2" id="chums_textbox_' + $('#addID').val() + '" name="chums_textbox_' + $('#addID').val() + '" value=""  /><div class="input-group-append removetxtbox" id = "removeLose"><span class="remove-btn remove-input"   >X</span> </div> </div> ')

                            );

                            console.log('id="chums_textbox_' + $('#addID').val() + '"');
                            console.log('id="chums_delete_' + $('#addID').val() + '"');

                            $('body').on('click', '.removetxtbox', function () {
                                $(this).parent('div.mb-3').remove()

                            })
                        }
                        oldValue.val(newVal);
                    });
                })


                $("a[href^='#']").click(function (e) {
                    e.preventDefault();

                    var position = $($(this).attr("href")).offset().top;

                    $("body, html").animate({
                        scrollTop: position
                    } /* speed scroll href */);
                });


            
                    $(document).on('click', ':not(form)[data-confirm]', function(e){
    if(!confirm($(this).data('confirm'))){
      e.stopImmediatePropagation();
      e.preventDefault();
		}
});

$(document).on('submit', 'form[data-confirm]', function(e){
    if(!confirm($(this).data('confirm'))){
    	e.stopImmediatePropagation();
      e.preventDefault();
		}
});
                 

                document.getElementById('chart').onclick = function (i) {
                    var query = $('#losewheel');
                    var isVisible = query.is(':visible');
                    var ishidden = query.is(':hidden');


                    if (data.length < 3) {      //SET THE WINNER
                       
                        $("#label").hide();
                            $("#losewheel").hide();
                        setTimeout(function () {
                            $("#label").hide();
                            $("#losewheel").hide();

                            data.splice(picked, 1);

                            document.getElementById("chart").innerHTML = data;
                            var svg = d3.select('#chart')
                                .append("svg")
                                .data([data])
                                .attr("width", w + padding.left + padding.right)
                                .attr("height", h + padding.top + padding.bottom);
                            var container = svg.append("g")
                                .attr("class", "chartholder")
                                .attr("transform", "translate(" + (w / 2 + padding.left) + "," + (h / 2 + padding.top) + ")");
                            var vis = container
                                .append("g");

                            var pie = d3.layout.pie().sort(null).value(function (d) { return 1; });
                            // declare an arc generator function
                            var arc = d3.svg.arc().outerRadius(r);
                            // select paths, use arc generator to draw
                            var arcs = vis.selectAll("g.slice")
                                .data(pie)
                                .enter()
                                .append("g")
                                .attr("class", "slice");

                            arcs.append("path")
                                .attr("fill", function (d, i) { return color(i); })
                                .attr("d", function (d) { return arc(d); });
                            // add the text
                            arcs.append("text").attr("transform", function (d) {
                                d.innerRadius = 0;
                                d.outerRadius = r;
                                d.angle = (d.startAngle + d.endAngle) / 2;
                                return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")translate(" + (d.outerRadius - 10) + ")";
                            })
                                .attr("text-anchor", "end")
                                .style({ "font-weight": "bold", "font-size": "15px" })
                                .text(function (d, i) {
                                    return data[i].label;
                                });
                            container.on("click", spin);
                            function spin(d) {
                                var ps = 360 / data.length,

                                rng = Math.floor((Math.random() * 1440) +  2000);
                                rotation = (Math.round(rng / ps) * ps);

                                picked = Math.round(data.length - (rotation % 360) / ps);
                                picked = picked >= data.length ? (picked % data.length) : picked;

                                rotation += 360 - Math.round(ps / 2);

                                vis.transition()
                                    .duration(14000)
                                    .attrTween("transform", rotTween)
                                    .each("end", function () {
                                        //mark question as seen
                                        d3.select(".slice:nth-child(" + (picked + 1) + ") path")

                                        //populate question
                                        d3.select("#label  .chosen")
                                            .text(data[picked].label)
                                            .style({ "align": "center" });
                                        // oldrotation = rotation;

                                        // container.append('svg:image')
                                        //     .attr({
                                        //         'xlink:href': 'img/chumbahan/loseframe.png',  // can also add svg file here
                                        //         x: -250,
                                        //         y: -180,
                                        //         width: 500,
                                        //         height: 350,
                                        //         'id': 'losewheel'

                                        //     })
                                        //     .attr("id", "losewheel")

                                        // $("#label").show();

                                        container.on("click", spin);
                                    });
                            }

                            container.append("text")
                                .attr("x", 0)
                                .attr("y", 45)
                                .attr("text-anchor", "middle")
                                // .text("SPIN")
                                .style({ "font-weight": "bold", "font-size": "30px" });
                            container.append('svg:image')
                                .attr({
                                    'xlink:href': 'img/chumbahan/wheel_frame.png',  // can also add svg file here
                                    x: -330,
                                    y: -260,
                                    width: 660,
                                    height: 500
                                });


                            function rotTween(to) {
                                //   var i = d3.interpolate(oldrotation % 360, rotation);
                                var i = d3.interpolate(oldrotation % 360, rotation);
                                return function (t) {
                                    return "rotate(" + i(t) + ")";
                                };
                            }


                            function getRandomNumbers() {
                                var array = new Uint16Array(1000);
                                var scale = d3.scale.linear().range([360, 1440]).domain([0, 100000]);
                                if (window.hasOwnProperty("crypto") && typeof window.crypto.getRandomValues === "function") {
                                    window.crypto.getRandomValues(array);
                                    console.log("works");
                                } else {
                                    //no support for crypto, get crappy random numbers
                                    for (var i = 0; i < 1000; i++) {
                                        array[i] = Math.floor(Math.random() * 100000) + 1;
                                    }
                                }
                                return array;
                            }

                        },15000);

                        setTimeout(function () {
                            // window.location.reload(1);
                            $("#label").hide();
                            $(".clrbtn").hide();
                            var wrapwinner = $('#winner'), container;
                            for (var key in data) {
                                container = $('<div class="container"></div>');
                                wrapwinner.append(container);

                                container.append(' <div class="pyro" id ="winCon">  <div class="before"></div>  <div class="after"></div><div><div class="category label-win">' + data[key].label + '</div> <div > <img src = "img/chumbahan/congrats.png" class = "win-bg"> </div>');
                            }

     
                            // var lockBtn = document.getElementById("submitChoices");
                            //     lockBtn.disabled = true;
                            // // $('#submitChoices').attr("disabled", true);

                        }, 15000);



                        setTimeout(function () {
                        $("#label").hide();
                            $("#losewheel").hide();
                        }, 15000);
                    }

                }

                document.getElementById('submitChoices').onclick = function (i) {

                    data = [];

                    $("#label").hide();
                    $("#losewheel").hide();
                    $('.addtext').each(function () {

                        if ($(this).val() != "") {
                            data.push({ label: $(this).val() })
                        }
                        console.log($(this).val());

                    })


                    var chartWheel = document.getElementById('chart');
                    var wheelObj = document.getElementById('wheelObject');
                    var wheelObj2 = document.getElementById('wheelObject2');
                    var loselabel = document.getElementById('label');
                    var winCon = document.getElementById('winCon');
                 
                
// if (data.length > 3) {  // set Wheel position
//     // losewheelobj.style.display = none;
//     // loselabel.style.display = none;
//     document.getElementById("label").style.display = "none";
//     document.getElementById("losewheel").style.display = "none";

//                   }

            // if (data.length > 2) {  // set Wheel position
                        
            //             winCon.style.top = "-297px";

            //         }

                    if (data.length > 0) {  // set Wheel position
                        chartWheel.style.top = "-269px";
                        

                    }
                    if (data.length > 4) {  // set Wheel position
                        chartWheel.style.top = "-296px";
                    }

                    if (data.length > 9) {
                        chartWheel.style.top = "-318px";
                    }


                    if (data.length > 13) {
                        chartWheel.style.top = "-342px";
                        wheelObj2.style.top = "-288px";
                    }


                    if (data.length > 18) {
                        chartWheel.style.top = "-366px";
                    }

                    if (data.length > 22) {
                        chartWheel.style.top = "-390px";
                    }

                    if (data.length > 27) {
                        chartWheel.style.top = "-414px";
                    }

                    if (data.length > 31) {
                        chartWheel.style.top = "-439px";
                    }
                    if (data.length > 36) {
                        chartWheel.style.top = "-463px";
                    }

                    if (data.length > 41) {
                        chartWheel.style.top = "-486px";
                    }

                    if (data.length > 45) {
                        chartWheel.style.top = "-512px";
                    }


                    document.getElementById("chart").innerHTML = data;// WHEEL SET
                    var svg = d3.select('#chart')
                        .append("svg")
                        .data([data])
                        .attr("width", w + padding.left + padding.right)
                        .attr("height", h + padding.top + padding.bottom);
                    var container = svg.append("g")
                        .attr("class", "chartholder")
                        .attr("transform", "translate(" + (w / 2 + padding.left) + "," + (h / 2 + padding.top) + ")");
                    var vis = container
                        .append("g");

                    var pie = d3.layout.pie().sort(null).value(function (d) { return 1; });
                    // declare an arc generator function
                    var arc = d3.svg.arc().outerRadius(r);
                    // select paths, use arc generator to draw
                    var arcs = vis.selectAll("g.slice")
                        .data(pie)
                        .enter()
                        .append("g")
                        .attr("class", "slice");

                    arcs.append("path")
                        .attr("fill", function (d, i) { return color(i); })
                        .attr("d", function (d) { return arc(d); });
                    // add the text
                    arcs.append("text").attr("transform", function (d) {
                        d.innerRadius = 0;
                        d.outerRadius = r;
                        d.angle = (d.startAngle + d.endAngle) / 2;
                    
                        return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")translate(" + (d.outerRadius - 10) + ")";
                    })

                   
                        .attr("text-anchor", "end")
                        .style({ "font-weight": "bold", "font-size": "12px" })
                        .text(function (d, i) {
                            return data[i].label;
                        });
                    container.on("click", spin);
                    function spin(d) {

                        // container.on("click", null);
                        //all slices have been seen, all done
                        // console.log("OldPick: " + oldpick.length, "Data length: " + data.length);
                        // if(oldpick.length == data.length){
                        //     console.log("done");
                        //     container.on("click", null);
                        //     return;
                        // }


                        var ps = 360 / data.length,
                            pieslice = Math.round(1400 / data.length),
                            rng = Math.floor((Math.random() * 1000) +  8000);

                            // rng = Math.floor(Math.random() * 1 + 4 * 1000);
                        rotation = (Math.round(rng / ps) * ps);

                        picked = Math.round(data.length - (rotation % 360) / ps);
                        picked = picked >= data.length ? (picked % data.length) : picked;
                        // if(oldpick.indexOf(picked) !== -1){
                        //     d3.select(this).call(spin);
                        //     return;
                        // } else {
                        //     oldpick.push(picked);
                        // }
                        rotation += 360 - Math.round(ps / 2);

                        vis.transition()
                            .duration(15000)
                            .attrTween("transform", rotTween)
                            .each("end", function () {
                                //mark question as seen
                                d3.select(".slice:nth-child(" + (picked + 1) + ") path")
                                setTimeout(function () {
                                //populate question
                                d3.select("#label  .chosen")
                                    .text(data[picked].label)
                                    .style({ "align": "center" });
                                // oldrotation = rotation;

                                container.append('svg:image')
                                    .attr({
                                        'xlink:href': 'img/chumbahan/sorry.png',  // can also add svg file here
                                        x: -250,
                                        y: -180,
                                        width: 500,
                                        height: 350,
                                        'id': 'losewheel'

                                    })
                                    .attr("id", "losewheel")

                                $("#label").show();
                                    
                     
                            }, 1000);
                                container.on("click", spin);
                            });
                    }
                    // //make arrow
                    // svg.append("g")
                    //     .attr("transform", "translate(" + (w + padding.left + padding.right) + "," + ((h / 2) + padding.top) + ")")
                    //     .append("path")
                    //     .attr("d", "M-" + (r * .15) + ",0L0," + (r * .05) + "L0,-" + (r * .05) + "Z")
                    //     .style({ "fill": "red" });
                    //draw spin circle
                    // container.append("circle")
                    //     .attr("cx", 0)
                    //     .attr("cy", 0)
                    //     .attr("r", 60)
                    //     .style({"fill":"white","cursor":"pointer"});
                    //spin text
                    container.append("text")
                        .attr("x", 0)
                        .attr("y", 45)
                        .attr("text-anchor", "middle")
                        // .text("SPIN")
                        .style({ "font-weight": "bold", "font-size": "30px" });

                    // container.append('svg:image')
                    //     .attr({
                    //         'xlink:href': 'img/chum.png',  // can also add svg file here
                    //         x: -50,
                    //         y: -60,
                    //         width: 100,
                    //         height: 128
                    //     });

                    container.append('svg:image')
                        .attr({
                            'xlink:href': 'img/chumbahan/wheel_frame.png',  // can also add svg file here
                            x: -330,
                            y: -260,
                            width: 660,
                            height: 500
                        });


                    function rotTween(to) {
                        //   var i = d3.interpolate(oldrotation % 360, rotation);
                        var i = d3.interpolate(oldrotation % 360, rotation);
                        return function (t) {
                            return "rotate(" + i(t) + ")";
                        };
                    }


                    function getRandomNumbers() {
                        var array = new Uint16Array(1000);
                        var scale = d3.scale.linear().range([360, 1440]).domain([0, 100000]);
                        if (window.hasOwnProperty("crypto") && typeof window.crypto.getRandomValues === "function") {
                            window.crypto.getRandomValues(array);
                            console.log("works");
                        } else {
                            //no support for crypto, get crappy random numbers
                            for (var i = 0; i < 1000; i++) {
                                array[i] = Math.floor(Math.random() * 100000) + 1;
                            }
                        }
                        return array;
                    }

                }


            </script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

            <script src="https://code.jquery.com/jquery-1.8.3.js" integrity="sha256-dW19+sSjW7V1Q/Z3KD1saC6NcE5TUIhLJzJbrdKzxKc="
                crossorigin="anonymous"></script>


        </body>

        </html>