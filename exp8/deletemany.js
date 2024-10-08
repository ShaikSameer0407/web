const { MongoClient } = require('mongodb'); // Destructure the MongoClient import
const url = 'mongodb://localhost:27017/';

MongoClient.connect(url, { useNewUrlParser: true, useUnifiedTopology: true }, function(error, client) {
    if (error) {
        throw error;
    }
    
    const db = client.db('exp8');
    const deleteQuery = {}; // Empty query to delete all documents
    
    db.collection('studentlist').deleteMany(deleteQuery, function(err, response) {
        if (err) {
            throw err;
        }
        
        console.log(response.deletedCount + " document(s) deleted successfully...");
        client.close(); // Ensure to close the client connection
    });
});
