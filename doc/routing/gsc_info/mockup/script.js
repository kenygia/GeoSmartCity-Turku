
var map1=0;
var map2=0;
var map3=0;
var count=0;
var table=0;

function revealmap1(){
    map1=map1+1;
    document.getElementById("map2").style.display="none";
    document.getElementById("map3").style.display="none";

    if(map1==1){
        document.getElementById("map1").style.display="block";

    }
    else if(map1==2){
        document.getElementById("map1").style.display="none";
        map1=0;
    }


}
function revealmap2(){
    map2=map2+1;
    document.getElementById("map1").style.display="none";
    document.getElementById("map3").style.display="none";

    if(map2==1){
        document.getElementById("map2").style.display="block";

    }
    else if(map2==2){
        document.getElementById("map2").style.display="none";
        map2=0;
    }


}
function revealmap3(){
    map3=map3+1;

    document.getElementById("map1").style.display="none";
    document.getElementById("map2").style.display="none";
    if(map3==1){
        document.getElementById("map3").style.display="block";

    }
    else if(map3==2){
        document.getElementById("map3").style.display="none";
        map3=0;
    }


}


function reveal(){
    count=count+1;
    if(count==1){
        document.getElementById("userpreference").style.display="block";
    }
    else if(count==2){
        document.getElementById("userpreference").style.display="none";
        count=0;
    }

}

function highlightlater(){

    document.getElementById("later").style.background="#50C347";
    document.getElementById("now").style.background="#8E8E8E";
    document.getElementById("field_time").style.display="block";


    var date=new Date();


    var day=date.getDate();
    var month=date.getMonth()+1;
    var year=date.getFullYear();

    var hour=date.getHours();
    var min=date.getMinutes();

    document.getElementById("current_time").value=hour+":"+min;
    document.getElementById("calendar").value=day+"/"+month+"/"+year;


}
function highlightnow(){

    document.getElementById("now").style.background="#50C347";
    document.getElementById("later").style.background="#8E8E8E";

    document.getElementById("field_time").style.display="none";
    var date=new Date();

    var hour=date.getHours();
    var min=date.getMinutes();

    document.getElementById("current_time").value=hour+":"+min;
}


function openpopup(){
    document.getElementById("pop-up").style.display="block";
}
function closepopup(){
    document.getElementById("pop-up").style.display="none";
}
function exitmessage(){
   document.getElementById("success_message").style.display="none";
    //document.getElementById("successmessage_heading").style.background="black";
}
function exitsignout(){
    document.getElementById("logout_popup").style.display="block";
}
function closelogoutpopup(){
    document.getElementById("logout_popup").style.display="none";
}

function popup_map(gmap){
    document.getElementById("popup_map").style.display="block";
   document.getElementById("map").src=gmap;
    document.getElementById("map").style.height="400px";
    document.getElementById("map").style.width="800px";

}
function hidemap(){
    document.getElementById("popup_map").style.display="none";
}

function parking(parking){

    document.getElementById("parkingarea_img").src=parking;
    document.getElementById("parkingdata_table").style.display="block";
    table=1;

    if(parking=="images/mark_route2.png"){
        document.getElementById(parking).style.background="#5AC965";
        document.getElementById("images/mark_route3.png").style.background="#ffffff";
        document.getElementById("images/mark_route1.png").style.background="#ffffff";
    }else if(parking=="images/mark_route3.png") {
        document.getElementById(parking).style.background = "#5AC965";
        document.getElementById("images/mark_route2.png").style.background="#ffffff";
        document.getElementById("images/mark_route1.png").style.background="#ffffff";
    }
    else if(parking=="images/mark_route1.png"){
            document.getElementById(parking).style.background="#5AC965";
        document.getElementById("images/mark_route3.png").style.background="#ffffff";
        document.getElementById("images/mark_route2.png").style.background="#ffffff";
        }

    //document.getElementById(parking).style.background="Green";
    document.getElementById("map").style.height="400px";
    document.getElementById("map").style.width="800px";
}

function display_parkingtabledetail(){
    table=table+1;
  //  document.getElementById("parkingdata_table").style.display="none";
   // document.getElementById("parkingdata_table").style.display="none";

    if(table==1){
        document.getElementById("parkingdata_table").style.display="block";

    }
    else if(table==2){
        document.getElementById("parkingdata_table").style.display="none";
        table=0;
    }


}

function display_walkinginfo(){
    document.getElementById("walking_info").style.display="block";

}
function closewalkinginfo(){
    document.getElementById("walking_info").style.display="none";
}
function display_bikinginfo(){
    document.getElementById("biking_info").style.display="block";
}
function closebikinginfo(){
    document.getElementById('biking_info').style.display="none";
}
