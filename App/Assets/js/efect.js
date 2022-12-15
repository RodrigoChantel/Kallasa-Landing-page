function Recuperar(){
    document.getElementById('menu2').style.width = '20%';
    document.getElementById('box').style.overflow = 'auto';
    document.getElementById('box').style.maxHeight = '60vh';
    document.getElementById('botao01').style.display = 'none';
    document.getElementById('botao02').style.display = 'block';
    document.getElementById('box2').style.display = 'block';

    //document.getElementById('box').style.maxHeight = '90vh';
}

function Recuperar2(){
    document.getElementById('menu2').style.width = 'auto';
    document.getElementById('box').style.overflow = 'none';
    document.getElementById('box').style.maxHeight = '90vh';
    document.getElementById('botao01').style.display = 'block';
    document.getElementById('botao02').style.display = 'none';
    document.getElementById('box2').style.display = 'none';
}