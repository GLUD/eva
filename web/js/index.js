var mydate = new Date();
var year = mydate.getYear();
if (year < 1000)
year += 1900;
var day = mydate.getDay();
var month = mydate.getMonth() + 1;
if (month < 10)
month = "0" + month;
var daym = mydate.getDate();
if (daym < 10)
daym = "0" + daym;
   if (month == 1) {month = "Enero";}
   if (month == 2) {month = "Febrero";}
   if (month == 3) {month = "Marzo";}
   if (month == 4) {month = "Abril";}
   if (month == 5) {month = "Mayo";}
   if (month == 6) {month = "Junio";}
   if (month == 7) {month = "Julio";}
   if (month == 8) {month = "Agosto";}
   if (month == 9) {month = "Septiembre";}
   if (month == 10) {month = "Noviembre";}
   if (month == 11) {month = "Diciembre";}
  

document.write("<small><font color='000000' face=' Calligraffitti'><b>" + daym + " / " + month + " / " + year + "</b></font></small>")
