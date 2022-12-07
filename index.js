const formulario = document.forms.namedItem("form");
const cxAlta = document.getElementById("func");
const cxAlta1 = document.getElementById("func1");

/*formulario.addEventListener("click" ,function(e){
e.preventDefault();

console.log(cxAlta);


});
*/
//acessando funçao dentro do elemento
cxAlta.oninput = function handleInput(e) {
    var ss = e.target.selectionStart;
    var se = e.target.selectionEnd;
    e.target.value = e.target.value.toUpperCase();
    e.target.selectionStart = ss;
    e.target.selectionEnd = se;
 }
 cxAlta1.oninput = function handleInput(e) {
    var ss = e.target.selectionStart;
    var se = e.target.selectionEnd;
    e.target.value = e.target.value.toUpperCase();
    e.target.selectionStart = ss;
    e.target.selectionEnd = se;
 }


