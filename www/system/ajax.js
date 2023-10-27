let id = 0
window.addEventListener("load" , () =>{
  id = 0
  buscraImg()
})

window.addEventListener("scroll", () => {
    let scrolled = document.documentElement.scrollHeight-window.innerHeight;
    let scroll = window.scrollY;
    if(Math.ceil(scroll) >= scrolled){
      buscraImg()
    };})


function buscraImg() {
    let data = new FormData
    data.append('pass', '1234');
    data.append('id', id);
    fetch('http://localhost/www/system/bajarFotos.php',{
      method: "POST",
      body: data
    })
  .then(res => res.json())
  .then(res => {
    for (let i = 0; i < Object.keys(res).length; i++) {
      document.getElementById("imagenes").innerHTML += `<img class="img-fluid" src=http://localhost/www/imagenes/${res[i].Direccion} alt="">`;
    }
    let a  = res[(Object.keys(res).length-1)].ID;
    id= a;
  }) 
  }