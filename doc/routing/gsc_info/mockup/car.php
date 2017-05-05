



<article id="parkingarea">



   <img src="images/mark_route.png" id="parkingarea_img">
   <img src="images/park.png" id="park3" onclick="parking('images/mark_route1.png')"/></a>
   <img src="images/park.png" id="park2" onclick="parking('images/mark_route2.png')" /></a>
   <img src="images/park.png" id="park1" onclick="parking('images/mark_route3.png')"/></a>
</article>

<!--
<article id="parking_index">

    <div>
        <img src="images/park.png" style="width: 35px; height: 35px;"> parking area |
        <img src="images/walk.png">Parking exit |

    </div>

</article>
-->


<article id="display_parkingdata">
    <p id="parking_detail" onclick="display_parkingtabledetail()"><img src="images/info.png" style="height: 22px;width: 22px"> <u>View Parking details..</u></p>
</article>

<article id="parkingdata_table">

    <table>
        <tr ><th>Parking area</th><th>distacne</th><th>Duration</th><th>Exit</th><th>Walk to destination</th><th>CO<sub>2</sub>emission</th><th>CO<sub>2</sub> indicator</th></tr>
        <tr id="images/mark_route2.png"><td>Parking A</td><td>5.3km</td><td>9 minutes</td><td>Exit A</td><td>60 m</td><td>161g</td><td><img src="images/tree.png" style="height:30px; width:30px; float:none" /><img src="images/tree.png" style="height:30px; width:30px; float:none" /></td></tr>
        <tr id="images/mark_route3.png"><td>Parking B</td><td>5.6km</td><td>11 minutes</td><td>Exit B, Exit B1</td><td>72 m, 85 m</td><td>166g</td><td><img src="images/tree.png" style="height:30px; width:30px; float:none" /><img src="images/tree.png" style="height:30px; width:30px; float:none" /></td></tr>
        <tr id="images/mark_route1.png"><td>Parking C</td><td>5.9km</td><td>13 minutes</td><td>Exit c</td><td>68 m</td><td>172g</td><td><img src="images/tree.png" style="height:30px; width:30px; float:none" />
                <img src="images/tree.png" style="height:30px; width:30px; float:none" />
            </td></tr>



    </table>

</article>

<article id="journey_title"">
<div id="map_route_title">
    View Map
</div>

<div id="map_route_route">
    <p>Route</p>
</div>

<div class="journey_menu">

    <p>Distance</p>
</div>
<div class="journey_menu">

    <p>Duration</p>
</div>
<div class="journey_menu">

    <p>Walking</p>
</div>

</article>







<article class="journery">

    <div class="journey_head">
        <img src="images/tree.png" style="height: 25px; width: 25px;">
        <img src="images/tree.png" style="height: 25px; width: 25px;">&nbsp;&nbsp;
        [ Co<sub>2</sub> Emission: 166 gram ]

    </div>

    <div class="journery_detail">

        <div class="map_icon" onclick="popup_map('images/kohmo1.png')">
            <img src="images/map_icon.png"><br>

        </div>

        <div class="map_route">
            <img src="images/car3.png" style="height:86px;">
        </div>
        <div class="distance">

            <p>5.1km</p>
        </div>
        <div class="duration">

            <p>9 minute</p>
        </div>
        <div class="walking">

            <p>60 m, 2 min</p>
        </div>
    </div>
</article>



<!---->
<article class="journery">

    <div class="journey_head">
        <img src="images/tree.png" style="height: 25px; width: 25px;">
        <img src="images/tree.png" style="height: 25px; width: 25px;">&nbsp;&nbsp;
        [ Co<sub>2</sub> Emission: 171 gram ]

    </div>

    <div class="journery_detail">

        <div class="map_icon" onclick="popup_map('images/kohmo2.png')">
            <img src="images/map_icon.png"><br>

        </div>

        <div class="map_route">
            <img src="images/car2.png" style="height:86px;">
        </div>
        <div class="distance">

            <p>5.0km</p>
        </div>
        <div class="duration">

            <p>10 minute</p>
        </div>
        <div class="walking">

            <p>85 m, 2min</p>
        </div>
    </div>
</article>

<!---->
<article class="journery">

    <div class="journey_head">
        <img src="images/tree.png" style="height: 25px; width: 25px;">
        <img src="images/tree.png" style="height: 25px; width: 25px;">&nbsp;&nbsp;
        [ Co<sub>2</sub> Emission: 177 gram ]
    </div>

    <div class="journery_detail">

        <div class="map_icon" onclick="popup_map('images/kohmo3.png')">
            <img src="images/map_icon.png"><br>

        </div>

        <div class="map_route">
            <img src="images/car3.png" style="height:86px;">
        </div>
        <div class="distance">

            <p>5.2km</p>
        </div>
        <div class="duration">

            <p>12 minute</p>
        </div>
        <div class="walking">

            <p>68 m, 2min</p>
        </div>
    </div>
</article>


<article id="popup_map">

    <img src="images/kohmo2.png" id="map">
    <div id="cross" onclick="hidemap()">
        <img src="images/cross.png" style="height: 32px; width: 32px">
    </div>
</article>

