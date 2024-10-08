const fs=require("fs");
 fs.writeFile('data.txt',"hello Nod;i;c;e",'utf8',(err)=>{
 if(err){
 console.log(err)
 }
 })