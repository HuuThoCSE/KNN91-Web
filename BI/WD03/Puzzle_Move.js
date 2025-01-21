var data=[];
while(data.length<9){
    var temp=Math.floor(Math.random()*10);
    if(temp<9 && data.indexOf(temp)<0){
        data.push(temp);
    }
}
console.log(data);
var index='';
for(var i=0;i<3;i++){
    var tr=document.createElement('tr');
    for(var j=0;j<3;j++){
        var td=document.createElement('td');
        td.innerHTML=' ';
        var temp=data.pop();
        td.id=i+"-"+j;
        if(temp!=0){
            td.innerHTML=temp;
        }
        td.addEventListener('click',function(e){
            if(index==''){
                index=e.target.id;
                document.getElementById(index).style.color="Red";
            }else if(index==e.target.id){
                document.getElementById(index).style.color="Black";
                index='';
            }else{
                if(e.target.innerHTML==' ' && index[0]==e.target.id[0] && (Number(index[2])+1==Number(e.target.id[2])||Number(index[2])-1==Number(e.target.id[2]))){
                    var temp=e.target.innerHTML;
                    e.target.innerHTML=document.getElementById(index).innerHTML;
                    document.getElementById(index).innerHTML=temp;
                    document.getElementById(index).style.color="Black";
                    index='';
                }
                if(e.target.innerHTML==' '&& index[2]==e.target.id[2] && (Number(index[0])+1==Number(e.target.id[0])||Number(index[0])-1==Number(e.target.id[0]))){
                    var temp=e.target.innerHTML;
                    e.target.innerHTML=document.getElementById(index).innerHTML;
                    document.getElementById(index).innerHTML=temp;
                    document.getElementById(index).style.color="Black";
                    index='';
                }
            }
        });
        tr.appendChild(td);
    }
    document.getElementById('game').appendChild(tr);
}