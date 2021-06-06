const incrementa = document.getElementById("incrementa");
const decrementa = document.getElementById("decrementa");
const quantidade = document.getElementById("quantidade");

console.log(incrementa);
let counter = 0;
function incrementar(){
    incrementa.addEventListener("click", e => {
        
        
        quantidade.innerText = counter;
        counter++;
        
    })
}