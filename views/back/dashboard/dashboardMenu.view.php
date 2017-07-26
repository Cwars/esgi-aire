<style type="text/css">
    .graph-container1, .graph-container3{
        width: 48%;
        height: auto;
        float: left;
        display: inline-block;
    }
    .graph-container2{
        width: 100%;
        margin: auto;
        display: block;
    }
    #dash2 {
        width:400px;
        height: auto;
        margin: auto;
    }
    .content-wrapper {
        margin: 0 150px 50px 0!important;
    }
    @media (max-width: 12) {

    }
    h1,h2{
        text-align: center;
    }
</style>

<h1>Dashboard</h1><br/>
<div id="loader"></div>

<div class="graph-container2">
    <div id="dash2">
        <canvas id="mygraph2"></canvas>
    </div>
</div>

<div class="graph-container1">
    <div id="dash1">
        <canvas id="mygraph1"></canvas>
    </div>
</div>

<div class="graph-container3">
    <div id="dash3">
        <canvas id="mygraph3"></canvas>
    </div>
</div>
