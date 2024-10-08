const fs=require('fs');
 fs.readFile("data.txt",{encoding:'utf8'},(err,data)=>{
 if(err){
 console.log("Error : ", err);
 }
 else{
 console.log(data); // .toString() not required
 }
})