document.getElementById('style1').addEventListener('click', function(){
    var table=document.getElementById('tb_s1');
    var rownum=document.getElementById('numRow').value;
    var colnum=document.getElementById('numCol').value;
    table.innerHTML='';
    table.style.border="1px solid";
    for(var i=0;i<rownum;i++){
        var tr = document.createElement('tr');
        for(var j=0;j<colnum;j++){
            var td = document.createElement('td');
            td.innerHTML=i+""+j;
            td.style.border="1px solid"
            tr.appendChild(td);
        }
        table.appendChild(tr);
    }
});
document.getElementById('style2').addEventListener('click', function(){
    var table=document.getElementById('tb_s2');
    var rownum=document.getElementById('numRow').value;
    var colnum=document.getElementById('numCol').value;
    table.innerHTML='';
    table.style.border="1px solid";
    for(var i=0;i<rownum;i++){
        var tr = document.createElement('tr');
        for(var j=0;j<colnum;j++){
            var td = document.createElement('td');
            if((j+1)%2!=0){
                td.style.color="red";
            }
            td.innerHTML=i+""+j;
            td.style.border="1px solid black"
            tr.appendChild(td);
        }
        table.appendChild(tr);
    }
});
document.getElementById('style3').addEventListener('click', function(){
    var table=document.getElementById('tb_s3');
    var rownum=document.getElementById('numRow').value;
    var colnum=document.getElementById('numCol').value;
    table.innerHTML='';
    table.style.border="1px solid";
    for(var i=0;i<rownum;i++){
        var tr = document.createElement('tr');
        for(var j=0;j<colnum;j++){
            var td = document.createElement('td');
            if(i==j){
                td.style.color="red";
            }
            td.innerHTML=i+""+j;
            td.style.border="1px solid black"
            tr.appendChild(td);
        }
        table.appendChild(tr);
    }
});
document.getElementById('clear').addEventListener('click', function(){
    document.getElementById('numRow').value=null;
    document.getElementById('numCol').value=null;
    document.getElementById('tb_s1').innerHTML=''
    document.getElementById('tb_s2').innerHTML=''
    document.getElementById('tb_s3').innerHTML='';
});