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
if (month == 5) {
month = "May";
}
if (month == 6) {
month = "June";
}
document.write("<small><font color='000000' face=' Calligraffitti'><b>" + daym + " / " + month + " / " + year + "</b></font></small>")
