<!DOCTYPE html>
<html lang="en">
<!-- POWERED BY HAKANNET55 -->
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.w3-float-1{float:right!important;}
.w3-float-2{float:left!important;}
.w3-margin-1{margin:2px!important;}
.w3-margin-2{margin:4px!important;}
.w3-margin-3{margin:8px!important;}
.w3-margin-4{margin:10px!important;}
.w3-margin-5{margin:12px!important;}
.w3-padding-1{padding:2px!important;}
.w3-padding-2{padding:4px!important;}
.w3-padding-3{padding:8px!important;}
.w3-padding-4{padding:10px!important;}
.w3-padding-5{padding:12px!important;}
.w3-padding{padding:12px!important;}
.w3-margin{margin:12px!important;}
.w3-inline{
	display:inline-block!important;
}
.no_pointer{
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	cursor:default;
}
nav .mbr-table-cell > a.nav-link,{
margin-left:5px!important;
}
nav .mbr-table-cell > .btn{
	margin-right:3px;
	margin-left:3px;
}
nav .container{
padding:0px!important;
margin:0!important;
width:100vw!important;
min-width:100vw!important;
padding-right:35px!important;
}
nav.navbar{
	background:#da3737!important;
}
.badge1{
	font-family:'arial';
	font-size:0.83em;
	color:rgb(55,55,55);
	float:right;
	display:inline-block;
}
table{
	font-family:'arial';
	font-size:1em;
}
table:nth-child(1) thead,table:nth-child(2) thead{
	background:rgb(199,35,35);color:white;
}
</style>
</head>
<div class='w3-padding' style="background:rgb(230,230,230);">
<h3 class='w3-margin w3-padding w3-white no_pointer'><div style='height:100%;margin-right:8px;' class='w3-padding-1 no_pointer w3-red w3-inline w3-text-red'>.</div>TYT-YKS Puan Hesaplama</h3>
<div style="max-width:600px;margin:auto;" class='w3-block  w3-margin-bottom'>

<table class='table table-hover w3-white'>
<thead><tr><th>TYT-Sınavı</th><th>Net</th></tr></thead>
<tbody>
<tr><td>Türkçe</td><td><input type='number' value="3" data-kod="trk" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
<tr><td>Sosyal</td><td><input type='number' value="3" data-kod="sos" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
<tr><td>Matematik</td><td><input type='number' value="3" data-kod="mat" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
<tr><td>Fen</td><td><input type='number' value="3" data-kod="fen" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
</tbody>
</table>

<table class='table table-hover w3-white' >
<thead><tr><th>AYT-Sınavı</th><th>Net</th></tr></thead>
<tbody>
<tr><td>TÜRK DİLİ Ve EDEBİYAT <span class='badge1'>24 Soru</span></td><td><input value="3" data-kod="trk" type='number' style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
<tr><td>TARİH-1 <span class='badge1'>10 Soru</span></td><td><input value="3" type='number' data-kod="tar" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
<tr><td>COĞRAFYA-1 <span class='badge1'>6 Soru</span></td><td><input value="3" type='number' data-kod="cog" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
<tr><td>TARİH-2 <span class='badge1'>11 Soru</span></td><td><input value="3" type='number' data-kod="tar" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
<tr><td>COĞRAFYA-2 <span class='badge1'>11 Soru</span></td><td><input value="3" type='number' data-kod="cog" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
<tr><td>FELSEFE <span class='badge1'>12 Soru</span></td><td><input value="3" type='number' data-kod="fel" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
<tr><td>DİN KÜLTÜRÜ <span class='badge1'>6 Soru</span></td><td><input value="3" type='number' data-kod="din" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
<tr><td>MATEMATİK <span class='badge1'>40 Soru</span></td><td><input value="3" type='number' data-kod="mat" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
<tr><td>FİZİK <span class='badge1'>14 Soru</span></td><td><input value="3" type='number' data-kod="fiz" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
<tr><td>KİMYA <span class='badge1'>13 Soru</span></td><td><input value="3" type='number' data-kod="kim" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
<tr><td>BİYOLOJİ <span class='badge1'>13 Soru</span></td><td><input value="3" type='number' data-kod="bio" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
<tr><td><b>Diploma Notu(Tahmin)</b></td><td><input class='diploma' value="" type='number' data-kod="bio" style='width:100px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' /></td></tr>
</tbody>
</table>

<div onclick="hesapla();" class='btn w3-block w3-white w3-padding-3 w3-hover-red w3-margin-top w3-margin-bottom' style='font-size:1em;'>HESAPLA ></div>
</div>
<br>
<table class='table table-bordered w3-red' style='border:1px solid grey;margin-top:32px;width:100%;' >
<thead><tr><th>Sonuç:</th><th>Puan</th></tr></thead>
<tbody>
<tr style="background:rgba(233,233,233,0.3);" ><td><b>TYT-Sonuç:</b></td><td></td></tr>
<tr style="background:rgba(233,233,233,0.3);" ><td><b>AYT EA:</b></td><td></td></tr>
<tr style="background:rgba(233,233,233,0.3);" ><td><b>AYT Say:</b></td><td></td></tr>
<tr style="background:rgba(233,233,233,0.3);" ><td><b>Diploma notu:</b></td><td></td></tr>
<tr style="background:rgba(233,233,233,0.3);" ><td><b>YKS-EA:</b></td><td></td></tr>
<tr style="background:rgba(233,233,233,0.3);" ><td><b>YKS-Say:</b></td><td></td></tr>
</tbody>
</table>
<div style='margin:auto;width:100%;' >
<center style="margin:0;padding:0;">
<p style="margin:auto;padding:5px;">Powered by 
<a href="https://www.linkedin.com/in/hakan-kuru-a92974a6/" style="margin:5px;padding:5px;" class="btn btn-danger btn-xs">Hakannet55</a></p>
</center>
</div>

</div>

<script>
$('title').text("Sınav Hesaplama/ TYT-Puan hesaplama");

function hesapla(){
var v1,v2,v3,v4,v5,v6,v7,a,aa,p1,p2,ek,tyt,ea,say,obp,yks1,yks2;
var tar=$('.table');
var formul={'ek':100,'tyt':{'trk':3.333,'sos':3.333,'mat':3.333,'fen':3.333},'ayt':{'say':{'tyt':{'trk':1.851,'mat':1.851,'sos':0.997,'fen':0.997},'ayt':{'mat':3.421,'fiz':1.88,'kim':1.88,'bio':1.88}},'ea':{'tyt':{'trk':1.851,'mat':1.851,'sos':0.997,'fen':0.997},'ayt':{'mat':3.275,'trk':2.849,'tar':0.885,'cog':0.635}}}};
var sonc=$('.table').eq(2);
obp=(parseFloat($('.diploma').val())*0.12)*5;
if($.isNumeric(obp)==false){obp=0;}
ek=formul.ek;

yks1=0;yks2=0;
ea=0;say=0;

p1=0;
tar.eq(0).find('input').each(function(a,aa){
if($(aa).attr('data-kod')){
	v3=$(aa).val();
	v1=$(aa).attr('data-kod');
	v2=eval("formul.tyt."+v1);
	if($.isNumeric(v2) && $.isNumeric(v3)){
		p1=p1+(parseFloat(v2)*parseFloat(v3));
	}
}
});
tyt=(p1+ek).toFixed(3);

p1=0;
tar.eq(1).find('input').each(function(a,aa){
if($(aa).attr('data-kod')){
	v3=$(aa).val();
	v1=$(aa).attr('data-kod');
	v2=eval("formul.ayt.say.ayt."+v1);
	if($.isNumeric(v2) && $.isNumeric(v3)){
		p1=p1+(parseFloat(v2)*parseFloat(v3));
	}
}
});
say=(p1+ek).toFixed(3);

p1=0;
tar.eq(1).find('input').each(function(a,aa){
if($(aa).attr('data-kod')){
	v3=$(aa).val();
	v1=$(aa).attr('data-kod');
	v2=eval("formul.ayt.ea.ayt."+v1);
	if($.isNumeric(v2) && $.isNumeric(v3)){
		p1=p1+(parseFloat(v2)*parseFloat(v3));
	}
}
});
ea=(p1+ek).toFixed(3);

yks1=((tyt/100*40)+((ea/100)*60*1.121)+obp).toFixed(3);
yks2=((tyt/100*40)+((say/100)*60*1.121)+obp).toFixed(3);

sonc.find('tbody tr').eq(0).find('td:last-child').text(tyt);
sonc.find('tbody tr').eq(1).find('td:last-child').text(ea);
sonc.find('tbody tr').eq(2).find('td:last-child').text(say);
sonc.find('tbody tr').eq(3).find('td:last-child').text(obp);
sonc.find('tbody tr').eq(4).find('td:last-child').text(yks1);
sonc.find('tbody tr').eq(5).find('td:last-child').text(yks2);
}


</script>
</body>
</html>