function filtragem(escolha){
    var item = document.getElementById('item-'+escolha).innerHTML;
    document.getElementById('selectInput').value = item;
}

function dropdown(index){
    var element = document.getElementById('dropdown');
    var display = ['block', 'none'];
    element.style.display = display[index];

    var t = ['0px', '0px, -10px'];

    setTimeout(function(){
        element.style.transform = 'translate('+t[index]+')';
    }, 0); 
}