
<html>
 <head>
  <title>Most Popular Fashion Designer 2014</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <link rel="shortcut icon" href="https://vote.erbenlab.com/images/like.ico" type="image/icon">
   <link href="https://vote.erbenlab.com/css/style.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="https://vote.erbenlab.com/css/reveal.css">

   <script type="text/javascript" src="https://vote.erbenlab.com/jquery.reveal.js"></script>


 </head>
 <body >
  <div id="fb-root"></div>
  <script src="http://connect.facebook.net/en_US/all.js"></script>
  <center> 
  <form name="fbvote">
	<div id="cont_fb">
	</div>
	<script>
	
function load_vote(x)
  {
 
   var te_DID = x;
   var val_id=document.getElementById('id_user').value;
   var com=te_DID+"##"+val_id;
   
	$.ajax({
		type: 'GET',
		url: 'https://vote.erbenlab.com/vote_mobile/set_vote.php',
		data:{v_id:com},
		dataType: 'jsonp',
		jsonp: 'jsoncallback',
		timeout: 500000,
		success: function(data){
			load_vote_x(data.res);
		},
		error: function(){
			output.text('There was an error loading the data.');
		}
	});
	
  }

 function load_vote_x(str_vote) 
  {     
   var the_array = str_vote.split("##");
   var values =the_array[0];
   var ids =the_array[1];
   var alert_y_n =the_array[2];
   if(values == "voted")
    {
     var array_voted = ids.split("**");
     var count=array_voted.length-1;
     for(var x=0;x<=count;x++)
      {
      var ids=array_voted[x];
      var label_v="vote_des"+ids;
      document.getElementById(label_v).innerHTML="Voted";
      document.getElementById(label_v).style.color = "black";
    
      }
    }  
   else if(values =="vote_posted")
    {
     var com= values+"##"+ ids;
	 fix_error_msg(com);
    }
   else
    {
     var fold_nam1="img"+ids+"_1";
     var fold_nam2="img"+ids+"_2";
     var fold_nam3="img"+ids+"_3";
     var fold_nam4="img"+ids+"_4";
     var val=values.split("");
     var exten=".png";
   
     if(values<10)   
      {
   		var val1=0;
		var val2=values;
		document.getElementById(fold_nam3).src="clock/"+val1+exten;
		document.getElementById(fold_nam4).src="clock/"+val2+exten;
	  }
	 else if(values>=10 && values<100)
	  {
		var val3=val[0];
		var val4=val[1];
		document.getElementById(fold_nam3).src="clock/"+val3+exten;
		document.getElementById(fold_nam4).src="clock/"+val4+exten;
	  }
	 else if(values>=100 && values<1000)
	  {
		var val2=val[0];
		var val3=val[1];
		var val4=val[2];
		document.getElementById(fold_nam2).style.visibility = 'visible';
		document.getElementById(fold_nam2).src="clock/"+val2+exten;
		document.getElementById(fold_nam3).src="clock/"+val3+exten;
		document.getElementById(fold_nam4).src="clock/"+val4+exten;
	  }
	 else
	  {
		var val1=val[0];
		var val2=val[1];
		var val3=val[2];
		var val4=val[3];
		document.getElementById(fold_nam1).style.visibility = 'visible';
		document.getElementById(fold_nam2).style.visibility = 'visible';   
		document.getElementById(fold_nam1).src="clock/"+val1+exten;
		document.getElementById(fold_nam2).src="clock/"+val2+exten;
		document.getElementById(fold_nam3).src="clock/"+val3+exten;
		document.getElementById(fold_nam4).src="clock/"+val4+exten;
	  }
     location.reload();
	}
   }
 
 function fix_error_msg(str_msg)
  {
   var the_array = str_msg.split("##");
   var values=the_array[0];
   var ids=the_array[1];
   var div_name="mydiv"+ids;
   document.getElementById(div_name).innerHTML="<label style='top: 60px; left: 100px;font-size: 25px;font-weight: normal;color: #353c46;text-shadow: 0px 1px 1px #4d4d4d;color: #222;font: 80px;'>You already voted for the contestant. <br>Please vote for another</label>";
   show_img(ids);
  }
 
 function show_img(div_na)
  {
   var before_msg = document.getElementById('message_err').value;
   if(before_msg != "")
    {
	 document.getElementById(before_msg).style.display='none';
    }
   var div_name="mydiv"+div_na;
   document.getElementById('message_err').value =div_name;
   document.getElementById(div_name).style.display='block';

   setTimeout(function(){hide_img(div_name)}, 2500);
  }

 function hide_img(div_hide)
  {
   var div_name=  div_hide;
   document.getElementById(div_name).style.display='none';
   document.getElementById(div_name).innerHTML="<label style='top: 100px; left: 100px;font-size: 25px;font-weight: normal;color: #353c46;text-shadow: 0px 1px 1px #4d4d4d;color: #222;font: 80px;'><br>Sorry ! Sketch is not available yet</label>";
  }
  
   function hide_skt(div_val)
  {
   var div_name="myskt"+div_val;
   document.getElementById(div_name).style.display='none';
  }
  
 function show_skectch(div_val)
 {

   var before_img = document.getElementById('img_nam').value;
   if(before_img != "")
    {
	 document.getElementById(before_img).style.display='none';
    }
   
   var div_name="myskt"+div_val;
   var img_src="skt_1"+div_val;
   document.getElementById('id_u').value=div_val;
   document.getElementById('id_DID').value=img_src;
   
   document.getElementById('img_nam').value =div_name;
   var src_1=document.getElementById(img_src).value;
   document.getElementById('img_nam').value =div_name;
   document.getElementById('img_name_loc').value=src_1;
   document.getElementById(div_name).style.display='block';

 }
 /*var imgsrc = 'images/Hiranye(1).jpg';
var img = new Image();

img.onerror = function (evt) {
  alert(this.src + " can't be loaded.");
  }
img.onload = function (evt) {
  alert(this.src + " is loaded.");
  }

img.src = imgsrc;*/
 

function show_next_img()
{

 var next_img=document.getElementById('img_nam').value;
 var next_id=document.getElementById('id_u').value;
 var next_i="myimg"+next_id;
 var src_val=document.getElementById(next_img).src;
 var sep_val=document.getElementById('img_name_loc').value;
 var array = sep_val.split("(");
 var array1=array[0];
 var array2=array[1];
 var array2_1 = array2.split(")");
 var array2_1_1 =array2_1[0];
 var array2_1_2 =array2_1[1];
 var num=1;
 array2_1_1=parseInt(array2_1_1)+parseInt(num);
 
 var src_name = array1+"("+array2_1_1+")"+array2_1_2;

 var imgsrc = src_name;
 var img = new Image();

img.onerror = function (evt) 
{
  
 }
img.onload = function (evt) 
{
  document.getElementById(next_i).src=src_name;
  document.getElementById('img_name_loc').value=src_name;
  var num_a=1;
  array2_1_1_a=parseInt(array2_1_1)+parseInt(num_a);
  var src_name1 = array1+"("+array2_1_1_a+")"+array2_1_2;
  var imgsrc1 = src_name1;
  var img1 = new Image();

  img1.onerror = function (evt) 
  {
  document.getElementById('next_button').style.display='none';   
  }
  img1.onload = function (evt)
  {
   
  }

  img1.src = imgsrc1;
  
 
 }


img.src = imgsrc;

 

} 


	  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '897361633622756',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.0' // use version 2.0
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
  
  
window.onload=function(){
	
	$.ajax({
		type: 'GET',
		url: 'https://vote.erbenlab.com/vote_mobile/get_votes.php',
		dataType: 'jsonp',
		jsonp: 'jsoncallback',
		timeout: 500000,
		success: function(data){
			document.getElementById("cont_fb").innerHTML=data.res;
			
			FB.login(function(response) {
				if (response.authResponse) {
					var access_token =   FB.getAuthResponse()['accessToken'];
					console.log('Access Token = '+ access_token);
					FB.api('/me', function(response) {
						document.getElementById('id_user').value= response.id;
						var null_va=" ";
						load_vote(null_va);
					});
				} else {
				console.log('User cancelled login or did not fully authorize.');
				}
			}, {scope: ''});	
		},
		error: function(){
			output.text('There was an error loading the data.');
		}
	});
};



 </script>


 </center>
 </form>
 </html>
 

 
