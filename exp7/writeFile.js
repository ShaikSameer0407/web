const fs=require("fs");
 fs.writeFile('data.txt',"hello Node",(err)=>{
 if(err){
 console.log(err)
 }
 })