function sair() {
    localStorage.removeItem("userLogado")
    localStorage.removeItem("token")
    window.location.href = 'index.html'
}

function check() {
        if(localStorage.getItem("token") == null){
        window.location.href = 'index.html'
    }
}
