let btn = document.querySelector('#entrar')

if(localStorage.getItem("token") == null){
    btn.innerHTML = 'Entrar'
}
else{
    btn.setAttribute("href", "home.html")
    btn.innerHTML = 'Home'
}