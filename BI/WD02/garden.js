var main = document.getElementById('main');
document.getElementById('plant').addEventListener('click', function(){
    var count = document.getElementById('count').value;
    for(var i=0;i<count;i++){
        var temp = Math.floor(Math.random()*10);
        var img = document.createElement('img');
        img.style.width="200px";
        img.style.height="150px";
        if(temp%2==0){
            img.src="flowers1.jpg";
        }else{
            img.src="flowers2.jpg";
        }
        main.appendChild(img);
    }
});
document.getElementById('clear').addEventListener('click', function(){
    main.innerHTML='';
});