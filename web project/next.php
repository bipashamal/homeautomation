
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>



<body>
<div class="table-title">
              <h3>click on the light you want to on </h3>
            </div>
                <table class="table-fill">
                   <thead>
                       <tr>
                        <th class="text-left">Room No.</th>
						<th class="text-left">Number of Lights</th>
						<th class="text-left">state on/off</th>
                        </tr>
                   </thead>
                   <tbody class="table-hover">
				   <tr>
                    <td class="text-left">1.</td>
                    <td class="text-left">4</td>
					<td class="text-left"><a data-toggle="modal" data-target="#myModal" data-title="bulb1">1</a><br><a data-toggle="modal" data-target="#myModal" data-title="bulb2">2</a><br><a data-toggle="modal" data-target="#myModal" data-title="bulb3">3</a><br><a data-toggle="modal" data-target="#myModal" data-title="bulb4">4</a><br></td>
                    
                    </tr>
                    <tr>
                    <td class="text-left">2.</td>
                    <td class="text-left">3</td>
					<td class="text-left"><a data-toggle="modal" data-target="#myModal" data-title="bulb1">1</a><br><a data-toggle="modal" data-target="#myModal" data-title="bulb2">2</a><br><a data-toggle="modal" data-target="#myModal" data-title="bulb2">3</a><br></td>
                    </tr>
					<td class="text-left">3.</td>
                    <td class="text-left">4</td>
					<td class="text-left"><a data-toggle="modal" data-target="#myModal" data-title="bulb1">1</a><br><a data-toggle="modal" data-target="#myModal" data-title="bulb2">2</a><br><a data-toggle="modal" data-target="#myModal" data-title="bulb3">3</a><br><a data-toggle="modal" data-target="#myModal" data-title="bulb4">4</a><br></td>
                    </tr>
			</tbody>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$("#myModal").on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);  // Button that triggered the modal
        var titleData = button.data('title'); // Extract value from data-* attributes
        $(this).find('.modal-title').text(titleData + '  Put on/off');
    });
});
</script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
<script type="text/javascript">
$(document).ready(function(){
	$("#myModal").on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);  // Button that triggered the modal
        var titleData = button.data('title'); // Extract value from data-* attributes
        $(this).find('.modal-title').text(titleData + '  Put on/off');
    });
});
</script>
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1 class="modal-title">Put on/off</h1>
                </div>
                <div class="modal-body" align="center">
                  <img id="myImage" onclick="changeImage()" src="pic_bulboff.gif" width="100" height="180">

<p>Click the light bulb to turn on/off the light.</p>

<script>
function changeImage() {
    var image = document.getElementById('myImage');
    if (image.src.match("bulbon")) {
        image.src = "pic_bulboff.gif";
    } else {
        image.src = "pic_bulbon.gif";
    }
}
</script>

		  </div>

                </div>
              <!--  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Send</button>
                </div> -->
            </div>
        </div>
    </div>
</div>  

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>
</html>
<style>

.cf:before, .cf:after{
    content:"";
    display:table;
}

.cf:after{
    clear:both;
}

.cf{
    zoom:1;
}    
.form-wrapper {
    width: 1350px;
	height: 280px;
    padding: 15px;
    margin: 130px auto 50px auto;
    background: #d9b3ff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2),  
        inset 0 -12px 30px rgba(0,0,0,0.2);
    border-radius: 5px;
    box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
}

/* Form text input */

.form-wrapper input {
    width: 300px;
    height: 40px;
	margin-top: 50px;
    padding: 10px 5px;
    float: left;    
    font: bold 15px 'lucida sans', 'trebuchet MS', 'Tahoma';
    border: 0;
    background: #eee;
    border-radius: 3px 0 0 3px;      
}

.form-wrapper input:focus {
    outline: 0;
    background: #fff;
    box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
}

.form-wrapper input::-webkit-input-placeholder {
   color: #999;
   font-weight: normal;
   font-style: italic;
}

.form-wrapper input:-moz-placeholder {
    color: #999;
    font-weight: normal;
    font-style: italic;
}

.form-wrapper input:-ms-input-placeholder {
    color: #999;
    font-weight: normal;
    font-style: italic;
}    

/* Form submit button */
.form-wrapper button {
    overflow: visible;
    position: relative;
    float: right;
    border: 0;
    padding: 0;
    cursor: pointer;
    height: 40px;
    width: 110px;
	margin-top: 50px;
    font: bold 15px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';
    color: #fff;
    text-transform: uppercase;
    background: #d83c3c;
    border-radius: 0 3px 3px 0;      
    text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
}   
  
.form-wrapper button:hover{		
    background: #e54040;
}	
  
.form-wrapper button:active,
.form-wrapper button:focus{   
    background: #c42f2f;
	outline: 0;   
}

.form-wrapper button:before { /* left arrow */
    content: '';
    position: absolute;
    border-width: 8px 8px 8px 0;
    border-style: solid solid solid none;
    border-color: transparent #d83c3c transparent;
    top: 12px;
    left: -6px;
}

.form-wrapper button:hover:before{
    border-right-color: #e54040;
}

.form-wrapper button:focus:before,
.form-wrapper button:active:before{
        border-right-color: #c42f2f;
}      

.form-wrapper button::-moz-focus-inner { /* remove extra button spacing for Mozilla Firefox */
    border: 0;
    padding: 0;
}    





@import url(http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
  background-color: white;
  font-family: "Roboto", helvetica, arial, sans-serif;
  font-size: 12px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}

div.table-title {
  display: block;
  margin:auto;
  max-width: 600px;
  width: 50%;
}

.table-title h3 {
   color: #000066;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:auto;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#d1e0e0;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
  border-bottom: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#d1e0e0;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}


</style>



