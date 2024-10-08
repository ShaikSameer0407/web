var mongodb=require("mongodb");
var MongoClient=mongodb.MongoClient;
var url='mongodb://localhost:27017/';
MongoClient.connect(url, function(error, databases){
if(error){
throw error;
}
var nodtst = databases.db("exp8");
nodtst.collection("studentlist").findOne({name:'Shivani'}, function(err, result) {
if (err) throw err;
console.log("one record is find now....."+result.name + ", " + result.address + ", " +
result.orderdata);
databases.close();
})
})
