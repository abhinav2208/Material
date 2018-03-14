<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!-- saved from url=(0057)https://cognizant.e-box.co.in/amphiSession/processSession -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        .popup-modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding: 10px;
            left: 0;
            top: 0;
            width: 15%;
//            height : 13%;
            background : white;
            margin-left : 61%;
            margin-top : 13%;
            box-shadow: -8px 8px 10px 3px rgba(0,0,0,0.2);
            border-radius: 5px;
        }
        #tokenValue{
            font-size: 17px;
            font-style: italic;
            padding-top : 10px
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport">
    <title>Attempt Session</title>
    
        <link rel="shortcut icon" href="https://cognizant.e-box.co.in/static/images/favicon.ico" type="image/x-icon">
      
    <link rel="stylesheet" href="bootstrap.cognizant.min.css">
    <link rel="stylesheet" href="helpGifs.css">
    <link rel="stylesheet" href="https://cognizant.e-box.co.in/amphiSession/processSession">
    
     </head><body style=""><span></span>
    <script type="text/javascript" src="ckeditor.js.download"></script>
<!--[if lt IE 9]>
    <style>
        .sidePaneLink{
            filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
        }
    </style>
    <![endif]-->    
    
  <script language="javascript" type="text/javascript">
    var amphiThemeName = "cognizant";
    var grailsUrl = "https://cognizant.e-box.co.in:443";
    var contextPath = '';
    if(contextPath == '/')
      contextPath = '';
      
      if(self != top){
        document.documentElement.style.display = 'none';
      }
    
  </script>
  
        
        <meta name="layout" content="main">
        
        <style type="text/css">
             #overlay {
                visibility: hidden;
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                text-align:center;
                z-index: 200;                
                background-color: black;
                opacity:0.9;                
            }

            #overlay div {
                width:400px;
                margin: 100px auto;
                background-color: #fff;
                border:1px solid #000;
                padding:15px;
                text-align:center;
                border-radius: 6px;
            }
                      
        </style>
        
        
            <script type="text/javascript">
                var lastAccessedTime = 0; 
                var myCountdown2;
                window.onload = function() {                       
                
                  function timer(timeVal){                   
                        myCountdown2 = new Countdown({
                        time: timeVal,
                        target: "contestTimer", 
                        onComplete	: lastCheckRemainingTime,
                        width:200, 
                        height:50, 
                        rangeHi:"hour",
                        numbers		: 	{
                        font 	: "Arial",
                        color	: "#FFFFFF",
                        bkgd	: "#365D8B",
                        fontSize : 200,
                        rounded	: 0.15,				// percentage of size 
                        shadow	: {
                            x : 0,			// x offset (in pixels)
                            y : 3,			// y offset (in pixels)
                            s : 4,			// spread
                            c : "#000000",	// color
                            a : 0.4			// alpha	// <- no comma on last item!
                            }
                        },

                        labels : {
                            textScale : 0.8,
                            offset : 5
                        } // <- no comma on last item!
                      
                    });
                }                     
                timer(4046);  
                 
                function lastCheckRemainingTime(){
                    var remainingSec = Number(myCountdown2._timeRunnerNow.hour)*60*60 + Number(myCountdown2._timeRunnerNow.minute)*60 + Number(myCountdown2._timeRunnerNow.second);                     
                    if(remainingSec == 0){
                        showWait();
                        $.ajax({
                            url: "/amphiSession/finalCheckRemainingTime",
                            data : {
                                "amphiSessionuserAttptId": 4835026,
                                "remainingSec" : remainingSec,
                                "dummy": new Date().getTime()
                            },
                            type: "POST",
                            success : function(data){
                                hideWait();
                                if(data.update){                                      
                                    if($('#contestTimer > div').length == 1){
                                        $('#contestTimer > div').remove();
                                        timer(data.remainingTimeSec);       
                                    }
                                }
                                else{
                                    countdownComplete();                                     
                                }
                            }  
                        });
                    }
                }
                 
                function updateTimer() {                 
                    setInterval(function(){ 
                        var remainingSec = Number(myCountdown2._timeRunnerNow.hour)*60*60 + Number(myCountdown2._timeRunnerNow.minute)*60 + Number(myCountdown2._timeRunnerNow.second);                     
                        $.ajax({
                            url: "/amphiSession/remainingTimeForSession",
                            data : {
                               "amphiSessionuserAttptId": 4835026,
                               "remainingSec" : remainingSec,
                                "dummy": new Date().getTime()
                            },
                            type: "POST",
                            success : function(data){
                                if(data.update)
                                {                   
                                    if($('#contestTimer > div').length == 1){
                                        $('#contestTimer > div').remove();
                                        timer(data.remainingTimeSec);       
                                    }
                                }
                            }  
                        });
                    },300000);
                }
                 updateTimer();
                
                        
                    }
                        function overlay(){
                            el = document.getElementById("overlay");
                            el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
                        }
                        function countdownComplete() {
                            var isTimedSectionEnabled 
                            if(document.getElementById("isTimedSectionEnabled") != null)
                                isTimedSectionEnabled = document.getElementById("isTimedSectionEnabled").value
                            
                            if(!isTimedSectionEnabled){
                                overlay();
                                document.getElementById('optionType').value = 'Finish';
                            }
                            else{
                                showWait();
                                document.getElementById('optionType').value = 'SectionFinish';
                            }
                            document.getElementById('automatic').value = 'true';
                            document.attemptForm.submit(); 
                        }                        
            </script>
        
    
  <script src="./Attempt Session_files/jquery-1.10.2.min.js.download" type="text/javascript"></script>
<link href="./Attempt Session_files/bundle-ui_head.css" type="text/css" rel="stylesheet" media="screen, projection">


















 <span></span>        
  

 
    
  <div id="amphiHeader">       
      <nav class="navbar navbar-default navbar-static-top amphi-navbar" style="box-shadow:0 0 2px rgba(0, 0, 0, 0.2);margin-bottom: 0px;display:table !important;width: 100%;">
          <div class="" style="display: table-row !important;">
              <div class="navbar-header amphi-navbar" style="display: table-cell !important;">
                  <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>      
                  
                      
                                    
                  <a class="navbar-brand " href="https://cognizant.e-box.co.in/course/coursetabs" style="padding:5px;">
                    <span style="margin-left:5px;font-size: 1.7em;padding:0px;color:black;">
                        
                            GTP
                        
                    </span>
                  </a>
              </div>
              <div class="navbar-collapse collapse" id="amphinavbar" style="display: table-cell !important;vertical-align: middle;">
                  <ul class="nav navbar-nav domain-nav-bar" style="float: right;margin-right:60px;">
                        
                      
                          
                        
                            
                                
                                
                                    <li><a href="https://cognizant.e-box.co.in/course/coursetabs">
                                    
                                        Home
                                    
                                    </a></li>
                                
                            
                        
                            
                                
                                    <li><a href="https://cognizant.e-box.co.in/course/show/809">Course</a></li>
                                
                            
                              

                                   
                                <li>
                                
    

                       
                                </li>
                             

                        
                        
                        
                            <li>
                                <a href="https://cognizant.e-box.co.in/notification/showAll?courseId=&amp;uniqueId=&amp;systemGeneratedNotifications=true&amp;offset=0" onclick="jQuery.ajax({type:&#39;POST&#39;,data:{&#39;courseId&#39;: &#39;&#39;,&#39;uniqueId&#39;: &#39;&#39;,&#39;systemGeneratedNotifications&#39;: &#39;true&#39;,&#39;offset&#39;: &#39;0&#39;}, url:&#39;/notification/showAll&#39;,success:function(data,textStatus){jQuery(&#39;#amphiNotificationDiv&#39;).html(data);jQuery(&#39;#amphiNotificationDialog&#39;).modal(&#39;show&#39;);showDateTimePicker();},error:function(XMLHttpRequest,textStatus,errorThrown){}});return false;" style="display: inline-block;overflow-x: visible;padding-top:10px;padding-bottom: 10px;padding-left: 15px;position: relative; width:45px" title="Notifications">
                                    <i class="glyphicon glyphicon-bell"></i>
                                    
                                </a>
                            </li> 
                        
                        
                        
                        
                        
                                              
                        
                          
                        
                        
                      <li>
                          
                                
                              <a href="https://cognizant.e-box.co.in/amphiSession/processSession#" class="dropdown-toggle" style="text-decoration:none;min-width:170px;" data-toggle="dropdown">
                                  <i class="glyphicon glyphicon-user amphi-user-online" id="amphiHeaderUserIcon"></i>&nbsp;Abhinav Kumar&nbsp;&nbsp;<b class="caret"></b>
                              </a>         
                              <ul class="dropdown-menu">
                                  
                                  
                                    
                                        
                                            <li><a href="https://cognizant.e-box.co.in/user/show/60598">My Profile</a></li>
                                            <li class="divider"></li>
                                        
                                    
                                    
                                        <li>
                                            <a href="javascript:void(0)" onclick="getSSOKey(this)">SSO Plugin Key</a>
                                        </li>
                                        <li class="divider"></li>
                                    
                                    
                                        
                                    
                                    
                                        
                                    
                                    
                                        
                                    
                                    
                                     
                                        
                                            <li class="dropdown-submenu">
                                               <a href="https://cognizant.e-box.co.in/amphiSession/processSession#"> Themes</a>         
                                                <ul class="dropdown-menu  " style="left:-100%; border-radius: 0px; width:100%;">
                                                   
                                                        <li><a onclick="changeTheme(&quot;6&quot;)" href="https://cognizant.e-box.co.in/amphiSession/processSession#">default</a></li>
                                                   
                                                        <li><a onclick="changeTheme(&quot;15&quot;)" href="https://cognizant.e-box.co.in/amphiSession/processSession#">cognizant</a></li>
                                                   
                                                </ul>
                                            </li>
                                            <li class="divider"></li>
                                       
                                    
                                     
                                     
                                        
                                          <li class="dropdown-submenu">
                                              <a href="https://cognizant.e-box.co.in/amphiSession/processSession#">Plugins</a>         
                                              <ul class="dropdown-menu " style="left:-100%; border-radius: 0px;width:100%;">
                                                  <li><a href="https://cognizant.e-box.co.in/uploads/plugins/EboxPlugin_Eclipse_1.15.zip">Eclipse</a></li>
                                                  <li><a href="https://cognizant.e-box.co.in/uploads/plugins/E-Box_VS_2010_plugin_1.8.5.vsix">Visual Studio 2010</a></li>
                                                  <li><a href="https://cognizant.e-box.co.in/uploads/plugins/EBox_VisualStudio_1.11.zip">Visual Studio 2012</a></li>
                                              </ul>
                                          </li>
                                          <li class="divider"></li>  
                                        
                                    
                                        
                                    
                                        
                                    
                                    
                                        
                                          <li><a href="https://cognizant.e-box.co.in/ticket/myTicket/60598">Help Desk</a></li>
                                          <li class="divider"></li>
                                        
                                    
                                    
                                    
                                        
                                    
                                    
                                    
    
                                                                        
                                    
                                    
                                    <li><a href="https://cognizant.e-box.co.in/user/logout?insId=">Logout</a></li>					
                                    </ul>
                          
                      </li>
                      
                  </ul>
              </div>
          </div>
      </nav>
  
  </div>  
    <div class="popup-modal">  
        <div id="sso_token_menu" style="left:-100%; border-radius: 0px; width:100%;">
            <div>
                <div id="tokenHeading">
                    <b class="col-md-8 col-lg-8" style="padding: 0px;">Token</b>
                    <div class="col-md-2 col-lg-2 pull-right" style="padding: 0px;">
                        <a href="javascript:void(0)" title="Close" onclick="jQuery(&#39;.popup-modal&#39;).hide()"><i class="fa fa-close"></i></a>
                    </div>
                </div>                
                <div style="clear: both"></div>
                <div id="tokenValue"></div>              
            </div>
        </div>
    </div>
        
   
  
  
  <div id="content" class="content row" style="margin: 0px; min-height: 602px; padding-top: 5px;">
     
      
            
        
    
        <!-- Do not remove this div or id (attempt-body). -->
        <div class="body" id="attempt-body">            
                       <div id="overlay">
                            <div>
                                Assessment Time Ended,Please wait it will be redirected to result page shortly.
                            </div>
                        </div>           
			
                <div class="sidePaneLink" id="attemptComponentsListBtn" style="left:0px;top:75%;">
                    
                </div>
                
                
            
            <div class="dialog" style="max-width:100%;">         
                
                


           <div class="modal fade" id="instructionsDialog" tabindex="-1">
                <div class="modal-dialog" style="min-width: 100%;">
                  <div class="modal-content">
                  
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">Instructions</h4>
                    </div>
                
                    <div class="modal-body" style="overflow:auto">
                        
    <div id="instructions"></div>

                    </div>
            
                        <div class="modal-footer ">
                
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
                        </div>
                    
                  </div>
                </div>
            </div> 
        
                
                    
                        
                        
                        
                        
                            
                           <div style="float: right;">
                                <div id="sessionTimer" style="position: fixed;overflow: visible;width: 250px;margin-left: -270px;z-index:10;">
                                    <div id="contestTimer"><div id="Stage_jbeeb_3" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; border-image: initial; font-size: 100%; vertical-align: top; outline: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: padding-box; text-size-adjust: 100%; user-select: none; cursor: default; transform-origin: 0px 0px 0px; left: 0px; top: 0px; height: 50px; width: 200px; box-shadow: none; position: relative; display: block; clear: both; zoom: 1; overflow: visible;"><div id="Container_jbeeb_6" style="position: absolute; overflow: visible; padding: 0px; margin-right: 0px; margin-bottom: 0px; border-image: initial; font-size: 100%; vertical-align: baseline; outline: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: padding-box; background-color: rgb(54, 93, 139); text-size-adjust: 100%; user-select: none; cursor: inherit; transform-origin: 0px 0px 0px; left: 3.33333px; top: 0px; height: 33.3333px; width: 60px; border-radius: 2.5px; box-shadow: rgba(0, 0, 0, 0.4) 0px 3px 4px; z-index: 0;"><div id="TextBox_jbeeb_7" style="position: absolute; overflow: visible; padding: 0px; margin-right: 0px; margin-bottom: 0px; border-image: initial; font-size: 26.6667px; vertical-align: baseline; outline: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: padding-box; text-size-adjust: 100%; user-select: none; cursor: inherit; transform-origin: 0px 0px 0px; left: 0px; top: 0px; height: 33.3333px; width: 60px; box-shadow: none; white-space: nowrap; line-height: 1.25em; color: rgb(255, 255, 255); font-family: Arial; text-align: center; font-weight: normal; text-shadow: none; text-decoration: none; zoom: 1; z-index: 0;"><span style="font-family: Arial;">01</span></div><div id="Box_jbeeb_8" style="position: absolute; overflow: visible; padding: 0px; margin-right: 0px; margin-bottom: 0px; border-image: initial; font-size: 100%; vertical-align: baseline; outline: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: padding-box; background-color: rgb(0, 0, 0); text-size-adjust: 100%; user-select: none; cursor: inherit; transform-origin: 0px 0px 0px; left: 0px; top: 15.9167px; height: 1.5px; width: 60px; box-shadow: none; z-index: 1;"></div></div><div id="TextBox_jbeeb_9" style="position: absolute; overflow: visible; padding: 0px; margin-right: 0px; margin-bottom: 0px; border-image: initial; font-size: 9.33333px; vertical-align: baseline; outline: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: padding-box; text-size-adjust: 100%; user-select: none; cursor: inherit; transform-origin: 0px 0px 0px; left: 0px; top: 43.3333px; height: 11.6667px; width: 66.6667px; box-shadow: none; white-space: nowrap; line-height: 1.25em; color: rgb(48, 48, 48); font-family: Arial, _sans; text-align: center; font-weight: bold; text-shadow: none; text-decoration: none; zoom: 1; z-index: 1;"><span style="font-family: Arial, _sans;">HOURS</span></div><div id="Container_jbeeb_10" style="position: absolute; overflow: visible; padding: 0px; margin-right: 0px; margin-bottom: 0px; border-image: initial; font-size: 100%; vertical-align: baseline; outline: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: padding-box; background-color: rgb(54, 93, 139); text-size-adjust: 100%; user-select: none; cursor: inherit; transform-origin: 0px 0px 0px; left: 70px; top: 0px; height: 33.3333px; width: 60px; border-radius: 2.5px; box-shadow: rgba(0, 0, 0, 0.4) 0px 3px 4px; z-index: 2;"><div id="TextBox_jbeeb_11" style="position: absolute; overflow: visible; padding: 0px; margin-right: 0px; margin-bottom: 0px; border-image: initial; font-size: 26.6667px; vertical-align: baseline; outline: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: padding-box; text-size-adjust: 100%; user-select: none; cursor: inherit; transform-origin: 0px 0px 0px; left: 0px; top: 0px; height: 33.3333px; width: 60px; box-shadow: none; white-space: nowrap; line-height: 1.25em; color: rgb(255, 255, 255); font-family: Arial; text-align: center; font-weight: normal; text-shadow: none; text-decoration: none; zoom: 1; z-index: 0;"><span style="font-family: Arial;">06</span></div><div id="Box_jbeeb_12" style="position: absolute; overflow: visible; padding: 0px; margin-right: 0px; margin-bottom: 0px; border-image: initial; font-size: 100%; vertical-align: baseline; outline: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: padding-box; background-color: rgb(0, 0, 0); text-size-adjust: 100%; user-select: none; cursor: inherit; transform-origin: 0px 0px 0px; left: 0px; top: 15.9167px; height: 1.5px; width: 60px; box-shadow: none; z-index: 1;"></div></div><div id="TextBox_jbeeb_13" style="position: absolute; overflow: visible; padding: 0px; margin-right: 0px; margin-bottom: 0px; border-image: initial; font-size: 9.33333px; vertical-align: baseline; outline: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: padding-box; text-size-adjust: 100%; user-select: none; cursor: inherit; transform-origin: 0px 0px 0px; left: 66.6667px; top: 43.3333px; height: 11.6667px; width: 66.6667px; box-shadow: none; white-space: nowrap; line-height: 1.25em; color: rgb(48, 48, 48); font-family: Arial, _sans; text-align: center; font-weight: bold; text-shadow: none; text-decoration: none; zoom: 1; z-index: 3;"><span style="font-family: Arial, _sans;">MINUTES</span></div><div id="Container_jbeeb_14" style="position: absolute; overflow: visible; padding: 0px; margin-right: 0px; margin-bottom: 0px; border-image: initial; font-size: 100%; vertical-align: baseline; outline: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: padding-box; background-color: rgb(54, 93, 139); text-size-adjust: 100%; user-select: none; cursor: inherit; transform-origin: 0px 0px 0px; left: 136.667px; top: 0px; height: 33.3333px; width: 60px; border-radius: 2.5px; box-shadow: rgba(0, 0, 0, 0.4) 0px 3px 4px; z-index: 4;"><div id="TextBox_jbeeb_15" style="position: absolute; overflow: visible; padding: 0px; margin-right: 0px; margin-bottom: 0px; border-image: initial; font-size: 26.6667px; vertical-align: baseline; outline: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: padding-box; text-size-adjust: 100%; user-select: none; cursor: inherit; transform-origin: 0px 0px 0px; left: 0px; top: 0px; height: 33.3333px; width: 60px; box-shadow: none; white-space: nowrap; line-height: 1.25em; color: rgb(255, 255, 255); font-family: Arial; text-align: center; font-weight: normal; text-shadow: none; text-decoration: none; zoom: 1; z-index: 0;"><span style="font-family: Arial;">14</span></div><div id="Box_jbeeb_16" style="position: absolute; overflow: visible; padding: 0px; margin-right: 0px; margin-bottom: 0px; border-image: initial; font-size: 100%; vertical-align: baseline; outline: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: padding-box; background-color: rgb(0, 0, 0); text-size-adjust: 100%; user-select: none; cursor: inherit; transform-origin: 0px 0px 0px; left: 0px; top: 15.9167px; height: 1.5px; width: 60px; box-shadow: none; z-index: 1;"></div></div><div id="TextBox_jbeeb_17" style="position: absolute; overflow: visible; padding: 0px; margin-right: 0px; margin-bottom: 0px; border-image: initial; font-size: 9.33333px; vertical-align: baseline; outline: 0px; background-image: none; background-attachment: initial; background-origin: initial; background-clip: padding-box; text-size-adjust: 100%; user-select: none; cursor: inherit; transform-origin: 0px 0px 0px; left: 133.333px; top: 43.3333px; height: 11.6667px; width: 66.6667px; box-shadow: none; white-space: nowrap; line-height: 1.25em; color: rgb(48, 48, 48); font-family: Arial, _sans; text-align: center; font-weight: bold; text-shadow: none; text-decoration: none; zoom: 1; z-index: 5;"><span style="font-family: Arial, _sans;">SECONDS</span></div></div></div>
                                </div>
                            </div>  
                        
                        
                    
                  
                    
                    
                   <div style="display:table;padding-top:5px">
                    <div style="font-size:18px;display: table-row">
                        <div style="display:table-cell;vertical-align: top;">
                        
                           <a href="https://cognizant.e-box.co.in/amphiSession/instructions/2570?popup=true" onclick="showWait();jQuery.ajax({type:&#39;POST&#39;,data:{&#39;popup&#39;: &#39;true&#39;}, url:&#39;/amphiSession/instructions/2570&#39;,success:function(data,textStatus){jQuery(&#39;#instructions&#39;).html(data);jQuery(&#39;#instructionsDialog&#39;).modal(&#39;show&#39;);;},error:function(XMLHttpRequest,textStatus,errorThrown){},complete:function(XMLHttpRequest,textStatus){hideWait()}});return false;" style="font-size:24px" id="2570"><i class="glyphicon glyphicon-info-sign"></i></a>&nbsp;&nbsp;
                        
                        </div>
                        <div style="display:table-cell;vertical-align: top;">
                            
                            
                                This Section  has <span class="badge" style="font-size:20px; background:#1ABC9A">30</span> pages.
                              
                            
                        </div>
                    </div>
                   </div>
                    <br>
                    
            
                    

  
        <div class="">
		
		  
            
    
            <div id="topArea">
              
              



              
                
              
            </div>
            <form action="https://cognizant.e-box.co.in/amphiSession/processSession" method="post" name="attemptForm" id="attemptForm">
            <div id="questionArea">
              <!--
  To change this template, choose Tools | Templates
  and open the template in the editor.
-->




    

      <div class="panel-group" id="quizQuestionCollapsePane"> 
                  <div class="panel panel-primary">
                   <a data-toggle="collapse" data-parent="#quizQuestionCollapsePane" href="https://cognizant.e-box.co.in/amphiSession/processSession#q23989" class="panel-primary">
                    <div class="panel-heading">
                      <h4 class="panel-title">        
                          Q2    
                      </h4>
                    </div>
                   </a>
                    <div id="q23989" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <div style="float: right"> 
 <table> 
  <tbody>
   <tr> 
    <td><label style="font-weight: thin;color:#428BCA"><i class="fa fa-flag"></i>&nbsp;&nbsp;Review Later</label></td> 
    <td> <span class="switch"> <input id="cmn-toggle-monitered-31106576" class="cmn-toggle cmn-toggle-round" type="checkbox" onchange="changeReviewMark(&#39;31106576&#39;)"> <label class="toggle-btn-lable" for="cmn-toggle-monitered-31106576"></label> </span> </td> 
   </tr> 
  </tbody>
 </table> 
</div> 
<table style="width:100%"> 
 <tbody>
  <tr> 
   <td> 
    <table class="table table-striped"> 
     <tbody>

	</tbody>
	</table>
         </td> 
      </tr> 
      <tr> 
       <td> </td> 
      </tr> 
     </tbody>
    </table> </td> 
  </tr> 
 </tbody>
</table> 
<div class="modal fade" id="tibitViewResponseDialog" tabindex="-1"> 
 <div class="modal-dialog" style="width:80%"> 
  <div class="modal-content"> 
   <div class="modal-header"> 
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
    <h4 class="modal-title">Titbit</h4> 
   </div> 
   <div class="modal-body" style="overflow:auto"> 
    <div id="tibitViewResponse"></div> 
   </div> 
   <div class="modal-footer "> 
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
   </div> 
  </div> 
 </div> 
</div>
                      </div>
                    </div>
                  </div>
                </div>
    
    <input type="hidden" name="hasAnswer" value="1" id="hasAnswer">
    



            </div><br>       
            





 










<input type="hidden" name="compid" value="3106" id="compid">
<input type="hidden" name="timeSpent" value="0" id="timeSpent">




        

<div class="paginateButtons"> 

    
    <br>
    
        <input type="submit" name="_action_processSession" value="Sections" class="paginateNavigateButtons btn-primary" style="background-color: #00607A;border-color: #357ebd;color:#B7F8FF;" onclick="transferAnswer(&#39;quiz&#39;);showWait();return(true);">
    
    
  
  
      
 
            
  
  
       
  
   
      <input type="submit" name="_action_processSession" value="Previous" onclick="showWait();transferAnswer(&#39;quiz&#39;);return(true);" class="paginateNavigateButtons">
    

  <span style="font-size:20px;border-left: 1px solid #CCCCCC;">2/30</span>
   
    
      
    

  
        
        
           
            <a href="javascript:void(0);" style="font-size:20px;" onclick="transferAnswer(&#39;quiz&#39;);submitAttemptForm(&#39;attemptForm&#39;,0);showWait();return(true);" class="step ">
            1
          </a>
          
        
      
  
        
            
                <span style="font-size:20px;background-color: #428bca;border-color: #357ebd;color: #fff;" class="btn-primary">2</span>
            
        
  
        
        
           
            <a href="javascript:void(0);" style="font-size:20px;" onclick="transferAnswer(&#39;quiz&#39;);submitAttemptForm(&#39;attemptForm&#39;,2);showWait();return(true);" class="step ">
            3
          </a>
          
        
      
  
        
        
           
            <a href="javascript:void(0);" style="font-size:20px;" onclick="transferAnswer(&#39;quiz&#39;);submitAttemptForm(&#39;attemptForm&#39;,3);showWait();return(true);" class="step ">
            4
          </a>
          
        
      
  
        
        
           
            <a href="javascript:void(0);" style="font-size:20px;" onclick="transferAnswer(&#39;quiz&#39;);submitAttemptForm(&#39;attemptForm&#39;,4);showWait();return(true);" class="step ">
            5
          </a>
          
        
      
  
        
        
           
            <a href="javascript:void(0);" style="font-size:20px;" onclick="transferAnswer(&#39;quiz&#39;);submitAttemptForm(&#39;attemptForm&#39;,5);showWait();return(true);" class="step ">
            6
          </a>
          
        
      
  
        
        
           
            <a href="javascript:void(0);" style="font-size:20px;" onclick="transferAnswer(&#39;quiz&#39;);submitAttemptForm(&#39;attemptForm&#39;,6);showWait();return(true);" class="step ">
            7
          </a>
          
        
      
  
        
        
           
            <a href="javascript:void(0);" style="font-size:20px;" onclick="transferAnswer(&#39;quiz&#39;);submitAttemptForm(&#39;attemptForm&#39;,7);showWait();return(true);" class="step ">
            8
          </a>
          
        
      
  

  
    <span class="step">..</span>
          
            
              <a href="javascript:void(0);" style="font-size:20px;" onclick="transferAnswer(&#39;quiz&#39;);submitAttemptForm(&#39;attemptForm&#39;,29);showWait();return(true);" class="step">
            30
          </a>
          
        
  

  
    
        <script type="text/javascript">
            var showFinishButton = true;
        </script>
    
    
    
      <input type="submit" name="_action_processSession" value="Next" class="save paginateNavigateButtons" onclick="transferAnswer(&#39;quiz&#39;);showWait();return(true);">
    
  


    
    
            
    
    
    <input type="hidden" name="pn" value="1" id="pn">
    <input type="hidden" name="compNumber" value="0" id="compNumber">
    <input type="hidden" name="optionType" value="" id="optionType">
    <input type="hidden" name="automatic" value="false" id="automatic">
    <input type="hidden" name="amphiSessionUserAttemptId" value="4835026" id="amphiSessionUserAttemptId">
    <input type="hidden" name="id" value="2570" id="id">
  <div style="display:none">
      <input type="submit" name="_action_processSession" value="Finish" id="attemptfinishbutton" class="save paginateNavigateButtons btn-danger" onclick="transferAnswer(&#39;quiz&#39;);return(submitAlert());" style=" background-color: #d9534f;border-color: #d43f3a;color: #fff;">
  </div>
  
  </div>
<br><br>

            </form>
        </div>
        <script language="javascript" type="text/javascript">
            $(document).ready(function(){            
                var loadQuizFlow = $( ".media" ).length
                var syntax = $( ".codeSeg" ).length
                if(syntax > 0){
                    $("head").append(unescape("%3Cscript src='https://cognizant.e-box.co.in/js/syntax_highlighter/shCore.js' type='text/javascript'%3E%3C/script%3E\\n\
                                            %3Cscript src='https://cognizant.e-box.co.in/js/syntax_highlighter/shLegacy.js' type='text/javascript'%3E%3C/script%3En\
                                            %3Cscript src='https://cognizant.e-box.co.in/js/syntax_highlighter/shBrushJScript.js' type='text/javascript'%3E%3C/script%3E\n\
                                            %3Cscript src='https://cognizant.e-box.co.in/js/syntax_highlighter/shBrushCss.js' type='text/javascript'%3E%3C/script%3E\n\
                                            %3Cscript src='https://cognizant.e-box.co.in/js/syntax_highlighter/shBrushXml.js' type='text/javascript'%3E%3C/script%3E\n\
                                            %3Cscript src='https://cognizant.e-box.co.in/js/syntax_highlighter/shBrushjava.js' type='text/javascript'%3E%3C/script%3E\n\
                                            %3Cscript src='https://cognizant.e-box.co.in/js/syntax_highlighter/shBrushcpp.js' type='text/javascript'%3E%3C/script%3E"));
                    $("head").append("<link type='text/css' rel='stylesheet' href='https://cognizant.e-box.co.in/css/syntax_highlighter/shCore.css'/>");
                    $("head").append("<link type='text/css' rel='stylesheet' href='https://cognizant.e-box.co.in/css/syntax_highlighter/shThemeDefault.css'/>");
                    loadSyntaxHighlighter();
                }
                if (loadQuizFlow > 0){
                    $("head").append(unescape("%3Cscript src='https://cognizant.e-box.co.in/js/flowplayer-3.0.3.min.js' type='text/javascript'%3E%3C/script%3E"));
                    var path = "/static/player/flowplayer-3.2.18.swf"
                    loadQuizFlowPlayer(path);
                }
                
                var titleArr = $("#subQues").find(".panel-title")
                var idx = 0;
                $("#subQues").find(".panel-body").each(function() {
                    var crtclass = $(this).find(".amphi-quiz-correct");
                    
                    if($(crtclass).hasClass("amphi-quiz-correct")){
                        $(titleArr[idx]).append("<span class ='glyphicon glyphicon-ok' style='margin-left: 400px;color:green'/>");                  
                    }
                    else if($(this).find(".amphi-quiz-wrong").hasClass("amphi-quiz-wrong")){
                    console.log($(this).find(".amphi-quiz-wrong"));
                        $(titleArr[idx]).append("<span class ='glyphicon glyphicon-remove' style='margin-left: 400px;color:red'/>");                  
                      }
                    idx++;
                    
                });                
                
            });
        </script>
        
        <script>
    function changeReviewMark(attid){    
        var enabled = false;
        if($("#cmn-toggle-monitered-"+attid).attr("checked")){
            enabled = true;
        }
        $.ajax({
        url:'/quizAttempt/markForReview',
        before: function(){
        },
        data: {
              "attid":attid,
              "mark":!enabled,
              "dummy":new Date().getTime()
        },
        type:'post',
        success:function(data, textStatus) {
            if(data=="true"){
                $("#cmn-toggle-monitered-"+attid).attr("checked",true);
            }
            else{
                $("#cmn-toggle-monitered-"+attid).removeAttr("checked");
            }
        }
      });
    }
</script>
                
                <br>
                
                 
                
                
                
                
            </div>
            <div id="showChatDetails" style="width:325px;bottom:93px;max-height: 300px;position:fixed;right:0px;background-color:transparent;"></div>
        </div>        
                
        
           <div class="modal fade" id="meetingDialog" tabindex="-1">
                <div class="modal-dialog" style="width:80%">
                  <div class="modal-content">
                  
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">Create Meeting</h4>
                    </div>
                
                    <div class="modal-body" style="overflow:auto">
                        
            <div id="meetingDiv"></div>
        
                    </div>
            
                        <div class="modal-footer ">
                
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
                        </div>
                    
                  </div>
                </div>
            </div> 
        
        
        
        
          
  </div>
  
    
           <div class="modal fade" id="calandarDialog" tabindex="-1">
                <div class="modal-dialog" style="width:800px;">
                  <div class="modal-content">
                  
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">Calendar</h4>
                    </div>
                
                    <div class="modal-body" style="overflow:auto">
                        
	No Content
    
                    </div>
            
                        <div class="modal-footer ">
                
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
                        </div>
                    
                  </div>
                </div>
            </div> 
        
  
           <div class="modal fade" id="amphiNotificationDialog" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">Notification</h4>
                    </div>
                
                    <div class="modal-body" style="overflow:auto">
                        
	<div id="amphiNotificationDiv"></div>
  
                    </div>
            
                        <div class="modal-footer ">
                
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
                        </div>
                    
                  </div>
                </div>
            </div> 
        
  
 
           <div class="modal fade" id="slotDialog" tabindex="-1">
                <div class="modal-dialog" style="width:70%">
                  <div class="modal-content">
                  
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">Enrolment Schedule</h4>
                    </div>
                
                    <div class="modal-body" style="overflow:auto">
                        
                <div id="mileStoneSessionsDiv"></div>
 
                    </div>
            
                        <div class="modal-footer ">
                
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
                        </div>
                    
                  </div>
                </div>
            </div> 
        
 
 <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12 " style="position: fixed;top: 393px;">
<input type="hidden" name="enableP2PChat" value="false" id="enableP2PChat">
<input type="hidden" name="P2PChatInterval" value="300000" id="P2PChatInterval">
 




<script type="text/javascript" src="./Attempt Session_files/chat.js.download"></script>
<script type="text/javascript" src="./Attempt Session_files/simplewebrtc.bundle.js.download"></script>        
<style>
        .chat_window {
          position: absolute;
          width: calc(100% - 20px);
          max-width: 800px;
          height: 500px;
          border-radius: 10px;
          background-color: #fff;
          left: 50%;
          top: 50%;
          transform: translateX(-50%) translateY(-50%);
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
          background-color: #f8f8f8;
          overflow: hidden;
        }

        .top_menu {
          background-color: #fff;
          width: 100%;
          padding: 20px 0 15px;
          box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
        }
        .top_menu .buttons {
          margin: 3px 0 0 20px;
          position: absolute;
        }
        .top_menu .buttons .button {
          width: 16px;
          height: 16px;
          border-radius: 50%;
          display: inline-block;
          margin-right: 10px;
          position: relative;
          cursor:pointer;
        }
        .top_menu .buttons .button.close {
          background-color: #f5886e;
        }
        .top_menu .buttons .button.minimize {
          background-color: #fdbf68;
        }
        .top_menu .buttons .button.maximize {
          background-color: #a3d063;
        }
        .top_menu .title {
          text-align: center;
          color: #bcbdc0;
          font-size: 20px;
        }

        .amphi_messages {
          position: relative;
          list-style: none;
          padding: 20px 10px 0 10px;
          margin: 0;
          height: 347px;
          overflow: auto;
        }
        .amphi_messages .amphi_message {
          clear: both;
          overflow: hidden;
          margin-bottom: 20px;
          transition: all 0.5s linear;
          opacity: 0;
        }
        .amphi_messages .amphi_message.left .avatar {
          background-color: #f5886e;
          float: left;
        }
        .amphi_messages .amphi_message.left .text_wrapper {
          background-color: #ffe6cb;
          margin-left: 20px;
        }
        .amphi_messages .amphi_message.left .text_wrapper::after, .amphi_messages .amphi_message.left .text_wrapper::before {
          right: 100%;
          border-right-color: #ffe6cb;
        }
        .amphi_messages .amphi_message.left .text {
          color: #c48843;
        }
        .amphi_messages .amphi_message.right .avatar {
          background-color: #fdbf68;
          float: right;
        }
        .amphi_messages .amphi_message.right .text_wrapper {
          background-color: #c7eafc;
          margin-right: 20px;
          float: right;
        }
        .amphi_messages .amphi_message.right .text_wrapper::after, .amphi_messages .amphi_message.right .text_wrapper::before {
          left: 100%;
          border-left-color: #c7eafc;
        }
        .amphi_messages .amphi_message.right .text {
          color: #45829b;
        }
        .amphi_messages .amphi_message.appeared {
          opacity: 1;
        }
        .amphi_messages .amphi_message .avatar {
          width: 60px;
          height: 60px;
          border-radius: 50%;
          display: inline-block;
        }
        .amphi_messages .amphi_message .text_wrapper {
          display: inline-block;
          padding: 20px;
          border-radius: 6px;
          width: calc(100% - 85px);
          min-width: 100px;
          position: relative;
        }
        .amphi_messages .amphi_message .text_wrapper::after, .amphi_messages .amphi_message .text_wrapper:before {
          top: 18px;
          border: solid transparent;
          content: " ";
          height: 0;
          width: 0;
          position: absolute;
          pointer-events: none;
        }
        .amphi_messages .amphi_message .text_wrapper::after {
          border-width: 13px;
          margin-top: 0px;
        }
        .amphi_messages .amphi_message .text_wrapper::before {
          border-width: 15px;
          margin-top: -2px;
        }
        .amphi_messages .amphi_message .text_wrapper .text {
          font-size: 13px;
          font-weight: 100;
        }

        .bottom_wrapper {
          position: relative;
          width: 100%;
          background-color: #fff !important;
          padding: 20px 20px;
          position: absolute;
          bottom: 0;
        }
        .bottom_wrapper .message_input_wrapper {
          display: inline-block;
          height: 50px;
          border-radius: 25px;
          border: 1px solid #bcbdc0;
          width: calc(100% - 160px);
          position: relative;
          padding: 0 20px;
        }
        .bottom_wrapper .message_input_wrapper .message_input {
          border: none;
          height: 100%;
          box-sizing: border-box;
          width: calc(100% - 40px);
          position: absolute;
          outline-width: 0;
          color: gray;
        }
        .bottom_wrapper .send_message,.accept_call,.reject_call{
          width: 140px;
          height: 50px;
          display: inline-block;
          border-radius: 50px;
          color: #fff;
          cursor: pointer;
          transition: all 0.2s linear;
          text-align: center;
        }
        .accept_call{
          background-color: #a3d063;
          border: 2px solid #a3d063; 
        }
        .send_message{
          background-color: #49AFD1;
          border: 2px solid #49AFD1;
        }
        .bottom_wrapper .send_message{
            float:right;
        }
        .reject_call{
            background:red;
            border: 2px solid red;
        }
        .bottom_wrapper,.accept_call:hover {
          color: #a3d063;
          background: none;
        }
        .reject_call:hover{
          color:red;
          background:none;
        }
        .send_message:hover{
          color:#49AFD1;
          background:none;
        }
        .bottom_wrapper .send_message .text,.accept_call .text,.reject_call .text {
          font-size: 13px;
          font-weight: 100;
          display: inline-block;
          line-height: 48px;
        }

        .message_template {
          display: none;
        }
        .text{
            word-wrap: break-word;
        }
        #incoming_call{
            padding:100px 50px;
            background:#F8F8F8;
        }
    </style>



<input type="hidden" name="logMesUrl" value="/userBatch/logMsg" id="logMesUrl">
<input type="hidden" name="fromId" value="" id="fromId">
<input type="hidden" name="toId" value="60598" id="toId">
<input type="hidden" name="logType" value="PUBLIC" id="logType">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 chat-box hidden">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="chat_window">
            <div class="top_menu">
                <div class="buttons">
                    <div class="button close"></div>
                    <div class="button minimize"></div>
                    <!--<div class="button maximize"></div>-->
                </div>
                <div class="title">Peer to Peer Chat</div>
            </div>
            <ul class="amphi_messages"></ul>
            <div id="incoming_call" class="hidden">
                <center>
                        <div id="caller"></div>
                        <div class="reject_call" onclick="declineChatCall($(&#39;#fromId&#39;).val(),60598)">
                            <div class="icon"></div>
                            <div class="text">Reject</div>
                        </div>
                        <div class="accept_call" onclick="acceptChatCall()">
                            <div class="icon"></div>
                            <div class="text">Accept</div>
                        </div>
                </center>
            </div>
<!--            <div class="bottom_wrapper clearfix">
                <div class="message_input_wrapper">
                    <input class="message_input" id="message_input" placeholder="Type your amphi_message here..." />
                </div>
                <div class="send_message" id="send_message">
                    <div class="icon"></div>
                    <div class="text">Send</div>
                </div>
            </div>-->
        </div>
        <div class="message_template">
            <li class="amphi_message">
                <div class="avatar"></div>
                <div class="text_wrapper">
                    <div class="text"></div>
                </div>
            </li>
        </div>
        <script language="javascript" type="text/javascript">
           $(document).ready(function() {
               pollingForPeerToPeerChatFromParticipant(60598);
           });
           
           
           function startChat(meetingCode) {
                $.ajax({
                url: "https://service.xirsys.com/ice",
                data: {
                    ident: "thana",
                    secret: "5827e118-0b89-11e6-8c8c-b18ed17dcab4",
                    domain: "cognizant.e-box.co.in",
                    application: "default",
                    room: "default",
                    secure: 1
                },
                success: function (data, status) {
                    peerConnectionConfig = data.d;
                    joinRoom(meetingCode,'Abhinav Kumar',true,false,false,'');
                }
            });
            
            
        }
        </script>
    </div>
</div>

 </div>
    
  <div id="footer" style="" class="amphi_cap_footer">
        
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <span style="float:left;white-space: nowrap">      
      
        
      
      <a href="http://www.cognizant.com/" target="_blank">Cognizant Technology Solutions</a>
    </span>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">      
    <span style="float:right;white-space: nowrap">
      Powered by E-Box
<script>
var allIntakeDetailLoaded = false;
</script>
    </span>
  </div>
</div>
<!-- test-->

                
  </div>
  <div id="sideBarContents" class="box" style="display:none;z-index: 1000;position: absolute;top:-200px;">
         
                                
    

                       
                              
  </div>




    
    
    <div class="modal fade" id="processDialog" role="dialog" data-backdrop="static">
      <div class="modal-dialog processingDialog">  
        <div class="modal-content">         
          <div class="modal-body">        
            <div class="imageLoading" style="float:left"></div>
              <div style="float:left;padding-top:16px;padding-left:10px;font-size:14px;color:#00698D;">Please wait, your request is being processed... Thank You.</div>
              <div style="clear:both"></div>
            </div>            
        </div>
      </div>
    </div>

 <div></div>
 <div class="modal fade" id="processDialogMute" role="dialog" data-backdrop="static">
  <div class="modal-dialog processingDialog">  
    <div class="modal-content" style="display: none;">            
    </div>
  </div>
</div>

 <div class="modal fade" id="errorDialog" tabindex="-1" role="dialog" data-backdrop="static">
  <div class="modal-dialog processingDialog">  
    <div class="modal-content">         
      <div class="modal-body">        
        <div class="imageLoading" style="float:left"></div>
          <a class="pull-right" onclick="hideWait()" style="font-weight: bold;font-size: 14px;margin-right: 10px;color: #000;cursor: pointer;text-decoration: none">X</a>
          <div style="float:left;padding-top:16px;padding-left:10px" id="errorDialogContent"></div>
          <div style="clear:both"></div>
        </div>            
    </div>
  </div>
</div>
 
 
  <div class="modal fade" id="amphimessageDialog" role="dialog" data-backdrop="static">
  <div class="modal-dialog">  
    <div class="modal-content">   
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Message</h4>
        </div>
      <div class="modal-body">        
          <div id="amphimessageDialogContent"></div>
        </div>   
        <div class="modal-footer ">            
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>         
    </div>
  </div>
</div>
 
  <div class="modal fade" id="amphiConfirmDialogModal" role="dialog" data-backdrop="static">
  <div class="modal-dialog">  
    <div class="modal-content">   
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Are you Sure?</h4>
        </div>
      <div class="modal-body">        
          <div id="amphiConfirmDialogDiv" style="font-size: 18px;"></div>
        </div>   
        <div class="modal-footer ">            
           <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
           <button type="button" id="amphiConfirmDialogYes" class="btn btn-success" onclick="amphiConfirmStatus = true;" data-dismiss="modal">Ok</button>
         </div>         
    </div>
  </div>
</div>
<script src="./Attempt Session_files/bundle-ui_defer.js.download" type="text/javascript"></script>


























 
<script>
function changeTheme(theme){
      $.ajax({
            url:'/user/setTheme',
            success:function(){
              window.location.reload(false);
            },
            data: {
                  "theme":theme
            },
            type:'post'
      });
}
$(document).ready(function(){
  $("#footer").show();
  $("#content").css({'padding-top':5});
});
  </script>
  
  
    
    <input type="hidden" name="amphiSearchboxIgnoreDefaultWords" value="" id="amphiSearchboxIgnoreDefaultWords">
    <script>
        var expireTimeOutInterval
        $(".popup-modal").mouseover(function(){
            clearInterval(expireTimeOutInterval)
        });
        $(".popup-modal").mouseout(function(){
            startTokenTimeoutInterval()
        });
    </script>   
    
        <script>
         var time = 5*60*1000;
         var showOfflineNotification = true;
         userOnlineFn('/user/online','https://cognizant.e-box.co.in/user/logout',time);
        </script>  
    



              
  </body></html>
