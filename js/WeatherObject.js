
console.log("main.js gorillapower");
var Teller=null;
function toontijd () {
var nu = new Date();
var uren = nu.getHours();
if (uren <=9) {
uren = "0"+uren }
var minuten = nu.getMinutes();
if (minuten <=9) {
minuten = "0"+minuten }
var seconden = nu.getSeconds();
if (seconden <=9) {
seconden = "0"+seconden }

var tijdWaarde = "" + uren;
tijdWaarde += ":"+minuten;
tijdWaarde += ":"+seconden;
console.log (tijdWaarde);
document.getElementById('klokbalk').innerHTML=tijdWaarde;
teller =
setTimeout("toontijd()",1000);
}

toontijd();