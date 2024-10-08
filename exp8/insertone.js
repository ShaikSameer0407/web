var mongodb = require('mongodb');
var mongoClient = mongodb.MongoClient;
var url = "mongodb://localhost:27017/";
mongoClient.connect(url, function(err, databases) {
if (err)
{
throw err;
}
var nodetestDB = databases.db("exp8"); //here
var customersCollection = nodetestDB.collection("studentlist");
var customer = {_id:111, name:"Santosh Kumar" , address: "B-222, Sector19, NOIDA",
orderdata:"Arrow Shirt"};
customersCollection.insertOne(customer, function(error, response) {
if (error) {
throw error;
}
console.log("1 document inserted");
databases.close();
});
});
